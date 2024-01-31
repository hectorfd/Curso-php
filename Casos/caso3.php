<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../html/css/style.css">
    <title>CAso 2</title>
    
</head>
<body>
    <header>
        <h1>Caso 3</h1>
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
    
    <section>
        <h2>Venta de Producto</h2>
        <form action="" >
            <table border="0" align= "center">
               <tr>
                <td>Cantidad</td>
                <td><input required type="text" name="txtCantidad"></td>
               </tr>
               <tr>
                <td></td>
                <td><input type="submit" value="Procesar" id="button"><input type="reset" value="Limpiar" id="button2"></td>
               </tr>
               <?php
               error_reporting(0);
               $cantidad = $_GET['txtCantidad'];
               if ($cantidad == null) {
                $cantidad = 0;
               }

               define("UNITARIO",20.55);
               define("DESCUENTO",0.1);

               $sueldo = $cantidad * UNITARIO;
               $impuesto = $sueldo * DESCUENTO;
               $importeNeto = $sueldo - $impuesto;

               ?>
               <tr>
                <td>Precio de producto</td>
                <td>
                    <?php
                    echo "S/.".UNITARIO;
                    ?>
                </td>
               </tr>
               <tr>
                <td>Cantidad</td>
                <td>
                    <?php
                    echo $cantidad;
                    ?>
                </td>
               </tr>
               <tr>
                <td>Importe de compra</td>
                <td>
                    <?php
                        printf("S/. %.2f", $sueldo);
                    ?>
                </td>
               </tr>
               <tr>
                <td>Importe de descuento</td>
                <td>
                    <?php
                        printf("S/. %.2f", $impuesto);
                    ?>
                </td>
               </tr>
               <tr>
                <td>Importe neto</td>
                <td>
                    <?php
                        printf("S/. %.2f", $importeNeto);
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