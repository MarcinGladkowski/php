FROM php:7.4

WORKDIR /usr/src/php

RUN docker-php-ext-install sysvmsg sysvsem sysvsem

CMD ["bash"]