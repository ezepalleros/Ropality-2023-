<?php
include_once("../componentes_admin/Aheader.php");
require_once("../connect/connect.php");
require_once("../cuentas/admin.php");

if ($con) {
    if (isset($_GET['nombreCategoria'])) {
        $id = $_GET['nombreCategoria'];
    }

    print "<div class='container mt-4 text-center'>";
    print "<h1 class='text-primary mt-4'>Panel de administrador de productos</h1>";
    print "<p class='lead' style='color: white'>Altas, Bajas y Modificaciones</p>";
    

    $consulta = "SELECT codItem, nomItem FROM productos WHERE categoriaItem='$id'";
    $resultado = mysqli_query($con, $consulta);

    if ($resultado) {
        print "
            <table class='table table-bordered'>
                <caption> </caption>
                <thead class='thead-dark'>
                    <tr>
                        <th>Producto</th>
                        <th>Modificar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
        ";

        while ($filas = mysqli_fetch_array($resultado)) {
            print "
                <tr>
                    <td>{$filas['nomItem']}</td>
                    <td><a href=modProd.php?producto=$filas[codItem] class='btn btn-warning'>Modificar</a></td>
                    <td><a href=borrProd.php?producto=$filas[codItem] class='btn btn-danger'>Eliminar</a></td>
                </tr>
            ";
        }

        print "</tbody></table>";
    }
    print "</div>";
}

?>




<div class="container text-center" style="margin-bottom: 40px;">
<h1 class="text-primary mt-4" class="text-white">Agregar un nuevo producto</h1>
    <form action="altaProd.php" method="post" enctype="multipart/form-data" class="mb-4">
        <div class="row">
            <div class="col-md-4">
                <label for="codItem" class="text-white">Codigo del Producto</label>
                <input id="codItem" type="number" name="codItem" class="form-control" required />
            </div>
            <div class="col-md-4">
                <label for="nomItem" class="text-white">Nombre del producto</label>
                <input id="nomItem" type="text" name="nomItem" class="form-control" required />
            </div>
            <div class="col-md-4">
                <label for="precioItem" class="text-white">Precio del producto</label>
                <input id="precioItem" type="number" name="precioItem" class="form-control" required />
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-4">
                <label for="stockItem" class="text-white">Cantidad del producto</label>
                <input id="stockItem" type="number" name="stockItem" class="form-control" required />
            </div>
            <div class="col-md-4">
                <label for="talleItem" class="text-white">Talle del producto</label>
                <input id="talleItem" type="text" name="talleItem" class="form-control" required />
            </div>
            <div class="col-md-4">
                <label for="archivo" class="text-white">Cargar Imagen del producto</label>
                <input id="archivo" type="file" name="archivo" class="form-control" />
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12">
                <?php
                print "<input type='hidden' name='categoriaItem' value='$id'>";
                ?>
                <button type="submit" class="btn btn-primary" value="Cargar Producto">Cargar Producto</button>
            </div>
        </div>
    </form>
</div>

<div class="container mt-4 text-center" style="margin-bottom: 40px;">
<a href="index.php" class="btn btn-secondary mt-4">Volver al panel de administrador</a>
</div>

<?php require_once("../componentes_admin/Afooter.php"); ?>
