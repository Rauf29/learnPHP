<?php
const FILENAME = "/Users/roufu/Desktop/learnPHP/oop/construct.php";

//echo pathinfo(FILENAME, PATHINFO_BASENAME);
//echo pathinfo(FILENAME, PATHINFO_DIRNAME);
//echo pathinfo(pathinfo(FILENAME, PATHINFO_DIRNAME), PATHINFO_BASENAME);
//echo pathinfo(FILENAME, PATHINFO_EXTENSION);
//echo pathinfo(FILENAME, PATHINFO_FILENAME);


$parts = explode(".", FILENAME);
echo array_pop($parts);
