<?php
class CustomXmlReader {
    public function displayNews($searchTerm = '') {
        $xml = simplexml_load_file('archivo.xml');

        // Si se proporciona un término de búsqueda, filtrar las noticias
        $results = [];
        if (!empty($searchTerm)) {
            $results = $xml->xpath('//noticia[contains(textoNoticia, "' . $searchTerm . '")]');
        } else {
            // Mostrar todas las noticias si no se realiza una búsqueda
            $results = $xml->xpath('//noticia');
        }

        foreach ($results as $result) {
            echo '<div class="col-lg-4 col-12 mb-4 mb-lg-0">';
            echo '<div class="custom-block bg-white shadow-lg">';
            echo '<a href="topics-detail.html">';
            echo '<div class="d-flex">';
            echo '<div>';
            echo '<h5 class="mb-2">' . $result->titulo . '</h5>';
            echo '<p class="mb-0">' . $result->textoNoticia . '</p>';
            echo '</div>';
            echo '</div>';
            echo '</a>';
            echo '</div>';
            echo '</div>';
        }
    }
}

// Obtener el término de búsqueda del usuario
$searchTerm = isset($_GET['keyword']) ? $_GET['keyword'] : '';

$customReader = new CustomXmlReader();
$customReader->displayNews($searchTerm);
?>