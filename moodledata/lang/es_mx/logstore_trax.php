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
 * Strings for component 'logstore_trax', language 'es_mx', branch 'MOODLE_35_STABLE'
 *
 * @package   logstore_trax
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['buffersize'] = 'Tamaño del buffer';
$string['buffersize_help'] = 'Número de eventos que pueden ser agrupados para ser enviados en una sola solicitud.';
$string['lrs_endpoint'] = 'Endpoint LRS';
$string['lrs_endpoint_help'] = 'Esta es la URL que es usada para llamar a los servicios xAPI de su LRS.';
$string['lrs_password'] = 'Contraseña LRS (HTTP Básico)';
$string['lrs_password_help'] = 'Esta es la contraseña de la cuenta HTTP Básico creada en su LRS.';
$string['lrs_username'] = 'Nombre_de_usuario LRS (HTTP Básico)';
$string['lrs_username_help'] = 'Estea es el nombre_de_usuario de la cuenta HTTP Básico creada en su LRS.';
$string['platform_iri'] = 'IRI de Plataforma';
$string['platform_iri_help'] = 'Un IRI (Internationalized Resource Identifier = Identificador de Recurso Internacionalizado) que identificará a su plataforma y que nunca cambiará.';
$string['pluginname'] = 'Bitácoras Trax';
$string['pluginname_desc'] = 'Un plugin de bitácora que transforma bitácoras Moodle a declaraciones xAPI, y las envía entonces a su LRS (Learning Record Store = Almacén de Registros de Aprendizaje) .';
$string['privacy:metadata:actors'] = 'Tabla de concordancia entre ID de usuario Moodle y el identificador anónimo usado por un LRS externo.';
$string['privacy:metadata:actors:mid'] = 'ID del usuario almacenada por Moodle';
$string['privacy:metadata:actors:uuid'] = 'Identificador anónimo enviado al LRS externo';
$string['privacy:metadata:lrs'] = 'Bitácoras generadas por usuarios son enviadas a un LRS que las almacena en su propia base de datos.';
$string['privacy:metadata:lrs:uuid'] = 'Identificador anónimo enviado al LRS externo';
