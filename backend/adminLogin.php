// adminLogin.php
<?php
session_start();
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Жишээ зориулалтаар: хэрэглэгчийн мэдээллийг базаас авна
    $stmt = $pdo->prepare("SELECT * FROM admins WHERE username = ?");
    $stmt->execute([$username]);
    $admin = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($admin && password_verify($password, $admin['password'])) {
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['admin_username'] = $username;
        header("Location: ../admin-panel/dashboard.html");
        exit;
    } else {
        echo "Нэвтрэх нэр эсвэл нууц үг буруу байна";
    }
} else {
    echo "Invalid request method";
}
?>
