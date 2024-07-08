const razorpayKey = 'rzp_test_i7DbCFK1pO2isV'; // Replace with your Razorpay Key ID

const payButton = document.getElementById('payButton');

payButton.addEventListener('click', function () {
  const amount = document.getElementById('amount').value;

  const options = {
    "key": razorpayKey,
    "amount": amount * 100, // Convert amount to paisa (1 INR = 100 paisa)
    "currency": "INR",
    "name": "Your Company Name",
    "description": "Sample Product",
    "image": "https://yourwebsite.com/logo.png", // Optional logo image
    "handler": function (response) {
      // Handle payment success or failure
      if (response.razorpay_payment_id) {
        // Payment successful, send payment details to server for verification
        console.log('Payment Successful:', response);
        // Send details to server-side script (implement logic here)
      } else {
        // Payment failed, display error message
        console.log('Payment Failed:', response);
        alert('Payment Failed! Please try again.');
      }
    }
  };

  const razorpay = new Razorpay(options);
  razorpay.open();
});