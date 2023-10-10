<?php
session_start();

// Clear the shopping cart by unsetting the cart session variable
unset($_SESSION["cart"]);

// Redirect back to the shopping cart page
header("Location: cart.php");
?>
