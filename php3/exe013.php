<?php

function Primo($numero) {
    if ($numero < 2) {
    return false;
    }
    for ($i = 2; $i < sqrt($numero); $i++){
    if ($numero % $i == 0) {
        return false;
    }
    return true;
    }
} 

    for ($i = 2; $i <= 50; $i++){
        if (Primo($i)) {
            echo $i . "\n";
        }
    }

?>