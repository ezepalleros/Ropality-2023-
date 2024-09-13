<?php
session_start();
require_once("../connect/connect.php");

if ($con) {
    if (isset($_POST['email']) && isset($_POST['con'])) {
        $email = $_POST['email'];
        $password = $_POST['con'];

        $consulta = "SELECT * FROM usuarios WHERE EMAIL='$email' AND CONTRA=MD5('$password') ";
        $resultado = mysqli_query($con, $consulta);
        $fila = mysqli_fetch_array($resultado);

        if ($fila) {
            if ($fila['ROL'] == 'Admin') {
                $_SESSION = $fila;
                header("Location: ../paginascuenta/kuentadmin.php");
            } else {
                $_SESSION = $fila;
                header("Location: ../paginascuenta/kuentexito.php");
            }
        } else {
            header("Location: ../paginas/konectar.php?error=ok");
        }

        if ($fila && $fila['ESTADO'] == 'baneado') {
            header("Location: ../paginascuenta/kuentaneado.php");
        }
    }
}
?>

