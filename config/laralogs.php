<?php
// config for Wremon/Laralogs
return [
    /**
     * Database connection details
     */
    'db_connection' => env('LARALOGS_DB_CONNECTION'),
    'db_host' => env('LARALOGS_DB_HOST'),
    'db_port' => env('LARALOGS_DB_PORT'),
    'db_database' => env('LARALOGS_DB_DATABASE'),
    'db_username' => env('LARALOGS_DB_USERNAME'),
    'db_password' => env('LARALOGS_DB_PASSWORD'),

    /**
     * App name
     */
    'source' => 'acme',
];
