<?php

$idade = 25;

if ($idade <= 11){
    echo "Crianca\n";
}

if ($idade > 11 && $idade <= 17){
    echo "Adolecente\n";
}

if ($idade > 17 && $idade <= 29){
    echo "Jovem Adulto\n";
}

if ($idade > 29 && $idade <= 59){
    echo "Adulto\n";
}
if ($idade > 59){
    echo "Idoso\n";
}

?>