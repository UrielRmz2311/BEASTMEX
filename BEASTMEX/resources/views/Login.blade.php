<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="{{ asset('images/logocompu.png') }}" type="image/x-icon">
        <title>Inicio de Sesión</title>
        @vite(['resources/js/app.js']){{-- Enlace Bootstrap --}}
        {{-- CSS de google --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
        {{--  --}}

        <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">{{-- CSS estilos --}}

    </head>
    <body>


        <div class="contenedor-formulario contenedor">
            <div class="imagen-formulario">

            </div>
            
            <form class="formulario">
                <div class="texto-formulario">
                    <h2 class="fw-bold font-italic">BIENVENIDO</h2>
                    <p>Inicia sesión</p>
                </div>

                <div class="input">
                    <label>Usuario: </label>
                    <input placeholder="Correo de Usuario" type="text" name="txtusuario">
                </div>
                <div class="input">
                    <label>Contraseña: </label>
                    <input placeholder="Ingresa tu contraseña" type="password" name="txtpass">
                </div>
                <div class="text-center mt-3">
                    <a class="btn btn-warning" type="button" href="/CCG" >Entrar</a>
                </div>
            </form>
    </body>
</html>