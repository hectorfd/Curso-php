<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../html/css/style.css">
    <title>Caso 9</title>
</head>
<body>
    <header>
        <h1>Caso 9</h1>
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
        <h2>Venta de Productos Usando While</h2>
        <form action="">
            <div class="centrar"><img src="../images/electrodomesticos.jpg" alt="" width="40%"></div>
            <?php
            error_reporting(0);
            $producto = $_GET['txtProducto'];
            //$precio = $_GET['txtPrecio'];
            $cantidad = $_GET['txtCantidad'];
            //$subtotal = $_GET['txtSubtotal'];
            $cuotas = $_GET['txtCuotas'];

            if ($cantidad == null) {
                $cantidad = 1;
            }

            switch ($producto) {
                case '1':
                    $precio = 1500.00;
                    $subtotal = $precio * $cantidad;
                    $selLava = "selected";
                    
                    break;
                case '2':
                    $precio = 3500.00;
                    $subtotal = $precio * $cantidad;
                    $selRefri = "selected";
                    
                    break;
                case '3':
                    $precio = 500.00;
                    $subtotal = $precio * $cantidad;
                    $selRadio = "selected";
                    break;
                case '4':
                    $precio = 150.00;
                    $subtotal = $precio * $cantidad;
                    $selTosta = "selected";
                    break;
                
                default:
                    echo "producto no existe";
                    break;
            }
            ?>
            <fieldset>
            <legend>Formulario</legend>
                <table align="center">
            
                <tr>
                    <td>Producto</td>
                    <td>
                    <select name="txtProducto">
                        <option value="1" <?php echo $selLava;?>>Lavadora</option>
                        <option value="2" <?php echo $selRefri;?>>Refrigeradora</option>	
                        <option value="3" <?php echo $selRadio;?>>Radiograbadora</option>
                        <option value="4" <?php echo $selTosta;?>>Tostadora</option>
                    </select>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>Precio</td>
                    <td><input type="text" name="txtPrecio" id="ancho2" value="<?php printf("S/. %.2f", $precio); ?>"></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Cantidad</td>
                    <td><input type="text" name="txtCantidad" id="ancho2" value="<?php echo $cantidad; ?>"></td>
                    <td><input type="submit" id="button" value="Calcular"></td>
                </tr>
                <tr>
                    <td>Subtotal</td>
                    <td><input type="text" name="txtSubtotal" id="ancho2" value="<?php printf("S/. %.2f", $subtotal); ?>"></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Cuotas</td>
                    <td>
                        
                    <select name="txtCuotas">
                        <?php
                        $nCuotas = 18;
                        $a = 1;
                        while ($a <= $nCuotas) {
                            echo "<option value='$a'>$a</option>";
                            $a++;    
                        }
                        if($cuotas != null){
                            echo "<option value='$cuotas'selected>$cuotas</option>";
                        }
                        
                        ?>
                    </select>
                    </td>
                    <td></td>
                </tr>
                
            
            </table>
        </fieldset>
        <fieldset id="blanco">
                <legend><h3>Resultado</h3></legend>
            <table align = "center">
                <tr>
                    <td>N Letras</td>
                    <td>Monto</td>
                    <td></td>
                </tr>
                
                    <?php
                $i = 1;
                while ($i <= $cuotas) {
                    echo "<tr>";
                        echo "<td>";
                        echo $i;
                        echo "</td>";
                        echo "<td>";
                        printf("S/. %.2f", ($subtotal / $cuotas));
                        echo "</td>";
                        echo "<td>";
                        echo "</td>";
                    echo "</tr>";
                    $i++;                    
                } 
                ?>
                
            </table>
        </fieldset>  
        </form>
       
    </section>
    <br>
    <footer>
        <h6>HectorFD Copyright © 2024, todos los derechos reservados </h6>
    </footer>
    <script src="../html/js/script.js"></script>
</body>
</html>