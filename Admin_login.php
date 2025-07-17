
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="public\css\Admin_login.css"> 
  <title>Admin Login</title>
</head>
<body>
  <div class="container">
    <h2>Admin Login</h2>
    <form action="admin_process.php" method="POST">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username"  placeholder="Enter your username" required><br><br>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" placeholder="Enter your password" required><br><br>
      <button type="submit">Register</button>
    </form>
  </div>
</body>
</html>
