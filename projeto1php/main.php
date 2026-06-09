<?php
require_once 'functions.php';

$whileResposta = true;
$alunos = [];
$proximoId = 1;
$ordenados = [];


while ($whileResposta) {

    system('clear');

print "MENU\n";
print "------------------\n";
print "1 - Cadastrar\n";
print "2 - Listar\n";
print "3 - Buscar\n";
print "4 - Editar\n";
print "5 - Remover\n";
print "6 - Estatisticas\n";
print "Sair - 0\n";

$opcao = readline("Escolha: \n");
switch ($opcao){

    case "1":
    print "Cadastrando: \n";
    print "------------------\n";
    $alunos[] = Cadastro($proximoId);
    $proximoId++;
    break;

    case "2":
    print "Listando: \n";
    print "------------------\n";
    Listando($alunos);
    break;

    case "3":
    print "Buscando: \n";
    print "------------------\n";
    Buscando($alunos);
    break;

    case "4":
    print "Editando: \n";
    print "------------------\n";
    Editando($alunos);
    break;

    case "5":
    print "Removendo: \n";
    print "------------------\n";
    Removendo($alunos);
    break;

    case "6":
    print "Estatisticas : \n";
    print "------------------\n";
    Estaticando($alunos);
    break;

    case "0":
    $whileResposta = false;
    break;
}
readline("Pressione enter para continuar");

}



?>