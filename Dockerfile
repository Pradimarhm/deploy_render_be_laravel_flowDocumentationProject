FROM php:8.3-fpm-alpine

# Install system dependencies & PHP extensions
RUN apk add --no-cache \
    nginx \
    supervisor \
    curl \
    libpng-dev \
    libxml2-dev \
    zip \
    unzip \
    git \
    oniguruma-dev \
    libzip-dev \
    postgresql-dev

RUN docker-php-ext-install pdo pdo_mysql pdo_pgsql mbstring exif pcntl bcmath gd zip

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

COPY . .

# Install dependencies tanpa dev packages
RUN composer install --no-dev --optimize-autoloader

# Set permission folder storage & cache
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache \
    && chmod -R 775 /var/www/storage /var/www/bootstrap/cache

# Expose port yang digunakan Render
EXPOSE 8080

# Jalankan server bawaan Laravel / Octane / Artisan Serve
CMD php artisan config:clear && php artisan route:clear && php artisan serve --host=0.0.0.0 --port=8080
