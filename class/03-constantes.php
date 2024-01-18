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
        <h2>Constantes</h2>
        <?php
        define('PI',3.1416);
        define('IGV',0.18);

        $radio = 12;
        $valorVenta = 250.50;

        $area = PI * $radio * $radio;
        $impuesto = $valorVenta * IGV;

        echo "El area del circulo con radio $radio es $area"."<br><br>";
        echo "El impuesto de venta de $valorVenta es $impuesto"."<br><br>";
        ?>
    </section>
    <br>
    <section>
        <h2>Constantes</h2>
        <?php
        ?>
    </section>
    <br>
    <footer>
        <h6>Copyright © 2024, todos los derechos reservados </h6>
    </footer>
    
</body>
</html>