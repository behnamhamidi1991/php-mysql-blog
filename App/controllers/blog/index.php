<?php

use Framework\Database;

$config = require basePath('config/db.php');
$db = new Database($config); 

$posts = $db->query('SELECT * FROM posts')->fetchAll();

loadView('blog/index', $data = [
    'posts' => $posts
]);