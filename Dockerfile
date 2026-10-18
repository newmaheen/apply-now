FROM php:8.2-fpm-alpine

# প্রয়োজনীয় এক্সটেনশন ইনস্টল
RUN apk add --no-cache \
    nginx \
    libpng-dev \
    libxml2-dev \
    postgresql-dev \
    oniguruma-dev \
    icu-dev \
    zip \
    unzip \
    git \
    curl

RUN docker-php-ext-install pdo pdo_pgsql mbstring exif pcntl bcmath gd intl

# Composer ইনস্টল
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY . .

RUN composer install --no-dev --optimize-autoloader

# পারমিশন সেট
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Nginx কনফিগারেশন
COPY .docker/nginx.conf /etc/nginx/http.d/default.conf

EXPOSE 80

CMD php artisan config:cache && \
    php artisan route:cache && \
    php artisan view:cache && \
    php artisan migrate --force && \
    php artisan storage:link && \
    php-fpm -D && \
    nginx -g "daemon off;"