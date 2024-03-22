<?php 
//    var_dump($_SERVER); // PICADOOO (ME DA INFORMACION DEL SERVER ES UNA  VARIABLE SUPERGLOBAL)
//    var_dump($GLOBALS);  // CONTIENE UNA REFERENCIA A CADA VARIABLE DISPONIBLE EN EL CAMPO DE LAS VARIABLES DEL SCRIPT.

/* $persona = "Nicolas";
$numero = 26;
$letras = ["A", "B", "C", "D", "E"];

$persona = (string) $persona;
var_dump ($persona);


settype($numero, "double");
settype($letras, "object");

var_dump ($numero);
var_dump ($letras);  

function prueba() {
    global $persona, $numero;
    $info = "Me llamo $persona y tengo $numero años.";
    echo $info; 
}
 echo prueba(); 

function prueba2() {
    global $persona, $numero;
    $persona = "Juan"; // SI CAMBIO EL VALOR DE LA VARIABLE EN LA FUNCION TAMBIEN SE ALTERA EN GLOBAL
    $algo = "Soy $persona y te cuento de la A a la E, $numero .";
    echo $algo;
}
echo prueba2();
echo $persona; // CAMBIO A JUAN */

/* $x = 5;
$x += 5;
echo $x;
echo "\n";

$y = 5;
$y *= 5;
echo $y;
echo "\n";

$z = 5;
$z .= 3;
echo $z; */


/* $numero = -34512;

function condi() {
    global $numero;
    if ($numero >= 50) {
        echo "Tengo +50";
    } else {
        if ($numero < 50 && $numero >= 0) { // ANIDAMIENTO DE CONDICIONALES
            echo "Tengo -50";
        } else {
            if ($numero === -34512) {
                echo "Tengo -34512";
            }
        }
    }
}
echo condi();
 */

/* $diaActual = date("j"); // te da el dia actual

if ($diaActual == 14) { // tengo que poner solamente dos = porque sino no me lo toma
    echo "Hoy es 16"; 
} else {
    echo "no es 14, hoy es $diaActual";
} */

/* $a = 3;
$b = ++$a;
echo "a vale $a y b vale $b";

$a = 3;
$b = $a++; 
echo "a vale $a y b vale $b"; */

/* $pais = array 
(
"argentina" => array
    (
        "nombre" => "Argentina",
        "lengua" => "Casellano",
        "moneda" => "Peso"
    ), 
    "francia" => array 
    (
        "nombre" => "Francia",
        "lengua" => "Frances",
        "moneda" => "Franco"
    )
);
echo $pais["argentina"]["nombre"];
 */

$entrada = array ("a", "b", "c", "d", "e");

/* $intercambio = array_flip($entrada); */

/* print_r(array_chunk($entrada, 1));
 */print_r(array_chunk($entrada, 1, true));
