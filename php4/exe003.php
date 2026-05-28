<?php

$string = "abcdefghij";

$part1String = substr($string, 0, 3);
$part2String = substr($string, 4, -3);
$part3String = substr($string, -2);


echo $string . "\n" . $part1String . "\n" . $part2String ."\n". $part3String ."\n";

?>