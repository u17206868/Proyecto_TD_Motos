FROM php:8.2-apache

RUN apt-get update -y && apt-get install -y zip unzip

# From download Composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php -r "if (hash_file('sha384', 'composer-setup.php') === 'dac665fdc30fdd8ec78b38b9800061b4150413ff2e3b6f88543c636f7cd84f6db9189d43a81e5503cda447da73c7e5b6') { echo 'Installer verified'.PHP_EOL; } else { echo 'Installer corrupt'.PHP_EOL; unlink('composer-setup.php'); exit(1); }"
RUN php composer-setup.php
RUN php -r "unlink('composer-setup.php');"
RUN mv composer.phar /usr/local/bin/composer
RUN docker-php-ext-install pdo_mysql mysqli

WORKDIR /app

COPY . .

# From install dependencies
RUN echo 'extension=zip' >> /usr/local/etc/php/php.ini
RUN composer install

EXPOSE 8000

# From run app
# Sleep from wait deploy from MySQL database
CMD sleep 20 && \
    php artisan migrate --force && \
    php artisan db:seed --force && \
    php artisan key:generate && \
    php artisan serve --host=0.0.0.0 --port=8000

# From test, uncomment
# CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
