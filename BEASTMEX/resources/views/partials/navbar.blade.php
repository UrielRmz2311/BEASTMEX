<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">{{-- CSS estilos --}}
<nav class="navbar bg-dark bg-body-tertiary" data-bs-theme="dark">
  <div class="container">

    <a class="navbar-brand" href="#">
      <img src="{{ asset('images/logocompu.png') }}" width="60" height="40" class="d-inline-block align-text-top">
      <img src="{{ asset('images/letras.png') }}" width="200" height="40">
    </a>

    <div class="navbar-text mx-auto text-warning fw-bold">
      <span id="clock"></span>
    </div>

    <div class="navbar-text text-right text-warning fw-bold margin-right-10">
      <?php echo date("d/m/Y"); ?>
    </div>

    <a class="cerrarsesion" href="/">
      <img src="{{ asset('images/boton.png') }}">
    </a>
    
  </div>
</nav>
  
  <script>
    // Función para actualizar el reloj cada segundo
    function updateClock() {
      var now = new Date();
      var hours = now.getHours();
      var minutes = now.getMinutes();
      var seconds = now.getSeconds();
      // Asegúrate de que los números siempre tengan dos dígitos
      hours = hours.toString().padStart(2, '0');
      minutes = minutes.toString().padStart(2, '0');
      seconds = seconds.toString().padStart(2, '0');
      // Actualiza el elemento con el id "clock"
      document.getElementById('clock').textContent = hours + ':' + minutes + ':' + seconds;
    }
  
    // Llama a la función para actualizar el reloj cada segundo
    setInterval(updateClock, 1000);
  </script>
  
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      var cerrarSesionBtn = document.querySelector('.cerrarsesion');
      cerrarSesionBtn.addEventListener('click', function(event) {
        event.preventDefault();
        Swal.fire({
          title: '¿Seguro que quieres cerrar sesión?',
          icon: 'question',
          iconHtml: '?',
          confirmButtonText: 'Sí, cerrar',
          cancelButtonText: 'No, regresar',
          showCancelButton: true,
          showCloseButton: true
        }).then((result) => {
          // Si el usuario hace clic en "Sí, cerrar", redirige a la página principal
          if (result.isConfirmed) {
            window.location.href = cerrarSesionBtn.href;
          }
        });
      });
    });
  </script>
