<?php
include_once("../componentes_admin/Aheader.php");
require_once("../connect/connect.php");
require_once("../cuentas/admin.php");

if ($con) {
    if (!empty($_POST['codItem']) && !empty($_POST['nomItem']) && !empty($_POST['precioItem']) && !empty($_POST['stockItem']) && !empty($_POST['talleItem']) && !empty($_POST['categoriaItem']) && isset($_FILES['archivo'])) {

        $codigo = $_POST['codItem'];
        $nombre = $_POST['nomItem'];
        $precio = $_POST['precioItem'];
        $stock = $_POST['stockItem'];
        $talle = $_POST['talleItem'];
        $categoria = $_POST['categoriaItem'];

        //$_FILES
        $hora=time();
        $foto=$hora.'.jpg';
        move_uploaded_file($_FILES ['archivo']['tmp_name'],"../img_admin/$foto");

        $consulta = "INSERT INTO productos (codItem,nomItem,precioItem,stockItem,fotoItem,talleItem,categoriaItem) VALUES ('$codigo','$nombre','$precio','$stock','$foto','$talle','$categoria')";
        $resultado = mysqli_query($con, $consulta);

        if ($resultado) {
            print "<div class='container text-center' style='margin-top: 150px'>";
            print "<h1 class='text-warning'>El Producto $nombre fue agregado</h1>";
            print "<a href='index.php' class='btn btn-warning btn-lg'>Volver</a>";
            print "</div>";
        } 
    }
}

require_once("../componentes_admin/Afooter.php");
?>
