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
 * Strings for component 'logstore_caliper', language 'es_mx', branch 'MOODLE_38_STABLE'
 *
 * @package   logstore_caliper
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['apikey'] = 'Clave API';
$string['batchsize'] = 'Tamaño del lote';
$string['batchsize_desc'] = 'El númeromáximo de eventos a enviar en un momento en modo de lotes';
$string['endpoint'] = 'URL de Almacén de Eventos';
$string['immediatemode'] = '¿Enviar inmediatamente notificaciones al almacen de eventos?';
$string['immediatemode_desc'] = 'Esto forzará a Moodle a enviar las notificacaciones al Amacen de Eventos en cuanto ocurran, en lugar de en el modo de lotes en segundo plano mediante quehacer de cron. Esto hará el proceso más cercano al tiempo real, pwero podría causar un desempeño impredecible de Moodle asociado al tiempo de respuesta del Amacen de Eventos.';
$string['pluginname'] = 'Almacen de bitácora Caliper';
$string['settings'] = 'Configuraciones Generales';
$string['submit'] = 'Enviar';
$string['taskemit'] = 'Emitir registros al Almacen de Eventos';
