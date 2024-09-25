<?php
// controllers/ArticleController.php

require_once './models/Article.php';

class ArticleController {
    private $articleModel;

    public function __construct($db) {
        $this->articleModel = new Article($db);
    }

    // Hàm để hiển thị danh sách bài viết
    public function index() {
        $articles = $this->articleModel->getAllArticles();
        require_once 'views/articles/index.php'; // Gọi View để hiển thị danh sách bài viết
    }
}