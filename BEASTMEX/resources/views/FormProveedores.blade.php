@extends('layouts.plantilla')

@section('titulo','Registro Proveedores')

@section('body')
<div class="container mt-4">
    <form class="row g-3">
        <div class="col-md-6">
            <input type="text" class="form-control" placeholder="Nombre del proveedor o marca">
        </div>
        <div class="col-md-6">
            <input type="text" class="form-control" placeholder="Direccion" >
        </div>
        <div class="container mt-4">
            <div class="row">
                <div class="col-lg-6">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Producto</th>
                                <th>Cantidad</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="text" class="form-control"></td>
                                <td><input type="text" class="form-control"></td>
                                <td><input type="checkbox" name="elementos[]"></td>
                            </tr>
                            <tr>
                                <td><input type="text" class="form-control"></td>
                                <td><input type="text" class="form-control"></td>
                                <td><input type="checkbox" name="elementos[]"></td>
                            </tr>
                            <tr>
                                <td><input type="text" class="form-control"></td>
                                <td><input type="text" class="form-control"></td>
                                <td><input type="checkbox" name="elementos[]"></td>
                            </tr>
                            <tr>
                                <td><input type="text" class="form-control"></td>
                                <td><input type="text" class="form-control"></td>
                                <td><input type="checkbox" name="elementos[]"></td>
                            </tr>
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-primary"> < Regresar </button>
            <div>
                <button type="submit" class="btn btn-success">Agregar</button>
                <button type="submit" class="btn btn-danger">Cancelar</button>
            </div>
        </div>
    </form>
</div>
    
@endsection