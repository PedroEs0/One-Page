<?php
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>One Page</title>
</head>

<body>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Banner con Fondo y Texto Izquierdo</title>
        <link rel="stylesheet" href="styless.css">
    </head>

    <body>
        <header class="banner">
            <div class="texto">
                <h1 class="titulo">One Page</h1>
                <p class="subtitulo">Material de estudio sobre Plataformas Tecnológicas 2025-1</p>
            </div>
        </header>
    </body>

    <nav>
        <ul class="menu">
            <li><a href="onepage.php">Inicio</a></li>

            <li class="has-submenu">
                <a href="so.php">Sistemas operativos</a>
                <ul class="submenu">
                    <li><a href="so.php#windows">Windows</a></li>
                    <li><a href="so.php#linux">Linux</a></li>
                </ul>
            </li>

            <li class="has-submenu">
                <a href="gprocess.php">Gestión de procesos</a>
                <ul class="submenu">
                    <li><a href="gprocess.php#concepto">Concepto de proceso</a></li>
                    <li><a href="gprocess.php#ciclo">Ciclo de vida</a></li>
                    <li><a href="gprocess.php#planificadores">Planificadores de proceso</a></li>
                    <li><a href="gprocess.php#hilos">Hilos de ejecución</a></li>
                </ul>
            </li>

            <li class="has-submenu">
                <a href="gmemory.php">Gestión de memoria</a>
                <ul class="submenu">
                    <li><a href="gmemory.php#principal">Memoria principal</a></li>
                    <li><a href="gmemory.php#asignacion">Técnicas de asignación de memoria</a></li>
                    <li><a href="gmemory.php#virtual">Memoria virtual</a></li>
                </ul>
            </li>

            <li class="has-submenu">
                <a href="gstorage.php">Gestión de Almacenamiento</a>
                <ul class="submenu">
                    <li><a href="gstorage.php#jerarquia">Jerarquía de almacenamiento</a></li>
                    <li><a href="gstorage.php#sistemas">Sistemas de archivos</a></li>
                    <li><a href="gStorage.php#espacio">Administración de espacio</a></li>
                </ul>
            </li>
            <li>class="has-submenu">
                <a href="aboutus.php">Nosotros</a>
            </li>
        </ul>
    </nav>
    
    <main>
        <h2>Contenido Principal</h2>
        <p>Este es un ejemplo de una página hecha completamente en PHP con un menú de navegación.</p>
    </main>

</body>
<footer class="footer">
        <div class="footer-container">
            <div class="footer-section">
                <h3>Contacto</h3>
                <p>Correo: contacto@ejemplo.com</p>
                <p>Teléfono: +1 234 567 890</p>
            </div>
            <div class="footer-section">
                <h3>Redes Sociales</h3>
                <ul>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Instagram</a></li>
                </ul>
            </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p><a href="#">Referencias</a></p>
            <p>&copy; 2025 One Page. Todos los derechos reservados.</p>
        </div>
    </footer>
</html>