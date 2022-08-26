<?php
$fname = "Hasibul";
$lname = "Islam";
$middlename = "";
printf( 'My name is %1$s, %2$s %3$s', $fname, $middlename , $lname);//(fname,middilename,lname = argument)
echo "\n";
//We can use 2 numbers together in a placeholder so we should use % for argument position.
printf ('The binary equivalnet of %1$d is %1$b', 12); 
echo "\n";

$n = 485.254;        /*Decimal 
                         calculation */ 
printf("%.2f",$n);
echo "\n";
//Pint in four rooms with 0 padding
$m = 123.57745; //0123
$n = 27.325; // 0023
printf("%07d \n",$m);
printf("%07d\n",$n);



