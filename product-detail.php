<!DOCTYPE html>
<html lang="mn">
<head>
  <meta charset="UTF-8">
  <title>Бараа материал</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
      padding: 0;
      background: #f9f9f9;
    }

    .container {
      padding: 40px;
    }

    h2 {
      margin-bottom: 20px;
    }

    .product-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
      gap: 20px;
    }

    .product-card {
      background: #fff;
      border: 1px solid #ddd;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 2px 5px rgba(0,0,0,0.05);
      transition: transform 0.3s;
    }

    .product-card:hover {
      transform: translateY(-5px);
    }

    .product-card img {
      width: 100%;
      height: 200px;
      object-fit: contain;
    }

    .product-info {
      padding: 15px;
    }

    .product-info h3 {
      font-size: 16px;
      margin: 0 0 10px;
    }

    .product-info .price {
      color: #009688;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .product-info a {
      text-decoration: none;
      color: #007BFF;
    }

    @media (max-width: 768px) {
      .product-card img {
        height: 160px;
      }
    }
  </style>
</head>
<body>
  <?php include 'header.php'; ?>

  <div class="container">
    <h2>Бараа материал</h2>
    <div class="product-grid" id="product-list">
      <!-- Бүтээгдэхүүнүүд энд JS-ээр орно -->
    </div>
  </div>

  <script>
    fetch('../backend/getAllProducts.php')
      .then(res => res.json())
      .then(products => {
        const container = document.getElementById('product-list');
        products.forEach(product => {
          container.innerHTML += `
            <div class="product-card">
              <img src="${product.image || '/assets/default.jpg'}" alt="${product.name}">
              <div class="product-info">
                <h3>${product.name}</h3>
                <div class="price">₮${product.price}</div>
                <a href="product-detail.html?id=${product.id}">Дэлгэрэнгүй</a>
              </div>
            </div>
          `;
        });
      });
  </script>

</body>
</html>
