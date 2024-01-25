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
        <h2>Fundamentos de Programación</h2>
        <?php
        echo "1. Integrar código PHP en HTML .<br>";
        echo "2. Pagina estática vs Pagina dinámica .<br>";
        echo "3. Manejo de variables en PHP .<br>";
        ?>
    </section>
    <br>
    <section>
        <h2>Sueldos</h2>
        <?php
        $sueldo = 350;
        printf("El sueldo básico es: %.2f",$sueldo);
        
        ?>
    </section>
    <br>
    <section>
        <h2>LISTADO DE CASOS DESARROLLADOS CON PHP</h2>
        <?php
        $cadena = "CASO";
        echo '<ul>';
        for ($i=1; $i < 8; $i++) { 
            echo('<li>'.$cadena." ". $i.'</li>');
        }
        echo '</ul>';
        ?>
    </section>
    <br>
    <section>
        <h2>variable literal</h2>
        <?php
            //!Literales
            //Entero -> 10 100 230 -123
            //Reales -> 20.50 0.0034 -123.5
            //boolean -> true false
            //carácter -> "a"
            //cadena -> "Hector"
        ?>
    </section>
    <br>
   
    <section>
        <h2>Operadores Aritméticos</h2>
        <?php
            //!suma + -> $a + $b
            //!resta - -> $a - $b
            //!multi * -> $a * $b
            //!div / -> $a / $b
            //!resto o modulo % -> $a % $b
        ?>
    </section>
    <section>
        <h2>Operadores cadena</h2>
        <?php
            //* . punto(paa concatenar y unir valores)
        
        ?>
    </section>
    <footer>
        <h6>Copyright © 2024, todos los derechos reservados </h6>
    </footer>
    
</body>
</html>