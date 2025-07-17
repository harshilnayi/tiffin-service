<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin - Orders show</title>
  <style>
    /* Your existing CSS styles here */
    body {
      font-family: 'Times New Roman', Times, serif;
      background-color: #f5f5f5;
    }
    table {
      text-align: center;
      width: 80%;
      margin: 20px auto;
      border-collapse: collapse;
      border: 1px solid #33D4FF; /* Add this line for the table border */
    }
    th, td {
      padding: 10px;
      border-bottom: 1px solid #ddd;
    }
    th {
      background-color: #3498db;
      color: white;
    }
  </style>
</head>
<body>
  <header>
    <center><h1>Admin - Orders</h1></center><hr>
  </header><br><br>
  <table border=1>
    <tr>
      <th>Order</th>
      <th>Name</th>
      <th>Email</th>
      <th>Phone</th>
      <th>Address</th>
      <th>Quantity</th>
      <th>Payment Mode</th>
    </tr>
    <?php
      // Replace with your database connection details
      $servername = "localhost";
      $username = "root"; // Replace with your actual username
      $password = ""; // Replace with your actual password
      $dbname = "webregistration"; // Replace with your actual database name

      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);

      // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
    
      // Fetch and display orders
      $sql = "SELECT * FROM foodorder"; // Replace 'foodorder' with your actual table name
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          
          echo "<tr>";
          echo "<td>" . $row["order"] . "</td>";
          echo "<td>" . $row["name"] . "</td>";
          echo "<td>" . $row["email"] . "</td>";
          echo "<td>" . $row["phone"] . "</td>";
          echo "<td>" . $row["address"] . "</td>";
          echo "<td>" . $row["quantity"] . "</td>";
          echo "<td>" . $row["paymentmod"] . "</td>";
          echo "</tr>";
        }
      } else {
        echo "<tr><td colspan='7'>No orders found.</td></tr>";
      }

      $conn->close();
    ?>
  </table><hr><br>


  
</body>
</html>
