<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Order Food</title>
  <style>
    body {
      font-family: 'Times New Roman', Times, serif;
      background-color: #f5f5f5;
    }
    form {
      max-width: 400px;
      margin: 0 auto;
      background-color: rgb(212, 205, 204);
      border-radius: 10px;
      padding: 30px;
      box-shadow: 0px 0px 10px rgba(31, 31, 30, 0.1);
    }
    label {
      display: block;
      margin-bottom: 5px;
    }
    input[type="text"], input[type="email"], select, textarea, input[type="number"] {
      width: 100%;
      padding: 10px;
      font-family: 'Times New Roman', Times, serif;
      margin-bottom: 15px;
      border: 1px solid #130f0f;
      border-radius: 5px;
      box-sizing: border-box;
    }
    textarea {
      resize: vertical;
    }
    input[type="radio"] {
      margin-right: 5px;
    }
    input[type="submit"] {
      background-color: #3498db;
      color: white;
      font-family: 'Times New Roman', Times, serif;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
    }
    header {
    background-color: #ffcc00;
    text-align: center;
    padding:10px 0;
  }

  header h1 {
    margin: 0;
    font-size: 40px;
    color: #333;
  }    
  </style>
</head>

<body>
  <?php
  $dish = $_GET['order'];
  ?>
  <header>
    <center><h1>Food Order</h1></center>
  </header><br><br>
  <form action="order_submit.php" method="POST">

    <label for="name">Order</label>
    <input type="text" id="name" name="order" placeholder="Enter your name" value="<?php echo $dish; ?>" readonly>
    
    <label for="name">Name</label>
    <input type="text" id="name" name="name" placeholder="Enter your name" required>

    <label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder="example@example.com" required>

    <label for="phone">Phone</label>
    <input type="number" id="phone" name="phone" placeholder="Enter your phone number" required>

    <label for="address">Address</label>
    <textarea id="address" name="address" rows="4" placeholder="Enter your address" required></textarea>

    <label for="quantity">Quantity</label>
    <input type="number" id="quantity" name="quantity" min="1" placeholder="Enter quantity" required><br><br>

    <label for="payment">Payment Mode</label>
    <input type="radio" id="online" name="paymentmod" value="ONLINE" required> Online
    <input type="radio" id="offline" name="paymentmod" value="OFFLINE"> Offline<br><br>  

    <input type="submit" value="Submit">
  </form>
</body>
</html>
