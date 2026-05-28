<?php

$string = "O PHP eh uma linguagem de programacao server-side. client";

echo $string . "\n";

if (str_contains($string,"server-side")){
    echo "Ela contem server-side" . "\n";
}
else {
    print "Não contem server-side" . "\n";
}

if  (str_contains($string,"client-side")){
    echo "Ela contem client-side" . "\n";
}
else {
    print "Não contem client-side" . "\n";
}
?>