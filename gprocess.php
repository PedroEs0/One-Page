<?php
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Gestión de Procesos</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styless.css">
</head>
<body>
  <div id="overlay" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); z-index: 1000;"></div>

  <?php include 'heater.php'; ?>
  <div class="main-content" id="main-content">
    <h1>Gestión de Procesos</h1>
    <h2>Concepto Principal</h2>
    <p>En esta seccion se encuentra la informacion relacionada a la Gestion de Procesos</p>
    <p></p>
    <h2>Ciclo de Vida de los Procesos</h2>
    <p>Se hablara del tema de Ciclo de Vida de los Procesos</p>
    <p></p>
    <h2>Planificacion de Procesos</h2>
    <p>Se hablara del tema de Planificacion de los Procesos</p>
    <p></p>
    <h2>Hilos de Ejecucion</h2>
    <p>Se hablara del tema de Hilos de Ejecucion</p>
  </div>
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
</body>
</html>