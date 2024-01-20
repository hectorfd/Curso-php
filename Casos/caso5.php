<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>CAso 1</title>
    
</head>
<body>
    <header>
        <h1>Caso 5</h1>
    </header>
    <nav>
        
    </nav>
    <section>
        <h2>Obsequio a Clientes</h2>
        <form action="" >
            <table border="0" cellspacing ="0" cellpadding ="0" align="center">
                <?php
                error_reporting(0);
                $cliente = $_GET['txtCliente'];
                $total = $_GET['txtMonto'];
                $ticket = $_GET['txtTicket'];

                if ($ticket == null) {
                    $ticket = 1;
                }
                if ($ticket < 1 or $ticket > 20) {
                    //$mensaje = "Ticket no valido.!!";
                    //echo "<script>alert('$mensaje');</script>";
                    echo "<script>Swal.fire({title: '¡Bien hecho!',text: '¡Has hecho clic!',icon: 'success',confirmButtonText: 'OK'});</script>";
                    
                }elseif ($ticket >= 1 and $ticket <= 4) {
                    $descuento = $total - ($total * 0.16);
                    $obsequio = "Canasta con productos diversos.";
                }elseif ($ticket >= 5 and $ticket <= 9) {
                    $descuento = $total - ($total * 0.13);
                    $obsequio = "Saco de azúcar de 50kg.";
                }elseif ($ticket >= 10 and $ticket <= 14) {
                    $descuento = $total - ($total * 0.06);
                    $obsequio = "Aceite 5 litros.";
                }elseif ($ticket >= 15 and $ticket <= 19) {
                    $descuento = $total - ($total * 0.12);
                    $obsequio = "Caja de leche de 24 latas grandes.";
                }elseif ($ticket == 20) {
                    $descuento = $total - ($total * 0.1);
                    $obsequio = "Saco de arroz de 50 kg.";
                }    
                ?>
                <div class="centrar"><img src="../images/regalo.png" alt="" width="480px"></div>
                <tr>
                    <td>Nombre de Cliente </td>
                    
                    <td><input required type="text" name="txtCliente" value="<?php echo $cliente; ?>" id="ancho" placeholder="Ingrese nombre del cliente">
                </td>
                </tr>
                <tr>
                    <td><label for="">Monto total S/.</label></td>
                    <td><input required type="text" name="txtMonto" value="<?php echo $total; ?>" id="ancho3" placeholder="Ingrese monto a pagar"></td>
                </tr>
                <tr>
                    <td><label for="">Numero de Ticket</label></td>
                    <td><input required type="number" name="txtTicket" value="<?php $ticket = rand(1,20); echo $ticket;?>" id="ancho2" placeholder="Ticket"> </td>
                </tr>
                
                <tr>
                    <td></td>
                    <td><input type="submit" value="Procesar" id="button"/><button id="button3" type="reset"><a href="caso5.php">limpiar</a></button></td></td>
                </tr>
                <tr>
                    <td>Monto a Cancelar</td>
                    <td>
                    <?php
                        printf("S/. %.2f", $descuento);
                    ?>
                    </td>
                </tr>
                
                <tr>
                    <td>Obsequio Obtenido</td>
                    <td>
                    <?php
                        echo $obsequio;
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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>