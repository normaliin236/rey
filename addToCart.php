<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product = $_POST["product"];
    $quantity = intval($_POST["quantity"]);

    if (!isset($_SESSION["cart"])) {
        $_SESSION["cart"] = [];
    }

    if (isset($_SESSION["cart"][$product])) {
        $_SESSION["cart"][$product] += $quantity;
    } else {
        $_SESSION["cart"][$product] = $quantity;
    }
    
}

echo "<script>
alert('ITEM ADDED TO CART');
window.location.href='store.php';
</script>";


?>
