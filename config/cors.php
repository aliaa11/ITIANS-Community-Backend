<?php

return [
    'paths' => ['api/*', 'sanctum/csrf-cookie'],

'allowed_methods' => ['*', 'OPTIONS'], // تأكد من تضمين OPTIONS
   'allowed_origins' => [
    'https://itians-community-frontend.vercel.app/',
    'https://itians-community-backend-production.up.railway.app',
],
    'allowed_origins_patterns' => [],
    'allowed_headers' => ['*'],
    'exposed_headers' => [],
    'max_age' => 0,
    'supports_credentials' => true, // This is crucial for credentials
];
