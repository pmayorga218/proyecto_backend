<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar sesión con Google</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      background-color: #2b62ff; /* Fondo azul más oscuro */
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
      position: relative; /* Para posicionar el contenedor */
      background-color: #528eff; /* Fondo azul más claro */
      padding: 40px; /* Espaciado interno */
      border-radius: 20px; /* Borde redondeado */
      box-shadow: 0 0 30px rgba(0, 0, 0, 200); /* Sombra */
      max-width: 80%; /* Ancho máximo */
      transition: transform 0.3s ease; /* Transición de agrandamiento */
      backdrop-filter: blur(10px); /* Filtro de desenfoque */
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      z-index: 1; /* Por encima de las esferas */
    }
    
    .logo {
      width: 80px; /* Tamaño del logo */
      margin-bottom: 20px; /* Espaciado inferior */
    }
    
    .welcome-text {
      font-size: 14px; /* Tamaño del texto */
      color: #242422; /* Color de texto */
      margin-bottom: 20px; /* Espaciado inferior */
    }
    
    .google-login {
      background-color: #b1d7ff; /* Color de fondo del botón */
      border-radius: 50%; /* Borde redondeado */
      padding: 15px; /* Espaciado interno */
      border: none; /* Sin borde */
      cursor: pointer; /* Cursor de ratón */
      font-size: 16px; /* Tamaño del texto */
      color: #fff; /* Color del texto */
      text-transform: uppercase; /* Convertir a mayúsculas */
      transition: background-color 0.3s ease; /* Transición de color */
      width: 50px; /* Ancho */
      height: 50px; /* Alto */
      display: flex;
      justify-content: center;
      align-items: center;
    }
    
    .google-login img {
      vertical-align: middle; /* Alinear verticalmente */
    }

    /* Media Query para dispositivos móviles */
    @media (max-width: 768px) {
      .container {
        max-width: 90%; /* Ancho máximo en dispositivos móviles */
        padding: 20px; /* Espaciado interno */
      }
      
      .welcome-text {
        font-size: 12px; /* Tamaño del texto */
      }
    }

    /* Efecto de agrandamiento al pasar el mouse */
    .container:hover {
      transform: scale(1.05); /* Agrandar en un 5% */
    }

    /* Cambiar el color del botón al pasar el mouse */
    .google-login:hover {
      background-color: #000; /* Cambiar a negro */
    }
  </style>
</head>
<body>
  <div class="sphere"></div>
  <div class="sphere"></div>
  <div class="sphere"></div>
  <div class="sphere"></div>
  <div class="container">
    <img class="logo" src="https://colombiaestudia.com/wp-content/uploads/2023/02/logo_unab-virtual.png" alt="UNAB Logo">
    <h2>LOGIN</h2>
    <p class="welcome-text">Inicia sesión con el correo de la UNAB</p>
    <form action="placa.html">
      <button class="google-login" type="submit">
        <img src="https://rotulosmatesanz.com/wp-content/uploads/2017/09/2000px-Google_G_Logo.svg_.png" alt="Google Logo" height="20">
      </button>
    </form>
  </div>
</body>
</html>
