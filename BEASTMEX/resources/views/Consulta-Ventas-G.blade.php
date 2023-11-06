@extends('layouts.plantilla')
@section('titulo','Gerencia-Consulta de Ventas')
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
    <h2>Consulta de Ventas por Gerencia</h2>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Venta</th>
                <th>Ticket</th>
                <th>Precio Total</th>
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
    <a href="{{ route('Login') }}" class="btn btn-warning">Regresar a la Página Principal</a>

    <div class="modal" id="agregarModal" aria-labelledby="agregarModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title fs-5" id="agregarModal">Agregar nueva venta</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @if (session()->has('Confirmacion'))
                    <script>
                        Swal.fire(
                            'La venta {{ old('txtventa') }} se guardó correctamente',
                            '{!! session('Confirmacion') !!}',
                            'success'
                        );
                    </script>
                    @endif
                    
                    @if($errors->any())
                    <script>
                    Swal.fire(
                        'La venta no se guardo, revisa los datos...',
                        '{{$errors->first()}}',
                        'error'
                    )
                    </script>
                    @endif
                    <form action="/guardarD" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="producto">Id:</label>
                        <input type="text" name="txtid" class="form-control" id="ID" placeholder="Ingrese el Id de la venta" required>
                    </div>
                    <div class="form-group">
                        <label for="producto">Venta:</label>
                        <input type="text" name="txtventa" class="form-control" id="producto" placeholder="Ingrese la venta" required>
                    </div>
                    <div class="form-group">
                        <label for="cantidad">Ticket:</label>
                        <input type="text" name="txtticket" class="form-control" id="cantidad" placeholder="Ingrese el id del ticket" required>
                    </div>
                    <div class="form-group">
                        <label for="precio">Precio Total:</label>
                        <input type="text" name="txtpreciot" class="form-control" id="precio" placeholder="Ingrese el precio total" required>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" id="guardarAgregar">Guardar</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </form>
    <div class="modal" id="modificarModal" aria-labelledby="modificarModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title fs-5" id="modificarModal">Modificar una venta</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    @if (session()->has('Confirmacion'))
                    <script>
                        Swal.fire(
                            'La venta {{ old('txtventa') }} se ha modificado correctamente',
                            '{!! session('Confirmacion') !!}',
                            'success'
                        );
                    </script>
                    @endif
                    
                    @if($errors->any())
                    <script>
                    Swal.fire(
                        'La venta no se guardo, revisa los datos...',
                        '{{$errors->first()}}',
                        'error'
                    )
                    </script>
                    @endif

                    <form method="post" action="/modificarD">
                        @csrf
                    <div class="form-group">
                        <label for="producto">Id:</label>
                        <input type="text" name="txtid" class="form-control" id="ID" placeholder="Ingrese el Id de la venta" required>
                    </div>
                    <div class="form-group">
                        <label for="producto">Venta:</label>
                        <input type="text" name="txtventa" class="form-control" id="producto" placeholder="Ingrese la venta" required>
                    </div>
                    <div class="form-group">
                        <label for="cantidad">Ticket:</label>
                        <input type="text" name="txtticket" class="form-control" id="cantidad" placeholder="Ingrese el id del ticket" required>
                    </div>
                    <div class="form-group">
                        <label for="precio">Precio Total:</label>
                        <input type="text" name="txtpreciot" class="form-control" id="precio" placeholder="Ingrese el precio total" required>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" id="guardarModificar">Guardar</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                </div>
                    </form>
            </div>
        </div>
    </div>
</div>
</form>

<div class="modal" id="eliminarModal" aria-labelledby="eliminarModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title fs-5" id="eliminarModal">Eliminar una venta</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @if (session()->has('Confirmacion'))
                    <script>
                        Swal.fire(
                            'La venta {{ old('txtventa') }} se ha eliminado correctamente',
                            '{!! session('Confirmacion') !!}',
                            'success'
                        );
                    </script>
                    @endif
                    <form method="post" action="/EliminarD">
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
</div>
@endsection