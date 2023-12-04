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
                            'El usuario no se guardo, verifica los datos...',
                            '{{$errors->first()}}',
                            'warning'
                        )
                    </script>
                @endif
                <form method="POST" action="{{route('usuario.update',$item->id)}}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="txtNombre" placeholder="Nombre" value="{{ old('txtNombre')}}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Contraseña</label>
                        <input type="password" class="form-control" name="txtContra" placeholder="Contraseña" value="{{ old('txtContra')}}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Correo electronico</label>
                        <input type="text" class="form-control" name="txtCorreo" placeholder="Correo electronico" value="{{ old('txtCorreo')}}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Puesto</label>
                        <select class="form-select" name="txtPuesto" value="{{ old('txtPuesto')}}">
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

<div class="modal fade" id="EliUsu" tabindex="-1" aria-labelledby="EliminarUsuario" aria-hidden="true">
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
                @if (session()->has('Confirmacion'))
                    <script>
                        Swal.fire(
                        'Todo Correcto',
                        '{!! session('Confirmacion') !!}',
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
                        <input type="search" class="form-control me-2 ms-auto" style="max-width: 200px;" placeholder="Buscar por nombre" id="searchInput">
                        <button class="btn btn-outline-secondary" type="button" id="searchButton">Buscar</button>
                    </div>
                    <div class="table table-bordered table-striped">
                        <div id="searchResults"></div>
                    </div>

                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                    <script>
                        $(document).ready(function () {
                            $('#searchButton').on('click', function () {
                                var searchTerm = $('#searchInput').val();

                                if (searchTerm.trim() === '') {
                                    $('#searchResults').html('Por favor, ingresa un término de búsqueda');
                                } else {
                                    $.ajax({
                                        type: 'GET',
                                        url: '{{ route('buscaru') }}',
                                        data: {
                                            searchTerm: searchTerm
                                        },
                                        success: function (response) {
                                            $('#searchResults').empty();

                                            if (response.length > 0) {
                                                var resultsHTML = '<ul>';
                                                response.forEach(function (result) {
                                                    resultsHTML += '<li><strong>Nombre:</strong> ' + result.nombre +
                                                        ', <strong>Correo:</strong> ' + result.correo +
                                                        ', <strong>Puesto:</strong> ' + result.puesto + 
                                                        ', <strong>Contraseña:</strong> ' + result.contraseña +'</li>';
                                                });
                                                resultsHTML += '</ul>';
                                                $('#searchResults').html(resultsHTML);
                                            } else {
                                                $('#searchResults').html('No se encontraron resultados');
                                            }
                                        },
                                        error: function (error) {
                                            console.error('Error en la búsqueda:', error);
                                        }
                                    });
                                }
                            });
                        });



                    </script>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Nombre completo</th>
                                <th>Contraseña</th>
                                <th>Correo Electronico</th>
                                <th>Puesto</th>
                                <th></th>
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

                                                <label class="form-label">Cambiar Contraseña:</label>
                                                <div class="d-flex">
                                                    <button type="button" class="btn btn-warning me-2" id="btnChangePassword">Cambiar</button>
                                                    <button type="button" class="btn btn-success" id="btnSamePassword">Misma contraseña</button>
                                                </div>
                                                <div class="mb-3" id="passwordFields" style="display: none;">
                                                    <label class="form-label">Contraseña:</label>
                                                    <input type="password" pattern=".{8,}" class="form-control" name="txtContra" placeholder="8 caracteres mínimo (Recomendado)">
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
            <a class="btn btn-warning" href="/InicioGerente">Regresar a la Página Principal</a>
            <div>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#AgUsu">Agregar</button>
          </div>
        </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const btnChangePassword = document.getElementById("btnChangePassword");
        const btnSamePassword = document.getElementById("btnSamePassword");
        const passwordFields = document.getElementById("passwordFields");
        const passwordInput = document.querySelector("[name=txtContra]");

        btnChangePassword.addEventListener("click", function () {
            passwordFields.style.display = "block";
            btnChangePassword.classList.remove("btn-warning");
            btnChangePassword.classList.add("btn-success");
            btnSamePassword.classList.remove("btn-success");
            btnSamePassword.classList.add("btn-warning");

            // Limpiar el valor del campo de contraseña
            passwordInput.value = "";
        });

        btnSamePassword.addEventListener("click", function () {
            passwordFields.style.display = "none";
            btnSamePassword.classList.remove("btn-warning");
            btnSamePassword.classList.add("btn-success");
            btnChangePassword.classList.remove("btn-success");
            btnChangePassword.classList.add("btn-warning");

            // Restaurar valor original del campo de contraseña sin encriptar
            passwordInput.value = "{{ $item->contraseñanoencrip }}";
        });
    });
</script>

    
@endsection