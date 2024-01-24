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
        <h2>Venta de entradas (Teatro)</h2>
        <form action="" >
            <table border="0" cellspacing ="0" cellpadding ="0" align="center">
                <?php
                 error_reporting(0);
                

                 ?>
                <div class="centrar"><img src="../images/teatro.png" alt="" width="480px"></div>
                <tr>
                    <td>Comprador</td>
                    
                    <td><input required type="text" name="txtAlumno" value="<?php echo $comprador; ?>" id="ancho" placeholder="Ingrese nombre del cliente">
                </td>
                
                </tr>
                <tr>
                    <td><label for="">Fecha Actual</label></td>
                    <td><input required type="date" name="txtPromedio" value="<?php echo $fecha;?>" id="ancho4" placeholder="Promedio"> </td>
                   
                </tr>
                <tr>
                    <td><label for="">N entradas adultos</label></td>
                    <td><input required type="number" name="txtPromedio" value="<?php echo $adultos;?>" id="ancho4" placeholder="Ingrese entradas"> </td>
                </tr>
                <tr>
                    <td><label for="">N entradas niños</label></td>
                    <td><input required type="number" name="txtPromedio" value="<?php echo $niños;?>" id="ancho4" placeholder="ingrese entradas"> </td>
                </tr>
                
                <tr>
                    <td></td>
                    <td><input type="submit" value="Procesar" id="button"/></td></td>
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