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
 * Strings for component 'tool_courseautoapprove', language 'es_mx', branch 'MOODLE_36_STABLE'
 *
 * @package   tool_courseautoapprove
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['courseautoapprovetask'] = 'Aprobación automática de solicitudes de cursos';
$string['maxcourses'] = 'Máximo de cursos auto-aprobados';
$string['maxcourses_desc'] = 'Cuantos cursos por usuario son aprobados automáticamente. Para deshabilitar la característica, configure el número a cero.';
$string['pluginname'] = 'Auto-aprobación de cursos';
$string['privacy:metadata'] = 'aA Auto-aprobación de cursos no almacena ningún dato personal';
$string['reject'] = 'Auto-rechazar curso extra';
$string['reject_desc'] = 'Configure esto a \'Si\' para rechazar automáticamente solicitudes de cursos una vez que el límite se hay alcanzado. Si no se configura, las solicitudes que no fuesen aprobadas automáticamente tendrán que ser procesadas manualmente.';
$string['rejectmsgcount'] = 'Usted ya es un profesor en {$a->currentcourses} course(s) y el límite ha sido establecido a  {$a->maxcourses} curso(s).';
$string['rejectmshshortname'] = 'Existe otro curso con el mismo nombre corto';
