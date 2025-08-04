<!DOCTYPE html>
<html lang="mn">
<head>
  <meta charset="UTF-8">
  <title>Төлбөр</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Segoe+UI&display=swap" rel="stylesheet">
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      background-color: #f4f4f4;
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
      padding: 0;
    }

    .checkout-container {
      max-width: 500px;
      margin: 60px auto;
      background: #fff;
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
    }

    .checkout-container h2 {
      text-align: center;
      color: #222;
      margin-bottom: 10px;
    }

    .checkout-container p {
      text-align: center;
      color: #777;
      margin-bottom: 30px;
    }

    .checkout-container form {
      display: flex;
      flex-direction: column;
    }

    .checkout-container input {
      margin-bottom: 20px;
      padding: 14px 16px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 8px;
      transition: border 0.3s;
    }

    .checkout-container input:focus {
      border-color: #009688;
      outline: none;
    }

    .checkout-container button {
      padding: 14px;
      font-size: 16px;
      background-color: #009688;
      color: white;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: background 0.3s;
    }

    .checkout-container button:hover {
      background-color: #00796b;
    }

    @media (max-width: 600px) {
      .checkout-container {
        margin: 30px 16px;
        padding: 30px 20px;
      }
    }
  </style>
</head>
<body>

  <div class="checkout-container">
    <h2>Төлбөрийн дэлгэрэнгүй</h2>
    <p>Таны төлбөрийг хүлээн авч байна...</p>
    <form action="./backend/addOrder.php" method="POST">
  <input type="text" name="customer_name" placeholder="Таны нэр" required>
  <input type="text" name="phone" placeholder="Утасны дугаар" required>

  <!-- QR код зураг -->
  <div style="text-align:center; margin-top: 20px;">
    <p>Доорх QR кодыг уншуулж төлбөрөө хийнэ үү:</p>
    <img src="uploads/monpay.png" alt="Monpay QR" style="max-width:200px;">
    <p style="font-size:14px; color:gray;">Төлбөрийн дүн: 10,000₮</p>
  </div>

  <input type="submit" value="Захиалах">
</form>

  </div>

</body>
</html>
