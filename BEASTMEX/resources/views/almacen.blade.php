@extends('layouts.plantilla')

@section('titulo','Almacén')

@section('body')

  <h1 class="display-1 fw-bold text-center text-warning mt-5">ALMACÉN</h1>

  <div class="container mt-5">
    <a href="/gerente" class="btn btn-danger">
        <i class="bi bi-arrow-return-left"></i> Volver a Inicio
    </a>
  </div>

  <div class="container mt-5">
    <div class="row justify-content-center">
        
      <!-- Primera Card -->
      <div class="col-md-5">
        <div class="card text-bg-dark">
          <img src="{{ asset('images/productos.jpg') }}" height="300" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title text-center">Registro de Producto</h5>
            <a href="/RegistroPro" class="btn btn-warning fw-bold" style="display: block; margin: 0 auto;">Entrar</a>
          </div>
        </div>
      </div>

      <!-- Segunda Card -->
      <div class="col-md-5">
        <div class="card text-bg-dark">
          <img src="{{ asset('images/consulta.jpg') }}" height="300" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title text-center">Consultar Productos</h5>
            <a href="/CPA" class="btn btn-warning fw-bold" style="display: block; margin: 0 auto;">Entrar</a>
          </div>
        </div>
      </div>

    </div>
  </div>

@endsection