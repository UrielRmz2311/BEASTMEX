@extends('layouts.plantilla')

@section('titulo','Consulta de ticket')

@section('body')

<style>
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
</style>

<div class="contenedor mt-4">
    <h2>Consultar Producto</h2>
        <div class="container mt-4">
            <div class="row">
                <div class="col-lg-12">
                    <div class="input-group mb-3">
                        <input type="search" class="form-control me-2 ms-auto" style="max-width: 200px;" placeholder="Buscador">
                        <button class="btn btn-outline-secondary" type="button">Buscar</button>
                    </div>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Producto</th>
                                <th>Ticket</th>
                                <th>Cantidad</th>
                                <th>Total de venta</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($allventas as $item)
                            <tr>
                                <td>{{$item->nombrepro}}</td>
                                <td>{{$item->ticket}}</td>
                                <td>{{$item->cantidad}}</td>
                                <td>{{$item->totaldeventa}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>                    
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-between">
            <a class="btn btn-warning" href="/ventas">Regresar a la Página Principal</a>
        </div>
</div>

    
@endsection1