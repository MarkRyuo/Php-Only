<?php 


//Todo Exponent (**)

$x = 20;
$y = 3 ; //This is the Exponent
$z = null;

$z = $x ** $y;
//20 x 20 = 400 x 20 = 8000
//Output is 8000
echo $z, "<br>";

//Todo Modulus (%) 40 ay hahatiin sa 7 

/*

$student % $group ay ibig sabihin, hatiin ang 40 sa 7. Ang quotient ay 5, at ang remainder (natirang halaga) ay 5. Kaya't, ang iyong echo $total; ay magreresulta sa 5.

*/

$student = 40;
$group = 6; 

$total = $student % $group;
//40 / 7 = 5.714285714285714 
// 5 students is no group 
echo $total;



?>