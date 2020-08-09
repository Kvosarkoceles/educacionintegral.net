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
 * Strings for component 'local_mail', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   local_mail
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addbcc'] = 'Añadir Bcc';
$string['addcc'] = 'Añadir Cc';
$string['addrecipients'] = 'Añadir destinatarios';
$string['addto'] = 'Añadir Para';
$string['advsearch'] = 'Búsqueda avanzada';
$string['all'] = 'Todos';
$string['applychanges'] = 'Aplicar';
$string['assigntonewlabel'] = 'Asignar a una etiqueta nueva...';
$string['attachments'] = 'Anexos';
$string['attachnumber'] = '{$a} anexos';
$string['bcc'] = 'Bcc';
$string['bulkmessage'] = 'Con usuarios seleccionados mandar un correo local...';
$string['cancel'] = 'Cancelar';
$string['cannotcompose'] = 'Usted no puede escribir mensajesporque no está inscrito en ningún curso.';
$string['cc'] = 'Cc';
$string['compose'] = 'Escribir';
$string['configenablebackup'] = 'Respaldo / restauración';
$string['configenablebackupdesc'] = 'Habilitar respaldo y restauración de mensajes de correo y etiquetas.';
$string['configlegacynav'] = 'Navegación antigua';
$string['configlegacynavdesc'] = 'Usar el estilo antiguo de Navegación. No se recomienda para Moodle 3.2 o más recientes. Será eliminado en la versión 2.0 de este plugin.';
$string['continue'] = 'Continuar';
$string['courses'] = 'Cursos';
$string['delete'] = 'Eliminar';
$string['discard'] = 'Descartar';
$string['downloadall'] = 'Descargar todo';
$string['draft'] = 'Borrador';
$string['drafts'] = 'Borradores';
$string['editlabel'] = 'Editar etiqueta';
$string['emptyrecipients'] = 'Sin destinatarios';
$string['emptytrash'] = 'Vaciar basura';
$string['emptytrashconfirm'] = 'Usted está a punto de vaciar la basura';
$string['erroremptycourse'] = 'Por favor, especifique un curso.';
$string['erroremptylabelname'] = 'Por favor, especifique un nombre de etiqueta.';
$string['erroremptyrecipients'] = 'Por favor, especifique al menos un destinatario';
$string['erroremptysubject'] = 'Por favor, especifique un asunto.';
$string['errorinvalidcolor'] = 'Color inválido';
$string['errorrepeatedlabelname'] = 'El nombre de la etiqueta ya existe';
$string['filterbydate'] = 'Fecha';
$string['forward'] = 'Reenviar';
$string['from'] = 'De';
$string['hasattachments'] = '(Mensaje con anexos)';
$string['inbox'] = 'Buzón';
$string['invalidlabel'] = 'Etiqueta inválida';
$string['invalidmessage'] = 'Mensaje inválido';
$string['labelcolor'] = 'Color';
$string['labeldeleteconfirm'] = 'Usted está a punto de eliminar por completo la etiqueta \'{$a}\\';
$string['labelname'] = 'Nombre';
$string['labels'] = 'Etiquetas';
$string['mail:addinstance'] = 'Añadir un nuevo correo';
$string['mail:mailsamerole'] = 'Enviar Emails a usuarios con el mismo rol';
$string['mailmenu'] = 'Menú de Mail (Correo)';
$string['mailupdater'] = 'Actualizador de correo';
$string['mail:usemail'] = 'Usar corero';
$string['markasread'] = 'Marcar como leído';
$string['markasread_help'] = 'Sis e habilita, y si las notificaciones también se habilitan, todos los mensajes nuevos serán marcados como leídos';
$string['markasstarred'] = 'Marcar como destacado';
$string['markasunread'] = 'Marcar como no-leído';
$string['markasunstarred'] = 'Desmarcar como sin destacar';
$string['maxattachments'] = 'Número máximo de anexos';
$string['maxattachmentsize'] = 'Tamaño máximo de anexo';
$string['message'] = 'Mensaje';
$string['messagedeleteconfirm'] = 'Usted está a punto de eliminar completamente el mensaje \'{$a}\\';
$string['messageprovider:mail'] = 'Correo recibió notificación';
$string['messagesdeleteconfirm'] = 'Usted está a punto de eliminar completamente {$a} mensaje(s)';
$string['moreactions'] = 'Más';
$string['mymail'] = 'Mi correo';
$string['newlabel'] = 'Etiqueta nueva';
$string['nocolor'] = 'Sin color';
$string['nolabels'] = 'No hay etiquetas disponibles';
$string['nomessages'] = 'Sin mensajes';
$string['nomessageserror'] = 'La acción requerida necesita al menos un mensaje seleccionado';
$string['nomessagestoview'] = 'Sin mensajes para ver.';
$string['none'] = 'Nada';
$string['norecipient'] = '(sin destinatario)';
$string['noselectedmessages'] = 'No se seleccionó mensaje';
$string['nosubject'] = '(sin asunto)';
$string['notificationbody'] = '- De: {$a->user}

- Asunto: {$a->subject}

{$a->content}';
$string['notificationbodyhtml'] = '<p>De: {$a->user}</p><p>Asunto: <a href="{$a->url}">{$a->subject}</a></p><p>{$a->content}</p>';
$string['notificationpref'] = 'Enviar notificaciones';
$string['notificationsubject'] = 'Nuevo mensaje de correo en {$a}';
$string['notingroup'] = 'Usted no forma parte de ningún grupo';
$string['pagingmultiple'] = '{$a->first}-{$a->last} de {$a->total}';
$string['pagingsingle'] = '{$a->index} de {$a->total}';
$string['perpage'] = 'Mostrar {$a} mensajes';
$string['pluginname'] = 'Correo (Mail)';
$string['read'] = 'Leer';
$string['references'] = 'Referencias';
$string['removelabel'] = 'Quitar etiqueta';
$string['reply'] = 'Contestar';
$string['replyall'] = 'Contestar a todos';
$string['restore'] = 'Restaurar';
$string['save'] = 'Guardar';
$string['search'] = 'Buscar';
$string['searchbyattach'] = 'Tiene anexo';
$string['searchbyunread'] = 'Solamente no-leídos';
$string['send'] = 'Enviar';
$string['sendmessage'] = 'Enviar un mensaje';
$string['sentmail'] = 'Enviado';
$string['setlabels'] = 'Etiquetas';
$string['shortaddbcc'] = 'Bcc';
$string['shortaddcc'] = 'Cc';
$string['shortaddto'] = 'Para';
$string['showlabelmessages'] = 'Mostrar mensajes con etiqueta  "{$a}"';
$string['showrecentmessages'] = 'Mostrar mensajes recientes';
$string['smallmessage'] = '{$a->user} le ha enviado un Email';
$string['starred'] = 'Destacado';
$string['starredmail'] = 'Destacado';
$string['subject'] = 'Asunto';
$string['to'] = 'Para';
$string['togglemailmenu'] = 'Alternar menú de mail (correo)';
$string['toomanyrecipients'] = 'La Búsqueda tiene demasiados resultados';
$string['trash'] = 'Basura';
$string['undo'] = 'Deshacer';
$string['undodelete'] = '{$a} mensajes se han movido a la basura';
$string['undorestore'] = '{$a} mensajes se han restaurado';
$string['unread'] = 'Sin leer';
$string['unstarred'] = 'Sin destacar';
