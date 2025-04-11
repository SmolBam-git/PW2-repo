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
      <div class="server">
        <img src="php/images/servidor1.jpg" alt="Servidor 1" />
      </div>
      <div class="server">
        <img src="php/images/servidor2.jpg" alt="Servidor 2" />
      </div>
      <div class="server">
        <img src="php/images/servidor3.jpg" alt="Servidor 3" />
      </div>
      <!-- Más servidores si es necesario -->
    </aside>

    <!-- COLUMNA 2: CONTACTOS -->
    <aside class="contacts" style="flex: 0 0 15%; background-color: rgb(73, 73, 73); border-left: 1px solid #ccc; padding: 20px; overflow-y: auto;">
      <h3 style="margin-bottom: 20px;">Contactos</h3>

      <!-- CONTACTO 1 -->
      <div style="display: flex; align-items: center; margin-bottom: 15px; cursor: pointer;">
        <img src="php/images/contacto1.jpg" alt="Ana Gómez" style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover; margin-right: 10px;">
        <span><strong>Ana Gómez</strong></span>
      </div>

      <!-- CONTACTO 2 -->
      <div style="display: flex; align-items: center; margin-bottom: 15px; cursor: pointer;">
        <img src="php/images/contacto2.jpg" alt="Carlos Ruiz" style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover; margin-right: 10px;">
        <span><strong>Carlos Ruiz</strong></span>
      </div>

      <!-- CONTACTO 3 -->
      <div style="display: flex; align-items: center; margin-bottom: 15px; cursor: pointer;">
        <img src="php/images/contacto3.jpg" alt="María López" style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover; margin-right: 10px;">
        <span><strong>María López</strong></span>
      </div>

      <!-- GRUPO -->
      <div style="display: flex; align-items: center; margin-top: 30px; cursor: pointer;">
        <img src="php/images/grupo1.jpg" alt="Grupo Amigos" style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover; margin-right: 10px;">
        <span><strong>Grupo: Amigos</strong></span>
      </div>
    </aside>

    <!-- COLUMNA 3: CHAT -->
    <section class="chat-area" style="flex: 1; background-color: #1f1f1f; color: white;">
      <header>
        <a href="users.php" class="back-icon"></a>
        <img src="php/images/chatcoin-chat-logo.png" alt="Usuario Ejemplo">
        <div class="details">
          <span>Juan Pérez</span>
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
        <div class="chat outgoing">
          <div class="details">
            <p>¡Hola Juan! ¿Cómo estás?</p>
          </div>
        </div>
        <div class="chat incoming">
          <img src="php/images/chatcoin-chat-logo.png" alt="Juan Pérez">
          <div class="details">
            <p>¡Hola! Todo bien, ¿y tú?</p>
          </div>
        </div>
        <div class="chat outgoing">
          <div class="details">
            <p>Bien, gracias. ¿Nos vemos mañana?</p>
          </div>
        </div>
        <div class="chat incoming">
          <img src="php/images/chatcoin-chat-logo.png" alt="Juan Pérez">
          <div class="details">
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

  <!-- Modal -->
  <div id="myModal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="cerrarModal()">&times;</span>
      <h2>Enviar Correo a Juan Pérez:</h2>
      <form id="correoForm">
        <label for="asunto">Asunto:</label>
        <input type="text" id="asunto" name="asunto" placeholder="Asunto..." required>
        <br>
        <label for="mensaje">Mensaje:</label>
        <textarea id="mensaje" name="mensaje" placeholder="..." required></textarea>
        <button type="button" style="margin-top:30px; border-radius:3px" onclick="enviarCorreo()">Enviar</button>
      </form>
    </div>
  </div>

  <!-- <script src="javascript/chat.js"></script> -->
</body>
</html>
