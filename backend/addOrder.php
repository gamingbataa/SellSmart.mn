<?php
require 'db.php'; // DB холболт
header("Location: ../order-success.php");
exit;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Хэрэглэгчээс ирсэн POST өгөгдөл
    $user_id = $_POST['user_id'] ?? null;
    $product_id = $_POST['product_id'] ?? null;
    $quantity = $_POST['quantity'] ?? 1;
    $order_date = date('Y-m-d H:i:s');

    if (!$user_id || !$product_id) {
        die("Алдаа: Хэрэглэгч эсвэл бүтээгдэхүүний мэдээлэл дутуу байна.");
    }

    try {
        // Захиалга нэмэх
        $stmt = $pdo->prepare("INSERT INTO orders (user_id, product_id, quantity, order_date) VALUES (?, ?, ?, ?)");
        $stmt->execute([$user_id, $product_id, $quantity, $order_date]);

        echo "Захиалга амжилттай нэмэгдлээ.";
        // redirect хийж болно
        // header("Location: order-success.php");
        // exit;
    } catch (Exception $e) {
        die("Захиалга нэмэх үед алдаа гарлаа: " . $e->getMessage());
    }

} else {
    die("Invalid request method.");
}
?>
