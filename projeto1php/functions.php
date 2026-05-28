<?php   
        function Cadastro(){

        $nome = readline("Nome do aluno(a): \n");
        $matricula = strtolower(readline("A matricula está ativa? S/N \n"));
        if ($matricula === "s"){
            $matricula = "Ativa";
        } else {
            $matricula = "Desligada";
        }
        $qNotas = intval(readline("Quantas notas você gostaria de cadastrar? \n"));

        $notas = [];

        for($i = 0; $i < $qNotas; $i++){
            $notas[] = floatval(readline("Digite a nota do aluno(a); "));
        }
        
        if ($qNotas > 0){
            $media = array_sum($notas) / $qNotas;
        } else {
            $media = 0;
        }
            $aprovado = $media >=7;

        return [
            "Nome" => $nome,
            "Matricula" => $matricula,
            "Notas" => $notas,
            "Media" => $media,
            "Aprovado" => $aprovado ? "Aprovado" : "Reprovado"
        ];

        }
?>