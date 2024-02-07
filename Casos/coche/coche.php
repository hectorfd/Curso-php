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
        <h2>Casa de Préstamo</h2>
        <form action="">
            <div class="centrar"><img src="../images/prestamos.png" alt="" width="40%"></div>
            <?php
            error_reporting(0);
            $cuotas = $_GET['txtCuotas'];
            $cliente = $_GET['txtCliente'];
            $monto = $_GET['txtMonto'];

            switch ($cuotas) {
                case '3':
                    $impuesto = ($monto * 0.05); 
                    break;
                case '6':
                    $impuesto = ($monto * 0.07);
                    break;
                case '9':
                    $impuesto = ($monto * 0.1);
                    break;
                case '12':
                    $impuesto = ($monto * 0.2);
                    break;
                default:
                    $impuesto = 1;
                    break;
            }

            
            class Coche {
                public $combustible;
                public $deposito;
                public $reserva;
                public $litros;
                // En el constructor de la clase podremos indicar el tipo de combustible que acepta el coche 
                // (no uses una clase para el combustible, basta con una cadena de texto como "Gasolina"). 
                // Si no se indica nada el combustible será Gasolina.
                public function __construct($combustible = "Gasolina", $deposito = 0, $reserva = true, $litros = 0) {
                    $this->combustible = $combustible;
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
                    return ($this->litros == 0) ? "parado" : "en marcha";
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

            $miCoche2 = new Coche('Gasoil');
            echo "Velocidad después de acelerar con el depósito vacío: " . $miCoche2 -> acelerar(10) . "<br>";
            echo "Combustible después de repostar con el combustible equivocado:  ".$miCoche2 -> repostar("Gasolina", 40);
            echo "Combustible después de echar 40 litros de gasóleo: " . $miCoche2 -> repostar("Gasoil", 40);
            echo "Velocidad después de acelerar con combustible en el depósito: " . $miCoche2 -> acelerar(10) . "<br>";
            echo "Estado del coche: " . $miCoche2->obtenerEstado()."<br>";
            echo $miCoche2 -> mostrarTipoCombustible();
            


            ?>
            <fieldset>
            <legend>Formulario</legend>
                <table align="center">
                    <tr>
                        <td>Cliente</td>
                        <td><input type="text" name="txtCliente" id="ancho" value="<?php echo $cliente?>"></td>
                        <td></td>
                    </tr>
            
                <tr>
                    <td>Monto prestado</td>
                    <td><input type="text" name="txtMonto" id="ancho2" value="<?php printf("%.2f", $monto); ?>"></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Cuotas</td>
                    <td>
                        
                    <select name="txtCuotas">
                        
                    </select>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" id="button" value="Cotizar"></td>
                    <td></td>
                </tr>
            
            </table>
        </fieldset>
        <fieldset id="blanco">
                <legend><h3>Resultado</h3></legend>
            <table align = "center">
                <tr>
                    <td>N de Cuota</td>
                    <td>fechas de pago</td>
                    <td>Monto mensual</td>
                </tr>
                
                <?php
                    $monto = $monto + $impuesto;
                    $fecha = date("d-m-Y");
                    for ($i=1; $i <= $cuotas ; $i++) { 
                        echo "<tr>";
                            echo "<td>";
                            echo $i." cuota";
                            echo "</td>";
                            echo "<td>";
                            echo date("d-m-Y", strtotime("+$i month", strtotime($fecha)));
                            echo "</td>";
                            echo "<td>";
                            printf("S/. %.2f", ($monto/$cuotas));
                            echo "</td>";
                        echo "</tr>";
                    }
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



