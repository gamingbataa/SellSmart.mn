<?php
session_start();
include 'header.php';

// Жишээ product - DB эсвэл array-аас авна
$product = [
    'id' => 537,
    'name' => 'хиаман силикон',
    'price' => 120.000,
    'image' => 'uploads/barilga-1.jpg' // тухайн зураг байршиж буй зам
];
?>

<style>
.product-container {
    max-width: 1000px;
    margin: 40px auto;
    display: flex;
    gap: 30px;
    align-items: center;
}

.product-image {
    max-width: 300px;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
}

.product-info h2 {
    margin: 0;
    font-size: 24px;
    color: #333;
}

.product-info p {
    font-size: 18px;
    margin: 15px 0;
    color: #555;
}

.quantity-selector {
    display: flex;
    align-items: center;
    margin: 15px 0;
}

.quantity-selector button {
    width: 30px;
    height: 30px;
    font-size: 20px;
    border: 1px solid #ccc;
    background: #f5f5f5;
    cursor: pointer;
}

.quantity-selector input {
    width: 60px;
    text-align: center;
    font-size: 16px;
    margin: 0 5px;
    border: 1px solid #ccc;
}

.button-group {
    display: flex;
    gap: 10px;
    margin-top: 20px;
}

.btn {
    padding: 10px 20px;
    font-size: 16px;
    border-radius: 6px;
    text-decoration: none;
    border: none;
    cursor: pointer;
}

.btn-back {
    background-color: #007bff;
    color: white;
}

.btn-cart {
    background-color: #dc3545;
    color: white;
}
</style>

<div class="product-container">
    <img class="product-image" src="<?php echo $product['image']; ?>" alt="Product Image">

    <div class="product-info">
        <h2><?php echo $product['name']; ?></h2>
        <p>Үнэ: <?php echo number_format($product['price']); ?>₮</p>

        <form method="post" action="cart.php">
            <div class="quantity-selector">
                <button type="button" onclick="decreaseQty()">−</button>
                <input type="number" name="qty" id="qty" value="1" min="1">
                <button type="button" onclick="increaseQty()">+</button>
            </div>

            <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
            <input type="hidden" name="product_name" value="<?php echo $product['name']; ?>">
            <input type="hidden" name="product_price" value="<?php echo $product['price']; ?>">

            <div class="button-group">
                <a href="index.html" class="btn btn-back">← Буцах</a>
                <button type="submit" class="btn btn-cart"><a href="checkout.php">🛒 Сагсанд хийх</a></button>
            </div>
        </form>
    </div>
</div>

<script>
function increaseQty() {
    var qty = document.getElementById("qty");
    qty.value = parseInt(qty.value) + 1;
}
function decreaseQty() {
    var qty = document.getElementById("qty");
    if (parseInt(qty.value) > 1) {
        qty.value = parseInt(qty.value) - 1;
    }
}
</script>

<?php include 'footer.php'; ?>
