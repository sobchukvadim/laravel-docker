FROM php:8.0-fpm

# Set working directory
WORKDIR /var/www/html/laravel/

RUN apt-get update \
&& docker-php-ext-install mysqli pdo pdo_mysql

RUN apt-get install -y \
        libzip-dev \
        zip \
  && docker-php-ext-configure zip --with-libzip \
  && docker-php-ext-install zip

RUN apt-get update && apt-get install -y libxml2-dev \
  && docker-php-ext-install soap

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Add user for laravel application
#RUN groupadd -g 1000 www
#RUN useradd -u 1000 -ms /bin/bash -g www www
## Copy existing application directory permissions
#COPY --chown=www:www . /var/www
# Change current user to www
#USER www

# Assign permissions of the working directory to the www-data user
#RUN chown -R www-data:www-data \
#        /var/www/html/fdxadmin/storage \
#        /var/www/html/fdxadmin/bootstrap/cache


