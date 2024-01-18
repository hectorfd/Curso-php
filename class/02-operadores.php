<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>PHP intro</title>
</head>
<body>
    <header>
        <h1>Introducción a PHP</h1>
    </header>
    <section>
        <h2>Operadores</h2>
        <?php
        $a = 15;
        $cadena ='Nota final del curso:'. $a;
        
        echo $cadena.'<br>';

        printf ('Nota final del curso:%.2f',$a);
        ?>
    </section>
    <br>
    <section>
        <h2>Manejo de operadores</h2>
        <?php
        //? $a = pow(2,5);
        //? $b = sqrt(5);
        $trabajador = "Mensolin";
        $fechaNacimiento = '29/02/1995';
        $numeroHijos = 2;
        $sueldo = 950.50;
        $activo = false;
        echo $trabajador." -> tipo de dato: <strong>".gettype($trabajador).'</strong><br>';
        echo $fechaNacimiento." -> tipo de dato: <strong>".gettype($fechaNacimiento).'</strong><br>';
        echo $numeroHijos." -> tipo de dato: <strong>".gettype($numeroHijos).'</strong><br>';
        echo $sueldo." -> tipo de dato: <strong>".gettype($sueldo).'</strong><br>';
        if ($activo == false) {
            $valor = 0;
        }
        else {
            $valor = 1;
        }
        echo $valor." -> tipo de dato: <strong>".gettype($activo).'</strong><br>';
        ?>
    </section>
    <br>
    <footer>
        <h6>Copyright © 2024, todos los derechos reservados </h6>
    </footer>
    
</body>
</html>