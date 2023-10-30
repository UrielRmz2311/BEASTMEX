<<<<<<< Updated upstream
@extends('layouts.plantilla')
@section('titulo','Inicio de Sesión')
@section('login')

    <div class="container-fluid d-flex justify-content-center align-items-center" style="height: 100vh; background-color: black;">
        <div class="card text-white bg-dark" style="width: 400px;">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ asset('images/logo1.png') }}" class="img-fluid" alt="Imagen de login">
                    </div>
                    <div class="col-md-6">
                        <form>
                            @csrf <!-- Token de seguridad de Laravel -->
                            <div class="form-group">
                                <label for="email">Correo electrónico</label>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                            </div>
                            <div class="form-group">
                                <label for="password">Contraseña</label>
                                <input id="password" type="password" class="form-control" name="password" required>
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">Recordar</label>
                                </div>
                            </div>
                            <div class="form-group mb-0">
                                <button type="submit" class="btn btn-primary btn-block">Iniciar sesión</button>
                            </div>
=======
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio de Sesión</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <img src={{asset('images/logo1.png')}} alt="Logo" class="img-fluid mb-3" style="max-width: 150px;">
                        <h3>Iniciar Sesión</h3>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Correo Electrónico</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
>>>>>>> Stashed changes
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<<<<<<< Updated upstream
@endsection
=======
</body>
</html>
>>>>>>> Stashed changes
