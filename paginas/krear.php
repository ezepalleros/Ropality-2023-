<?php include_once("../componentes/header.php"); ?>

<div class="image-container">
    <img src="../img/krear1.png" alt="Krear" class="centered-image" style="margin-top: 50px; margin-bottom: 30px;">
</div>

<div class="container">

    <hr class="custom-separator">
    <form action="subir.php" method="post" enctype="multipart/form-data">
        <br>

        <!-- Nombre -->

        <img src="../img/krear2.png" alt="Krear" style="margin-top: 20px; margin-bottom: 0px;">
        <div class="mb-3">
            <label for="nombre" class="form-label fs-4"> </label>
            <input type="text" class="form-control" id="nombre" name="nombre" required placeholder="Ingrese su nombre y apellido">
        </div>


        <!-- korreo electrónico -->
        <img src="../img/krear3.png" alt="Krear" style="margin-top: 30px; margin-bottom: 0px;">
        <div class="mb-3">
            <label for="correo" class="form-label fs-4"> </label>
            <input type="email" class="form-control" id="correo" name="correo" required placeholder="Ingrese su correo electrónico">
        </div>


        <!-- kolor -->

        <img src="../img/krear4.png" alt="Krear" style="margin-top: 30px; margin-bottom: 0px;">
        <div class="mb-3">
            <label for="color" class="form-label fs-6"> </label>
            <input type="color" class="form-control form-control-sm" id="color" name="color">
        </div>

        <!-- tipo -->

        <img src="../img/krear5.png" alt="Krear" style="margin-top: 30px; margin-bottom: 0px;">
        <div class="mb-3">
            <label for="tipo" class="form-label"> </label>
            <select class="form-select" id="tipo" name="tipo">
                <option selected value="nada">Elige que prenda va a ser</option>
                <optgroup label="Hombre">
                    <option value="Camiseta (Hombre)">Camiseta</option>
                    <option value="Pantalon (Hombre)">Pantalon</option>
                    <option value="Chaqueta (Hombre)">Chaqueta</option>
                    <option value="Accesorios (Hombres)">Accesorios</option>
                </optgroup>
                <optgroup label="Mujer">
                    <option value="Vestido (Mujer)">Vestido</option>
                    <option value="Blusa (Mujer)">Blusa</option>
                    <option value="Falda (Mujer)">Falda</option>
                    <option value="Accesorios (Mujer)">Accesorios</option>
                </optgroup>
            </select>
        </div>



        <!-- Eskribir komentario -->

        <img src="../img/krear8.png" alt="Krear" style="margin-top: 30px; margin-bottom: 10px;">

        <div class="mb-3">
            <label for="comentario" class="form-label fs-4"> </label>
            <textarea class="form-control" id="comentario" name="comentario" rows="4" placeholder="Escribe tu comentario aquí"></textarea>
        </div>

        <br>

        <!-- Subir archivo -->

        <img src="../img/krear7.png" alt="Krear" style="margin-top: 0px; margin-bottom: 10px;">
        <div>
            <label for="img">Subir archivo</label>
            <input id="img" name="img" type="file" />
        </div>



        <!-- Botón subir -->

        <button type="submit" class="btn btn-warning btn-lg btn-custom" style="margin-top: 30px; margin-bottom: 10px;">Subir</button>


    </form>




    <hr class="custom-separator">


</div>

<?php require_once("../componentes/footer.php"); ?>