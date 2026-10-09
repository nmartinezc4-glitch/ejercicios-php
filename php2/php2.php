<p><a href="../ejercicios-php/index.php" style="display:inline-block;padding:10px 18px;background:#0b1f3a;color:#ffffff;text-decoration:none;border-radius:6px;font-family:Arial,sans-serif;font-weight:bold;">&larr; Volver al índice</a></p>
<?php
/* ejemplo de variable $GLOBALS */
$varScope = "mi variable Global"; //variable global
function locales()
{
    $varScope = "mi variable local";
    echo "\$varScope valor en alcance global: " . $GLOBALS["varScope"] . "<br />";
    echo "\$varScope valor en alcance local: " . $varScope . "<br />";
}
locales();
/*ejemplo con $_SERVER */
echo $_SERVER['PHP_SELF'] . "<br />"; //archivo Script relativo al root del website
echo $_SERVER['SERVER_NAME'] . "<br />"; //nombre del Server o dirección IP del servidor
echo $_SERVER['REMOTE_ADDR'] . "<br />"; //direccion IP de la pc cliente
/*echo $_SERVER['REMOTE_HOST'] . "<br />"; //host name o dirección IP address de la pc cliente */
echo $_SERVER['REMOTE_PORT'] . "<br />";
echo $_SERVER['SERVER_ADMIN'] . "<br />";
?>
<hr>
<?php //variables locales
$samplevar = 10;
function sumvars()
{
		$a = 5;
		$b = 3;
		$samplevar = $a + $b;
		//$samplevar es una variable local en esta función
		echo "\$samplevar en esta función es $samplevar. <br />";
}
sumvars();
echo "\$samplevar fuera de la función es $samplevar. <br />";
//parámetros de función
function phpfunction($parameter1, $parameter2)
{
		return ($parameter1 * $parameter2);
}
$funcval = phpfunction(6, 3);
echo "valor devuelto de phpfunction() es $funcval <br />";

$globalvar = 55;
function dividevalue()
{
		GLOBAL $globalvar;
		$globalvar /= 11;
		echo "resultado de división $globalvar <br />";
}
dividevalue();
//variables estáticas
function countingsheeps()
{
    STATIC $sheepnumber = 0;
    $sheepnumber++;
    echo "sheepnumber $sheepnumber <br />";
}
countingsheeps();
countingsheeps();
countingsheeps();
countingsheeps();
countingsheeps();
?>
<hr>
<?php

    define("WEBPAGEWIDTH",100);

    echo WEBPAGEWIDTH; //recuperar el valor usando su nombre directamente
    echo constant("WEBPAGEWIDTH"); //recuperar el valor con la función constant()

?>
