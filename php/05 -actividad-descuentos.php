<?php
// Teniendo en cuenta la tabla, te piden que escribas
// un programa que solicite el nombre del cliente
// y el valor de la compra. Y que arroje como resultado: 
$nombre = 'Hector';
$compra = 300;
if ($compra < 50) {
    $impuesto = $compra - ($compra * 0.05);
}else if($compra >= 50 and $compra <100){
    $impuesto = $compra - ($compra * 0.1);
}else if($compra >= 100 and $compra <= 250){
    $impuesto = $compra - ($compra * 0.15);
}else if($compra > 250 and $compra < 400){
    $impuesto = $compra - ($compra * 0.2);
}
echo 'Nombre del cliente: '. $nombre.'<br>';
echo 'valor de compra sin descuento: '.$compra.'<br>';
echo 'valor de compra con descuento: '.$impuesto.'<br>';
?>