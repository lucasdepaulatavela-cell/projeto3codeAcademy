<?php

$celsius = 36.5;
$temperaturaFouK = 0;
$tipo = "K";

if($tipo == "F"){
    $temperaturaFouK = $celsius * 9/5 + 32;
}

if($tipo == "K"){
    $temperaturaFouK = $celsius +275.15;
}

echo $temperaturaFouK;
echo"\n";

?>