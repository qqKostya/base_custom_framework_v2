<?php

/**
 * @var Db $db
 */

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $fillable = ['title', 'excerpt', 'content'];

    $db->query("INSERT INTO post (`title`, `excerpt`, `content`) VALUES (?, ?, ?)", [
        $_POST['title'], $_POST['excerpt'], $_POST['content']
    ]);
}

$title = "My blog :: New post";
require_once VIEWS . '/posts-create.tpl.php';
