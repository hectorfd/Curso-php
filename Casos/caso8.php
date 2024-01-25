<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../html/css/style.css">
    <title>Caso 8</title>
</head>
<body>
    <header>
        <h1>Caso 8</h1>
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
        <h2>Venta de Entradas (Teatro)</h2>
        <form action="" >
            <table border="0" cellspacing ="0" cellpadding ="0" align="center">
                <?php
                    error_reporting(0);
                    
                    $comprador = $_GET['txtComprador'];
                    $fecha = $_GET['txtFecha'];
                    $entradaAdultos = $_GET['txtAdultos'];
                    $entradaNiños = $_GET['txtNiños'];

                    $dia = $fecha; 
                    $diaSemana = date("w", strtotime($dia));
                    
                    switch ($diaSemana) {
                        case '1':
                            $diaPromo ='Lunes'; 
                            $fechaActual = $fecha;
                            $activar = "readonly = true";
                            $precioAdulto = 10;
                            $precioNiño = 5;
                            
                            break;
                        case '2':
                            $diaPromo ='Martes';
                            $fechaActual = $fecha;
                            $activar = "readonly = true";
                            $precioAdulto = 8;
                            $precioNiño = 4;
                           
                            break;
                        case '3':
                            $diaPromo ='Miércoles';
                            $fechaActual = $fecha;
                            $activar = "readonly = true";
                            $precioAdulto = 16;
                            $precioNiño = 8;
                            
                            break;
                        case '4':
                            $diaPromo ='Jueves';
                            $fechaActual = $fecha;
                            $activar = "readonly = true";
                            $precioAdulto = 16;
                            $precioNiño = 8;
                              
                            break;
                        case '5':
                            $diaPromo ='Viernes';
                            $fechaActual = $fecha;
                            $activar = "readonly = true";
                            $precioAdulto = 16;
                            $precioNiño = 8;
                             
                            break;
                        case '6':
                            $diaPromo ='Sábado'; 
                            $fechaActual = $fecha;
                            $activar = "readonly = true";
                            $precioAdulto = 50;
                            $precioNiño = 45;
                            
                            break;
                        case '0':
                            $diaPromo ='Domingo';
                            $fechaActual = $fecha;
                            $activar = "readonly = true";
                            $precioAdulto = 50;
                            $precioNiño = 45;
                             
                            break;
                        default:
                            $diaPromo ='Esto no debió pasar xd'; 
                            break;
                    }
                            $costoAdulto = $entradaAdultos * $precioAdulto;
                            $costoNiño = $entradaNiños * $precioNiño;
                            $monto = $costoAdulto + $costoNiño;

                    $resultado = '<textarea id="comentarios" name="comentarios" rows="6" cols="50" width="500px">'."comprador:                     ".$comprador."\n"."Costo por Adulto:          $".$costoAdulto."\n"."Costo por Niño:              $".$costoNiño."\n"."Día de Promoción:         ".$diaPromo."\n"."Monto total a Pagar:     $".$monto.'</textarea>';
                 ?>
                <div class="centrar"><img src="../images/teatro.png" alt="" width="480px"></div>
                <tr>
                    <td>Comprador</td>
                    
                    <td><input required type="text" name="txtComprador" value="<?php echo $comprador; ?>" id="ancho" placeholder="Ingrese nombre del cliente">
                </td>
                
                </tr>
                <tr>
                    <td><label for="">Fecha Actual</label></td>
                    <td> <input required type='date' name='txtFecha' value="<?php if($fechaActual == null){$fechaActual = date("Y-m-d"); $activar = "";} echo $fechaActual; ?>" id='ancho4' <?php echo $activar;?>> </td>
                   
                </tr>
                <tr>
                    <td><label for="">N entradas adultos</label></td>
                    <td><input required type="number" name="txtAdultos" value="<?php echo $entradaAdultos;?>" id="ancho2" placeholder=""> </td>
                </tr>
                <tr>
                    <td><label for="">N entradas niños</label></td>
                    <td><input required type="number" name="txtNiños" value="<?php echo $entradaNiños;?>" id="ancho2" placeholder=""> </td>
                </tr>
                
                <tr>
                    <td></td>
                    <td><input type="submit" value="Adquirir" id="button"/><button id="button3" type="reset"><a href="caso8.php">limpiar</a></button></td></td>
                </tr>
                
            </table>  
            <div class="centrar"><?php  echo $resultado;?></div> 
        </form> 
    </section>
    <br>
    <footer>
        <h6>HectorFD Copyright © 2024, todos los derechos reservados </h6>
    </footer>
    <script src="../html/js/script.js"></script>
</body>
</html>