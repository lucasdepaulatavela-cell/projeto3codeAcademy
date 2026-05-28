<?php

$precos = [100, 250, 80, 320, 150];

$descontos = array_map(function($n){
    return ($n - ($n * 10 / 100));
}, $precos);

print_r($precos);

print_r($descontos)

?>