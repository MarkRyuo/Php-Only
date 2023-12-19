<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

      <form action="Condition-2.php" method="post">

        <input type="text" name="hours" placeholder="hours">
        <br>
        <input type="text" name="rate" placeholder="rate">
        <br>
        <input type="submit" value="Calculate">
        <br>

      </form>
  
</body>
</html>

<?php 

$hours = $_POST["hours"] ;
$rate = $_POST["rate"] ;
$weekly_pay = null ;

if ($hours <= 50 ) {
  
}

?>