<?php

require('vendor/.php'); // Assuming Composer autoloader

use Razorpay\Api;

// Replace with your Razorpay Key ID and Secret Key
$apiKey = 'rzp_test_i7DbCFK1pO2isV';
$apiSecret = 'J0wHbT0Q8PsDNAWHdo4LM7kZ';

$api = new Api($apiKey, $apiSecret);

// Get data from the payment form submission (replace with your logic)
$orderId = $_POST['razorpay_order_id']; 
$razorpaySignature = $_POST['razorpay_signature'];

// Fetch payment details from Razorpay using order ID
try {
  $payment = $api->payment->fetch($orderId);
} catch (Exception $e) {
  echo "Error fetching payment: " . $e->getMessage();
  exit;
}

// Check payment signature to ensure data integrity
$expectedSignature = hash_hmac('sha256', json_encode([$orderId, $payment->get('amount'), $payment->get('receipt_id')]), $apiSecret);

if ($razorpaySignature === $expectedSignature) {
  // Payment successful, update order status and deliver product/service (implement your logic)
  echo "Payment Successful: Order ID - " . $orderId;
  
  // Update order status in your database
} else {
  // Payment signature verification failed, potential tampering
  echo "Payment Signature Verification Failed!";
}

?>