FROM php:7.2-apache

LABEL Lucas Marques <lucasmarques73@hotmail.com>

RUN apt-get update && apt-get install -y libpq-dev && docker-php-ext-install pdo pdo_pgsql

RUN a2enmod rewrite

COPY app.conf /etc/apache2/sites-enabled/app.conf