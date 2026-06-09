<?php

$nota = 7.5;

echo ($nota >= 7.0) ? "Aprovado\n" :
     (($nota >= 5.0 && $nota < 7.0) ? "Recuperacao\n" : "Reprovado\n");

//if ($nota >= 7.0){
//    echo "Aprovado\n";
//}

//if ($nota < 7.0 && $media >= 5.0){
//    echo "Recuperacao\n";
//}

//if ($nota < 5.0){
//    echo "Reprovado\n";
//}

?>