<?php
//php cuenta con 3 tipos
//?Ciclo while
//* Realizar un programa que imprima del 1 al 10
$a=1;
while ($a <= 10) {
    echo $a."<br>";
    $a++;
}
//* realiza un programa que imprima las tablas de multiplicar
$b = 1;
$numero = 8;
while ($b <= 12) {
    echo $numero." x ".$b." = ".$numero * $b."<br>";
    $b++;
}
//?Ciclo do while
//! primero hace y despues condiciona
$i=11;//imprimira 11 porque primero hace y luego verifica la condicion yse detiene
do {
    echo $i."<br>";
    $i++;
} while ($i <= 10);

//?Ciclo for
for ($e=0; $e < $numero; $e++) { 
    echo $e." ";
}
//*mostrar los numeros pares de 0 al 50
for ($c=0; $c <= 50; $c++) { 
    if (($c%2) == 0) {
        echo $c;
    }
}

//! realizar un algoritmo que calcule el factorial de un numero

$num = 7;
$factorial = 1;
for ($j=1; $j < $num; $j++) { 
    $factorial = $factorial * ($j + 1);
}
echo "<br><br>";
echo $factorial;


?>