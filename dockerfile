FROM php:7.4

WORKDIR /usr/src/php

RUN apt-get update && \
    apt-get upgrade -y && \
    apt-get install -y git

RUN docker-php-ext-install pdo pdo_mysql
# semaphores
RUN docker-php-ext-install sysvmsg sysvsem

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

CMD ["bash"]