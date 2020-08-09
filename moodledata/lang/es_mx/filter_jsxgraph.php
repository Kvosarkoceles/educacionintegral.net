<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'filter_jsxgraph', language 'es_mx', branch 'MOODLE_38_STABLE'
 *
 * @package   filter_jsxgraph
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['convertencoding'] = 'convertir codificación';
$string['convertencoding_desc'] = 'Decidir si la codificación del texto entre las marcas (tags) JSXGraph deberían ser o no convertida a UTF-8.';
$string['divid'] = 'div id';
$string['divid_desc'] = 'ID de la división que contiene  JSXGraph. El número es añadido automáticamente, por ejemplo box0, box1,...';
$string['error'] = 'ERROR:';
$string['error0.99.5'] = 'Desafortunadamente el filtroJSX no soporta JSXGraph core versión 0.99.5 debido a un error  CDN. Por favor póngase en contacto con su administrador.';
$string['error0.99.6'] = 'Desafortunadamente el filtroJSX no soporta JSXGraph core versión 0.99.6 debido a un error  CDN. Por favor póngase en contacto con su administrador.';
$string['errorNotFound_post'] = 'oe CDN. JSXGraph core no se pudo cargar. Por favor póngase en contacto con su administrador.';
$string['errorNotFound_pre'] = 'No hay versión JSX';
$string['filtername'] = 'JSXGraph';
$string['globalJS'] = 'JavaScript global';
$string['globalJS_desc'] = 'Define un código general JavaScript que es cargado en cada marca (tag) JSXGraph antes del código que  lo contiene. Para escribir caracteres especiales como "<" use entidades HTML.';
$string['height'] = 'altura';
$string['height_desc'] = 'Altura del contenedor JSXGraph.';
$string['HTMLentities'] = 'Entidades HTML';
$string['HTMLentities_desc'] = 'Decidir si las entidades HTML como por ejemplo "&", "<",... son soportadas dentro del código JavaScript para JSXGraph.';
$string['jsxfromserver'] = 'JSXGraph del servidor';
$string['jsxfromserver_desc'] = 'Seleccionar si es que el plugin está usando la versión para servidor del núcleo de JSXGraph, o si es el proporcionado localmente con el plugin. <b>Atención:</b> debe ser ingresado un número válido de versión en "<a href="#admin-filter_jsxgraph_serverversion">versión del servidor</a>"!';
$string['no'] = 'no';
$string['privacy'] = 'Este plugin solamente es usado para mostrar construcciones JSXGraph escritas en el editor usando la marca (tag) jsxgraph. No almacena ni transmite ninguna información personal identificable. La librería integrada externamente jsxgraphcore.js tampoco procesa ningún dato personal.';
$string['serverversion'] = 'versión del servidor';
$string['serverversion_desc'] = 'Si "<a href="#admin-filter_jsxgraph_jsxfromserver">JSXGraph del servidor</a>" está activado, la versión ingresada aquí es cargada por el servidor. Vea en <a href="http://jsxgraph.uni-bayreuth.de/wp/previousreleases/" target="_blank">http://jsxgraph.uni-bayreuth.de/wp/previousreleases/</a> para ver, cual versión es cargada desde CDN. Escriba solamente e número de la versión (0.99.5 y 0.99.6 no están soportadas).';
$string['width'] = 'ancho';
$string['width_desc'] = 'Ancho del contenedor JSXGraph.';
$string['yes'] = 'si';
