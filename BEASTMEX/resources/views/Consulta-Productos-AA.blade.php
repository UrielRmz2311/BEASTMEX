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
                <th>ID</th>
                <th>NO. de Serie</th>
                <th>Marca</th>
                <th>Cantidad</th>
                <th>Costo de Compra</th>
                <th>Precio de Venta</th>
                <th>Fecha de Ingreso</th>
            </tr>
        </thead>
    </table>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#agregarModal">
        Agregar
    </button>
    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modificarModal">
        Modificar
    </button>
    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#eliminarModal">
        Eliminar
    </button>
    <a href="/inialmacen" class="btn btn-warning">Regresar a la Página Principal</a>
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
                    <form action="/guardarPr" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="ID">Id:</label>
                            <input type="text" name="txtid" class="form-control" id="ID" placeholder="Ingrese el Id del producto">
                        </div>
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
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" data-dismiss="modal">Guardar</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<div class="modal" id="modificarModal" aria-labelledby="modificarModal" aria-hidden="true">
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
                            '{!! session('Confirmacion11') !!}',
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
                    <form action="/modificarPr" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="ID">Id:</label>
                        <input type="text" name="txtid" class="form-control" id="ID" placeholder="Ingrese el Id del producto">
                    </div>
                    <div class="form-group">
                        <label for="serie">No. de Serie:</label>
                        <input type="text" name="txtnserie" class="form-control" id="serie" placeholder="Ingrese el No. de Serie del producto">
                    </div>
                    <div class="form-group">
                        <label for="marca">Marca:</label>
                        <input type="text" name="txtmarca" class="form-control" id="marca" placeholder="Ingrese la marca del producto">
                    </div>
                    <div class="form-group">
                        <label for="cantidad">Cantidad:</label>
                        <input type="text" name="txtcantidad" class="form-control" id="cantidad" placeholder="Ingrese la cantidad del producto">
                    </div>
                    <div class="form-group">
                        <label for="CDP">Costo de Compra:</label>
                        <input type="text" name="txtcosto" class="form-control" id="CDP" placeholder="Ingrese el costo de compra del producto">
                    </div>
                    <div class="form-group">
                        <label for="preciodVenta">Precio de Venta:</label>
                        <input type="text" name="txtprecioV" class="form-control" id="preciodVenta" placeholder="Precio de Venta generado">
                    </div>
                    <div class="form-group">
                        <label for="fecha">Fecha de Ingreso:</label>
                        <input type="date" name="txtfecha" class="form-control" id="fecha" placeholder="Ingrese la fecha de ingreso del producto">
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

<div class="modal" id="eliminarModal" aria-labelledby="eliminarModal" aria-hidden="true">
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
                    <form method="post" action="/EliminarPr">
                        @csrf
                        <label>¿Seguro que deseas eliminar la venta?</label>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                        <button type="button" class="btn btn-danger"  data-bs-dismiss="modal">Cancelar</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection