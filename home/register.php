<?php
$conn=mysqli_connect("localhost","root","","php_ecom");

if (isset($_POST['register'])) {
    $u_name = $_POST['name'];
    $u_email = $_POST['email'];
    $u_password = $_POST['password'];
    $u_phone = $_POST['phone'];
    $u_address = $_POST['address'];
    $usertype = "user";

    $sql = "INSERT INTO users(name, email, password, phone, address, usertype) 
            VALUES('$u_name', '$u_email', '$u_password', '$u_phone', '$u_address', '$usertype')";

    $data = mysqli_query($conn, $sql); // ✅ Correct function

    if ($data) {
        echo "Register success";
    } else {
        echo "Register failed: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"  type="text/css" href="../style2.css">
</head>
<body style="background-image: url('background.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center; height: 100vh; margin: 0;">


   <form action="" method="POST">
   <h2>REGISTER FORM</h2>
    <div class="input_deg">
        <label for="name">Name:</label>
        <input type="text" name="name">
    </div>
    <div class="input_deg">
        <label for="email">Email:</label>
        <input type="text" name="email">
    </div>
    <div class="input_deg">
        <label for="password">Password:</label>
        <input type="password" name="password">
    </div>
    <div class="input_deg">
        <label for="phone">Phone:</label>
        <input type="text" name="phone">
    </div>
    <div class="input_deg">
        <label for="address">Address:</label>
        <input type="text" name="address">
    </div>
    <div class="input_deg">
        <input type="submit" name="register" value="register">
    </div>
</body>
</form>
</html>