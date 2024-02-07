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

                public function acelerar($combustibleUtilizado) {
                    // Verificar si hay suficiente combustible
                    if ($this->litros < $combustibleUtilizado) {
                        //(le quedan menos de 10 litros de combustible) no se puede acelerar
                        return $aceleracion=0;
                    }
                    $aceleracion = $combustibleUtilizado * 5;
                    $velocidadFinal = sqrt(2 * $aceleracion);
                    $this->litros -= $combustibleUtilizado;
                
                    return $velocidadFinal;
                }
        
                public function repostar($combustible, $llenar) {
                    if ($this->combustible == $combustible) {
                        $this->litros += $llenar;
                        return $this -> litros."<br>";
                    } else {
                        $this->litros += 0;
                        return $this -> litros."<br>";
                    }
                }
            }

            $miCoche2 = new Coche("Gasoil");
            echo "Velocidad después de acelerar con el depósito vacío: " . $miCoche2 -> acelerar($acelerar) . "<br>";
            echo "Combustible después de repostar con el combustible equivocado:  ".$miCoche2 -> repostar($tipoCombustible, $cantidad);
            echo "Combustible después de echar 40 litros de gasóleo: " . $miCoche2 -> repostar("Gasoil", $cantidad);
            echo "Velocidad después de acelerar con combustible en el depósito: " . $miCoche2 -> acelerar($acelerar) . "<br>";
            echo "Estado del coche: " . $miCoche2->obtenerEstado()."<br>";
            if ($miCoche2->obtenerEstado() == "en marcha") {
                $marcha = 1;
            }
            ?>
            <div class="centrar"><img id="myImagen" src="../../images/coche.gif" alt="" width="400px"></div>
            <script>
            var marcha = <?php echo $marcha; ?>;
            if (marcha == 1) {
                document.getElementById("myImagen").src = "../../images/coche.gif";
            } else {
                document.getElementById("myImagen").src = "../../images/coche_stopped.gif";
            }
            </script>
            
            <fieldset>
            <legend>Formulario</legend>
                <table align="center">
                    <tr>
                        <td>Tipo Combustible</td>
                        <td>
                        <select name="txtGasolina">
                            <option value="1" <?php echo $selGaso;?>>Gasolina</option>
                            <option value="2" <?php echo $selPetro;?>>Petroleo</option>	
                            <option value="3" <?php echo $selNafta;?>>Nafta</option>
                            <option value="4" <?php echo $selGas;?>>Gas</option>
                            <option value="5" <?php echo $selGasoil;?>>Gasoil</option>
                        </select>
                        </td>
                        <td></td>
                    </tr>
            
                <tr>
                    <td>Cantidad Combustible</td>
                    <td><input type="text" name="txtCantidad" id="ancho2" value="<?php echo $cantidad; ?>"></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Aceleración</td>
                    <td><input type="text" name="txtAcelerar" id="ancho2" value="<?php echo $acelerar; ?>"></td>
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
                    <td>Combustible</td>
                    <td>Deposito</td>
                    <td>Estado</td>
                </tr>
                
                <?php
                    $miCoche = new Coche('Gasoil');
                        echo "<tr>";
                            echo "<td>";
                            echo $miCoche -> mostrarTipoCombustible();
                            echo "</td>";
                            echo "<td>";
                            echo $miCoche ->litros = $litros;
                            echo "</td>";
                            echo "<td>";
                            echo $miCoche->obtenerEstado();
                            echo "</td>";
                        echo "</tr>";
                    
                ?>
                
            </table>
        </fieldset>  
        </form>
       
    </section>
    <br>
    <footer>
        <h6>HectorFD Copyright © 2024, todos los derechos reservados </h6>
    </footer>
    <script src="../html/js/script.js"></script>
</body>
</html>



