@extends('layouts.plantilla')
@section('titulo','Registro de Usuarios')
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
text-align: center;
}
.d-flex{
max-width: 500px;
justify-content: end;
}
</style>

<div class="contenedor mt-5">
    <h2>Consulta de Productos por Compras</h2> 
        <form class="d-flex mb-3 " role="search" >
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Productos</th>
                    <th>Cantidad</th>
                    <th>Stock</th>
                </tr>
            </thead>
        </table>
        <div class="container mt-5">
            <div class="d-flex justify-content-start mb-3">
                <a href="{{ route('Login') }}" class="btn btn-warning">Regresar a la Página Principal</a>
            </div>
        </div>
</div>


@endsection

