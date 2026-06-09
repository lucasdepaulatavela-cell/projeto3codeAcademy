<?php

$string = "arqusivo_relatorio.pdf";

echo $string . "\n";

if(str_starts_with($string,"arquivo")){
    echo "Comeca com arquivo" . "\n";
}
else{
    echo "Não comeca com arquivo" . "\n";
}

if (str_ends_with($string,"pdf")){
    echo "Termina com pdf" . "\n";
}
else {
    echo "Não termina com pdf" . "\n";
}
?>