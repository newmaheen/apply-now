FROM php:8.2-fpm-alpine

# ১. প্রয়োজনীয় সিস্টেম প্যাকেজ ও পিএইচপি এক্সটেনশন লাইব্রেরি
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

RUN docker-php-ext-install pdo pdo_pgsql mbstring exif pcntl bcmath gd intl zip

# ২. Composer কপি
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
ENV COMPOSER_ALLOW_SUPERUSER=1

WORKDIR /var/www/html

# ৩. সোর্স কোড কপি
COPY . .

# ৪. ডিপেনডেন্সি ইনস্টল (--no-scripts ফ্ল্যাগ যোগ করা হয়েছে যাতে package:discover বিল্ড টাইমে রান না হয়)
RUN composer install --no-dev --no-interaction --prefer-dist --optimize-autoloader --ignore-platform-reqs --no-scripts

# ৫. পারমিশন সেট
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# ৬. Nginx কনফিগারেশন
COPY .docker/nginx.conf /etc/nginx/http.d/default.conf

EXPOSE 80

# ৭. রানটাইমে প্যাকেজ ডিসকভারি, মাইগ্রেশন এবং সার্ভার স্টার্ট
CMD php artisan package:discover --ansi && \
    php artisan config:cache && \
    php artisan route:cache && \
    php artisan view:cache && \
    php artisan migrate --force && \
    php artisan storage:link && \
    php-fpm -D && \
    nginx -g "daemon off;"