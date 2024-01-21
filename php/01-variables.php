<?php
// variables y operadores
//TODO Tipos de datos en PHP
//?Escalares
//*Boolean: devuelve 1 valor verdadero o falso
//*integer: números positivos o negativos enteros incluido el 0
//*Float: números decimales de coma flotante
//*String: serie de caracteres PHP admite 256 caracteres
//?Compuestos
//?Especiales

//?Variables: inician con el signo de $
$nombre = "Hector";
$edad = 20;
$altura = 1.65;
$casado = true;
echo $nombre;
echo '<br>';
echo $edad;
echo '<br>';
echo $altura;
echo '<br>';
echo $casado;
echo '<br>';
// Para indicar el tipo de dato y el tamaño podemos utilizar 
var_dump($nombre);
echo '<br>';
// pero tambien podemos utilizar
echo gettype($nombre);

?>