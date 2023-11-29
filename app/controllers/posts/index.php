<?php

global $db;

/**
 * @var Db $db
 */

use myfrm\core\classes\Db;

$title = 'My blog :: Home';

$posts = $db->query("SELECT * FROM post ORDER BY id DESC")->findAll();
$recent_posts = $db->query("SELECT * FROM post ORDER BY id DESC LIMIT 3 ")->findAll();


require_once VIEWS . '/posts/index.tpl.php';