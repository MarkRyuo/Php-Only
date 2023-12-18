<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>If & Else & Elseif</title>
</head>
<body>

<form action="if&else&elseif-1.php" method="post">

  <input type="text" name="quantity" required placeholder="Put Quantity"> 
  <input type="submit" value="add">
</form>

</body>
</html> 

<?php 

// $quantity = $_POST["quantity"] ;

if ($quantity >= 10) {
  echo "Amg Baba naman ng kinuha mo" ;
}

?>