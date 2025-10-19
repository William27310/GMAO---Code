FROM php:8.2-apache

# Installer les extensions PHP nécessaires (ex: MySQL)
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Activer mod_rewrite (utile pour Laravel/Symfony)
RUN a2enmod rewrite
