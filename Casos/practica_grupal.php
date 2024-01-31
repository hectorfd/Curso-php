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
            if ($variable==null) {
                $variable = null;
            }
            if (filter_var($variable, FILTER_VALIDATE_INT) !== false) {
                echo "Es un número entero.";
            } else {
                echo "No es un número entero.";
            }

            switch ($lista) {
                case '1':
                    $funcion = 'Función isset';
                    if (isset($variable)) {
                        $resultado = 'La variable esta definida';
                    }else {
                        $resultado = 'La variable no esta definida';
                    }
                    $sel1 = "selected";
                    break;
                case '2':
                    $funcion = 'Función Unset';

                    unset($variable);
                    $resultado = 'se elimino esta variable';

                    $sel2 = "selected";
                    break;
                case '3':
                    $funcion = 'Función Gettype';
                    $resultado =  gettype($variable);
                    $sel3 = "selected";
                    break;
                 case '4':
                    $funcion = 'Función settype';
                    $resultado =  settype($variable, "integer").' Se cambio a entero la variable';
                    $sel4 = "selected";
                    break;
                case '5':
                    $funcion = 'Función empty';

                    if (empty($variable)) {
                        $resultado = "La variable está vacía";
                    } else {
                        $resultado = "La variable no está vacía";
                    }
                    $sel5 = "selected";
                    break;
                 case '6':
                    $funcion = 'Función is_integer';
                    $num = $variable;
                    if (is_integer($num)) {
                        $resultado = "La variable $num es un entero.";
                    } else {
                        $resultado = "La variable $num no es un entero.";
                    }
                    $sel6 = "selected";
                    break;
                 case '7':
                    
                    $funcion = 'Función is double';
                    if (is_double($variable)) {
                        $resultado = "La variable es un flotante.";
                    } else {
                        $resultado = "La variable no es un flotante porque esta en una caja de texto.";
                    }
                    $sel7 = "selected";
                    break;
                case '8':   
                    $funcion = 'Función is double';
                    if (is_string($variable)) {
                        $resultado = "La variable es un String porque esta en una caja de texto.";
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
                    # code...
                    break;
            }

            ?>
            <fieldset>
            <legend>Formulario</legend>
                <table align="center">
                    <tr>
                        <td>Variable</td>
                        <td><input type="text" name="txtVariable" id="ancho" value="<?php echo $variable?>"></td>
                        <td></td>
                    </tr>
            
                <tr>
                    <td>Monto prestado</td>
                    <td>
                    <select name="txtLista">
                        <option value="1" <?php echo $sel1;?>>Función isset</option>
                        <option value="2" <?php echo $sel2;?>>Función Unset</option>	
                        <option value="3" <?php echo $sel3;?>>Función Gettype</option>
                        <option value="4" <?php echo $sel4;?>>Función settype</option>
                        <option value="5" <?php echo $sel5;?>>Función empty</option>
                        <option value="6" <?php echo $sel6;?>>Función is_integer</option>
                        <option value="7" <?php echo $sel7;?>>Función is double</option>
                        <option value="8" <?php echo $sel8;?>>Función is_string</option>
                        <option value="9" <?php echo $sel9;?>>Función var _dump</option>
                               
                </select>

                    </td>
                    <td></td>
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
    <section>
        <h2>Funciones para variables</h2>
        <form action="">
            <?php
            error_reporting(0);
            $lista2 = $_GET['txtLista2'];
            $variable2 = $_GET['txtVariable2'];
            if ($variable2==null) {
                $variable2 = null;
            }

            switch ($lista2) {
                case '1':
                    $funcion = 'Función isset';
                   
                    $sel1 = "selected";
                    break;
                case '2':
                    $funcion = 'Función Unset';

                    

                    $sel2 = "selected";
                    break;
                case '3':
                    $funcion = 'Función Gettype';
                    
                    $sel3 = "selected";
                    break;
                 case '4':
                    $funcion = 'Función settype';
                    
                    $sel4 = "selected";
                    break;
                case '5':
                    $funcion = 'Función empty';

                    
                    $sel5 = "selected";
                    break;
                 case '6':
                    
                    $funcion = 'Función is_integer';
                    
                    $sel6 = "selected";
                    break;
                 case '7':
                    
                    $funcion = 'Función is double';
                    
                    $sel7 = "selected";
                    break;
                case '8':   
                    $funcion = 'Función is double';
                   
                    $sel8 = "selected";
                    break;
                case '9':   
                    $funcion = 'Función var _dump';
                                     
                    
                    $sel9 = "selected";
                    break;
                
                default:
                    # code...
                    break;
            }

            ?>
            <fieldset>
            <legend>Formulario</legend>
                <table align="center">
                    <tr>
                        <td>Variable</td>
                        <td><input type="text" name="txtVariable2" id="ancho" value="<?php echo $variable2?>"></td>
                        <td></td>
                    </tr>
            
                <tr>
                    <td>Monto prestado</td>
                    <td>
                    <select name="txtLista2">
                    <option value="1" <?php echo $selstrlen;?>>Función strlen</option>
                        <option value="2" <?php echo $selstrpos;?>>Función strpos</option>	
                        <option value="3" <?php echo $selstrcmp;?>>Función strcmp</option>
                        <option value="4" <?php echo $selstrstr;?>>Función strstr</option>
                        <option value="5" <?php echo $selsubstr;?>>Función substr</option>
                        <option value="6" <?php echo $selltrim;?>>Función ltrim</option>
                        <option value="7" <?php echo $selrtrim;?>>Función rtrim</option>
                        <option value="8" <?php echo $selchop;?>>Función chop</option>
                        <option value="9" <?php echo $sel9trim;?>>Función trim</option>
                        <option value="10" <?php echo $selstr_replace;?>>Función str_replace</option>
                        <option value="11" <?php echo $selstrtolower;?>>Función strtolower</option>
                        <option value="12" <?php echo $selstrtoupper;?>>Función strtoupper</option>
                        <option value="13" <?php echo $selpreg_match;?>>Función preg_match</option>
                        <option value="14" <?php echo $selexplode;?>>Función explode</option>
                        <option value="15" <?php echo $selstrrev;?>>Función strrev</option>
                        <option value="16" <?php echo $selstr_repeat;?>>Función str_repeat</option>
                        <option value="17" <?php echo $selstr_pad;?>>Función str_pad</option>
                               
                </select>

                    </td>
                    <td></td>
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
                        echo $funcion2;
                        echo "</td>";
                        echo "<td>";
                        echo $resultado2;
                        echo "</td>";
                        echo "<td>";
                        
                        echo "</td>";
                    echo "</tr>";
                   
                ?>
                
            </table>
        </fieldset>  
        </form>
       
    </section>
    <footer>
        <h6>HectorFD Copyright © 2024, todos los derechos reservados </h6>
    </footer>
    <script src="../html/js/script.js"></script>
</body>
</html>