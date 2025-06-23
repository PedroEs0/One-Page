<?php
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>One Page</title>
  <link rel="icon" type="image/png" href="images/circuit.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styless.css">
</head>
<body>
  <div id="overlay" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); z-index: 1000;"></div>

  <?php include 'heater.php'; ?>

  <div class="main-content" id="main-content">
    <h1>Contenido Principal</h1>
    <p>Este sitio presenta de manera detallada el contenido programático desarrollado durante la asignatura de Plataformas Tecnológicas correspondiente al periodo académico 2025-1.</p>
<p>A través de este espacio, los estudiantes y demás interesados podrán acceder a los temas abordados a lo largo del curso, incluyendo conceptos clave, herramientas utilizadas, prácticas realizadas y recursos de apoyo. El objetivo es proporcionar una visión clara y estructurada de los conocimientos impartidos, facilitando el repaso, la consulta y el fortalecimiento del aprendizaje adquirido durante el semestre.</p>
    <p></p>
    <h1>¿Como Usar El Sitio?</h1>
    <p>Utiliza el menú lateral para navegar por las diferentes secciones del sitio y explorar el contenido según tu interés.</p>
    <p>Cada sección está organizada para que puedas ubicar fácilmente la información correspondiente a cada módulo o unidad temática.</p>
    
  </div>
</body>

<?php include 'footer.php'; ?>

  <script>
    function toggleSidebar() {
      const sidebar = document.getElementById('sidebar');
      const content = document.getElementById('main-content');
      const overlay = document.getElementById('overlay');
      const footer = document.querySelector('.footer');

      sidebar.classList.toggle('open');
      content.classList.toggle('dimmed');
      footer.classList.toggle('dimmed');
      overlay.style.display = sidebar.classList.contains('open') ? 'block' : 'none';
    }

    document.getElementById('overlay').addEventListener('click', () => {
      document.getElementById('sidebar').classList.remove('open');
      document.getElementById('main-content').classList.remove('dimmed');
      document.querySelector('.footer').classList.remove('dimmed');
      document.getElementById('overlay').style.display = 'none';
    });

    document.querySelectorAll('.submenu-btn').forEach(btn => {
      btn.addEventListener('click', function(e) {
        e.preventDefault();
        this.parentElement.classList.toggle('open');
      });
    });
  </script>
</html>