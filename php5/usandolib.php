<p><a href="../ejercicios-php/index.php" style="display:inline-block;padding:10px 18px;background:#0b1f3a;color:#ffffff;text-decoration:none;border-radius:6px;font-family:Arial,sans-serif;font-weight:bold;">&larr; Volver al índice</a></p>
<?php require ("misfunciones.php");
    $functionname = bienvenidafunction();


    //note la asignación del nombre de la función a la variable
    echo $functionname();
    echo $functionname(true);
?>