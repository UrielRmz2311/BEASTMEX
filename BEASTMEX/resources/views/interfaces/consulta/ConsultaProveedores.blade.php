@extends('layouts.plantilla')

@section('titulo','Consulta Proveedores')

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


<h1 class="display-1 fw-bold text-center text-warning mt-2">CONSULTA PROVEEDOR</h1>
<div class="modal fade" id="AgProv" tabindex="-1" aria-labelledby="AgregarProveedor" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editarModalLabel">Agregar Proveedor</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @if (session()->has('confirmacion'))
                    <script>
                        Swal.fire(
                        'Todo Correcto',
                        '{!! session('confirmacion') !!}',
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
                <form method="POST" action="{{ route('proveedor.store')}}">
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
    <h2>Consultar Proveedor</h2>
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
                                        url: '{{ route('buscarpr') }}',
                                        data: {
                                            searchTerm: searchTerm
                                        },
                                        success: function (response) {
                                            $('#searchResults').empty();

                                            if (response.length > 0) {
                                                var resultsHTML = '<ul>';
                                                response.forEach(function (result) {
                                                    resultsHTML += '<li><strong>Proveedor:</strong> ' + result.nombre +
                                                        ', <strong>Direccion:</strong> ' + result.direccion +'</li>';
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
                                <th>Proveedor</th>
                                <th>Direccion</th>

                                <th></th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($allproveers as $item)  
                            <div class="modal fade" id="update{{$item->id}}" tabindex="-1" aria-labelledby="Modificarproveedor" aria-hidden="true">
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
                                            <form method="POST" action="{{route('proveedor.update',$item->id)}}">
                                                @csrf
                                                @method('PUT')
                                                <div class="mb-3">
                                                    <label class="form-label">Proveedor</label>
                                                    <input type="text" class="form-control" name="txtProv" placeholder="Proveedor o marca" value="{{$item->nombre}}">
                                                    <p class="fw-bold text-danger"> {{ $errors->first('txtProv') }} </p>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Direccion</label>
                                                    <input type="text" class="form-control" name="txtDir" placeholder="Direccion" value="{{$item->direccion}}">
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
                            
                            <div class="modal fade" id="destroy{{$item->id}}" tabindex="-1" aria-labelledby="EliminarProveedor" aria-hidden="true">
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

                                            @if (session()->has('confirmacion66'))
                                                <script>
                                                Swal.fire(
                                                'Todo Correcto',
                                                '{!! session('confirmacion66') !!}',

                                                'success'
                                                ) 
                                                </script>
                                            @endif
                                            <form method="POST" action="{{route('proveedor.destroy',$item->id)}}" class="text-center">
                                                @csrf
                                                @method('DELETE')
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
                            
                            <tr>
                                <td>{{$item->nombre}}</td>
                                <td>{{$item->direccion}}</td>
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
            <a class="btn btn-warning" href="/InicioCompras">Regresar a la Página Principal</a>
            <div>
                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#AgProv">Agregar</button>
            </div>
        </div>
</div>

    
@endsection