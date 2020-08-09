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
 * Strings for component 'local_course_template', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   local_course_template
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cachedef_backups'] = 'Respaldos de plantilla de curso';
$string['cachedef_templates'] = 'IDs de curso de plantilla de curso';
$string['cleanuptask'] = 'Limpiar respaldos de plantilla de curso';
$string['defaulttemplate'] = 'NombreCorto predeterminado de plantilla de curso';
$string['defaulttemplate_desc'] = 'NombreCorto de la plantilla predeterminada de curso. Los cursos que no coincidan con una plantilla usarán esta, si existiera.';
$string['enablecaching'] = 'Habilitar caché';
$string['enablecaching_desc'] = 'Cuando se habilita cachear, el plugin creará un respaldo del curso plantilla y entonces re-utilizará el respaldo para nuevos cursos hasta que la caché sea borrada o el respaldo sea eliminado.';
$string['event:template_copied:description'] = 'La plantilla de curso con id {$a->templateid} fue copiada al curso con id {$a->courseid}';
$string['event:template_copied:name'] = 'Plantilla de curso copiada';
$string['extracttermcode'] = 'Código del período (semestre)';
$string['extracttermcode_desc'] = 'Usado para poblar [TERMCODE]. Derivado del número_id del curso.r.';
$string['pluginname'] = 'Usar plantilla en creación de cuirso';
$string['privacy:metadata'] = 'La plantilla de Uso en el plugin para Creación de curso no almacena ningún dato personal.';
$string['templatenameformat'] = 'Formato de nombre_corto de plantilla';
$string['templatenameformat_desc'] = 'Formato de nombre_corto esperado para cursos plantilla';
