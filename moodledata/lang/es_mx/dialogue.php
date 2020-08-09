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
 * Strings for component 'dialogue', language 'es_mx', branch 'MOODLE_34_STABLE'
 *
 * @package   dialogue
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Acciones';
$string['ago'] = 'con anterioridad';
$string['attachment'] = 'Anexo';
$string['attachments'] = 'Anexos';
$string['bulkopener'] = 'Abridor masivo';
$string['bulkopenrule'] = 'Regla para aperturas masivas';
$string['bulkopenrulenotifymessage'] = '<strong>Nota:</strong><br/>Al usar una regla masiva de apertura, las conversaciones no se abren de inmediato. Las conversaciones se abrirán cuando corra la función Cron del sistema, típicamente cada 30 minutos.';
$string['bulkopenrules'] = 'Reglas para apertura masiva';
$string['cachedef_params'] = 'Parámetros-Interfaz de usuario';
$string['cachedef_participants'] = 'Identificaciones de participantes (información basica)';
$string['cachedef_unreadcounts'] = 'Número de mensajes sin leer en las conversaciones';
$string['cachedef_userdetails'] = 'Detalles condensados del usuario, todos los usuarios inscritos';
$string['cannotclosedraftconversation'] = '¡Usted no puede cerrar una conversación que no ha empezado!';
$string['cannotdeleteopenconversation'] = 'usted no puede borrar una conversación abierta';
$string['closeconversation'] = 'Cerrar conversación';
$string['closed'] = 'Cerrada';
$string['completed'] = 'Completada';
$string['configmaxattachments'] = 'Número máximo por defecto de anexos permitidos por publicación.';
$string['configmaxbytes'] = 'El tamaño máximo para todos los anexos a Diálogo en el sitio (sujeto a límites del curso y otras configuraciones locales)';
$string['configtrackunread'] = 'Rastrear mensajes de dialogo sin leer en la pagina principal de cursos';
$string['configviewconversationsbyrole'] = 'Experimental: Ver conversaciones por rol. ordenar el listado de la conversación por el rol del autor';
$string['configviewstudentconversations'] = 'Experimental: lista de estudiantes con las conversaciones en donde están involucrados';
$string['conversation'] = 'Conversación';
$string['conversationcloseconfirm'] = '¿Está seguro que quiere cerrar la conversación  {$a} ?';
$string['conversationclosed'] = 'Conversación {$a} se ha cerrado';
$string['conversationdeleteconfirm'] = '¿Está seguro que quiere borrar la conversación {$a}? Esto no puede ser revertido';
$string['conversationdeleted'] = 'Conversación {$a} ha sido borrada';
$string['conversationdiscarded'] = 'Conversación descartada';
$string['conversationlistdisplayheader'] = 'Mostrando {$a->show} {$a->state} conversaciones {$a->groupname}';
$string['conversationopened'] = 'La conversación ha sido abierta';
$string['conversationopenedcron'] = 'Las conversaciones se abrirán automáticamente';
$string['conversationopenedwith'] = '<strong>1</strong> conversaciones abiertas con:';
$string['conversations'] = 'Conversaciones';
$string['conversationsopenedwith'] = '<strong>{$a}</strong> conversaciones abiertas con:';
$string['cutoffdate'] = 'Fecha de corte';
$string['datefullyear'] = '{$a->datefull} <small>({$a->time})</small>';
$string['dateshortyear'] = '{$a->dateshort} <small>({$a->time})</small>';
$string['day'] = 'día';
$string['days'] = 'días';
$string['deleteallconversations'] = 'Eliminar todas las conversaciones';
$string['deletealldrafts'] = 'Eliminar todos los borradores';
$string['deleteallrules'] = 'Eliminar todas las reglas de abridor';
$string['deleteconversation'] = 'Borrar conversación';
$string['deletereply'] = 'Borrar respuesta';
$string['dialogue:addinstance'] = 'Añadir un diálogo';
$string['dialogue:bulkopenrulecreate'] = 'Crear una regla para abridor masivo';
$string['dialogue:bulkopenruleeditany'] = 'Permitir al usuario editar cualquier regla, útil para el administrador, etc';
$string['dialogue:close'] = 'Cerrar una conversación';
$string['dialogue:closeany'] = 'Cerrar cualquiera';
$string['dialoguecron'] = 'Cron del diálogo';
$string['dialogue:delete'] = 'Borrar propia';
$string['dialogue:deleteany'] = 'Borrar cualquiera';
$string['dialogueintro'] = 'Introducción del dialogo';
$string['dialoguename'] = 'Nombre del dialogo';
$string['dialogue:open'] = 'Abrir una conversación';
$string['dialogue:receive'] = 'Recibir, quien puede ser el receptor cuando se abre una conversación';
$string['dialogue:reply'] = 'Responder';
$string['dialogue:replyany'] = 'Responder cualquiera';
$string['dialogue:viewany'] = 'Ver cualquiera';
$string['dialogue:viewbyrole'] = 'Ver listado de conversación por rol, experimental';
$string['displaybystudent'] = 'Mostrar por estudiante';
$string['displayconversationsheading'] = 'Mostrando {$a} conversaciones';
$string['displaying'] = 'Mostrando';
$string['draft'] = 'Borrador';
$string['draftconversation'] = 'Borrador de la conversación';
$string['draftconversationtrashed'] = 'Borrador de conversación eliminado';
$string['draftlistdisplayheader'] = 'Mostrando mis borradores';
$string['draftreply'] = 'Borrador de la respuesta';
$string['draftreplytrashed'] = 'Borrador de la respuesta eliminado';
$string['drafts'] = 'Borradores';
$string['errorcutoffdateinpast'] = 'La fecha de corte no puede estar en el pasado';
$string['erroremptymessage'] = 'El mensaje no puede estar vacío';
$string['erroremptysubject'] = 'El motivo no puede estar vacío';
$string['errornoparticipant'] = 'Debe abrir el diálogo con alguien...';
$string['eventconversationclosed'] = 'Conversación cerrada';
$string['eventconversationcreated'] = 'Conversación creada';
$string['eventconversationdeleted'] = 'Conversación eliminada';
$string['eventconversationviewed'] = 'Conversación vista';
$string['eventreplycreated'] = 'Respuesta creada';
$string['everybody'] = 'Todos (Todos contra todos)';
$string['everyone'] = 'Todos';
$string['everyones'] = 'De todos';
$string['firstname'] = 'Primer nombre';
$string['fullname'] = 'Nombre completo';
$string['groupmodenotifymessage'] = 'Esta actividad está funcionando en modo grupal, esto afectará con quien puede iniciar una conversación y cuales conversaciones son mostradas.';
$string['hasnotrun'] = 'Todavía no se ha corrido';
$string['hour'] = 'hora';
$string['hours'] = 'horas';
$string['includefuturemembers'] = 'Incluir futuros miembros';
$string['ingroup'] = 'en grupo {$a}';
$string['justmy'] = 'Solo yo';
$string['lastname'] = 'Apellido';
$string['lastranon'] = 'Lanzado última vez en';
$string['latest'] = 'Más reciente';
$string['listpaginationheader'] = '{$a->start}-{$a->end} de {$a->total}';
$string['matchingpeople'] = 'Personas que coinciden ({$a})';
$string['maxattachments'] = 'Número maximo de anexos';
$string['maxattachments_help'] = 'Esta configuración especifica el número máximo de archivos que pueden anexarse a una publicación en diálogo.';
$string['maxattachmentsize'] = 'Tamaño máximo de anexos';
$string['maxattachmentsize_help'] = 'Esta configuración especifica el tamaño máximo del archivo que pueden anexarse a una publicación en diálogo.';
$string['message'] = 'Mensaje';
$string['messageapibasicmessage'] = '<p>{$a->userfrom} publicó un nuevo mensaje a una conversación en la que Usted está participando con el asunto de: <i>{$a->subject}</i>
<br/><br/><a href="{$a->url}">Verla en Moodle</a></p>';
$string['messageapismallmessage'] = '{$a} publicó un nuevo mensaje en una conversación en donde participa Usted';
$string['messageprovider:post'] = 'Notificaciones de dialogo';
$string['messages'] = 'mensajes';
$string['mine'] = 'Mio';
$string['minute'] = 'minuto';
$string['minutes'] = 'minutos';
$string['modulename'] = 'Diálogo';
$string['modulename_help'] = 'Diálogos le permite a los alumnos o profesores el iniciar diálogos en ambos sentidos con otra persona. Son actividades del curso que pueden ser útiles cuando el profesor quiere poner una retroalimentación privada a un estudiante en su actividad en línea. Por ejemplo, si un estudiante está participando en un foro de idioma y recientemente hizo un error gramatical que el profesor quiera señalarle, sin apenar al estudiante, un diálogo es el lugar perfecto para hacer esta retroalimentación. Una actividad de diálogo también sería una excelente forma de que los asesores/tutores dentro de una institución interactúen con estudiantes - todas las actividades se guardan en bitácora y no es necesario usar Email forzosamente.';
$string['modulenameplural'] = 'Diálogos';
$string['month'] = 'mes';
$string['months'] = 'meses';
$string['nobulkrulesfound'] = '¡No se encontraron reglas masivas!';
$string['noconversationsfound'] = '¡No se encontraron conversaciones!';
$string['nodraftsfound'] = '¡No se encontraron borradores!';
$string['nomatchingpeople'] = 'Ninguna persona coincide con \'{$a}\\\'';
$string['nopermissiontoclose'] = '¡Usted no tiene permiso para cerrar esta conversación!';
$string['nopermissiontodelete'] = '¡Usted no tiene permiso para borrar!';
$string['nosubject'] = '[sin asunto]';
$string['numberattachments'] = '{$a} anexos';
$string['numberunread'] = '{$a} no-leído';
$string['oldest'] = 'Más antiguo';
$string['onlydraftscanbetrashed'] = 'Solamente pueden eliminarse borradores';
$string['open'] = 'Abierto';
$string['openedbyfullyear'] = '<small>Abierto por </small> <strong>{$a->fullname}</strong> <small>en</small> {$a->datefull} <small>({$a->time})</small>';
$string['openedbyshortyear'] = '<small>Abierto por</small> <strong>{$a->fullname}</strong> <small>en</small> {$a->dateshort} <small>({$a->time})</small>';
$string['openedbytoday'] = '<small>Abierto por</small> <strong>{$a->fullname}</strong> <small> hace </small> {$a->time} <small>({$a->timepast}) atrás </small>';
$string['openwith'] = 'Abrir con';
$string['participants'] = 'participantes';
$string['people'] = 'Gente';
$string['pluginadministration'] = 'Administración del diálogo';
$string['pluginname'] = 'Diálogo';
$string['repliedby'] = '<strong>{$a->fullname}</strong> <small> contestó </small> {$a->timeago}';
$string['repliedbyfullyear'] = '<strong>{$a->fullname}</strong> <small>contestó en</small> {$a->datefull} <small>({$a->time})</small>';
$string['repliedbyshortyear'] = '<strong>{$a->fullname}</strong> <small>contestó en</small> {$a->dateshort} <small>({$a->time})</small>';
$string['repliedbytoday'] = '<strong>{$a->fullname}</strong> <small>contestó hace </small> {$a->time} <small>({$a->timepast}) atrás</small>';
$string['reply'] = 'Respuesta';
$string['replydeleted'] = 'Se ha eliminado la respuesta';
$string['replysent'] = 'Se ha enviado su respuesta';
$string['runsuntil'] = 'Corre hasta';
$string['savedraft'] = 'Guardar borrador';
$string['searchpotentials'] = 'Potenciales de búsqueda...';
$string['second'] = 'segundo';
$string['seconds'] = 'segundos';
$string['send'] = 'Enviar';
$string['senton'] = '<small><strong>Enviado en:</strong></small>';
$string['sortedby'] = 'Ordenado por: {$a}';
$string['studenttostudent'] = 'Estudiante a estudiante';
$string['subject'] = 'Asunto';
$string['teachertostudent'] = 'Profesor a estudiante';
$string['trashdraft'] = 'Descartar borrador';
$string['unread'] = 'Sin-leer';
$string['unreadmessages'] = 'Mensajes sin-leer';
$string['unreadmessagesnumber'] = '{$a} mensajes no-leídos';
$string['unreadmessagesone'] = '1 mensaje no-leído';
$string['usecoursegroups'] = 'Usar grupos del curso';
$string['usecoursegroups_help'] = 'Si el curso tiene grupos definidos se añadirá una restricción adicional para con quien puede abrirse un diálogo. Los diálogos solamente pueden abrirse entre miembros del grupo, a menos que la persona que abre el diálogo tenga configurada la capacidad para "Acceder a todos los grupos".';
$string['usesearch'] = 'Use búsqueda para encontrar a personas con quienes iniciar un diálogo';
$string['viewconversations'] = 'Ver conversaciones';
$string['viewconversationsbyrole'] = 'Ver conversaciones por rol';
$string['week'] = 'semana';
$string['weeks'] = 'semanas';
$string['year'] = 'año';
$string['years'] = 'años';
