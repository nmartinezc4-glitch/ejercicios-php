<?php
$nombre = "Néstor Joseph Martínez Cruz";
$carnet = "5190-23-1853";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Néstor Joseph Martínez Cruz - Ejercicios PHP</title>
    <link rel="stylesheet" href="estilos.css" />
</head>
<body>

    <header class="encabezado">
        <h1><?php echo $nombre; ?></h1>
        <p class="carnet">Carnet: <?php echo $carnet; ?></p>

        <div class="propiedades-servidor">
            <h2>Propiedades del servidor</h2>
            <?php
                echo $_SERVER['PHP_SELF'] . "<br />"; //archivo Script relativo al root del website
                echo $_SERVER['SERVER_NAME'] . "<br />"; //nombre del Server o dirección IP del servidor
                echo $_SERVER['REMOTE_ADDR'] . "<br />"; //direccion IP de la pc cliente
                echo $_SERVER['REMOTE_HOST'] . "<br />"; //host name o dirección IP address de la pc cliente
            ?>
        </div>
    </header>

    <main>
        <h2>Ejercicios realizados en clase</h2>
        <ul class="lista-ejercicios">
            <li><a href="../php1/php1.php">PHP 1</a></li>
            <li><a href="../php2/php2.php">PHP 2 — Ámbito de variables ($GLOBALS)</a></li>
            <li><a href="../php3/php3.php">PHP 3</a></li>
            <li><a href="../php4/php4.php">PHP 4</a></li>
            <li><a href="../php5/indexget.php">PHP 5 — Formulario con método GET</a></li>
            <li><a href="../php5/indexpost.php">PHP 5 — Formulario con método POST</a></li>
            <li><a href="../php5/usandolib.php">PHP 5 — Uso de librería (misfunciones.php)</a></li>
        </ul>
    </main>

</body>
</html>
