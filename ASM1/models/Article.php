<?php
// models/Article.php

class Article {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    // Phương thức để lấy tất cả bài viết
    public function getAllArticles() {
        $sql = "SELECT * FROM articles"; // Kiểm tra xem bảng 'articles' có tồn tại trong cơ sở dữ liệu
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}