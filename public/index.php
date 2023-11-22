<?php

require_once dirname(__DIR__) . '/config/config.php';
require_once CORE . '/func.php';

require_once CORE . '/classes/Db.php';
$db_config = require_once CONFIG . '/db_loc.php';
$db = new Db($db_config);

dd($db);

die;
require_once CORE . '/router.php';
