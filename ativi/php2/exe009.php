<?php

$preco = 250;
$desconto = 0;

if ($preco > 500){
    $desconto = $preco - ($preco * 15 /100);
}
if ($preco > 200 && $preco < 500){
    $desconto = $preco - ($preco * 10 /100);
}
if ($preco < 200){
    $desconto = $preco - ($preco * 5/100);
}
echo $desconto;
echo"\n";

?>