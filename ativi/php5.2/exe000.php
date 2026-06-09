<?php

$salarios = [2500, 3200, 1800, 4500, 2900, 3700];

$totals = array_sum($salarios); 
$medias = (array_sum($salarios) / count($salarios));
$maiors = max($salarios);
$menors = min($salarios);

print_r($salarios);

print "A soma dos salarios é: R$" . number_format($totals, 0,",",".") . "\n";
print "A media é: R$" . number_format($medias, 0,",",".") ."\n";
print "O maior valor é: R$" . number_format($maiors, 0,",",".") ."\n";
print "O menor valor é: R$" . number_format($menors, 0,",",".") ."\n";

?>