<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../html/css/style.css">
    <title>Coche</title>
</head>
<body>
    <header>
        <h1>Coche</h1>
        <div class="wrapper">
            <div class="select-btn">
                <span>Selecciona Caso</span>
                <i class="uil uil-angle-down"></i>
            </div>
            <div class="content">
                <div class="search">
                    <i class="uil uil-search"></i>
                    <input type="text" spellcheck="false" placeholder="Buscar">
                </div>
                <ul class="options"></ul>
            </div>
        </div>
    </header>
    <nav>
        
    </nav>
    <section>
        <h2>Clase Coche</h2>
        <form action="">
            <?php
            error_reporting(0);
            $tipoCombustible = $_GET['txtGasolina'];
            $cantidad = $_GET['txtCantidad'];
            $acelerar = $_GET['txtAcelerar'];
            ?>
            <div class="centrar container"><img id="myImagen" src="../../images/coche.gif" alt="" width="400px"></div>
            <p>Esta nave utiliza Gasoil</p>
            <fieldset>
            <legend>Formulario</legend>
                <table align="center">
                    <tr>
                        <td>Tipo Combustible</td>
                        <td><input required type="text" name="txtGasolina" id="ancho2" value="<?php echo $tipoCombustible; ?>"></td>
                        <td></td>
                    </tr>
            
                <tr>
                    <td>Cantidad Combustible</td>
                    <td><input required type="text" name="txtCantidad" id="ancho2" value="<?php echo $cantidad; ?>"></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Aceleración</td>
                    <td><input required type="text" name="txtAcelerar" id="ancho2" value="<?php echo $acelerar; ?>"></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" id="button" value="Resultado"></td>
                    <td></td>
                </tr>
            
            </table>
        </fieldset>
        <fieldset id="blanco">
                <legend><h3>Resultado</h3></legend>
            <table align = "center">
                <tr>
                    
                </tr>
                
                <?php
                    class Coche {
                        public $combustible;
                        public $deposito;
                        public $litros;
                        // En el constructor de la clase podremos indicar el tipo de combustible que acepta el coche 
                        // (no uses una clase para el combustible, basta con una cadena de texto como "Gasolina"). 
                        // Si no se indica nada el combustible será Gasolina.
                        public function __construct($combustible = "Gasolina", $deposito = 0, $litros = 0) {
                            $this->combustible = $combustible;
                            $this->deposito = $deposito;
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
                            return ($this->litros <= 0) ? "parado" : "en marcha";
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
        
                        public function acelerar($acelerar) {
                            // Verificar si hay suficiente combustible
                            if ($this->litros < 10) {
                                //(le quedan menos de 10 litros de combustible) no se puede acelerar
                                return $acelerar = 0;
                            }
                            return $acelerar;
                        }
                
                        public function repostar($Combustible, $llenar) {
                            if ($this->combustible == $Combustible) {
                                $this->litros += $llenar;
                                return $this -> litros."<br>";
                            } else {
                                $this->litros += 0;
                                return $this -> litros."<br>";
                            }
                        }
                    }

                    $miCoche2 = new Coche('Gasoil');
                        echo "Velocidad después de acelerar con el depósito vacío: " . $miCoche2 -> acelerar($acelerar) . "<br>";
                        echo "Combustible después de repostar con el combustible $tipoCombustible:  ".$miCoche2 -> repostar($tipoCombustible, $cantidad);
                        echo "Combustible después de echar ".$cantidad." litros de gasóleo: " . $miCoche2 -> repostar("Gasoil", $cantidad);
                        echo "Velocidad después de acelerar con combustible en el depósito: " . $miCoche2 -> acelerar($acelerar) . "<br>";
                        echo "Estado del coche: " . $miCoche2->obtenerEstado()." porque tiene menos de 10 de combustible <br>";
                        echo $miCoche2 -> comprobarCombustible();
                        if ($miCoche2->obtenerEstado() == "en marcha") {
                            $marcha = 1;
                        }else {
                            $marcha = 0;
                        }              
                ?>
                <script>
                var marcha = <?php echo $marcha; ?>;
                if (marcha == 1) {
                    document.getElementById("myImagen").src = "../../images/coche.gif";
                } else {
                    document.getElementById("myImagen").src = "../../images/coche_stopped.gif";
                }
                </script>
                
            </table>
        </fieldset>  
        </form>
       
    </section>
    <br>
    <footer>
        <h6>HectorFD Copyright © 2024, todos los derechos reservados </h6>
    </footer>
    <script src="../../html/js/script.js"></script>
</body>
</html>



