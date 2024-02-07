<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../html/css/style.css">
    <title>Practica Grupal</title>
</head>
<body>
    <header>
        <h1>Practica Grupal</h1>
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
        <h2>Integrantes</h2>
        <ul>
            <li>Hector Ferro Dávalos</li>
            <li>Alejandra Jimena</li>
            <li>Dany Jeremy</li>
        </ul>
    </section>
    <br><br>
    <section>
        <h2>Funciones para variables</h2>
        <form action="">
            <?php
            error_reporting(0);
            $lista = $_GET['txtLista'];
            $variable = $_GET['txtVariable'];
            
            // if (is_numeric($variable)) {
            //     settype($variable, "integer");
            // }
            if (is_numeric($variable)) {
                if (strpos($variable, ".") !== false) {
                    $dato = (double) $variable;
                } elseif (strpos($variable, ".") === false) {
                    $dato = (integer) $variable;
                }
            }else {
                $dato = (string)$variable;
                if (strpos($variable, ">") !== false) {
                    $dato = (boolean)$variable;
                }
                if (strpos($variable, "<") !== false) {
                    $dato = (boolean)$variable;
                }
                if (strpos($variable, "<=") !== false) {
                    $dato = (boolean)$variable;
                }
                if (strpos($variable, ">=") !== false) {
                    $dato = (boolean)$variable;
                }
                if (strpos($variable, "!=") !== false) {
                    $dato = (boolean)$variable;
                }
                if (strpos($variable, "true") !== false) {
                    $dato = (boolean)$variable;
                }
                if (strpos($variable, "false") !== false) {
                    $dato = (boolean)$variable;
                }
            }
            
            
           
            switch ($lista) {
                case '1':
                    $funcion = 'Función isset ';
                    if (isset($dato)) {
                        $resultado = 'La variable esta definida';
                    }else {
                        $resultado = 'La variable no esta definida';
                    }
                    $descripción = 'indica si una funcion esta definida o no';
                    $sel1 = "selected";
                    break;
                case '2':
                    $funcion = 'Función Unset';
                    unset($variable);
                    $resultado = 'se elimino esta variable';
                    $descripción = 'elimina la variable, Liberando el espacio en memoria';
                    $sel2 = "selected";
                    break;
                case '3':
                    $funcion = 'Función Gettype';
                    $resultado = gettype($dato);
                    $descripción = 'Retorna el tipo de dato de la variable proporcionada';
                    $sel3 = "selected";
                    break;
                 case '4':
                    $funcion = 'Función settype';
                    settype($dato, "integer");
                    $resultado = ' Se cambio a entero resultado: '.$dato;
                    $descripción = 'por falta de presupuesto y tiempo solo cambiaremos el valor a entero xd';
                    $sel4 = "selected";
                    break;
                case '5':
                    $funcion = 'Función empty';

                    if (empty($variable)) {
                        $resultado = "La variable está vacía";
                    } else {
                        $resultado = "La variable no está vacía";
                    }
                    $descripción = 'Verifica si una variable está vacía';
                    $sel5 = "selected";
                    break;
                 case '6':
                    $funcion = 'Función is_integer';
                    
                    if (is_integer($dato)) {
                        $resultado = "el valor $dato es un entero.";
                    } else {
                        $resultado = "el valor $dato no es un entero.";
                    }
                    $descripción = 'Determina si el tipo de una variable es un entero';
                    $sel6 = "selected";
                    break;
                 case '7':
                    
                    $funcion = 'Función is double';
                    if (is_double($dato)) {
                        $resultado = "La variable es un flotante.";
                    } else {
                        $resultado = "La variable no es un flotante.";
                    }
                    $sel7 = "selected";
                    break;
                case '8':   
                    $funcion = 'Función is String';
                    if (is_string($dato)) {
                        $resultado = "La variable es un String.";
                    } else {
                        $resultado = "La variable no es un String.";
                    }
                    $sel8 = "selected";
                    break;
                case '9':   
                    $funcion = 'Función var _dump';
                    function mostrar(){
                        $variable = $_GET['txtVariable'];
                        var_dump($variable);
                    }                   
                    $sel9 = "selected";
                    break;
                
                default:
                    $resultado ='ocurrio un error';
                    break;
            }
            ?>
            <fieldset>
            <legend>Formulario</legend>
                <table align="center">
                    <tr>
                        <td>Variable</td>
                        <td><input type="text" name="txtVariable" id="ancho" value="<?php echo $variable;?>"></td>
                        <td></td>
                    </tr>
            
                <tr>
                    <td>Funcion</td>
                    <td>
                    <select name="txtLista">
                        <option value="1" <?php echo $sel1;?>>1. Función isset</option>
                        <option value="2" <?php echo $sel2;?>>2. Función Unset</option>	
                        <option value="3" <?php echo $sel3;?>>3. Función Gettype</option>
                        <option value="4" <?php echo $sel4;?>>4. Función settype</option>
                        <option value="5" <?php echo $sel5;?>>5. Función empty</option>
                        <option value="6" <?php echo $sel6;?>>6. Función is_integer</option>
                        <option value="7" <?php echo $sel7;?>>7. Función is double</option>
                        <option value="8" <?php echo $sel8;?>>8. Función is_string</option>
                        <option value="9" <?php echo $sel9;?>>9. Función var _dump</option>
                               
                </select>
                    </td>
                    <td><?php echo $descripción;?></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" id="button" value="Mostrar"></td>
                    <td></td>
                </tr>
            
            </table>
        </fieldset>
        <fieldset id="blanco">
                <legend><h3>Resultado</h3></legend>
            <table align = "center">
                <tr>
                    <td>Función</td>
                    <td>Resultado</td>
                    <td></td>
                </tr>
                <?php

                    echo "<tr>";
                        echo "<td>";
                        echo $funcion;
                        echo "</td>";
                        echo "<td>";
                        echo $resultado;
                        echo "</td>";
                        echo "<td>";
                        echo mostrar();
                        echo "</td>";
                    echo "</tr>";
                   
                ?>
                
            </table>
        </fieldset>  
        </form>
       
    </section>
    <br><br>
    
    <footer>
        <h6>HectorFD Copyright © 2024, todos los derechos reservados </h6>
    </footer>
    <script src="../html/js/script.js"></script>
</body>
</html>