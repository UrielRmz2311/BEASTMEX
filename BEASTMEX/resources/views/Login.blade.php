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
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection