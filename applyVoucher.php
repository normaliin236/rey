<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $voucherCode = $_POST["voucher"];

    // 'REYGWAPO' this is my voucher code
    $validVoucher = 'REYGWAPO';

    if ($voucherCode === $validVoucher) {
        // Apply a discount (you can customize this logic
        $_SESSION['voucherDiscount'] = 20; // 10% discount

        // Redirect back to the cart with a success message
        header("Location: cart.php?message=Voucher%20applied%20successfully.");
        exit;
    } else {
        // Invalid voucher code, redirect with an error message
        header("Location: cart.php?error=Invalid%20voucher%20code.");
        exit;
    }
}
