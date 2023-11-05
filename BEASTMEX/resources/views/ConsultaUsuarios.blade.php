@extends('layouts.plantilla')

@section('titulo','Registro Proveedores')

@section('body')

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
        <div class="container mt-4">
            <div class="row">
                <div class="col-lg-12">
                    <div class="input-group mb-3">
                        <input type="search" class="form-control me-2 ms-auto" style="max-width: 200px;" placeholder="Buscar por nombre">
                        <button class="btn btn-outline-secondary" type="button">Buscar</button>
                    </div>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Nombre completo</th>
                                <th>Contraseña</th>
                                <th>Correo Electronico</th>
                                <th>Puesto</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Jessica Alejandra Barradas Breton</td>
                                <td>12345678</td>
                                <td>Jessica.G@gmail.com</td>
                                <td>Gerente</td>
                            </tr>
                            <tr>
                                <td>Alan Uriel Ramirez Labastida</td>
                                <td>01234567</td>
                                <td>Alan.A@gmail.com</td>
                                <td>Almacen</td>
                            </tr>
                            <tr>
                                <td>Jonathan Raul Bocanegra Leyva</td>
                                <td>1783964</td>
                                <td>Jonathan.V@gmail.com</td>
                                <td>Ventas</td>
                            </tr>
                            <tr>
                                <td>Elias Mayor Carrasquero</td>
                                <td>07080912</td>
                                <td>Elias.C@gmail.com</td>
                                <td>Compras</td>
                            </tr>
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-between">
            <a class="btn btn-secondary" href="/"> < Regresar </a>
            <div>
                <a class="btn btn-success" href="/">Agregar</a>
                <a class="btn btn-primary" href="/">Modificar</a>
                <a class="btn btn-danger" href="/">Eliminar</a>
            </div>
        </div>
    </form>
</div>
    
@endsection