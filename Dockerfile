FROM php:8.1.0-fpm

RUN apt-get update

WORKDIR /var/www

EXPOSE 8000

CMD ["php", "-S", "0.0.0.0:8000"]
