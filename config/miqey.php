<?php

return [
    'api_key' => env('MIQEY_API_KEY'),

    'webhook_secret' => env('MIQEY_WEBHOOK_SECRET'),

    'webhook_endpoint' => env('MIQEY_WEBHOOK_ENDPOINT'),

    'user_model' => env('MIQEY_USER_MODEL', '\App\Models\User'),

    'user_phone_column' => 'phone_number',

    'remember_user' => env('MIQEY_REMEMBER_USER', true),
];
