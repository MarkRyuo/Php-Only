<?php 
/*
Ako si Jhon Mark Malupa 19 years old nakatira sa brgy 
Cumba Lipa City. 

*/
$fname = "Jhon Mark" ;
$lname = "Malupa" ;

$age = 19 ;

echo "Ako is", " ",  $fname, " ", $lname, " ", $age, " ", "nakatira sa brgy Cumba Lipa City <br>";


//Todo Arithmetic not variable HAHAHA!

//This is is to the power

$money1 = 10;
$money2 = 3 ;

// 10 x 10 = 100 x 10 = 1000
$total = $money1 ** $money2 ;

echo $total, "<br>" ;

$student = 40 ;
$group = 6 ;
// Using Modulus is for remainder 
// 40 / 6 = 6.66667 
//6 * 6 = 36 
//40 - 36 = 4 
//4 student no group
$remainstudent = $student % $group ;

echo $remainstudent, " ", "ang natitirang studyante."


?>