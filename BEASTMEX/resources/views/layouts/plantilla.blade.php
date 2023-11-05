<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('images/logocompu.png') }}" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @vite(['resources/js/app.js'])
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="{{ asset('css/estilosinicio.css') }}">{{-- CSS estilos --}}
    
</head>
<body>

    @include('partials.navbar')
    
    @yield('body')

</body>
</html>