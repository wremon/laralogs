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

    'user_model' => env('LARALOGS_USER_MODEL', '\App\Models\User'),
    'user_column' => env('LARALOGS_USER_COLUMN', 'email'),

    /**
     * App name
     */
    'source' => env('LARALOGS_APP_NAME', env('APP_NAME')),
];
