<?php
    $str="This is a string ";
    echo $str .'<br>';
    $len=strlen($str);
    echo "The length of the string is ".$len ."<br>";
    echo "The words of the string is ".str_word_count($str). "<br>";
    echo "The reverse string is ".strrev($str) . "<br>";
    echo "The search for is in this  string is ".strpos($str,"is") . "<br>";
    echo "The replace string is ".str_replace("is","at",$str) . "<br>";
    // echo $len;

 

?>