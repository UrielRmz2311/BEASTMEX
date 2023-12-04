@extends('layouts.plantilla')

@section('titulo','Inicio Almacén')

@section('body')

  <h1 class="display-1 fw-bold text-center text-warning mt-5">INICIO ALMACÉN</h1>

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
          <img src="{{ asset('images/productos.jpg') }}" height="300" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title text-center">Registro de Producto</h5>
            <a href="/RegistroAlmacen" class="btn btn-warning fw-bold" style="display: block; margin: 0 auto;">Entrar</a>
          </div>
        </div>
      </div>

      <!-- Segunda Card -->
      <div class="col-md-5">
        <div class="card text-bg-dark">
          <img src="{{ asset('images/consulta.jpg') }}" height="300" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title text-center">Consultar Productos</h5>
            <a href="productos" class="btn btn-warning fw-bold" style="display: block; margin: 0 auto;">Entrar</a>
          </div>
        </div>
      </div>

    </div>
  </div>

@endsection