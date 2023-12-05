<?php

use myfrm\Db;

$db = \myfrm\App::get(Db::class);

$id = $_GET['id'] ?? 0;
$post = $db->query("SELECT * FROM post WHERE id = :id", [':id' => $id])->findOrFail();


$title = "My blog :: {$post['title']}";
require_once VIEWS . '/posts/show.tpl.php';
