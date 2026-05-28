<?php

$numero = 7;
$i = $numero;
$fatorial = 1;

while ($i > 0){
    $fatorial *= $i;
    $i--;
}

echo $numero . "!" . "=" . $fatorial . "\n";


?>