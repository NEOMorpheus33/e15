<?php  

@extends('layouts/main') 
@section ('Search') 



<link href='style.css' rel='stylesheet'>



<h1>Add a Site Below for Faster Indexing Similar to Google Console</h1>

    
// define variables and set to empty values for sites info list

$name = $email = $url = $title = $description= $comment= $body=" "; 

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


<!-- <input type="text" name="title" value="old'title'"psuedo code -->
<!-- <class="aterrorparentheses'title'parentheses is-invalid atenderror" *Pseudocode> -->

<h2>List Your Site</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    URL: <input type="text" class="@error('url') is-invalid @enderror"> name="url" value="{{ old('url') }}">
    <br><br>
    description: <input type="text" class="@error('description') is-invalid @enderror"> name="description" value="{{ old('description') }}">
    <br><br>
    title: <input type="text" class="@error('title') is-invalid @enderror"> name="title" value="{{ old('title') }}">
    <br><br>

    <br><br>
    body text: <textarea name="comment" rows="5" cols="40"></textarea>
    <br><br>
    Gender:
    <input type="radio" name="ITPro" value={{ old('ITPro') }} Female <input type="radio" name="gender" value={{ old('NotITPro') }} Male <input type="radio" name="gender" value={{ old('other') }} Other <br>
    <input type="submit" name="submit" value="Submit">

</form>

<?php


$url = " ";
echo "<h1>Your Input Here</h1>";     
echo @error->{{$sitemapxml}}; s 
echo "<br>";
echo @error->{{$body}};  
echo "<br>";
echo @error->{{$url}}
echo "<br>"  
echo @error{{$description}}; 
echo "<br>"
echo "<br>";
echo @error->{{$comment}}; 
echo "<br>";
echo $ITPRO; 
@enderror 
?>

</body>
</html>
