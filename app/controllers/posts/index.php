<?php

use myfrm\Db;

$title = 'My blog :: Home';

/**
 * @var \myfrm\Db $db
 */

$db = \myfrm\App::get(Db::class);

$per_page = 3;
$total = $db->query('SELECT COUNT(*) FROM post')->getColumn();
$pages_cnt = ceil($total / $per_page);
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

if ($page < 1) {
    $page = 1;
}

if ($page > $pages_cnt) {
    $page = $pages_cnt;
}

$start = ($page - 1) * $per_page;

$posts = $db->query("SELECT * FROM post ORDER BY id DESC LIMIT $start, $per_page")->findAll();
$recent_posts = $db->query("SELECT * FROM post ORDER BY id DESC LIMIT 3 ")->findAll();


require_once VIEWS . '/posts/index.tpl.php';