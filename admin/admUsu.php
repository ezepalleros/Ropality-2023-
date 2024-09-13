<?php
require_once("../cuentas/admin.php");
require_once("../connect/connect.php");

if($con){
    if(isset($_GET['id'])){
        $id=$_GET['id'];
    }

    $consulta= "UPDATE usuarios SET ROL='Admin' WHERE ID='$id'";

    mysqli_query($con,$consulta);

    header("Location: indexUsuario.php");
}





?>