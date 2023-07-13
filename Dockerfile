
FROM php:8.1.5-fpm

RUN docker-php-ext-install pdo pdo_mysql