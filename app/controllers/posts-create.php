<?php

/**
 * @var Db $db
 */

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $fillable = ['title', 'excerpt', 'content'];
    $data = load($fillable);

    // validation
    $errors = [];
    if (empty($data['title'])) {
        $errors['title'] = 'Title is required';
    }

    if (empty($data['excerpt'])) {
        $errors['excerpt'] = 'Excerpt is required';
    }

    if (empty($data['content'])) {
        $errors['content'] = 'Content is required';
    }

    if (empty($errors)) {
        if ($db->query("INSERT INTO post (`title`, `excerpt`, `content`) VALUES (:title, :excerpt, :content)", $data)) {
            echo 'OK';
        } else {
            echo 'DB error';
        }
//        redirect('/posts/create');
    }

}

$title = "My blog :: New post";
require_once VIEWS . '/posts-create.tpl.php';
