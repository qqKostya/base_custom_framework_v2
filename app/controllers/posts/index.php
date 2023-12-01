<?php

use myfrm\Db;

$title = 'My blog :: Home';

$db = \myfrm\App::get(Db::class);

$posts = $db->query("SELECT * FROM post ORDER BY id DESC")->findAll();
$recent_posts = $db->query("SELECT * FROM post ORDER BY id DESC LIMIT 3 ")->findAll();


require_once VIEWS . '/posts/index.tpl.php';