<?php

return [
    'paths' => [
        'migrations' => database_path('migrations'),
        'seeds' => database_path('seeders')
    ],
   'environments' => [
       'default_migration_table' => 'migrations_log',
       'default_database' => 'slim-app',
       'slim-app' => [
           'adapter' => 'sqlite',
                // 'host' => 'localhost',
                // 'port' => '3306',
                // 'name' => 'slim44',
                // 'user' => 'evan',
                // 'pass' => 'cisielka',
                // 'charset' => 'utf8'
                'name' => database_path('db'),
                'charset' => 'utf8',
                'prefix'    => ''
       ]
   ]
];
