<?php

$original = "PHP é legal";
$invertida = "";

for ($i = strlen($original) -1; $i >= 0; $i--){
    $invertida .= $original[$i];
}

echo $original . "\n" . $invertida ."\n";

?>