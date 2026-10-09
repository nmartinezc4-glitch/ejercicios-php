<html>
<head>
    <title>Ejemplo de PHP</title>
</head>
<body>
<p><a href="../ejercicios-php/index.php" style="display:inline-block;padding:10px 18px;background:#0b1f3a;color:#ffffff;text-decoration:none;border-radius:6px;font-family:Arial,sans-serif;font-weight:bold;">&larr; Volver al índice</a></p>
<?php
    $a = 8;
    $b = 3;
    $c = 3;

    echo "1." , $a==$b && ($c > $b), "<br>";
    echo "2." , ($a == $b) || ($b == $c), "<br>";
    echo "3." , !($b <= $c), "<br>";
?>
<hr>

<?php
    if ($a < $b)
    {
        echo "a es menor que b";
    }
    else
    {
        echo "a no es menor que b";
    }
?>
<hr>
<?php
    $subtotal = 120;
    $tax = 10;
    $total = $subtotal + $tax;
    $discount = $total < 150 ? $total*0.15 : $total*0.20;
    echo "descuento=" . $discount;
?>
<hr>
<?php
    $posicion = "arriba";

    switch($posicion) {
        case "arriba":   // Bloque 1
            echo "La variable contiene";
            echo " el valor arriba";
            break;
        case "abajo":    // Bloque 2
            echo "La variable contiene";
            echo " el valor abajo";
            break;
        default:         // Bloque 3
            echo "La variable contiene otro valor";
            echo " distinto de arriba y abajo";
    }
?>
<hr>
<?php
    date_default_timezone_set("Etc/GMT-6");
    $hora=date('h');

    if($hora >= 0 && $hora < 12)
        echo "Buenos días!";
    elseif( $hora >= 12 and $hora < 19)
        echo "Buenas tardes!";
    else
        echo "Buenas noches!";
?>
</body>
</html>