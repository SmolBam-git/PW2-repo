<?php include_once "header.php"; ?>

<head>
  <link rel="stylesheet" href="styles.css">
</head>

<body>
<div class="wrapper" style="display: flex; height: 100vh; background-color: #1f1f1f; color: white;">
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
  <div style="display: flex; align-items: center; margin-bottom: 15px; cursor: pointer">
    <a href="chat.php" class="chat-link">
    <img src="./images/user1.jpg" alt="Ana Gómez">
    </a>
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

  <a href="users.php" style="display: flex; align-items: center; margin-top: 20px; padding: 10px; background-color: #2e2e2e; border-radius: 10px; text-decoration: none; color: white; cursor: pointer;">
    <img src="./images/user.jpg" alt="Tú" style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover; margin-right: 10px;">
    <div>
      <strong>Tú</strong>
      <p style="margin: 10px; font-size: 12px; color: #ccc;">Ver perfil</p>
    </div>
  </a>
</aside>


</a>

    <section class="chat-area" style="flex: 1; background-color: #1f1f1f; color: white">

      <header>
        <a href="users.php" class="back-icon"></a>
        <img src="./images/server1.jpg" alt="Usuario Ejemplo" style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover; margin-right: 10px;">
        <div class="details">
          <span>la clika pa'</span>
          <p>Servidor</p>
        </div>

        <div style="display: flex; align-items: center; margin-left: 30px;">
    <span style="margin-right: 10px; color: white;">Canales</span>
    <select style="padding: 5px; border-radius: 5px; background-color: #444; color: white; border: none;">
      <option>General</option>
      <option>Arte</option>
      <option>Torneo de piedra, papel o tijera por turnos</option>
      <option>+ Agregar Canal</option>
      <option>- Eliminar Canal</option>
    </select>
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
        <img src="./images/user.jpg" alt="Tú" style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover; margin-left: 10px; margin-top: 5px; margin-bottom: 5px;">
        <div class="details">
          <span style="display: block; font-size: 12px; color: #ccc;">Tú</span>
          <p>anda bien awitado esto</p>
        </div>
      </div>

      <div class="chat incoming">
        <img src="./images/user1.jpg" alt="Ana Gómez" style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover; margin-right: 10px; margin-top: 5px; margin-bottom: 5px;">
        <div class="details">
          <span style="display: block; font-size: 12px; color: #ccc;">Ana Gómez</span>
          <p>son las 4am w</p>
        </div>
      </div>

      <div class="chat outgoing">
        <img src="./images/user.jpg" alt="Tú" style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover; margin-left: 10px; margin-top: 5px; margin-bottom: 5px;">
        <div class="details">
          <span style="display: block; font-size: 12px; color: #ccc;">Tú</span>
          <p>y luego</p>
        </div>
      </div>

      <div class="chat incoming">
        <img src="./images/user3.jpg" alt="Ana Gómez" style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover; margin-right: 10px; margin-top: 5px; margin-bottom: 5px;">
        <div class="details">
          <span style="display: block; font-size: 12px; color: #ccc;">Rafael Orta</span>
          <p>mímete un rato</p>
        </div>
      </div>
    </div>

    <form action="#" class="typing-area">
        <input type="text" name="message" id="messageInput" class="input-field" placeholder="Escriba el mensaje aquí..." autocomplete="off">
        <button><i class="fab fa-telegram-plane"></i></button>
      </form>
    </section>
  </div>

  <script>
    // Mostrar el contenido del dropdown al hacer hover
    document.querySelector('.dropdown').addEventListener('mouseenter', function() {
      this.querySelector('.dropdown-content').style.display = 'block';
    });
    document.querySelector('.dropdown').addEventListener('mouseleave', function() {
      this.querySelector('.dropdown-content').style.display = 'none';
    });
  </script>

  <!-- <script src="javascript/chat.js"></script> -->
</body>
</html>
