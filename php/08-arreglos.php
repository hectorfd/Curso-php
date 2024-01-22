<?php
$arreglo1 = array("Elemento1",2,"elemento3",25,5.6);
echo "<pre>";
var_dump($arreglo1);
echo "</pre>";
echo "<ol>";
for ($i=0; $i < count($arreglo1); $i++) { 
    
    echo "<li>".$arreglo1[$i]."</li>";
    
}
echo "</ol>";
//?clave => valor
$datos = array(
    'nombre' => 'Hector',
    'edad'=> 25,
    'celular' => 968197145,
    'estatura' => 1.60
);

foreach ($datos as $nombre => $valor) {
    echo "$nombre: $valor <br>";
}
echo "<br>";
//!Imagina que comenzaste a ir al gimnasio y has creado la siguiente rutina de ejercicios que realizarás de lunes a viernes:
//* Lunes: Pecho, Espalda, Hombros
//* Martes: Piernas, Glúteos
//* Miércoles: Biceps, Espalda, Hombros
//* Jueves: Triceps, Biceps
//* Viernes: Piernas, Pantorrillas
//? Ahora, para que no se te olvide decides escribir un programa que almacene cada rutina y para saber qué ejercicio te toca simplemente debes colocar el nombre del día de la semana y esto te arrojará la rutina a realizar.



function gym($opción){
    $dia = array(
        'Lunes' => 'Pecho, Espalda, Hombros',
        'Martes' => 'Piernas, Glúteos',
        'Miércoles' => 'Biceps, Espalda, Hombros',
        'Jueves' => 'Triceps, Biceps',
        'Viernes' => 'Piernas, Pantorrillas'
    );


    switch ($opción) {
        case 'Lunes':
            $nombre_dia = array_keys($dia)[0];
            echo "$nombre_dia Tienes rutina de ".$dia[$nombre_dia];
            break;
        case 'Martes':
            $nombre_dia = array_keys($dia)[1];
            echo "$nombre_dia Tienes rutina de ".$dia[$nombre_dia];
            break;
        case 'Miércoles':
            $nombre_dia = array_keys($dia)[2];
            echo "$nombre_dia Tienes rutina de ".$dia[$nombre_dia];
            break;
         case 'Jueves':
            $nombre_dia = array_keys($dia)[3];
            echo "$nombre_dia Tienes rutina de ".$dia[$nombre_dia];
            break;
        case 'Viernes':
            $nombre_dia = array_keys($dia)[4];
            echo "$nombre_dia Tienes rutina de ".$dia[$nombre_dia];
            break;
        default:
        echo "Solo tienes rutinas de Lunes a Viernes";
            break;
    }

}
gym("Martes");
