<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Razorpay Payment Integration</title>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script> </head>
<body>
    <h1>Make a Payment</h1>
    <form id="paymentForm">
        <label for="amount">Amount (in INR):</label>
        <input type="number" id="amount" name="amount" required>
        <br>
        <button type="button" id="payButton">Pay Now</button>
        <script src="./javascript/payment.js"></script>
    </form>
    </body>
</html>