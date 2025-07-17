<?php
// Replace with your actual database connection details
$host = "localhost";
$username = "root";
$password = "";
$database = "webregistration";

$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $quantity = $_POST['quantity'];
    $paymentmod = $_POST['paymentmod'];
    $order = $_POST['order'];

    // Prepare and execute an SQL INSERT statement
    $sql = "INSERT INTO foodorder (name, email, phone, address, quantity, paymentmod, `order`) VALUES ('$name','$email','$phone','$address','$quantity','$paymentmod','$order')";

    if ($conn->query($sql) == TRUE) {
        echo "Order submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
