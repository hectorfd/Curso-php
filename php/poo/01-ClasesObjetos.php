<?php
class Jugador{
    public $nombre;
    public $posición;
    public $numero;
}
//objeto
//instancia el objeto
$jugador1 = new Jugador();
//sintaxis de felcha
$jugador1 -> nombre = "Hector Ferro";
$jugador1 -> posición = "delantero";
$jugador1 -> numero = "10";


echo 'Nombre: '.$jugador1->nombre."<br>";
echo 'Posición: '.$jugador1->posición."<br>";
echo 'Numero: '.$jugador1->numero."<br>";


