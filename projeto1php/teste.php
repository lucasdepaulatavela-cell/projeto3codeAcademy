<?php

//echo strcmp("Ana", "Carlos") . "\n";

//echo strcmp("Carlos", "Ana"). "\n";

//echo strcmp("Ana", "Ana"). "\n";

//$nomes = ["Fernanda", "Beatriz", "Amanda"];

//usort($nomes, function($a, $b) {
//    return $a <=> $b; 
//});

//print_r($nomes);
//echo strpos("Carlos", "ar"). "\n";
//echo strpos("Carlos", "os"). "\n";
//echo strpos(strtolower("Carlos"),strtolower("CAR")). "\n";
function alterar(&$lista)
{
    $lista[0] = "João";
}

$nomes = ["Carlos"];

alterar($nomes);

print_r($nomes);


?>