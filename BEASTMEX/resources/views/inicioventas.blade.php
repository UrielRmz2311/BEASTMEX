@extends('layouts.plantilla')

@section('titulo','Inicio Ventas')

@section('body')

  <h1 class="display-1 fw-bold text-center text-warning mt-2">INICIO VENTAS</h1>

  <div class="container mt-5">
    <script>
      Swal.fire({
        position: 'top-center',
        icon: 'success',
        title: 'Bienvenido !!!',
        showConfirmButton: false,
        timer: 1500
      })
    </script>
    <div class="row justify-content-center">

      <!-- Primera Card -->
      <div class="col-md-5">
        <div class="card text-bg-dark">
          <img src="{{ asset('images/consulta.jpg') }}" height="230" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title text-center">Consultar Productos</h5>
            <a href="/CPA" class="btn btn-warning fw-bold" style="display: block; margin: 0 auto;">Entrar</a>
          </div>
        </div>
      </div>

      <!-- Segunda Card -->
      <div class="col-md-5">
        <div class="card text-bg-dark">
          <img src="{{ asset('images/factura.png') }}" height="230" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title text-center">Generador de Ticket</h5>
            <a href="tickven" class="btn btn-warning fw-bold" style="display: block; margin: 0 auto;">Entrar</a>
          </div>
        </div>
      </div>

      <!-- Tercera Card -->
      <div class="col-md-5">
        <div class="card mt-2 text-bg-dark">
          <img src="{{ asset('images/ventas.jpg') }}" height="230" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title text-center">Cálculo de Ganancias</h5>
            <a href="/gananven" class="btn btn-warning fw-bold" style="display: block; margin: 0 auto;">Entrar</a>
          </div>
        </div>
      </div>

      <!-- Cuarta Card -->
      <div class="col-md-5">
        <div class="card mt-2 text-bg-dark">
          <img src="{{ asset('images/consultaf.png') }}" height="230" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title text-center">Consultar Tickets</h5>
            <a href="/conticks" class="btn btn-warning fw-bold" style="display: block; margin: 0 auto;">Entrar</a>
          </div>
        </div>
      </div>

    </div>
  </div>

@endsection