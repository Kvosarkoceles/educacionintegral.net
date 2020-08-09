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
 * Strings for component 'tool_lockstats', language 'es_mx', branch 'MOODLE_33_STABLE'
 *
 * @package   tool_lockstats
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['blacklist'] = 'Lista_negra de historia';
$string['blacklistdesc'] = 'Estos están identiicados por su classpath, por ejemplo \\tool_crawler\\task\\crawl_task';
$string['cleanup'] = 'Limpieza de historia';
$string['cleanupdesc'] = 'Podar automáticamente la tabla de historia después de este valor.';
$string['debug'] = 'Depurar (Debug)';
$string['debugdesc'] = 'Imprimir salida adicional de depuaración útil en el cron.log';
$string['form_reset_button'] = 'Reiniciar bloquear historia';
$string['form_reset_warning'] = 'Advertencia: Usted está a punto de reiniciar la historia de estadísticas del bloqueo. ¿Está seguro de querer hacer esto?';
$string['h1_current'] = 'Trabajos  corriendo actualmente';
$string['h1_detail'] = 'Detalles de trabajos';
$string['h1_history'] = 'Trabajos recientes con una duración > {$a} segundos';
$string['h1_nexttask'] = 'Próximos trabajos a correr';
$string['pluginname'] = 'Bloquear estadísticas';
$string['reset_header'] = 'Reiniciar historia de estadísticas del bloqueo';
$string['reset_text'] = 'Reiniciar la historia de estadísticas del bloqueo.';
$string['table_duration'] = 'Duración Promedio';
$string['table_gained'] = 'Timpo Ganado';
$string['table_host'] = 'Último Host';
$string['table_lockcount'] = 'Número';
$string['table_pid'] = 'PID';
$string['table_released'] = 'Tiempo liberado';
$string['table_resource'] = 'Recurso';
$string['table_task'] = 'Quehacer';
$string['task_cleanup'] = 'Limpieza de Historia de lockstats';
$string['threshold'] = 'Umbral de historia';
$string['thresholddesc'] = 'Solamente escribir en bitácora entradas de historia cuando el tiempo del quehacer del cron excede este valor.';
