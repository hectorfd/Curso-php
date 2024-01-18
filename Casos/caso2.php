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
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </nav>
    <section>
        <h2>Pago de Empleados</h2>
        <form action="" >
            <table border="0" align= "center">
                <tr>
                    <td>Empleado</td>
                    <td><input type="text" name="txtEmpleado" id="ancho"></td>
                </tr>
                <tr>
                    <td>Horas trabajadas</td>
                    <td><input type="text" name="txtHoras"id="ancho2"></td>
                </tr>
                <tr>
                    <td>Tarifa por hora</td>
                    <td><input type="text" name="txtTarifa" id="ancho2"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Procesar" id="button"> <input type="reset" value="Limpiar" id="button2"></td>
                </tr>
                <?php
                error_reporting(0);
                $empleado = $_GET['txtEmpleado'];
                $horas = $_GET['txtHoras'];
                $tarifa = $_GET['txtTarifa'];

                define("RMV",1025);
                $sueldo = $tarifa * $horas;

                define ("ESSALUD",0.09);
                if ($sueldo>=RMV) {
                    $salud = $sueldo * ESSALUD;
                }else {
                    $salud = 0;
                }
                
                define ("HABITAT",0.1321);
                define ("INTEGRA",0.1329);
                define ("PRIMA",0.1334);
                define ("PROFUTURO",0.1321);

                $afp = $sueldo * HABITAT;
                
                $sueldoNeto = ($sueldo - $salud) - $afp;

                ?>
                <tr>
                    <td>Empleado</td>
                    <td>
                        <?php
                           echo strtoupper($empleado);
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Horas trabajadas</td>
                    <td>
                        <?php
                           echo $horas;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Tarifa por Hora</td>
                    <td>
                        <?php
                           echo $tarifa;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Sueldo Bruto</td>
                    <td>
                        <?php
                           printf("S/. %.2f", $sueldo);
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Descuento ESSALUD</td>
                    <td>
                        <?php
                           printf("S/. %.2f", $salud);
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Descuento AFP</td>
                    <td>
                        <?php
                           printf("S/. %.2f", $afp);
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Sueldo neto</td>
                    <td>
                        <?php
                           printf("S/. %.2f", $sueldoNeto);
                        ?>
                    </td>
                </tr>
            </table>
        </form>
       
        
    </section>
    <br>
    <section>
        <p>Tipo de trabajador
Trabajador dependiente (incluye trabajadores del hogar, construcción civil, entre otros) - Portuario

De acuerdo a la Ley N° 26790 es equivalente al <strong>9%</strong> de la remuneración o ingreso mensual. Esta no puede ser menor a la Remuneración Mínima Vital (RMV) vigente (**) y está a cargo obligatorio de la entidad empleadora.</p>
    </section>
    <section>
        <img src="../images/comisionafp.png" alt="">
    </section>
    <footer>
        <h6>HectorFD Copyright © 2024, todos los derechos reservados </h6>
    </footer>
</body>
</html>