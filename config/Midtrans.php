<?php

return [
    'server_key' => env('MIDTRANS_SERVER_KEY', 'SB-Mid-server-ZKtv_ZU-fK8ziit38faelY7l'),
    'client_key' => env('MIDTRANS_CLIENT_KEY', 'SB-Mid-client-InAptMP-IiRIi7qB'),
    'is_production' => env('MIDTRANS_IS_PRODUCTION', false),
    'is_sanitized' => env('MIDTRANS_IS_SANITIZED', true),
    'is_3ds' => env('MIDTRANS_IS_3DS', true),
];