<?php include_once "header.php"; ?>

<body>
  <div class="wrapper">
    <section class="chat-area">
      <header>
        <!-- Simulación de usuario -->
        <a href="users.php" class="back-icon"></a>

        <img src="php/images/chatcoin-chat-logo.png" alt="Usuario Ejemplo">

        <div class="details">
          <span>Juan Pérez</span>
          <p>En línea</p>
        </div>

        <div style="margin-left: 30%; display: flex;" class="btn">
          <button type="button" onclick="obtenerLocalizacion()"
            style="border: none; outline: none; padding: 10px; margin-right: 10px; border-radius: 5px; background-color: #333; color: #fff; cursor: pointer;">
            <i class="fa fa-map-marker" aria-hidden="true"></i>
            Localización
          </button>

          <button type="button" onclick="abrirModal()"
            style="border: none; outline: none; padding: 10px; margin-right: 10px; border-radius: 5px; background-color: #333; color: #fff; cursor: pointer;">
            <i class="fa fa-envelope" aria-hidden="true"></i>
            Correo
          </button>
        </div>
      </header>

      <div class="chat-box">
        <!-- Mensajes simulados -->
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
        <input type="text" name="message" id="messageInput" class="input-field" placeholder="Escriba el mensaje aquí..."
          autocomplete="off">
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

  <script src="javascript/chat.js"></script>

</body>

</html>
