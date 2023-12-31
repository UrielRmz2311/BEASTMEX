@extends('layouts.plantilla')

@section('titulo','Tickets-Venta')

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
    <h2>Generar Ticket</h2>

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
                                <th>Fecha</th>
                                <th>Datos del cliente</th>
                                <th>Producto</th>
                                <th>Marca</th>
                                <th>Cantidad</th>
                                <th>Precio</th>
                                <th>Total de compra</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($alltickets as $item)   
                            <tr>
                                <td>{{$item->fechaingreso}}</td>
                                <td>{{$item->nombrecliente}}</td>
                                <td>{{$item->nombrepro}}</td>
                                <td>{{$item->marca}}</td>
                                <td>{{$item->cantidad}}</td>
                                <td>{{$item->precio}}</td>
                                <td>{{$item->totaldecompra}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>                    
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-between">
            <a class="btn btn-warning" href="/InicioVentas">Regresar a la Página Principal</a>
            <div>
                <button class="btn btn-danger">Descargar PDF</button>                
            </div>
        </div>
</div>

    
@endsection