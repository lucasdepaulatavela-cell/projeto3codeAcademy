<?php
require_once 'functions.php';

$whileResposta = true;


while ($whileResposta) {

    system('clear');

print "MENU\n";
print "------------------\n";
print "Cadastrar - 1\n";
print "Listar - 2\n";
print "Buscar - 3\n";
print "Editar - 4\n";
print "Remover - 5\n";
print "Estatisticas - 6\n";
print "Sair - 0\n";

$opcao = readline("Escolha: \n");

switch ($opcao){

    case "1":
    print "Cadastrando: \n";
        $alunos = Cadastro();
        print_r($alunos);
    break;

    case "2":
    print "Listando: \n";
    print_r($alunos);
    break;

    case "3":
    print "Buscando: \n";
    array_search(readline("Digite o nome do aluno:") , $alunos);
    break;

    case "4":
    print "Editando: \n";
    break;

    case "5":
    print "Removendo: \n";
    break;

    case "6":
    print "Estatisticas : \n";
    break;

    case "0":
    $whileResposta = false;
    break;
}
readline("Pressione enter para continuar");

}



?>