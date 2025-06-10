<?php
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Sistemas Operativos</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styless.css">
</head>
<body>
  <div id="overlay" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); z-index: 1000;"></div>

  <?php include 'heater.php'; ?>

  <div class="main-content" id="main-content">
    <h1>Sistemas Operativos</h1>
    <h2>Introduccion</h2>
    <p>En esta sección se encuentra la información relacionada a los Sistemas Operativos</p>
    <h2>Funcionamiento en diferentes SO</h2>
    <h2>Windows</h2>
    <p>Se hablara del tema relacionado con Windows</p>
    <h2>Linux</h2>
    <p>Se hablara del tema relacionado con Linux</p>
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