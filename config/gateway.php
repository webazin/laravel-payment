<?php

return [

    //-------------------------------
    // Timezone for insert dates in database
    // If you want Gateway not set timezone, just leave it empty
    //--------------------------------
    'timezone' => 'Asia/Tehran',
    'default_pay' => env('DEFULT_PAY'),

    //--------------------------------
    // Zarinpal gateway
    //--------------------------------
    'zarinpal' => [
        'merchant-id' => env("ZARINPALMERCHANT"),
        'type' => 'zarin-gate',             // Types: [zarin-gate || normal]
        'callback-url' => '/',
        'server' => 'germany',                // Servers: [germany || iran || test]
        'email' => 'email@gmail.com',
        'mobile' => '09xxxxxxxxx',
        'description' => 'description',
    ],

    //--------------------------------
    // Mellat gateway
    //--------------------------------
    'mellat' => [
        'username' => env('MELLAT_USERNAME'),
        'password' => env('MELLAT_PASSWORD'),
        'terminalId' => env('MELLAT_TERMINAL_ID'),
        'callback-url' => '/'
    ],

    //--------------------------------
    // Saman gateway
    //--------------------------------
    'saman' => [
        'merchant' => env('SAMAN_MERCHANT'),
        'password' => env('SAMAN_PASSWORD'),
        'callback-url' => '/',
    ],

    //--------------------------------
    // PayIr gateway
    //--------------------------------
    'payir' => [
        'api' => env('PAYIRAPI'),
        'callback-url' => '/'
    ],

    //--------------------------------
    // Sadad gateway
    //--------------------------------
    'sadad' => [
        'merchant' => env('SADAD_MERCHANT'),
        'transactionKey' => env('SADAD_TRANSACTIONKEY'),
        'terminalId' => env('SADAD_TERMINALID'),
        'callback-url' => '/'
    ],

    //--------------------------------
    // Parsian gateway
    //--------------------------------
    'parsian' => [
        'pin' => env('PARSIAN_PIN'),
        'callback-url' => '/'
    ],
    //--------------------------------
    // Pasargad gateway
    //--------------------------------
    'pasargad' => [
        'terminalId' => env('PASARGAD_TERMINALID'),
        'merchantId' => env('PASARGAD_MERCHANTID'),
        'certificate-path' => storage_path('gateway/pasargad/certificate.xml'),
        'callback-url' => '/gateway/callback/pasargad'
    ],

    //--------------------------------
    // Asan Pardakht gateway
    //--------------------------------
    'asanpardakht' => [
        'merchantId' => env('ASANPARDAKHT_MERCHANTID'),
        'merchantConfigId' => env('ASANPARDAKHT_MERCHANT_CONFIGID'),
        'username' => env('ASANPARDAKHT_USERNAME'),
        'password' => env('ASANPARDAKHT_PASSWORD'),
        'key' => env('ASANPARDAKHT_KEY'),
        'iv' => env('ASANPARDAKHT_IV'),
        'callback-url' => '/',
    ],

    'idpay' => [
        'api-key' => env('IDPAYAPI'),
        'callback-url' => '/',
        'name' => 'name',
        'email' => 'email@gmail.com',
        'phone' => '09xxxxxxxxx',
        'description' => 'description',
    ],

    'nextpay' => [
        'api-token' => env('NEXTPAYAPI'),
        'api-key' => env('NEXTPAYAPI'),
        'callback-url' => '/',
    ],

    'paystar' => [
        'pin' => env('PAYSTARPIN'),
        'callback-url' => '/'
    ],

    //--------------------------------
    // Paypal gateway
    //--------------------------------
    'paypal' => [
        // Default product name that appear on paypal payment items
        'default_product_name' => 'My Product',
        'default_shipment_price' => 0,
        // set your paypal credential
        'client_id' => env('PAYPAL_CLIENTID'),
        'secret' => env('PAYPAL_SECRET'),
        'settings' => [
            'mode' => 'sandbox', //'sandbox' or 'live'
            'http.ConnectionTimeOut' => 30,
            'log.LogEnabled' => true,
            'log.FileName' => storage_path() . '/logs/paypal.log',
            /**
             * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
             *
             * Logging is most verbose in the 'FINE' level and decreases as you
             * proceed towards ERROR
             */
            'call_back_url' => '/gateway/callback/paypal',
            'log.LogLevel' => 'FINE'

        ]
    ],

    'payping' => [
        'api' => env('PAYPINGAPI'),
        'callback-url' => '/'
    ],

    'bahamta' => [
        'api_key' => env('WEBPAY_API_KEY', ''),
        'callback_url' => env('WEBPAY_CALLBACK_URL', '')
    ],
    'yekpay' => [
        'merchantId' => env('YEKPAY_MERCHANTID', '')
    ],
    'zibal' => [
        'merchant' => env('ZIBAL_MERCHANT', '')
    ],
    'mrpay' => [
        'pin' => env('MRPAY_PIN', '')
    ],
    'poolam' => [
        'api_key' => env('POOLAM_API_KEY', '')
    ],
    'vendar' => [
        'api_key' => env('VENDAR_API_KEY', '')
    ],
    //-------------------------------
    // Tables names
    //--------------------------------
    'table' => 'gateway_transactions',
];
