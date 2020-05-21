FROM php:7.4.5-fpm
RUN apt-get update && apt-get install -y nano libpng-dev libzip-dev zlib1g-dev libxml2-dev git


RUN docker-php-ext-install pdo_mysql bcmath xml zip gd
COPY ./entrypoint.sh /opt/bin/entrypoint.sh
RUN chmod +x /opt/bin/entrypoint.sh

CMD ["/opt/bin/entrypoint.sh"]
