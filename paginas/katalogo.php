<?php
include_once("../componentes/header.php");
require_once("../connect/connect.php");

if ($con) {
    $consultaCategorias = "SELECT idCategoria, nombreCategoria FROM categorias";
    $resultadoCategorias = mysqli_query($con, $consultaCategorias);

    print '

    <div class="image-container" style="margin-bottom: 30px;">
    <img src="../img/catalogo.png" alt="Catalogo" class="centered-image" style="margin-top: 50px; margin-bottom: 30px;">
    </div>

    ';

    while ($filasCategorias = mysqli_fetch_array($resultadoCategorias)) {

        print "<hr class='custom-separator'>";

        print "<h2 style='color: yellow; font-size: 100px; text-align: center;'>$filasCategorias[nombreCategoria]</h2>";

        $idCategoriaActual = $filasCategorias['idCategoria'];
        $consultaProductos = "SELECT * FROM productos WHERE categoriaItem = $idCategoriaActual";
        $resultadoProductos = mysqli_query($con, $consultaProductos);

        print "<div class='container'>";

        while ($filasProductos = mysqli_fetch_array($resultadoProductos)) {
            print "
                <div class='card mb-3 bg-dark text-white' style='max-width: 540px;'>
                    <div class='row g-0'>
                        <div class='col-md-4'>
                            <img src='../img_admin/$filasProductos[fotoItem]' class='img-fluid rounded-start border border-dark' alt='Producto'>
                        </div>
                        <div class='col-md-8'>
                            <div class='card-body'>
                                <h5 class='card-title'>$filasProductos[nomItem]</h5>
                                <p class='card-text'>Precio: $filasProductos[precioItem]</p>
                                <p class='card-text'>Talle: $filasProductos[talleItem]</p>
                            </div>
                        </div>
                    </div>
                </div>
            ";
        }

        print "</div>";
    }
}

require_once("../componentes/footer.php");
?>
