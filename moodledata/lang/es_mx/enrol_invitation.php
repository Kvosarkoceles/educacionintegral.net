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
 * Strings for component 'enrol_invitation', language 'es_mx', branch 'MOODLE_25_STABLE'
 *
 * @package   enrol_invitation
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = 'Asignar rol';
$string['cannotsendmoreinvitationfortoday'] = 'No quedan invitaciones para hoy. Intente más tarde.';
$string['defaultrole'] = 'Asignación de rol por defecto';
$string['defaultrole_desc'] = 'Seleccione el rol que será asignado a los usuarios durante las inscripciones por invitación';
$string['editenrolment'] = 'Editar inscripciones';
$string['emailaddressnumber'] = 'Dirección de Email {$a}';
$string['emailmessageinvitation'] = '{$a->managername} invitó a Usted a unirse a {$a->fullname}.

Para unirse, elija la liga siguiente: {$a->enrolurl}

Usted necesitará crear una cuenta si aún no tiene una.

{$a->sitename} -----------------------------
{$a->siteurl}';
$string['emailmessageuserenrolled'] = '{$a->userfullname} se ha inscrito en {$a->coursefullname}.

Elija la liga siguiente para revisar las nuevas inscripciones: {$a->courseenrolledusersurl}

{$a->sitename}
-------------
{$a->siteurl}';
$string['emailssent'] = 'Se han enviado los Emails';
$string['emailtitleinvitation'] = 'Usted ha sido invitado a unirse a {$a->fullname}.';
$string['emailtitleuserenrolled'] = '{$a->userfullname} se ha inscrito en {$a->coursefullname}.';
$string['enrolenddate'] = 'Fecha de fin';
$string['enrolenddate_help'] = 'Si se habilita, los usuarios solamente podrán inscribirse hasta esta fecha.';
$string['enrolenddaterror'] = 'La fecha de fin de inscripciones no puede ser anterior a la fecha de inicio';
$string['enrolperiod'] = 'Duración de la inscripción';
$string['enrolperiod_desc'] = 'Duración por defecto que la inscripción es válida (en segundos). Si se pone a cero, la duración de la inscripción será ilimitada por defecto.';
$string['enrolperiod_help'] = 'Tiempo que la inscripción será válida, empezando el momento que el usuario se inscribe. Si se deshabilita, la duración de la inscripción será ilimitada.';
$string['enrolstartdate'] = 'Fecha de inicio';
$string['enrolstartdate_help'] = 'Si se habilita, los usuarios solamente podrán inscribirse a partir de esta fecha.';
$string['expiredtoken'] = 'Ficha (token) inválida - el proceso de inscripción se ha detenido.';
$string['invitationpagehelp'] = '<ul><li>Usted tiene {$a} invitación(es) restante(s) por hoy.</li><li>Cada invitación es única y caduca una vez que se usa.</li></ul>';
$string['inviteusers'] = 'Invitar usuarios';
$string['maxinviteerror'] = 'Debe ser un número.';
$string['maxinviteperday'] = 'Invitaciones máximas por día';
$string['maxinviteperday_help'] = 'Máximo de invitaciones que pueden mandarse por día para un curso.';
$string['noinvitationinstanceset'] = 'No se ha encontrado instancia de inscripción por invitación. Por favor añada una instancia de inscripción por invitación a su curso en primer lugar.';
$string['nopermissiontosendinvitation'] = 'No hay permisos para enviar invitación';
$string['pluginname'] = 'Invitación';
$string['pluginname_desc'] = 'El módulo de invitación le permite enviar invitaciones por Email. Estas invitaciones pueden usarse solamente una vez. Los usuarios que hagan click en la liga enviada por Email serán inscritos automáticamente.';
$string['status'] = 'Permitir inscripciones por invitación';
$string['status_desc'] = 'Permitirle por defecto a los usuarios invitar a la gente a inscribirse a un curso.';
$string['unenrol'] = 'Des-inscribir usuario';
$string['unenrolselfconfirm'] = '¿Realmente desea Usted des-inscribirse del curso "{$a}"?';
$string['unenroluser'] = '¿Realmente desea des-inscribir a "{$a->user}" del curso "{$a->course}"?';
