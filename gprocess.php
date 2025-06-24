<?php
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Gestión de Procesos</title>
  <link rel="icon" type="image/png" href="images/circuit.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styless.css">
</head>
<body>
  <div id="overlay" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); z-index: 1000;"></div>

  <?php include 'heater.php'; ?>
<div class="main-content" id="main-content">
    <h1>Gestión de Procesos</h1>
    <section>
      <h2>1. ¿Qué es un Proceso?</h2>
      <p>Un proceso es un programa en ejecución. Esto implica que no solo el código del programa está en la memoria, sino también otros componentes como los datos, los registros del procesador, la pila de ejecución, el contador de programa, entre otros. Un proceso tiene un ciclo de vida que va desde su creación hasta su finalización.</p>
      <p>La gestión de procesos es un aspecto clave de un sistema operativo, encargándose de crear, programar, administrar y eliminar procesos en el sistema. Un proceso requiere recursos como CPU, memoria y dispositivos de entrada/salida.</p>
      <p>Los sistemas operativos gestionan los procesos para asegurarse de que se ejecuten de manera eficiente y justa, y para evitar que un proceso monopolice los recursos del sistema.</p>
    </section>
    <section>
      <h2>2. Ciclo de Vida de los Procesos</h2>
      <ul>
        <li><strong>Nuevo (New):</strong> Estado inicial cuando se crea el proceso. Se asignan recursos iniciales y se crea la estructura de datos del proceso.</li>
        <li><strong>Listo (Ready):</strong> El proceso espera ser asignado a la CPU. Tiene todos los recursos necesarios, pero espera turno.</li>
        <li><strong>En ejecución (Running):</strong> El proceso está usando la CPU y ejecutando instrucciones.</li>
        <li><strong>Bloqueado (Blocked):</strong> El proceso espera por algún recurso o evento, como una operación de E/S.</li>
        <li><strong>Terminado (Terminated):</strong> El proceso ha finalizado su ejecución y el sistema operativo libera sus recursos.</li>
      </ul>
    </section>
    <a class="referencia" href="https://infodigital.ciberlinea.net/sistemas/gestion-de-procesos-en-sistemas-operativos/" target="_blank">Más información</a>
    <div class="img-ciclo-proceso">
      <img src="images/ciclo_process.svg" alt="Ciclo de vida de un proceso">
    </div>
    <section>
      <h2>3. Planificación de Procesos</h2>
      <p>La planificación de procesos es el mecanismo mediante el cual el sistema operativo decide qué proceso debe ejecutarse y cuándo, buscando eficiencia, equidad y respuesta rápida.</p>
      <ul>
        <li><strong>Eficiencia:</strong> Maximizar el uso de CPU y memoria.</li>
        <li><strong>Equidad:</strong> Asignar recursos de manera justa entre procesos.</li>
        <li><strong>Reducción de la espera:</strong> Minimizar el tiempo en cola de los procesos.</li>
      </ul>
    </section>
    <section>
      <h2>4. Algoritmos de Planificación</h2>
      <ul>
        <li><strong>FCFS (First Come First Serve):</strong> Atiende los procesos en el orden de llegada.</li>
        <li><strong>SJF (Shortest Job First):</strong> Atiende primero el proceso con menor tiempo de ejecución restante.</li>
        <li><strong>Round Robin (RR):</strong> Asigna la CPU por turnos iguales a cada proceso (quantum).</li>
        <li><strong>Planificación por Prioridad:</strong> Atiende primero los procesos con mayor prioridad.</li>
        <li><strong>Planificación Multinivel:</strong> Usa varias colas de prioridad y políticas diferentes según el tipo de proceso.</li>
      </ul>
    </section>
    <a class="referencia" href="https://www.ecured.cu/Planificaci%C3%B3n_de_procesos_en_un_sistema_operativo" target="_blank">Más información</a>
    <div class="img-planificacion">
      <img src="images/planificar.jpg" alt="Planificación de procesos">
    </div>
    <section>
      <h2>5. Hilos de Ejecución</h2>
      <p>Un hilo es una unidad de ejecución dentro de un proceso. Los hilos comparten el mismo espacio de memoria y pueden ejecutarse en paralelo para mejorar el rendimiento.</p>
      <ul>
        <li><strong>Hilos de usuario:</strong> Gestionados en espacio de usuario, rápidos de crear pero menos eficientes en recursos.</li>
        <li><strong>Hilos de kernel:</strong> Gestionados por el sistema operativo, más lentos de crear pero con mayor acceso a recursos.</li>
      </ul>
      <p><strong>Modelos de hilos:</strong></p>
      <ul>
        <li>Uno a uno: Un hilo de usuario por cada hilo de kernel.</li>
        <li>Muchos a uno: Varios hilos de usuario comparten un hilo de kernel.</li>
        <li>Muchos a muchos: Varios hilos de usuario se mapean a varios hilos de kernel.</li>
      </ul>
    </section>
    <a class="referencia" href="https://adcod.com/es/que-son-los-hilos-en-el-sistema-operativo/" target="_blank">Más información</a>
    <div class="img-hilos">
    <img src="images/hilo.png" alt="Hilos de ejecución">
    </div>
  </div>
</body>
<script src="main.js"></script>
<?php include 'footer.php'; ?>
</html>