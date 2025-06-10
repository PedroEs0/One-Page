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
    <p>En esta sección se encuentra la información relacionada a la Gestión de Memoria</p>
    <h2>Memoria Principal</h2>
    <p>Se hablara del tema de Memoria Principal</p>
    <p></p>
    <h2>Técnicas de Asignación</h2>
    <p>Se hablara del tema de Técnicas de Asignación</p>
    <p></p>
    <h2>Memoria Virtual</h2>
    <p>Se hablara del tema de Memoria Virtual</p>
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