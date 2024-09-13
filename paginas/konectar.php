<?php include_once("../componentes/header.php"); 
require_once("../connect/connect.php");
?>

<div class="image-container">
    <img src="../img/konectar1.png" alt="Konectar" class="centered-image" style="margin-top: 50px; margin-bottom: 30px;">
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <form action="../cuentas/login.php" id="ingresar" method="post">
                <h2>Ingresar</h2>
                <div class="form-group">
                    <label for="email">Correo Electrónico</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="con">Contraseña</label>
                    <input type="password" class="form-control" id="con" name="con" required>
                </div>
                <div class="form-group">
                    <label for="concon">Repetir Contraseña</label>
                    <input type="password" class="form-control" id="concon" name="concon" required>
                </div>
                <button type="submit" id="boton" class="btn btn-warning btn-lg btn-custom" style="margin-top: 30px; margin-bottom: 10px;">Ingresar</button>
            </form>

            <?php
            if (isset($_GET['error'])) {
                print "<strong style='color:red'>Usuario o contraseña incorrectos</strong>";
            }
            ?>
        </div>
    </div>

    <hr class="custom-separator">

    <div class="image-container">
        <img src="../img/konectar2.png" alt="Konectar" class="centered-image" style="margin-top: 50px; margin-bottom: 30px;">
    </div>

    <div class="row">
        <div class="col-md-6 offset-md-3">
            <form action="../cuentas/alta.php" id="registrar" method="post">
                <h2>Registrarse</h2>
                <div class="form-group">
                    <label for="emailR">Correo Electrónico</label>
                    <input type="email" class="form-control" id="emailR" name="emailR" required>
                </div>
                <div class="form-group">
                    <label for="conR">Contraseña</label>
                    <input type="password" class="form-control" id="conR" name="conR" required>
                </div>
                <div class="form-group">
                    <label for="nom">Nombre</label>
                    <input type="text" class="form-control" id="nom" name="nom" required>
                </div>
                <div class="form-group">
                    <label for="ape">Apellido</label>
                    <input type="text" class="form-control" id="ape" name="ape" required>
                </div>
                <button type="submit" class="btn btn-warning btn-lg btn-custom" style="margin-top: 30px; margin-bottom: 10px;">Registrarse</button>
            </form>

            <?php
            if (isset($_GET['alta'])) {
                print "<strong style='color:green'>Ya te puedes loguear</strong>";
            }
            ?>
        </div>
    </div>
</div>

<hr class="custom-separator">


<?php require_once("../componentes/footer.php"); 

?>

<script>
    var con = document.getElementById("con");
    var concon = document.getElementById("concon");

    var boton = document.getElementById("boton");

    var ingresar = document.getElementById("ingresar");

    boton.onclick = function () {
        if (con.value !== concon.value) {
            alert("Las contraseñas no coinciden.");
            return false;
        } else {
            form.action = "../cuentas/login.php";
            return true;
        }
    };
</script>

