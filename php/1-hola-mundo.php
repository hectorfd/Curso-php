<?php
echo "Hola mundo \n";

echo "Este es mi programa";

$mi_texto = "esto es un texto no te olvides de cerrar el punto y coma";
echo $mi_texto . "\n";
echo gettype($mi_texto);// imprime el tipo de dato como contiene texto esto es un string

$mi_texto = 6;
echo "\n". $mi_texto. "\n";
echo gettype($mi_texto);// el tipo de dato cambia a integer 

$entero = 7;
$entero = $entero +4;
echo $entero ."\n";
echo $entero -1 ."\n";

//para decimales utilizaremos double
$my_double = 8.3;
echo gettype($my_double)."\n";
// php es un lenguaje de tipado dinámico 
$my_bool = true;
echo $my_bool."\n";
echo gettype($my_bool);

echo "todo ok";