<?php

if (!file_exists('archivo.xml')) {

    header('Location: creadorXML.php');
    exit;

}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Actividad 6 - Ver Noticias</title>

    <link rel="icon" href="assets/images/icon.png" type="image/x-icon">

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <link href="assets/css/bootstrap-icons.css" rel="stylesheet">

    <link href="assets/css/templatemo-topic-listing.css" rel="stylesheet">

</head>

<body id="top">

    <main>

        <nav class="navbar navbar-expand-lg">
            <div class="container">

                <div class="d-lg-none ms-auto me-4">
                    <a href="#top" class="navbar-icon bi-person smoothscroll"></a>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-lg-5 me-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="noticias.php">Noticias</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_2">Ciudades</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="noticias.php">Noticias</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>

        <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-12 mx-auto">
                        <h1 class="text-white text-center">Noticias - Parte II</h1>

                        <h6 class="text-center">Actividad 6 - Noticias desde un XML</h6>

                        <form method="get" class="custom-form mt-4 pt-2 mb-lg-0 mb-5" role="search">
                            <div class="input-group input-group-lg">
                                <span class="input-group-text bi-search" id="basic-addon1"></span>

                                <input name="keyword" type="search" class="form-control" id="keyword" placeholder="Busca algo relevante de alguna noticia..." aria-label="Search">

                                <button type="submit" class="form-control">Buscar</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>

        <section class="featured-section">
            <div class="container">
                <div class="row justify-content-center">

                    <?php
                    require 'examinador.php';
                    ?>

                </div>
            </div>
        </section>

    </main>

    <footer class="site-footer section-padding">
        <div class="container">
            <div class="row">
                <h7>Created with love by: Keily Marín, Miguel Rodríguez & Samuel Lasso.</h7>
            </div>
        </div>
    </footer>


    <!-- JAVASCRIPT FILES -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.sticky.js"></script>
    <script src="assets/js/click-scroll.js"></script>
    <script src="assets/js/custom.js"></script>

</body>

</html>