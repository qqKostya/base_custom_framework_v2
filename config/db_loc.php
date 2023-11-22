<?php

return [
    'host' => 'localhost',
    'port' => 8889,
    'dbname' => 'blog',
    'username' => 'root',
    'password' => 'root',
    'charset' => 'utf8',
    'options' => [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]
];
