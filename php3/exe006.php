<?php

$tentativa = [15, -3, 7];
$i = 0;
$nota = 0;

do {
    if($tentativa[$i] > 0 && $tentativa[$i] <= 10){
        $nota = $tentativa[$i];
    
    }
    $i++;
} while($i < 3);

echo $nota . "\n";

?>