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
 * Strings for component 'enrol_waitlist', language 'es_mx', branch 'MOODLE_38_STABLE'
 *
 * @package   enrol_waitlist
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['confirmation'] = 'Si Usted continúa, será inscrito en este curso.<br><br>¿Está Usted absolutamente seguro de querer hacer esto?';
$string['confirmation_cancel'] = 'Cancelar';
$string['confirmationfull'] = '<strong>Este curso actualmente está lleno.</strong> Si Usted continúa, será puesto en una lista-de-espera y será inscrito automáticamente y se le avisará por Email, solamente en el caso de que surjan lugares disponibles suficientes.<br>';
$string['confirmation_no'] = 'No';
$string['confirmation_yes'] = 'Si';
$string['continue'] = 'continuar';
$string['customwelcomemessage'] = 'Mensaje de BienVenida personalizado';
$string['defaultrole'] = 'Asignaciones de rol por defecto';
$string['defaultrole_desc'] = 'Seleccione el rol que será asignado a los usuarios durante la inscripción a lista de espera';
$string['disable'] = 'Usted no puede inscribirse a sí mismo en este curso.';
$string['enrolenddate'] = 'Fecha final';
$string['enrolenddate_help'] = 'Si se habilita, los usuarios podrán inscribirse a sí mismos solamente hasta esta fecha.';
$string['enrolenddaterror'] = 'La fecha de fin de inscripción no puede ser anterior a la fecha de inicio';
$string['enrolme'] = 'Inscríbame';
$string['enrolperiod'] = 'Duración de la inscripción';
$string['enrolperiod_desc'] = 'El tiempo (duración) por defecto que la inscripción es válida (en segundos). Si se ajusta a cero, la duración de la inscripción será ilimitada por defecto.';
$string['enrolperiod_help'] = 'El tiempo (duración) por defecto que la inscripción es válida (en segundos), iniicando el momento que el usuario se inscribe a sí mismo. Si se deshabilita, la duración de la inscripción será ilimitada.';
$string['enrolstartdate'] = 'Fecha de inicio';
$string['enrolstartdate_help'] = 'Si se habilita, los usuarios podrán inscribirse ellos mismos, solamente de esta fecha en adelante.';
$string['enrolusers'] = 'Inscribir usuarios';
$string['faculty'] = 'Facultad';
$string['groupkey'] = 'Usar claves para inscripción a grupo';
$string['groupkey_desc'] = 'Usar por defecto claves para inscripción a grupo';
$string['groupkey_help'] = 'Además de restringir el acceso al curso a solamente aquellos que conocen la clave, el uso de una clave de inscripción de grupo significa que los usuarios son añadidos automáticamente al grupo correspondiente al inscribirse al curso.

Para usar una clave de inscripción a grupo, debe especificarse una clave de inscripción en las configuraciones del curso y además una clave diferente para cada grupo en las configuraciones del grupo.';
$string['lineconfirm'] = '<br>¿ Está Usted absolutamente seguro de querer hacer esto ?';
$string['lineinfo'] = '<br>Número de personas en lista de espera adelante de Usted';
$string['longtimenosee'] = 'Des-inscribir (dar de baja) a inactivo después de';
$string['longtimenosee_help'] = 'Si los usuarios no han accedido a un curso por un largo tiempo, entonces son des-incritos (dados de baja) automáticamente. Este parámetro especifica dicho límite de tiempo.';
$string['manage::assign'] = 'Asignar';
$string['manage::define'] = 'Definir';
$string['maxenrolled'] = 'Máx. usuarios inscritos';
$string['maxenrolled_help'] = 'Especifica el número máximo de usuarios que pueden estar en lista-de-espera para inscribirse. 0 significa sin límite.';
$string['maxenrolledreached'] = 'Ya se alcanzó el número máximo de usuarios que pueden estar en lista-de-espera';
$string['nocursefields'] = 'Sin campos';
$string['password'] = 'Clave de inscripción';
$string['password_help'] = 'Una clave de inscripción habilita que el acceso al curso sea restringido solamente para aquellos que conozcan la clave.

Si este campo se deja vacío, cualquier usuario podrá inscribirse al curso.

Si se especifica una clave para inscripción, a cualquier usuario queintente inscribirse al curso se le pedirá escribir dicha clave. Tenga en cuenta que un usuario solamente necesita proporcionar la clave de inscripción UNA VEZ, cuando se inscriban al curso.';
$string['passwordinvalid'] = 'Clave de inscripción incorrecta; por favor, inténtelo de nuevo';
$string['passwordinvalidhint'] = 'Esa clave de inscripción era incorrecta; por favor, inténtelo de nuevo.<br />
(Aquí hay una pista - empieza con \'{$a}\')';
$string['pluginname'] = 'Inscripción a lista-de-espera';
$string['pluginname_desc'] = 'El plugin para inscripción por lista-de-espera les permite a los usuarios elegir en cuales cursos quieren participar. Los cursos pueden estar protegidos por una clave de inscripción. Internamente, la inscripción se hace por medio del  plugin de inscripción manual, que tiene que estar habilitado dentro del mismo curso.';
$string['privacy:metadata:user_enrol_waitlist'] = 'Almacena metadatos del usuario en campo userid';
$string['profilecreatefield'] = 'Crear un nuevo campo de lista-de-espera';
$string['profiledescription2'] = 'Descripción2 del campo';
$string['profilefield'] = 'Campo';
$string['requirepassword'] = 'Requerir clave para inscripción';
$string['requirepassword_desc'] = 'Requerir clave de inscripción en cursos nuevos e impedir que se quite la clave de inscripción a los cursos existentes.';
$string['role'] = 'Asignar rol';
$string['sendcoursewelcomemessage'] = 'Enviar mensaje de BienVenida al curso';
$string['sendcoursewelcomemessage_help'] = 'Si se habilita, los usuarios reciben un mensaje de BienVenida por Email cuando se inscriben a lista-de-espera de un curso';
$string['showhint'] = 'Mostrar pista';
$string['showhint_desc'] = 'Mostrar la primera letra de la clave de acceso para invitado.';
$string['status'] = 'Permitir inscripciones a lista-de-espera';
$string['status_desc'] = 'Permitirles a los usuarios inscribirse a lista-de-espera a cursos por defecto';
$string['status_help'] = 'Esta configuración determina si es que un usuario se puede inscribir  (y también des-inscribir (dar de baja) si tienen el permiso apropiado) a sí mismo del curso';
$string['unenrolwaitlistconfirm'] = '¿Realmente quiere des-inscribir (dar de baja) a "{$a}"?';
$string['usepasswordpolicy'] = 'Usar política de contraseñas';
$string['usepasswordpolicy_desc'] = 'Usar política estándar de contraseñas para las claves de inscripción';
$string['users_on_waitlist'] = 'Usuarios en lista de espera';
$string['waitlist:config'] = 'Configurar instancias de inscripción a lista-de-espera';
$string['waitlisted_users'] = 'Usuarios enlistados_en_espera';
$string['waitlistinfo'] = '<b>Este curso actualmente está saturado</b>. <br/><br/>Gracias por su solicitud de registro. Usted ha sido puesto en una lista de espera y será informado via Email en caso de que haya un espacio disponible.';
$string['waitlist:manage'] = 'Gestioar usuarios inscritos';
$string['waitlist:unenrol'] = 'Des-inscribir (dar de baja) usuarios del curso';
$string['waitlist:unenrolself'] = 'Des-inscribirse (darse de baja) a sí mismo del curso';
$string['waitlist:unenrolwaitlist'] = 'Des-inscribir (dar de baja) lista-de-espera del curso';
$string['welcometocourse'] = 'Bienvenido a {$a}';
$string['welcometocoursetext'] = 'BienVenido a {$a->coursename}!

Si no lo ha hecho antes, le recomendamos que edite su página de perfil, para que podamos saber más acerca de Usted:

{$a->profileurl}';
