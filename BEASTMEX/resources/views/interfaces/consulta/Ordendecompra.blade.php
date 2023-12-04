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
h2{
        font-size: 80px;
        color: rgb(255, 255, 255);
        text-align: center;
    }
</style>





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
    <h2>Ordenes de compra</h2>
        <div class="container mt-4">
            <div class="row">
                <div class="col-lg-12">
                    <div class="input-group mb-3">
                        <input type="search" class="form-control me-2 ms-auto" style="max-width: 250px;" placeholder="Buscar por nombre de producto" id="searchInput">
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
                                        url: '{{ route('buscarp') }}',
                                        data: {
                                            searchTerm: searchTerm
                                        },
                                        success: function (response) {
                                            $('#searchResults').empty();

                                            if (response.length > 0) {
                                                var resultsHTML = '<ul>';
                                                response.forEach(function (result) {
                                                    resultsHTML += '<li><strong>Producto:</strong> ' + result.producto +
                                                        ', <strong>Cantidad:</strong> ' + result.cantidad +
                                                        ', <strong>Proveedor:</strong> ' + result.proveedor + '</li>';
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
                                <th>Productos</th>
                                <th>Cantidad</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($allorders as $proveedor => $ordenes)
                            <div class="modal fade" id="update{{$ordenes->first()->id}}" tabindex="-1" aria-labelledby="Modificarproveedor" aria-hidden="true">
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
                                            <form method="POST" action="{{route('ordendecompra.update',$ordenes->first()->id)}}">
                                                @csrf
                                                @method('PUT')
                                                <div class="mb-3">
                                                    <label class="form-label">Proveedor</label>
                                                    <input type="text" class="form-control" name="txtProveedor" placeholder="Proveedor o marca" value="{{ $ordenes->first()->proveedor }}">
                                                    <p class="fw-bold text-danger"> {{ $errors->first('txtProv') }} </p>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Direccion</label>
                                                    <input type="text" class="form-control" name="txtDireccion" placeholder="Direccion" value="{{ $ordenes->first()->direccion_proveedor }}">
                                                    <p class="fw-bold text-danger"> {{ $errors->first('txtDir') }} </p>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Productos y Cantidades</label>
                                                    @foreach($ordenes as $orden)
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <input type="text" class="form-control" name="txtProducto[]" value="{{ $orden->producto }}">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input type="text" class="form-control" name="txtCantidad[]" value="{{ $orden->cantidad }}">
                                                            </div>
                                                        </div>
                                                    @endforeach
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
                            <div class="modal fade" id="destroy{{$ordenes->first()->id}}" tabindex="-1" aria-labelledby="EliminarProveedor" aria-hidden="true">
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
                                            <form method="POST" action="{{route('ordendecompra.destroy',$ordenes->first()->id)}} class="text-center">
                                                @csrf
                                                @method('DELETE')
                                                <label>¿Seguro que desea eliminar la orden de compra? </label>
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
                                    <td>{{ $ordenes->first()->proveedor }}</td>
                                    <td>{{ $ordenes->first()->direccion_proveedor }}</td>
                                    <td>
                                        <ul>
                                            @foreach(explode(',', $ordenes->first()->producto) as $producto)
                                                <li>{{ $producto }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                    <td>
                                        <ul>
                                            @foreach(explode(',', $ordenes->first()->cantidad) as $cantidad)
                                                <li>{{ $cantidad }}</li>
                                            @endforeach
                                        </ul>
                                        
                                    </td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <button type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bi bi-list-stars"></i> Opciones
                                            </button>
                                            <ul class="dropdown-menu">
                                                <button type="button" class="btn btn-primary m-1" data-bs-toggle="modal" data-bs-target="#update{{$ordenes->first()->id}}">
                                                    <i class="bi bi-pencil-square"></i> - Editar 
                                                </button>
                                                <button type="button" class="btn btn-danger m-1" data-bs-toggle="modal" data-bs-target="#destroy{{$ordenes->first()->id}}">
                                                    <i class="bi bi-trash"></i> - Borrar 
                                                </button>
                                                <button type="button" class="btn btn-secondary m-1">
                                                    <i class="bi bi-envelope"></i> - Enviar a email 
                                                </button>
                                                <button type="button" class="btn btn-warning m-1">
                                                    <i class="bi bi-file-earmark-pdf"></i> - Descargar PDF
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
        <div class="input-group mb-3">
        </div>
        <div class="d-flex justify-content-between">
            <a class="btn btn-warning" href="/compras">Regresar a la Página Principal</a>
            <div>
                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#AgProv">Agregar</button>
            </div>
        </div>
</div>

    
@endsection
