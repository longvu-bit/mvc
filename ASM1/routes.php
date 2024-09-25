<?php
// routes.php

require_once './config.php';
require_once './controllers/ArticleController.php';

// Xử lý yêu cầu URL
$request = $_SERVER['REQUEST_URI']; // lấy URL hiện tại 

// Điều hướng theo URL
if ($request == '/articles') {
    $controller = new ArticleController($db);
    $controller->index();
}else {
    echo "404 Not Found"; // hiển thị lỗi 404 nếu ko tìm thấy routes
}