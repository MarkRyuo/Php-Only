<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login-2</title>
</head>
<body>
  
<form action="Login-2.php" method="post">
  <label for="quantity">Quantity</label>
  <input type="text" name="quantity">
  <input type="submit" value="add">
</form>


</body>
</html>

<?php 

$Coffee_name = "Caffee latee" ;
$price_of_coffee = 20 ;
$quantity = $_POST["quantity"] ;
$Total = null ;

$Total = $quantity * $price_of_coffee ;

echo "You have ordered {$Coffee_name}" ;




?>