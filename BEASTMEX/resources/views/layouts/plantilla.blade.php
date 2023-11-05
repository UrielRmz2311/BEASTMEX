<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('images/logocompu.png') }}" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script>
        document.getElementById('generar-y-descargar-pdf').addEventListener('click', function() {
            // Crear un nuevo objeto jsPDF
            const doc = new jsPDF();
    
            // Agregar contenido al PDF
            doc.text('Este es un ejemplo de PDF generado desde el navegador.', 10, 10);
    
            // Generar el PDF
            doc.save('mi_pdf.pdf'); // Este nombre será el del archivo descargado
    
            // Opcional: Redireccionar o realizar otras acciones después de generar el PDF
            // window.location.href = '/tu-ruta'; // Redirigir a otra página
        });
    </script>
    @vite(['resources/js/app.js'])
    <title>@yield('titulo')</title>
    
</head>
<body>

    @include('partials.navbar')
    
    @yield('body')

</body>
</html>