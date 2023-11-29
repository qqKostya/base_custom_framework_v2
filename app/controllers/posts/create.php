<?php

/**
 * @var myfrm\Db $db
 */


use myfrm\Validator;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $fillable = ['title', 'excerpt', 'content'];
    $data = load($fillable);

//    [
//        'title' => 'Explicabo Enim corp',
//        'excerpt' => 'Expl',
//        'content' => 'Explicabo Enim corp',
//        'email' => 'mail@mail.com',
//        'password' => '123456',
//        'repassword' => '123456',
//    ],

    // validation
    $validator = new Validator();
    $validation = $validator->validate($data, [
        'title' => [
            'required' => true,
            'min' => 5,
            'max' => 190
        ],
        'excerpt' => [
            'required' => true,
            'min' => 10,
            'max' => 190
        ],
        'content' => [
            'required' => true,
            'min' => 100,
        ]
    ]);

    if (!$validation->hasErrors()) {
        if (empty($errors)) {
            if ($db->query("INSERT INTO post (`title`, `excerpt`, `content`) VALUES (:title, :excerpt, :content)", $data)) {
                $_SESSION['success'] = 'OK';
            } else {
                $_SESSION['error'] = 'Error Db';
            }
            redirect();
        }
    }

}

$title = "My blog :: New post";
require_once VIEWS . '/posts/create.tpl.php';
