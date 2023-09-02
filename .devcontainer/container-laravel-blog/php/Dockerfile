FROM php:8.2-fpm

# 環境の更新と必要なモジュールをインストール
RUN apt-get update \
&& apt-get install -y \
git \
zip \
unzip \
vim \
libfreetype-dev \
libjpeg62-turbo-dev \
libpng-dev

# PHPモジュールのインストール
RUN docker-php-ext-configure gd --with-freetype --with-jpeg
RUN docker-php-ext-install pdo_mysql mysqli -j$(nproc) gd

RUN pecl install xdebug \
   && docker-php-ext-enable xdebug

# Composerをインストール
RUN cd /usr/bin && curl -s http://getcomposer.org/installer | php && ln -s /usr/bin/composer.phar /usr/bin/composer

# Node.jsをインストール
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash -
RUN apt-get install -y nodejs
RUN npm install -g npm@latest

WORKDIR /var/www/html
