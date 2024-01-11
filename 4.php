<?php
$nombre = "Juan";
echo "Hola, " . $nombre . "!"; // Imprime: Hola, Juan!

//echo es una construcción del lenguaje que se utiliza para imprimir uno o más valores en la salida.

$frutas = array("Manzana", "Plátano", "Fresa");
$cadenaFrutas = implode(", ", $frutas);
echo "Mis frutas favoritas son: " . $cadenaFrutas; // Imprime: Mis frutas favoritas son: Manzana, Plátano, Fresa

//implode es una función que se utiliza para concatenar elementos de un array en una sola cadena, usando un delimitador.