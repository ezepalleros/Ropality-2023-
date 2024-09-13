<?php
include_once("../componentes_admin/Aheader.php");
require_once("../connect/connect.php");
require_once("../cuentas/admin.php");

if ($con) {
    if (isset($_GET['nombreCategoria'])) {
        $id = $_GET['nombreCategoria'];
    }

    $consulta = "SELECT idCategoria, nombreCategoria FROM categorias WHERE idCategoria='$id'";
    $resultado = mysqli_query($con, $consulta);

    if ($resultado) {
        $filas = mysqli_fetch_array($resultado);
        print "
            <div class='container text-center' style='margin-top: 100px'>
                <form action='modCat2.php' method='get'>
                    <div class='text-warning' style='font-size: 60px;'>Cambiar nombre de la categoría</div>
                    <div class='mb-3'>
                        <label for='mod'> </label>
                        <input id=mod name=mod type=text class='form-control' value=$filas[nombreCategoria] required>

                        <input name=id type=hidden value=$filas[idCategoria] />
                    </div>
                    <div>
                        <button type='submit' class='btn btn-warning' value=Modificar>Aceptar</button>
                    </div>
                </form>
            </div>
        ";
    }
}

require_once("../componentes_admin/Afooter.php");
?>
