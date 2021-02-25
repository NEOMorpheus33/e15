<?php
//Licence: https://bit.ly/2CFA5XY

function count_Vowels($string)
{
    preg_match_all('/[aeiou]/i', $string, $matches);
    return count($matches[0]);
}
print_r(count_Vowels(echo $_POST['username'];));
?>
