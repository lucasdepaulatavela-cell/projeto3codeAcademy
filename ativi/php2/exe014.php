<?php

$numero = 15;

if($numero % 3 == 0 && $numero %5 == 0){
    echo "FizzBuzz\n";
}
elseif($numero % 3 == 0 && $numero % 5 != 0){
    echo "Fizz\n";
}
elseif($numero % 5 == 0 && $numero % 3 != 0){
    echo "Buzz\n";
}
else{
    echo $numero;
}


?>