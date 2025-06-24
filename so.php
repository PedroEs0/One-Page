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
      <p>Un sistema operativo (SO) es el componente esencial del software que permite que una computadora funcione de manera organizada, eficiente y segura. Su propósito principal es actuar como un intermediario entre el usuario y el hardware, facilitando la interacción entre ambos y gestionando los recursos físicos del sistema, como el procesador, la memoria, los dispositivos de entrada/salida y el almacenamiento.</p> <p> Sin un sistema operativo, el hardware de un equipo sería prácticamente inutilizable para el usuario común, ya que no existiría una interfaz que tradujera las órdenes humanas en instrucciones comprensibles para la máquina.</p>
      <p>Desde el momento en que se enciende un dispositivo, el sistema operativo entra en acción, cargando sus componentes fundamentales en la memoria y estableciendo el entorno necesario para que otros programas puedan ejecutarse.</p> <p> Este entorno no solo permite que las aplicaciones funcionen correctamente, sino que también garantiza que los recursos del sistema se distribuyan de forma equitativa y que los procesos no interfieran entre sí</p>

    </section>
    <section>
      <h2>2. Funciones básicas de un sistema operativo</h2>
      <div class="cards-funciones">
        <div class="card-funcion">
          <strong>Gestión del procesador (CPU): <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-cpu"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 5m0 1a1 1 0 0 1 1 -1h12a1 1 0 0 1 1 1v12a1 1 0 0 1 -1 1h-12a1 1 0 0 1 -1 -1z" /><path d="M9 9h6v6h-6z" /><path d="M3 10h2" /><path d="M3 14h2" /><path d="M10 3v2" /><path d="M14 3v2" /><path d="M21 10h-2" /><path d="M21 14h-2" /><path d="M14 21v-2" /><path d="M10 21v-2" /></svg></strong>
          <p>Asigna el tiempo del procesador a los diferentes procesos en ejecución, decidiendo cuál proceso se ejecuta y cuándo.</p>
        </div>
        <div class="card-funcion">
          <strong>Gestión de la memoria: <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-device-sd-card"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 21h10a2 2 0 0 0 2 -2v-14a2 2 0 0 0 -2 -2h-6.172a2 2 0 0 0 -1.414 .586l-3.828 3.828a2 2 0 0 0 -.586 1.414v10.172a2 2 0 0 0 2 2z" /><path d="M13 6v2" /><path d="M16 6v2" /><path d="M10 7v1" /></svg></strong>
          <p>Administra la memoria RAM asignando espacio a los procesos y liberándolo cuando ya no se necesita, evitando conflictos y maximizando el uso eficiente de los recursos.</p>
        </div>
        <div class="card-funcion">
          <strong>Gestión de dispositivos de entrada/salida (E/S): <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-usb"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M12 17v-11.5" /><path d="M7 10v3l5 3" /><path d="M12 14.5l5 -2v-2.5" /><path d="M16 10h2v-2h-2z" /><path d="M7 9m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /><path d="M10 5.5h4l-2 -2.5z" /></svg></strong>
          <p>Coordina el acceso a dispositivos como teclado, mouse, impresoras y discos, evitando conflictos y asegurando que cada dispositivo reciba las instrucciones adecuadas.</p>
        </div>
        <div class="card-funcion">
          <strong>Gestión del sistema de archivos: <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-file-zip"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 20.735a2 2 0 0 1 -1 -1.735v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2h-1" /><path d="M11 17a2 2 0 0 1 2 2v2a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1v-2a2 2 0 0 1 2 -2z" /><path d="M11 5l-1 0" /><path d="M13 7l-1 0" /><path d="M11 9l-1 0" /><path d="M13 11l-1 0" /><path d="M11 13l-1 0" /><path d="M13 15l-1 0" /></svg></strong>
          <p>Organiza los datos en estructuras jerárquicas (carpetas y archivos), proporcionando métodos para almacenamiento, recuperación, actualización y seguridad de la información.</p>
        </div>
        <div class="card-funcion">
          <strong>Seguridad y control de acceso: <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-shield-half"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M11.998 2l.032 .002l.086 .005a1 1 0 0 1 .342 .104l.105 .062l.097 .076l.016 .015l.247 .21a11 11 0 0 0 7.189 2.537l.342 -.01a1 1 0 0 1 1.005 .717a13 13 0 0 1 -9.208 16.25a1 1 0 0 1 -.502 0a13 13 0 0 1 -9.209 -16.25a1 1 0 0 1 1.005 -.717a11 11 0 0 0 7.791 -2.75l.046 -.036l.053 -.041a1 1 0 0 1 .217 -.112l.075 -.023l.036 -.01a1 1 0 0 1 .12 -.022l.086 -.005zm.002 2.296l-.176 .135a13 13 0 0 1 -7.288 2.572l-.264 .006l-.064 .31a11 11 0 0 0 1.064 7.175l.17 .314a11 11 0 0 0 6.49 5.136l.068 .019z" /></svg></strong>
          <p>Protege el sistema y los datos contra accesos no autorizados mediante contraseñas, permisos, cifrado y otras técnicas.</p>
        </div>
        <div class="card-funcion">
          <strong>Interfaz de usuario: <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-user"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 2a5 5 0 1 1 -5 5l.005 -.217a5 5 0 0 1 4.995 -4.783z" /><path d="M14 14a5 5 0 0 1 5 5v1a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-1a5 5 0 0 1 5 -5h4z" /></svg></strong>
          <p>Proporciona una manera para que los usuarios interactúen con el sistema, ya sea a través de una interfaz gráfica (GUI) o una línea de comandos (CLI).</p>
        </div>
      </div>
    </section>
    <a class="referencia" href="https://concepto.de/sistema-operativo/" target="_blank">Más información</a>
  </div>
</body>
<script src="main.js"></script> 
<?php include 'footer.php'; ?>
</html>