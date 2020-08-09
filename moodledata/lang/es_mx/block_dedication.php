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
 * Strings for component 'block_dedication', language 'es_mx', branch 'MOODLE_38_STABLE'
 *
 * @package   block_dedication
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['access_button'] = 'Herramienta dedicación';
$string['access_info'] = 'Solamente para profesores:';
$string['connectionratiorow'] = 'Conexiones diarias';
$string['dedication:addinstance'] = 'Permitir añadir el bloque de dedicación al curso';
$string['dedicationall'] = 'Dedicación de todos los miembros de curso. Elija a cualquier miembro para ver una dedicación al curso detallada';
$string['dedication_estimation'] = 'Tu tiempo estimado de dedicación es';
$string['dedicationgroup'] = 'Dedicación de todos los miembros del grupo <em>{$a}</em>. Elija cualquier miembro ara ver detalladamente su dedicación al curso.';
$string['dedicationrow'] = 'Dedicación al curso';
$string['dedication:use'] = 'Permitir usar dedicación al curso';
$string['form'] = 'Configuración de dedicación al curso';
$string['form_help'] = 'El tiempo es estimado basándose en los conceptos de Sesión y Duración de la sesión, aplicados a las entradas de bitácora.

<strong>Clic:</strong> Cada vez que un usuario accede a una página en Moodle, se almacena una entrada de bitácora.

<strong>Sesión:</strong> conjunto de dos o más clics conssecutivos en los que el tiempo transcurrido entre dos clics consecutivos no sobrepasa un tiempo máximo establecido.

<strong>Duración de la sesión:</strong> tiempo transcurrido entre el primer y el último clic de la sesión.

<strong>Tiempo de dedicación:</strong> la suma de todas las duraciones de las sesiones para un usuario.';
$string['form_text'] = 'Seleccionar el rango de fechas y el tiempo máximo entre clics de la misma sesión.';
$string['limit'] = 'Límite entre clicks (en minutos)';
$string['limit_help'] = 'El límite entre clicks define si dos clicks son o no parte de la misma sesión';
$string['maxtime'] = 'Fin del período';
$string['maxtime_help'] = 'Considerar solamente entradas de la bitácora que terminen antes de esta fecha';
$string['meandedication'] = '<strong>Dedicación promedio:</strong> {$a}';
$string['mintime'] = 'Inicio del período';
$string['mintime_help'] = 'Considerar solamente entradas de bitácora posteriores a esta fecha';
$string['pagetitle'] = '{$a}: dedicación al curso';
$string['period'] = 'Período desde <em>{$a->mintime}</em> hasta <em>{$a->maxtime}</em>';
$string['perioddiff'] = '<strong>Tiempo transcurrido:</strong> {$a}';
$string['perioddiffrow'] = 'Tiempo transcurrido';
$string['pluginname'] = 'Dedicación al curso';
$string['sessionduration'] = 'Duración';
$string['sessionstart'] = 'Inicio de sesión';
$string['show_dedication'] = 'Mostrar tiempo de dedicación a estudiantes';
$string['show_dedication_help'] = 'Por defecto, el tiempo de dedicación solamente puede ser visto por profesores. Esta configuración permite que los estudiantes vean su tiempo de dedicación en el bloque.';
$string['sincerow'] = 'Desde';
$string['submit'] = 'Calcular';
$string['torow'] = 'A';
$string['totaldedication'] = '<strong>Dedicación total:</strong> {$a}';
$string['userdedication'] = 'Dedicación detallada al curso de <em>{$a}</em>.';
