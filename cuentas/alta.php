<?php
session_start();
require_once("../connect/connect.php");

if ($con) {
    if (isset($_POST['emailR']) && isset($_POST['conR']) && isset($_POST['nom']) && isset($_POST['ape'])) {
        $email = $_POST['emailR'];
        $conR = $_POST['conR'];
        $nom = $_POST['nom'];
        $ape = $_POST['ape'];

        $consulta = "INSERT INTO usuarios SET NOMBRE='$nom', APELLIDO='$ape', EMAIL='$email', CONTRA=MD5('$conR'), ROL='usuario', FECHA_ALTA=NOW() ";
        mysqli_query($con, $consulta);

        header("Location: ../paginas/konectar.php?alta=ok");
    }
}

?>
