<?php include_once "header.php"; ?>

<head>
  <!-- Agregar el archivo CSS -->
  <link rel="stylesheet" href="styles.css">
</head>

<body>
  <div class="wrapper">
    <!-- COLUMNA 1: SERVIDORES -->
<aside class="servers" style="flex: 0 0 15%; background-color: rgb(73, 73, 73); padding: 20px; overflow-y: auto;">
  <h3 style="margin-bottom: 20px;">Servidores</h3>
  
<!-- Add -->
  <div class="server" style="margin-bottom: 15px;">
    <img src="./images/add.png" alt="Servidor 1" style="width: 35%; border-radius: 10px; object-fit: cover;">
    <span><strong>Añadir Servidor</strong></span>
  </div>

  <!-- Servidor 1 -->
  <div class="server" style="margin-bottom: 15px;">
    <img src="./images/server1.jpg" alt="Servidor 1" style="width: 40%; border-radius: 10px; object-fit: cover;">
  </div>

  <!-- Servidor 2 -->
  <div class="server" style="margin-bottom: 15px;">
    <img src="./images/server2.png" alt="Servidor 2" style="width: 40%; border-radius: 10px; object-fit: cover;">
  </div>

  <!-- Servidor 3 -->
  <div class="server" style="margin-bottom: 15px;">
    <img src="./images/server3.png" alt="Servidor 3" style="width: 40%; border-radius: 10px; object-fit: cover;">
  </div>
  
  <!-- Agrega más servidores si quieres -->
</aside>


    <!-- COLUMNA 2: CONTACTOS -->
    <aside class="contacts" style="flex: 0 0 15%; background-color: rgb(73, 73, 73); border-left: 1px solid #ccc; padding: 20px; display: flex; flex-direction: column; justify-content: space-between;">
  
  <!-- CONTENEDOR DE CONTACTOS -->
<div style="display: flex; flex-direction: column;">
  <h3 style="margin-bottom: 20px;">Contactos</h3>

  <!-- Add -->
  <div style="display: flex; align-items: center; margin-bottom: 15px; cursor: pointer;">
    <img src="./images/add.png" alt="Ana Gómez" style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover; margin-right: 10px;">
    <span><strong>Añadir Contacto</strong></span>
  </div>

  <!-- Contacto 1 -->
  <div style="display: flex; align-items: center; margin-bottom: 15px; cursor: pointer;">
    <img src="./images/user1.jpg" alt="Ana Gómez" style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover; margin-right: 10px;">
    <span><strong>Ana Gómez</strong></span>
  </div>

  <!-- Contacto 2 -->
  <div style="display: flex; align-items: center; margin-bottom: 15px; cursor: pointer;">
    <img src="./images/user2.jpg" alt="Carlos Ruiz" style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover; margin-right: 10px;">
    <span><strong>Carlos Ruiz</strong></span>
  </div>

  <!-- Contacto 3 -->
  <div style="display: flex; align-items: center; margin-bottom: 15px; cursor: pointer;">
    <img src="./images/user3.jpg" alt="Rafael Cortez" style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover; margin-right: 10px;">
    <span><strong>Rafael Orta</strong></span>
  </div>
</div>

  <!-- Usuario actual anclado -->
  <a href="users.php" style="display: flex; align-items: center; margin-top: 20px; padding: 10px; background-color: #2e2e2e; border-radius: 10px; text-decoration: none; color: white; cursor: pointer;">
    <img src="./images/user.jpg" alt="Tú" style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover; margin-right: 10px;">
    <div>
      <strong>Tú</strong>
      <p style="margin: 10px; font-size: 12px; color: #ccc;">Ver perfil</p>
    </div>
  </a>
</aside>


</a>

    <!-- COLUMNA 3: CHAT -->
    <section class="chat-area" style="flex: 1; background-color: #1f1f1f; color: white;">

      <header>
        <a href="users.php" class="back-icon"></a>
        <img src="./images/user1.jpg" alt="Usuario Ejemplo" style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover; margin-right: 10px;">
        <div class="details">
          <span>Ana Gómez</span>
          <p>En línea</p>
        </div>
        <div style="margin-left: auto; display: flex;" class="btn">
          <button type="button" onclick="obtenerLocalizacion()" class="btn-dark">
            <i class="fa fa-map-marker" aria-hidden="true"></i> Localización
          </button>
          <button type="button" onclick="abrirModal()" class="btn-dark">
            <i class="fa fa-envelope" aria-hidden="true"></i> Correo
          </button>
        </div>
      </header>

      <div class="chat-box">
      <!-- MENSAJE SALIENTE (TÚ) -->
      <div class="chat outgoing">
        <img src="./images/user.jpg" alt="Tú" style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover; margin-left: 10px; margin-top: 5px; margin-bottom: 5px;">
        <div class="details">
          <span style="display: block; font-size: 12px; color: #ccc;">Tú</span>
          <p>¡Hola Ana! ¿Cómo estás?</p>
        </div>
      </div>

      <!-- MENSAJE ENTRANTE (ANA GÓMEZ) -->
      <div class="chat incoming">
        <img src="./images/user1.jpg" alt="Ana Gómez" style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover; margin-right: 10px; margin-top: 5px; margin-bottom: 5px;">
        <div class="details">
          <span style="display: block; font-size: 12px; color: #ccc;">Ana Gómez</span>
          <p>¡Hola! Todo bien, ¿y tú?</p>
        </div>
      </div>

      <!-- MENSAJE SALIENTE (TÚ) -->
      <div class="chat outgoing">
        <img src="./images/user.jpg" alt="Tú" style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover; margin-left: 10px; margin-top: 5px; margin-bottom: 5px;">
        <div class="details">
          <span style="display: block; font-size: 12px; color: #ccc;">Tú</span>
          <p>Bien, gracias. ¿Nos vemos mañana?</p>
        </div>
      </div>

      <!-- MENSAJE ENTRANTE (ANA GÓMEZ) -->
      <div class="chat incoming">
        <img src="./images/user1.jpg" alt="Ana Gómez" style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover; margin-right: 10px; margin-top: 5px; margin-bottom: 5px;">
        <div class="details">
          <span style="display: block; font-size: 12px; color: #ccc;">Ana Gómez</span>
          <p>Claro, ¿a qué hora?</p>
        </div>
      </div>
    </div>

    <form action="#" class="typing-area">
        <input type="text" name="message" id="messageInput" class="input-field" placeholder="Escriba el mensaje aquí..." autocomplete="off">
        <button><i class="fab fa-telegram-plane"></i></button>
      </form>
    </section>
  </div>



  <!-- <div id="myModal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="cerrarModal()">&times;</span>
      <h2>Enviar Correo a Ana Gomez:</h2>
      <form id="correoForm">
        <label for="asunto">Asunto:</label>
        <input type="text" id="asunto" name="asunto" placeholder="Asunto..." required>
        <br>
        <label for="mensaje">Mensaje:</label>
        <textarea id="mensaje" name="mensaje" placeholder="..." required></textarea>
        <button type="button" style="margin-top:30px; border-radius:3px" onclick="enviarCorreo()">Enviar</button>
      </form>
    </div>
  </div> -->

  <!-- <script src="javascript/chat.js"></script> -->
</body>
</html>
