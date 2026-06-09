<?php

$cidades = ["São Paulo", "Rio de Janeiro", "Curitiba", "Belo Horizonte", "Salvador"];

print_r($cidades);

if(in_array("Curitiba", $cidades)){
    print "Curitiba existe" . "\n";
}

print "Curitiba esta na posicao: " . array_search("Curitiba", $cidades);

?>

