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
                <span>Funciones para Cadena</span>
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
        <h2>Funciones de Fecha y Hora</h2>
        <form action="">
            <?php
            error_reporting(0);
            date_default_timezone_set('America/Lima');

            $lista = $_GET['txtLista'];
            $fecha = $_GET['txtFecha'];
            $hora = $_GET['txtHora'];
       
            switch ($lista){
                case '1':
                    $funcion = 'Función date';
                    $fechaActual = date("Y-m-d");
                    $horaActual = date("H:i:s");
                    $descripción = 'muestra la fecha y hora actual';
                    $resultado = date("d-m-Y") .' - '.$horaActual;
                    $sel1 = "selected";
                    $nombre='date';
                    break;
                case '2':
                    $funcion = 'Función time';
                    $timestamp = strtotime('1970-01-01');
                    $fecha = date('Y-m-d', $timestamp);
                    $hora = date('H:i:s', $timestamp);
                    $resultado = $fecha .' - '.$hora;
                    $fechaActual = $fecha;
                    $horaActual = $hora;
                    $descripción = 'muestra la fecha y hora de Unix ';
                    $sel2 = "selected";
                    $nombre='date';
                    break;
                case '3':
                    $funcion = 'Función checkdate';
                    $descripción = 'verifica si es un año Gregoriano';
                    $sel3 = "selected";
                    $nombre='text';
                    break;
                 case '4':
                    $funcion = 'Función getDate';
                    $fechaActual = date("Y-m-d");
                    $horaActual = date("H:i:s");
                    $descripción = 'crea una lista de toda la información del tipo de dato fecha y hora';
                    $sel4 = "selected";
                    $nombre='date';
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
                        <td>Fecha y Hora</td>
                        <td><input type='<?php echo $nombre;?>' name='txtFecha' value="<?php  echo $fechaActual; ?>" id='ancho4'>  <input type="time" name="txtHora" id="ancho6" value="<?php echo $horaActual;?>"></td>
                        <td></td>
                    </tr>
            
                <tr>
                    <td>Funcion</td>
                    <td>
                    <select name="txtLista" id="ancho7">
                        <option value="1" <?php echo $sel1;?>>1. Función date</option>
                        <option value="2" <?php echo $sel2;?>>2. Función time</option>	
                        <option value="3" <?php echo $sel3;?>>3. Función checkdate</option>
                        <option value="4" <?php echo $sel4;?>>4. Función getdate</option>          
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
                        if($lista == 3){
                            $fecha_array = explode('/', $fecha);
                            $dia = $fecha_array[0]; 
                            $mes = $fecha_array[1]; 
                            $año = $fecha_array[2]; 
                           
                            if (checkdate($dia, $mes, $año)) {
                                echo $resultado = "La fecha $dia/$mes/$año es válida.";
                            } else {
                                echo $resultado = "La fecha $dia/$mes/$año no es válida.";
                            }
                        }
                        if($lista==4){

                            $fecha_actual = getdate();
                            //print_r($fecha_actual);
                            $fecha_array = array(
                                'segundos' => $fecha_actual['seconds'],
                                'minutos' => $fecha_actual['minutes'],
                                'horas' => $fecha_actual['hours'],
                                'diaMes' => $fecha_actual['mday'],
                                'diaSemana' => $fecha_actual['wday'],
                                'mes' => $fecha_actual['mon'],
                                'año' => $fecha_actual['year'],
                                'diaAño' => $fecha_actual['yday'],
                                'diaSemanaNombre' => $fecha_actual['weekday'],
                                'mesNombre' => $fecha_actual['month'],
                                '0' => $fecha_actual[0]
                            );
                            
                            foreach ($fecha_array as $clave => $valor) {
                                echo $clave . ': ' . $valor . "<br>";
                            }

                        }
                        echo "</td>";
                        echo "<td>";
                    
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