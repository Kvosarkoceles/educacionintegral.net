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
 * Strings for component 'availability_grade', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   availability_grade
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cachedef_items'] = 'Items de calificación cacheados para evaluar disponibilidad condicional';
$string['cachedef_scores'] = 'Calificaciones del usuario cacheadas para evaluar disponibilidad condicional';
$string['description'] = 'Requerir que los estudiantes alcancen una calificación especificada.';
$string['error_backwardrange'] = 'Al especificar un rango de calificaciones, el mínimo debe ser menor al máximo.';
$string['error_invalidnumber'] = 'Los rangos de calificaciones deben estar espicificados con porcentajes válidos.';
$string['error_selectgradeid'] = 'Usted debe seleccionar un ítem de calificación para la condición de calificación.';
$string['label_max'] = 'Porcentaje máximo de calificación (exclusivo)';
$string['label_min'] = 'Porcentaje mínimo de calificación (inclusive)';
$string['missing'] = '(actividad faltante)';
$string['option_max'] = 'debe ser <';
$string['option_min'] = 'debe ser ≥';
$string['pluginname'] = 'Restricción por calificaciones';
$string['privacy:metadata'] = 'El plugin de Restricción por calificaciones de actividad no almacena ningún dato personal.';
$string['requires_any'] = 'Usted tenga una calificación en <strong>{$a}</strong>';
$string['requires_max'] = 'Usted tenga un puntaje adecuado en <strong>{$a}</strong>';
$string['requires_min'] = 'Usted logre un puntaje adecuado en <strong>{$a}</strong>';
$string['requires_notany'] = 'Usted no tenga una calificación en <strong>{$a}</strong>';
$string['requires_notgeneral'] = 'Usted no obtenga ciertos puntajes en <strong>{$a}</strong>';
$string['requires_range'] = 'Usted  obtenga un puntaje particular en <strong>{$a}</strong>';
$string['title'] = 'Calificación';
