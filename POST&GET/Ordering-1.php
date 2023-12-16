<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ordering</title>
</head>
<body>

  <form action="Ordering-1.php" method="post">

  <label for="productname">Productname:</label>
  <input type="text" name="productname" placeholder="ProductName" required> <br>
<br>
  <label for="quantity"> Quantity:</label>
  <input type="text" name="quantity" placeholder="Quantity" required> <br>
   <br>
  <input type="submit" value=" Add">
  </form>
  
</body>
</html>

<?php 

$productname = $_POST["productname"] ;
$quantity = $_POST["quantity"] ;
$allcostproduct = 20 ;
$total = null;

$total = $quantity * $allcostproduct ;


?>