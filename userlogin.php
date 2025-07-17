<?php
// Establish a database connection
$host = "localhost";
$username = "root";
$password = "";
$database = "webregistration";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user input from login form
$username = $_POST['name'];
$password = $_POST['password'];

// Query to check if the user exists
$query = "SELECT * FROM webregistration WHERE name = '$username' AND password = '$password'";
$result = $conn->query($query);

if ($result->num_rows >= 1) {
    // Successful login
    $user = $result->fetch_assoc();
    session_start();
    $name = $user['name'];
    $_SESSION['name'] = $name;
    echo '<script>window.location.href = "index.php";</script>';
} else {
 echo '<script>alert("You Are Not Registered!");</script>';
 echo '<script>window.location.href = "Webregistration.html";</script>';
}

$conn->close();
?>
