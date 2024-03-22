FROM php:7.2-apache
WORKDIR /the/workdir/path
COPY . var/www/html
EXPOSE 80
