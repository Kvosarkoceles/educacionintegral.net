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
 * Strings for component 'enrol_manual', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   enrol_manual
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['advanced'] = 'Avanzado';
$string['alterstatus'] = 'Alterar estatus';
$string['altertimeend'] = 'Alterar hora final';
$string['altertimestart'] = 'Alterar hora inicial';
$string['assignrole'] = 'Asignar rol';
$string['assignroles'] = 'Asignar roles';
$string['browsecohorts'] = 'Mirar cohortes';
$string['browseusers'] = 'Mirar usuarios';
$string['confirmbulkdeleteenrolment'] = '¿Está seguro que desea eliminar estas inscripciones de usuarios?';
$string['defaultperiod'] = 'Período de inscripción por defecto';
$string['defaultperiod_desc'] = 'Tiempo por defecto (en segundos) de vigencia del período de inscripción por defecto. Si escribe cero la duración de la inscripción será ilimitada por defecto.';
$string['defaultperiod_help'] = 'Tiempo por defecto durante el cual la inscripción es válida, empezando el momento que el usuario se inscribe. Si se deshabilita, la vigencia de la inscripción será ilimitada (para siempre) por defecto.';
$string['defaultstart'] = 'Inicio de inscripción por defecto';
$string['deleteselectedusers'] = 'Eliminar las inscripciones de usuario seleccionadas';
$string['editselectedusers'] = 'Editar las inscripciones de usuario seleccionadas';
$string['enrolledincourserole'] = 'Inscrito en "{$a->course}" como "{$a->role}"';
$string['enrolusers'] = 'Inscribir usuarios';
$string['enroluserscohorts'] = 'Inscribir cohortes y usuarios seleccionados';
$string['expiredaction'] = 'Acción de caducidad de inscripción';
$string['expiredaction_help'] = 'Elegir la acción a tomar cuando caduque la inscripción del usuario. Por favor tenga en cuenta que algunos datos y configuraciones del usuario son purgados del curso al des-inscribir (dar de baja) del curso.';
$string['expirymessageenrolledbody'] = 'Estimado {$a->user},

Esta es una notificación de que su inscripción al curso \'{$a->course}\' está a punto de expirar en {$a->timeend}. Si requiere ayuda, por favor comuníquese con {$a->enroller}.';
$string['expirymessageenrolledsubject'] = 'Notificación de caducidad de inscripción';
$string['expirymessageenrollerbody'] = 'La inscripción al curso \'{$a->course}\' caducará próximamente en {$a->threshold} para los siguientes usuarios:

{$a->users}

Para extenderles su inscripción, vaya a {$a->extendurl}';
$string['expirymessageenrollersubject'] = 'Notificación de caducidad de inscripción';
$string['manual:config'] = 'Configurar instancias de la inscripción manual';
$string['manual:enrol'] = 'Inscribir usuarios';
$string['manual:manage'] = 'Gestionar inscripciones de usuarios';
$string['manualpluginnotinstalled'] = 'El plugin \'Manual\'  todavía no ha sido instalado';
$string['manual:unenrol'] = 'Des-inscribir (dar de baja) usuarios del curso';
$string['manual:unenrolself'] = 'Des-inscribirse (darse de baja) Usted mismo del curso';
$string['messageprovider:expiry_notification'] = 'Notificaciones de caducidad de inscripciones manuales';
$string['now'] = 'Ahora';
$string['pluginname'] = 'Inscripciones manuales';
$string['pluginname_desc'] = 'El plugin para la inscripción manual permite que los usuarios sean inscritos de forma manual por un usuario con los permisos adecuados, como un profesor, mediante un enlace situado en la configuración de la administración del curso. Este plugin debe normalmente estar activado, ya que algunos otros plugins de inscripción , tales como la auto-inscripción libre, así lo requieran.';
$string['privacy:metadata'] = 'El plugin de Inscripciones Manuales no almacena ningún dato personal.';
$string['selectcohorts'] = 'Seleccionar cohortes';
$string['selection'] = 'Selección';
$string['selectusers'] = 'Seleccionar usuarios';
$string['sendexpirynotificationstask'] = 'Trabajo de enviar notificaciones de caducidad de inscripción manual';
$string['status'] = 'Habilitar las inscripciones manuales';
$string['status_desc'] = 'Permitir el acceso de los usuarios inscritos internamente. Esta opción debe estar habilitada en la mayoría de los casos.';
$string['statusdisabled'] = 'Deshabilitado';
$string['statusenabled'] = 'Habilitado';
$string['status_help'] = 'Esta configuración determina si los usuarios pueden ser inscritos de forma manual por un usuario con los permisos adecuados, como un profesor.';
$string['syncenrolmentstask'] = 'Trabajo de sincronizar inscripciones manuales';
$string['unenrol'] = 'Des-inscribir (dar de baja) usuario';
$string['unenrolselectedusers'] = 'Des-inscribir (dar de baja) usuarios seleccionados';
$string['unenrolselfconfirm'] = '¿Desea realmente des-inscribirse (darse de baja)  del curso "{$a}" ?';
$string['unenroluser'] = '¿ Realmente desea des-inscribir (dar de baja)  a "{$a->user}" del curso "{$a->course}"?';
$string['unenrolusers'] = 'Des-inscribir (dar de baja)  usuarios';
$string['wscannotenrol'] = 'La instancia del plugin no puede inscribir manualmente a un usuario en el curso con id = {$a->courseid}';
$string['wsnoinstance'] = 'La instancia del plugin para la inscripción manual no existe o está deshabilitada para el curso (id = {$a->courseid})';
$string['wsusercannotassign'] = 'Usted no tiene permiso para asignar este rol ({$a->roleid}) a este usuario ({$a->userid}) en este curso({$a->courseid}).';
