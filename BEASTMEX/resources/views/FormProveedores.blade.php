@extends('layouts.plantilla')

@section('titulo','Registro de Proveedores')

@section('body')

<h1 class="display-1 fw-bold text-center text-warning mt-2">REGISTRAR PROVEEDOR</h1>

<div class="container mt-4">
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
                'Falta diligenciar correctamente algunos campos...',
                '{{$errors->first()}}',
                'warning'
            )
            </script>
    @endif
    <form method="POST" action="/RegistroProv" class="row g-3">
        @csrf
        <div class="col-md-6">
            <input type="text" class="form-control" placeholder="Nombre del proveedor o marca" name="txtProveedor" value="{{ old('txtProveedor')}}">
            <p class="fw-bold text-danger"> {{ $errors->first('txtProveedor') }} </p>
        </div>
        <div class="col-md-6">
            <input type="text" class="form-control" placeholder="Direccion" name="txtDireccion" value="{{ old('txtDireccion')}}">
            <p class="fw-bold text-danger"> {{ $errors->first('txtDireccion') }} </p>
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
                                <p class="fw-bold text-danger"> {{ $errors->first('txtProducto1') }} </p>
                                <td><input type="text" class="form-control" name="txtCantidad1" value="{{ old('txtCantidad1')}}"></td>
                                <p class="fw-bold text-danger"> {{ $errors->first('txtCantidad1') }} </p>
                                <td><input type="checkbox" name="elementos1" ></td>
                                <p class="fw-bold text-danger"> {{ $errors->first('elementos1') }} </p>
                            </tr>
                            <tr>
                                <td><input type="text" class="form-control" name="txtProducto2" value="{{ old('txtProducto2')}}"></td>
                                <p class="fw-bold text-danger"> {{ $errors->first('txtProducto2') }} </p>
                                <td><input type="text" class="form-control" name="txtCantidad2" value="{{ old('txtCantidad2')}}"></td>
                                <p class="fw-bold text-danger"> {{ $errors->first('txtCantidad2') }} </p>
                                <td><input type="checkbox" name="elementos2"></td>
                                <p class="fw-bold text-danger"> {{ $errors->first('elementos2') }} </p>
                            </tr>
                            <tr>
                                <td><input type="text" class="form-control" name="txtProducto3" value="{{ old('txtProducto3')}}"></td>
                                <p class="fw-bold text-danger"> {{ $errors->first('txtProducto3') }} </p>
                                <td><input type="text" class="form-control" name="txtCantidad3" value="{{ old('txtCantidad3')}}"></td>
                                <p class="fw-bold text-danger"> {{ $errors->first('txtCantidad3') }} </p>
                                <td><input type="checkbox" name="elementos3"></td>
                                <p class="fw-bold text-danger"> {{ $errors->first('elementos3') }} </p>
                            </tr>
                            <tr>
                                <td><input type="text" class="form-control" name="txtProducto4" value="{{ old('txtProducto4')}}"></td>
                                <p class="fw-bold text-danger"> {{ $errors->first('txtProducto4') }} </p>
                                <td><input type="text" class="form-control" name="txtCantidad4" value="{{ old('txtCantidad4')}}"></td>
                                <p class="fw-bold text-danger"> {{ $errors->first('txtCantidad4') }} </p>
                                <td><input type="checkbox" name="elementos4"></td>
                                <p class="fw-bold text-danger"> {{ $errors->first('elementos4') }} </p>
                            </tr>
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-between">
            <a class="btn btn-secondary" href="/compras"> < Regresar </a>
            <div>
                <button type="submit" class="btn btn-success">Agregar</button>
                <a class="btn btn-danger" href="/">Cancelar</a>
            </div>
        </div>
    </form>
</div>
    
@endsection