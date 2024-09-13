<?php
include_once("../componentes_admin/Aheader.php");
require_once("../connect/connect.php");
require_once("../cuentas/admin.php");

if($con){
    if( isset($_POST['nomItem']) and isset($_POST['precioItem']) and isset($_POST['stockItem']) and isset($_POST['talleItem']) and isset($_POST['fotoItem']) and isset($_POST['codItem']) ){

        $codigo=$_POST['codItem'];
        $nombre=$_POST['nomItem'];
        $precio=$_POST['precioItem'];
        $stock=$_POST['stockItem'];
        $talle=$_POST['talleItem'];
        $imagen=$_POST['fotoItem'];
        $categoria=$_POST['categoriaItem'];

    }
    
    $consulta= "UPDATE productos SET nomItem='$nombre',precioItem='$precio',stockItem=' $stock',talleItem='$talle',fotoItem='$imagen' WHERE codItem='$codigo' "; 

    $resultado= mysqli_query($con,$consulta);

    if($resultado){
        print "
            <div class='container text-center' style='margin-top: 125px'>
                <h1 class='text-warning'>El produco '$nombre' fue modificado</h1>
                <a href='index.php' class='btn btn-warning btn-lg'>Volver</a>
            </div>";      
       
    }
}

require_once("../componentes_admin/Afooter.php");
?>