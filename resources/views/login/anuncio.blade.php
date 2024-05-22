<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Recordatorio de Parqueadero</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      background-color: #2b62ff; /* Fondo naranja más oscuro */
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      text-align: center;
      position: relative; /* Para posicionar las esferas */
    }

    /* Esferas */
    .sphere {
      position: absolute; /* Posición absoluta */
      border-radius: 50%; /* Borde redondeado */
      background: radial-gradient(rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 0)); /* Gradiente radial blanco-transparente */
      pointer-events: none; /* No captura eventos del ratón */
    }

    .sphere:nth-child(1) {
      width: 150px;
      height: 150px;
      top: 10%;
      left: 10%;
    }

    .sphere:nth-child(2) {
      width: 100px;
      height: 100px;
      top: 30%;
      right: 15%;
    }

    .sphere:nth-child(3) {
      width: 200px;
      height: 200px;
      bottom: 15%;
      left: 25%;
    }

    .sphere:nth-child(4) {
      width: 120px;
      height: 120px;
      bottom: 5%;
      right: 5%;
    }

    .mensaje {
      font-size: 24px;
      font-weight: bold;
      color: #fff;
      position: relative; /* Ajustar z-index */
      z-index: 1; /* Por encima de las esferas */
    }
  </style>
</head>
<body>
  <!-- Esferas -->
  <div class="sphere"></div>
  <div class="sphere"></div>
  <div class="sphere"></div>
  <div class="sphere"></div>

  <div class="mensaje" id="mensaje">
    Recuerda que tu parqueadero está reservado el dia de mañana hasta <span id="fechaReserva">{{$myHermosoHorario}}</span> Recuerda renovarlo.
  </div>

  <script>
   

  

    // Redirigir a "back.html" después de 10 segundos
    setTimeout(function() {
      window.location.href = "back";
    }, 5000); // 10000 milisegundos = 10 segundos
  </script>
</body>
</html>
