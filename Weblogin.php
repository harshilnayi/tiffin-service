<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Online Tiffin Service Login</title>
  <link rel="stylesheet" href="public\css\login.css">
    
</head>
<body>
    <center>
  <div class="container">
    <h1>Login to your Online Tiffin Service Account</h1>
    <form action="userlogin.php" method="post">
      <div class="form-group">
        <label for="name"></label>
        <input type="name" id="name" name="name" placeholder="Username" required><br><br>
        
      </div>
      <div class="form-group">
        <label for="password"></label>
        <input type="password" id="password" name="password" placeholder="password" required>
      </div><br>
      <input type="submit" value="Login">
    </form>
    <h3>You Are Not Registerd --> <a href="Webregistration.html">Click Hear</a></h3>
  </div>
</center>
</body>
</html>