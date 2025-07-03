#!/bin/bash

# Laravel إعداد
php artisan config:cache
php artisan route:cache
php artisan view:cache

# شغل السيرفر بالطريقة اللي Railway يتعامل معاها
php -d variables_order=EGPCS -S 0.0.0.0:${PORT} -t public
