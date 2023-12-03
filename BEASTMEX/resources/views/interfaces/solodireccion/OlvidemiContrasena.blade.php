<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Olvide mi contraseña</title>
  @vite(['resources/js/app.js']){{-- Enlace Bootstrap --}}
  <link rel="shortcut icon" href="{{ asset('images/logocompu.png') }}" type="image/x-icon">
</head>
<body>

  <style>
      body {
      background-image:url('../images/fondo1.jpg') ;
      background-position: center;
      background-repeat:no-repeat;
      background-attachment:fixed;
      background-size:cover;
      background-color:cornflowerblue;
  }

      .card {
          max-width: 500px;
          margin: 100px auto;
          background-color: rgb(74, 90, 141);
          padding: 20px;
          border-radius: 8px;
          box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
          text-align: center;
          color: antiquewhite;
          font-size: 30px
  }
  </style>
  <div class="card">
          <div class="card-header">
            AVISO
          </div>
          <div class="card-body">
            <p class="card-text">Favor de pasar con tu gerente para que te dé una contraseña nueva</p>
          </div>
      <div class="buttons">
          <a href="/" class="btn btn-warning">OK</a>
      </div>
  </div>
  
</body>
</html>
