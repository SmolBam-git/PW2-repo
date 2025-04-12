<?php 
  
  
?>

<?php include_once "header.php"; ?>

<head>
  <!-- Agregar el archivo CSS -->
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="wrapper">
    <section class="form login">
      <header>Inicio de Sesión</header>
      <form action="./chat.php" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Correo</label>
          <input type="text" name="email" placeholder="Ingresa tu correo" required>
        </div>
        <div class="field input">
          <label>Contraseña</label>
          <input type="password" name="password" placeholder="Ingresa tu contraseña" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Inicia sesion">
        </div>
      </form>
      <div class="link">No tienes cuenta? <a href="./register.php">Crea tu cuenta!</a></div>
    </section>
  </div>
  
  <script src="javascript/pass-show-hide.js"></script>
  <!-- <script src="javascript/login.js"></script> -->

</body>
</html>
