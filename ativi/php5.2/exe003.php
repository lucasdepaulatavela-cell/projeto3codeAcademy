<?php

$alunos = [
[
    "Aluno" => "Max",
    "Notas" => [8,7.5,9,10]
],
[
    "Aluno" => "Felicia",
    "Notas" => [6,5.5,7,8]
],
[
    "Aluno" => "Philip",
    "Notas" => [9,9.5,10,8.5]
],
[
    "Aluno" => "Lauren",
    "Notas" => [7,7.8,6.3,8.4]
]
];

foreach ($alunos as $aluno) {
    $media = array_sum($aluno["Notas"]) / count($aluno["Notas"]);

    if($media >= 7){
        print "O aluno(a) " . $aluno["Aluno"] . " com a média:" . number_format($media,2) ." está aprovado." . "\n";
    }
    else{
        print "O aluno(a) " . $aluno["Aluno"] . " com a média:" . number_format($media,2) ." está reprovado." . "\n";
    }
}
?>