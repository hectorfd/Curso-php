<?php
function play(){
    echo "En competencia";
}
play();

//*Suma de 2 numeros
function sumar($a,$b){
    echo "<br> La suma es: ".$suma = $a + $b;
}
sumar(107,789);
//*hacer una funciona que calcule una operacion matematica

function operaciones($num1, $num2, $operacion){

    switch ($operacion) {
        case 'suma':
            echo "<br>La suma de $num1 + $num2 = ".$num1 + $num2;
            break;
        case 'resta':
            echo "<br>La resta de $num1 - $num2 = ".$num1 - $num2;
            break;
        case 'multiplicacion':
            echo "<br>La multiplicacion de $num1 x $num2 = ".$num1 * $num2;
            break;
        case 'division':
            echo "<br>La division de $num1 ÷ $num2 = ".$num1 / $num2;
            break;        
        default:
            echo "no existe la operacion";
            break;
    }
}
operaciones(567,14,'division');

//!Actividad
/**
 *? Se acercan las próximas elecciones estudiantiles en la universidad y te piden realizar
 *? un programa para verificar si un estudiante puede o no votar. Ten en cuenta que:
 *? el estudiante debe tener como minimo 18 años
 *! Datos para verificar
 ** Ashley: 14 años
 ** Luis Camilo: 20 años
 ** Fernando: 16 años
 ** Jorge: 22 años
*/
echo "<br>";
function eleciones($alias, $años){
    if ($años >= 18) {
        echo $alias." Puede votar";
    }else {
        echo $alias." No puede votar";
    }
}
eleciones("Ashley",14);

?>