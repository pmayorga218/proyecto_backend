<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página de Moto</title>
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
    
    .moto-image {
      width: 100%; /* Tamaño de la imagen de moto */
      max-width: 300px; /* Ancho máximo */
      height: auto; /* Altura automática para mantener la proporción */
      margin-bottom: 20px;
    }

    .button-container {
      max-height: 300px; /* Altura máxima del contenedor para dispositivos móviles */
      overflow-y: auto; /* Activar el desplazamiento vertical en dispositivos móviles */
      display: grid; /* Usar un layout de cuadrícula */
      grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); /* Dos columnas con tamaño mínimo de 150px */
      gap: 10px; /* Espacio entre los botones */
    }

    .parqueadero-btn {
      background-color: #b1d7ff; /* Botón azul */
      border: none;
      border-radius: 20px; /* Botón redondeado */
      padding: 10px 20px;
      cursor: pointer;
      font-size: 16px;
      color: #242422;
      text-transform: uppercase;
      width: 100%; /* Ocupar todo el ancho disponible en la columna */
    }

    /* Estilos adicionales para dispositivos móviles */
    @media screen and (max-width: 600px) {
      .container {
        max-width: 100%; /* Ajustar ancho máximo para dispositivos móviles */
      }

      .moto-image {
        max-width: 200px; /* Reducir el ancho máximo de la imagen en dispositivos móviles */
      }
    }

    /* Función hover para el botón */
    .parqueadero-btn:hover {
      background-color: #2980b9; /* Color de fondo más oscuro al pasar el cursor */
    }
  </style>
</head>
<body>
  <div class="sphere"></div>
  <div class="sphere"></div>
  <div class="sphere"></div>
  <div class="sphere"></div>

  <div class="container">
    <h2>Imagen de Moto</h2>
    <img class="moto-image" src="{{asset('imagenes/moto.png')}}" alt="Imagen de Moto">
  </div>
  <div class="container">
    <div class="button-container">
      <!-- Generación de los botones para parqueaderos -->
      <button class="parqueadero-btn">Parqueadero 1</button>
      <button class="parqueadero-btn">Parqueadero 2</button>
      <button class="parqueadero-btn">Parqueadero 3</button>
      <button class="parqueadero-btn">Parqueadero 4</button>
      <button class="parqueadero-btn">Parqueadero 5</button>
      <button class="parqueadero-btn">Parqueadero 6</button>
      <button class="parqueadero-btn">Parqueadero 7</button>
      <button class="parqueadero-btn">Parqueadero 8</button>
      <button class="parqueadero-btn">Parqueadero 9</button>
    </div>
  </div>
</body>
</html>
