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
 * Strings for component 'enrol_flatfile', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   enrol_flatfile
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['encoding'] = 'Codificación de archivo';
$string['expiredaction'] = 'Acción de caducidad de inscripción';
$string['expiredaction_help'] = 'Seleccione la acción a tomar cuando caduca la inscripción del usuario. Por favor tenga en cuenta que algunos datos del usuario y configuraciones son purgados del curso durante la des-inscripción (baja) al curso.';
$string['filelockedmail'] = 'El archivo de texto empleado en inscripciones basadas en archivo ({$a}) no puede ser eliminado por el proceso de \'cron\'. Esto generalmente significa que los permisos son erróneos. Por favor, corrija los permisos para que Moodle puede eliminar el archivo, de lo contrario, podría ser procesado en varias ocasiones.';
$string['filelockedmailsubject'] = 'Error importante: Archivo de inscripción';
$string['flatfileenrolments'] = 'Inscripciones por Archivo Plano (CSV)';
$string['flatfile:manage'] = 'Gestionar manualmente inscripciones de usuarios';
$string['flatfilesync'] = 'Sincronización por archivoplano';
$string['flatfile:unenrol'] = 'Des-inscribir (dar de baja) manualmente usuarios del curso';
$string['location'] = 'Ubicación del archivo';
$string['location_desc'] = 'Especificar la ruta completa al archivo de inscripción. El archivo es borrado automáticamente después de procesarlo.';
$string['mapping'] = 'Mapeo de roles en archivo plano';
$string['messageprovider:flatfile_enrolment'] = 'Mensaje de inscripción por archivo plano';
$string['notifyadmin'] = 'Notificar al administrador';
$string['notifyenrolled'] = 'Notificar a usuarios inscritos';
$string['notifyenroller'] = 'Notificar al usuario responsable de inscripciones';
$string['pluginname'] = 'Archivo plano (CSV)';
$string['pluginname_desc'] = 'Este método revisará repetidamente y procesará un archivo de texto especialmente-formateado en la ubicación que Usted especifique. Este archivo es un archivo separado por comas que se asume que tiene cuatro o seis campos por línea:

 operation, role, user idnumber, course idnumber [, starttime [, endtime]]

en donde:

* operation = add | del
* role = student | teacher | teacheredit
* user idnumber = idnumber en la tabla de usuarios PERO NO ES id
* course idnumber = idnumber en la tabla del curso PERO NO ES id
* starttime = hora de inicio (en segundos desde epoch) - opcional
* endtime = hora de término (en segundos desde epoch) - opcional

Podría verse algo parecido a esto: <pre class="informationbox">
 add, student, 5, CF101
 add, teacher, 6, CF101
 add, teacheredit, 7, CF101
 del, student, 8, CF101
 del, student, 17, CF101
 add, student, 21, CF101, 1091115000, 1091215000 </pre>';
$string['privacy:metadata:enrol_flatfile'] = 'El plugin de Inscripciones por Archivo Plano (CSV) puede almacenar datos personales relacionados a inscripciones futuras en la tabla enrol_flatfile.';
$string['privacy:metadata:enrol_flatfile:action'] = 'La acción de inscripción esperada en la fecha dada';
$string['privacy:metadata:enrol_flatfile:courseid'] = 'La ID del curso con el cual se relaciona la inscripción.';
$string['privacy:metadata:enrol_flatfile:roleid'] = 'La ID del rol a ser asignado o revocado';
$string['privacy:metadata:enrol_flatfile:timeend'] = 'El momento cuando termina la inscripción';
$string['privacy:metadata:enrol_flatfile:timemodified'] = 'El momento cuando la inscripción es modificada';
$string['privacy:metadata:enrol_flatfile:timestart'] = 'El momento cuando comienza la inscripción';
$string['privacy:metadata:enrol_flatfile:userid'] = 'La ID del usuario al cual se relaciona el cambio de rol';
