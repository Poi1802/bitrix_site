FROM php:8.0-fpm

RUN apt-get update && apt-get install -y \
  apt-utils \
  libpq-dev \
  libfreetype6-dev \
  libjpeg62-turbo-dev \
  libmcrypt-dev \
  libpng-dev \
  libwebp-dev \
  libpng-dev \
  libzip-dev \
  vim \
  zip unzip \
  git && \
  docker-php-ext-install pdo_mysql && \
  docker-php-ext-install mysqli && \
  docker-php-ext-install bcmath && \
  docker-php-ext-install gd && \
  docker-php-ext-install zip && \
  apt-get clean && \
  rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

# configure, install and enable all php packages, format updated with Tianon's comment below
RUN docker-php-ext-configure gd --enable-gd --with-webp --with-jpeg --with-freetype;
RUN docker-php-ext-install -j$(nproc) gd zip

COPY ./_docker/app/php.ini /usr/local/etc/php/conf.d/php.ini

# Install composer
ENV COMPOSER_ALLOW_SUPERUSER=1
RUN curl -sS https://getcomposer.org/installer | php -- \
  --filename=composer \
  --install-dir=/usr/local/bin

# RUN curl -sL https://deb.nodesource.com/setup_16.x -o /tmp/nodesource_setup.sh \ 
#   bash /tmp/nodesource_setup.sh \ 
#   apt install nodejs

WORKDIR /var/www/bitrix
