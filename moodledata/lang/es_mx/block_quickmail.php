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
 * Strings for component 'block_quickmail', language 'es_mx', branch 'MOODLE_35_STABLE'
 *
 * @package   block_quickmail
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Acciones';
$string['add_all'] = 'Añadir Todo';
$string['add_button'] = 'Añadir';
$string['addionalemail'] = 'Permitir Emails a direcciones Email externas';
$string['addionalemail_desc'] = 'Si se habilita esta opción, los Emails de quickmail también son enviados a las direcciones Email externas que el usuario haya ingresado en este formato.';
$string['additional_emails'] = 'Emails adicionales';
$string['additional_emails_help'] = 'Otras direcciones de Email que a Usted le gustaría que se enviara el mensaje, en una lista separada por comas o punto_y_comas. Por ejemplo:

email1@ejemplo.com, email2@ejemplo.com';
$string['admin_email_send_receipt'] = 'Recibo de envío de Email Admin';
$string['allowstudents'] = 'Permitirles a los estudiantes usar Quickmail';
$string['allowstudentsdesc'] = 'Permitir que los estudiantes usen Quickmail. Si Usted elige que "Nunca", el bloque no puede configurarse para permitirles a los estudiantes acceso a nivel del curso.';
$string['all_sections'] = 'Todaos los Grupos';
$string['allusers'] = 'Todos los usuarios';
$string['alternate'] = 'Emails alternos';
$string['alternate_body'] = '<p>
{$a->fullname} añadido {$a->address} como una dirección de envío alterna para {$a->course}.
</p>

<p>
El propósito de este Email era para verificar que esta dirección existe, y que el propietario de esta dirección tiene los permisos apropiados en Moodle.
</p>.

<p>
Si Usted desea completar el proceso de verificación; por favor, continúe re-dirigiendo su navegador de Internet a la URL siguiente: {$a->url}.
</p>

<p>
Si la descripción de este Email no tiene sentido para Usted, entonces puede que Usted haya recibido este Email por error. Simplemente descarte este mensaje.
</p>

Gracias..';
$string['alternate_from'] = 'Moodle: Quickmail';
$string['alternate_new'] = 'Añadir Dirección Alterna';
$string['alternate_subject'] = 'Verificación de Dirección de Email Alterna';
$string['approved'] = 'Aprobado';
$string['are_you_sure'] = '¿Está Usted seguro de querer eliminar {$a->title}?  Esta acción no puede deshacerse.';
$string['attachment'] = 'Anexo(s)';
$string['back_to_previous'] = 'Regresar a la página anterior';
$string['backup_block_configuration'] = 'Respaldar ajustes de configuraciones de Nivel de Bloque de Quickmail  (Como por ejemplo [Allow Students to use Quickmail])';
$string['backup_history'] = 'Incluir Historia Quickmail';
$string['body'] = 'Cuerpo';
$string['composenew'] = 'Redactar Email nuevo';
$string['config'] = 'Configuración';
$string['courseferpa'] = 'Respetar Modo del Curso';
$string['courselayout'] = 'Diseño del Curso';
$string['courselayout_desc'] = 'Use el diseño _Course_ page al renderizar páginas del bloque Quickmail. Habilite esta configuración si Usted está teniendo problemas de ancho fijo en formatos Moodle.';
$string['default_flag'] = 'Por Defecto';
$string['delete_confirm'] = '¿Está Usted seguro de querer eliminar el mensaje con los siguientes detalles: {$a}';
$string['delete_failed'] = 'No pudo eliminar Email';
$string['download_all'] = 'Descargar Todo';
$string['download_auth_only'] = 'Solamente usuarios autorizados';
$string['download_open'] = 'Abrir Descargas';
$string['downloads'] = 'Requerir ingresar para anexos';
$string['downloads_desc'] = 'Esta configuración determina si los anexos están disponibles solamente para usuarios ingresados a Moodle';
$string['drafts'] = 'Ver Borradores';
$string['draftssuccess'] = 'Borrador';
$string['email'] = 'Email';
$string['email_error'] = 'No pudo enviar Email a: {$a->firstname} {$a->lastname} ({$a->email})';
$string['email_error_field'] = 'No puede estar vacío un: {$a}';
$string['entry_activated'] = 'El Email alterno {$a->address} ahora puede usarse en el curso {$a->course}.';
$string['entry_failure'] = 'No pudo enviarse un Email a {$a->address}. Por favor, verifique que {$a->address} existe e inténtelo de nuevo.';
$string['entry_key_not_valid'] = 'El enlace para activación de {$a->address} ya no es válido. Continúe para re-enviar enlace para activación.';
$string['entry_saved'] = 'La dirección alterna {$a->address} ha sido guardada.';
$string['entry_success'] = 'Se ha enviado un Email a {$a->address} para verificar si la dirección es válida. Las instrucciones para activar la dirección están contenidas en él.';
$string['eventalternateemailadded'] = 'Email alternativo añadido';
$string['failed_to_send_to'] = 'falló al enviar a';
$string['ferpa'] = 'Modo FERPA (Family Educational Rights and Privacy Act)';
$string['ferpa_desc'] = 'Le permite al sistema comportarse, ya sea de acuerdo a la configuración del curso para modo_de_grupo, ignorando la configuración para modo_de_grupo, o ignorando por completo los grupos.';
$string['from'] = 'De';
$string['history'] = 'Ver Historia';
$string['log'] = 'Ver Historia';
$string['logsuccess'] = 'todos los mensajes se enviaron exitosamente';
$string['message'] = 'Mensaje';
$string['message_body_as_follows'] = 'cuerpo del mensaje como sigue';
$string['message_failure'] = 'algunos usuarios no recibieron el mensaje';
$string['messageprovider:broadcast'] = 'Enviar mensaje transmitido usando Email del Admin';
$string['message_sent_to'] = 'Mensaje enviado a';
$string['moodle_attachments'] = 'Anexos Moodle ({$a})';
$string['new'] = 'Nuevo';
$string['no'] = 'No';
$string['no_alternates'] = 'No se encontraron Emails alternos para {$a->fullname}. Continue para hacer uno.';
$string['no_course'] = 'Curso inválido con ID {$a}';
$string['no_drafts'] = 'Usted no tiene borradores de Emails.';
$string['no_email'] = 'No pudo enviar Email a {$a->firstname} {$a->lastname}.';
$string['no_email_address'] = 'No pudo enviar Email a {$a}';
$string['noferpa'] = 'Sin Respeto a Grupo';
$string['no_filter'] = 'Sin filtro';
$string['no_log'] = 'Usted aun no tiene historia de Emails.';
$string['no_permission'] = 'Usted no tiene permiso para mandar Emails con Quickmail.';
$string['noreply'] = 'Sin-respuesta';
$string['no_section'] = 'No en un grupo';
$string['no_selected'] = 'Usted debe seleccionar salgunos usuarios a quienes mandar Email.';
$string['no_subject'] = 'Usted debe tener un asunto';
$string['not_valid'] = 'Este no es un tipo válido de visor de bitácora de Email: {$a}';
$string['not_valid_action'] = 'Usted debe proporcionar una acción válida: {$a}';
$string['not_valid_typeid'] = 'Usted debe proporcionar un Email válido para: {$a}';
$string['not_valid_user'] = 'Usted nopuede ver la historia de otro Email.';
$string['no_type'] = '{$a} no es el tipo aceptable de visor. Por favor, use la aplicación correctamente.';
$string['no_usergroups'] = 'No hay usuarios en su grupo a quienes usted sea capaz de mandarles Email.';
$string['no_users'] = 'No hay usuarios a quienes usted sea capaz de mandarles Email.';
$string['overwrite_history'] = 'Sobrescribir Historia de Quickmail';
$string['pluginname'] = 'Quickmail (correo rápido)';
$string['potential_sections'] = 'Grupos Potenciales';
$string['potential_users'] = 'Destinatarios Potenciales';
$string['prepend_class'] = 'Insertar el nombre del curso.';
$string['prepend_class_desc'] = 'Inserte el nombre corto del curso dentro del asunto del Email.';
$string['qm_contents'] = 'Descargar Contenidos del Archivo';
$string['quickmail:addinstance'] = 'Añadir un nuevo bloque Quickmail a una página de curso';
$string['quickmail:allowalternate'] = 'Permitirles a los usuarios añadir un Email alterno para los cursos.';
$string['quickmail:canconfig'] = 'Permitirle a los usuarios configurar instancia de Quickmail.';
$string['quickmail:candelete'] = 'Permitirle a los usuarios eliminar Email de historia.';
$string['quickmail:canimpersonate'] = 'Permitirle a los usuarios engresar como otros usuarios y ver historia.';
$string['quickmail:cansend'] = 'Permitirle a los usuarios enviar Email por Quickmail';
$string['quickmail:myaddinstance'] = 'Añadir un nuevo bloque de Quickmail a /mi página';
$string['receipt'] = 'Recibir una copia';
$string['receipt_help'] = 'Recibir una copia del Email enviado';
$string['remove_all'] = 'Remover Todo';
$string['remove_button'] = 'remover';
$string['required'] = 'Por favor, llene los campos requeridos.';
$string['reset'] = 'Restaurar configuraciones por defecto del Sistema';
$string['restore_history'] = 'Restaurar Historia Quickmail';
$string['role_filter'] = 'Filtro por roles';
$string['save_draft'] = 'Guardar Borrador';
$string['seconds'] = 'segundos';
$string['selected'] = 'Recipientes Seleccionados';
$string['select_groups'] = 'Secciones Seleccionadas...';
$string['select_roles'] = 'Roles por los cuales filtrará';
$string['select_users'] = 'Sleccionar Usuarios...';
$string['sendadmin'] = 'Mendar Email a Admin';
$string['send_again'] = 'mandar nuevamente';
$string['send_email'] = 'Enviar Email';
$string['sent_success'] = 'todos los mensaje fueron enviados exitosamente';
$string['sent_successfully_to_the_following_users'] = 'enviado exitosamente a los siguientes usuarios:';
$string['sig'] = 'Firma';
$string['signature'] = 'Firmas';
$string['something_broke'] = 'Parece que Usted tiene deshabilitada la mensajería o las cosas están muy descompuestas';
$string['status'] = 'estatus';
$string['strictferpa'] = 'Siempre Separar Grupos';
$string['subject'] = 'Asunto';
$string['sure'] = '¿Está Usted seguro de querer eliminar {$a->address}? Esta acción no podrá deshacerse.';
$string['time_elapsed'] = 'Tiempo Transcurrido:';
$string['title'] = 'Título';
$string['user'] = 'usuario';
$string['users'] = 'usuarios';
$string['valid'] = 'Estatus de Activación';
$string['waiting'] = 'Esperando';
$string['warnings'] = 'Advertencias';
