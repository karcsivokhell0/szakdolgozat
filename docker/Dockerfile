FROM php:8.2-fpm-bullseye AS base

# Set working directory
WORKDIR /var/www

RUN apt-get update && apt-get install -y nano libpng-dev libzip-dev zip zlib1g libjpeg62-turbo-dev libwebp-dev libfreetype6-dev
RUN pecl install xdebug-3.3.2
RUN docker-php-ext-enable xdebug
RUN docker-php-ext-install zip pdo pdo_mysql sockets exif
RUN docker-php-ext-configure gd --with-jpeg --with-webp --with-freetype
RUN docker-php-ext-install gd

RUN apt-get clean && rm -rf /var/lib/apt/lists/* && rm -rf /var/www/html

# Add custom php-fpm settings
RUN rm -f /usr/local/etc/php-fpm.d/www.conf.default
# Choose one of the following configs:
ADD docker/php-fpm-dynamic.conf /usr/local/etc/php-fpm.d/www.conf
# ADD devops/docker/php-fpm-ondemand.conf /usr/local/etc/php-fpm.d/www.conf
# ADD devops/docker/php-fpm-static.conf /usr/local/etc/php-fpm.d/www.conf

# ADD php.ini file
ADD docker/php.ini /usr/local/etc/php/php.ini

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

ENV TZ=Europe/Budapest

# Add user for laravel application
RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www

FROM base AS php

# Copy composer.lock and composer.json
COPY composer.lock composer.json /var/www/

# Copy existing application directory permissions
COPY --chown=www:www . /var/www

RUN php -d COMPOSER_MEMORY_LIMIT=-1 /usr/local/bin/composer install --no-dev

RUN chown -R www:www /var/www

USER www

CMD ["php-fpm"]

FROM node:20 as npm

WORKDIR /app
COPY --from=php /var/www /app
RUN rm -rf /app/vendor

RUN npm install

FROM nginx:alpine as web

RUN apk -U upgrade && apk add --no-cache --repository http://dl-cdn.alpinelinux.org/alpine/edge/community/ \
    tzdata \
    && rm -rf /var/cache/apk/*

ENV TZ=Europe/Budapest

#ADD devops/docker/nginx.conf /etc/nginx/conf.d/default.conf
ADD docker/nginx.conf /etc/nginx/nginx.conf

COPY --from=npm /app /var/www
RUN rm -rf /var/www/docker