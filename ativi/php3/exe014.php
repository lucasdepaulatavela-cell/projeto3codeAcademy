<?php

$aluno = [
    "Nome" => "Maria",
    "idade" => 22,
    "curso" => "Engenharia",
    "media" => 8.7
];

    foreach ($aluno as $chave => $valor){
    echo $chave . ":" . $valor . "\n";
    }

?>
