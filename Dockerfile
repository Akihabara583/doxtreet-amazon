# Используем официальный образ PHP 8.2 с FPM
FROM php:8.2-fpm

# Устанавливаем системные зависимости
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libjpeg-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

# Устанавливаем расширения PHP
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Устанавливаем Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Устанавливаем рабочую директорию
WORKDIR /var/www

# Сначала копируем ВЕСЬ проект
COPY . .

# А потом запускаем Composer. Это должно создать папку /vendor.
RUN composer install --optimize-autoloader --no-dev

# Выставляем права на папки
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

# Открываем порт
EXPOSE 9000
