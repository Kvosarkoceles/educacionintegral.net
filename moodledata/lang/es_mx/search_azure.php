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
 * Strings for component 'search_azure', language 'es_mx', branch 'MOODLE_35_STABLE'
 *
 * @package   search_azure
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addfail'] = 'No se pudo añadir documento al índice';
$string['adminsettings'] = 'Configuraciones del plugin';
$string['apikey'] = 'Clave API';
$string['apikey_help'] = 'Una API Admin de Búsqueda Azure relacionada con el servicio que desea usar.';
$string['apiversion'] = 'Versión API';
$string['apiversion_help'] = 'La versión API Admin de Búsqueda Azure a usar (normalmente esto siempre sería el valor por defecto).';
$string['azuresettings'] = 'Configuraciones de Búsqueda Azure';
$string['deletefail'] = 'No se pudo eliminar documento del índice';
$string['enrichsettings'] = 'Configuraciones para enriquecimiento de datos';
$string['fileindexing'] = 'Habilitar indexado de archivo';
$string['fileindexing_help'] = 'Habilita la indexación de archivo para este plugin. Con la opción activada, Usted necesitará ingresar detalles del servicio Tika en las "Configuraciones de Indexación de Archivo" debajo.<br/>
Usted necesitará re-indexar todos los contenidos del sitio después de habilitar esta opción para todos los archivos a ser añadidos.';
$string['fileindexsettings'] = 'Configuraciones de indexado de archivo';
$string['fileindexsettings_help'] = 'Ingrese los detalles para el servicio Tika. Estos son necesarios si el indexado de archivo está habilitado arriba.';
$string['index'] = 'Índice';
$string['index_help'] = 'Índice namespace para almacenar datos de búsqueda en backend';
$string['noconfig'] = 'Falta configuración de Búsqueda Azure';
$string['noserver'] = 'Endpoint inalcanzable en Búsqueda Azure';
$string['order_newest'] = 'El más nuevo primero';
$string['order_oldest'] = 'El más antiguo primero';
$string['pluginname'] = 'Búsqueda Azure';
$string['pluginname_help'] = 'Backend de búsqueda para el motor de búsqueda Azure Search';
$string['pluginsettings'] = 'Configuraciones del plugin';
$string['privacy:metadata'] = 'Este plugin envía datos externamente a un motor de búsqueda Azure enlazado. No almacena datos localmente.';
$string['privacy:metadata:data'] = 'Datos personales pasados a través del subsistema de búsqueda.';
$string['searchinfo'] = 'Consultas de búsqueda';
$string['searchinfo_help'] = 'El campo a ser buscado puede ser especificado al prefijar la consulta de búsqueda con \'title:\', \'content:\', \'name:\', o \'intro:\'. Por ejemplo, al buscar \'title:news\' regresará resultados con la palabra \'news\' en el título.

Los operadores Booleanos (\'AND\', \'OR\') pueden ser usados para combinar o excluir palabras clave.';
$string['searchurl'] = 'URL';
$string['searchurl_help'] = 'El FQDN (Nombre del Dominio Completamente Calificado) del endpoint del motor de Búsqueda Azure.';
$string['tikahostname'] = 'El nombre del host';
$string['tikahostname_help'] = 'El FQDN (Nombre del Dominio Completamente Calificado) del endpoint de Apache Tika.';
$string['tikaport'] = 'Puerto Tika';
$string['tikaport_help'] = 'El puerto del endpoint de Apache Tika';
$string['tikasendsize'] = 'Tamaño máximo de archivo';
$string['tikasendsize_help'] = 'Mandar archivos grandes a Tika puede causar problemas de flata de memoria. Por eso lo limitamos a un tamaño en bytes.';
