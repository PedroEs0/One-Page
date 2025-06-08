<?php
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>One Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styless.css">
</head>
<body>

  <div id="overlay" style="display: none; position: fixed; top: 0; left: 0; 
      width: 100%; height: 100%; background: rgba(0,0,0,0.5); z-index: 1000;"></div>

  <div class="header">
    <button class="toggle-btn" onclick="toggleSidebar()">☰</button>
    <span style="margin-left: 10px;">One Page</span>
  </div>

  <div class="sidebar" id="sidebar">
    <a href="">Inicio</a>
    <a href="so.php">Sistemas Operativos</a>
    <a href="gprocess.php">Gestión de Procesos</a>
    <a href="gmemory.php">Gestión de Memoria</a>
    <a href="gstorage.php">Gestión de Almacenamiento</a>
    <a href="aboutus.php">Nosotros</a>
  </div>

  <div class="main-content" id="main-content">
    <h1>Contenido Principal</h1>
    <p>Este sitio muestra el contenido de la materia Plataformas Tecnologicas 2025-1</p>
  </div>

  <script>
    function toggleSidebar() {
      const sidebar = document.getElementById('sidebar');
      const content = document.getElementById('main-content');
      const overlay = document.getElementById('overlay');

      sidebar.classList.toggle('open');
      content.classList.toggle('dimmed');
      overlay.style.display = sidebar.classList.contains('open') ? 'block' : 'none';
    }

    document.getElementById('overlay').addEventListener('click', () => {
      document.getElementById('sidebar').classList.remove('open');
      document.getElementById('main-content').classList.remove('dimmed');
      document.getElementById('overlay').style.display = 'none';
    });
  </script>
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
            <p><a href="ref.php">Referencias</a></p>
            <p>&copy; 2025 One Page. Todos los derechos reservados.</p>
        </div>
    </footer>
</html>