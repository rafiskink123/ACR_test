FROM php:8.3-apache

# Install common database extensions
RUN docker-php-ext-install pdo pdo_mysql

WORKDIR /var/www/html

# CHANGE: Copy specifically from the src folder into Apache
COPY src/ /var/www/html/

EXPOSE 80
CMD ["apache2-foreground"]
