<?php
// Joseph Fanning 
//Function Counts Vowels 
//String variable

function count_Vowels($string)
{
    preg_match_all('/[aeiou]/i', $string, $matches);
    return count($matches[0]);
}
print_r(count_Vowels(echo $_POST['username'];));
?>
