<?php
include_once("../componentes_admin/Aheader.php");
require_once("../connect/connect.php");
require_once("../cuentas/admin.php");
?>

<div class="container text-center">
    <h1 class="text-primary mt-4">Panel de usuarios de Ropality</h1>
    <p class="lead" style="color: white">Baneos, Roles y Modificaciones</p>
</div>

<?php
if ($con) {
    print '<div class="container">';
    
    $consulta= "SELECT * FROM usuarios"; 
    $resultado = mysqli_query($con, $consulta);

    if ($resultado) {
        print '
    <table class="table table-bordered mt-4 text-center">
        <caption> </caption>
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Email</th>
                <th scope="col">Estado</th>
                <th scope="col">Rol</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>';

        while ($filas = mysqli_fetch_array($resultado)) {
            print "
                <tr>
                    <td>{$filas['ID']}</td>
                    <td>{$filas['NOMBRE']}</td>
                    <td>{$filas['APELLIDO']}</td>
                    <td>{$filas['EMAIL']}</td>
                    <td>{$filas['ESTADO']}</td>
                    <td>{$filas['ROL']}</td>
                    <td>
                        <a href='segUsu.php?id={$filas['ID']}' class='btn btn-warning btn-sm'>Activar</a>
                        ---
                        <a href='banUsu.php?id={$filas['ID']}' class='btn btn-danger btn-sm'>Banear</a>
                        ---
                        <a href='norUsu.php?id={$filas['ID']}' class='btn btn-info btn-sm'>Hacer Usuario</a>
                        ---
                        <a href='admUsu.php?id={$filas['ID']}' class='btn btn-success btn-sm'>Hacer Admin</a>
                    </td>
                </tr>";
        }

        print '</tbody>';
        print '</table>';
    }

    print '</div>';
}
?>

<div class="container mt-4 text-center" style="margin-bottom: 40px;">
<h1 class="text-primary mt-4">Ir al panel de administrador</h1>
    <a href="index.php" class="btn btn-success mt-4">Panel de Administrador</a>
</div>

<div class="container mt-4 text-center" style="margin-bottom: 40px;">
    <a href="../paginas/inicio.php" class="btn btn-secondary mt-4">Volver a la página</a>
</div>

<?php require_once("../componentes_admin/Afooter.php"); ?>

