<html>
    <head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registred User</title>
    </head>

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


<header>
    <center><h1>Registred User List</h1></center><hr>
  </header><br><br>
  <table border=3>
    <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Phone</th>
      <th>Password</th>
      
    </tr>
    <?php
  error_reporting(E_ALL); // Display all errors
  mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT); // Enable detailed error reporting

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

  // Fetch and display registered users
  $sql_users = "SELECT * FROM webregistration"; // Replace 'webregistration' with your actual table name for registered users
  $result_users = $conn->query($sql_users);

  if ($result_users->num_rows > 0) {
    while ($row_users = $result_users->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row_users["name"] . "</td>";
      echo "<td>" . $row_users["email"] . "</td>";
      echo "<td>" . $row_users["phone"] . "</td>";
      echo "<td>" . $row_users["password"] . "</td>";
      echo "</tr>";
    }
  } else {
    echo "<tr><td colspan='4'>No registered users found.</td></tr>";
  }

  $conn->close();
?>