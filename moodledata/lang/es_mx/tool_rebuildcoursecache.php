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
 * Strings for component 'tool_rebuildcoursecache', language 'es_mx', branch 'MOODLE_24_STABLE'
 *
 * @package   tool_rebuildcoursecache
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['areyousure'] = '¿Está seguro de querer continuar?';
$string['disclaimer'] = 'Esta herramienta reconstruirá el caché del curso (modinfo y sectioncache) para todos los cursos en su sitio.<br />Esto puede tomar un largo tiempo en sitios grandes, por lo que tal vez Usted quiera hacer esto durante la noche o cuando el sitio no esté en servicio.';
$string['fail'] = 'FALLA - No se pudo encontrar la ID del Curso: {$a} <br />';
$string['notifyfinished'] = 'La caché del curso ha sido reconstruida';
$string['notifyrebuilding'] = 'Empezando a Reconstruir la Caché del Curso';
$string['pageheader'] = 'Reconstruir Caché del Curso';
$string['pluginname'] = 'Reconstruir Caché del Curso';
$string['specifyids'] = 'Deje esta caja de texto vacía para reconstruir todos los cursos, o especifique cuales IDs de cursos individuales serán reconstruidas (separadas por coma o espacio)<br />Ejemplo: 1,2,30,100 o 1 2 30 100';
$string['success'] = 'ÉXITO - ID del Curso: {$a} <br />';
