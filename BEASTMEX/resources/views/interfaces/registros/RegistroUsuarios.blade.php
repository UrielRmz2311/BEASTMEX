@extends('layouts.plantilla')
@section('titulo','Registro de Usuarios')
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
     <h1>REGISTRO DE USUARIOS</h1>
     @if (session()->has('Confirmacion'))
      <script>
          Swal.fire(
              'Usuario {{ old('txtnombre') }} se guardó correctamente',
              '{!! session('Confirmacion') !!}',
              'success'
          );
      </script>
    @endif

    @if($errors->any())
      <script>
      Swal.fire(
          'El Usuario no se guardo, revisa los datos...',
          '{{$errors->first()}}',
          'error'
      )
      </script>
  @endif
    <form method="post" action="{{ route('usuario.store')}}">
        @csrf

        <div class="form-group">
            <label for="nombre_completo">Nombre Completo:</label>
            <input type="text" name="txtNom" class="form-control" id="nombre_completo" required>
        </div>

        <div class="form-group">
            <label for="contrasena">Contraseña:</label>
            <input type="password" name="txtCon" class="form-control" id="contrasena" required>
        </div>

        <div class="form-group">
            <label for="correo">Correo Electrónico:</label>
            <input type="text" name="txtCor" class="form-control" id="correo" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Puesto:</label>
            <select class="form-select" name="txtPue" value="{{ old('txtPue')}}">
                <option value="Gerente">Gerente</option>
                <option value="Almacen">Almacen</option>
                <option value="Ventas">Ventas</option>
                <option value="Compras">Compras</option>
            </select>
        </div>
        
        <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-warning">Guardar</button>
            <div>
                <a href="/InicioGerente" class="btn btn-warning">Regresar a la Página Principal</a>
            </div>
        </div>
    </form>
</div>

@endsection