<?php

$estoque = ["Camiseta" => 50, "Calça" => 30, "Tênis" => 15, "Boné" => 80, "Meia" => 100];

foreach ($estoque as $produto => $quantidade){
    print $produto . "\n";
}

foreach ($estoque as $produto => $quantidade){
    print $quantidade . "\n";
}
?>