document.addEventListener('DOMContentLoaded', function() {
  // Modo oscuro
  var darkBtn = document.getElementById('darkModeToggle');
  if (darkBtn) {
    darkBtn.onclick = function() {
      document.body.classList.toggle('dark-mode');
      if(document.body.classList.contains('dark-mode')) {
        localStorage.setItem('modoOscuro', '1');
      } else {
        localStorage.removeItem('modoOscuro');
      }
    };
    // Aplica preferencia guardada
    if(localStorage.getItem('modoOscuro')) {
      document.body.classList.add('dark-mode');
    }
  }

  // Menú hamburguesa para móviles
  var menuToggle = document.getElementById('menuToggle');
  var navHorizontal = document.querySelector('.nav-horizontal');
  if(menuToggle && navHorizontal) {
    menuToggle.addEventListener('click', function(e) {
      e.stopPropagation();
      navHorizontal.classList.toggle('open');
    });

    // Cierra el menú al hacer clic fuera de él
    document.addEventListener('click', function(e) {
      if (
        navHorizontal.classList.contains('open') &&
        !navHorizontal.contains(e.target) &&
        e.target !== menuToggle &&
        !menuToggle.contains(e.target)
      ) {
        navHorizontal.classList.remove('open');
      }
    });
  }
});