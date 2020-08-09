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
 * Strings for component 'search_solr', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   search_solr
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['connectionerror'] = 'El servidor Solr especificado no está disponible o el índice especificado no existe';
$string['connectionsettings'] = 'Configuraciones de conexión';
$string['errorcreatingschema'] = 'Error al crear el esquema Solr: {$a}';
$string['errorsolr'] = 'El motor de búsqueda Solr reportó un error: {$a}';
$string['errorvalidatingschema'] = 'Error al validar el esquema Solr, el campo {$a->fieldname} no existe. Por favor,  <a href="{$a->setupurl}">siga este enlace</a> para configurar los campos requeridos.';
$string['extensionerror'] = 'La extensión Solr de Apache PHP no está instalada. Por favor, revise la documentación.';
$string['fileindexing'] = 'Habilitar indexado de archivo';
$string['fileindexing_help'] = 'Si su instalación Solr lo soporta, esta característica le permite a Moodle el mandar archivos para ser indexados. <br/>
Usted necesitará re-indexar todos los contenidos del sitio después de habilitar esta opción, para que sean añadidos todos los archivos.';
$string['fileindexsettings'] = 'Configuraciones de indexado de archivo';
$string['maxindexfilekb'] = 'Tamaño máximo del archivo a indexar (kB)';
$string['maxindexfilekb_help'] = 'Los archivos mayores de este número de kilobytes no serán incluidos en el indexado para búsquedas. Si se configura a cero, serán indexados los archivos de cualquier tamaño.';
$string['minimumsolr4'] = 'Solr 4.0 es la versión mínima requerida para Moodle';
$string['missingconfig'] = 'Su servidor Apache Solr aun no está configurado en Moodle.';
$string['multivaluedfield'] = 'El campo "{$a}" regresó un arreglo (matriz) en lugar de un escalar. Por favor, elimine el índice actual, cree uno nuevo y corra setup_schema.php antes de indexar datos en Solr.';
$string['nodatafromserver'] = 'Sin datos del servidor';
$string['pluginname'] = 'Solr';
$string['privacy:metadata'] = 'Este plugin envía datos externamente a un motor de búsqueda Solr enlazado. No almacena datos localmente.';
$string['privacy:metadata:data'] = 'Datos personales pasados a través desde el subsistema de búsqueda.';
$string['schemafieldautocreated'] = 'El campo "{$a}" ya existe dentro del esquema Solr. Usted probablemente olvidó correr este script antes de indexar los datos y los campos fueron autocreados por Solr. Por favor, elimine el índice actual, cree uno nuevo y corra setup_schema.php antes de indexar datos en Solr.';
$string['schemasetupfromsolr5'] = 'Su versión de servidor Solr es inferior a 5.0. Este script solamente puede configurar su esquema si su versión Solr es 5.0 o superior. Usted necesita configurar manualmente  los campos en su esquema de acuerdo  a  \\search_solr\\document::get_default_fields_definition().';
$string['searchinfo'] = 'Consultas de búsqueda';
$string['searchinfo_help'] = 'El campo a ser buscado puede ser especificado al prefijar la consulta de la búsqueda con \'title:\', \'content:\', \'name:\', o \'intro:\'. Por ejemplo, buscar por   \'title:news\' regresaría resultados con la palabra \'news\' en el título (title).

Operadores Booleanos ("AND", "OR", "NOT"pueden usarse para combinar o para excluir palabras clave.

Caracteres de comodines ("*"o "?") pueden usarse para representar caracteres en la consulta de la búsqueda.';
$string['setupok'] = 'El esquema está listo para usarse';
$string['solrauthpassword'] = 'Contraseña de autenticación HTTP';
$string['solrauthuser'] = 'Nombre_de_usuario de autenticación HTTP';
$string['solrhttpconnectionport'] = 'Puerto';
$string['solrhttpconnectiontimeout'] = 'Tiempo para descartar conexión (timeout)';
$string['solrhttpconnectiontimeout_desc'] = 'El tiempo para descartar conexión HTTP es el tiempo máximo en segundos permitido para la operación de transferencia de datos HTTP.';
$string['solrindexname'] = 'Nombre del índice';
$string['solrinfo'] = 'Solr';
$string['solrnotselected'] = 'El motor Solr no es el motor de búsqueda configurado';
$string['solrsecuremode'] = 'Modo seguro';
$string['solrserverhostname'] = 'Nombre del Host';
$string['solrserverhostname_desc'] = 'Nombre del dominio del servidor Solr';
$string['solrsetting'] = 'Configuraciones Solr';
$string['solrsslcainfo'] = 'Nombre del certificado SSL CA';
$string['solrsslcainfo_desc'] = 'Nombre del campo conteniendo uno  o más certificados CA con los que se verifica el apareo';
$string['solrsslcapath'] = 'Ruta a certificados SSL CA';
$string['solrsslcapath_desc'] = 'Ruta al directorio conteniendo múltiples certificados CA con los cuales verificar apareo';
$string['solrsslcert'] = 'Certificado SSL';
$string['solrsslcert_desc'] = 'Nombre del campo hacia una clave privada formateada-PEM';
$string['solrsslkey'] = 'Clave SSL';
$string['solrsslkey_desc'] = 'Nombre del campo hacia solamente una clave privada formateado-PEM';
$string['solrsslkeypassword'] = 'Contraseña Clave SSL';
$string['solrsslkeypassword_desc'] = 'Contraseña para el archivo con la clave privada formateada-PEM';
