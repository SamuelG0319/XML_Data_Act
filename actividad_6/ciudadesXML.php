<?php
// Crear un objeto SimpleXMLElement para construir la estructura XML
$xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><tabla></tabla>');

// Agregar la fila de título
$titulo = $xml->addChild('titulo', 'Ciudades');

// Agregar las columnas
$columnas = $xml->addChild('columnas');

$columna1 = $columnas->addChild('columna');
$columna1->addChild('titulo', 'Nombre');
$columna1->addChild('celda', 'Nueva Delhi');
$columna1->addChild('celda', 'Lisboa');
$columna1->addChild('celda', 'El Cairo');

$columna2 = $columnas->addChild('columna');
$columna2->addChild('titulo', 'País');
$paises = $columna2->addChild('celdas');

$pais1 = $paises->addChild('celda', 'India');
$pais1->addAttribute('continente', 'Asia');
$pais2 = $paises->addChild('celda', 'Portugal');
$pais2->addAttribute('continente', 'Europa');
$pais3 = $paises->addChild('celda', 'Egipto');
$pais3->addAttribute('continente', 'África');

$columna3 = $columnas->addChild('columna');
$columna3->addChild('titulo', 'Continente');
$continentes = $columna3->addChild('celdas');

foreach ($paises->children() as $pais) {
    $continente = $continentes->addChild('celda', $pais['continente']);
}

// Encabezado para indicar que es XML
header('Content-Type: text/xml');

// Imprimir el XML formateado
echo $xml->asXML();
?>