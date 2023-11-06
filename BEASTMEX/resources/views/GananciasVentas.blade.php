@extends('layouts.plantilla')

@section('titulo','Consulta de ticket')

@section('body')

<h1 class="display-1 fw-bold text-center text-warning mt-2">CÁLCULO DE GANANCIAS</h1>

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
            <a class="btn btn-secondary" href="/ventas"> < Regresar </a>
        </div>
</div>

    
@endsection