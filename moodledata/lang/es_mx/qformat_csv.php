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
 * Strings for component 'qformat_csv', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   qformat_csv
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['commma_error'] = '<font color="#990000"> Falló la subida. Coma innecesaria (,) encontrada en <b> Pregunta {$a} </b><br /> Por favor quite la coma (,) del campo o ponga todo el texto entre las comillas dobles (" "), Para que así la coma (,) dentro de ellas pueda ser ignorada. <br /></font>';
$string['csv_file_error'] = '<font color="#990000">Falló la subida. Algo salió mal en la línea número <b/> {$a} . </b> Asegúrese de que está subiendo un archivo CSV válido.<br /> Por favor revise quet, <b> El archivo Simple CSV debe tener 8 encabezados/campos y el archivo CSV Extendido debe tener 13 encabezados/campos para funcionar.</b><br /> Por favor corrija el error e intente importar nuevamente. <br /> No se ha importado ninguna pregunta.</font>';
$string['newline_error'] = '<font color="#990000">Falló la subida. Línea nueva encontrada en <b> Pregunta {$a} . </b> Asegúrese de que toda la pregunta con sus opciones y respuestas esté en una sola línea.<br /> Por favor corrija la pregunta e intente importarla nuevamente. <br /> No se ha importado ninguna pregunta.</font>';
$string['pluginname'] = 'Formato CSV';
$string['pluginname_help'] = 'Este es un formato CSV para importar y exportar preguntas de opción múltiple (4 opciones) con una respuesta o un máximo de dos respuestas, desde un archivo CSV (Valores Separados por Comas). Por favor vea el archivo de Muestra (sample.csv) y  de Muestra Extendida  (extended_sample.csv) que se anexan junto con este plugin para su referencia.';
$string['privacy:metadata'] = 'El plugin del formato CSV no almacena ningún dato   personal.';
$string['samplefile'] = 'ArchivoMuestra';
