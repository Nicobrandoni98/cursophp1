<?php 

$a = 5;
$b = 5;
$b2 = "5";
$c = 9;
$d = 2;

// == Igual
/* var_dump($a == $b);
var_dump($a == $b2);  // me dice true aunque b2 sea string */


// === Identico / estrictamente igual
/* var_dump($a === $b);
var_dump($a === $b2);  // me dara false porque b2 es string */


// != Diferente
/* var_dump($a != $b); // me dara false porque no son diferentes.
var_dump($a != $b2);  // me dara false porque este operador no compara tipos */


// !== Diferente (compara tipos)
/* var_dump($a !== $b); 
var_dump($a !== $b2); */


// < Menor que 
/* var_dump($a < $b);
var_dump($c < $b);
var_dump($d < $b); */


// > Mayor que
/* var_dump($a > $b);
var_dump($c > $b);
var_dump($d > $b); */


// >= Mayor o igual que
/* var_dump($a >= $b);
var_dump($c >= $b);
var_dump($d >= $b); */


// <= Menor o igual que
/* var_dump($a <= $b);
var_dump($c <= $b);
var_dump($d <= $b); */


// <=> OPERADOR DE NAVE ESPACIAL (unico en PHP)
# echo 2 <=> 1; // Si el numero de la izquierda es mayor el numero de la derecha, el resultado será 1

# echo 1 <=> 1; //Si el numero de la derecha es igual que el numero de la izquierda , el resultado será 0

# echo -10 <=> 1; //Si el numero de la izquierda es menor que el numero de la derecha, el resultado será -1



// ?? Fusion de null (lo que hace es darnos el valor de la primer variable que no sea null que encuentre.)
$edad_de_pepe = 23;

echo $edad_de_juan ?? $edad_de_pepe; // Si la edad de Juan no esta definida, usa la edad de pepe


echo "\n";


