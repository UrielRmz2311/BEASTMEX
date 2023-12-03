@extends('layouts.plantilla')
@section('titulo','Almacen-Registro de Productos')
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
    .contenedor{
        max-width: 500px;
        margin: 20px auto;
        background-color: rgb(39, 52, 94);
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    h1 {
        text-align: center;
        padding: 10px;
        color: #ffbb00;
    }
    label {
        display: block;
        margin-bottom: 10px;
        font-size: 20px;
        color: #ffbb00;
        
    }

    input, select {
        width: calc(100% - 20px);
        padding: 10px;
        font-size: 16px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
</style>
<div class="contenedor">
    <h1>ALMACEN-REGISTRO DE PRODUCTOS</h1>
@if (session()->has('Confirmacion'))
<script>
    Swal.fire(
        'El producto {{ old('txtnombre') }} se guardó correctamente',
        '{!! session('Confirmacion') !!}',
        'success'
    );
</script>
@endif

@if($errors->any())
<script>
Swal.fire(
    'El Producto no se guardo, revisa los datos...',
    '{{$errors->first()}}',
    'error'
)
</script>
@endif
<form action="{{ url('/rulesFormRegisProd') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="numeroSerie">No. de serie:</label>
        <input type="text" name="numeroSerie" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="marca">Marca:</label>
        <input type="text" name="marca" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="cantidad">Cantidad:</label>
        <input type="text" name="cantidad" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="costo">Costo de compra:</label>
        <input type="text" step="0.01" name="costo" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="fecha">Fecha de ingreso:</label>
        <input type="date" name="fecha" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="foto">Fotografía del producto:</label>
        <input type="file" name="foto" class="form-control-file" required>
    </div>

    <div class="d-flex justify-content-between">
        <button type="submit" class="btn btn-warning">Guardar</button>
        <div>
            <a href="/almacen" class="btn btn-warning">Regresar a la Página Principal</a>
        </div>
    </div>
</form>



@endsection