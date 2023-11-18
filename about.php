<?php
$title = 'My blog :: About';
$post = '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet odio excepturi repudiandae totam! Saepe libero voluptates, culpa ullam illo explicabo harum vel alias quos quas autem ipsam, vero nulla dignissimos?</p>
<p>Magnam, ratione eaque laudantium soluta incidunt est voluptatum repellat quisquam aspernatur, quas minima. Error voluptatem laboriosam aut. Ratione, nesciunt, quasi, esse vero quisquam quia maxime maiores perferendis ducimus doloribus magni.</p>
<p>Itaque distinctio iste quasi quas quaerat. Quae assumenda vitae sequi fugiat beatae quibusdam enim officia. Dicta fugit aliquam distinctio at rem inventore modi quidem ullam a omnis. Doloremque, est natus!</p>';

$recent_posts = [
    1 => [
        'title' => 'An item',
        'slug' => lcfirst(str_replace(' ', '-', 'An item')),
    ],
    2 => [
        'title' => 'A second item',
        'slug' => lcfirst(str_replace(' ', '-', 'A second item')),
    ],
    3 => [
        'title' => 'A third item',
        'slug' => lcfirst(str_replace(' ', '-', 'A third item')),
    ],
    4 => [
        'title' => 'A fourth item',
        'slug' => lcfirst(str_replace(' ', '-', 'A fourth item')),
    ],
    5 => [
        'title' => 'And a fifth one',
        'slug' => lcfirst(str_replace(' ', '-', 'And a fifth one')),
    ],
];

require_once 'about.tpl.php';
