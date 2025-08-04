<?php
// DB холболт
$conn = new mysqli("localhost", "root", "", "CodeMarketProduct");
if ($conn->connect_error) {
    die("Холболт амжилтгүй: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

// бүртгэх
$sql = "INSERT INTO admins (username, password) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $username, $password);
$stmt->execute();

echo "Бүртгэл амжилттай. <a href='login.php'>Нэвтрэх</a>";
?>
