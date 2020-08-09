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
 * Strings for component 'local_deleteoldquizattempts', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   local_deleteoldquizattempts
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['attemptlifetime'] = 'Eliminar intentos más antiguos que';
$string['attemptlifetime_help'] = 'Los intentos de exámenes que sean más antiguos que el valor especificado serán eliminados con trabajo agendado. Si estuviera seleccionado "No eliminar intentos antiguos", Usted todavía puede eliminar los intentos con comando por Interfaz de Línea de Comandos.';
$string['attemptsdeleted'] = 'Eliminados {$a} intentos de exámenes.';
$string['attemptsprogress'] = 'Eliminados {$a->deleted} de {$a->total}';
$string['deleteunusedhiddenquestions'] = 'Eliminar preguntas ocultas no utilizadas';
$string['deleteunusedhiddenquestions_help'] = 'Las preguntas ocultas son preguntas, que fueron eliminadas lógicamente, pero no fueron eliminadas físicamente, porque estaban referenciadas en algunos intentos de exámenes. Después de la eliminación de intentos de exámenes, estas preguntas probablemente ya no sean necesarias.';
$string['donotdeleteonschedule'] = 'No eliminar intentos antiguos';
$string['maxexecutiontime'] = 'Tiempo de ejecución máximo';
$string['maxexecutiontime_help'] = 'Eliminar intentos antiguos pude causar una alta carga a l servidor. Este parámetro limita el tiempo máximo de ejecución del trabajo agendado.';
$string['maxexecutiontime_reached'] = 'Operación detenida debido a límite de tiempo';
$string['notlimited'] = 'Ilimitado';
$string['pluginname'] = 'Eliminación de intentos de exámenes y preguntas';
$string['privacy:metadata'] = 'el plugin no almacena ningún dato personal.';
$string['questionsdeleted'] = 'Eliminadas {$a->deleted}, saltadas {$a->skipped} preguntas ocultas no utilizadas.';
$string['questionsprogress'] = 'Eliminadas {$a->deleted}, saltadas {$a->skipped} de {$a->total}';
$string['taskname'] = 'Eliminación de intentos de exámenes y preguntas antiguas';
