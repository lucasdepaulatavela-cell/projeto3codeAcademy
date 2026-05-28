<?php

$itens = [["Nome" => "Mouse", "Preco" => 50],
 ["Nome" => "Teclado", "Preco" => 120],
 ["Nome" => "Monitor", "Preco" => 900],
 ["Nome" => "Headseat", "Preco" => 200]];

 $total = array_reduce($itens, function($carry, $item) {
    return $carry + $item["Preco"] . "\n";
 }, 0);

 echo $total;

?>