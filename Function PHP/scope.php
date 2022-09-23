<?php
// $name = "Earth"; //global scope
//  function doSomething(){
//     global $name;
//     echo $name;
//     echo $GLOBALS ['name'];
//  }
//  doSomething ();

// function doSomething(){
//     $name = "Earth"; //local scope
//     echo $name;
//  }
//  doSomething ();
 
 function doSomething(){
    static $i; //static scope 
   $i = $i?? 0;

   $i ++;
   echo $i;
   echo "\n";
 }
 doSomething ();

