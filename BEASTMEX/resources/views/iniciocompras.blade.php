@extends('layouts.plantilla')

@section('titulo','Inicio Compras')

@section('body')

  <h1 class="display-1 fw-bold text-center text-warning">INICIO COMPRAS</h1>

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
          <img src="{{ asset('images/consulta.jpg') }}" height="225" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title text-center">Consulta de Productos</h5>
            <a href="/CPC" class="btn btn-warning fw-bold" style="display: block; margin: 0 auto;">Entrar</a>
          </div>
        </div>
      </div>

      <!-- Segunda Card -->
      <div class="col-md-5">
        <div class="card text-bg-dark">
          <img src="{{ asset('images/proveedor.jpg') }}" height="225" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title text-center">Registro de Proveedor</h5>
            <a href="/prov" class="btn btn-warning fw-bold" style="display: block; margin: 0 auto;">Entrar</a>
          </div>
        </div>
      </div>

      <!-- Tercera Card -->
      <div class="col-md-5">
        <div class="card text-bg-dark mt-4">
          <img src="{{ asset('images/consultap.jpg') }}" height="225" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title text-center">Consulta de Proveedor</h5>
            <a href="/conprov" class="btn btn-warning fw-bold" style="display: block; margin: 0 auto;">Entrar</a>
          </div>
        </div>
      </div>

    </div>
  </div>

@endsection