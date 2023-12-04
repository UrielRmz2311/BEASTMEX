@extends('layouts.plantilla')
@section('titulo','Almacen-Consulta de productos')
@section('body')

<style>
        body {
    background-image:url('../images/fondo1.jpg') ;
    background-position: center;
    background-repeat:no-repeat;
    background-attachment:fixed;
    background-size:cover;
    background-color:cornflowerblue;
}
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
.d-flex{
    max-width: 500px;
    justify-content: end;
}
</style>

<div class="contenedor mt-5">
<h2>Consulta de Productos por Almacen</h2> 
    <form class="d-flex mb-3 " role="search" >
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>

    <table class="table">
        <thead>
            <tr>
                <th>NO. de Serie</th>
                <th>Marca</th>
                <th>Cantidad</th>
                <th>Costo de Compra</th>
                <th>Precio de Venta</th>
                <th>Fecha de Ingreso</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($allProduct as $item)
        <div class="modal" id="update{{$item->id}}" aria-labelledby="modificarModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title fs-5" id="modificarModal">Modificar un producto</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        @if (session()->has('Confirmacion11'))
                        <script>
                            Swal.fire(
                                'El producto {{ old('txtnserie') }} se guardó correctamente',
                                '{!! session('Confirmacion9') !!}',
                                'success'
                            );
                        </script>
                        @endif
                        
                        @if($errors->any())
                        <script>
                        Swal.fire(
                            'El producto no se guardo, revisa los datos...',
                            '{{$errors->first()}}',
                            'error'
                        )
                        </script>
                        @endif
                        <form method="POST" action="{{route('productos.update', $item->id)}}">
                
                            @csrf 
                            @method('PUT') 
                        <div class="form-group">
                            <label for="serie">No. de Serie:</label>
                            <input type="text" name="txtnserie" class="form-control" placeholder="Ingrese el No. de Serie del producto" value="{{$item->noserie}}">
                        </div>
                        <div class="form-group">
                            <label for="marca">Marca:</label>
                            <input type="text" name="txtmarca" class="form-control" placeholder="Ingrese la marca del producto" value="{{$item->marca}}">
                        </div>
                        <div class="form-group">
                            <label for="cantidad">Cantidad:</label>
                            <input type="text" name="txtcantidad" class="form-control" placeholder="Ingrese la cantidad del producto" value="{{$item->cantidad}}">
                        </div>
                        <div class="form-group">
                            <label for="CDP">Costo de Compra:</label>
                            <input type="text" name="txtcosto" class="form-control" placeholder="Ingrese el costo de compra del producto" value="{{$item->costodecompra}}">
                        </div>
                        <div class="form-group">
                            <label for="preciodVenta">Precio de Venta:</label>
                            <input type="text" name="txtprecioV" class="form-control" placeholder="Precio de Venta generado" value="{{$item->preciodeventa}}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="fecha">Fecha de Ingreso:</label>
                            <input type="date" name="txtfecha" class="form-control" placeholder="Ingrese la fecha de ingreso del producto" value="{{$item->fechaingreso}}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="formFile" class="form-label">Fotografía del producto</label>
                            <input class="form-control" type="file" name="txtfoto" value="{{$item->fotoproducto}}">
                          </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success" data-dismiss="modal">Guardar</button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal" id="destroy{{$item->id}}" tabindex="-1" aria-labelledby="eliminarModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title fs-5" id="eliminarModal">Eliminar un Producto</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        @if (session()->has('Confirmacion'))
                        <script>
                            Swal.fire(
                                'El producto {{ old('txtnserie') }} se ha eliminado correctamente',
                                '{!! session('Confirmacion') !!}',
                                'success'
                            );
                        </script>
                        @endif
                        <form method="post" action="{{route('productos.destroy',$item->id)}}">
                            @csrf
                            @method('DELETE')
                            <label>¿Seguro que deseas eliminar el Producto?</label>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                            <button type="button" class="btn btn-danger"  data-bs-dismiss="modal">Cancelar</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <tr>
            <td> {{$item->noserie}}</td>
            <td> {{$item->marca}}</td>
            <td> {{$item->cantidad}}</td>
            <td> {{$item->costodecompra}}</td>
            <td> {{$item->preciodeventa}}</td>
            <td> {{$item->fechaingreso}}</td>
            <td> {{$item->fotoproducto}}</td>
                <td>
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-list-stars"></i> Opciones
                        </button>
                        <ul class="dropdown-menu">
                            <button type="button" class="btn btn-info m-1" onclick="generarPdf('{{ $item->id }}')">
                                <i class="bi bi-file-pdf"></i> - Generar PDF
                            </button>                            
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
    </table>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#agregarModal">
        Agregar
    </button>
    <a href="/Almacen" class="btn btn-warning">Regresar a la Página Principal</a>
    <div class="modal" id="agregarModal" aria-labelledby="agregarModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title fs-5" id="agregarModal">Agregar nuevo producto</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @if (session()->has('Confirmacion10'))
                    <script>
                        Swal.fire(
                            'El producto {{ old('txtnserie') }} se guardó correctamente',
                            '{!! session('Confirmacion10') !!}',
                            'success'
                        );
                    </script>
                    @endif
                    
                    @if($errors->any())
                    <script>
                    Swal.fire(
                        'El producto no se guardo, revisa los datos...',
                        '{{$errors->first()}}',
                        'error'
                    )
                    </script>
                    @endif
                    <form action="{{ route('productos.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                        <div class="form-group">
                            <label for="serie">No. de Serie:</label>
                            <input type="text" name="txtserie" class="form-control" id="serie" placeholder="Ingrese el No. de Serie del producto">
                        </div>
                    <div class="form-group">
                        <label for="marca">Marca:</label>
                        <input type="text" name="txtmarc" class="form-control" id="marca" placeholder="Ingrese la marca del producto">
                    </div>
                    <div class="form-group">
                        <label for="cantidad">Cantidad:</label>
                        <input type="text" name="txtcantida" class="form-control" id="cantidad" placeholder="Ingrese la cantidad del producto">
                    </div>
                    <div class="form-group">
                        <label for="CDP">Costo de Compra:</label>
                        <input type="text" name="txtcost" class="form-control" id="CDP" placeholder="Ingrese el costo de compra del producto">
                    </div>
                    <div class="form-group">
                        <label for="preciodVenta">Precio de Venta:</label>
                        <input type="text" name="txtprecio" class="form-control" id="preciodVenta" placeholder="Precio de Venta generado">
                    </div>
                    <div class="form-group">
                        <label for="fecha">Fecha de Ingreso:</label>
                        <input type="date" name="txtfech" class="form-control" id="fecha" placeholder="Ingrese la fecha de ingreso del producto">
                    </div>
                    <div class="form-group mb-3">
                        <label for="formFile" class="form-label">Fotografía del producto</label>
                        <input class="form-control" type="file" name="txtfoto">
                      </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" data-dismiss="modal">Guardar</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        function generarPdf(id) {
            window.open('{{ url("/generar-pdf-producto") }}/' + id, '_blank');
        }
    </script>
</tbody>
@endsection