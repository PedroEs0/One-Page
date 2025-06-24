<?php
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Gestión de Almacenamiento</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styless.css">
</head>
<body>


<div id="overlay" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); z-index: 1000;"></div>
<?php include 'heater.php'; ?>
    <div class="main-content" id="main-content">
    <h1>Gestión de Almacenamiento</h1>

<section>
    <h2>1. Jerarquía de Almacenamiento</h2>
    <p>La jerarquía de almacenamiento organiza los distintos tipos de memoria según su velocidad, costo por bit y capacidad. Cuanto más cerca del procesador esté el dispositivo, más rápido es, pero también más costoso.</p>
    <ul>
        <li><strong>Registros del CPU:</strong> extremadamente rápidos pero limitados.</li>
        <li><strong>Memoria Caché:</strong> almacena datos recientes o frecuentes, muy rápida.</li>
        <li><strong>RAM:</strong> mayor capacidad que la caché, más lenta, almacena programas y datos activos.</li>
        <li><strong>Almacenamiento Secundario (HDD/SSD):</strong> no volátil, gran capacidad.</li>
        <li><strong>Almacenamiento Terciario:</strong> como cintas magnéticas o nube, para respaldo y archivo.</li>
    </ul>
</section>
<a class="referencia" href="https://www.geniolandia.com/13132443/que-es-la-jerarquia-de-almacenamiento" target="_blank">Más información</a>
<div class="image-container">
    <img src="images/almace.webp" alt="Estructura de un sistema de archivos" class="responsive-image">
</div>
<section>
    <h2>2. Sistemas de Archivos</h2>
    <p>El sistema de archivos organiza y gestiona cómo se almacenan los datos en los dispositivos. Permite acceso ordenado mediante nombres, carpetas y permisos.</p>
    <p>Funciones:</p>
    <ul>
        <li>Organización jerárquica.</li>
        <li>Gestión de nombres únicos.</li>
        <li>Permisos de acceso.</li>
        <li>Control de espacio libre.</li>
        <li>Recuperación de datos con journaling.</li>
    </ul>
    <p>Ejemplos: FAT32, NTFS, ext4, APFS.</p>
</section>
<a class="referencia" href="https://www.ionos.mx/digitalguide/servidores/know-how/sistemas-de-archivos/" target="_blank">Más información</a>
<div class="image-container">
    <img src="images/SISTEM-ARCH.jpg" alt="Sistemas de archivos" class="responsive-image">
</div>
<section>
    <h2>3. Administración de Espacio</h2>
    <p>Se refiere a cómo se asignan y liberan bloques de almacenamiento. Técnicas:</p>
    <ul>
        <li><strong>Contigua:</strong> bloques adyacentes, rápida pero con fragmentación externa.</li>
        <li><strong>Enlazada:</strong> cada bloque apunta al siguiente, fácil pero lenta para acceso aleatorio.</li>
        <li><strong>Indexada:</strong> bloque índice con todas las direcciones, eficiente pero más costosa en espacio.</li>
    </ul>
    <p>También se maneja fragmentación, espacio libre, compactación y recolección de basura.</p>
</section>
<a class="referencia" href="https://www.wikiciencias.net/gestion-de-archivos-y-directorios-en-sistemas-operativos-asignacion-de-espacio-y-comparticion/" target="_blank">Más información</a>
</div>
</body>
<script src="main.js"></script>
<?php include 'footer.php'; ?>
</html>