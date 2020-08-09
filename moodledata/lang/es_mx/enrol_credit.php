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
 * Strings for component 'enrol_credit', language 'es_mx', branch 'MOODLE_36_STABLE'
 *
 * @package   enrol_credit
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['canntenrol'] = 'La inscripción está deshabilitada o inactiva';
$string['canntenrolearly'] = 'Usted aun no puede inscribirse; la inscripción inicia en {$a}.';
$string['canntenrollate'] = 'Usted ya no puede inscribirse; la inscripción terminó en {$a}.';
$string['checkout'] = '{$a->credit_cost} créditos de curso serán restados de su balance de  {$a->user_credits}.';
$string['cohortnonmemberinfo'] = 'Solamente miembros de la cohorte \'{$a}\' pueden inscribirse.';
$string['cohortonly'] = 'Solamente miembros de la cohorte';
$string['cohortonly_help'] = 'La inscripción puede restringirse a solamente miembros de una cohorte especificada. Tenga en cuenta que cambiar esta configuración no tiene efecto sobre las inscripciones ya existentes.';
$string['confirmbulkdeleteenrolment'] = '¿Está seguro de querer eliminar estas inscripciones de usuario ?';
$string['credit:config'] = 'Configurar instancias de inscripción por crédito de curso';
$string['credit_cost'] = 'Costo en créditos';
$string['credit_cost_help'] = 'El número de créditos que le serán restados a los usuarios al inscribirse.';
$string['credit:holdkey'] = 'Aparecer como el portador de la clave de inscripción al curso por créditos';
$string['credit:manage'] = 'Gestionar usuarios inscritos';
$string['credit:unenrol'] = 'Des-inscribir usuarios del curso';
$string['credit:unenrolself'] = 'Des-inscribirse a sí mismo del curso';
$string['customwelcomemessage'] = 'Mensaje personalizado de BienVenida';
$string['customwelcomemessage_help'] = 'Puede añadirse un mensaje de bienvenida personalizado como testo simple o formato automático de Moodle, incluyendo marcas HTML y marcas multi-idioma.

Los siguientes reemplazables pueden ser incluidos en el mensaje:

* Nombre del curso {$a->coursename}
* Enlace a la página del perfil del usuario {$a->profileurl}
* Email del usuario {$a->email}
* Nombre completo del usuario {$a->fullname}';
$string['defaultrole'] = 'Asignación de rol predeterminada';
$string['defaultrole_desc'] = 'Seleccionar rol que debería ser asignado a usuarios durante la inscripción';
$string['deleteselectedusers'] = 'Eliminar inscripciones de usuarios seleccionados';
$string['editselectedusers'] = 'Editar inscripciones de usuarios seleccionados';
$string['enrol_credit'] = 'Inscribir con créditos de curso';
$string['enrolenddate'] = 'Fecha de fin';
$string['enrolenddate_help'] = 'Si se habilita, los usuarios pueden inscribirse solamente hasta esta fecha';
$string['enrolenddaterror'] = 'La fecha de fin de inscripción no puede ser anterior a la fecha de inicio';
$string['enrolme'] = 'Inscribirme';
$string['enrolperiod'] = 'Duración de inscripción';
$string['enrolperiod_desc'] = 'Lapso de tiempo predeterminado que la inscripción es válida. Si se configura a cero, la duración de la inscripción será ilimitada por defecto.';
$string['enrolperiod_help'] = 'Lapso de tiempo que la inscripción es válida, comenzando con el momento el que los usuarios se inscriben ellos mismos. Si se deshabilita, la duración de la inscripción será ilimitada.';
$string['enrolstartdate'] = 'Fecha de inicio';
$string['enrolstartdate_help'] = 'Si se habilita, los usuarios pueden inscribirse ellos mismo solamente a partir de esta fecha.';
$string['expiredaction'] = 'Acción de expiración de inscripción';
$string['expiredaction_help'] = 'Seleccionar acción a realizar cuando expire la inscripción del  usuario. Por favor tenga en cuenta que algunos datos del usuario y configuraciones son purgados del curso durante la des-inscripción al curso.';
$string['expirymessageenrolledbody'] = 'Estimado/a {$a->user},

Esta es una notificación acerca de que su inscripción al curso \'{$a->course}\' está próxima a expirar en {$a->timeend}.

Si necesita ayuda, por favor póngase en contacto con {$a->enroller}.';
$string['expirymessageenrolledsubject'] = 'Notificación de expiración de inscripción';
$string['expirymessageenrollerbody'] = 'La inscripción en el curso \'{$a->course}\' expirará en los próximos {$a->threshold} para los siguientes usuarios:

{$a->users}

Para extenderles sus inscripciones, vaya  a {$a->extendurl}';
$string['expirymessageenrollersubject'] = 'Notificación de expiración de inscripción';
$string['groupkey'] = 'Usar claves de inscripción a grupo';
$string['groupkey_desc'] = 'Usar claves de inscripción a grupo por defecto.';
$string['groupkey_help'] = 'Además de restringir el acceso al curso a solamente aquellos que conocen a clave, el uso de claves de inscripción a grupo significa que los usuarios son automáticamente añadidos a grupos cuando se inscriben en el curso.

Nota: Debe especificarse una clave de inscripción en las configuraciones de inscripción y además como claves de inscripción de grupo en las configuraciones del grupo.';
$string['insufficient_credits'] = 'Usted tiene insuficientes créditos de curso para inscribirse. {$a->credit_cost} créditos son necesarios y su balance es de  {$a->user_credits}.';
$string['keyholder'] = 'Usted debería de haber recibido esta clave de inscripción de:';
$string['longtimenosee'] = 'Desinscribir inactivos después de';
$string['longtimenosee_help'] = 'Si los usuarios no han accedido a un curso por un largo tiempo, entonces ellos son automáticamente des-inscritos. Este parámetro especifica ese límite de tiempo.';
$string['maxenrolled'] = 'Máx usuarios inscritos';
$string['maxenrolled_help'] = 'Especifica el número máximo de usuarios que pueden inscribirse. 0 significa sin límite.';
$string['maxenrolledreached'] = 'El número máximo de usuarios permitidos a inscribirse ya se ha alcanzado.';
$string['messageprovider:expiry_notification'] = 'Notificaciones de expiración de inscripción por créditos a curso';
$string['newenrols'] = 'Permitir nuevas inscripciones';
$string['newenrols_desc'] = 'Permitir por defecto que los usuarios se inscriban a nuevos cursos.';
$string['newenrols_help'] = 'Esta configuración determina si es que un usuario puede o no inscribirse a este curso.';
$string['not_set'] = 'No configurado';
$string['pluginname'] = 'Inscripción a curso por crédito';
$string['pluginname_desc'] = '';
$string['privacy:metadata'] = 'El plugin de Inscripción a curso por crédito no almacena ningún dato personal.';
$string['profile_field_map'] = 'Mapeo de perfil de usuario';
$string['profile_field_map_help'] = 'Seleccionar el campo del perfil que almacena los créditos de curso en los perfiles de usuario.';
$string['purchase'] = 'Comprar';
$string['role'] = 'Rol asignado predeterminado';
$string['sendcoursewelcomemessage'] = 'Mandar mensaje de BienVenida al curso';
$string['sendcoursewelcomemessage_help'] = 'Cuando un usuario se inscribe en el curso, se le puede enviar un mensaje Email de BienVenida. Si fuera enviado desde el contacto del curso (por defecto el profesor), y más de un usuario tuviera este rol, el Email es enviado desde el primer usuario al que se haya asignado el rol.';
$string['sendexpirynotificationstask'] = 'Trabajo de enviar notificaciones de expiración de inscripción a curso por crédito';
$string['showhint'] = 'Mostrar pista';
$string['showhint_desc'] = 'Mostrar primera letra de la clave de acceso al curso.';
$string['status'] = 'Permitir inscripciones existentes';
$string['status_desc'] = 'Habilitar el método de inscripción a curso por crédito en cursos nuevos.';
$string['status_help'] = 'Si se habilita, junto con "Permitir nuevas inscripciones" deshabilitado, entonces solamente los usuarios que previamente se hayan inscrito podrán acceder al curso. Si está deshabilitado, este método de inscripción es deshabilitado efectivamente, dado que todas las inscripciones existentes están suspendidas y los usuarios nuevos no se pueden inscribir.';
$string['syncenrolmentstask'] = 'Trabajo de sincronización de inscripciones en la inscripción a curso por créditos';
$string['unenrol'] = 'Des-inscribir usuario';
$string['unenrolselfconfirm'] = '¿Realmente desea des-inscribirse Usted mismo del curso  "{$a}"?';
$string['unenroluser'] = '¿Realmente desea des-inscribir a  "{$a->user}" del curso "{$a->course}"?';
$string['unenrolusers'] = 'Des-inscribir usuarios';
$string['welcometocourse'] = 'BienVenido a {$a}';
$string['welcometocoursetext'] = '¡Bienvenido a {$a->coursename}!

Si no lo ha  hecho aun, Usted debería editar su página del perfil para que podamos saber más sobre Usted:

{$a->profileurl}';
