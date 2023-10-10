<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="cart.css">
    <title>Shopping Cart</title>
</head>
<body>


    <h1 class="shoppingcartname">Shopping Cart</h1>
<div class="Container">
    <?php
    session_start();

    if (isset($_SESSION["cart"]) && !empty($_SESSION["cart"])) {
        
        echo "<table border='1'>";
        echo "<tr><th>Item Name</th><th>Quantity</th></tr>";

        $totalPrice = 0;
        $totalQuantity = 0;

        foreach ($_SESSION["cart"] as $product => $quantity) {
            $itemPrice = getProductPrice($product);

            if (isset($_SESSION['voucherDiscount'])) 
                $itemPrice -= ($itemPrice * $_SESSION['voucherDiscount'] / 100);
            
                
            
                
            echo "<tr>";
            echo "<td>" . $product . "</td>";
            echo "<td>" . $quantity . "</td>";
            echo "</tr>";

            // Calculate total price and quantity
            $totalPrice += $quantity * $itemPrice;
            $totalQuantity += $quantity;
        }

        echo "</table>";
        echo "<p>Total Price: ₱" . number_format($totalPrice, 0) . "</p>";
        echo "<p>Total Quantity: " . $totalQuantity . "</p>";

        // Add a "Reset Cart" button
        echo "<form method='post' action='resetCart.php'>";
        echo "<input type='submit' class='resetbtn' value='Reset Cart'>";
        echo "</form>";


    } else {
        echo "<p>Your cart is empty.</p>";
    }
    

    ?>



<!--///////////////////////////////////////////////////////////////////////////////////////////////////////-->
<section>
    </div>
<div class="Continueshopping">
    <a href="store.php">Continue Shopping</a>
</div>
<!--////////////////////////////////////////////////////////////////////////////////-->
<form method='post' action='clearVoucher.php'>
      <input type='submit' value='Remove Applied Voucher' class="removeapply">
</form>;
<!--////////////////////////////////////////////////////////////////////////////////-->
<form method="post" action="applyVoucher.php">
    <div class="Vouchercode">
      <p class="EnterVoucherCode">Enter Voucher Code:</p>
      <input type="text" placeholder="Ex. GOSURF50"class="Entercode" name="voucher" id="voucher">
      <input type="submit" value="Apply" class="Applybtn">
    <div class="Vouchercode">
</form>
</section>
<!--/////////////////////////////////////////////////////////////////////-->
</body>
</html>

<?php
// Function to get product prices (you would replace this with actual prices
function getProductPrice($product) {
    $prices = [
        "AWP" => 10000,
        "Product 2" => 10000, // ge kuha niyang value
        "Product 3" => 10000,
        "Product 4" => 10000,
    ];

    return isset($prices[$product]) ? $prices[$product] : 0;
}
?>

