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
        <h1>Condicionales</h1>
    </header>
    <section>
        <h2>if</h2>
        <?php
      //?categorias
      //operario, administrativo, jefe

       $categoria = 'jefe';
       if ($categoria == 'operario') {
        echo "Costo por hora 10"."<br>";
       }elseif ($categoria == 'admnistrativo') {
        echo "Costo por hora 15"."<br>";
       }elseif ($categoria == 'jefe') {
        echo "Costo por hora 25"."<br>";
       }

       switch ($categoria) {
        case 'operario':
            echo "Costo por hora 10"."<br>";
            break;
        case 'administrativo':
            echo "Costo por hora 15"."<br>";
            break;
        case 'jefe':
            echo "Costo por hora 25"."<br>";
            break;
        default:
            echo "no se encontro"."<br>";
            break;
       }





        ?>
    </section>
    <br>
    <br>
    <footer>
        <h6>Copyright © 2024, todos los derechos reservados </h6>
    </footer>
    
</body>
</html>