<?php
include_once("../componentes_admin/Aheader.php");
require_once("../connect/connect.php");
require_once("../cuentas/admin.php");

if ($con) {
    if (isset($_GET['producto'])) {
        $id = $_GET['producto'];
    }

    $consulta = "SELECT * FROM productos WHERE codItem='$id'";
    $resultado = mysqli_query($con, $consulta);

    if ($resultado) {
        $filas = mysqli_fetch_array($resultado);
?>

        <form action="modProd2.php" method="post" enctype="multipart/form-data" class="container mt-4" style="margin-bottom: 40px;">
            <div class="mb-3">
                <h2>Codigo del Producto: <?php print $filas['codItem']; ?></h2>
                <input type="hidden" name="codItem" value="<?php print $filas['codItem']; ?>" />
            </div>
            <div class="mb-3">
                <label for="nomItem" class="form-label">Nombre del producto</label>
                <input value="<?php print $filas['nomItem']; ?>" id="nomItem" type="text" name="nomItem" class="form-control" required />
            </div>
            <div class="mb-3">
                <label for="precioItem" class="form-label">Precio Producto</label>
                <input value="<?php print $filas['precioItem']; ?>" id="precioItem" type="number" name="precioItem" class="form-control" required />
            </div>
            <div class="mb-3">
                <label for="stockItem" class="form-label">Stock del Producto</label>
                <input value="<?php print $filas['stockItem']; ?>" id="stockItem" type="number" name="stockItem" class="form-control" required />
            </div>
            <div class="mb-3">
                <label for="talleItem" class="form-label">Talle del producto</label>
                <input value="<?php print $filas['talleItem']; ?>" id="talleItem" type="text" name="talleItem" class="form-control" required />
            </div>
            <div class="mb-3">
                <label for="fotoItem" class="form-label">Ruta de la Imagen</label>
                <input value="<?php print $filas['fotoItem']; ?>" id="fotoItem" type="text" name="fotoItem" class="form-control" required />
            </div>
            <div class="mb-3">
                <input type="hidden" name="categoriaItem" value="<?php print $filas['categoriaItem']; ?>" />
            </div>
            <button type="submit" class="btn btn-primary">Modificar Producto</button>
        </form>

<?php
    }
}

require_once("../componentes_admin/Afooter.php");
?>

