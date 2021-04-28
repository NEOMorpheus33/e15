<!DOCTYPE html>   

<html lang='en'>

<body>        

<?php

function isPalindrome($inputString)

{ 

    return strlen($inputString) > 7;

    //if strlen($inputString) > 7) {
        // return true; 
        // } else {
       //return false;
    // } 
} 

inputString ='cat'; 

$isBigWord = isBigWord($inputString); //t or f 


require 'index-view.php';

?> 

</body>

</html>
