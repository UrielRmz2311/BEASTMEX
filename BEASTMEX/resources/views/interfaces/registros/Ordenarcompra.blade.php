@extends('layouts.plantilla')

@section('titulo','Registrar Orden de compra')

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



<div class="contenedor mt-4">
    <h2>Registrar Orden de compra</h2>
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
    <form method="POST" action="{{ route('ordendecompra.store')}}" class="row g-3">
        @csrf
        <div class="col-md-6">
            <input type="text" class="form-control" placeholder="Nombre del proveedor o marca" name="txtProveedor" value="{{ old('txtProveedor')}}">
        </div>
        <div class="col-md-6">
            <input type="text" class="form-control" placeholder="Direccion" name="txtDireccion" value="{{ old('txtDireccion')}}">
        </div>
        
        <div class="container mt-4">
            <div class="row">
                <div class="col-lg-6">
                    <table class="table table-bordered table-striped" id="productosTabla">
                        <thead>
                            <tr>
                                <th>Producto</th>
                                <th>Cantidad</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="producto-fila">
                                <td><input type="text" class="form-control" name="txtProducto[]" value="{{ old('txtProducto')}}"></td>
                                <td><input type="text" class="form-control" name="txtCantidad[]" value="{{ old('txtCantidad')}}"></td>
                            </tr>
                        </tbody>
                        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                        <script>
                            $(document).ready(function () {
                                $('#agregarProducto').on('click', function () {
                                    var filaProducto = $('.producto-fila').first().clone(); // Clonar la primera fila
                                    filaProducto.find('input').val(''); // Limpiar valores de la fila clonada
                                    $('#productosTabla tbody').append(filaProducto); // Agregar la fila clonada al final de la tabla
                                });
                            });
                        </script>
                    </table>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-between">
            <a class="btn btn-warning" href="/compras">Regresar a la Página Principal</a>
            <div>
                <button type="button" class="btn btn-info" id="agregarProducto">Agregar Producto</button>
                <button type="submit" class="btn btn-success">Agregar</button>
            </div>
        </div>
    </form>
</div>
    
@endsection