<?php

return [

    /*
     |--------------------------------------------------------------------------
     | Default User Table Name
     |--------------------------------------------------------------------------
     |
     | Here you should specify name of your users table in database.
     |
     */
    'user_table' => 'users',

    /*
     |--------------------------------------------------------------------------
     | Default Verification Tokens Table Name
     |--------------------------------------------------------------------------
     |
     | Here you should specify name of your verification tokens table in database.
     | This table will held all information about created verification tokens for users.
     |
     */
    'token_table' => 'mobile_verification_tokens',

    /*
     |--------------------------------------------------------------------------
     | Verification Token Length
     |--------------------------------------------------------------------------
     |
     | Here you can specify length of verification tokens which will send to users.
     |
     */
    'token_length' => 5,

    /*
     |--------------------------------------------------------------------------
     | Verification Token Lifetime
     |--------------------------------------------------------------------------
     |
     | Here you can specify lifetime of verification tokens (in minutes) which will send to users.
     |
     */
    'token_lifetime' => 5,

    /*
     |--------------------------------------------------------------------------
     | SMS Client (REQUIRED)
     |--------------------------------------------------------------------------
     |
     | Here you should specify your implemented "SMS Client" class. This class is
     | responsible for sending SMS to users.
     |
     */
    'sms_client' => '',

    /*
     |--------------------------------------------------------------------------
     | Controller Routes
     |--------------------------------------------------------------------------
     |
     | Here you can specify your desired routes for verify and resend actions.
     |
     */
    'routes1' => [

        'verify' => '/auth/mobile/verify',
        'resend' => '/auth/mobile/resend',

    ]
];
