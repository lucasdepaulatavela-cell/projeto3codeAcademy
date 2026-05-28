<?php

$precoOriginal = 250.0;
$desconto = 15;

$novoPreco = $precoOriginal - ($precoOriginal * $desconto / 100) ;

echo "$novoPreco\n";

if ($novoPreco > 200) {
    echo "Compra cara\n";
}
else {
    echo "Compra barata\n";
}

?>
