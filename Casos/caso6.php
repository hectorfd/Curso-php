<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../html/css/style.css">
    <title>Caso 6</title>
    
</head>
<body>
    <header>
        <h1>Caso 6</h1>
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
        <h2>Venta de electrodomésticos</h2>
        <form action="" >
            <table border="0" cellspacing ="0" cellpadding ="0" align="center">
                <?php
                 error_reporting(0);
                $selCocina = "";
                $selRefri = "";
                $selTv = "";
                $selLava = "";
                $selRadio = "";

                 $cliente = $_GET['txtCliente'];
                 $producto = $_GET['txtLista'];
                 $cantidad = $_GET['txtCantidad'];

                 switch ($producto) {
                    case '1':
                        $precio = 1200;
                        $subtotal = $precio * $cantidad;
                        if ($subtotal > 10000) {
                            $impuesto = 0.1;
                        }else{
                            $impuesto = 0.05;
                        }
                        $monto = $subtotal - ($subtotal * $impuesto);
                        $selCocina = "selected";
                        break;
                    case '2':
                        $precio = 2500;
                        $subtotal = $precio * $cantidad;
                        if ($subtotal > 10000) {
                            $impuesto = 0.1;
                        }else{
                            $impuesto = 0.05;
                        }
                        $monto = $subtotal - ($subtotal * $impuesto);
                        $selRefri = "selected";
                        break;
                    case '3':
                        $precio = 3200;
                        $subtotal = $precio * $cantidad;
                        if ($subtotal > 10000) {
                            $impuesto = 0.1;
                        }else{
                            $impuesto = 0.05;
                        }
                        $monto = $subtotal - ($subtotal * $impuesto);
                        $selTv = "selected";
                        break;
                    case '4':
                        $precio = 1000;
                        $subtotal = $precio * $cantidad;
                        if ($subtotal > 10000) {
                            $impuesto = 0.1;
                        }else{
                            $impuesto = 0.05;
                        }
                        $monto = $subtotal - ($subtotal * $impuesto);
                        $selLava = "selected";
                        break;
                    case '5':
                        $precio = 700;
                        $subtotal = $precio * $cantidad;
                        if ($subtotal > 10000) {
                            $impuesto = 0.1;
                        }else{
                            $impuesto = 0.05;
                        }
                        $monto = $subtotal - ($subtotal * $impuesto);
                        $selRadio = "selected";
                        break;
                    
                    default:
                        echo "no existe ese producto";
                        break;
                 }


                 ?>
                <div class="centrar"><img src="../images/cocina.png" alt="" width="480px"></div>
                <tr>
                    <td>Cliente </td>
                    
                    <td><input required type="text" name="txtCliente" value="<?php echo $cliente; ?>" id="ancho" placeholder="Ingrese nombre del cliente">
                </td>
                </tr>
                <tr>
                <td>Producto</td>
                <td>
                
                <select name="txtLista">
                        <option value="1" <?php echo $selCocina;?>>Cocina</option>
                        <option value="2" <?php echo $selRefri;?>>Refrigeradora</option>	
                        <option value="3" <?php echo $selTv;?>>Television</option>
                        <option value="4" <?php echo $selLava;?>>Lavadora</option>
                        <option value="5" <?php echo $selRadio;?>>RadioGrabadora</option>
                </select>
                </td>
               </tr>
                <tr>
                    <td><label for="">Cantidad</label></td>
                    <td><input required type="number" name="txtCantidad" value="<?php echo $cantidad;?>" id="ancho2" placeholder="Cantidad"> </td>
                </tr>
                
                <tr>
                    <td></td>
                    <td><input type="submit" value="Procesar" id="button"/><button id="button3" type="reset"><a href="caso5.php">limpiar</a></button></td></td>
                </tr>
                <tr>
                    <td>Precio de producto</td>
                    <td>
                    <?php
                        printf("$. %.2f", $precio);
                    ?>
                    </td>
                </tr>
                <tr>
                    <td>Subtotal a Pagar</td>
                    <td>
                    <?php
                        printf("$. %.2f", $subtotal);
                    ?>
                    </td>
                </tr>
                <tr>
                    <td>Monto de descuento</td>
                    <td>
                    <?php
                        printf("$. %.2f", $impuesto);
                    ?>
                    </td>
                </tr>
                <tr>
                    <td>Monto a Pagar</td>
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