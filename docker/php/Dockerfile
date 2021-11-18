FROM php:8.0.6-fpm

COPY docker/php/php.ini /usr/local/etc/php/

RUN apt-get update && apt-get install -y \
            libfreetype6-dev \
            libjpeg62-turbo-dev \
            libpng-dev \
            libpq-dev \
            zip \
            git \
            iputils-ping

# FRONTEND
ARG DEBIAN_FRONTEND=noninteractive
RUN apt-get update && apt-get install -y apt-utils 2>&1 | \
    grep -v "^debconf: delaying package configuration, since apt-utils.*"


#INSTALL NODEJS
RUN curl -sL https://deb.nodesource.com/setup_14.x | bash -
RUN apt-get install -y --no-install-recommends nodejs

#INSTALL YARN
RUN npm install -g yarn

#INSTALL SUPERVISOR
RUN apt-get install -y --no-install-recommends \
    supervisor

#INSTALL XDEBUG
RUN yes | pecl install xdebug \
    && echo "zend_extension=$(find /usr/local/lib/php/extensions/ -name xdebug.so)" > /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.xdebug.mode = develop" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.start_with_request=yes" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.client_port = 9000" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_handler = "dbgp"" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.xdebug.discover_client_host = 0" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.client_host = "host.docker.internal"" >> /usr/local/etc/php/conf.d/xdebug.ini

#INSTALL COMPOSER
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin/ --filename=composer
