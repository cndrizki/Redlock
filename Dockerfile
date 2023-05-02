FROM php:8.1-apache
WORKDIR /var/www/html

RUN apt-get update -y && apt-get install -y libmariadb-dev 
RUN docker-php-ext-install mysqli

COPY ./web/ /var/www/html/
COPY redlock-database.sql /docker-entrypoint-initdb.d/redlock-database.sql

RUN chown -R www-data:www-data /var/www/html/ \
    && chmod -R u=rwX,g=rX,o= /var/www/html/