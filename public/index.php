<?php

define("ROOT", dirname(__DIR__));
define("PUBLIC", ROOT . '/public');
define("CORE", ROOT . '/core');
define("APP", ROOT . '/app');
define("CONTROLLERS", APP . '/controllers');
define("VIEWS", APP . '/views');
define("PATH", 'http://localhost:8888');

require_once CORE . '/func.php';

$uri = trim(parse_url($_SERVER['REQUEST_URI'])['path'], '/');

if ($uri === '') {
    require_once CONTROLLERS . '/index.php';
} elseif ($uri === 'about') {
    require_once CONTROLLERS . '/about.php';
}elseif ($uri === 'post') {
    dd('SHOW POST');
} else {
    abort();
}

