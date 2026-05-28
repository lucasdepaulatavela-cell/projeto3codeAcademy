<?php

$valorInt = 7;
$valorFloat = 7.7;
$valorString = "Sete";
$valorBoolean = true;
$valorNulo = null;
$valorNumerico = 14;


if (is_int($valorInt)) {
    echo "É inteiro\n";
}

if (is_float($valorFloat)) {
    echo "É decimal\n";
}

if (is_string($valorString)){
    echo "É string\n";
}

if (is_bool($valorBoolean)){
    echo "É boolean\n";
}

if (is_null($valorNulo)){
    echo "É nulo\n";
}

if (is_numeric($valorNumerico)){
    echo "É numerico\n";
}


?>
