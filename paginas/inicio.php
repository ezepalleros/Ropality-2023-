<?php include_once("../componentes/header.php"); ?>

<div class="image-container">
    <img src="../img/logo.png" alt="inicio" class="centered-image" style="margin-top: 50px; margin-bottom: 30px;">
</div>

<hr class="custom-separator">

<div class="container">

    <div class="image-container">
        <img src="../img/inicio2.png" alt="inicio" class="centered-image" style="margin-top: 30px; margin-bottom: 30px;">
    </div>

    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../img/carru1.png" class="d-block w-100" alt="carru1">
            </div>
            <div class="carousel-item">
                <img src="../img/carru2.png" class="d-block w-100" alt="carru2">
            </div>
            <div class="carousel-item">
                <img src="../img/carru3.png" class="d-block w-100" alt="carru3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <hr class="custom-separator">

    <div class="image-container">
        <img src="../img/inicio3.png" alt="inicio" class="centered-image" style="margin-top: 30px; margin-bottom: 30px;">
    </div>

    <div class="col" style="margin-top: 50px; margin-bottom: 50px;">
        <div class="card text-dark bg-dark text-white">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="../img/perfil1.png" class="card-img" alt="Imagen">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">MarioMariano</h5>
                        <p class="card-text">¡Ropality es simplemente una joya escondida para los amantes de la
                            moda como yo! Cada vez que piso esa tienda, me encuentro sumergido en un paraíso de
                            ofertas impresionantes. Sus estanterías están llenas de prendas de alta calidad que
                            se ajustan a cualquier estilo y ocasión.
                            Ropality es mi destino de moda número uno. Siempre encuentro piezas únicas a precios
                            que hacen que sea fácil renovar mi guardarropa. ¡No puedo esperar para mi próxima
                            visita! #ModaEnRopality #OfertasIncreíbles</p>
                        <p class="card-text"><small>Fecha de Publicación: 20/09/2023</small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col" style="margin-top: 50px; margin-bottom: 50px;">
        <div class="card text-dark bg-dark text-white">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="../img/perfil2.jpg" class="card-img" alt="Imagen">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">RelaxAleja</h5>
                        <p class="card-text">¡Ropality sigue impresionando a sus clientes, y soy uno de los más
                            satisfechos! Recientemente, tuve una experiencia de compra extraordinaria en esta
                            tienda de moda. No solo encontré las últimas tendencias y prendas de alta calidad,
                            sino que el servicio que recibí superó mis expectativas.
                            Desde la calidad de la ropa hasta el servicio al cliente excepcional y las ofertas
                            irresistibles, Ropality se ha convertido en mi destino de compras definitivo. Si
                            estás buscando moda de calidad a precios asequibles y una experiencia de compra
                            excepcional, ¡no busques más allá de Ropality! 👕🛒 #ModaDePrimera
                            #ClientesSatisfechos</p>
                        <p class="card-text"><small>Fecha de Publicación: 23/09/2023</small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr class="custom-separator">

    <div class="image-container">
        <img src="../img/inicio4.png" alt="inicio" class="centered-image" style="margin-top: 30px; margin-bottom: 30px;">
    </div>

    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="../img/carrunu1.png" class="d-block w-100" alt="carrunu1">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="../img/carrunu2.png" class="d-block w-100" alt="carrunu2">
            </div>
            <div class="carousel-item">
                <img src="../img/carrunu3.png" class="d-block w-100" alt="carrunu3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<hr class="custom-separator">

<div class="container mt-4 text-center" style="margin-bottom: 40px;">
<a href="../admin/index.php" class="btn btn-secondary mt-4">Ingresar al panel del administrador</a>
</div>

<?php require_once("../componentes/footer.php"); ?>