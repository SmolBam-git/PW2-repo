<?php include_once "header.php"; ?>

<body>
    <div class="wrapper">
        <section class="form signup">
            <header>
                <a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
                Crear Grupo
            </header>

            <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
                <div class="error-text"></div>

                <div class="name-details-group">
                    <div class="field input">
                        <label>Nombre Grupo</label>
                        <input type="text" name="fname" placeholder="Nombre" required>
                    </div>
                </div>

                <div class="field image">
                    <label>Selecciona imagen</label>
                    <input type="file" name="image" accept="image/x-png,image/jpeg,image/jpg" required>
                </div>

                <div class="user_invite">
                    <div class="name-details-group">
                        <label>Selecciona a los usuarios</label>
                    </div>

                    <!-- Simulación de usuarios -->
                    <div class="users-list">
                        <div class="user">
                            <input type="checkbox" name="users[]" value="1">
                            <img src="images/CatPillow.jpg" width="30" height="30"> Juan Pérez
                        </div>
                        <div class="user">
                            <input type="checkbox" name="users[]" value="2">
                            <img src="images/cv.jpg" width="30" height="30"> María Gómez
                        </div>
                        <div class="user">
                            <input type="checkbox" name="users[]" value="3">
                            <img src="images/witchCrAfT.png" width="30" height="30"> Carlos López
                        </div>
                    </div>
                </div>

                <div class="field button">
                    <input type="submit" name="submit" value="Crear grupo">
                </div>
            </form>
        </section>
    </div>

    <script src="javascript/creategroup.js"></script>

</body>
</html>
