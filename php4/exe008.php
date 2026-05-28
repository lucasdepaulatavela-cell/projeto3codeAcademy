<?php

$string = "Php";
$string2 = "arara";
$invString = strrev($string);
$invString2 = strrev($string2);

echo $string . "\n" . $invString . "\n" . $string2 . "\n";

if ($string2 === $invString2){
    echo "É um palindromo." . "\n";
}
else{
    echo "Não é um palindromo." .  "\n";
}


?>
