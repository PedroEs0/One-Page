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
    <p>En esta seccion se encuentra la informacion relacionada a la Gestion del Almacenamiento</p>
    <h2>Jerarquía de almacenamiento</h2>
    <p>Se hablara del tema de Jerarquía de almacenamiento</p>
    <p></p>
    <h2>Sistemas de Archivo</h2>
    <p>Se hablara del tema de Sistemas de Archivo</p>
    <p></p>
    <h2>Administración de espacio</h2>
    <p>Se hablara del tema de Administracion de espacio</p>
  </div>

  <?php include 'footer.php'; ?>

</body>
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