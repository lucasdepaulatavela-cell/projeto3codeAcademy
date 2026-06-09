<?php

$valorTotal = 1899.90;
$numParcelas = 6;

echo floor($valorTotal / $numParcelas);
echo "\n";
echo ceil($valorTotal / $numParcelas);
echo "\n";
echo round($valorTotal / $numParcelas);
echo "\n";

$centavoperdido = round($valorTotal / $numParcelas) * $numParcelas - $valorTotal;

echo $centavoperdido;
echo "\n";

?>