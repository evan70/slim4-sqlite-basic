<?php

return [
    // 'driver' => 'mysql',
    // 'host' => 'localhost',
    // 'port' => '3306',
    // 'database' => 'slim4',
    // 'username' => 'evan',
    // 'password' => 'passss',
    // 'charset' => 'utf8'
    'driver' => 'sqlite',
        'database' => database_path('db.sqlite3'),
        'charset' => 'utf8',
        'prefix'    => ''
];
