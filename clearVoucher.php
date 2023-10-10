<?php
session_start();

// Check if a voucher code has been applied
if (isset($_SESSION['voucherDiscount'])) {
    unset($_SESSION['voucherDiscount']);
    unset($_SESSION['appliedVoucherCode']);
}

// Redirect back to the cart with a success message
header("Location: cart.php?message=Voucher%20removed%20successfully.");
exit;
