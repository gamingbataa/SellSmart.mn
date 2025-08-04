<?php include('../backend/db.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Захиалга</title>
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

    table {
      width: 100%;
      border-collapse: collapse;
      background: white;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.08);
      overflow: hidden;
    }

    th, td {
      text-align: left;
      padding: 16px;
    }

    thead {
      background-color: #1abc9c;
      color: white;
    }

    tbody tr:nth-child(even) {
      background-color: #f4f6f8;
    }

    tbody tr:hover {
      background-color: #e1f5f2;
    }
  </style>
</head>
<body>  
  <header>
    <h1>Захиалга</h1>
    <nav>
      <a href="dashboard.php">Хяналтын самбар</a>
      <a href="add-product.php">Бүтээгдэхүүн нэмэх</a>
      <a href="product-manage.php">Бүтээгдэхүүнийг удирдах</a>
      <a href="users.php">Хэрэглэгчид</a>
      <a href="../index.html">Гарах</a>
    </nav>
  </header>
  <main>
    <table>
      <thead>
        <tr>
          <th>Захиалгын ID</th>
          <th>Хэрэглэгч</th>
          <th>Огноо</th>
          <th>Статус</th>
          <th>Нийт</th>
        </tr>
      </thead>
      <tbody>
        <!-- Orders dynamically listed here -->
        <!-- Жишээ: -->
        <!--
        <tr>
          <td>#1023</td>
          <td>boldoo</td>
          <td>2025-05-29</td>
          <td>Shipped</td>
          <td>₮120,000</td>
        </tr>
        -->
      </tbody>
    </table>
  </main>
</body>
</html>
