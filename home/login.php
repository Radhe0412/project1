<?php
$conn=mysqli_connect("localhost","root","","php_ecom");
if(isset($_POST['login']))
{
    $u_email=$_POST['email'];
    $u_pass=$_POST['password'];
    $sql="SELECT * from users Where email='". $u_email."' AND password='" .$u_pass."'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result);
    if($row['usertype']=="user")
    {
        header("location:userpage.php");
    } 
    else if($row['usertype']=="admin")
    {
        header("location:../admin/adminpage.php");
    }
    else
    {
        echo "Incorrect username or password";
    } 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Labels */
label {
    display: block;
    margin-bottom: 0.5rem;
    font-weight: bold;
}

/* Text inputs and password field */
input[type="email"],
input[type="password"],
input[type="text"] {
    width: 100%;
    padding: 0.75rem;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    font-size: 1rem;
}

/* Submit button */
input[type="submit"] {
    width: 100%;
    padding: 0.75rem;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 4px;
    font-size: 1rem;
    cursor: pointer;
    transition: background-color 0.3s ease;
}
/* Add extra space under the password field */
.login-form > div:nth-child(2) {
    margin-bottom: 2rem;
}

input[type="submit"]:hover {
    background-color: #45a049;
}
        </style>
    <link rel="stylesheet" type="text/css" href="../style2.css">
</head>
<body style="background-image: url('b.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center; height: 100vh; margin: 0;">

    <form action="" method="POST">
        <div class="login_form">
        <div>
            <label>Email</label>
            <input type="text" name="email">
        </div><br><br>
        <div>
            <label>Password</label>
            <input type="text" name="password">
        </div><br><br>
        <div>
            <input type="submit" name="login" value="login">
        </div>
    </div>
    </form>
</body>
</html>