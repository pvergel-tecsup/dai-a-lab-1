<?php

$nombre = "Paul";
$Nombre = "Pedro";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 1</title>
</head>
<body>
    <header>
        <h1>Laboratorio 1</h1>
        <h2>Desarrollo de Aplicaciones en Internet</h2>
        <h3>&copy;2024</h3>
    </header>
    <nav></nav>
    <aside>
        <ul>
            <li><a href="ejercicioA.html">Ejercicio A</a></li>
            <li><a href="ejercicioB.html">Ejercicio B</a></li>
        </ul>
    </aside>
    <article>
        <h2>Hola Mundo <?php echo $Nombre; ?></h2>
        <?php

        $nombre = 75;
        echo '$nombre = ' . $nombre . '<br>';

        $precio = (5 + 3) * 4;
        echo '$precio = ' . $precio . '<br>';

        define('IGV', 0.18);
        $total = $precio + $precio * IGV;
        echo '$total = ' . $total;

        ?>
    </article>
    <footer>
        &copy;2024 - Desarrollo de Aplicaciones en Internet
    </footer>
</body>
</html>