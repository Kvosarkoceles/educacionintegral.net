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
 * Strings for component 'enrol_notificationeabc', language 'es_mx', branch 'MOODLE_31_STABLE'
 *
 * @package   enrol_notificationeabc
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activar'] = 'Activar verificación inicial';
$string['activarglobal'] = 'Activar para todo el sitio';
$string['activarglobalenrolupdated'] = 'Activar para todo el sitio';
$string['activarglobalenrolupdated_help'] = 'Activar la notificacion de actualizacion de inscripción para todo el sitio';
$string['activarglobal_help'] = 'Activa la notificacion de inscripción para todos los cursos';
$string['activarglobalunenrolalert'] = 'Activar para todo el sitio';
$string['activarglobalunenrolalert_help'] = 'Activar la notificacion de des-inscripción para todo el sitio';
$string['activar_help'] = 'Al activarse, se verificará, mediante la ejecucion del cron inmediata posterior, los usuarios que fueron inscritos en el periodo establecido arriba';
$string['activeenrolalert'] = 'Activar aviso de inscripción';
$string['activeenrolalert_help'] = 'Activar aviso de inscripción';
$string['activeenrolupdatedalert'] = 'Activar aviso de inscripción de inscripción';
$string['activeenrolupdatedalert_help'] = 'Activar aviso de actualizacion de inscripción';
$string['activeunenrolalert'] = 'Activar aviso de des-inscripción';
$string['activeunenrolalert_help'] = 'Activar aviso de des-inscripción';
$string['emailsender'] = 'Email del remitente';
$string['emailsender_help'] = 'Por defecto, toma el Email configurado como el usuario de soporte';
$string['fecha'] = 'Período para realizar la verificación de usuarios que se inscribieron a cursos';
$string['fecha_help'] = 'Coloque el período por el cual desea que se realice la verificación inicial de usuarios inscritos';
$string['filelockedmail'] = 'Usted ha sido inscrito en el curso {$a->fullname} ({$a->url})';
$string['location'] = 'Mensaje personalizado';
$string['location_help'] = 'Personalice el mensaje que le llegará a los usuarios al ser inscritos. Este campo acepta los siguientes marcadores que luego serán reemplazados dinámicamente por los valores correspondientes
<pre>
{COURSENAME} = Nombre completo del curso
{USERNAME} = Nombre_de_usuario
{NOMBRE} = Nombre
{APELLIDO} = Apellido(s)
{URL} = URL del curso
</pre>';
$string['messageprovider:notificationeabc_enrolment'] = 'Mensajes de notificación de inscripción';
$string['namesender'] = 'Nombre del remitente';
$string['namesender_help'] = 'Por defecto, toma el nombre configurado como el usuario de soporte';
$string['notificationeabc:manage'] = 'Gestionar notificaciones de inscripción';
$string['pluginname'] = 'Notificación de Inscripción';
$string['pluginname_desc'] = 'Notificación de inscripciones a cursos via mail';
$string['status'] = 'Activar notification de inscripción';
$string['subject'] = 'Notificación de Inscripción';
$string['unenrolmessage'] = 'Mensaje personalizado';
$string['unenrolmessagedefault'] = 'Ud ha sido des-inscrito (dado de baja) del curso {$a->fullname} ({$a->url})';
$string['unenrolmessage_help'] = 'Personalice el mensaje que le llegará a los usuarios al ser des-inscritos (dados de baja) . Este campo acepta los siguientes marcadores que luego serán reemplazados dinámicamente por los valores correspondientes
<pre>
{COURSENAME} = Nombre completo del curso
{USERNAME} = Nombre_de_usuario
{NOMBRE} = Nombre
{APELLIDO} = Apellido(s)
{URL} = URL del curso
</pre>';
$string['updatedenrolmessage'] = 'Mensaje personalizado';
$string['updatedenrolmessagedefault'] = 'Su inscripción en el curso {$a->fullname} ha sido actualizada ({$a->url})';
$string['updatedenrolmessage_help'] = 'Personalice el mensaje que le llegará a los usuarios al realizar alguna actualización en su inscripción. Este campo acepta los siguientes marcadores, que luego serán reemplazados dinámicamente por los valores correspondientes
<pre>
{COURSENAME} = Nombre completo del curso
{USERNAME} = Nombre_de_usuario
{NOMBRE} = Nombre
{APELLIDO} = Apellido(s)
{URL} = URL del curso
</pre>';
