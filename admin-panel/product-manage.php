<?php include('../backend/db.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Бүтээгдэхүүнийг удирдах</title>
  <link rel="stylesheet" href="../style.css" />
  <script src="/app.js" defer></script>
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
      background-color: #f9f9f9;
    }

    tbody tr:hover {
      background-color: #e0f7f4;
    }

    .action-buttons button {
      padding: 6px 10px;
      margin-right: 6px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-size: 14px;
    }

    .edit-btn {
      background-color: #3498db;
      color: white;
    }

    .delete-btn {
      background-color: #e74c3c;
      color: white;
    }
  </style>
</head>
<body>
  <header>
    <h1>Бүтээгдэхүүнийг удирдах</h1>
    <nav>
      <a href="dashboard.php">Хяналтын самбар</a>
      <a href="add-product.php">Бүтээгдэхүүн нэмэх</a>
      <a href="orders.php">Захиалга</a>
      <a href="users.php">Хэрэглэгчид</a>
      <a href="../index.html">Гарах</a>
    </nav>
  </header>
  <main>
    <table id="productsTable">
      <thead>
        <tr>
          <th>ID</th>
          <th>Нэр</th>
          <th>Үнэ</th>
          <th>Зураг</th>
          <th>Үйлдлүүд</th>
        </tr>
      </thead>
      <tbody>
        <!-- PHP or JS dynamically adds rows here -->
        <!-- Жишээ (static) -->
        <!--
        <tr>
          <td>1</td>
          <td>Сүү</td>
          <td>₮2500</td>
          <td><img src="../uploads/suu.jpg" alt="Milk" width="60" /></td>
          <td class="action-buttons">
            <button class="edit-btn">Edit</button>
            <button class="delete-btn">Delete</button>
          </td>
        </tr>
        -->
      </tbody>
    </table>
  </main>
</body>
</html>
