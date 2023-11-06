@extends('layouts.plantilla')

@section('titulo','Tickets-Venta')

@section('body')

<h1 class="display-1 fw-bold text-center text-warning mt-2">GENERAR TICKET</h1>

<div class="container mt-4">
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
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>                    
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-between">
            <a class="btn btn-secondary" href="/ventas"> < Regresar </a>
            <div>
                <button class="btn btn-danger">Descargar PDF</button>                
            </div>
        </div>
</div>

    
@endsection