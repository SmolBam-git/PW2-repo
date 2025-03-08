<?php include_once "header.php"; ?>

<body>
  <div class="wrapper">
    <section class="users">
      <header>
        <div class="content">
          <!-- Usuario actual simulado -->
          <img src="images/chatcoin-chat-logo.png" class="user-img" alt="">
          <div class="details">
            <span>Juan Pérez</span>
            <p>En línea</p>
          </div>
        </div>
        <a href="php/logout.php" class="logout">Cerrar sesión</a>
        <a href="./createGroup.php" class="logout">Crear Grupo</a>
      </header>

      <div class="search">
        <span class="text">Selecciona para hablar!</span>
        <input type="text" placeholder="Ingrese un nombre a buscar...">
        <button><i class="fas fa-search"></i></button>
      </div>

      <!-- Lista de usuarios simulados -->
      <div class="users-list">
        <div class="user">
          <img src="images/CatPillow.jpg" class="user-img" alt="">
          <div class="details">
            <span>María Gómez</span>
            <p>Desconectado</p>
          </div>
        </div>

        <div class="user">
          <img src="images/witchCrAfT.png" class="user-img" alt="">
          <div class="details">
            <span>Carlos López</span>
            <p>En línea</p>
          </div>
        </div>

        <div class="user">
          <img src="images/cv.jpg" class="user-img" alt="">
          <div class="details">
            <span>Fernanda Ruiz</span>
            <p>Escribiendo...</p>
          </div>
        </div>
      </div>
    </section>
  </div>

  <style>
    .user-img {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      object-fit: cover;
    }
  </style>

  <script src="javascript/users.js"></script>
</body>
</html>
