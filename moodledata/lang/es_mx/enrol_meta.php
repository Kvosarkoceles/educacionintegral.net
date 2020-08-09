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
 * Strings for component 'enrol_meta', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   enrol_meta
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addgroup'] = 'Añadir al grupo';
$string['coursesort'] = 'Ordenal lista de curso';
$string['coursesort_help'] = 'Esto determina si es que la lista de cursos que pueden ser enlazados son ordenados por el orden dado (el orden configurado en Administración del Sitio > Cursos > Gestionar cursos y categorías) o alfabéticamente por la configuración del curso.';
$string['creategroup'] = 'Crear nuevo grupo';
$string['defaultgroupnametext'] = '{$a->name} curso {$a->increment}';
$string['enrolmetasynctask'] = 'Trabajo de sincronización de meta inscripción';
$string['linkedcourse'] = 'Enlazar curso';
$string['meta:config'] = 'Configurar instancias de meta-inscripción';
$string['meta:selectaslinked'] = 'Seleccionar cursos como meta-enlazados';
$string['meta:unenrol'] = 'Des-inscribir (dar de baja) usuarios suspendidos';
$string['nosyncroleids'] = 'Roles que actualmente no están sincronizados';
$string['nosyncroleids_desc'] = 'Por defecto, todas las asignaciones de rol a nivel de curso se sincronizan de cursos-padre a cursos-hijo. Los roles seleccionados aquí no se incluirán en el proceso de sincronización. Los roles actuales se actualizarán en la próxima ejecución del \'cron\'.';
$string['pluginname'] = 'Meta-enlace a curso';
$string['pluginname_desc'] = 'El plugin de meta enlace para inscripción a curso sincroniza las inscripciones y los roles en dos diferentes cursos';
$string['privacy:metadata:core_group'] = 'El plugin de Meta Inscripción puede crear un nuevo grupo o usar un grupo existente para añadir a todos los participantes del curso enlazado.';
$string['syncall'] = 'Sincronizar a todos los usuarios inscritos';
$string['syncall_desc'] = 'Si se habilita, todos los usuarios inscritos serán sincronizados aún cuando no tuvieran un rol en el curso padre. Si se deshabilita, solamente los usuarios que tengan al menos un rol sincronizado serán inscritos en el curso hijo.';
