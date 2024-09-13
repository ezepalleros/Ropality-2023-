<?php
include_once("../componentes/header.php");
?>

<?php
$nombre;
$correo;
$color;
$tipo;
$comentario;
$img;
?>

<div class="container">

    <img src="../img/subir121.png" alt="subir" style="margin-top: 20px; margin-bottom: 0px; display: block;">

    <img src="../img/subir2.png" alt="subir" style="margin-top: 20px; margin-bottom: 0px; display: block; margin-left: auto; margin-right: auto;">

    <div style="display: flex; align-items: center;">
        <img src="../img/subir3.png" alt="subir" style="margin-top: 20px; margin-bottom: 30px; display: block;">

        <?php
        if (isset($_POST["nombre"])) {
            $nombre = $_POST["nombre"];
            print "<h1 class='estilo-personalizado'>$nombre</h1>";
        }
        ?>

    </div>

    <div style="display: flex; align-items: center;">
        <img src="../img/subir4.png" alt="subir" style="margin-top: 20px; margin-bottom: 30px; display: block;">

        <?php
        if (isset($_POST["correo"])) {
            $correo = $_POST["correo"];
            print "<h1 class='estilo-personalizado'>$correo</h1>";
        }
        ?>

    </div>

    <div style="display: flex; align-items: center;">
        <img src="../img/subir5.png" alt="subir" style="margin-top: 20px; margin-bottom: 30px; display: block;">

        <?php
        if (isset($_POST["color"])) {
            $color = $_POST["color"];
            print "<div style='margin-left: 20px; font-size: 24px;'>";
            print "<div style='width: 1000px; height: 50px; background-color: $color; display: inline-block;'></div>";
            print "</div>";
        }
        ?>
    </div>

    <div style="display: flex; align-items: center;">
        <img src="../img/krear5.png" alt="subir" style="margin-top: 20px; margin-bottom: 30px; display: block;">

        <?php
        if (isset($_POST["tipo"])) {
            $tipo = $_POST["tipo"];
            print "<h1 class='estilo-personalizado'>$tipo</h1>";
        }
        ?>
    </div>

    <div style="display: flex; align-items: center;">
        <img src="../img/subir7.png" alt="subir" style="margin-top: 20px; margin-bottom: 30px; display: block;">


        <?php
        if (isset($_POST["comentario"])) {
            $comentario = $_POST["comentario"];
            print "<div style='margin-left: 20px; font-size: 24px; border: 1px solid #000; padding: 10px; max-height: 200px; overflow-y: auto;'>";
            print $comentario;
            print "</div>";
        }
        ?>
    </div>

    <div style="display: flex; flex-direction: column; align-items: flex-start;">
        <img src="../img/subir8.png" alt="subir" style="margin-top: 20px; margin-bottom: 30px; display: block;">

        <?php
        if (isset($_FILES['img'])) {
            $img = time() . ".jpg";
            $temporal = $_FILES['img']['tmp_name'];
            move_uploaded_file($temporal, "../archivos/$img");
            echo "<div style='display: flex; align-items: center;'>";
            echo "<img src='../archivos/$img' alt='imagen subida'>";
            echo "</div>";
        }
        ?>
    </div>



    <div style="display: flex; align-items: center;">
        <img src="../img/subir9.png" alt="subir" style="margin-top: 40px; margin-bottom: 30px; display: block;">
    </div>

    <?php
    if (isset($_FILES['img'])) {
        $nombre = $_FILES["img"]["name"];
        $tipo = $_FILES["img"]["type"];
        $temporal = $_FILES["img"]["tmp_name"];
        $errores = $_FILES["img"]["error"];
        $tamaño = $_FILES["img"]["size"];

        print "<ul class='estilo-personalizado2'>";
        print "<li>Nombre: $nombre</li>";
        print "<li>Tipo: $tipo</li>";
        print "<li>Destino temporal: $temporal</li>";
        print "<li>Errores: $errores</li>";
        print "<li>Tamaño: $tamaño bytes</li>";
        print "</ul>";

        $arch = $_FILES["img"]["name"];

        move_uploaded_file($_FILES["img"]["tmp_name"], "../archivos/$arch");
    }
    ?>



    <hr class="custom-separator">



</div>

<?php
require_once("../componentes/footer.php");
?>