<?php


?>

<?php include_once "header.php"; ?>

<body>
  <div class="wrapper">
    <section class="form signup">
      <header>Chat</header>
      <form action="index.php" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>Nombres</label>
            <input type="text" name="fname" placeholder="Nombres" required>
          </div>
          <div class="field input">
            <label>Apellidos</label>
            <input type="text" name="lname" placeholder="Apellidos" required>
          </div>
        </div>
        <div class="field input">
          <label>Correo Electronico</label>
          <input type="text" name="email" placeholder="Correo" required>
        </div>
        <div class="field input">
          <label>Contraseña</label>
          <input type="password" name="password" placeholder="Contraseña" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>Selecciona Imagen</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Crear usuario">
        </div>
      </form>
      <div class="link">Ya tienes cuenta? <a href="index.php">Inicia sesion</a></div>
    </section>
  </div>

  <!-- <script src="/javascript/pass-show-hide.js"></script>
  <script src="/javascript/signup.js"></script> -->

</body>

</html>