@extends('layouts.plantilla')

@section('titulo','Consulta de ticket')

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
    <h2>Cálculo de Ganancias por venta</h2>

        <div class="container mt-4">
            <div class="row">
                <div class="col-lg-12">
                    <div class="input-group mb-3">
                        <input type="search" class="form-control me-2 ms-auto" style="max-width: 200px;" placeholder="Buscador">
                        <button class="btn btn-outline-secondary" type="button">Buscar</button>
                    </div>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Venta Generada</th>
                                <th>Ganancia</th>
                                <th>Calculo de venta</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($allganancias as $item)
                            <tr>
                                <td class="ventaGenerada">{{$item->venta_generada}}</td>
                                <td><span class="ganancia">0</span></td>
                                <td><button class="calcularGanancia btn btn-primary">Calcular Ganancia</button></td>
                            </tr>
                            @endforeach
                            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                            <script>
                                $(document).ready(function () {
                                    $('.calcularGanancia').on('click', function () {
                                        var row = $(this).closest('tr');
                                        var ventaGenerada = parseFloat(row.find('.ventaGenerada').text());
                                        if (!isNaN(ventaGenerada)) {
                                            var gananciaCalculada = ventaGenerada * 0.55;
                                            row.find('.ganancia').text(gananciaCalculada.toFixed(2));

                                            // Envío de la ganancia calculada al servidor
                                            $.ajax({
                                                method: 'POST',
                                                url: '/guardar-ganancia', // Ruta a tu controlador en Laravel para guardar la ganancia
                                                data: {
                                                    ganancia: gananciaCalculada,
                                                    ventaGenerada: ventaGenerada
                                                },
                                                success: function (response) {
                                                    // Manejar la respuesta del servidor si es necesario
                                                    console.log('Ganancia guardada correctamente');
                                                },
                                                error: function (error) {
                                                    // Manejar errores si la solicitud falla
                                                    console.error('Error al guardar la ganancia:', error);
                                                }
                                            });
                                        } else {
                                            row.find('.ganancia').text('0');
                                        }
                                    });
                                });
                            </script>
                        </tbody>
                    </table>                    
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-between">
            <a class="btn btn-warning" href="/ventas">Regresar a la Página Principal</a>
        </div>
</div>

    
@endsection