FROM php:7.4-fpm

# 環境の更新と必要なモジュールをインストール
RUN apt-get update \
&& apt-get install -y \
git \
zip \
unzip \
vim \
libpng-dev \
libpq-dev

# PHPモジュールのインストール
RUN docker-php-ext-install pdo_mysql mysqli

RUN pecl install xdebug \
   && docker-php-ext-enable xdebug

# Composerをインストール
RUN cd /usr/bin && curl -s http://getcomposer.org/installer | php && ln -s /usr/bin/composer.phar /usr/bin/composer

# Node.jsをインストール
RUN curl -fsSL https://deb.nodesource.com/setup_16.x | bash -
RUN apt-get install -y nodejs
RUN npm install -g npm@latest

COPY ./config/php/php.ini /usr/local/etc/php/php.ini

ARG PUID=1000
ENV PUID ${PUID}
ARG PGID=1000
ARG PGID ${PGID}

RUN groupmod -o -g ${PGID} www-data && \
usermod -o -u ${PUID} -g www-data www-data

WORKDIR /var/www/html