@extends('layouts.plantilla')

@section('titulo','Consultar orden de compra')

@section('body')

<style>
    .contenedor {
    max-width: 1300px;
    margin: 20px auto;
    background-color: rgba(0, 0, 0, 0.7);
    padding: 20px;
    border-radius: 8px;
}
</style>

<h1 class="display-1 fw-bold text-center text-warning mt-2">CONSULTA PROVEEDOR</h1>

<div class="modal fade" id="Modificarprov" tabindex="-1" aria-labelledby="Modificarproveedor" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editarModalLabel">Editar Información</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @if (session()->has('confirmacion5'))
                    <script>
                        Swal.fire(
                        'Todo Correcto',
                        '{!! session('confirmacion5') !!}',
                        'success'
                        ) 
                    </script>
                @endif

                @if($errors->any())
                    <script>
                        Swal.fire(
                            'El proveedor no se guardo, revisa los datos...',
                            '{{$errors->first()}}',
                            'warning'
                        )
                    </script>
                @endif
                <form method="POST" action="/ModificarProv">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Proveedor</label>
                        <input type="text" class="form-control" name="txtProv" placeholder="Proveedor o marca" value="{{ old('txtProv')}}">
                        <p class="fw-bold text-danger"> {{ $errors->first('txtProv') }} </p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Direccion</label>
                        <input type="text" class="form-control" name="txtDir" placeholder="Direccion" value="{{ old('txtDir')}}">
                        <p class="fw-bold text-danger"> {{ $errors->first('txtDir') }} </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="EliProv" tabindex="-1" aria-labelledby="EliminarProveedor" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editarModalLabel">Eliminar Proveedor</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @if (session()->has('confirmacion6'))
                    <script>
                    Swal.fire(
                    'Todo Correcto',
                    '{!! session('confirmacion6') !!}',
                    'success'
                    ) 
                    </script>
                @endif
                <form method="POST" action="/EliminarProv" class="text-center">
                    @csrf
                    <label>¿Seguro que desea eliminar al proveedor? </label>
                    <div class="modal-footer mt-4">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Eliminar Proveedor</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="AgProv" tabindex="-1" aria-labelledby="AgregarProveedor" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editarModalLabel">Agregar Proveedor</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @if (session()->has('confirmacion7'))
                    <script>
                        Swal.fire(
                        'Todo Correcto',
                        '{!! session('confirmacion7') !!}',
                        'success'
                        ) 
                    </script>
                @endif

                @if($errors->any())
                    <script>
                        Swal.fire(
                            'El proveedor no se guardo, verifica los datos...',
                            '{{$errors->first()}}',
                            'warning'
                        )
                    </script>
                @endif
                <form method="POST" action="/AgregarProv">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Proveedor</label>
                        <input type="text" class="form-control" name="txtProvee" placeholder="Proveedor o marca" value="{{ old('txtProvee')}}">
                        <p class="fw-bold text-danger"> {{ $errors->first('txtProvee') }} </p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Direccion</label>
                        <input type="text" class="form-control" name="txtDirec" placeholder="Direccion" value="{{ old('txtDirec')}}">
                        <p class="fw-bold text-danger"> {{ $errors->first('txtDirec') }} </p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Producto</label>
                        <input type="text" class="form-control" name="txtProduc" placeholder="Producto" value="{{ old('txtProduc')}}">
                        <p class="fw-bold text-danger"> {{ $errors->first('txtProduc') }} </p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Cantidad</label>
                        <input type="number" class="form-control" name="txtCant" placeholder="Cantidad" value="{{ old('txtCant')}}">
                        <p class="fw-bold text-danger"> {{ $errors->first('txtCant') }} </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Registrar Proveedor</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="contenedor mt-4">
        <div class="container mt-4">
            <div class="row">
                <div class="col-lg-12">
                    <div class="input-group mb-3">
                        <input type="search" class="form-control me-2 ms-auto" style="max-width: 200px;" placeholder="Buscar por nombre">
                        <button class="btn btn-outline-secondary" type="button">Buscar</button>
                    </div>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Proveedor</th>
                                <th>Direccion</th>
                                <th>Productos</th>
                                <th>Cantidad</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
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
                            </tr>
                        </tbody>
                    </table>                    
                </div>
            </div>
        </div>
        <div class="input-group mb-3">
            <button class="btn btn-secondary me-2 ms-auto" type="button">Enviar a email</button>
        </div>
        <div class="d-flex justify-content-between">
            <a class="btn btn-warning" href="/compras">Regresar a la Página Principal</a>
            <div>
                <button class="btn btn-danger">Descargar PDF</button>                
                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#AgProv">Agregar</button>
                <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#Modificarprov">Modificar</button>
                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#EliProv">Eliminar</button>
            </div>
        </div>
</div>

    
@endsection
