<?php
$host = "localhost";      // MySQL сервер
$dbname = "CodeMarketProduct";     // Мэдээллийн сангийн нэр
$username = "root";       // Хэрэглэгчийн нэр
$password = "";           // Нууц үг

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    // PDO алдааг барьдаг горим
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
