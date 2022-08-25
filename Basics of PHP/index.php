<?php
//variable

$name = 'Hasib'; //string //If we use string we must use ' '
$age = 20; 
$collegeName = "Sahid sayed Nazrul Islam,Mymensingh"; //Cannelcase
$college_name = "Sahid sayed Nazrul Islam,Mymensingh"; //undersqure //Underscore is always followed in WordPress.
$CollegeName = "Sahid sayed Nazrul Islam,Mymensingh" ; // Titlecase 

//All Reference From https://www.php-fig.org ,

echo "Hello {$name}, {$age}\n";//Best Way for write code ,

//In PSP you can change the value of the variable later
//exmple:
        $task ='Read';
        echo $task;
        echo "\n";
        $task = "Write";
        echo $task;
        echo "\n";
//Constant:
//Calculating the value of PI
                define('PI',3.14159); 
                echo "Value of PI =",PI;
                echo "\n";
                echo "Value Constant";
                echo constant('PI');
                echo "\n";

//with out echo,
//var_dump,
$name1 = "Hasibul";
$name2 = "Islam";
var_dump($name1,$name2);
/* 
   Type1- Integer (int),
   Type2-Double / Float,
   Boolean,
   Null,
   String,
   Array,
   Object,
   Resaurce,
*/
//PrintF:
         $fname = "Hasibul";
         $lname = "Islam";
         printf("My %s Name Is %s %s","Full", $fname,$lname);
//php.net/printf .         
