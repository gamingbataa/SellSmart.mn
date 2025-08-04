<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Админ Эрх</title>
  <link rel="stylesheet" href="../style.css" />
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(to right, #6a11cb, #2575fc);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .login-container {
      background: white;
      padding: 40px;
      border-radius: 16px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
      width: 100%;
      max-width: 400px;
    }

    .login-container h2 {
      text-align: center;
      margin-bottom: 24px;
      color: #34495e;
    }

    .login-container input {
      width: 100%;
      padding: 12px;
      margin-bottom: 18px;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 16px;
    }

    .login-container button {
      width: 100%;
      background: #1abc9c;
      color: white;
      padding: 12px;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
    }

    .login-container button:hover {
      background: #16a085;
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h2>Админ Эрхээр орох</h2>
    <form action="./admin-panel/dashboard.php" method="POST">
      <input name="username" type="text" placeholder="Нэвтрэх нэр" required />
      <input name="password" type="password" placeholder="Нууц үг" required />
      <button type="submit">Нэвтрэх</button>
    </form>
  </div>
</body>
</html>
