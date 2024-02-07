<?php
class Coche {
    public $combustible;
    public $estado;
    public $deposito;
    public $reserva;
    public $litros;
    // En el constructor de la clase podremos indicar el tipo de combustible que acepta el coche 
    // (no uses una clase para el combustible, basta con una cadena de texto como "Gasolina"). 
    // Si no se indica nada el combustible será Gasolina.

    

    public function __construct($combustible = "Gasolina", $estado = 0, $deposito = 0, $reserva = true, $litros = 100) {
        $this->combustible = $combustible;
        $this->estado = $estado;
        $this->deposito = $deposito;
        $this->reserva = $reserva;
        $this->litros = $litros;
    }

    public function __destruct() {
        echo "Objeto destruido.<br>";
    }

    public function mostrarTipoCombustible() {
        return $this->combustible;
    }
    //El coche comienza estando parado y con el depósito vacío.
    //Saber si el coche está parado o en marcha (si velocidad es mayor que cero estará en marcha)
    public function obtenerEstado() {
        return ($this->estado == 0) ? "parado" : "en marcha";
    }

    public function obtenerDeposito() {
        return ($this->deposito == 0) ? "parado" : "en marcha";
    }
    //Si el coche está en la reserva (le quedan menos de 10 litros de combustible) 
    // no se puede acelerar (es un coche muy exquisito, no acepta combustible de la reserva).
    public function comprobarReserva() {
        if ($this->litros < 10) {
            echo "Le quedan menos de 10 litros, no se puede acelerar (es un coche muy exquisito, no acepta combustible de la reserva)<br>";
        } else {
            echo "Acelera a fondo papu<br>";
        }
    }
    // Si se intenta echar un combustible que no es el correcto no aumentarán los litros de combustible 
    // (también es un coche muy listo, si el combustible no le gusta te lo escupe en la cara)
    public function comprobarCombustible() {
        switch ($this->combustible) {
            case 'Gasolina':
            case 'Petroleo':
            case 'Nafta':
            case 'Gas':
            case 'Gasoil':
                echo "Este coche es muy listo, utiliza {$this->combustible}, así que se aumentan los litros<br>";
                break;
            default:
                echo "No aumentarán los litros de combustible (también es un coche muy listo, si el combustible no le gusta te lo escupe en la cara).<br>";
                break;
        }
    }

    public function acelerar($a) {
        return $a * $this->deposito;
    }

    public function repostar($combustible, $llenar) {
        if ($this->combustible == $combustible) {
            $this->litros += $llenar;
            echo "Repostaje exitoso. Combustible actual: {$this->litros} litros.<br>";
        } else {
            echo "Intento de repostar con combustible incorrecto. No se aumentan los litros.<br>";
        }
    }
}

$miCoche2 = new Coche('Gasoil');
echo "Velocidad después de acelerar con el depósito vacío: " . $miCoche2->acelerar(10) . "<br>";
echo "Combustible después de repostar con el combustible equivocado:  ";
$miCoche2->repostar("Gasolina", 40);
echo "Combustible después de echar 40 litros de gasóleo: " . $miCoche2->repostar("Gasoil", 40) . "<br>";
echo "Velocidad después de acelerar con combustible en el depósito: " . $miCoche2->acelerar(10) . "<br>";
echo "Estado del coche: " . $miCoche2->obtenerEstado();



