<?php

/**
 * @var Db $db
 */

$id = $_GET['id'] ?? 0;
$post = $db->query("SELECT * FROM post WHERE id = :id", [':id' => $id])->findOrFail();


$title = "My blog :: {$post['title']}";
require_once VIEWS . '/post.tpl.php';
