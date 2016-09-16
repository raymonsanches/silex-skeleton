FROM php:7-fpm

RUN apt-get update && \
    apt-get install -y \
        zlib1g-dev \
	libfreetype6-dev \
        libjpeg62-turbo-dev \
        libmcrypt-dev \
        libpng12-dev

RUN docker-php-ext-install pdo pdo_mysql zip mcrypt

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www