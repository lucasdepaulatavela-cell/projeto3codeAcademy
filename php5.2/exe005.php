<?php

$disciplinas = ["PHP", "JavaScript", "Python", "Java"];
$notas = [8.5, 7.0, 9.2, 6.8];

$array = array_combine($disciplinas, $notas);

print_r($array);

?>