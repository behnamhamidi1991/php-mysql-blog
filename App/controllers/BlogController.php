<?php

namespace App\Controllers;

use Framework\Database;

class BlogController {
    protected $db;

    public function __construct()
    {
        $config = require basePath('config/db.php');
        $this->db = new Database($config);
    }

    // Show all posts
    public function index()
    {
        $posts = $this->db->query('SELECT * FROM posts')->fetchAll();

        loadView('blog/index', [
            'posts' => $posts
        ]);
    }

    // Show create form
    public function create()
    {
        loadView('blog/create');
    }

    // Show a single post
    public function show()
    {
        $id = $_GET['id'];

        $params = [
            'id' => $id
        ];

        $post = $this->db->query('SELECT * FROM posts WHERE id = :id', $params)->fetch();

        loadView('blog/show', [
            'post' => $post
        ]);
    }
}