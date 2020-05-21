#!/bin/bash

php-fpm --daemonize

echo "Running the queue"
php artisan queue:work --verbose --tries=3 --timeout=90