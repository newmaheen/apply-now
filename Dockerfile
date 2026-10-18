FROM php:8.2-fpm-alpine

# ১. প্রয়োজনীয় সিস্টেম প্যাকেজ ও লাইব্রেরি ইনস্টল
RUN apk add --no-cache \
    nginx \
    libpng-dev \
    libxml2-dev \
    postgresql-dev \
    libzip-dev \
    oniguruma-dev \
    icu-dev \
    zip \
    unzip \
    git \
    curl \
    bash

# ২. পিএইচপি এক্সটেনশন ইনস্টল
RUN docker-php-ext-install pdo pdo_pgsql mbstring exif pcntl bcmath gd intl zip

# ৩. Composer কপি ও গ্লোবাল কনফিগারেশন
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
ENV COMPOSER_ALLOW_SUPERUSER=1

WORKDIR /var/www/html

# ৪. ফাইল কপি
COPY . .

# ৫. ডিপেনডেন্সি ইনস্টল (ignore-platform-reqs সহ)
RUN composer install --no-dev --no-interaction --prefer-dist --optimize-autoloader --ignore-platform-reqs

# ৬. পারমিশন সেট
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# ৭. Nginx কনফিগারেশন
COPY .docker/nginx.conf /etc/nginx/http.d/default.conf

EXPOSE 80

CMD php artisan config:cache && \
    php artisan route:cache && \
    php artisan view:cache && \
    php artisan migrate --force && \
    php artisan storage:link && \
    php-fpm -D && \
    nginx -g "daemon off;"