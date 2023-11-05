@extends('layouts.plantilla')

@section('titulo','Registro Proveedores')

@section('body')
<div class="modal fade" id="ModificarInfo" tabindex="-1" aria-labelledby="ModificarInformacion" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editarModalLabel">Editar Información</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @if (session()->has('confirmacion4'))
                    <script>
                        Swal.fire(
                        'Todo Correcto',
                        '{!! session('confirmacion4') !!}',
                        'success'
                        ) 
                    </script>
                @endif

                @if($errors->any())
                    <script>
                        Swal.fire(
                            'Falta diligenciar correctamente algunos campos...',
                            '{{$errors->first()}}',
                            'warning'
                        )
                    </script>
                @endif
                <form method="POST" action="/ModificarProv">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Proveedor</label>
                        <input type="text" class="form-control" name="txtProv" placeholder="Nombre" value="{{ old('txtProv')}}">
                        <p class="fw-bold text-danger"> {{ $errors->first('txtProv') }} </p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Direccion</label>
                        <input type="password" class="form-control" name="txtDir" placeholder="Contraseña" value="{{ old('txtDir')}}">
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

<div class="modal fade" id="EliUsu" tabindex="-1" aria-labelledby="EliminarUsuario" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editarModalLabel">Eliminar Uusario</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @if (session()->has('confirmacion3'))
                    <script>
                    Swal.fire(
                    'Todo Correcto',
                    '{!! session('confirmacion3') !!}',
                    'success'
                    ) 
                    </script>
                @endif
                <form method="POST" action="/EliminarUsu" class="text-center">
                    @csrf
                    <label>¿Seguro que desea eliminar al usuario? </label>
                    <div class="modal-footer mt-4">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Eliminar Usuario</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="AgUsu" tabindex="-1" aria-labelledby="AgregarUsuario" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editarModalLabel">Agregar Usuario</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @if (session()->has('confirmacion2'))
                    <script>
                        Swal.fire(
                        'Todo Correcto',
                        '{!! session('confirmacion2') !!}',
                        'success'
                        ) 
                    </script>
                @endif

                @if($errors->any())
                    <script>
                        Swal.fire(
                            'Falta diligenciar correctamente algunos campos...',
                            '{{$errors->first()}}',
                            'warning'
                        )
                    </script>
                @endif
                <form method="POST" action="/AgregarUsu">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="txtNom" placeholder="Nombre" value="{{ old('txtNom')}}">
                        <p class="fw-bold text-danger"> {{ $errors->first('txtNom') }} </p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Contraseña</label>
                        <input type="password" class="form-control" name="txtCon" placeholder="Contraseña" value="{{ old('txtCon')}}">
                        <p class="fw-bold text-danger"> {{ $errors->first('txtCon') }} </p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Correo electronico</label>
                        <input type="text" class="form-control" name="txtCor" placeholder="Correo electronico" value="{{ old('txtCor')}}">
                        <p class="fw-bold text-danger"> {{ $errors->first('txtCor') }} </p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Puesto</label>
                        <select class="form-select" name="txtPue" value="{{ old('txtPue')}}">
                            <option value="Gerente">Gerente</option>
                            <option value="Almacen">Almacen</option>
                            <option value="Ventas">Ventas</option>
                            <option value="Compras">Compras</option>
                        </select>
                        <p class="fw-bold text-danger"> {{ $errors->first('txtPue') }} </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Registrar Usuario</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="container mt-4">
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
            <a class="btn btn-secondary" href="#"> < Regresar </a>
            <div>
                <button class="btn btn-danger">Descargar PDF</button>
                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ModificarInfo">Agregar</button>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#EliUsu">Modificar</button>
                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#EliUsu">Eliminar</button>
            </div>
        </div>
</div>
    
@endsection