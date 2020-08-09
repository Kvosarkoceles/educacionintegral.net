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
 * Strings for component 'search_postgresfulltext', language 'es_mx', branch 'MOODLE_37_STABLE'
 *
 * @package   search_postgresfulltext
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['fileindexing'] = 'Habilitar indexado de archivo';
$string['fileindexing_help'] = 'Habilitar indexado de archivos si estuviera disponible un servidor Apache Tika.';
$string['fileindexsettings'] = 'Configuraciones de indexado de archivo';
$string['maxindexfilekb'] = 'Tamaño máximo de archivo a indexar (kB)';
$string['maxindexfilekb_help'] = 'Los archivos mayores de este número de kilobytes no estarán incluídos en el indexado de búsqueda. Si se configura a cero, serán indexados los archivos de todos los tamaños.';
$string['pluginname'] = 'Postgres Texto Completo';
$string['postgreswarning'] = 'Se ha detectado que Usted no está usando PostgreSQL - este plugin no funciona en otros tipos de bases de datos.';
$string['privacy:metadata:index'] = 'Contenidos indexados';
$string['privacy:metadata:index:areaid'] = 'ID del área de búsqueda';
$string['privacy:metadata:index:content'] = 'Contenidos';
$string['privacy:metadata:index:contextid'] = 'ID del contexto del documento';
$string['privacy:metadata:index:courseid'] = 'ID del curso';
$string['privacy:metadata:index:description1'] = 'Campo extra de descripción';
$string['privacy:metadata:index:description2'] = 'Campo extra de descripción';
$string['privacy:metadata:index:docid'] = 'ID del documento (único)';
$string['privacy:metadata:index:groupid'] = 'ID del grupo';
$string['privacy:metadata:index:itemid'] = 'Identificador del ítem (en el entorno del área de búsqueda)';
$string['privacy:metadata:index:modified'] = 'Hora de última modificación';
$string['privacy:metadata:index:owneruserid'] = 'ID del usuario propietario del documento';
$string['privacy:metadata:index:title'] = 'Título';
$string['privacy:metadata:index:type'] = 'Tipo de documento';
$string['privacy:metadata:index:userid'] = 'ID del usuario del documento';
$string['searchinfo'] = 'Consultas de búsqueda';
$string['searchinfo_help'] = 'Ingresar consulta de búsqueda.';
$string['tikaurl'] = 'URL de Tika';
$string['tikaurl_help'] = 'URL hacia el Servidor Apache Tika. Incluye el número del puerto, por ejemplo http://localhost:9998';
