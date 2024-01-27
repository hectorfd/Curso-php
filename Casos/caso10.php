<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../html/css/style.css">
    <title>Caso 10</title>
</head>
<body>
    <header>
        <h1>Caso 10</h1>
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
        <h2>Casa de Préstamo</h2>
        <form action="">
            <div class="centrar"><img src="../images/prestamos.png" alt="" width="40%"></div>
            <?php
            error_reporting(0);
            $cuotas = $_GET['txtCuotas'];
            $cliente = $_GET['txtCliente'];
            $monto = $_GET['txtMonto'];

            switch ($cuotas) {
                case '3':
                    $descuento = ($monto * 0.05); 
                    break;
                case '6':
                    $descuento = ($monto * 0.07);
                    break;
                case '9':
                    $descuento = ($monto * 0.1);
                    break;
                case '12':
                    $descuento = ($monto * 0.2);
                    break;
                default:
                    $impuesto = 1;
                    break;
            }

            ?>
            <fieldset>
            <legend>Formulario</legend>
                <table align="center">
                    <tr>
                        <td>Cliente</td>
                        <td><input type="text" name="txtCliente" id="ancho" value="<?php echo $cliente?>"></td>
                        <td><label for="">Debe registrarse correctamente</label></td>
                    </tr>
            
                <tr>
                    <td>Monto prestado</td>
                    <td><input type="text" name="txtMonto" id="ancho2" value="<?php printf("%.2f", $monto); ?>"></td>
                    <td><label for="">Debe registrar correctamente el monto</label></td>
                </tr>
                <tr>
                    <td>Cuotas</td>
                    <td>
                        
                    <select name="txtCuotas">
                        <?php
                        $nCuotas = 12;
                        $a = 3;
                        for ($i=1; $i < 12 ; $i+=3) { 
                            echo "<option value='$a'>$a</option>";
                            $a += 3;
                        }
                        if($cuotas != null){
                            echo "<option value='$cuotas'selected>$cuotas</option>";
                        }
                        
                        ?>
                    </select>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" id="button" value="Cotizar"></td>
                    <td></td>
                </tr>
            
            </table>
        </fieldset>
        <fieldset id="blanco">
                <legend><h3>Resultado</h3></legend>
            <table align = "center">
                <tr>
                    <td>N de Cuota</td>
                    <td>fechas de pago</td>
                    <td>Monto mensual</td>
                </tr>
                
                <?php
                    $monto = $monto + $descuento;
                    $fecha = date("d-m-Y");
                    for ($i=1; $i <= $cuotas ; $i++) { 
                        echo "<tr>";
                            echo "<td>";
                            echo $i." cuota";
                            echo "</td>";
                            echo "<td>";
                            echo date("d-m-Y", strtotime("+$i month", strtotime($fecha)));
                            echo "</td>";
                            echo "<td>";
                            printf("S/. %.2f", ($monto/$cuotas));
                            echo "</td>";
                        echo "</tr>";
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