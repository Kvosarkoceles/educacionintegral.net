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
 * Strings for component 'gradeimport_xml', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   gradeimport_xml
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['errbadxmlformat'] = 'Error - formato XML malo';
$string['errduplicategradeidnumber'] = 'Error - existen dos items de calificación con  idnumber \'{$a}\' en este curso. Esto debería ser imposible.';
$string['errduplicateidnumber'] = 'Error - idnumber duplicado';
$string['errincorrectgradeidnumber'] = 'Error - idnumber \'{$a}\' del archivo importado no coincide con el item de calificación.';
$string['errincorrectidnumber'] = 'Error - idnumber incorrecto';
$string['errincorrectuseridnumber'] = 'Error: el número de identificación (idnumber) \'{$a}\' del archivo de importación no coincide con ningún usuario.';
$string['error'] = 'Hubo errores';
$string['errorduringimport'] = 'Ocurrió un error al tratar de importar: {$a}';
$string['fileurl'] = 'URL de archivo remoto';
$string['fileurl_help'] = 'Este campo para URL remoto es para buscar datos de un servidor remoto, como por ejemplo de un sistema de información de estudiantes.';
$string['importxml'] = 'Importar XML';
$string['importxml_help'] = 'Las calificaciones pueden importarse mediante un archivo XML que contenga números ID de usuario y números ID de actividad. Para obtener el formato correcto, primeramente exporte algunas calificaciones a un archivo XML y después vea ese archivo.';
$string['pluginname'] = 'Archivo XML';
$string['privacy:metadata'] = 'El plugin para Importar calificación desde XML no almacena ningún dato personal.';
$string['xml:publish'] = 'Publicar calificaciones importadas mediante XML';
$string['xml:view'] = 'Importar calificaciones desde XML';
