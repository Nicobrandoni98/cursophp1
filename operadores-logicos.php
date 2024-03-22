<?php

$michis_felinos = true;
$michis_4_patas = true;
$michis_vuelan = false;
$michis_programan= false;


// AND
# var_dump($michis_felinos && $michis_4_patas); // me dara true porque las 2 son true.
# var_dump($michis_vuelan && $michis_4_patas); // me dara false porque 1 es false.

// OR
# var_dump($michis_vuelan || $michis_4_patas); // me dara true porque 1 es true.
#var_dump($michis_felinos || $michis_4_patas); // true

// NOT
# var_dump(!$michis_4_patas); // aunque sea true que los michis tienen 4 patas, con el signo "!" niego esa afirmacion y me devuelve false.
#var_dump (!$michis_programan && !$michis_vuelan); // dara true porque niego que sean false.



// experimento: Fijate que el mismo caso me da true y false

/* $resultado = $michis_4_patas && $michis_programan;
$resultado2 = $michis_4_patas and $michis_programan;
// ESTO ES PORQUE SI EXISTE UNA DIFERENCIA ENTRE PONER "&&" O "AND".
var_dump($resultado);
var_dump($resultado2); */



echo "\n";

