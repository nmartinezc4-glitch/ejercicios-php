<html>  
    <head>
        <title> Ejemplo de PHP </title>
    </head>
    <body>
    <p><a href="../ejercicios-php/index.php" style="display:inline-block;padding:10px 18px;background:#0b1f3a;color:#ffffff;text-decoration:none;border-radius:6px;font-family:Arial,sans-serif;font-weight:bold;">&larr; Volver al índice</a></p>
    Parte de HTML NORMAL. <BR><BR>
    <?php
        echo "<h1> Nestor Joseph Martinez Cruz</h1>";
        echo "Parte de PHP<br>";
        for($i=0; $i<10; $i++){
            echo "Linea" . $i . "<br>";
        }
        echo "<hr>";
        $a = 1;
        $b = 3.34;
        $c = "Hola mundo";
        echo $a, "<br>", $b, "<br>", $c;
        ?>
    

    </body>
</html>