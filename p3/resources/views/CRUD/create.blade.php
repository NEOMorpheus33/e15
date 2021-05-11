@extends('layouts/main')        
@section ('Search') 

<link href='style.css' rel='stylesheet'> 
<h1>Add a Site Below for Faster Indexing Similar to Google Console</h1> 



<!DOCTYPE HTML>  
<html> 
<head> 
</head> 
<body>  

<?php

// define variables and set to empty values for sites info list

$name = $email = $url = $title = $description= $body="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $body = test_input($_POST["body"]);
    $url = test_input($_POST["url"]);
    $title = test_input($_POST["title"]);
    $description = test_input($_POST["description"]);
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<h2>List Your Site</h2> 
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">   
  URL: <input type="text" name="url">
  <br><br>
  description: <input type="text" name="description"> 
  <br><br>
  title: <input type="text" name="title">
  <br><br>
  
  <br><br> 
  body text: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

</body>
</html>




