# Ejercicios de desarrollo web

Ejercicios de HTML, CSS, PHP y MySQL hechos con XAMPP y Visual Studio Code.

## Contenido

- dia2 a dia5: ejercicios de HTML y CSS
- paginapersonal: página personal con HTML y CSS
- ejercicios-php: ejercicio con PHP y estilos
- php1 a php4: fundamentos de PHP
- php5: funciones, formularios con GET y POST
- php6: conexión a MySQL con PDO (insertar y borrar registros)
- database: script SQL de la base de datos de ejemplo

## Cómo ejecutarlo

1. Instalar XAMPP e iniciar Apache y MySQL.
2. Copiar esta carpeta dentro de `C:\xampp\htdocs\`.
3. En phpMyAdmin crear una base de datos llamada `curso_php`, entrar a ella y en Importar subir `database/schema.sql`.
4. Si tu MySQL usa el puerto 3306, cambiar `port=3307` por `port=3306` en `php5/libreria_db.php` y `php6/libreria_db.php` (según donde esté el archivo).
5. Abrir `http://localhost/desarrollo-web/` en el navegador y entrar a la carpeta que quieras probar.

## Tecnologías

HTML, CSS, PHP, MySQL, PDO, XAMPP, Git y GitHub.