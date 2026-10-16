<?php
require __DIR__ . '/../conexion.php';
$resultado = $conexion->query("SELECT a.matricula,CONCAT(a.nombre,' ',a.apaterno) AS alumno,m.descripcion AS materia,CONCAT(p.nombre,' ',p.apaterno) AS profesor FROM asignacion_materia am JOIN alumnos a ON a.id_alumno=am.id_alumno JOIN materias m ON m.id_materia=am.id_materia JOIN profesores p ON p.id_profesor=am.id_profesor ORDER BY alumno,materia");
?>
<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>
            SAE | Materias asignadas
        </title>
        <link rel="stylesheet" href="../estilos.css">
    </head>
    <body class="cesar" style="background-color:#e8f8f5">
        <h1>
            Salida: materias asignadas
        </h1>
        <?php require __DIR__ . '/../menu.php'; ?>
        <hr>
        <p>
            Este listado muestra materias asignadas; la base no contiene calificaciones.
        </p>
        <?php if ($resultado->num_rows === 0): ?>
        <p>
            Sin registros por ahora.
        </p>
        <?php else: ?>
        <table border="1" cellpadding="6">
            <thead>
                <tr>
                    <?php foreach ($resultado->fetch_fields() as $campo): ?>
                    <th>
                        <?= h(str_replace('_', ' ', ucfirst($campo->name))) ?>
                    </th>
                    <?php endforeach; ?>
                </tr>
            </thead>
            <tbody>
                <?php while ($fila = $resultado->fetch_assoc()): ?>
                <tr>
                    <?php foreach ($fila as $valor): ?>
                    <td>
                        <?= h($valor) ?>
                    </td>
                    <?php endforeach; ?>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <?php endif; ?>
    </body>
</html>
