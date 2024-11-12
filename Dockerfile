# När du ska skapa en docker-composer, använd detta.
FROM php:8.2-apache 
RUN docker-php-ext-install pdo pdo_mysql
COPY ./src /var/www/html/src
# FROM php:8.2-apache  - använder PHP 8.2 tillsammans med Apache-webbservern.
# RUN docker-php-ext-install pdo pdo_mysql  - installerar tillägg för att möjliggöra anslutningar till MySQL-databaser via PDO i PHP.

# Set the ServerName directive in Apache to suppress the warning
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf