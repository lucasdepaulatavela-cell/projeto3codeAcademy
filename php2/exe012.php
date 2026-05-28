<?php

$lado1 = 5;
$lado2 = 5;
$lado3 = 8;

if ($lado1 < $lado2 + $lado3 &&
    $lado2 < $lado1 + $lado3 &&
    $lado3 < $lado1 + $lado2) {

    echo "Pode formar um triângulo\n";

    if ($lado1 == $lado2 && $lado2 == $lado3) {
        echo "Equilátero\n";
    }
    elseif ($lado1 != $lado2 &&
            $lado1 != $lado3 &&
            $lado2 != $lado3) {

        echo "Escaleno\n";
    }
    else {
        echo "Isósceles\n";
    }

} else {
    echo "Não pode formar um triângulo\n";
}

?>