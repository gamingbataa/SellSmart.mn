<?php include('../backend/db.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Админ хяналтын самбар</title>
  <link rel="stylesheet" href="../style.css" />
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
      background: #f4f6f8;
    }

    header {
      background: #2c3e50;
      color: white;
      padding: 20px;
    }

    nav a {
      color: #ecf0f1;
      text-decoration: none;
      margin-right: 15px;
      font-weight: 500;
    }

    nav a:hover {
      color: #1abc9c;
    }

    main {
      padding: 30px;
    }

    .dashboard-box {
      background: white;
      border-radius: 12px;
      padding: 20px;
      box-shadow: 0 4px 6px rgba(0,0,0,0.1);
      max-width: 600px;
      margin: 0 auto;
    }

    .dashboard-box h2 {
      color: #34495e;
    }

    .dashboard-box p {
      font-size: 18px;
      color: #555;
    }
  </style>
</head>
<body>
  <header>
    <h1>Админ хяналтын самбар</h1>
    <nav>
      <a href="dashboard.php">Хяналтын самбар</a>
      <a href="add-product.php">Бүтээгдэхүүн нэмэх</a>
      <a href="product-manage.php">Бүтээгдэхүүнийг удирдах</a>
      <a href="orders.php">Захиалга</a>
      <a href="users.php">Хэрэглэгчид</a>
      <a href="../index.html">Гарах</a>
    </nav>
  </header>
  <main>
    <div class="dashboard-box">
      <h2>тавтай морил, админ!</h2>
      <p>Эндээс та статистик мэдээллийг харж, бүтээгдэхүүнээ удирдах, захиалгыг зохицуулах боломжтой.</p>
    </div>
  </main>
</body>
</html>
