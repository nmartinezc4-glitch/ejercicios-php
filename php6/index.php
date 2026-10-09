<!DOCTYPE html>
<html>
<head>
    <title>Ejemplo de PHP y MySQL</title>
</head>
<body>
    <h1>Ejemplo de uso de bases de datos con PHP y MySQL</h1>

    <!-- Formulario para insertar registros -->
    <form action="insertar_db.php" method="GET">
        <table>
            <tr>
                <td>Nombre:</td>
                <td><input type="text" name="nombre" size="20" maxlength="30"></td>
            </tr>
            <tr>
                <td>Edad:</td>
                <td><input type="text" name="edad" size="20" maxlength="30"></td>
            </tr>
        </table>
        <input type="submit" name="accion" value="Grabar">
    </form>

    <hr>

    <!-- Consulta y despliegue de registros -->
    <?php
    include("libreria_db.php");

    // Consultamos id, nombre y edad
    $stmt = $pdo->query("SELECT id, nombre, edad FROM persona");
    ?>

    <table border="1" cellspacing="1" cellpadding="1">
        <tr>
            <td>&nbsp;<b>ID</b>&nbsp;</td>
            <td>&nbsp;<b>Nombre</b>&nbsp;</td>
            <td>&nbsp;<b>Edad</b>&nbsp;</td>
            <td>&nbsp;<b>Acción</b>&nbsp;</td>
        </tr>
        <?php
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            // Se imprime la fila y el enlace Eliminar usando sprintf / printf
            printf(
                "<tr><td>&nbsp;%d</td><td>&nbsp;%s</td><td>&nbsp;%d</td><td><a href=\"borrar_db.php?id=%d\">Eliminar</a></td></tr>",
                $row["id"],
                $row["nombre"],
                $row["edad"],
                $row["id"]
            );
        }
        ?>
    </table>
</body>
</html>