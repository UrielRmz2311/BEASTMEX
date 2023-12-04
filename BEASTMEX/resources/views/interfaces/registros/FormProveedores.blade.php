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
    <form method="POST" action="{{ route('proveedor.store')}}" class="row g-3">
        @csrf
        <div class="col-md-6">
            <input type="text" class="form-control" placeholder="Nombre del proveedor o marca" name="txtProvee" value="{{ old('txtProvee')}}">
        </div>
        <div class="col-md-6">
            <input type="text" class="form-control" placeholder="Direccion" name="txtDirec" value="{{ old('txtDirec')}}">
        </div>
        
        <div class="d-flex justify-content-between">
            <a class="btn btn-warning" href="/InicioCompras">Regresar a la Página Principal</a>
            <div>
                <button type="submit" class="btn btn-success">Registrar proveedor</button>
            </div>
        </div>
    </form>
</div>
    
@endsection