<?php
class XMLCreator
{
    public function createXml()
    {
        $doc = new DOMDocument('1.0', 'utf-8');
        $doc->preserveWhiteSpace = false;
        $doc->formatOutput = true;

        $noticias = $doc->createElement('noticias');
        $doc->appendChild($noticias);

        $noticia = $doc->createElement('noticia');
        $noticias->appendChild($noticia);

        $titulo = $doc->createElement('titulo', 'Guerra entre Israel y Gaza, en directo | Hamás afirma que más de 60 rehenes israelíes están desaparecidos tras los últimos ataques aéreos de Israel');
        $noticia->appendChild($titulo);

        $textoNoticia = $doc->createElement('textoNoticia', 'Miles de personas se manifiestan en Londres, París, Berlín y Washington para pedir un alto el fuego en Gaza | Israel golpea de nuevo el norte de la Franja, donde todavía quedan unas 400.000 personas');
        $noticia->appendChild($textoNoticia);

        $noticia = $doc->createElement('noticia');
        $noticias->appendChild($noticia);

        $titulo = $doc->createElement('titulo', 'Educadores acuerdan seguir con las acciones de protesta en las calles');
        $noticia->appendChild($titulo);

        $textoNoticia = $doc->createElement('textoNoticia', 'Miembros de la Asociación de Profesores de Panamá (Asoprof) y de la agrupación Panamá Sin Minería, reunidos este sábado 4 de noviembre, acordaron continuar con las acciones de protestas para lograr la 
        derogatoria de la Ley 406, que ratificó el contrato suscrito entre el Estado y Minera Panamá. Durante la reunión, los dirigentes señalaron que es necesario que el Gobierno de Laurentino Cortizo derogue definitivamente la Ley 406.');
        
        $noticia->appendChild($textoNoticia);

        $noticia = $doc->createElement('noticia');
        $noticias->appendChild($noticia);

        $titulo = $doc->createElement('titulo', 'Más de 900 personas aprehendidas en 13 días de manifestaciones');
        $noticia->appendChild($titulo);

        $textoNoticia = $doc->createElement('textoNoticia', 'Unas 948 personas han sido aprehendidas en el país en 13 días de protestas efectuadas contra la aprobación de la Ley 406 de 2023 referente al contrato minero entre el Estado y Minera Panamá.
        Así lo dio a conocer este sábado 4 de noviembre de 2023 la Policía Nacional en un reporte donde detalló que, del total de detenidos, 819 son adultos y 129 a menores de edad.
        Por el momento se ha logrado judicializar a estas personas ante el Ministerio Público y en los despachos de los jueces de paz, tras los sucesos cometidos en las provincias de Panamá, Panamá Oeste, Veraguas, Chiriquí y Colón, se detalló.
        Según el informe, en estos días de protestas han resultado afectados 62 comercios y 51 instituciones gubernamentales, entre ellas oficinas y 28 cámaras de videovigilancia que resultaron vandalizadas.');
        $noticia->appendChild($textoNoticia);

        $doc->save('archivo.xml');
    }
}

$creator = new XMLCreator();
$creator->createXml();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Actividad 6 - Creador de XML</title>

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
                            <a class="nav-link click-scroll" href="creadorXML.php">CreadorXML</a>
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

                    </div>

                </div>
            </div>
        </section>


        <section class="featured-section">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-lg-6 col-12">
                        <div class="custom-block custom-block-overlay">
                            <div class="d-flex flex-column h-100">
                                <img src="assets/images/noticias.jpg" class="custom-block-image img-fluid" alt="">

                                <div class="custom-block-overlay-text d-flex">
                                    <div>
                                        <h5 class="text-white mb-2">Accede a las noticias</h5>

                                        <p class="text-white">El archivo XML que contiene las diversas noticias ya fue creado. Ahora tienes acceso libre para ver dichas noticias.</p>

                                        <a href="noticias.php" class="btn custom-btn mt-2 mt-lg-3">Ver Noticias</a>
                                    </div>
                                </div>
                                <div class="section-overlay"></div>
                            </div>
                        </div>
                    </div>

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