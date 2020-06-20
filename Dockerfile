FROM php:7.3-apache
COPY src/ /var/www/html/
FROM php:7.3-apache
RUN docker-php-ext-install mysqli
EXPOSE 80
