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
 * Strings for component 'enrol_self', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   enrol_self
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['canntenrol'] = 'La inscripción está deshabilitada o inactiva';
$string['canntenrolearly'] = 'Usted aun no puede inscribirse; la inscripción comienza en  {$a}.';
$string['canntenrollate'] = 'Usted ya no puede inscribirse, porque la inscripción terminó en  {$a}.';
$string['cohortnonmemberinfo'] = 'Solamente los miembros de cohorte \'{$a}\' se pueden inscribir-a-si-mismos';
$string['cohortonly'] = 'Solamente miembros de cohorte';
$string['cohortonly_help'] = 'Inscribirse-a-si-mismos se puede restringir a miembro de una cohorte específica exclusivamente. Observe que esta configuración no tiene efecto sobre las inscripciones ya existentes.';
$string['confirmbulkdeleteenrolment'] = '¿Está seguro de querer eliminar estas inscripciones de usuarios?';
$string['customwelcomemessage'] = 'Mensaje de bienvenida personalizado';
$string['customwelcomemessage_help'] = 'Se puede añadir un mensaje personalizado de bienvenida en texto simple o en auto-formato de Moodle, incluyendo marcas HTML y marcas multi-idioma.

En el mensaje pueden incluirse los siguientes remplazables:

* Nombre del curso {$a->coursename}
* Enlace hacia la página del perfil del usuario {$a->profileurl}
* Email del usuario {$a->email}
* Nombre completo del usuario {$a->fullname}';
$string['defaultrole'] = 'Asignación de rol por defecto';
$string['defaultrole_desc'] = 'Seleccione el rol que debe asignarse a los usuarios con auto-inscripción';
$string['deleteselectedusers'] = 'Eliminar inscripciones de usuarios seleccionados';
$string['editselectedusers'] = 'Editar inscripciones de usuarios seleccionados';
$string['enrolenddate'] = 'Fecha límite';
$string['enrolenddate_help'] = 'Si se habilita, los usuarios se pueden inscribir ellos mismos solamente hasta esta fecha.';
$string['enrolenddaterror'] = 'La fecha de fin de la inscripción no puede ser anterior a la fecha inicial';
$string['enrolme'] = 'Inscribirme';
$string['enrolperiod'] = 'Duración de la inscripción';
$string['enrolperiod_desc'] = 'Duración por defecto de la vigencia de la inscripción (en segundos). Si se pone cero, la inscripción será ilimitada (para siempre) por defecto.';
$string['enrolperiod_help'] = 'Duración de la vigencia de la inscripción, empezando en el momento que el usuario se inscribe a si mismo. Si se desabilita, la inscripción será ilimitada (para siempre).';
$string['enrolstartdate'] = 'Fecha de inicio';
$string['enrolstartdate_help'] = 'Si se habilita, los usuarios podrán inscribirse ellos mismo a partir de esta fecha en adelante exclusivamente.';
$string['expiredaction'] = 'Acción de caducidad de inscripción';
$string['expiredaction_help'] = 'Elegir la acción a tomar cuando caduque la inscripción del usuario. Por favor tenga en cuenta que algunos datos y configuraciones del usuario son purgados del curso al des-inscribirse (darse de baja) del curso.';
$string['expirymessageenrolledbody'] = 'Estimado {$a->user},

Esta es una notificación acerca de su inscripción al curso \'{$a->course}\' que está próxima a expirar en {$a->timeend}.

Si requiere ayuda, por favor póngase en contacto con  {$a->enroller}.';
$string['expirymessageenrolledsubject'] = 'Notificación de caducidad de auto inscripción';
$string['expirymessageenrollerbody'] = 'La auto inscripcion al curso \'{$a->course}\' caducará dentro de  {$a->threshold} para los siguientes usuarios:

{$a->users}

Para extender sus inscripciones, vaya a {$a->extendurl}';
$string['expirymessageenrollersubject'] = 'Notificación de caducidad de auto inscripción';
$string['expirynotifyall'] = 'Persona que inscribe y usuario inscrito';
$string['expirynotifyenroller'] = 'Persona que inscribe solamente';
$string['groupkey'] = 'Usar claves de inscripción de grupo';
$string['groupkey_desc'] = 'Por defecto, utilice claves de inscripción de grupo.';
$string['groupkey_help'] = 'Además de restringir el acceso al curso a sólo aquellos que conocen la clave, el uso de claves de inscripción de grupo significa que los usuarios se agregan automáticamente a los grupos correspondientes cuando se inscriben en el curso.

Nota: Debe especificarse una clave de inscripción al grupo en la configuración de auto-inscripción del curso, y también deben especificarse claves para inscripción a grupos en las configuraciones de los grupos.';
$string['keyholder'] = 'Usted debería de haber recibido esta clave de inscripción de:';
$string['longtimenosee'] = 'Des-inscribir (dar de baja) los usuarios inactivos después de';
$string['longtimenosee_help'] = 'Si los usuarios no acceden a un curso durante mucho tiempo, entonces se les des-inscribe (da de baja)  automáticamente. Este parámetro especifica este plazo de tiempo.';
$string['maxenrolled'] = 'Número máximo de usuarios inscritos';
$string['maxenrolled_help'] = 'Especifique el número máximo de usuarios que pueden auto-inscribirse. El 0 significa sin límite.';
$string['maxenrolledreached'] = 'Se alcanzó el número máximo de usuarios permitidos para auto-inscripción.';
$string['messageprovider:expiry_notification'] = 'Notificaciones de caducidad de auto inscripción';
$string['newenrols'] = 'Permitir nuevas inscripciones';
$string['newenrols_desc'] = 'Les permite a los usuarios auto-inscribirse a nuevos cursos por defecto.';
$string['newenrols_help'] = 'Esta configuración determina si un usuario puede inscribirse a este curso.';
$string['nopassword'] = 'No se necesita clave para inscribirse';
$string['password'] = 'Clave de inscripción (¿# de grupo?)';
$string['password_help'] = '<p>Una clave de acceso permite que el acceso al curso esté limitado sólo a aquellos que conocen dicha clave. </p> <p>Si el campo se deja en blanco, cualquier usuario puede inscribirse en el curso.</p> <p>Si se especifica una clave de acceso, cualquier usuario que intenta inscribirse en el curso deberá proporcionar la clave. Tenga en cuenta que un usuario sólo tiene que proporcionar la clave de acceso UNA VEZ, cuando se inscribe en el curso.</p>';
$string['passwordinvalid'] = 'Contraseña de inscripción incorrecta, pruebe de nuevo';
$string['passwordinvalidhint'] = 'La contraseña de inscripción es incorrecta. Por favor, inténtelo de nuevo<br /> (Una pista: comienza con \'{$a}\')';
$string['pluginname'] = 'Auto-inscripción';
$string['pluginname_desc'] = '<p>El plugin para auto-inscripción permite a los usuarios elegir los cursos en los que quieren participar.</p> <p>Los cursos pueden estar protegidos por una contraseña de acceso.</p> <p> Internamente, la inscripción se realiza a través del plugin para la inscripción manual, que debe estar habilitado en el mismo curso.</p>';
$string['privacy:metadata'] = 'El plugin de Auto inscripción no almacena ningún dato personal.';
$string['requirepassword'] = 'Se necesita una clave de inscripción';
$string['requirepassword_desc'] = 'Se necesita clave de inscripción en nuevos cursos y se evita la eliminación de la clave de inscripción de los cursos existentes.';
$string['role'] = 'Rol asignado por defecto';
$string['self:config'] = 'Configurar instancias de auto-inscripción';
$string['self:holdkey'] = 'Aparece como el propietario de la clave de auto-inscripción';
$string['self:manage'] = 'Gestionar usuarios inscritos';
$string['self:unenrol'] = 'Des-inscribir (dar de baja)  usuarios del curso';
$string['self:unenrolself'] = 'Des-inscribirse (darse de baja) de baja del curso';
$string['sendcoursewelcomemessage'] = 'Enviar mensaje de bienvenida al curso';
$string['sendcoursewelcomemessage_help'] = 'Cuando un usuario se inscribe a sí mismo en el curso, se les puede enviar un mEmail con mensaje de BienVenida. Si se envía desde el contacto del curso (por defecto, el profesor), y más de un usuario tiene este rol, el Email es enviado desde el primer usuario al que se le asignó el rol.';
$string['sendexpirynotificationstask'] = 'Trabajo de enviar notificaciones de caducidad de auto-inscripción';
$string['showhint'] = 'Mostrar pista';
$string['showhint_desc'] = 'Mostrar la primera letra de la contraseña de acceso de invitados.';
$string['status'] = 'Permitir inscripciones existentes';
$string['status_desc'] = 'Permitir que los usuarios puedan auto-inscribirse en nuevos cursos.';
$string['status_help'] = 'Si se habilita al mismo tiempo que se deshabilite el \'Permitir nuevas inscripciones\', solamente los usuarios que se hubieran auto-inscrito previamente pueden acceder al curso. Si se deshabilita, este método de inscripción estaría efectivamente deshabilitado, porque todas las auto-inscripciones existentes estarán suspendidas y los usuarios nuevos no podrán auto-inscribirse.';
$string['syncenrolmentstask'] = 'Trabajo de sincronizar auto-inscripciones';
$string['unenrol'] = 'Des-inscribir (dar de baja) usuario';
$string['unenrolselfconfirm'] = '¿Está seguro que quiere des-inscribirse (darse de baja)  del curso "{$a}"?';
$string['unenroluser'] = 'Realmente quiere des-inscribir (dar de baja) a "{$a->user}" del curso "{$a->course}"?';
$string['unenrolusers'] = 'Des-inscribir (dar de baja) usuarios';
$string['usepasswordpolicy'] = 'Utilice la directiva de contraseñas';
$string['usepasswordpolicy_desc'] = 'Utilice la directiva de contraseñas estándar para las claves de inscripción.';
$string['welcometocourse'] = 'Bienvenido a {$a}';
$string['welcometocoursetext'] = 'Bienvenido a {$a->coursename} Lo primero que debe hacer es actualizar su información personal: así podremos saber algo más sobre usted: {$a->profileurl}';
