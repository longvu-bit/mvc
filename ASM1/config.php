<?php
// config.php

$host = 'localhost'; // Địa chỉ máy chủ
$dbname = 'news'; // Tên cơ sở dữ liệu
$username = 'root'; // Tên đăng nhập
$password = ''; // Mật khẩu

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>