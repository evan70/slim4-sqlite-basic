<?php

return [
    'token' => [
        //'secret_key' => 'yoursupersecretkey',
        'secret_key' => ["acme" => "supersecretkeyyoushouldnotcommittogithub"],
        "algorithm" => ["acme" => "HS256"],
        'path' => '/api',
        'ignore' => ['/api/login'],
        'secure' => false, // set true if you use HTTPS
        'expires_in' => 3600, // time when JWT expires (in seconds)
    ]
];
