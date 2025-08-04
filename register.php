<!DOCTYPE html>
<html lang="mn">
<head>
  <meta charset="UTF-8">
  <title>Admin Register</title>
  <style>
    /* дизайн login шиг хэв маягаар */
    body {
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(to right, #6a11cb, #2575fc);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .container {
      background: white;
      padding: 30px;
      border-radius: 12px;
      width: 360px;
      box-shadow: 0 12px 25px rgba(0,0,0,0.2);
    }
    .container h2 {
      text-align: center;
      margin-bottom: 20px;
    }
    input {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border-radius: 8px;
      border: 1px solid #ccc;
    }
    button {
      width: 100%;
      padding: 12px;
      background: #1abc9c;
      color: white;
      border: none;
      border-radius: 8px;
      cursor: pointer;
    }
    button:hover {
      background: #16a085;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Бүртгүүлэх</h2>
    <form method="POST" action="./admin-panel/users.php">
      <input type="text" name="username" placeholder="Нэвтрэх нэр" required>
      <input type="email" name="email" placeholder="И-мэйл" required>
      <input type="password" name="password" placeholder="Нууц үг" required>
      <button type="submit">Бүртгүүлэх</button>
    </form>
  </div>
</body>
</html>
