<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ordering</title>
</head>
<body>

  <form action="Ordering-2.php" method="post">

    <label for="product">Product:</label>
    <input type="text" name="product" required> <br>
    <br>
    <label for="quantity">Quantity:</label>
    <input type="text" name="quantity" required> <br>
    <br>
    <label for="date">Date:</label>
    <input type="date" name="date" required>
    <br>  
    <input type="submit" value="Add">
  </form>
  
</body>
</html>


<?php 

$allproductcost = 10 ; 
$product = $_POST["product"] ;
$quantity = $_POST["quantity"] ;
$date = $_POST["date"] ;
$total = null ;

$total = $allproductcost * $product ;

echo "Your Product is {$product} and the quantity of your product is {$quantity} and when did you add it is {$date} "

?>