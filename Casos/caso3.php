<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>CAso 2</title>
    
</head>
<body>
    <header>
        <h1>Caso 2</h1>
    </header>
    <nav>
        <ul>
            <li><a href="caso1.php">caso 1: Casa de Cambios</a></li>
            <li><a href="caso2.php">caso 2: Pago de Empleados</a></li>
            <li><a href="caso3.php">caso 3: Venta de Producto</a></li>
            <li></li>
            <li></li>
        </ul>
    </nav>
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

               $importeCompra = $cantidad * UNITARIO;
               $descuento = $importeCompra * DESCUENTO;
               $importeNeto = $importeCompra - $descuento;

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
                        printf("S/. %.2f", $importeCompra);
                    ?>
                </td>
               </tr>
               <tr>
                <td>Importe de descuento</td>
                <td>
                    <?php
                        printf("S/. %.2f", $descuento);
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
</body>
</html>