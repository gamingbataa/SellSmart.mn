<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<style>
   body {
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
      padding: 0;
      background: #fefefe;
    }

    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px 40px;
      background-color: #ffffff;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }

    .logo a {
      font-size: 24px;
      font-weight: bold;
      color: #2b2b2b;
      text-decoration: none;
    }

    nav a {
      margin-left: 20px;
      color: #444;
      text-decoration: none;
      font-weight: 500;
      transition: color 0.3s;
    }

    nav a:hover {
      color: #009688;
    }

    nav {
      display: flex;
      align-items: center;
    }

    @media (max-width: 768px) {
      header {
        flex-direction: column;
        align-items: flex-start;
      }

      nav {
        flex-direction: column;
        width: 100%;
      }

      nav a {
        margin: 10px 0;
      }
    }

    </style>
<!DOCTYPE html>
<html lang="mn">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SellSmart</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
  <div class="logo"><strong><a href="header.php" style="text-decoration:none;color:#333;">SellSmart</a></strong></div>
  <nav>
    <!--<a href="/SellSmart.mn/index.html">Нүүр</a>-->
    <a href="index.html">🏠Нүүр</a>
      <a href="product-detail.php">📦Бүтээгдэхүүн</a>
      <!--<a href="#">🧾Ангилал</a>-->
      <div class="dropdown">
        <style>
           body {
      margin: 0;
      font-family: Arial, sans-serif;
    }

    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #f6f9ff;
      padding: 10px 40px;
    }

    .navbar a {
      text-decoration: none;
      color: #333;
      padding: 10px 15px;
      font-size: 16px;
    }

    .navbar a:hover {
      background-color: #e0e0e0;
      border-radius: 6px;
    }

    .menu {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    /* Dropdown */
    .dropdown {
      position: relative;
      display: inline-block;
    }

    .dropdown-btn {
      background: none;
      border: none;
      font-size: 16px;
      cursor: pointer;
      padding: 10px 15px;
      color: #333;
    }

    .dropdown-btn:hover {
      background-color: #e0e0e0;
      border-radius: 6px;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: white;
      min-width: 180px;
      box-shadow: 0px 8px 16px rgba(0,0,0,0.2);
      z-index: 1;
    }

    .dropdown-content a {
      color: #333;
      padding: 10px 16px;
      text-decoration: none;
      display: block;
    }

    .dropdown-content a:hover {
      background-color: #f2f2f2;
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }
          </style>
        <button class="dropdown-btn"><i class="fas fa-file-alt"></i>🧾Ангилал ▾</button>
        <div class="dropdown-content">
          <a href="barilgiin-material.html">🏗 Барилгын материал</a>
          <a href="tsahilgaan.html">💡 Цахилгаан</a>
          <a href="bagaz-heregsel.html">🔧 Багаж хэрэгсэл</a>
          <a href="budag.html">🎨 Будаг</a>
        </div>
      </div>
      <a href="cart.php">🛒Сагс</a>
      <a href="checkout.php">💳Төлбөр</a>
      <a href="salbar.php">📍Салбар</a>
      <a href="login.php">🔑Нэвтрэх</a>
      <a href="register.php">📝Бүртгүүлэх</a>
    <!--<a href="/products.php">Бүтээгдэхүүн</a>
    <a href="/cart.php">Сагс</a>
    <a href="checkout.php">Төлбөр</a>
    <?php if (isset($_SESSION['user_id'])): ?>
      <a href="/logout.php">Гарах</a>
    <?php else: ?>
      <a href="/login.php">Нэвтрэх</a>
      <a href="/register.php">Бүртгүүлэх</a>-->
    <?php endif; ?>
  </nav>
</header>
    </body>
    </html>