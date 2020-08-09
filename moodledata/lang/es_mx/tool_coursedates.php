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
 * Strings for component 'tool_coursedates', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   tool_coursedates
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['atleastonedate'] = 'Usted necesita configurar al menos una fecha para actualizar';
$string['autoenddate'] = '¿Calcular la fecha final?';
$string['autoenddate_default'] = 'No modificar';
$string['autoenddate_help'] = 'Moodle puede calcular la fecha final basándose en el número de secciones en cursos que usan el formato de tópico semanal. Usted puede elegir si es que se aplica esto a nivel de categoría.';
$string['autoenddate_off'] = 'Deshabilitar auto fechas de fin';
$string['autoenddate_on'] = 'Forzar auto fechas de fin';
$string['coursedates:setdates'] = 'Configurar las fechas de inicio/término de todos los cursos en una categoría.';
$string['pluginname'] = 'Configurar fechas de curso';
$string['privacy:metadata'] = 'El plugin para Configurar fechas de curso no almacena ningún dato personal.';
$string['setdates'] = 'Configurar fechas de curso';
$string['setdatesinstruction'] = 'Configurar las fechas de inicio y término para todos los cursos en una categoría, incluyendo subcategorías. Elija sus opciones y haga clic en \'Confirmar\'. Al confirmar, Moodle creará un \'trabajo ad-hoc\' para configurar todas las fechas en segundo plano. Esto requiere que cron esté habilitado.';
$string['updatequeued'] = 'Un trabajo ad-hoc ha sido puesto en cola para actualizar todos los cursos en la categoría <strong>{$a}</strong>. Correrá la siguiente ocasión que ejecute cron.';
