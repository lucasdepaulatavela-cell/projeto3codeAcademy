<?php

$soma = 0;
$i = 0;
for ($i = 0; $i < 100; $i++){
    $soma += $i;
    if($soma > 200){
        break;
    };
}

echo $soma ."\n" . $i . "\n";

?>