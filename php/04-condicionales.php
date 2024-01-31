<?php
//* condicionales simples
//?if
/*realizar un programa que envié un mensaje
solo si este contiene menos de 100 letras
caso contrario que arroje un mensaje de error*/
//!strlen permite contar los caracteres de una cadenas
$letras = "Hola, estamos aprendiendo a escribir código";
if (strlen($letras) < 100) {
    echo "El mensaje tiene: ".strlen($letras)." letras";
}else {
    echo "error";
}
echo'<br>';
//?elseif
/*crear un programa que indique si los habitantes hablan español u otro idioma*/
$idioma = "español";
if ($idioma == "español") {
    echo "el habitante habla español";
}elseif($idioma == "ingles"){
    echo "el habitante habla ingles";
}else{
    echo "el habitante habla otro idioma fuera de la lista";
}
echo'<br>';
//otra forma
$pais = "Peru";
if ($pais == "Mexico"||$pais == "España"||$pais == "Peru") {
    echo "Hablan español";
}else{
    echo "habla otro idioma";
}
echo '<br>';
//?Los ternarios
/*Para que un alumno gane una asignatura debe sacar
 mas de 3 en la nota definitiva, caso contrario
 pierde la asignatura*/
$nota =  14;
echo ($nota >13 ? 'aprobaste el curso satisfactoriamente':'no aprendiste nada');
echo '<br>';
//?La sentencia Switch
/*Realiza un programa que imprime cual es tu color favorito,
mostrar un ejemplo*/
$lista = 'verde';
switch ($lista) {
    case 'marron':
        echo "tu color favorito es: ". $lista;
        break;
    case 'verde':
        echo "tu color favorito es: ". $lista;
        break;
    case 'azul':
        echo "tu color favorito es: ". $lista;
        break;
    default:
        echo "no se que hiciste xd";
        break;
}
//* condicionales compuestas

?>