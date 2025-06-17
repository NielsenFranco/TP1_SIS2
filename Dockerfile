FROM php:8.1-apache

# Instalar la extensión mysqli
RUN docker-php-ext-install mysqli

# Copiar todo el proyecto al contenedor
COPY . /var/www/html/

EXPOSE 80
