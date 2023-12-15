<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Log in</title>
</head>
<body>

  <!-- <form action="login-1.php" method="get">
    <label for="username">Username:</label> <br>
    <input type="text" name="username"> <br>

    <label for="password">Password:</label> <br>
    <input type="password" name="password"> <br>

    <input type="submit" value="Log in">
  </form> -->

  <form action="login-1.php" method="post">
    <label for="username">Username:</label> <br>
    <input type="text" name="username"> <br>

    <label for="password">Password:</label> <br>
    <input type="password" name="password"> <br>

    <input type="submit" value="Log in">
  </form>


  <!-- Get nakikita sa url yung mga password at username -->
  <!-- Post naman is more secure hnd ito nakikita -->
  
</body>
</html>

<?php 

  echo "{$_POST["username"]} <br>";
  echo "{$_POST["password"]} <br>" ;

?>