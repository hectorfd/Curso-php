<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea uwu</title>
    <link rel="stylesheet" href="estilo.css"> 
</head>
<body>
    <header>
        <h3>PAGO DE EMPLEADOS</h3>
    </header>
    <section>
        <form action="">
            <table border="0" cellspacing = "0" align="center" cellspadding ="0">
                <tr>
                    <td>Empelado</td>
                    <td><input type="text" name="txtEmpleado"></td>
                </tr>
                <tr>
                    <td>Horas trabajadas</td>
                    <td><input type="text" name="txtHoras"></td>
                </tr>
                <tr>
                    <td>Tarifa por Hora</td>
                    <td><input type="text" name="txtTarifa"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit"> <input type="reset"></td>
                </tr>
                <?php
                error_reporting(0);//no te mande errores antes de la ejecución
                $empleado = $_GET['txtEmpleado'];
                $horas = $_GET['txtHoras'];
                $tarifa = $_GET['txtTarifa'];

                //sueldo bruto
                $sueldo = $horas * $tarifa;
                define ("RMV",1025);
                
                //essalud
                //si el empleado gana la RMV 1025 solo en esos casos aplica
                //afp 
                //sueldo neto sueldo bruto - essalud - afp



                ?>
                <tr>
                    <td>Empleado</td>
                    <td>
                        <?php
                        echo $empleado;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>horas trabajadas</td>
                    <td>
                        <?php
                        echo $horas;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Tarifa por hora</td>
                    <td>
                        <?php
                        echo $tarifa;
                        ?>
                    </td>
                </tr>
                
                <tr>
                    <td>Sueldo bruto</td>
                    <td>
                        <?php
                        echo "S/.".$sueldo;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Descuento Essalud</td>
                    <td></td>
                </tr>
                <tr>
                    <td>descuento AFP</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Sueldo Neto</td>
                    <td></td>
                </tr>
                

            </table>
        </form>
    </section>

    
    <footer>
        <h6>Wendy te engaño xd ahhahahhahah</h6>
    </footer>
</body>
</html>