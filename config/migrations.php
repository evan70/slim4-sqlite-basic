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
           'name' => '/home/evan/www/php/slim-basic-app-admin-panel/database/slim-app',
           'suffix' => '.db',
            //'port' => '3306',
            //'name' => 'slim-app',
            //'user' => 'root',
            //'pass' => 'root',
            'charset' => 'utf8'
       ]
   ]
];