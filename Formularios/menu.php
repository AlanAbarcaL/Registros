<?php
$opciones = [
 'index.php'=>'Inicio',
 'Entradas/entrada_alumno.php'=>'Registrar alumno',
 'Entradas/entrada_profesor.php'=>'Registrar profesor',
 'Entradas/entrada_grupo.php'=>'Registrar grupo',
 'Entradas/entrada_materia.php'=>'Registrar materia',
 'Entradas/crud_alumnos.php'=>'CRUD alumnos',
 'Entradas/crud_profesores.php'=>'CRUD profesores',
 'Entradas/crud_grupos.php'=>'CRUD grupos',
 'Entradas/crud_materias.php'=>'CRUD materias',
 'Procesos/proceso_asignar_grupo.php'=>'Asignar grupo',
 'Procesos/proceso_asignar_materia.php'=>'Asignar materia',
 'Procesos/proceso_baja_alumno.php'=>'Baja de alumno',
 'Salidas/salida_alumnos.php'=>'Lista alumnos',
 'Salidas/salida_materias.php'=>'Lista materias',
 'Salidas/salida_grupos.php'=>'Lista grupos',
 'Salidas/salida_grupos_asignados.php'=>'Grupos asignados',
 'Salidas/salida_boleta.php'=>'Boletas',
 'Salidas/salida_alumnos_baja.php'=>'Alumnos de baja'
];
// Ruta absoluta desde localhost: funciona desde Entradas, Procesos y Salidas.
$prefijo = '/Formularios/';
$paginaActual = basename($_SERVER['SCRIPT_NAME']);
?>
<div class="menu" tabindex="0">
    <div class="boton-menu">
        ☰ Menú
        <span class="flecha">
            ▾
        </span>
    </div>
    <nav aria-label="Navegación principal">
        <?php foreach (['Inicio'=>['index.php'], 'Entradas'=>array_filter(array_keys($opciones), fn($ruta) => str_starts_with($ruta, 'Entradas/')), 'Procesos'=>array_filter(array_keys($opciones), fn($ruta) => str_starts_with($ruta, 'Procesos/')), 'Salidas'=>array_filter(array_keys($opciones), fn($ruta) => str_starts_with($ruta, 'Salidas/'))] as $grupo=>$rutas): ?>
        <div class="grupo-menu">
            <strong>
                <?= h($grupo) ?>
            </strong>
            <?php foreach ($rutas as $ruta): ?>
            <a class="<?= (basename($ruta) === $paginaActual) ? 'actual' : '' ?>" href="<?= h($prefijo . $ruta) ?>">
                <?= h($opciones[$ruta]) ?>
            </a>
            <?php endforeach; ?>
        </div>
        <?php endforeach; ?>
    </nav>
</div>
