<?php

$nota1 = 9.1;
$nota2 = 7.7;
$nota3 = 8.4;

$media = ($nota1 + $nota2 + $nota3) / 3;
echo $media;
echo "\n";

if ($media >= 7.0){
    echo "Aprovado\n";
}
if ($media >= 5.0 && $media < 7.0){
    echo "Recuperacao\n";
}
if ($media < 5.0) {
    echo "Reprovado\n";
}
?>