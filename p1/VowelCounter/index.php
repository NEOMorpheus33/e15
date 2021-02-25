<!DOCTYPE html>   
<head>
    <title>e15p1 Palindrome? Project CSCI-E15 Harvard.edu HES</title> 
    </head>
    <meta>
    </meta>
<body> 
<div class='container'> 
<h2>String & Numbers Processor | Checks for Palindrome - e15 Project One</h2> 
<form method="post">        
Is it a Palindrome?: <input type="text" name="num"/><br>  
<button type="submit">Process Info</button>   
</form>  
<?php   
    if($_POST)  
    {  
        //get the value from form  
        $num = $_POST['num'];  
        //reversing the number  
        $reverse = strrev($num);  
          
        //checking if the number and reverse is equal  
        if($num == $reverse){  
            echo "$num is a Palindrome";     
        }else{  
            echo "$num is not a Palindrome";     
        }  
}     
      ?> 
</div> 
</body>
</html> 
