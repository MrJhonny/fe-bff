FROM php:7.4-apache

# Instalar extensiones necesarias
RUN apt-get update && apt-get install -y \
    libpng-dev libjpeg-dev libfreetype6-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd mysqli

# Configurar permisos
RUN chown -R www-data:www-data /var/www/html

# Mantener el servicio en primer plano
CMD ["apachectl", "-D", "FOREGROUND"]
