<?php   
    require_once 'main.php';
        function Cadastro($id){

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
            "ID" => $id,
            "Nome" => $nome,
            "Matricula" => $matricula,
            "Notas" => $notas,
            "Media" => $media,
            "Aprovado" => $aprovado ? "Aprovado" : "Reprovado"
        ];

        }

        function Listando($alunos){

            usort($alunos, function($a, $b) {
                return strcmp($a["Nome"], $b["Nome"]);
                });

            foreach ($alunos as $estudante) {
                echo "ID: " . $estudante['ID'] . "\n";
                echo "Nome: " . $estudante['Nome'] . "\n";
                echo "Matricula: " . $estudante['Matricula'] . "\n";
                echo "Media: " . $estudante['Media'] . "\n";
                echo "Aprovado: " . $estudante['Aprovado'] . "\n"; 
            }
          }

          function Buscando($alunos){

          $encontrou = false;
          $trecho = readline("Digite o nome do aluno que busca: ");

          foreach ($alunos as $estudante) {
            if (strpos(
                strtolower($estudante['Nome']),
                strtolower($trecho))
                 !== false) {
                $encontrou = true;
                echo "Aluno(s) encontrado(s): " . $estudante['Nome'] . "\n";
                }      
          }
           if ($encontrou === false){
                    echo "Aluno não encontrado!" . "\n";       
                    }
          }

            function Editando($alunos){
                $alvo = readline("Digite o ID do alvo de edição: ");
                foreach ($alunos as &$estudante){
                if ($alvo == $estudante["ID"]) {
                    echo "O nome atual é: " . $estudante['Nome']. "\n";
                    $rep = readline("Deseja alterar o nome ? S/N ");
                    if (strtolower($rep) === "s"){
                    $estudante['Nome'] = readline("Novo nome:" ."\n");
                    }
                    $estudante['Matricula'] = strtolower(readline("A matricula permanece ativa? S/N \n"));
                        if ($estudante['Matricula'] === "s"){
                        $estudante['Matricula'] = "Ativa";
                            } else {
                        $estudante['Matricula'] = "Desligada";
                        }
                    
                    $estudante['Media'] = readline("Nova média: ");

                    $estudante['Aprovado'] = $estudante['Media'] >= 7;

                    $estudante['Aprovado'] ? "Aprovado" : "Reprovado";
                    
                }

                }
                }
            
            
    ?>