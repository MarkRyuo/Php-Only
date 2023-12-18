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

$quantity = $_POST["quantity"] ;
// Kung ang ilalagay ay sa quantity ay pantay sa 20 ay ilagay ang (Ang dami naman ng kinuha mo)
if ($quantity >= 20) {
  echo "Ang dami naman ng kinuha mo" ;
}

else {
  echo "Ang konti ng kinuha mo grabe your the worst" ;
}

?>