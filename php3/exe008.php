<?php

$i = 0;

for ($i = 0; $i < 20; $i++){
    if ($i % 3 == 0){
    continue;
    }
    echo $i . "\n";
    $i ++;
}

?>