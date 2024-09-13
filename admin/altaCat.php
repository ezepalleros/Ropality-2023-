<?php
include_once("../componentes_admin/Aheader.php");
require_once("../connect/connect.php");
require_once("../cuentas/admin.php");

if($con){
    if(isset($_GET['alta'])){

        $alta=$_GET['alta'];

    }
    
    $consulta= "INSERT INTO categorias (nombreCategoria) VALUE ('$alta')"; 

    $resultado= mysqli_query($con,$consulta);

    if($resultado){
        print "<div class='container text-center' style='margin-top: 150px'>";
        print "<h1 class='text-warning'>La categoría $alta fue agregada</h1>";
        print "<a href='index.php' class='btn btn-warning btn-lg'>Volver</a>";
        print "</div>";   
       
    } 
}   

require_once("../componentes_admin/Afooter.php");
?>