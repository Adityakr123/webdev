<?php
    $str="I am aditya";
    echo $str;
    echo"<br>";
    $lenn = strlen($str);
    echo " length of string is :- "." "." ".$lenn;//to concatinate 
    echo"<br> The length of string is ". str_word_count($str);//str_word_count()it is used to count number of words
    echo"<br> the reversed string is :-".strrev($str);//used to reverse the string
    echo"<br> to find the position of any word in string is ".strpos($str,"aditya");//used to search a word in string
    echo"<br> the replace string is  ".str_replace("am","is",$str,);//am is replaced by is
?>