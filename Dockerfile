FROM php:8.2-fpm-alpine

# ১. প্রয়োজনীয় সিস্টেম প্যাকেজ ও পিএইচপি এক্সটেনশন লাইব্রেরি
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

# ২. PHP আপলোড লিমিট বৃদ্ধি (20MB ফাইল এবং 25MB পোস্ট সাইজ)
RUN echo "upload_max_filesize = 20M" > /usr/local/etc/php/conf.d/uploads.ini && \
    echo "post_max_size = 25M" >> /usr/local/etc/php/conf.d/uploads.ini && \
    echo "memory_limit = 256M" >> /usr/local/etc/php/conf.d/uploads.ini

# ৩. Composer কপি
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
ENV COMPOSER_ALLOW_SUPERUSER=1

WORKDIR /var/www/html

# ৪. সোর্স কোড কপি
COPY . .

# ৫. ডিপেনডেন্সি ইনস্টল (--no-scripts ফ্ল্যাগ যোগ করা হয়েছে যাতে package:discover বিল্ড টাইমে রান না হয়)
RUN composer install --no-dev --no-interaction --prefer-dist --optimize-autoloader --ignore-platform-reqs --no-scripts

# ৬. পারমিশন সেট
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# ৭. Nginx কনফিগারেশন
COPY .docker/nginx.conf /etc/nginx/http.d/default.conf

EXPOSE 80

# ৮. রানটাইমে প্যাকেজ ডিসকভারি, মাইগ্রেশন এবং সার্ভার স্টার্ট
CMD php artisan package:discover --ansi && \
    php artisan config:cache && \
    php artisan route:cache && \
    php artisan view:cache && \
    php artisan migrate --force && \
    php artisan storage:link && \
    php-fpm -D && \
    nginx -g "daemon off;"