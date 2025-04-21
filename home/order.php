<?php
// Handle form submission
$success = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $address = $_POST["address"];
  $city = $_POST["city"];
  $pincode = $_POST["pincode"];
  $country = $_POST["country"];
  $quantity = (int) $_POST["quantity"];

  $productName = "NIKE SHOES";
  $pricePerItem = 130;
  $total = $pricePerItem * $quantity;

  $success = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Order Now</title>
  <style>
    body { font-family: Arial, sans-serif; padding: 20px; background: #f4f4f4; }
    .container { max-width: 700px; margin: auto; background: white; padding: 20px; border-radius: 10px; }
    .order-btn { background: #28a745; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; }
    .order-btn:hover { background: #218838; }
    input, select { width: 100%; padding: 10px; margin: 8px 0; border-radius: 5px; border: 1px solid #ccc; }
    .success { background: #d4edda; color: #155724; padding: 15px; border-radius: 5px; margin-bottom: 20px; }
  </style>
</head>
<body>
  <div class="container">
    <h2>Order Now</h2>

    <?php if ($success): ?>
      <div class="success">
        ✅ Thank you, <?= $name ?>!<br>
        Your order for <?= $quantity ?> x <?= $productName ?> has been placed.<br>
        Total: $<?= number_format($total, 2) ?><br>
        A confirmation has been sent to <?= $email ?>.
      </div>
    <?php else: ?>
      <form method="POST" action="">
        <h3>Product: NIKE SHOES ($130)</h3>
        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" value="1" min="1" required>

        <h3>Shipping Info</h3>
        <input type="text" name="name" placeholder="Full Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="address" placeholder="Address" required>
        <input type="text" name="city" placeholder="City" required>
        <input type="text" name="pincode" placeholder="Pincode" required>
        <select name="country" required>
          <option value="">Select Country</option>
          <option value="USA">USA</option>
          <option value="Canada">India</option>
          <option value="UK">UK</option>
        </select>

        <button type="submit" class="order-btn">Place Order</button>
      </form>
    <?php endif; ?>
  </div>
</body>
</html>
