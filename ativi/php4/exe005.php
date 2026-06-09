<?php

$string = "Eu gosto de Java";
$string2 = "Eu gosto de JAVA e java";

$modString = str_replace("Java", "PHP", $string);
$modString2 = str_ireplace("java", "PHP", $string2);

echo $string . "\n" . $modString . "\n" . $string2 . "\n" . $modString2 . "\n";

?>