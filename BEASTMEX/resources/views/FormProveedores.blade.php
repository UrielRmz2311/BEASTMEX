@extends('layouts.plantilla')

@section('titulo','Registro de Proveedores')

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
    <h2>Registrar Proveedor</h2>
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
    <form method="POST" action="/RegistroProv" class="row g-3">
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
                    <table class="table table-bordered table-striped">
                        

                        <thead>
                            <tr>
                                <th>Producto</th>
                                <th>Cantidad</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="text" class="form-control" name="txtProducto1" value="{{ old('txtProducto1')}}"></td>
                                <td><input type="text" class="form-control" name="txtCantidad1" value="{{ old('txtCantidad1')}}"></td>
                                <td><input type="checkbox" name="elementos1" ></td>
                            </tr>
                            <tr>
                                <td><input type="text" class="form-control" name="txtProducto2" value="{{ old('txtProducto2')}}"></td>
                                <td><input type="text" class="form-control" name="txtCantidad2" value="{{ old('txtCantidad2')}}"></td>
                                <td><input type="checkbox" name="elementos2"></td>
                            </tr>
                            <tr>
                                <td><input type="text" class="form-control" name="txtProducto3" value="{{ old('txtProducto3')}}"></td>
                                <td><input type="text" class="form-control" name="txtCantidad3" value="{{ old('txtCantidad3')}}"></td>
                                <td><input type="checkbox" name="elementos3"></td>
                            </tr>
                            <tr>
                                <td><input type="text" class="form-control" name="txtProducto4" value="{{ old('txtProducto4')}}"></td>
                                <td><input type="text" class="form-control" name="txtCantidad4" value="{{ old('txtCantidad4')}}"></td>
                                <td><input type="checkbox" name="elementos4"></td>
                            </tr>
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-between">
            <a class="btn btn-warning" href="/compras">Regresar a la Página Principal</a>
            <div>
                <button type="submit" class="btn btn-success">Agregar</button>
                <a class="btn btn-danger" href="/">Cancelar</a>
            </div>
        </div>
    </form>
</div>
    
@endsection