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
        <h1>Caso 4</h1>
    </header>
    <nav>
        
    </nav>
    <section>
        <h2>Pago Salario Empleados</h2>
        <form action="" method="POST">
            <table border="0" align= "center">
            <?php
                error_reporting(0);
                $selJefe = "";
                $selAdmin = "";
                $selOpe = "";
                $selPrac = "";
                 
                $empleado = $_POST['txtEmpleado'];
                $horas = $_POST['txtHoras'];
                $categoria = $_POST['txtLista'];

                switch ($categoria) {
                    case '1':
                        $sueldo = $horas * 50;
                        $selJefe = "selected";
                        break;
                    case '2':
                        $sueldo = $horas * 30;
                        $selAdmin = "selected";
                        break;
                    case '3':
                        $sueldo = $horas * 15;
                        $selOpe = "selected";
                        break;
                    case '4':
                        $sueldo = $horas * 5;
                        $selPrac = "selected";
                        break;
                    default:
                        $sueldo = 0;
                        break;
                }
            ?>
            <div class="centrar"><img src="../images/jefes.png" alt="" width="350px"></div>
               <tr>
                <td>Empleado</td>
                <td><input required type="text" name="txtEmpleado" value="<?php echo $empleado;?>"></td>
               </tr>
               <tr>
                <td>Horas</td>
                <td><input required type="number" name="txtHoras" value="<?php echo $horas;?>" id="ancho2"></td>
               </tr>
               <tr>
                <td>Categoría</td>
                <td>
                
                <select name="txtLista">
                        <option value="1" <?php echo $selJefe;?>>Jefe</option>
                        <option value="2" <?php echo $selAdmin;?>>Administrativo</option>	
                        <option value="3" <?php echo $selOpe;?>>Operario</option>
                        <option value="4" <?php echo $selPrac;?>>Practicante</option>
                </select>
                </td>
               </tr>
               <tr>
                <td></td>
                <td><input type="submit" value="Procesar" id="button"> <button id="button2" type="reset"><a href="caso4.php">Limpiar</a></button></td>
               </tr>
               <tr>
                <td>Sueldo</td>
                <td>
                    <?php
                        printf("S/. %.2f", $sueldo);
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