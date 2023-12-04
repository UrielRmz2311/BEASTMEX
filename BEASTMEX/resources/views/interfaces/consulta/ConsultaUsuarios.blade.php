@extends('layouts.plantilla')

@section('titulo','Consulta de Usuarios')

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
<div class="modal fade" id="AgUsu" tabindex="-1" aria-labelledby="AgregarUsuario" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editarModalLabel">Agregar Usuario</h5>
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
                            'El usuario no se guardo, verifica los datos...',
                            '{{$errors->first()}}',
                            'warning'
                        )
                    </script>
                @endif
                <form method="POST" action="{{ route('usuario.store')}}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="txtNom" placeholder="Nombre" value="{{ old('txtNom')}}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Contraseña</label>
                        <input type="password" class="form-control" name="txtCon" placeholder="Contraseña" value="{{ old('txtCon')}}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Correo electronico</label>
                        <input type="text" class="form-control" name="txtCor" placeholder="Correo electronico" value="{{ old('txtCor')}}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Puesto</label>
                        <select class="form-select" name="txtPue" value="{{ old('txtPue')}}">
                            <option value="Gerente">Gerente</option>
                            <option value="Almacen">Almacen</option>
                            <option value="Ventas">Ventas</option>
                            <option value="Compras">Compras</option>
                        </select>
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

<div class="contenedor mt-4">
    <h2>Consultar Usuarios</h2>
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
                            @foreach ($allusers as $item)                           
                            <div class="modal fade" id="update{{$item->id}}" tabindex="-1" aria-labelledby="ModificarInformacion" aria-hidden="true">
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
                                                        'El usuario no se guardo, verifica los datos...',
                                                        '{{$errors->first()}}',
                                                        'warning'
                                                    )
                                                </script>
                                            @endif
                                            <form method="POST" action="{{route('usuario.update',$item->id)}}">
                                                @csrf
                                                @method('PUT')
                                                <div class="mb-3">
                                                    <label class="form-label">Nombre</label>
                                                    <input type="text" class="form-control" name="txtNombre" placeholder="Nombre" value="{{$item->nombre}}">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Contraseña</label>
                                                    <input type="password" class="form-control" name="txtContra" placeholder="Contraseña" value="{{$item->contraseña}}">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Correo electronico</label>
                                                    <input type="text" class="form-control" name="txtCorreo" placeholder="Correo electronico" value="{{$item->correo}}">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Puesto</label>
                                                    <select class="form-select" name="txtPuesto" value="{{$item->puesto}}">
                                                        <option value="Gerente">Gerente</option>
                                                        <option value="Almacen">Almacen</option>
                                                        <option value="Ventas">Ventas</option>
                                                        <option value="Compras">Compras</option>
                                                    </select>
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
                            
                            <div class="modal fade" id="destroy{{$item->id}}" tabindex="-1" aria-labelledby="EliminarUsuario" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editarModalLabel">Eliminar Usuario</h5>
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
                                            <form method="POST" action="{{route('usuario.destroy',$item->id)}}" class="text-center">
                                                @csrf
                                                @method('DELETE')
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
                            <tr>
                                <td>{{$item->nombre}}</td>
                                <td>{{$item->contraseña}}</td>
                                <td>{{$item->correo}}</td>
                                <td>{{$item->puesto}}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-list-stars"></i> Opciones
                                        </button>
                                        <ul class="dropdown-menu">
                                            <button type="button" class="btn btn-warning m-1" data-bs-toggle="modal" data-bs-target="#update{{$item->id}}">
                                                <i class="bi bi-pencil-square"></i> - Editar 
                                              </button>
                                            <button type="button" class="btn btn-danger m-1" data-bs-toggle="modal" data-bs-target="#destroy{{$item->id}}">
                                                <i class="bi bi-trash"></i> - Borrar 
                                              </button>
                                        </ul>
                                      </div>    
                                     
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-between">
            <a class="btn btn-warning" href="/gerente">Regresar a la Página Principal</a>
            <div>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#AgUsu">Agregar</button>
            </div>
        </div>
</div>
    
@endsection