<?php

/* $contador = 1;
$resultado = $contador++;

echo $resultado; */

// Tiene asociatividad izquierda, es decir que primero se ejecuta el codigo de la izquierda (1 - 2), y luego lo que sigue.

# echo 1 - 2 - 3;


// Tiene asociatividad derecha.

# $b = 5;
/* $c = 10;

$a = $b = $c;

echo $a;
 */

$michis_4_patas = true;
$michis_programan = false;

$resultado = $michis_4_patas and $michis_programan;

var_dump($resultado); // Aunque el resultado deberia darme false porque hay un true y un false, me da como resultado true porque primero se realiza la operacion de ($resultado = $michis_4_patas)


$resultado2 = ($michis_4_patas and $michis_programan); 

var_dump($resultado2); // Ahora que le puse los parentesis para que primero se realice esa operacion, el resultado e dara false.


$operacion = 1 + 5 * 3;
var_dump($operacion); // Primero multiplica porque la multiplicacion tiene mayor precedencia que la suma.


echo "\n";