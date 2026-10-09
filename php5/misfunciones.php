<?php function bienvenidafunction()
{
    date_default_timezone_set("Etc/GMT+6");
    $funcnames = array(
        'buenosdias',
        'buenosdias',
        'buenastardes',
        'buenasnoches'
    );
    $hora = date('H');
    return $funcnames[(int)$hora / 6];
}
function diadelasemana($numerodia)
{
    $nombredias = array(
        "Lunes",
        "Martes",
        "Miércoles",
        "Jueves",
        "Viernes",
        "Sábado",
        "Domingo"
    );
    return $nombredias[$numerodia - 1];
}
function buenosdias($mostrardia = false)
{
    $resultado = "Buenos días!";
    if ($mostrardia) $resultado = $resultado . ", hoy es " . diadelasemana(date('N'));
    $resultado = $resultado . " <br />";
    return $resultado;
}
function buenastardes($mostrardia = false)
{
    $resultado = "Buenas tardes!";
    if ($mostrardia) $resultado = $resultado . ", hoy es " . diadelasemana(date('N'));
    $resultado = $resultado . " <br />";
    return $resultado;
}
function buenasnoches($mostrardia = false)
{
    $resultado = "Buenas noches!";
    if ($mostrardia) $resultado = $resultado . ", hoy es " . diadelasemana(date('N'));
    $resultado = $resultado . " <br />";
    return $resultado;
} ?>