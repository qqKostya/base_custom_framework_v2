<?php

/**
 * @var Db $db
 */

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $fillable = ['title', 'excerpt', 'content'];
    $data = load($fillable);

    // validation
    $errors = [];
    if (empty(trim($data['title']))) {
        $errors['title'] = 'Title is required';
    }

    if (empty(trim($data['excerpt']))) {
        $errors['excerpt'] = 'Excerpt is required';
    }

    if (empty(trim($data['content']))) {
        $errors['content'] = 'Content is required';
    }

    if (empty($errors)) {
        $db->query("INSERT INTO post (`title`, `excerpt`, `content`) VALUES (?, ?, ?)", [
            $_POST['title'], $_POST['excerpt'], $_POST['content']
        ]);
    }

}

$title = "My blog :: New post";
require_once VIEWS . '/posts-create.tpl.php';
