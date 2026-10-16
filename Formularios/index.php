<?php require __DIR__.'/conexion.php'; ?>
<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="estilos.css">
        <title>
            SAE Escolar
        </title>
    </head>
    <body class="cesar">
        <main>
            <h1>
                Sistema de Administración Escolar
            </h1>
            <?php require __DIR__.'/menu.php'; ?>
            <section class="alan">
                <h2>
                    Bienvenido
                </h2>
                <p>
                    Usa el menú para registrar, consultar, editar o eliminar alumnos, profesores, grupos y materias. También puedes asignar grupos y materias, consultar boletas y dar de baja alumnos.
                </p>
            </section>
        </main>
    </body>
</html>
