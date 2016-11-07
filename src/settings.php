<?php
return [
    'settings' => [

        // Slim settings
        'displayErrorDetails' => getenv("MY_ENV") !== 'production' ? true : false,

        // Database settings
        'PDO' => [
            'host' => getenv("MY_DB_HOST"),
            'user' => getenv("MY_DB_USER"),
            'password' => getenv("MY_DB_PASS"),
            'dbname' => getenv("MY_DB_NAME"),
        ],
    ],
];
