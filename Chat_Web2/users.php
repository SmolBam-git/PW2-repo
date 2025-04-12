<?php include_once "header.php"; ?>

<head>
  <link rel="stylesheet" href="styles.css">
</head>

<body>
  <div class="wrapper" style="display: flex; height: 100vh; background-color: #1f1f1f; color: white;">

    <!-- COLUMNA LATERAL (puede mantenerse como en otras páginas) -->
    <aside class="servers" style="flex: 0 0 15%; background-color: rgb(73, 73, 73); padding: 20px; overflow-y: auto;">
  <h3 style="margin-bottom: 20px;">Servidores</h3>
  
  <!-- Add -->
  <div class="server" style="margin-bottom: 15px;">
    <img src="./images/add.png" alt="Servidor 1" style="width: 35%; border-radius: 10px; object-fit: cover;">
    <span><strong>Añadir Servidor</strong></span>
  </div>

  <!-- Servidor 1 -->
  <div class="server">
    <a href="server.php" class="server-link">
    <img src="./images/server1.jpg" alt="Servidor 1">
    </a>
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

  <!-- Usuario actual anclado -->
  <a href="users.php" style="display: flex; align-items: center; margin-top: 20px; padding: 10px; background-color: #2e2e2e; border-radius: 10px; text-decoration: none; color: white; cursor: pointer;">
    <img src="./images/user.jpg" alt="Tú" style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover; margin-right: 10px;">
    <div>
      <strong>Tú</strong>
      <p style="margin: 10px; font-size: 12px; color: #ccc;">Ver perfil</p>
    </div>
  </a>
</aside>

    <!-- CONTENIDO PRINCIPAL: PERFIL -->
    <section style="flex: 1; padding: 40px; display: flex; justify-content: center; align-items: center;">
      <div style="background-color: #2e2e2e; padding: 40px; border-radius: 15px; width: 60%; max-width: 700px;">
        <div style="text-align: center; margin-bottom: 30px;">
          <img src="./images/user.jpg" alt="Tú" style="width: 120px; height: 120px; border-radius: 50%; object-fit: cover;">
          <h2 style="margin-top: 15px;">Hernán Romero</h2>
          <p style="color: #aaa;">En línea</p>
        </div>

        <hr style="border-color: #444; margin: 30px 0;">

        <div style="line-height: 2;">
          <p><strong>Correo electrónico:</strong> hernan@hotmail.com</p>
          <p><strong>Miembro desde:</strong> Enero 2025</p>
          <p><strong>Contraseña:</strong> ******      <i class="fas fa-eye"></i></p>
        </div>

        <div style="margin-top: 30px; text-align: center;">
          <a href=" " class="btn-dark" style="padding: 10px 20px; background-color: #444; color: white; border-radius: 8px; text-decoration: none;">Editar Campos</a>
        </div>

        <div style="margin-top: 30px; text-align: center;">
          <a href="index.php" class="btn-dark" style="padding: 10px 20px; background-color: #444; color: white; border-radius: 8px; text-decoration: none;">Cerrar Sesión</a>
        </div>
      </div>
    </section>
  </div>

</body>
</html>
