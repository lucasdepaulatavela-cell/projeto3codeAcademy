<?php

$string = "O rato roeu a roupa do rei de Roma";
$search1 = "roupa";

$posicao = strpos($string, $search1);
$posicao2 = strripos($string, "r");
echo $string . "\n" . $posicao . "\n" . $posicao2 ."\n";

?>