<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Elección de Vehículo</title>
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
      display: flex;
      justify-content: center;
      align-items: center;
      flex-wrap: wrap; /* Permite que los elementos se envuelvan (verticalmente en dispositivos móviles) */
    }
    
    .option {
      text-align: center;
      background-color: #528eff; /* Fondo naranja más claro */
      padding: 20px;
      margin: 30px; /* Aumentado el margen entre los elementos */
      border-radius: 20px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.5); /* Sombra más pronunciada */
      width: 300px;
      transition: transform 0.3s ease; /* Transición de escala */
      position: relative; /* Para estar por encima de las esferas */
      z-index: 1; /* Por encima de las esferas */
    }

    .option:hover {
      transform: scale(1.1); /* Aumentar escala al pasar el cursor */
    }
    
    .option-title {
      font-size: 20px;
      color: #242422;
      margin-bottom: 20px;
    }
    
    .option-image {
      width: 100px;
      margin-bottom: 20px;
    }
    
    .ingresar {
      background-color: #b1d7ff; /* Botón azul */
      border: none;
      border-radius: 20px; /* Botón redondeado */
      padding: 10px 20px;
      cursor: pointer;
      font-size: 16px;
      color: #242422;
      text-transform: uppercase;
      transition: background-color 0.3s; /* Transición suave del color de fondo */
    }

    .ingresar:hover {
      background-color: #2980b9; /* Color de fondo más oscuro al pasar el cursor */
    }

    /* Media Query para pantallas pequeñas */
    @media (max-width: 768px) {
      .container {
        flex-direction: column; /* Cambia la dirección del flexbox a vertical */
        align-items: stretch; /* Estira los elementos para ocupar todo el ancho */
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
    <div class="option">
      <h2 class="option-title">Carro</h2>
      <img class="option-image" src="https://png.pngtree.com/png-clipart/20231104/original/pngtree-art-of-simplicity-minimalist-car-in-geometric-harmony-png-image_13504907.png" alt="Carro">
      <form action="parqueaderoc">
        <button class="ingresar" type="submit">Reservar parqueadero</button>
      </form>
    </div>
    <div class="option">
      <h2 class="option-title">Moto</h2>
      <img class="option-image" src="https://images.vexels.me/media/users/3/152376/isolated/preview/c5f4390c69b1c5113cec24502b46cc8e-classic-motorcycle-icon.png" alt="Moto">
      <form action="parqueaderom">
        <button class="ingresar" type="submit">Reservar parqueadero</button>
      </form>
    </div>
  </div>
</body>
</html>
