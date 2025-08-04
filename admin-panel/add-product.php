<?php include('../backend/db.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Бүтээгдэхүүн нэмэх</title>
  <link rel="stylesheet" href="../style.css" />
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
      background: #f9fafb;
    }

    header {
      background-color: #2c3e50;
      color: white;
      padding: 20px;
    }

    nav a {
      color: #ecf0f1;
      text-decoration: none;
      margin-right: 15px;
    }

    nav a:hover {
      color: #1abc9c;
    }

    main {
      padding: 30px;
    }

    .form-container {
      background: white;
      max-width: 500px;
      margin: auto;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    .form-container h2 {
      margin-bottom: 20px;
      color: #34495e;
    }

    .form-container input[type="text"],
    .form-container input[type="number"],
    .form-container input[type="file"] {
      width: 100%;
      padding: 12px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 8px;
    }

    .form-container button {
      background: #1abc9c;
      color: white;
      border: none;
      padding: 12px 20px;
      font-size: 16px;
      border-radius: 8px;
      cursor: pointer;
    }

    .form-container button:hover {
      background: #16a085;
    }
  </style>
</head>
<body>
  <header>
    <h1>Шинэ бүтээгдэхүүн нэмэх</h1>
    <nav>
      <a href="dashboard.php">Хяналтын самбар</a>
      <a href="product-manage.php">Бүтээгдэхүүнийг удирдах</a>
      <a href="orders.php">Захиалга</a>
      <a href="users.php">Хэрэглэгчид</a>
      <a href="../index.html">Гарах</a>
    </nav>
  </header>
  <main>
    <div class="form-container">
      <h2>Бүтээгдэхүүний мэдээлэл</h2>
      <form action="../backend/addProduct.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="name" placeholder="Барааны нэр" required>
        <input type="number" name="price" placeholder="Үнэ" required>
        <input type="file" name="image" accept="image/*" required>
        <button type="submit">Хадгалах</button>
      </form>
    </div>
  </main>
</body>
</html>
