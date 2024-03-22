<?php

/* $segundos = readline("Ingresa el tiempo en segundos: ");

$horas = (int)($segundos / 3600); // IMPORTANTE PONER LOS PARENTESIS PARA QUE PRIMERO SE HAGA ESA OPERACION, SINO ME SEGUIRA DANDO NUMEROS CON DECIMALES.
$segundos = (int)($segundos % 3600);
$minutos = (int)($segundos / 60);
$segundos = (int)($segundos % 60);

echo "Son $horas horas, $minutos minutos y  $segundos segundos"; */



// Reto de pasar horas minutos y segundos SOLO A SEGUNDOS.

$horas = readline("Ingresa el tiempo en horas: ");
$minutos = readline("Ingresa el tiempo en minutos: ");
$segundos = readline("Ingresa el tiempo en segundos: ");

$total_segundos = ($horas * 3600) + ($minutos * 60) + $segundos;

echo "Total segundos: $total_segundos";

echo "\n";  