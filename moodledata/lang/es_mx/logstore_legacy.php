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
 * Strings for component 'logstore_legacy', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   logstore_legacy
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['eventlegacylogged'] = 'Evento antiguo a bitácora';
$string['loglegacy'] = 'Mandar a bitácora de datos antiguos';
$string['loglegacy_help'] = 'Este plugin registra datos de bitácora a la tabla de bitácora antigua (mdl_log). Esta funcionalidad ha sido remplazada por plugins de almacenamiento de bitácora más nuevos, ricos y eficientes, por lo que Usted solamente debería de ejecutar este plugin si Usted tiene reportes personalizados antiguos que directamente consultan la antigua tabla de bitácoras. Al escribir a las bitácoras antiguas se aumentará la carga, por lo que se le recomienda,  por razones de desempeño, que deshabilite este plugin cuando no sea necesario.';
$string['pluginname'] = 'Bitácora antigua';
$string['pluginname_desc'] = 'Un plugin de bitácora que almacena entradas de bitácora en la tabla de bitácora antigua.';
$string['privacy:metadata:log'] = 'Una colección de eventos pasados';
$string['privacy:metadata:log:action'] = 'Una descripción de la acción';
$string['privacy:metadata:log:info'] = 'Información adicional';
$string['privacy:metadata:log:ip'] = 'La dirección IP usada al momento del evento';
$string['privacy:metadata:log:time'] = 'El momento cuando tuvo lugar la acción';
$string['privacy:metadata:log:url'] = 'La URL relacionada con el evento';
$string['privacy:metadata:log:userid'] = 'La ID del usuario que realizó la acción';
$string['taskcleanup'] = 'Limpieza de tablas de bitácoras antiguas';
