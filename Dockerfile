FROM php:8.2-apache
COPY site/ /var/www/html/
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
EXPOSE 80
