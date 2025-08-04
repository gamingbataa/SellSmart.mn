<?php include('../backend/db.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Users</title>
  <link rel="stylesheet" href="../style.css" />
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
      background: #f9fafb;
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
      background-color: #34495e;
      color: white;
    }

    tbody tr:nth-child(even) {
      background-color: #f4f6f8;
    }

    tbody tr:hover {
      background-color: #e6f7f5;
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
      background-color: #2980b9;
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
    <h1>Users</h1>
    <nav>
      <a href="dashboard.php">Dashboard</a>
      <a href="add-product.php">Add Product</a>
      <a href="product-manage.php">Manage Products</a>
      <a href="orders.php">Orders</a>
      <a href="../index.html">Logout</a>
    </nav>
  </header>
  <main>
    <table>
      <thead>
        <tr>
          <th>User ID</th>
          <th>Username</th>
          <th>Email</th>
          <th>Role</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <!-- Жишээ -->
        <!--
        <tr>
          <td>1</td>
          <td>boldoo</td>
          <td>boldoo@example.com</td>
          <td>admin</td>
          <td class="action-buttons">
            <button class="edit-btn">Edit</button>
            <button class="delete-btn">Delete</button>
          </td>
        </tr>
        -->
        <?php
        // Жишээ код: хэрэглэгчдийг динамикаар харуулах
        /*
        $result = mysqli_query($conn, "SELECT * FROM users");
        while($row = mysqli_fetch_assoc($result)) {
          echo "<tr>
                  <td>{$row['id']}</td>
                  <td>{$row['username']}</td>
                  <td>{$row['email']}</td>
                  <td>{$row['role']}</td>
                  <td class='action-buttons'>
                    <button class='edit-btn'>Edit</button>
                    <button class='delete-btn'>Delete</button>
                  </td>
                </tr>";
        }
        */
        ?>
      </tbody>
    </table>
  </main>
</body>
</html>
