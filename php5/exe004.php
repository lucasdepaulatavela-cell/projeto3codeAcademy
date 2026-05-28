<?php

$array = [3,1,4,6,7,8,56,7];
$M10 = 0;


print_r($array);

print "Espaços: " . count($array) . "\n";

for ($i = 0; $i < 8; $i++){
    if($array[$i] > 10){
     $M10 += 1;
    }
}
print "Numero acima de 10: " . $M10 . "\n";



?>