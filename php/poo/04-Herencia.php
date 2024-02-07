<?php
class selecciónFutbol{
    public $id;
    public $nombre;
    public $edad;

    public function __construct($id,$nombre,$edad){
        $this -> id = $id;
        $this -> nombre = $nombre;
        $this -> edad = $edad;
    }
    public function concentrarse(){
        echo $this->nombre." esta concentrado";
    }
    public function viajar(){
        echo $this->nombre." esta viajando";
    }
}

//clase hija
class Jugador extends selecciónFutbol{

    public $posición;
    public $numero;
    //Constructor

    public function __construct($id,$nombre,$edad,$posición, $numero){
        
        parent::__construct($id,$nombre,$edad);
        $this -> posición = $posición;
        $this -> numero = $numero;
    }

    //metodos de una clase
    public function entrenar(){
        echo "el jugador ".$this->nombre." esta entrenando";
    }
    public function jugar(){
        echo "el jugador con camiseta: ".$this->numero." esta jugando";
    }
}
//clase hija
class Entrenador extends selecciónFutbol{
    public $experiencia;
    public function __construct($id,$nombre,$edad,$experiencia){
        parent::__construct($id,$nombre,$edad);
        $this -> experiencia = $experiencia;
    }
    public function dirigirEntrenamiento(){
        echo $this -> nombre ." esta dirigiendo el entrenamiento";
    }
    public function dirigirPartido(){
        echo $this -> nombre ." esta dirigiendo el juego";
    }   
}
//instancia
$jugador1 = new Jugador(123,"Hector FD",20,"Delantero",7);
echo $jugador1 -> concentrarse();