<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document & 2</title>
</head>
<body>

  <form action="/If&else/if&else&elsif-2.php" method="post">
    <label for="username">Username:</label>
    <input type="text" name="username" required>
    <br>
    <label for="password">Password:</label>
    <input type="text" name="password" required>
    <br>
    <input type="submit" value="Log-in">
    <br>
  </form>
</body>
</html>

<?php 

$username = $_POST["username"];
$password = $_POST["password"];



?>