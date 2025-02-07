FROM php:8.4

WORKDIR /usr/src/php

RUN apt-get update && \
    apt-get upgrade -y && \
    apt-get install -y git

RUN apt-get install -y \
        libzip-dev \
        zip \
  && docker-php-ext-install zip

RUN apt-get update && apt install -y libpq-dev libpng-dev && docker-php-ext-install pdo pdo_mysql zip sockets

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN pecl install xdebug && docker-php-ext-enable xdebug

#RUN touch /usr/local/etc/php/php.ini && \
#    echo "extension=sockets" >> /usr/local/etc/php/php.ini
