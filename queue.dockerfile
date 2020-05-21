FROM php:7.4.5-fpm

RUN apt-get update && apt-get install -y nano libpng-dev libzip-dev zlib1g-dev libxml2-dev libpng-dev libjpeg-dev
RUN docker-php-ext-install pdo_mysql bcmath xml zip gd intl
RUN docker-php-ext-configure gd --with-jpeg

COPY ./queue.sh /opt/bin/entrypoint.sh
RUN chmod +x /opt/bin/entrypoint.sh

# Change current user to www
# USER 1000:1000

CMD ["/opt/bin/entrypoint.sh"]