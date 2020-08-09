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
 * Strings for component 'enrol_profilefield', language 'es_mx', branch 'MOODLE_24_STABLE'
 *
 * @package   enrol_profilefield
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = 'Asignar rol';
$string['badprofile'] = 'Usted tal vez podría decepcionarse, pero su información de perfil le impide inscribirse en este curso. Sin embargo, si tiene una buena razón para estar aquí, por favor contacte a un administrador para que cambie su perfil';
$string['course'] = 'Curso : $a';
$string['defaultnotification'] = 'Estomado/a <%%TEACHER%%>, el nuevo usuario <%%USERNAME%%> se ha inscrito a sí mismo (el perfil coincidió) en su curso <%%COURSE%%>. Usted puede revisar su perfil <a href="<%%URL%%>">aquí</a> después de entrar al sitio.';
$string['enrolenddate'] = 'Fecha de terminación';
$string['enrolenddate_help'] = 'Si se habilita, los usuarios pueden estar inscritos solamente hasta esta fecha.';
$string['enrolenddaterror'] = 'La fecha de fin de inscripción no puede ser anterior a la fecha de inicio';
$string['enrolme'] = 'Inscribirme en este curso';
$string['enrolmentconfirmation'] = 'Sea bienvenido/a. La información de su perfil le permite inscribirse en este curso. ¿Desea proseguir?';
$string['enrolname'] = 'Inscripción por Campo de Perfil';
$string['enrolperiod'] = 'Duración de inscripción';
$string['enrolperiod_desc'] = 'El tiempo por defecto que será válida la inscripción (en segundos). Si se pone a cero, la duración será ilimitada por defecto.';
$string['enrolperiod_help'] = 'El tiempo que será válida la inscripción, empezando en el momento de que el usuario se inscriba. Si se pone a cero, la duración será ilimitada por defecto.';
$string['enrol/profilefield:unenrolself'] = 'Se puede des-inscribir por sí mismo del curso';
$string['enrolstartdate'] = 'Fecha de inicio';
$string['enrolstartdate_help'] = 'Si se habilita, los usuarios pueden inscribirse solamente a partir de esta fecha.';
$string['grouppassword'] = 'Contraseña para entrar a un grupo, si se sabe.';
$string['newcourseenrol'] = 'Un nuevo participante se ha inscrito en el curso {$a}';
$string['nonexistantprofilefielderror'] = 'Este campo no está definido en las extensiones del perfil de usuario';
$string['notificationtext'] = 'Plantilla de notificación';
$string['notificationtext_help'] = 'El contenido del Email sse puede escribir aquí, usando remplazables para  &lt;%%USERNAME%%&gt;, &lt;%%COURSE%%&gt;, &lt;%%URL%%&gt; and &lt;%%TEACHER%%&gt; . Tome nota de que cualquier marca de multi-idioma (multilanguage span tag) será procesada basándose en el idioma que tenga el recipiente.';
$string['notifymanagers'] = '¿Notificar a mánagers?';
$string['pluginname'] = 'Inscripción por Campo de Perfil';
$string['pluginname_desc'] = 'Este método permite la inscripción directa a curso si el usuario tiene un campo de perfil configurado al valor esperado';
$string['profilefield'] = 'Campo de perfil de usuario';
$string['profilefield:config'] = 'Puede configurar la instancia de inscripción';
$string['profilefield_desc'] = 'Un puntero hacia un campo de perfil de usuario';
$string['profilefield:enrol'] = 'Puede inscribir usando el método del campo de perfil';
$string['profilefield:manage'] = 'Puede gestionar inscripciones en campos de perfil';
$string['profilefield:unenrol'] = 'Puede des-inscribir personas inscritas en campos de perfil';
$string['profilefield:unenrolself'] = 'Puede des-inscribirse a sí mismo cuando ha sido inscrito en campos de perfil';
$string['profilevalue'] = 'Valor esperado';
$string['profilevalue_desc'] = '';
$string['status'] = 'Permite usar perfil para inscribir';
$string['unenrolself'] = '¿Des-inscribir del curso "{$a}"?';
$string['unenrolselfconfirm'] = '¿Realmente desea des-inscribirse a Usted mismo del curso "{$a}"?';
