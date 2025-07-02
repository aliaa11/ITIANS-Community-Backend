#!/bin/bash

# Laravel production setup
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Start server
php -S 0.0.0.0:$PORT -t public
