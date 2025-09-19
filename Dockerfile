FROM php:8.2.12-apache
WORKDIR /var/www/html
RUN apt-get update && apt-get install -y libmariadb-dev
RUN chmod -R a+rw /var
RUN docker-php-ext-install mysqli
