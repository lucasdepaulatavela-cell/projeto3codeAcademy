<?php

$string = " Olá, Mundo! ";

$cleanString = trim($string);
$cleanFString = ltrim($string);
$cleanRString = rtrim($string);

echo $string . "\n" . $cleanString . "\n" . $cleanRString . "\n" . $cleanFString . "\n";

?>