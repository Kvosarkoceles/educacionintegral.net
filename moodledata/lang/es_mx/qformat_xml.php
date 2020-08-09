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
 * Strings for component 'qformat_xml', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   qformat_xml
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['invalidxml'] = 'Archivo XML inválido - se esperaba cadena de texto (¿use CDATA?)';
$string['pluginname'] = 'Formato MOODLE XML';
$string['pluginname_help'] = 'Es un formato específico de Moodle para importar y exportar preguntas.';
$string['privacy:metadata'] = 'El plugin de Formato de pregunta XML no almacena ningún dato personal.';
$string['truefalseimporterror'] = '<b> ¡Advertencia! </b>: La pregunta de tipo falso/verdadero \'{$a-> questionText}\' no pudo ser importada correctamente. No estaba claro si la respuesta correcta era Verdadero o Falso. La pregunta se ha importado suponiendo de que la respuesta es \'{$a->answer}\'. Si esto no es correcto, tendrá que editar la pregunta.';
$string['unsupportedexport'] = 'La pregunta tipo {$a} no está soportada por la exportación XML';
$string['xmlimportnoname'] = 'Falta el nombre de la pregunta en el archivo XML';
$string['xmlimportnoquestion'] = 'No se encuentra el texto de la pregunta en el archivo XML';
$string['xmltypeunsupported'] = 'La pregunta de tipo {$a} no está soportada por la importación XML';
