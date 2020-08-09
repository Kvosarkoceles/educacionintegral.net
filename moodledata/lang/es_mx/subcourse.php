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
 * Strings for component 'subcourse', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   subcourse
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['blankwindow'] = 'Abrir en una nueva ventana';
$string['blankwindow_help'] = 'Cuando se selecciona, el enlace abrirá el curso referenciado en un nueva ventana del navegador.';
$string['completioncourse'] = 'Requerir curso completado';
$string['completioncourse_help'] = 'Si se habilita, la actividad se considera completa cuando un estudiante complete el curso referenciado.';
$string['completioncourse_text'] = 'El estudiante debe completar el curso referenciado para completar esta actividad.';
$string['currentgrade'] = 'Calificación actual: {$a}';
$string['currentprogress'] = 'Progreso: {$a}%';
$string['errfetch'] = 'No se pudieron obtener calificaciones: código del error: {$a}';
$string['errlocalremotescale'] = 'No se pudieron obtener las calificaciones: El ítem de calificación final remota usa escala local.';
$string['eventgradesfetched'] = 'Calificaciones buscadas';
$string['fetchgradesmode'] = 'Obtener calificaciones como';
$string['fetchgradesmode0'] = 'Valores reales';
$string['fetchgradesmode1'] = 'Valores porcentuales';
$string['fetchnow'] = 'Buscar calificaciones ahora';
$string['gotocoursename'] = 'Ir al curso <a href="{$a->href}">{$a->name}</a>';
$string['gotorefcourse'] = 'Ir a  {$a}';
$string['gotorefcoursegrader'] = 'Todas las calificaciones en {$a}';
$string['gotorefcoursemygrades'] = 'Mis calificaciones en {$a}';
$string['gradesfetching'] = 'Obtención de calificaciones';
$string['hiddencourse'] = '*oculto*';
$string['instantredirect'] = 'Redireccionar al curso referenciado';
$string['instantredirect_help'] = 'Si se habilita, los usuarios serán redireccionados hacia el curso referenciado al intentar ver la página del módulo subcurso. No afecta a usuarios con el permiso para obtener calificaciones manualmente.';
$string['lastfetchnever'] = 'Las calificaciones todavía no han sido obtenidas';
$string['lastfetchtime'] = 'Última búsqueda: {$a}';
$string['linkcontrol'] = 'Enlace a actividad subcurso';
$string['modulename'] = 'Subcurso';
$string['modulename_help'] = 'Este módulo proporciona una funcionalidad muy simple y útil. Cuando se añade a un curso, se comporta como una actividad calificada. La calificación para cada estudiante se obtiene de una calificación final de otro curso. Combinado con metacursos, esto les permite a los diseñadores de cursos  organizar cursos en unidades separadas.';
$string['modulenameplural'] = 'Subcursos';
$string['nocoursesavailable'] = 'No hay cursos de donde obtener calificaciones';
$string['nosubcourses'] = 'No hay subcursos en este curso';
$string['pluginadministration'] = 'Administración del subcurso';
$string['pluginname'] = 'Subcurso';
$string['privacy:metadata'] = 'Subcurso no almacena ningún dato personal';
$string['refcourse'] = 'Curso de referencia';
$string['refcoursecurrent'] = 'Mantener la referencia actual';
$string['refcourse_help'] = 'El curso referenciado es de donde se toma la calificación para la actividad. Los estudiantes deberían de estar inscritos dentro del curso referenciado.

Usted necesita ser un profesor en el curso, para poder tenerlo enlistado aquí. Usted podría querer pedirle a su administrador del sitio que configure este subcurso para que Usted pueda obtener calificaciones de otros cursos.';
$string['refcourselabel'] = 'Obtener calificaciones desde';
$string['refcoursenull'] = 'No hay curso de referencia configurado';
$string['subcourse:addinstance'] = 'Añadir un nuevo subcurso';
$string['subcourse:begraded'] = 'Recibir calificación desde el curso referenciado';
$string['subcourse:fetchgrades'] = 'Obtener calificaciones manualmente desde el curso referenciado';
$string['subcoursename'] = 'Nombre del subcurso';
$string['taskcheckcompletedrefcourses'] = 'Revisar finalización de curso referenciado';
$string['taskfetchgrades'] = 'Obtener calificaciones del subcurso';
