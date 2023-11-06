@extends('layouts.plantilla')
@section('titulo','Gerencia-Consulta de Compras')
@section('body')
<style>
        body {
    background-image:url('../images/fondo6.jpg') ;
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
        color: rgb(255, 255, 255)
    }
</style>
<div class="contenedor mt-5">
    <h2>Consulta de Compras por Gerencia</h2>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Precio Total</th>
                <th>No. de Serie</th>
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
    <a href="/gerente" class="btn btn-warning">Regresar a la Página Principal</a>
<!-- Modales -->
<div class="modal" id="agregarModal" aria-labelledby="agregarModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title fs-5" id="agregarModal">Agregar nueva compra</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @if (session()->has('Confirmacion'))
                    <script>
                        Swal.fire(
                            'La compra {{ old('txtproducto') }} se guardó correctamente',
                            '{!! session('Confirmacion') !!}',
                            'success'
                        );
                    </script>
                    @endif
                    
                    @if($errors->any())
                    <script>
                    Swal.fire(
                        'La compra no se guardo, revisa los datos...',
                        '{{$errors->first()}}',
                        'error'
                    )
                    </script>
                    @endif
                    <form action="/guardarC" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="producto">Id:</label>
                        <input type="text"  name="txtid" class="form-control" id="ID" placeholder="Ingrese el Id del producto">
                    </div>
                    <div class="form-group">
                        <label for="producto">Producto:</label>
                        <input type="text" name="txtproducto" class="form-control" id="producto" placeholder="Ingrese el nombre del producto">
                    </div>
                    <div class="form-group">
                        <label for="cantidad">Cantidad:</label>
                        <input type="text" name="txtcantidad" class="form-control" id="cantidad" placeholder="Ingrese la cantidad">
                    </div>
                    <div class="form-group">
                        <label for="precio">Precio Total:</label>
                        <input type="text" name="txtprecio" class="form-control" id="precio" placeholder="Ingrese el precio total">
                    </div>
                    <div class="form-group">
                        <label for="serie">No. de Serie:</label>
                        <input type="text" name="txtserie" class="form-control" id="serie" placeholder="Ingrese el número de serie">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" data-dismiss="modal">Guardar</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
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
                    <h4 class="modal-title fs-5" id="modificarModal">Modificar una compra</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @if (session()->has('Confirmacion'))
                    <script>
                        Swal.fire(
                            'La compra {{ old('txtproducto') }} se ha modificado correctamente',
                            '{!! session('Confirmacion') !!}',
                            'success'
                        );
                    </script>
                    @endif
                    
                    @if($errors->any())
                    <script>
                    Swal.fire(
                        'La compra no se guardo, revisa los datos...',
                        '{{$errors->first()}}',
                        'error'
                    )
                    </script>
                    @endif
                    <form action="/modificarC" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="producto">Id:</label>
                            <input type="text"  name="txtid" class="form-control" id="ID" placeholder="Ingrese el Id del producto">
                        </div>
                        <div class="form-group">
                            <label for="producto">Producto:</label>
                            <input type="text" name="txtproduct" class="form-control" id="producto" placeholder="Ingrese el nombre del producto">
                        </div>
                        <div class="form-group">
                            <label for="cantidad">Cantidad:</label>
                            <input type="text" name="txtcantida" class="form-control" id="cantidad" placeholder="Ingrese la cantidad">
                        </div>
                        <div class="form-group">
                            <label for="precio">Precio Total:</label>
                            <input type="text" name="txtpreci" class="form-control" id="precio" placeholder="Ingrese el precio total">
                        </div>
                        <div class="form-group">
                            <label for="serie">No. de Serie:</label>
                            <input type="text" name="txtseri" class="form-control" id="serie" placeholder="Ingrese el número de serie">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success" data-dismiss="modal">Guardar</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
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
                <h4 class="modal-title fs-5" id="eliminarModal">Eliminar una compra</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @if (session()->has('Confirmacion'))
                    <script>
                        Swal.fire(
                            'La compra {{ old('txtproducto') }} se ha eliminado correctamente',
                            '{!! session('Confirmacion') !!}',
                            'success'
                        );
                    </script>
                @endif
                <form method="post" action="/EliminarC">
                    @csrf
                    <label>¿Seguro que deseas eliminar la compra?</label>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection