<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tabla XML de Ciudades</title>

    <link rel="icon" href="assets/images/icon.png" type="image/x-icon">

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap"
        rel="stylesheet">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <link href="assets/css/bootstrap-icons.css" rel="stylesheet">

    <link href="assets/css/templatemo-topic-listing.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/Mstyle.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">

            <div class="d-lg-none ms-auto me-4">
                <a href="#top" class="navbar-icon bi-person smoothscroll"></a>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-lg-5 me-lg-auto">
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="index.php">HOME</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="pre_city.php">Ciudades</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="creadorXML.php">Noticias</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <header class="site-header d-flex flex-column justify-content-center align-items-center">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-5 col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>

                            <li class="breadcrumb-item active" aria-current="page">TablaXML</li>
                        </ol>
                    </nav>

                    <h2 class="text-white">Tabla de Ciudades</h2>
                </div>

            </div>
        </div>
    </header>

    <section class="section-padding section-bg">
        <div class="container">
            <div class="row">

                <div class="table">
                    <table border="1">
                        <thead>
                            <tr>
                                <th colspan="3" id="titulo">Ciudades</th>
                            </tr>
                            <tr class="subtitle">
                                <th>Nombre</th>
                                <th>País</th>
                                <th>Continente</th>
                            </tr>
                        </thead>
                        <tbody id="tabla_body">
                            <!-- Aquí se mostrarán los datos de la tabla -->
                        </tbody>
                    </table>

                </div>
                <div class="col-lg-12 col-12">
                    <h6 class="mb-4 pb-2">La columna Contiente recibe su valor del atributo de la columna País</h6>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Utilizamos JavaScript para cargar y procesar el XML
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                // Parseamos el XML
                var xmlDoc = this.responseXML;
                var columnas = xmlDoc.getElementsByTagName("columna");

                // Recorremos las columnas y mostramos los datos en la tabla HTML
                var tablaBody = document.getElementById("tabla_body");

                for (var i = 0; i < columnas[0].getElementsByTagName("celda").length; i++) {
                    var fila = document.createElement("tr");

                    for (var j = 0; j < columnas.length; j++) {
                        var celda = document.createElement("td");
                        celda.textContent = columnas[j].getElementsByTagName("celda")[i].textContent;
                        fila.appendChild(celda);
                    }

                    tablaBody.appendChild(fila);
                }
            }
        };
        xhttp.open("GET", "ciudadesXML.php", true);
        xhttp.send();
    </script>

    <!-- JAVASCRIPT FILES -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.sticky.js"></script>
    <script src="assets/js/click-scroll.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>