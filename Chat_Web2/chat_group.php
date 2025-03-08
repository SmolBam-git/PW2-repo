<?php include_once "header.php"; ?>

<body>
  <div class="wrapper">
    <section class="chat-area">
      <header>
        <!-- Simulación de datos del grupo -->
        <a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
        <img src="images/cv.jpg" alt="Grupo Ejemplo">
        <div class="details">
          <span>Grupo Amigos</span>
          <p>Activo</p>
        </div>
      </header>

      <div class="chat-box">
        <!-- Mensajes de prueba en el grupo -->
        <div class="chat outgoing">
          <div class="details">
            <p>¡Hola a todos! ¿Cómo están?</p>
          </div>
        </div>

        <div class="chat incoming">
          <img src="images/CatPillow.jpg" alt="Usuario 1">
          <div class="details">
            <p>¡Hola! Todo bien, ¿y tú?</p>
          </div>
        </div>

        <div class="chat incoming">
          <img src="images/witchCrAfT.png" alt="Usuario 2">
          <div class="details">
            <p>¿A qué hora nos vemos mañana?</p>
          </div>
        </div>

        <div class="chat outgoing">
          <div class="details">
            <p>Podría ser a las 6 p.m.</p>
          </div>
        </div>
      </div>

      <form action="#" class="typing-area">
        <input type="text" name="message" class="input-field" placeholder="Escriba el mensaje aquí..." autocomplete="off">
        <button><i class="fab fa-telegram-plane"></i></button>
      </form>
    </section>
  </div>

  <script src="javascript/chat_group.js"></script>

</body>

</html>
