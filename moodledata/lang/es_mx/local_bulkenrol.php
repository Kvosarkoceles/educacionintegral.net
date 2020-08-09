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
 * Strings for component 'local_bulkenrol', language 'es_mx', branch 'MOODLE_38_STABLE'
 *
 * @package   local_bulkenrol
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bulkenrol:enrolusers'] = 'Usar inscripción masiva de usuario';
$string['bulkenrol_form_intro'] = 'Aquí puede Usted inscribir masivamente usuarios a su curso. Un usuario a ser inscrito es identificado por su dirección E.mail almacenada en su cuenta Moodle.';
$string['enrolplugin'] = 'Plugin de inscripción';
$string['enrolplugin_desc'] = 'El   método de inscripción a ser usado para inscribir masivamente los usuarios. Si el método de inscripción configurado no está activo / añadido en el curso cuando los usuarios sean inscritos masivamente, es añadido / activado automáticamente.';
$string['enrol_users'] = 'Inscribir usuarios';
$string['enrol_users_successful'] = 'Inscripción masiva de usuario exitosa';
$string['error_check_is_already_member'] = 'Error al revisar si es que el usuario (<em>{$a->email}</em>) ya era un miembro del grupo (<em>{$a->groupname}</em>). {$a->error}';
$string['error_enrol_user'] = 'Hubo un problema al inscribir al usuario con E-mail <em>{$a->email}</em> al curso.';
$string['error_enrol_users'] = 'Hubo un problema al inscribir los usuarios al curso.';
$string['error_exception_info'] = 'Información de excepción';
$string['error_getting_user_for_email'] = 'Hubo un problema al obtener el registro del usuario para la dirección E-mail  <em>{$a}</em> de la base de datos.';
$string['error_group_add_member'] = 'Hubo un problema al añadir al usuario con E-mail <em>{$a->email}</em> al grupo del curso <em>{$a->group}</em>.';
$string['error_group_add_members'] = 'Hubo un problema al añadir los usuarios a los grupos del curso.';
$string['error_invalid_email'] = 'Se encontró una dirección E-mail inválida en la línea {$a->row} (<em>{$a->email}</em>). Esta línea será ignorada.';
$string['error_no_email'] = 'No se encontró una dirección E-mail  en la línea {$a->line} (<em>{$a->content}</em>). Esta línea será ignorada.';
$string['hints'] = 'Pistas';
$string['parameter_empty'] = 'Parámetro vacío';
$string['pluginname'] = 'Inscripción masiva de usuario';
$string['privacy:metadata'] = 'El plugin de inscripción de usuario masiva actúa como una herramienta para inscribir usuarios en cursos, pero no almacena ningún dato personal.';
$string['row'] = 'Fila';
$string['user_enroled'] = 'Inscripción de usuario';
$string['user_enroled_already'] = 'El usuario ya estaba inscrito';
$string['user_enroled_yes'] = 'El usuario será inscrito';
$string['user_groups'] = 'Membresía de grupo';
$string['user_groups_already'] = 'El usuario ya era miembro del grupo';
$string['user_groups_yes'] = 'Usuario será añadido al grupo';
$string['users_to_enrol_in_course'] = 'Los usuarios serán inscritos en el curso';
