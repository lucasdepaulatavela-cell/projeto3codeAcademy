<?php

$string = "42";

$leftString = str_pad($string, 5,"0", STR_PAD_LEFT);
$rightString = str_pad($string, 10,".", STR_PAD_RIGHT);

print $leftString. "\n" . $rightString . "\n" . $string . "\n";
?>