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
 * Strings for component 'block_my_external_backup_restore_courses', language 'es_mx', branch 'MOODLE_34_STABLE'
 *
 * @package   block_my_external_backup_restore_courses
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cantrestorecourseincategorycontext'] = 'El usuario "{$a->username}" no puede restaurar curso en categoría "{$a->internalcategoryname}" porque no tiene la capacidad moodle/course:create.\\n El curso será restaurado en la categoría "{$a->defaultcategoryname}".';
$string['cantrestorecourseindefaultcategorycontext'] = 'El usuario "{$a->username}" no puede restaurar curso en la categoría por defecto "{$a->defaultcategoryname}" porque no tiene la capacidad moodle/course:create.';
$string['categorytable'] = 'Nombre de tabla de base de datos en donde está almacenada  la información de la categoría';
$string['categorytable_desc'] = 'Nombre de tabla de base de datos en donde está almacenada  la información de la categoría';
$string['choose_to_restore'] = 'Seleccionar para restauración';
$string['defaultcategory_desc'] = 'ID de categoría en donde se restauran los cursos por defecto';
$string['error_mail_main_message'] = 'Ocurrieron errores al restaurar curso "{$a->externalcoursename}" desde plataforma moodle {$a->externalmoodle} hacia plataforma moodle {$a->localmoodle}.\\nVer detalles debajo.\\n';
$string['error_mail_subject'] = '[Restaurar curso Moodle] : error al restaurar un curso externo';
$string['error_mail_task_error_message'] = '{$a->message}.\\n';
$string['error_mail_task_error_message_courseid'] = 'courseid interna {$a->courseid} : {$a->message}.\\n';
$string['executiontime'] = 'Tiempo estimado de ejecución';
$string['external_moodle'] = 'Lista de Moodles externos a los cuales conectarse';
$string['externalmoodlecourselist'] = 'Lista de cursos de Moodles externos';
$string['includeexternalurlinmail'] = 'Incluir URL de plataforma externa en mail de notificación';
$string['includeexternalurlinmail_desc'] = 'Incluir URL de plataforma externa en mail de notificación';
$string['invalidusername'] = 'Usted no tiene cuenta en esta plataforma';
$string['keepcategory'] = 'Conservar categoría original';
$string['limitend'] = 'Hora de término de ejecución';
$string['limitend_desc'] = 'Hora de término de ejecución';
$string['limitstart'] = 'Hora de inicio de ejecución';
$string['limitstart_desc'] = 'Hora de inicio de ejecución';
$string['mailexternalmoodleinfo'] = '{$a->externalmoodlesitename} ({$a->externalmoodleurl})';
$string['maillocalmoodleinfo'] = '{$a->site} ({$a->siteurl})';
$string['messageprovider:restorationfailed'] = 'Notificar que un curso externo no se pudo restaurar';
$string['messageprovider:restorationsuccess'] = 'Notificar que un curso externo está restaurado exitosamente';
$string['misconfigured_plugin'] = 'Plugin mal configurado';
$string['my_external_backup_restore_courses:can_retrieve_courses'] = 'Obtener archivos de respaldo externos';
$string['my_external_backup_restore_courses:can_see_backup_courses'] = 'Ver respaldos de cursos';
$string['my_external_backup_restore_courses_task'] = 'Trabajo de restaurar curso desde Moodles remotos';
$string['NA'] = 'No Disp.';
$string['nextruntime'] = 'Realizó la';
$string['noexternalmoodleconnected'] = 'Ningun Moodle externo conectado';
$string['pluginname'] = 'Restaurar cursos desde Moodles remotos';
$string['restore'] = 'Restaurar un curso';
$string['restorecourseinoriginalcategory'] = 'Restaurar curso en su categoría si fuera posible';
$string['restorecourseinoriginalcategory_desc'] = 'Restaurar curso en su categoría si fuera posible. Esto requiere los plugins locales course_category_types (course categories system information synchronization).';
$string['restorecourses'] = 'Restaurar cursos';
$string['roles_included_in_external_courses_search'] = 'Roles en curso a añadir a la búsqueda de curso externo';
$string['status_0'] = 'Agendado';
$string['status_1'] = 'En progreso';
$string['status_-1'] = 'Error';
$string['status_2'] = 'Realizado';
$string['success_mail_subject'] = '[Restaurar curso Moodle] : un curso externo restaurado exitosamente';
$string['warningstoowner'] = 'Mostrar advertencias al propietario del curso restaurado';
$string['warningstoowner_desc'] = 'Mostrar advertencias al propietario del curso restaurado';
