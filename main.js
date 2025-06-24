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

  // Menú hamburguesa solo para móvil
  var menuToggle = document.getElementById('menuToggle');
  var navMobile = document.getElementById('navMobile');
  if(menuToggle && navMobile) {
    menuToggle.addEventListener('click', function(e) {
      e.stopPropagation();
      navMobile.classList.toggle('open');
    });
    // Cierra el menú al hacer clic fuera de él
    document.addEventListener('click', function(e) {
      if (
        navMobile.classList.contains('open') &&
        !navMobile.contains(e.target) &&
        e.target !== menuToggle &&
        !menuToggle.contains(e.target)
      ) {
        navMobile.classList.remove('open');
      }
    });
  }
});