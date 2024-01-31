<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../html/css/style.css">
    <title>Caso 7</title>
    
</head>
<body>
    <header>
        <h1>Caso 7</h1>
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
        <h2>Control de mensualidad</h2>
        <form action="" >
            <table border="0" cellspacing ="0" cellpadding ="0" align="center">
                <?php
                 error_reporting(0);
                $selA = "";
                $selB = "";
                $selC = "";
                $selD = "";

                 $alumno = $_GET['txtAlumno'];
                 $categoria = $_GET['txtLista'];
                 $promedio = $_GET['txtPromedio'];

                 if ($promedio <= 12) {
                    $impuesto = 1;
                 }elseif ($promedio>=13 and $promedio<=15 ) {
                    $impuesto = 0.1;
                 }elseif ($promedio>=16 and $promedio<=17 ) {
                    $impuesto = 0.15;
                 }elseif ($promedio>=18 and $promedio<=19 ) {
                    $impuesto = 0.25;
                 }elseif ($promedio==20 ) {
                    $impuesto = 0.5;
                 }

                 switch ($categoria) {
                    case '1':
                        $mensualidad = 850;
                        $montoDescuento = $mensualidad * $impuesto;
                        $monto = $mensualidad - $montoDescuento;
                        $selA = "selected";
                        $lblAlumno = "registró correctamente al alumno";
                        $lblCategoria = "selecciono correctamente la categoria";
                        $lblPromedio = "registró correctamente el promedio";
                        break;
                    case '2':
                        $mensualidad = 750;
                        $montoDescuento = $mensualidad * $impuesto;
                        $monto = $mensualidad - $montoDescuento;
                        $selB = "selected";
                        $lblAlumno = "registró correctamente al alumno";
                        $lblCategoria = "selecciono correctamente la categoria";
                        $lblPromedio = "registró correctamente el promedio";
                        break;
                    case '3':
                        $mensualidad = 650;
                        $montoDescuento = $mensualidad * $impuesto;
                        $monto = $mensualidad - $montoDescuento;
                        $selC = "selected";
                        $lblAlumno = "registró correctamente al alumno";
                        $lblCategoria = "selecciono correctamente la categoria";
                        $lblPromedio = "registró correctamente el promedio";
                        break;
                    case '4':
                        $mensualidad = 500;
                        $montoDescuento = $mensualidad * $impuesto;
                        $monto = $mensualidad - $montoDescuento;
                        $selD = "selected";
                        $lblAlumno = "registró correctamente al alumno";
                        $lblCategoria = "selecciono correctamente la categoria";
                        $lblPromedio = "registró correctamente el promedio";
                        break;
                    
                    default:
                        echo "no existe ese producto";
                        break;
                 }


                 ?>
                <div class="centrar"><img src="../images/estudiantes.png" alt="" width="880px"></div>
                <tr>
                    <td>Nombre completo del alumno</td>
                    
                    <td><input required type="text" name="txtAlumno" value="<?php echo $alumno; ?>" id="ancho" placeholder="Ingrese nombre del cliente">
                </td>
                <td><label for="" name="lblAlumno"><?php echo $lblAlumno?></label></td>
                </tr>
                <tr>
                <td>Seleccione Categoria</td>
                <td>
                
                <select name="txtLista">
                        <option value="1" <?php echo $selA;?>>A</option>
                        <option value="2" <?php echo $selB;?>>B</option>	
                        <option value="3" <?php echo $selC;?>>C</option>
                        <option value="4" <?php echo $selD;?>>D</option>
                        
                </select>
                </td>
                <td><label for=""><?php echo $lblCategoria?></label></td>
               </tr>
                <tr>
                    <td><label for="">Ingrese Promedio</label></td>
                    <td><input required type="number" name="txtPromedio" value="<?php echo $promedio;?>" id="ancho2" placeholder="Promedio"> </td>
                    <td><label for=""><?php echo $lblPromedio?></label></td>
                </tr>
                
                <tr>
                    <td></td>
                    <td><input type="submit" value="Procesar" id="button"/></td></td>
                </tr>
                <tr>
                    <td>Monto Mensualidad</td>
                    <td>
                    <?php
                        printf("$. %.2f", $mensualidad);
                    ?>
                    </td>
                </tr>
                <tr>
                    <td>Monto Descuento</td>
                    <td>
                    <?php
                        printf("$. %.2f", $montoDescuento);
                    ?>
                    </td>
                </tr>
                <tr>
                    <td>Monto a Cancelar</td>
                    <td>
                    <?php
                        printf("$. %.2f", $monto);
                    ?>
                    </td>
                </tr>
                
                
            </table>      
        </form> 
    </section>
    <br>
    <footer>
        <h6>HectorFD Copyright © 2024, todos los derechos reservados </h6>
    </footer>
    <script src="../html/js/script.js"></script>
</body>
</html>