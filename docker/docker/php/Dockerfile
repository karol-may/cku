FROM php:8.2-fpm
WORKDIR /var/www/html

# Instalacja rozszerzenia PDO MySQL
RUN docker-php-ext-install pdo pdo_mysql

EXPOSE 9000
CMD ["php-fpm"]