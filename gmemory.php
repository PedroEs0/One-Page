<?php
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Gestión de Memoria</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styless.css">
</head>
<body>
<div id="overlay" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); z-index: 1000;"></div>
<?php include 'heater.php'; ?>
<div class="main-content" id="main-content">
  <h1>Gestión de Memoria</h1>
<section>
    <h2>1. Memoria Principal</h2>
    <p>La memoria principal, también conocida como memoria RAM (Random Access Memory), es un recurso fundamental para el funcionamiento de un sistema computacional. Se trata de un tipo de memoria volátil, lo que significa que su contenido se pierde al apagar el equipo. Su función principal es almacenar temporalmente tanto los programas que se están ejecutando como los datos que están siendo procesados, permitiendo un acceso rápido por parte del procesador.</p>
    <p>El sistema operativo es el encargado de administrar esta memoria para que múltiples procesos puedan ejecutarse simultáneamente sin interferirse entre sí. Esto implica llevar un control estricto sobre qué porciones de memoria están ocupadas, cuáles están libres, y cómo se deben distribuir para que el sistema sea eficiente y estable. Cuando hay más procesos que memoria disponible, es necesario tomar decisiones sobre cuál se mantiene en memoria y cuál se reubica temporalmente en el disco (memoria virtual).</p>
    <p>Además, la gestión de la memoria principal involucra aspectos como la protección de espacios de memoria (para evitar que un proceso interfiera con otro), el uso compartido cuando es necesario (por ejemplo, bibliotecas de funciones compartidas), y la reubicación de procesos para mejorar el uso del espacio disponible.</p>
</section>
<section>
    <h2>2. Técnicas de Asignación de Memoria</h2>
    <p>La forma en que se asigna la memoria a los procesos influye directamente en el rendimiento del sistema. Existen diferentes técnicas, cada una con ventajas y desventajas:</p>
    <ul>
        <li><strong>Asignación Contigua:</strong> cada proceso se ubica en un bloque continuo de memoria. Es simple y rápida en términos de acceso, pero presenta problemas de fragmentación externa.</li>
        <li><strong>Segmentación:</strong> divide el espacio de memoria de un programa en segmentos lógicos. Mejora la protección y la organización, pero introduce fragmentación externa.</li>
        <li><strong>Paginación:</strong> divide la memoria física y lógica en bloques del mismo tamaño llamados páginas y marcos. Elimina la fragmentación externa, aunque puede haber fragmentación interna.</li>
    </ul>
    <p>Las técnicas modernas utilizan paginación combinada con segmentación para un mejor manejo de la memoria en sistemas multitarea.</p>
</section>
<section>
    <h2>3. Memoria Virtual</h2>
    <p>La memoria virtual permite que un sistema operativo ejecute procesos que requieren más memoria que la disponible físicamente. Se basa en una abstracción que da a cada proceso la impresión de tener un espacio de direcciones continuo y privado, aunque internamente esté fragmentado o parcialmente almacenado en disco.</p>
    <p>Esto se logra mediante el uso de espacio de intercambio (swap) en el disco duro. Cuando la RAM se llena, el sistema transfiere temporalmente datos no utilizados al disco. Cuando los datos intercambiados se vuelven a necesitar, se traen de vuelta a la RAM.</p>
    <p>La memoria virtual permite ejecutar múltiples procesos grandes, aislar procesos y optimizar el uso de RAM, pero puede afectar el rendimiento si hay exceso de intercambio (thrashing).</p>
</section>
</div>
</body>
<script src="main.js"></script>
<?php include 'footer.php'; ?>
</html>