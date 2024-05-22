<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Seleccionar Horarios</title>
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
      position: relative; /* Para posicionar las esferas */
      z-index: 1; /* Por encima de las esferas */
      transition: background-color 0.3s ease, transform 0.3s ease; /* Transición suave */
    }

    .container:hover {
      background-color: #4275ff; /* Cambio de color al pasar el cursor */
      transform: scale(1.05); /* Aumentar escala al pasar el cursor */
    }

    .checkbox-container {
      display: flex;
      flex-direction: column; /* Alinear los checkboxes verticalmente */
      align-items: center;
    }

    .checkbox-btn {
      margin-bottom: 10px; /* Espacio entre los checkboxes */
    }

    .button {
      background-color: #b1d7ff;
      border: none;
      color: #242422;
      padding: 15px 30px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin-top: 20px;
      border-radius: 10px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .button:hover {
      background-color: #2980b9;
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
    <h2>Seleccionar Horarios</h2>
    <form action="{{route('anuncio')}}" method="get">
      <div class="checkbox-container">
        <input type="checkbox" id="hora6" name="horario" value="9:15am" class="checkbox-btn">
        <label for="hora6">6:00am - 9:15am</label><br>
        <input type="checkbox" id="hora9" name="horario" value="12:15pm" class="checkbox-btn">
        <label for="hora9">9:15am - 12:15pm</label><br>
        <input type="checkbox" id="hora12" name="horario" value="3:15pm" class="checkbox-btn">
        <label for="hora12">12:15pm - 3:15pm </label><br>
        <input type="checkbox" id="hora15" name="horario" value="6:15pm" class="checkbox-btn">
        <label for="hora15">3:15pm - 6:15pm</label><br>
        <input type="checkbox" id="hora18" name="horario" value="9:15pm" class="checkbox-btn">
        <label for="hora18">6:15pm - 9:15pm</label><br>
        <input type="checkbox" id="hora21" name="horario" value="10:00pm" class="checkbox-btn">
        <label for="hora21">9:15pm - 10:00pm</label><br>
      </div>
      <button onclick="confirmarSeleccion()" class="button">Seleccionar Sección</button>
    </form>
    
   
  </div>

  <script>
    function confirmarSeleccion() {
      var checkboxes = document.querySelectorAll('input[type="checkbox"]:checked');
      if (checkboxes.length > 0) {
        if (confirm("Recuerda que si tu vehículo no está en este horario se te pondrá una multa. ¿Estás seguro de continuar?")) {
          window.location.href = "anuncio";
        }
      }
    }
  </script>
</body>
</html>
