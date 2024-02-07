<?php
class Jugador{
    //Prpiedades
    public $nombre;
    public $posición;
    public $numero;
    //metodos de una clase
    public function entrenar(){
        echo "el jugador ".$this->nombre." esta entrenando";
    }
    public function jugar(){
        echo "el jugador con camiseta: ".$this->numero." esta jugando";
    }
}
//objeto
//instancia el objeto
$jugador1 = new Jugador();
//sintaxis de felcha
$jugador1 -> nombre = "Hector Ferro";
$jugador1 -> posición = "delantero";
$jugador1 -> numero = "10";
$jugador1->entrenar();
echo "<br>";

echo 'Nombre: '.$jugador1->nombre."<br>";
echo 'Posición: '.$jugador1->posición."<br>";
echo 'Numero: '.$jugador1->numero."<br>";

$jugador1->jugar();
