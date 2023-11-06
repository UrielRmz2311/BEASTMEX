@extends('layouts.plantilla')
@section('titulo','Gerencia-Reportes')
@section('body')

<style>
    body {
background-image:url('../images/fondo6.jpg') ;
background-position: center;
background-repeat:no-repeat;
background-attachment:fixed;
background-size:cover;
background-color:cornflowerblue;
}

.contenedor {
    max-width: 1300px;
    margin: 20px auto;
    background-color: rgba(0, 0, 0, 0.7);
    padding: 20px;
    border-radius: 8px;
}
h2{
    font-size: 80px;
    color: rgb(255, 255, 255);
    text-align: center
}
h5{
    text-align: center;
    font-family:'Times New Roman', Times, serif;
    font-size: 25px;
}
</style>

<div class="row">
<div class="contenedor col-sm-6">
    <h2>Reportes de ventas por Gerencia</h2>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Venta</th>
                <th>Ticket</th>
                <th>Precio Total</th>
            </tr>
        </thead>
    </table>
</div>
<div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
        <h5 class="card-title">Ventas</h5>
      <div class="align-center">
        <img src="{{ asset('images/grafica1.png') }}" class="img-fluid rounded-start">
      </div>
    </div>
</div>
    <div class="contenedor col-sm-6">
        <h2>Reportes de compras por Gerencia</h2>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Precio Total</th>
                <th>No. de Serie</th>
            </tr>
        </thead>
    </table>
    </div>
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <h5 class="card-title">Compras</h5>
          <div class="align-center">
            <img src="{{ asset('images/grafica1.png') }}" class="img-fluid rounded-start">
          </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="d-flex justify-content-start mb-3">
            <a href="{{ route('Login') }}" class="btn btn-warning">Regresar a la Página Principal</a>
            <div class="container mt-5">
            </div>
                <div class="d-flex justify-content-end mb-3">
                    <a href="{{ route('Login') }}" class="btn btn-danger">Descargar PDF</a>
                </div>
        </div>
    </div>
</div>

@endsection