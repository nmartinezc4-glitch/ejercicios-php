<html>
<head>
    <title>Ejemplo de PHP</title>
</head>
<body>
<p><a href="../ejercicios-php/index.php" style="display:inline-block;padding:10px 18px;background:#0b1f3a;color:#ffffff;text-decoration:none;border-radius:6px;font-family:Arial,sans-serif;font-weight:bold;">&larr; Volver al índice</a></p>
<?php
    $var = "texto";
    $num = 3;

    printf("Puede fácilmente intercalar <b>%s</b> con numero <b>%d</b> <br>", $var, $num);
    printf("<TABLE BORDER=1 CELLPADDING=20>");

    // Array con nombres para elegir al azar
    $nombres = ["Nestor", "Jose", "Carlos", "Maria", "Ana", "Luis", "Elena", "Pedro","Jorge", "Lucia"];

    for ($i = 0; $i < 10; $i++) {
       //nombre aleatorio
        $nombreAleatorio = $nombres[array_rand($nombres)];
        
        // Número decimal aleatorio entre 1.00 y 9.99
        $decimalAleatorio = mt_rand(100, 999) / 100;

        //Imprimir la fila con 2 celdas independientes
        // Columna 1 -> %d (Índice $i)
        // Columna 2 -> %s-%.2f ($nombreAleatorio - $decimalAleatorio con 2 decimales)
        printf("<tr><td>%d</td><td>%s-%.2f</td></tr>", $i, $nombreAleatorio, $decimalAleatorio);
    }
        
    printf("</TABLE>");
?>
</body>
</html>