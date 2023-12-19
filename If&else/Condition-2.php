<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

      <form action="Condition-2.php" method="post">

        <input type="text" name="day" placeholder="day">
        <br>
        <input type="text" name="rate" placeholder="rate">
        <br>
        <input type="submit" value="Calculate">
        <br>

      </form>
  
</body>
</html>

<?php 

$day = $_POST["day"] ;
$rate = $_POST["rate"] ;
$weekly_pay = null ;
// Todo kung ang day ay less than equal sa 10 is lalabas eto
if ($day <= 10 ) {
  $weekly_pay = $day * $rate ;
  echo "Your weekly pay is ₱{$weekly_pay}." ;
}
elseif ($day == 0 ) {
  echo "wala ka sahod"
}

else {
  echo "sobra ang iyong araw" ;
}


?>