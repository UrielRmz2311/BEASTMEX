@extends('layouts.plantilla')

@section('titulo','Inicio Gerente')

@section('body')

  <h1 class="display-1 fw-bold text-center text-warning mt-2">INICIO GERENTE</h1>

  <div class="container mt-5">
    <script>
      Swal.fire({
        position: 'top-center',
        icon: 'success',
        title: 'Bienvenido Sr.Gerente',
        showConfirmButton: false,
        timer: 1500
      })
    </script>
    <div class="row justify-content-center">
      <!-- Primera Card -->
      <div class="col-md-4">
        <div class="card text-bg-dark">
          <img src="{{ asset('images/usuarios.png') }}" height="200" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title text-center">Registrar Usuario</h5>
            <a href="/RegistroUsu" class="btn btn-warning fw-bold" style="display: block; margin: 0 auto;">Entrar</a>
          </div>
        </div>
      </div>

      <!-- Segunda Card -->
      <div class="col-md-4">
        <div class="card text-bg-dark">
          <img src="{{ asset('images/consulta.png') }}" height="200" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title text-center">Consultar Usuarios</h5>
            <a href="/conusu" class="btn btn-warning fw-bold" style="display: block; margin: 0 auto;">Entrar</a>
          </div>
        </div>
      </div>

      <!-- Tercera Card -->
      <div class="col-md-4">
        <div class="card text-bg-dark">
          <img src="{{ asset('images/almacen.png') }}" height="200" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title text-center">Almacén</h5>
            <a href="/almacen" class="btn btn-warning fw-bold" style="display: block; margin: 0 auto;">Entrar</a>
          </div>
        </div>
      </div>

      <!-- Cuarta Card -->
      <div class="col-md-4">
        <div class="card mt-5 text-bg-dark">
          <img src="{{ asset('images/reportes.jpg') }}" height="200" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title text-center">Reportes</h5>
            <a href="/RCVG" class="btn btn-warning fw-bold" style="display: block; margin: 0 auto;">Entrar</a>
          </div>
        </div>
      </div>

      <!-- Quinta Card -->
      <div class="col-md-4">
        <div class="card mt-5 text-bg-dark">
          <img src="{{ asset('images/producto.png') }}" height="200" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title text-center">Análisis de Ventas</h5>
            <a href="/CVG" class="btn btn-warning fw-bold" style="display: block; margin: 0 auto;">Entrar</a>
          </div>
        </div>
      </div>

      <!-- Sexta Card -->
      <div class="col-md-4">
        <div class="card mt-5 text-bg-dark">
          <img src="{{ asset('images/compras.png') }}" height="200" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title text-center">Análisis de Compras</h5>
            <a href="/CCG" class="btn btn-warning fw-bold" style="display: block; margin: 0 auto;">Entrar</a>
          </div>
        </div>
      </div>
    </div>

  </div>

@endsection