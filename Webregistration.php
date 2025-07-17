<?php
$con = mysqli_connect('localhost', 'root', '', 'webregistration'); // Establish database connection

if (!$con) {
    die("Connection failed: " . mysqli_connect_error()); // Check if the connection was successful
}

if (isset($_POST['sb'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $query = "INSERT INTO webregistration (name, email, phone, password) VALUES ('$name','$email','$phone','$password')";

    $run = mysqli_query($con, $query);

    if ($run) {
        echo "Data Inserted Into Database";
        echo '<script>window.location.href = "weblogin.php";</script>';
    } else {
        echo "Fail: " . mysqli_error($con); // Display the error message if the query fails
    }
}

mysqli_close($con); // Close the database connection
?>

