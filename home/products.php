<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>ElectroShop</title>
  <link rel="stylesheet" type="text/css"href="../style2.css">
  <style>
/* General Styles */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

h2 {
    text-align: center;
    margin: 20px 0;
}

/* Navbar Styles */
.navbar {
  background-color: #000; /* Black background */
    color: white;
    padding: 20px; /* Increased padding for a taller navbar */
    display: flex; /* Use flexbox for alignment */
    justify-content: flex-end; /* Align items to the right */
    align-items: center; /* Center items vertically */
}

.navbar h2 {
    margin: 0;
    font-size:2em;
    margin-right:auto;
}

.dropdown-nav {
    display: flex;
    justify-content: center;
    margin-top: 10px;
}

.dropdown-group {
    margin: 0 15px;
}

.dropdown-group label {
  padding: 5px;
    border: none;
    border-radius: 5px;
  }

.dropdown-group select {
    padding: 5px;
    border: none;
    border-radius: 5px;
}

/* Selection Feedback */
.selection-message {
    text-align: center;
    margin: 20px;
    font-size: 18px;
    color: #333;
}

/* Product Cards Styles */
.my_card {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin: 20px;
}

.card {
    background-color: white;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    margin: 15px;
    padding: 15px;
    width: 200px;
    text-align: center;
    transition: transform 0.2s;
}

.card:hover {
    transform: scale(1.05);
}

.p_image {
    width: 100%;
    height: auto;
    border-radius: 5px;
}

.card h4 {
    margin: 10px 0;
}

.card p {
    margin: 5px 0;
}

.card a {
    display: inline-block;
    margin-top: 10px;
    padding: 10px 15px;
    background-color: #28a745;
    color: white;
    text-decoration: none;
    border-radius: 5px;
}

.card a:hover {
    background-color: #218838;
}

/* Responsive Styles */
@media (max-width: 600px) {
    .dropdown-nav {
        flex-direction: column;
        align-items: center;
    }

    .dropdown-group {
        margin: 10px 0;
    }

    .my_card {
        flex-direction: column;
        align-items: center;
    }

    .card {
        width: 90%;
    }
}  </style>
</head>
<body>

<!-- NAVBAR -->
<div class="navbar">
  <h2>ElectroShop</h2>
  <form method="post" class="dropdown-nav">
    <div class="dropdown-group">
      <label for="mobile">Mobile:</label>
      <select name="mobile" id="mobile" onchange="this.form.submit()">
        <option value="">Mobile Devices</option>
        <option value="Charger">Charger</option>
        <option value="Earphones">Earphones</option>
        <option value="Phone Case">Phone Case</option>
      </select>
    </div>

    <div class="dropdown-group">
      <label for="computer">Hand Accessories:</label>
      <select name="computer" id="computer" onchange="this.form.submit()">
        <option value="">Hand Accessories</option>
        <option value="Keyboard">Watch</option>
        <option value="Mouse">Bracelet</option>
        <option value="USB Drive">Ring</option>
      </select>
    </div>
    <div class="dropdown-group">
      <label for="audio">Shoes:</label>
      <select name="audio" id="audio" onchange="this.form.submit()">
        <option value="">Shoes</option>
        <option value="Bluetooth Speaker">Nike</option>
        <option value="Headphones">Adidas</option>
        <option value="Soundbar">Puma</option>
      </select>
    </div>
  </form>
</div>

<!-- SELECTION FEEDBACK -->
<?php
  $selected = '';

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['mobile'])) {
      $selected = $_POST['mobile'];
    } elseif (!empty($_POST['computer'])) {
      $selected = $_POST['computer'];
    } elseif (!empty($_POST['audio'])) {
      $selected = $_POST['audio'];
    }

    if ($selected) {
      echo "<div class='selection-message'>You selected: <strong>$selected</strong></div>";
    }
  }
?>

<!-- PRODUCT CARDS -->
<div class="my_card">
  <div class="card">
    <img class="p_image" src="watch.jpg" alt="cover">
    <h4>Watch</h4>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit!</p>
    <p>Price: $30</p>
    <a href="order.php">Buy Now!</a>
  </div>
  <div class="card">
    <img class="p_image" src="watch2.jpg" alt="cover">
    <h4>Watch</h4>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit!</p>
    <p>Price: $130</p>
    <a href="order.php">Buy Now!</a>
  </div>
  <div class="card">
    <img class="p_image" src="watch3.jpg" alt="cover">
    <h4>Watch</h4>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit!</p>
    <p>Price: $130</p>
    <a href="home/order.php">Buy Now!</a>
  </div>
  <br><br><br>
  <div class="card">
    <img class="p_image" src="shoe.jpg" alt="cover">
    <h4>Shoe</h4>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit!</p>
    <p>Price: $130</p>
    <a href="order.php">Buy Now!</a>
  </div>
  <div class="card">
    <img class="p_image" src="shoe2.jpg" alt="cover">
    <h4>Shoe</h4>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit!</p>
    <p>Price: $100</p>
    <a href="order.php">Buy Now!</a>
  </div>
  <div class="card">
    <img class="p_image" src="shoe3.jpg" alt="cover">
    <h4>Shoe</h4>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit!</p>
    <p>Price: $130</p>
    <a href="order.php">Buy Now!</a>
  </div>
  <br><br><br>
  <div class="card">
    <img class="p_image" src="phone.jpg" alt="cover">
    <h4>Phone</h4>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit!</p>
    <p>Price: $830</p>
    <a href="order.php">Buy Now!</a>
  </div>
  <div class="card">
    <img class="p_image" src="s25.jpg" alt="cover">
    <h4>Phone</h4>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit!</p>
    <p>Price: $130</p>
    <a href="order.php">Buy Now!</a>
  </div>
  <div class="card">
    <img class="p_image" src="vivo.jpg" alt="cover">
    <h4>Phone</h4>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit!</p>
    <p>Price: $130</p>
    <a href="order.php">Buy Now!</a>
  </div>
</div>

</body>
</html>
