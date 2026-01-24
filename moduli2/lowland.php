<?php

$schoolname = "Lowland";
echo "I go to $schoolname" . "<hr>";

$numri = 2;
echo "Number is $numri" . "<br>";

$the_word = "Hello world to you";

echo strlen($the_word) . "<hr>";

echo str_word_count($the_word) . "<hr>";

echo str_replace("world", "universe", $the_word) . "<hr>";

echo strrev($the_word) . "<hr>";

?>