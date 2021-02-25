<html>
<body>
    <div>
 <span style='color:green' <h1></h1>Vowel Counter E1P1 Joseph Fanning</hl> </span>
 
 <form name="form" action="" method="get">
  <input type="text" name="subject" id="subject" value="">
</form>
 
<?php 

//Author Joseph Fanning Vowel Counter and Spaces 


{

 $string=($_GET['subject']);
  
   $vowels = array('a','e','i','o','u');
    $len = strlen($string);
    $num = 0;
        
    for($i=0; $i<$len; $i++){
    if(in_array($string[$i], $vowels))
            {
                $num++;
            }
 echo "$num";
        }
 function countDigits( $string ) 
{
    return preg_match_all( "/[0-9]/", $string );
 
}
substr_count($string, ' ');
 
        echo " Vowel Counter : <span style='color:orange; font-weight:bold;'>". $num."</span>";
 echo "<br>";
 
 
 echo "Space Counter :" . substr_count($string," ");
 
    }
    
?>
</body>
</html>
