<?php
/* 
1- Divisible by 4 ?
2- Divisible by 100 ?
3- Divisible by 400 ?
*/
$year = 2023;
if ($year %4 ==0 && $year % 100 ==0 && $year %400 ==0) {
    echo "{$year} is a leap year";
}elseif ($year % 4 == 0 && $year % 100 ==0)  {
    echo " {$year} is not a leap year";
}elseif ($year % 4 == 0){
    echo " {$year} is a leap year";
}