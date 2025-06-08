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
        <link rel="stylesheet" href="styles.css">
    </head>

    <body>
        <header class="banner">
            <div class="texto">
                <h1 class="titulo">ChinGue</h1>
                <p class="subtitulo">Material de estudio sobre Plataformas Tecnológicas</p>
            </div>
        </header>
    </body>

    <nav>
        <ul class="menu">
            <li><a href="chingue.php">Inicio</a></li>

            <li class="has-submenu">
                <a href="sistemas.php">Sistemas operativos</a>
                <ul class="submenu">
                    <li><a href="sistemas.php#windows">Windows</a></li>
                    <li><a href="sistemas.php#linux">Linux</a></li>
                </ul>
            </li>

            <li class="has-submenu">
                <a href="procesos.php">Gestión de procesos</a>
                <ul class="submenu">
                    <li><a href="procesos.php#concepto">Concepto de proceso</a></li>
                    <li><a href="procesos.php#ciclo">Ciclo de vida</a></li>
                    <li><a href="procesos.php#planificadores">Planificadores de proceso</a></li>
                    <li><a href="procesos.php#hilos">Hilos de ejecución</a></li>
                </ul>
            </li>

            <li class="has-submenu">
                <a href="memoria.php">Gestión de memoria</a>
                <ul class="submenu">
                    <li><a href="memoria.php#principal">Memoria principal</a></li>
                    <li><a href="memoria.php#asignacion">Técnicas de asignación de memoria</a></li>
                    <li><a href="memoria.php#virtual">Memoria virtual</a></li>
                </ul>
            </li>

            <li class="has-submenu">
                <a href="almacenamiento.php">Gestión de Almacenamiento</a>
                <ul class="submenu">
                    <li><a href="almacenamiento.php#jerarquia">Jerarquía de almacenamiento</a></li>
                    <li><a href="almacenamiento.php#sistemas">Sistemas de archivos</a></li>
                    <li><a href="almacenamiento.php#espacio">Administración de espacio</a></li>
                </ul>
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
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">LinkedIn</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Sobre Nosotros</h3>
                <p>Somos una empresa dedicada a proporcionar soluciones tecnológicas innovadoras.</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 Ejemplo Inc. Todos los derechos reservados.</p>
        </div>
    </footer>
</html>