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
    <h2>Cálculo de Ganancias</h2>

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
                                <th>Venta Generada</th>
                                <th>Ganancia</th>
                                <th>Calculo de venta</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td class="text-center"><button class="btn btn-success">Calculo</button></td>
                            </tr>
                            <tr>
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
            <a class="btn btn-warning" href="/ventas">Regresar a la Página Principal</a>
        </div>
</div>

    
@endsection