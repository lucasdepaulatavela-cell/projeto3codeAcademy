<?php

$peso = 75;
$altura = 1.80;

$IMC = $peso / ($altura * $altura);

echo $IMC;
echo "\n";

if ($IMC < 18.5){
    echo"Abaixo do peso\n";
}
if ($IMC > 18.5 && $IMC < 25.0){
    echo "Peso normal\n";
}
if ($IMC > 25 && $IMC < 30){
    echo "Sobrepeso\n";
}
if ($IMC >= 30){
    echo "Obesidade\n";
}

?>