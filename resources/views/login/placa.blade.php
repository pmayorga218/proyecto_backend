<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reservar Parqueadero</title>
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
      max-width: 80%; /* Ancho máximo del contenedor */
      transition: transform 0.3s ease; /* Transición de agrandamiento */
      position: relative; /* Para estar por encima de las esferas */
      z-index: 1; /* Por encima de las esferas */
    }

    /* Efecto hover para el contenedor */
    .container:hover {
      transform: scale(1.1); /* Agrandamiento al pasar el cursor */
    }
    
    .titulo {
      font-size: 24px;
      color: #242422;
      margin-bottom: 20px;
    }
    
    .placa-image {
      width: 200px;
      margin-bottom: 20px;
    }
    
    .input-placa {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border-radius: 10px;
      border: 1px solid #ccc;
      box-sizing: border-box;
      font-size: 16px;
      max-width: 150px; /* Ancho máximo del input en dispositivos móviles */
      text-transform: uppercase; /* Convertir el texto ingresado en mayúsculas */
    }
    
    .reservar-btn {
      background-color: #b1d7ff; /* Botón azul */
      border-radius: 20px; /* Botón redondeado */
      padding: 10px 20px;
      border: none;
      cursor: pointer;
      font-size: 16px;
      color: #242422;
      text-transform: uppercase;
      transition: background-color 0.3s ease; /* Transición de cambio de color */
    }

    /* Efecto hover para el botón */
    .reservar-btn:hover {
      background-color: #2980b9; /* Color de fondo más oscuro al pasar el cursor */
    }

    /* Media Query para dispositivos móviles */
    @media (max-width: 768px) {
      .container {
        padding: 10px; /* Ajuste del padding */
        max-width: 90%; /* Reducción del ancho máximo del contenedor en dispositivos móviles */
      }
      
      .titulo {
        font-size: 20px; /* Ajuste del tamaño del título */
      }
      
      .placa-image {
        width: 150px; /* Ajuste del tamaño de la imagen */
      }
      
      .input-placa {
        font-size: 14px; /* Ajuste del tamaño de la fuente */
        max-width: 100px; /* Reducción del ancho máximo del input en dispositivos móviles */
      }
    }
  </style>
</head>
<body>
  <div class="sphere"></div>
  <div class="sphere"></div>
  <div class="sphere"></div>
  <div class="sphere"></div>
  <div class="container">
    <h2 class="titulo">Digita tu placa</h2>
    <img class="placa-image" src="https://blog.andina.com.co/wp-content/uploads/2015/09/placas-amarilla.png" alt="Placa Amarilla">
    <form action="eleccion">
      <input class="input-placa" type="text" placeholder="Placa" maxlength="6">
      <button class="reservar-btn" type="submit">Reservar Parqueadero</button>
    </form>
  </div>
</body>
</html>
