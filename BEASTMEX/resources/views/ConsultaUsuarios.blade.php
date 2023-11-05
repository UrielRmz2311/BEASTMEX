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
                <form method="POST" action="/ModificarUsu">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="txtNombre" placeholder="Nombre" value="{{ old('txtNombre')}}">
                        <p class="fw-bold text-danger"> {{ $errors->first('txtNombre') }} </p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Contraseña</label>
                        <input type="password" class="form-control" name="txtContra" placeholder="Contraseña" value="{{ old('txtContra')}}">
                        <p class="fw-bold text-danger"> {{ $errors->first('txtContra') }} </p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Correo electronico</label>
                        <input type="text" class="form-control" name="txtCorreo" placeholder="Correo electronico" value="{{ old('txtCorreo')}}">
                        <p class="fw-bold text-danger"> {{ $errors->first('txtCorreo') }} </p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Puesto</label>
                        <select class="form-select" name="txtPuesto" value="{{ old('txtPuesto')}}">
                            <option value="Gerente">Gerente</option>
                            <option value="Almacen">Almacen</option>
                            <option value="Ventas">Ventas</option>
                            <option value="Compras">Compras</option>
                        </select>
                        <p class="fw-bold text-danger"> {{ $errors->first('txtPuesto') }} </p>
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
                                <th>Nombre completo</th>
                                <th>Contraseña</th>
                                <th>Correo Electronico</th>
                                <th>Puesto</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Jessica Alejandra Barradas Breton</td>
                                <td>12345678</td>
                                <td>Jessica.G@gmail.com</td>
                                <td>Gerente</td>
                            </tr>
                            <tr>
                                <td>Alan Uriel Ramirez Labastida</td>
                                <td>01234567</td>
                                <td>Alan.A@gmail.com</td>
                                <td>Almacen</td>
                            </tr>
                            <tr>
                                <td>Jonathan Raul Bocanegra Leyva</td>
                                <td>1783964</td>
                                <td>Jonathan.V@gmail.com</td>
                                <td>Ventas</td>
                            </tr>
                            <tr>
                                <td>Elias Mayor Carrasquero</td>
                                <td>07080912</td>
                                <td>Elias.C@gmail.com</td>
                                <td>Compras</td>
                            </tr>
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-between">
            <a class="btn btn-secondary" href="/"> < Regresar </a>
            <div>
                <a class="btn btn-success" href="/">Agregar</a>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModificarInfo">Modificar</button>

                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#EliUsu">Eliminar</a>
            </div>
        </div>
</div>
    
@endsection