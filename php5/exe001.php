<?php

$array = [
    "Nome" => "João",
    "Idade" => "25"
];

foreach ($array as $key => $value){
    echo $array[$key] = $value . "\n";
}

print_r($array);
?>