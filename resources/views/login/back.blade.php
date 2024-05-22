<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página de Parqueo</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      background-color: #2b62ff; /* Fondo naranja más oscuro */
      display: flex;
      flex-direction: column; /* Alinear elementos verticalmente */
      justify-content: center;
      align-items: center;
      height: 100vh;
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

    .container {
      text-align: center;
      background-color: #528eff; /* Fondo naranja más claro */
      padding: 20px;
      border-radius: 20px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.5); /* Sombra más pronunciada */
      max-width: 90%; /* Ancho máximo del contenedor */
      margin-bottom: 20px; /* Espacio inferior */
      position: relative; /* Para estar por encima de las esferas */
      z-index: 1; /* Por encima de las esferas */
    }

    .button-container {
      display: flex;
      flex-direction: column; /* Alinear los botones verticalmente */
      justify-content: center;
      align-items: center;
      margin-top: 20px;
    }

    .renovar-btn {
      background-color: #2ecc71; /* Verde oscuro */
      border: none;
      border-radius: 10px;
      padding: 15px 30px;
      cursor: pointer;
      font-size: 16px;
      color: #fff;
      text-transform: uppercase;
      margin-bottom: 10px; /* Espacio entre botones */
    }

    .salir-btn {
      background-color:  #b1d7ff; /* Azul */
      border: none;
      border-radius: 5px;
      padding: 10px 20px;
      cursor: pointer;
      font-size: 14px;
      color: #242422;
      text-transform: uppercase;
    }
  </style>
</head>
<body>
  <!-- Esferas -->
  <div class="sphere"></div>
  <div class="sphere"></div>
  <div class="sphere"></div>
  <div class="sphere"></div>

  <div class="container">
    <h2>Renovar Tiempo de Parqueo</h2>
    <div class="button-container">
      <button class="renovar-btn">Renovar Tiempo</button>
      <button class="salir-btn">Salir</button>
    </div>
  </div>
</body>
</html>

