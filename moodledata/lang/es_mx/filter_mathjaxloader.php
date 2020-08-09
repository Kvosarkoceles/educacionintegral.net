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
 * Strings for component 'filter_mathjaxloader', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   filter_mathjaxloader
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['additionaldelimiters'] = 'Delimitadores de ecuación adicionales';
$string['additionaldelimiters_help'] = 'El filtro MathJax procesa el texto para ecuaciones contenidas dentro de caracteres delimitadores.

La lista de caracteres delimitadores reconocidos puede añadirse aquí (por ejemplo,  AsciiMath usa  `). Los delimitadores contiene caracteres múltiples y los delimitadore múltiples pueden separarse con comas.';
$string['filtername'] = 'MathJax';
$string['httpsurl'] = 'URL de MathJax';
$string['httpsurl_help'] = 'URL completa hacia librería (biblioteca) MathJax.';
$string['localinstall'] = 'Instalación MathJax  local';
$string['localinstall_help'] = 'La configuración por defecto de MathJAX usa la versión CDN de MathJAX, pero MathJAX puede instalarse localmente si se requiere

Esto puede ser útil para ahorrar ancho de banda, o debido a restricciones del proxy local.

Para usar una instalación local de MathJAX, primeramente descargue la biblioteca (librería) completa de MathJax desde https://www.mathjax.org/. Después, instálela en un servidor web. Finalmente, actualice las configuraciones del filtro MathJax httpurl y/o httpsurl para que apunten hacia la URL de su MathJax.js  local.';
$string['mathjaxsettings'] = 'Configuración MathJax';
$string['mathjaxsettings_desc'] = 'La configuración por defecto de MathJAX debería de ser apropiada para la mayoría de los usuarios, pero MathJax es altamente configurable y cualquiera de las opciones estándar de configuración de MathJax puede añadirse aquí.';
$string['privacy:metadata'] = 'El plugin Mathjax no almacena ningún dato personal.';
$string['texfiltercompatibility'] = 'Compatibilidad con filtro TeX';
$string['texfiltercompatibility_help'] = 'El filtro de MathJax  puede usarse como un remplazo para el filtro de notación TeX.

Para soportar todos los delimitadores soportados por el filtro de notación TeX, MathJax debe configurarse para que muestre todas las ecuaciones "inline" (en línea) con el texto.';
