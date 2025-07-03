#!/bin/bash
php artisan config:clear
php artisan config:cache
php artisan route:cache
php artisan view:cache
vendor/bin/heroku-php-apache2 public/