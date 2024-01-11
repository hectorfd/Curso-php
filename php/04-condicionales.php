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
//?else
//?Los ternarios
//?La sentencia Switch
//* condicionales compuestas

?>