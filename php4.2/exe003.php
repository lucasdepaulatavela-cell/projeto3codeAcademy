<?php

$moeda = 1234567.891;

$moeda_formatada = " R$ " . number_format($moeda,2,",",".");

echo $moeda . "\n" . $moeda_formatada ."\n". number_format($moeda,2,"."."") . "\n";

?>