<?php

$idades = [12, 18, 25, 15, 30, 17, 21, 16];

$maiorde18 = array_filter($idades, function ($maior){
    return $maior >= 18;
});

print_r($idades);
print_r($maiorde18);

?>