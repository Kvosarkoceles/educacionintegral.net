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
 * Strings for component 'fileconverter_unoconv', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   fileconverter_unoconv
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pathtounoconv'] = 'Ruta hacia convertidor de documentos unoconv';
$string['pathtounoconv_help'] = 'Ruta hacia el convertidor de documentos unoconv. Este es un ejecutable que es capaz de convertir entre formatos de documentos soportados por LibreOffice. Esto es opcional, pero si se especifica, Moodle lo usará para convertir automáticamente entre formatos de documentos. Esto es usado para soportar un rango más amplio de archivos de ingreso para la característica de anotación PDF en Tareas.';
$string['pluginname'] = 'Unoconv';
$string['privacy:metadata'] = 'El plugin del Convertidor de documento Unoconvert no almacena ningún dato personal.';
$string['test_unoconv'] = 'Probar ruta de unoconv';
$string['test_unoconvdoesnotexist'] = 'La ruta de unoconv no apunta hacia el programa unoconv. Por favor, revise sus configuraciones de la ruta.';
$string['test_unoconvdownload'] = 'Descargar el archivo PDf de prueba convertido.';
$string['test_unoconvempty'] = 'La ruta hacia unoconv no está configurada. Por favor, revise sus configuraciones de la ruta.';
$string['test_unoconvisdir'] = 'La ruta hacia unoconv apunta hacia una carpeta; por favor, incluya al programa unoconv en la ruta que Usted especifique';
$string['test_unoconvnotestfile'] = 'Falta el documento de prueba para ser convertido a PDF';
$string['test_unoconvnotexecutable'] = 'La ruta de unoconv apunta hacia un archivo que no es ejecutable';
$string['test_unoconvok'] = 'La ruta de unoconv paraece estar configurada apropiadamente.';
$string['test_unoconvversionnotsupported'] = 'La versión de unoconv que Usted ha instalado no está soportada. La característica de calificación de Tarea de Moodle requiere la versión 0.7 o superior.';
