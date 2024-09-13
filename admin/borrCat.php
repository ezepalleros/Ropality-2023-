<?php
include_once("../componentes_admin/Aheader.php");
require_once("../connect/connect.php");
require_once("../cuentas/admin.php");

if ($con) {
    if (isset($_GET['nombreCategoria'])) {
        $id = $_GET['nombreCategoria'];
    }

    $consulta = "DELETE FROM categorias WHERE idCategoria='$id'";
    $resultado = mysqli_query($con, $consulta);

    if ($resultado) {
        print "
            <div class='container text-center' style='margin-top: 125px'>
                <h1 class='text-danger'>La categoría fue eliminada</h1>
                <a href='index.php' class='btn btn-danger btn-lg'>Volver</a>
            </div>";
    }
}

require_once("../componentes_admin/Afooter.php");
?>
