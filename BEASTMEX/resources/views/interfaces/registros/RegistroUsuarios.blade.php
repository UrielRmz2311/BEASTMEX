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
    <form method="post" action="/guardarUsuario">
        @csrf

        <div class="form-group">
            <label for="nombre_completo">Nombre Completo:</label>
            <input type="text" name="txtnombre" class="form-control" id="nombre_completo" name="nombre_completo" required>
        </div>

        <div class="form-group">
            <label for="contrasena">Contraseña:</label>
            <input type="password" name="txtcontraseña" class="form-control" id="contrasena" name="contrasena" required>
        </div>

        <div class="form-group">
            <label for="correo">Correo Electrónico:</label>
            <input type="text" name="txtcorreo" class="form-control" id="correo" name="correo" required>
        </div>

        <label for="puesto">Puesto:</label>
            <select id="puesto" name="puesto">
                <option selected>Selecciona el puesto en el que estas</option>
                <option value="1">Gerencia</option>
                <option value="2">Ventas</option>
                <option value="3">Compras</option>
                <option value="3">Almacen</option>
            </select>
        
        <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-warning">Guardar</button>
            <div>
                <a href="/gerente" class="btn btn-warning">Regresar a la Página Principal</a>
            </div>
        </div>
    </form>
</div>

@endsection