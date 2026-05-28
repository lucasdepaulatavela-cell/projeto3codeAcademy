<?php

$valores = [34, 12, 89, 3, 56, 71, 23];
$menor = $valores[0];
$maior = 0;


foreach ($valores as $valore){

    if($valore > $maior){
        $maior = $valore;
    }    

    if($valore < $menor){
        $menor = $valore;
    }
}

echo "Maior valor: " . $maior . "\n" . "Menor valor: " . $menor ."\n";
?>