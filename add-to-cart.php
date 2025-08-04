<?php
session_start();
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Жишээ бараа ID: 101
$id = $_GET['id'];
$name = $_GET['name'];
$price = $_GET['price'];

if (!isset($_SESSION['cart'][$id])) {
    $_SESSION['cart'][$id] = ['name' => $name, 'price' => $price, 'qty' => 1];
} else {
    $_SESSION['cart'][$id]['qty'] += 1;
}

header("Location: cart.php");
