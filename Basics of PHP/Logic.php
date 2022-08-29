<?php
$n= 12;
if ($n % 2== 0) {
    echo "$n is an even number";
}else{
    echo "$n is a odd number";
}
if ($n > 20){
    echo"$n is greater then 20";
} 
// Php Logical operators.....
/*
exmple:
== equle 
!= not equle
>
<
>=
<=
*/
$age =14;
if ($age >= 13 && $age <= 19){
    echo "This person is a teenager";
}else{ "This person is Not Teenager";
}
echo "\n";

$food = "hakim";

if( "hakim" == $food || "salmon" == $food){
    echo "{$food} it has vitamin A"; 
}elseif("apple" == $food){
    echo"Apple doesn't contain vitamin A";
}
else{
    echo "we don't Know if {$food} contains Vitamin A ";
}