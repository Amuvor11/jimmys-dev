# Laravel app for Render (PHP 8)
FROM php:8.0-cli

RUN apt-get update && apt-get install -y \
    git unzip libzip-dev libpng-dev \
    && docker-php-ext-install zip gd pdo pdo_mysql \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /app

COPY . .

RUN composer install --no-dev --no-interaction --optimize-autoloader \
    && chmod -R 775 storage bootstrap/cache

EXPOSE 8000

# Render injects PORT at runtime
CMD sh -c "php artisan serve --host=0.0.0.0 --port=${PORT:-8000}"
