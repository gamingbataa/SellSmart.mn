// addProduct.php
<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'] ?? '';
    $price = $_POST['price'] ?? 0;
    $description = $_POST['description'] ?? '';
    // Зураг upload хийх хэсэг өөр файл uploadImage.php-д байж болно
    // Энд жишээ нь шууд файл upload хийгдсэн гэж үзье

    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $targetDir = "../uploads/";
        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0755, true);
        }
        $filename = basename($_FILES['image']['name']);
        $targetFilePath = $targetDir . $filename;
        move_uploaded_file($_FILES['image']['tmp_name'], $targetFilePath);
    } else {
        $filename = null;
    }

    try {
        $stmt = $pdo->prepare("INSERT INTO products (name, price, description, image) VALUES (?, ?, ?, ?)");
        $stmt->execute([$name, $price, $description, $filename]);
        header("Location: ../admin-panel/product-manage.php");
        exit;
    } catch (Exception $e) {
        die("Error adding product: " . $e->getMessage());
    }
} else {
    die("Invalid request method");
}
?>

<!DOCTYPE html>
<html lang="mn">
<head>
  <meta charset="UTF-8">
  <title>Бүтээгдэхүүн нэмэх</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
      padding: 0;
      background: linear-gradient(135deg, #74ebd5, #ACB6E5);
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    .form-container {
      background: #fff;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.2);
      width: 100%;
      max-width: 500px;
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }

    label {
      font-weight: 600;
      display: block;
      margin: 12px 0 5px;
    }

    input[type="text"],
    input[type="number"],
    textarea,
    input[type="file"] {
      width: 100%;
      padding: 10px 12px;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 16px;
    }

    textarea {
      resize: vertical;
      height: 100px;
    }

    input[type="submit"] {
      width: 100%;
      padding: 12px;
      margin-top: 20px;
      background: #0984e3;
      border: none;
      color: white;
      font-size: 16px;
      border-radius: 8px;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    input[type="submit"]:hover {
      background: #0652DD;
    }

    .back-link {
      text-align: center;
      margin-top: 15px;
    }

    .back-link a {
      color: #2d3436;
      text-decoration: none;
    }

    .back-link a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <div class="form-container">
    <h2>Бүтээгдэхүүн нэмэх</h2>
    <form action="backend/addProduct.php" method="POST" enctype="multipart/form-data">
      <label for="name">Нэр</label>
      <input type="text" name="name" id="name" required>

      <label for="price">Үнэ</label>
      <input type="number" name="price" id="price" required>

      <label for="description">Тайлбар</label>
      <textarea name="description" id="description" required></textarea>

      <label for="image">Зураг</label>
      <input type="file" name="image" id="image" accept="image/*">

      <input type="submit" value="Нэмэх">
    </form>
    <div class="back-link">
      <a href="../admin-panel/product-manage.php">← Бүтээгдэхүүний жагсаалт руу буцах</a>
    </div>
  </div>

</body>
</html>
