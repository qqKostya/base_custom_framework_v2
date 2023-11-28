<?php

session_start();

use myfrm\Db;


require_once __DIR__ . '/../vendor/autoload.php';

require_once dirname(__DIR__) . '/config/config.php';
require_once CORE . '/func.php';


$db_config = require_once CONFIG . '/db_loc.php';
$db = (Db::getInstance())->getConnection($db_config);

require_once CORE . '/router.php';
