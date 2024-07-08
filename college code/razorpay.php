<?php
// Handle Razorpay payment success callback
use Razorpay\Api\Api;

// Include Razorpay PHP library
require_once 'path/to/razorpay-php/Razorpay.php';

// Initialize Razorpay API with your key id and secret
$razorpayKeyId = 'rzp_test_i7DbCFK1pO2isV';
$razorpayKeySecret = 'J0wHbT0Q8PsDNAWHdo4LM7kz';

$api = new Api($razorpayKeyId, $razorpayKeySecret);

// Assuming you have received the payment ID from Razorpay callback
$paymentId = $_POST['razorpay_payment_id'];

// Fetch payment details from Razorpay
$payment = $api->payment->fetch($paymentId);

if ($payment->status === 'captured') {
    // Payment successful, generate download link

    // Generate a unique token for the download link
    $downloadToken = uniqid();

    // Store the token and associate it with the transaction in your database
    // For simplicity, we'll just store it in a session variable here
    session_start();
    $_SESSION['download_token'] = $downloadToken;

    // Redirect the user to a page where the download link will be displayed
    header("Location: download.php");
    exit;
} else {
    // Handle payment failure
    echo "Payment failed.";
}
?>