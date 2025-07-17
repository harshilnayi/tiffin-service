<?php
// Start the session
session_start();

// Assuming your database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webregistration";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process login form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
 
    // Perform query to check login
    $sql = "SELECT * FROM admin_login WHERE name='$username' AND pass='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Successful login
        
        // Set session variable
        $_SESSION["username"] = $username;
        
        echo "<script>window.alert('Login Successfullly');</script>";
        echo '<script>window.location.href = "adminpanel.php";</script>';
        exit;
    } else {
        // Invalid credentials
        echo "<script>window.alert('Invalid Username and password');</script>";
        echo '<script>window.location.href = "admin_login.php";</script>';

    }
}

// Close the database connection
$conn->close();
?>
