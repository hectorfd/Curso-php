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
        <h1>Caso 1</h1>
    </header>
    <nav>
        <ul>
            <li><a href="caso1.php">caso 1: Casa de Cambios</a></li>
            <li><a href="caso2.php">caso 2: Pago de Empleados</a></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </nav>
    <section>
        <h2>Casa de Cambios</h2>
        <form action="">
            <table border="0" cellspacing ="0" cellpadding ="0" align="center">
                <tr>
                    <td><label for="">Monto en Soles: </label></td>
                    
                    <td><input type="text" name="txtSoles" id="ancho3" placeholder="S./" onclick="activarCampo(this)">
                </td>
                <td id="verde">
                    <?php
                    error_reporting(0);
                    echo "S/.".$_GET['txtSoles'];
                    ?> 
                </td>
                </tr>
                <tr>
                    <td><label for="">Monto en Dolares:</label></td>
                    <td><input type="text" name="txtDolares" id="ancho3" placeholder="$" onclick="activarCampo(this)"></td>
                    <td id="verde">
                    <?php
                    error_reporting(0);
                    echo "$ ".$_GET['txtDolares'];
                    ?> 
                    </td>
                </tr>
                <tr>
                    <td><label for="">Monto en Euros:</label></td>
                    <td><input type="text" name="txtEuros" id="ancho3" placeholder="€" onclick="activarCampo(this)"></td>
                    <td id="verde">
                    <?php
                    error_reporting(0);
                    echo "€ ".$_GET['txtEuros'];
                    ?> 
                    </td>
                </tr>
                <?php
                error_reporting(0);//cuando ejecute no mandes error
                
                $soles = $_GET['txtSoles'];
                $dolares = $_GET['txtDolares'];
                $euros = $_GET['txtEuros'];
                define ("DOLAR",3.71);
                define ("EURO",4.01);
                define ("EUROADOLAR",1.09);
                define ("DOLARAEURO",0.92);
                if ($soles != "") {
                    $peruchos = $soles;
                    $dolar = $soles / DOLAR;
                    $euro = $soles / EURO;
                }
                if ($dolares != "") {
                    $peruchos = $dolares * DOLAR;
                    $dolar = $dolares;
                    $euro = $dolares * DOLARAEURO;
                }
                if($euros != "") {
                    $peruchos = $euros * EURO;
                    $dolar = $euros * EUROADOLAR;
                    $euro = $euros;
                }
                ?>
                <tr>
                    <td><input type="submit" value="Procesar" id="button"/></td>
                    <td><input type="reset" value="Limpiar" id="button2" onclick="limpiarCampo(this)"/></td>
                </tr>
                <tr>
                    <td>Total Soles</td>
                    <td>
                    <?php
              
                printf("S/. %.2f", $peruchos);
                ?>
                    </td>
                </tr>
                
                <tr>
                    <td>Total Dolares</td>
                    <td>
                    <?php
                
                
                printf(" $ %.2f", $dolar);
                ?>
                    </td>
                </tr>
                
                <tr>
                    <td>Total Euros</td>
                    <td>
                    <?php
                
                printf("€ %.2f", $euro);
                ?>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
                

            </table>
           
            
        </form>
        
    </section>
    <br>
    <footer>
        <h6>HectorFD Copyright © 2024, todos los derechos reservados </h6>
    </footer>
    <script>
        function activarCampo(campo) {
        for (let input of document.querySelectorAll('input[type="text"]')) {
                 if (input !== campo) {
                     input.disabled = true;
                     input.value = '';
                 }
             }
             campo.disabled = false;
             campo.focus();
        }
        function limpiarCampo(campo) {
        for (let input of document.querySelectorAll('input[type="text"]')) {
                 if (input !== campo) {
                     input.disabled = false;
                     input.value = '';
                 }
             }
             campo.disabled = false;
             campo.focus();
        }
    </script>
</body>
</html>