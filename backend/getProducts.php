// getProducts.php
<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "your_database_name"; // ← өөрийн датабэйсийн нэр

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Холболт амжилтгүй: " . $conn->connect_error);
}

$sql = "SELECT id, name, price, image FROM products"; // ← таны хүснэгтийн нэрээр
$result = $conn->query($sql);

$products = [];
while ($row = $result->fetch_assoc()) {
    $products[] = $row;
}

header('Content-Type: application/json');
echo json_encode($products);
?>
<script>
    <img src="${product.image || '/uploads/default.jpg'}">
    </script>