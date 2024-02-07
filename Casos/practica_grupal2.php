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
        <h2>Funciones para Cadena</h2>
        <form action="">
            <?php
            error_reporting(0);
            $lista = $_GET['txtLista'];
            $variable = $_GET['txtVariable']; 
       
            switch ($lista) {
                case '1':
                    $funcion = 'Función strlen';
                    $resultado = '<strong>'.$variable.'</strong> tiene una longitud de: <strong>'.strlen($variable);
                    $descripción = 'Retorna la longitud de una cadena';
                    function str(){
                        echo "";
                    }
                    $sel1 = "selected";
                    break;
                case '2':
                    $funcion = 'Función strpos';
                    function str(){
                        
                        $txtstr = $_GET['txtstr'];
                        echo "<input type='text' name='txtstr' id='ancho' placeholder='Ingrese dato que desea encontrar' value=$txtstr>";
                    }
                    $txtstr = $_GET['txtstr'];

                    $resultado = 'la cadena <strong>'.$txtstr.'</strong> se encuentra en la posición <strong>'.strpos($variable,$txtstr);
                    $descripción = 'Encuentra la posición de la primera ocurrencia de un substring en una cadena';
                    $sel2 = "selected";
                    break;
                case '3':
                    $funcion = 'Función strcmp';
                    function str2(){
                        $txtstr = $_GET['txtstr'];
                        echo "<input type='text' name='txtstr' id='ancho' placeholder='Ingrese texto para comparar' value='$txtstr'>";
                    }
                    $txtstr = $_GET['txtstr'];
                    $resultado = strcmp($variable,$txtstr);

                    if($resultado > 0){

                        $resultado = '<strong>'.$variable.'</strong> es mayor que <strong>'.$txtstr;

                    }elseif($resultado < 0){
                        $resultado = '<strong>'.$variable.'</strong> es menor que <strong>'.$txtstr;

                    }else {
                        $resultado = "son iguales";
                    }
                    $descripción = 'Compara en ACCII y determina cual es el mayor o menor: A=65, B=66, C=67, D=68 ..., a=97, b=98...';
                    $sel3 = "selected";
                    break;
                 case '4':
                    $funcion = 'Función strstr';
                    function str3(){
                        $txtstr = $_GET['txtstr'];
                        echo "<input type='text' name='txtstr' id='ancho' placeholder='Ingrese dato que quiere encontrar' value='$txtstr'>";
                    }
                    $txtstr = $_GET['txtstr'];

                    $resultado = 'a partir de <strong>'.$txtstr.'</strong> se encontró <strong>'.strstr($variable,$txtstr);
                    
                    $descripción = 'Encuentra la primera ocurrencia de un substring en una cadena';
                    $sel4 = "selected";
                    break;
                case '5':
                    $funcion = 'Función substr';
                    
                    function str4(){
                        $txtstr = '';
                        $txtstr2 = '';
                        echo "<input type='text' name='txtstr' id='ancho2' placeholder='rango inicio' value='$txtstr'>";
                        echo "<input type='text' name='txtstr2' id='ancho2' placeholder='rango salida' value='$txtstr2'>";
                    }
                    $txtstr = $_GET['txtstr'];
                    $txtstr2 = $_GET['txtstr2'];
                    
                    
                    $descripción = 'Retorna un parte de una cadena';
                    $sel5 = "selected";
                    break;
                 case '6':
                    $funcion = 'Función ltrim';
                    $resultado = ltrim($variable);
                    $descripción = 'Eliminan espacios en blanco del inicio';
                    $sel6 = "selected";
                    break;
                 case '7':
                    $funcion = 'Función rtrim';
                    $resultado = rtrim($variable);
                    $descripción = 'Eliminan espacios en blanco al final';
                    $sel7 = "selected";
                    break;
                case '8':   
                    $funcion = 'Función chop';
                    $resultado = chop($variable);
                    $descripción = 'Eliminan espacios en blanco';
                    $sel8 = "selected";
                    break;
                case '9':   
                    $funcion = 'Función trim';
                    $resultado = trim($variable);
                    $descripción = 'Eliminan espacios en blanco';
                    $sel9 = "selected";
                    break;
                case '10':   
                    $funcion = 'Función str_replace';
                    function str5(){
                        $txtstr = $_GET['txtstr'];
                        $txtstr2 = $_GET['txtstr2'];
                        echo "<input type='text' name='txtstr' id='ancho3' placeholder='búsqueda' value='$txtstr'>";
                        echo "<input type='text' name='txtstr2' id='ancho3' placeholder='texto de reemplazo' value='$txtstr2'>";
                    }
                    $txtstr = $_GET['txtstr'];
                    $txtstr2 = $_GET['txtstr2'];
                    $resultado = 'búsqueda <strong>'.$txtstr.'</strong> reemplazo <strong>'.$txtstr2.'</strong> texto reemplazado <strong>'.str_replace($txtstr,$txtstr2,$variable);
                    $descripción = 'Reemplaza todas las ocurrencias del string buscado con el string de reemplazo.';
                    $sel10 = "selected";
                    break;
                case '11':   
                    $funcion = 'Función strtolower';
                    $resultado = strtolower($variable);
                    $descripción = 'convierte a minúsculas';
                    $sel11 = "selected";
                    break;
                case '12':   
                    $funcion = 'Función strtoupper';
                    $resultado = strtoupper($variable);
                    $descripción = 'convierte a mayúsculas';
                    $sel12 = "selected";
                    break;
                case '13':   
                    $funcion = 'Función preg_match';
                    function str6(){
                        $txtstr = $_GET['txtstr'];
                        echo "<input type='text' name='txtstr' id='ancho' placeholder='Ingrese texto que coincida' value='$txtstr'>";
                    }
                    $txtstr = $_GET['txtstr'];
                    if (preg_match("/$txtstr/", $variable)) {
                        $resultado = '<strong>'.$variable."</strong> se encontró una coincidencia <strong>".$txtstr;
                    }else {
                        $resultado = "no encontró una coincidencia";
                    }
                    $descripción = 'compara si hay una coincidencia en una cadena';
                    $sel13 = "selected";
                    break;
                case '14':   
                    $funcion = 'Función explode';
                    function str7(){
                        $txtstr = $_GET['txtstr'];
                        echo "<input type='text' name='txtstr' id='ancho2' placeholder='separado(.,;/:)' value='$txtstr'>";
                    }
                    $txtstr = $_GET['txtstr'];
                                        
                    $descripción = 'divide una cadena de texto en un array';
                    $sel14 = "selected";
                    break;
                case '15':   
                    $funcion = 'Función strtoupper';
                    $resultado = strrev($variable);
                    $descripción = 'invierte el orden de la cadena';
                    $sel15 = "selected";
                    break;
                case '16':   
                    $funcion = 'Función str_repeat';
                    function str8(){
                        $txtstr = $_GET['txtstr'];
                        echo "<input type='text' name='txtstr' id='ancho2' placeholder='N° Repeticiones' value='$txtstr'>";
                    }
                    $txtstr = $_GET['txtstr'];
                    $resultado = str_repeat($variable, $txtstr);
                                        
                    $descripción = 'repite una cadena de texto';
                    $sel16 = "selected";
                    break;
                case '17':   
                    $funcion = 'Función str_replace';
                    function str9(){
                        $txtstr = $_GET['txtstr'];
                        $txtstr2 = $_GET['txtstr2'];
                        echo "<input type='text' name='txtstr' id='ancho3' placeholder='ingrese longitud' value='$txtstr'>";
                        echo "<input type='text' name='txtstr2' id='ancho3' placeholder='ingrese relleno' value='$txtstr2'>";
                    }
                    $txtstr = $_GET['txtstr'];
                    $txtstr2 = $_GET['txtstr2'];
                    $resultado = 'La cadena <strong>'.$txtstr.'</strong> rellenara <strong>'.$txtstr2.'</strong> de esta forma <strong>'.str_pad($variable,$txtstr,$txtstr2, STR_PAD_RIGHT);
                    $descripción = 'Rellena una cadena de texto con caracteres adicionales.';
                    $sel17 = "selected";
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
                        <td><input required type="text" name="txtVariable" id="ancho" value="<?php echo $variable;?>"></td>
                        <td><?php if($lista == 2){str();}else{} if($lista == 3){str2();}else{} if($lista == 4){str3();}else{} if($lista == 5){str4();}else{} if($lista == 10){str5();}else{} if($lista == 13){str6();}else{} if($lista == 14){str7();}else{} if($lista == 16){str8();}else{} if($lista == 17){str9();}else{} ?></td>
                    </tr>
            
                <tr>
                    <td>Funcion</td>
                    <td>
                    <select name="txtLista">
                        <option value="1" <?php echo $sel1;?>>1. Función strlen</option>
                        <option value="2" <?php echo $sel2;?>>2. Función strpos</option>	
                        <option value="3" <?php echo $sel3;?>>3. Función strcmp</option>
                        <option value="4" <?php echo $sel4;?>>4. Función strstr</option>
                        <option value="5" <?php echo $sel5;?>>5. Función substr</option>
                        <option value="6" <?php echo $sel6;?>>6. Función ltrim</option>
                        <option value="7" <?php echo $sel7;?>>7. Función rtrim</option>
                        <option value="8" <?php echo $sel8;?>>8. Función chop</option>
                        <option value="9" <?php echo $sel9;?>>9. Función trim</option>
                        <option value="10" <?php echo $sel10;?>>10. Función str_replace</option>
                        <option value="11" <?php echo $sel11;?>>11. Función strtolower</option>
                        <option value="12" <?php echo $sel12;?>>12. Función strtoupper</option>
                        <option value="13" <?php echo $sel13;?>>13. Función preg_match</option>
                        <option value="14" <?php echo $sel14;?>>14. Función explode</option>
                        <option value="15" <?php echo $sel15;?>>15. Función strrev</option>
                        <option value="16" <?php echo $sel16;?>>16. Función str_repeat</option>
                        <option value="17" <?php echo $sel17;?>>17. Función str_pad</option>
                               
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
                        if($lista == 14){
                        $resultado = explode($txtstr, $variable);
                            print_r($resultado);
                        }
                        if($lista == 5){
                            echo $resultado = 'a partir de <strong>'.$txtstr.'</strong> al <strong>'.$txtstr2.'</strong> se encontró <strong>'.substr($variable,$txtstr,$txtstr2); 
                        }
                        
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