@extends('layouts.plantilla')
@section('titulo','Olvide mi Contraseña')
@section('body')

<style>
    body {
    background-image:url('../images/fondo1.jpg') ;
    background-position: center;
    background-repeat:no-repeat;
    background-attachment:fixed;
    background-size:cover;
    background-color:cornflowerblue;
}

    .card {
        max-width: 500px;
        margin: 100px auto;
        background-color: rgb(74, 90, 141);
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        text-align: center;
        color: antiquewhite;
        font-size: 30px
}
</style>
<div class="card">
        <div class="card-header">
          AVISO
        </div>
        <div class="card-body">
          <p class="card-text">Favor de pasar con tu gerente para que te dé una contraseña nueva</p>
        </div>
    <div class="buttons">
        <a href="{{ route('Login') }}" class="btn btn-warning">OK</a>
        <a href="{{ route('Login') }}" class="btn btn-danger">Cancelar</a>
    </div>
    <a href="{{ route('Login') }}" class="btn btn-warning">Regresar a la Página Principal</a>
</div>
@endsection