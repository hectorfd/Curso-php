<?php
//* Operadores
//? aritméticos
echo '<h1>Operadores aritméticos</h1>';
$numero1 = 10;
$numero2 = 5;
//!suma (+)
echo $suma = $numero1 + $numero2 . "<br>";
//!resta (-)
echo $resta = $numero1 - $numero2 . "<br>";
//!multiplicación (*)
echo $multi = $numero1 * $numero2 . "<br>";
//!división (/)
echo $div = $numero1 / $numero2 . "<br>";
//!módulo (%)
echo $modulo = $numero1 % $numero2 . "<br>";

//? lógicos
echo '<h1>Operadores lógicos</h1>';
$x = true;
$y = false;
//!and ($ and $) -> true si tanto $a como $b son true
echo $x and $y;
echo "<br>";
//!and ($ && $) -> true si tanto $a como $b son true
echo $x && $y = true;
echo "<br>";
//!or ($ or $) -> true si cualquiera de $a o $b es true
echo $x or $y;
echo "<br>";
//!or ($ || $) -> true si cualquiera de $a o $b es true
echo $x = false || $y = false;
echo "<br>";
//!xor ($ xor $) -> true si  $a o $b es true, pero no ambos
echo $x = true xor $y = true;
echo "<br>";
//!$ (not) -> true si $a no es true
echo !$x;
echo "<br>";
//? comparación
echo '<h1>Operadores de Comparación</h1>';
$a = 10;
$b = 20;
//! $a == $b -> igual -> true si $a es igual a $b
echo $a == $b;//false
echo "<br>";
//! $a === $b -> idéntico -> true si $a es igual y del mismo tipo a $b
echo $a === $b;//false
echo "<br>";
//! $a != $b -> true si $a no es igual a $b
echo $a != $b;//true
echo "<br>";
//! $a <> $b -> true si $a no es igual a $b
echo $a <> $b;//true
echo "<br>";
//! $a !== $b -> true si $a no es igual ni del mismo tipo que a $b
echo $a !== $b;//true
echo "<br>";
//! $a > $b -> true si $a es mayor a $b
echo $a > $b;//false
echo "<br>";
//! $a >= $b -> true si $a es mayor o igual a $b
echo $a >= $b;//false
echo "<br>";
//! $a < $b -> true si $a es menor a $b
echo $a < $b;//true
echo "<br>";
//! $a <= $b -> true si $a es menor igual a $b
echo $a <= $b;//true
echo "<br>";
//? asignación
echo '<h1>Operadores de Asignación</h1>';
//! += -> $a = $a +$b ->$a += $b
//* (+=),(-=),(*=),(/=),(%=)

$n1 = 4.5;
$n2 = 5;

//suma en asignación
echo $n1 += $n2;
echo "<br>";
echo $n1 -= $n2;
echo "<br>";
echo $n1 *= $n2;
echo "<br>";
echo $n1 /= $n2;
echo "<br>";
//echo $n1 %= $n2; Para aplicar %= se debe realizar con números enteros
echo "<br>";
echo fmod($n1 , $n2);



?>