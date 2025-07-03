#!/bin/bash

# Run Laravel optimization commands
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Start Laravel using PHP's built-in server
php -S 0.0.0.0:${PORT:-8080} -t public
