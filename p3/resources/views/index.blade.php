@extends('layouts/main')
@section('Search')

<!DOCTYPE HTML>
<html>
<head>
</head>
<body>

    <?php

/*Authors/Authoring */
/*Joe PF Fanning JPFF */
/*Dr. Buck.*/
/*Harvard University.*/
/*Harvard Extension School.*/
/* https://www.extension.harvard.edu.*/
/*JSearch Logo*/

?>

    <a href='/'><img src='/images/JSLogo4.jpg' id='logo' alt='Joe Search Engine Logo v1'> </a>

    <nav>
        <ul>
            <!-- nav links  -->

            <li>
                @if(!Auth::user())
                <a href='/login'>Login</a>
                @else
                <form method='POST' id='logout' action='/logout'>
                    {{ csrf_field() }}
                    <a href='#' onClick='document.getElementById("logout").submit();'>Logout</a>
                    | <a href='/CRUD/create'>Add Site</a>
                </form>
                @endif

            </li>
        </ul>
    </nav>

    @if(Auth::user())
    <h2>
        Hello {{ Auth::user()->name }}!
    </h2>
    @endif

    @section('content')

    <h1><a href='/register'>register</a> </h1>


    <table>

        <form action="/process" method="GET">

            <tr>
                <td><input type="text" name="JoeSearch" value=" "> </td>
            </tr>
            <tr>
                <td><label for="text">Type Keywords Search</label></td>
            </tr>

            <tr>
                <td><input type="checkbox" name="PrivateSearch" value=" "> </td>
            </tr>
            <tr>
                <td><label for="PublicSearch"> Private Search </label></td>
            </tr>



    </table>




    <h2>Search Engine Results</h2>

    <?php
    
    // Declaring the variables just below here  

    $serps = ""; 
    

    // define variables and set to empty values
    $title = $url = $body = $description  = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $url = test_input($_POST["url"]);
    $title = test_input($_POST["title"]);
    $body = test_input($_POST["body"]);
    $description = test_input($_POST["description"]);


    function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = save($serps);
    return $data;
    }

?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <br><br>
        title: <input type="text" name="title">
        <br><br>
        descripton: <input type="text" name="description">
        <br><br>
        body: <textarea name="body" rows="5" cols="40"></textarea>
        <br><br>

        <input type="submit" name="submit" value="Submit">
    </form>

</body>
</html>


<?php 
        echo "<h2>Your Input:</h2>";
        echo $url;
        echo $title;
        echo "<br>";
        echo $description;
        echo "<br>";
        echo $body;
        echo "<br>";
        

        
