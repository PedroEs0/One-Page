<?php
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Sistemas Operativos</title>
  <link rel="icon" type="image/png" href="images/circuit.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styless.css">
</head>
<body>
  <div id="overlay" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); z-index: 1000;"></div>

  <?php include 'heater.php'; ?>

  <div class="main-content" id="main-content">
    <h1>Sistemas Operativos</h1>
    <section>
      <h2>1. Introducción</h2>
      <p>Un Sistema Operativo (SO) es el software fundamental que administra los recursos físicos del sistema (hardware) y provee una plataforma para que los programas se ejecuten.</p>
      <p>Su propósito principal es actuar como intermediario entre el usuario y el hardware, garantizando un entorno eficiente, seguro y amigable.</p>
    </section>
    <section>
      <h2>2. Funciones básicas de un sistema operativo</h2>
      <div class="cards-subtemas">
        <div class="card-subtema">
          <strong>Gestión del procesador (CPU):</strong>
          la asignación del tiempo del procesador a los diferentes procesos que están en ejecución, decidiendo cuál proceso se ejecuta y cuándo.
        </div>
        <div class="card-subtema">
          <strong>Gestión de la memoria:</strong>
          Administra la memoria RAM asignando espacio a los procesos y liberándolo cuando ya no se necesita, evitando conflictos y maximizando el uso eficiente de los recursos.
        </div>
        <div class="card-subtema">
          <strong>Gestión de dispositivos de entrada/salida (E/S):</strong>
          Coordina el acceso a dispositivos como teclado, mouse, impresoras, discos, evitando conflictos y asegurando que cada dispositivo reciba las instrucciones adecuadas.
        </div>
        <div class="card-subtema">
          <strong>Gestión del sistema de archivos:</strong>
          Organiza los datos en estructuras jerárquicas (carpetas y archivos), proporcionando métodos para almacenamiento, recuperación, actualización y seguridad de la información.
        </div>
        <div class="card-subtema">
          <strong>Seguridad y control de acceso:</strong>
          Protege el sistema y los datos contra accesos no autorizados, mediante contraseñas, permisos, cifrado y otras técnicas.
        </div>
        <div class="card-subtema">
          <strong>Interfaz de usuario:</strong>
          Proporciona una manera para que los usuarios interactúen con el sistema, ya sea a través de una interfaz gráfica (GUI) o una línea de comandos (CLI).
        </div>
      </div>
    </section>
  </div>
</body>
<script src="main.js"></script> 
<?php include 'footer.php'; ?>
</html>