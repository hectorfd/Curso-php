<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../html/css/style.css">
    <title>Caso Bucles</title>
</head>
<body>
    <header>
        <h1>Caso Bucles</h1>
        <div class="wrapper">
            <div class="select-btn">
                <span>Seleccione Caso</span>
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
        <h2>While</h2>
        <h3>Contar del 1 al 10</h3>
        <?php
        $a = 1;
        while ($a <= 10) {
            echo $a.' ';
            $a++;
        }
        ?>
        <h3>Contar del 10 al 1</h3>
        <?php
        $a = 10;
        while ($a >= 1) {
            echo $a.' ';
            $a--;
        } 
        ?>
        <h3>Listar los n primeros Pares</h3>
        <?php
        $n = 10;
        $a = 0;
        while ($a <= $n) {
            if ($a%2 == 0) {
                echo $a.' ';
            }
            $a++;
        }
        ?>
        <h3>Listar los N primeros elementos de la siguiente serie 1/2, 3/4, 5/6 ,..N</h3>
        <?php
        $n = 10;
        $a = 1;
        $par = 0;
        $impar = 1;
        while ($a <= $n) {
            $par += 2;
            echo $impar.'/'.$par.' ';
            $impar += 2;
            $a++;
        }
        ?>
        <h3>listar los N primeros elementos de la siguiente serie: 1/5, -2/10, 3/15, -4/20 ..N</h3>
        <?php
        $n = 10;
        $a = 1;
        $par = 1;
        $impar = 5;
        while ($a <= 10) {
            if ($a%2 == 0) {
                $a *= -1;
                echo $a.'/'.$impar.', ';
                $a *= -1;
            }else {
                echo $a.'/'.$impar.', ';
            }
            $impar += 5;
            $a++;
        }
        ?>
    </section>
    <br><br>
    <section>
        <h2>For</h2>
        <h3>Contar del 1 al 10</h3>
        <?php
        for ($i=1; $i <= 10; $i++) { 
            echo $i.' ';
        } 
        ?>
        <h3>Contar del 10 al 1</h3>
        <?php
        for ($i=10; $i >= 1; $i--) { 
            echo $i.' ';
        } 
        ?>
        <h3>Listar los n primeros Pares</h3>
        <?php
        $n = 10;
        for ($i=0; $i <= 10; $i++) { 
            if ($i%2 == 0) {
                echo $i.' ';
            }
        }
        ?>
        <h3>Listar los N primeros elementos de la siguiente serie 1/2, 3/4, 5/6 ,..N</h3>
        <?php
        $n = 10;
        $par = 0;
        $impar = 1;
        for ($i=1; $i <= $n; $i++) { 
            $par += 2;
            echo $impar.'/'.$par.' ';
            $impar +=2;
        }
        ?>
         <h3>listar los N primeros elementos de la siguiente serie: 1/5, -2/10, 3/15, -4/20 ..N</h3>
        <?php
        $n = 10;
        $a = 1;
        $impar = 5;
        for ($i=1; $i <= $n; $i++) { 
            if ($i%2==0) {
                $i *= -1;
                echo $i.'/'.$impar.', ';
                $i *= -1;
            }else {
                echo $i.'/'.$impar.', ';
            }
            $impar += 5;
        }
        ?>
    </section>
    <br><br>
    <section>
        <h2>Anidaciones</h2>
        <h3> torre de números</h3>
        <?php 
        $n = 10;
        $a = 1;
       
        while ($a <= $n) {
            $j = 1;
            while ($j <= $a) {
                echo $a;
                $j++;
            }
            echo "<br>";
            $a++;
        }
        ?> 
        <h3>Mostrar en pantalla todo los los números comprendidos entre 1 y 100 en filas de 5 números, 10 números y 15 números</h3>
        <?php 
        $n = 100;
        $a = 5;
        $i = 0;
       
        while ($a <= $n) {
            $j = 1;
            while ($j <= $a) {
                echo ($i += 1).', ';
                $j++;
                if ($i >= $n) {
                    $a = $n;
                    break;
                }
            }
            echo "<br>";
            $a += 5;
            $i -= 1;
            $i++;
        }
        ?>
        <h2>Hector Bueno xd</h2>
        <h3>Mostrar en pantalla todo los números pares comprendidos entre 1 y 1000 es mucho xd en filas de 5 números, 10 números y 15 números</h3>
        <?php 
        $n = 1000;
        $a = 5;
        $i = 0;
       
        while ($a <= $n) {
            $j = 1;
            while ($j <= $a) {
                
                echo ($i += 2).', ';
                $j++;
                if ($i >= $n) {
                    $a = $n;
                    break;
                }   
            }
            echo "<br>";
            $a += 5;
            $i -= 1;
            $i++;
        }
        ?> 
    </section>
    <br><br>
    <footer>
        <h6>HectorFD Copyright © 2024, todos los derechos reservados </h6>
    </footer>
    <script src="../html/js/script.js"></script>
</body>
</html>