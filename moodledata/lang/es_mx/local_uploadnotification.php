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
 * Strings for component 'local_uploadnotification', language 'es_mx', branch 'MOODLE_37_STABLE'
 *
 * @package   local_uploadnotification
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actioncreated'] = 'creado';
$string['actionupdated'] = 'actualizado';
$string['heading'] = 'Configuraciones de notificación de subida';
$string['long_diff'] = 'En este archivo, {$a} páginas fueron cambiadas.';
$string['long_diff_many'] = 'En este archivo, muchas páginas fueron cambiadas.';
$string['messageprovider:digest'] = 'Notificación resumida de modificación de curso';
$string['pluginname'] = 'Notificación de subida';
$string['printed_changelog_prefix'] = 'Este archivo es una actualización de {$a->filename} de fecha {$a->date}.';
$string['printed_diff_prefix'] = 'Las páginas siguientes de este archivo fueron cambiadas:';
$string['settings_allow_changelog'] = 'Permitir generación automática de bitácora_de_cambios en cursos';
$string['settings_allow_changelog_help'] = 'Permitirle a los profesores habilitar la detección automática de bitácora_de_cambios para sus cursos. Si se deshabilita, los profesores no verán esta configuración y no pueden habilitar la funcionalidad.';
$string['settings_allow_mail'] = 'Permitir entrega de correo de notificación';
$string['settings_allow_mail_help'] = 'Si se habilita, pueden enviarse Emails con notificaciones acerca de material nuevo';
$string['settings_course_allow_attachment'] = 'Permitir anexos de Email';
$string['settings_course_allow_attachment_help'] = 'Si se configura, los estudiantes pueden recibir material nuevo ditrectamente vía Email. El activar esta opción no enviará automáticamente un anexo cada vez, pero los estudiantes tienen la posibilidad de habilitar esta función para ellos.';
$string['settings_course_disable'] = 'Deshabilitar';
$string['settings_course_enable'] = 'Habilitar';
$string['settings_course_enable_changelog'] = 'Mostrar una bitácora_de_cambios para  actualizaciones.';
$string['settings_course_enable_changelog_help'] = 'Si se configura, las actualizaciones del material proporcionado serán detectadas y se mostrará una bitácora_de_cambios debajo del archivo actual. Esto puede ayudarle a sus estudiantes a manejar cambios en los documentos.';
$string['settings_course_enable_diff'] = 'Detectar diferencias en subidas';
$string['settings_course_enable_diff_help'] = 'Si se configura, un análisis automático detectará las páginas cambiadas si Usted actualiza el material proporcionado. el número de página será mostrado debajo del archivo actual.';
$string['settings_course_enable_mail'] = 'Habilitar entraga por Email de notificación para subidas de material';
$string['settings_course_error_diff_no_changelog'] = 'La detección de diferencias requiere la funcionalidad de bitácora_de_cambios. Por favor, habilite la bitácora_de_cambios o deshabilite la detección de diferencias.';
$string['settings_course_headline'] = 'Configuraciones del curso para notificaciones de subidas y generación de bitácora_de_cambios.';
$string['settings_course_no_preferences'] = 'Sin preferencias';
$string['settings_course_require_valid_course_admin'] = 'Esta característica solamente está disponible para administradores del curso.';
$string['settings_course_require_valid_course_id'] = 'Esta característica solamente está disponible para ids de curso válidas.';
$string['settings_digest'] = 'Hora para envío de resumen';
$string['settings_digest_help'] = 'La hora de cada día cuando deberían enviarse los resúmenes de notificación.';
$string['settings_enable_changelog_by_default'] = 'Habilitar la bitácora_de_cambios por defecto';
$string['settings_enable_changelog_by_default_help'] = 'Si se activa, el registro de cambios se activará en cursos que no tengan configuraciones personalizadas. Si un profesor no quiere esto, tiene que deshabilitarlo manualmente.';
$string['settings_enable_diff_by_default'] = 'Habilitar la detección de diferencias por defecto';
$string['settings_enable_diff_by_default_help'] = 'Si se activa, la detección de diferencias se activará en cursos que no tengan configuraciones personalizadas. Si un profesor no quiere esto, tiene que deshabilitarlo manualmente.';
$string['settings_max_diff_filesize'] = 'Tamaño permitido de archivos analizados para la detección de diferencias <br>(en MB)';
$string['settings_max_diff_filesize_help'] = 'Si el tamaño del archivo  del material es mayor que este valor, no se calcularán diferenicas para él. Configurar este valor a cero para deshabilitar la detección de diferencias.<br> La detección de diferencias requiere de un changelog (bitácora de cambios) habilitado.';
$string['settings_max_mail_amount'] = 'Tamaño máximo del curso para notificaciones';
$string['settings_max_mail_amount_help'] = 'Ajustar este valor para evitar una carga demasiado alta en algun momento. define el tamaño del curso hasta el cual se proporcionan Emails.';
$string['settings_max_mail_filesize'] = 'Tamaño máximo del archivo en anexos del correo<br>(in KB)';
$string['settings_max_mails_for_resource'] = 'Cantidad máxima de Emails con el mismo anexo';
$string['settings_required_mail_suffix'] = 'Sufijo requerido de direcciones Email.';
$string['settings_required_mail_suffix_help'] = 'Insertar su nombre de dominio institucional para permitir solamente direcciones que terminan con él. Déjelo vacío para permitir todos los provedores.';
$string['settings_saved_successfully'] = 'Sus configuraciones han sido guardadas.';
$string['settings_user_disable'] = 'Deshabilitar';
$string['settings_user_enable'] = 'Habilitar';
$string['settings_user_enable_digest'] = 'Mandsar solamente resumen del día';
$string['settings_user_enable_mail'] = 'Habilitar envío de notificación Email para subidas de material';
$string['settings_user_enable_mail_help'] = 'Sin preferencia: Usted solamente recibirá Emails si un profesor lo ha habilitado explícitamente para su cursoi<br>Deshabilitado: No se enviarán Emails para cambios en materiales<br>Habilitado: Usted recibirá Emails para cambios de materiales, a menos que un profesor hubiera prohibido explícitamente el envío.';
$string['settings_user_headline'] = '¿Quiere recibir notificaciones cuando sea subido material nuevo a un curso?';
$string['settings_user_max_mail_filesize'] = 'Tamaño máximo de anexos de Email<br> (en KB)';
$string['settings_user_max_mail_filesize_help'] = 'Usted puede recibir material nuevo o actualizado directamente vía Email. Esto define el tamaño_de_archivo de material máximo que está permitido enviar en un anexo de Email.<br>Configurar a cero para deshabilitar anexos.';
$string['settings_user_max_mail_filesize_not_more_than_admin'] = 'El administrador de Moodle solamente permite anexos de hasta {$a} KB';
$string['settings_user_no_preferences'] = 'Sin preferencias';
$string['settings_user_not_negative'] = 'Valores negativos no están permitidos';
$string['settings_user_require_valid_users'] = 'Esta característica solamente está disponible para usuarios válidos.';
$string['templatemessage'] = 'Hola {$a->firstname},

Los siguientes recursos en actividades han cambiado dentro de cursos en los cuales Usted está inscrito.

{$a->notifications}

{$a->signoff}

Usted está recibiendo este Email porque Usted o su profesor han solicitado esta información. Usted puede editar sus preferencias bajo {$a->user_settings}';
$string['templatemessage_html'] = 'Hola {$a->firstname},<br><br>

Los siguientes recursos en actividades han cambiado dentro de cursos en los cuales Usted está inscrito.

<ul>
{$a->notifications}
</ul>

{$a->signoff}<br><br>

Usted está recibiendo este Email porque Usted o su profesor han solicitado esta información. Usted puede editar sus preferencias bajo sus <a href="{$a->user_settings}">preferencias</a>.';
$string['templateresource'] = '* "{$a->filename}" en "{$a->coursefullname}" ({$a->url_course}) era/fue {$a->action}: {$a->url_file}';
$string['templateresource_html'] = '<li><a href="{$a->url_file}">{$a->filename}</a> en <a href="{$a->url_course}">{$a->coursefullname}</a> era/fue {$a->action}</li>';
$string['templatesubject_plural'] = 'Actualizaciones de recursos en sus cursos {$a}';
$string['templatesubject_singular'] = 'Actualizaciones de recursos en su curso {$a}';
$string['uploadnotification:receivedigest'] = 'Recibir notificación resumida de modificación de curso';
$string['warning'] = 'Advertencia';
