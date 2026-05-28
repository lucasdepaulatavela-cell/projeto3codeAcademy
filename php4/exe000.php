<?php

$frase1 = "Aprender PHP eh divertido!";
$frase2 = "Aprender PHP é divertido!";


$tamanho = strlen($frase1);
$tamanho2 = mb_strlen($frase2, 'UTF-8');

echo $frase1 . ":" . $tamanho . "\n" . $frase2 . ":" . $tamanho2 . "\n";

?>