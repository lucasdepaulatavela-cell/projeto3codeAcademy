<?php

$string = "PHP eh uma linguagem popular para desenvolvimento web";

$sepaString = explode(" ", $string);
$numString = str_word_count($string);

print $string . "\n";

print "Numero de palavras: " . $numString . "\n";

print_r( $sepaString );

?>