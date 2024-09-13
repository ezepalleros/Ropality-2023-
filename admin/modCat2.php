<?php
include_once("../componentes_admin/Aheader.php");
require_once("../connect/connect.php");
require_once("../cuentas/admin.php");

if ($con) {
    if (isset($_GET['mod'])) {
        $mod = $_GET['mod'];
    }
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    }

    $consulta = "UPDATE categorias SET nombreCategoria='$mod' WHERE idCategoria='$id'";
    $resultado = mysqli_query($con, $consulta);

    if ($resultado) {
        print "
            <div class='container text-center' style='margin-top: 125px'>
                <h1 class='text-warning'>La categoría fue modificada a $mod</h1>
                <a href='index.php' class='btn btn-warning btn-lg'>Volver</a>
            </div>";
    }
}

require_once("../componentes_admin/Afooter.php");
?>
