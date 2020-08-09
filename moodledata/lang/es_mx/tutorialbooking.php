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
 * Strings for component 'tutorialbooking', language 'es_mx', branch 'MOODLE_38_STABLE'
 *
 * @package   tutorialbooking
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addstudents'] = 'Añadir participantes';
$string['adminlockhelp'] = 'Seleccionar para hacer que todas las hojas de inscripción estén bloqueadas por defecto';
$string['adminlockprompt'] = 'Seleccionar para bloquear por defecto las hojas de inscripción';
$string['adminnumbershelp'] = 'Ingresar el número predeterminado de participantes para las sesiones - puede ser anulado cuando se configuran las sesiones';
$string['adminnumbersprompt'] = 'Seleccionar número predeterminado de participantes';
$string['adminservicehelp'] = 'ADVERTENCIA: El activar esto significará que todos los Emails y notificaciones serán enviados a los participantes  - cuando está desactivado significa que solamente el administrador principal (id=2) recibirá notificaciones';
$string['adminserviceprompt'] = 'Marcar esta instancia como un servicio Moodle en vivo';
$string['after'] = 'Después de {$a->session}';
$string['ajax_invalid_slots'] = 'Las sesiones no son para la hoja de inscripción correcta';
$string['ajax_slots_not_exist'] = 'Las sesiones no existen';
$string['alreadysignedup'] = 'Usted ya se ha inscrito a una sesión.';
$string['attendcoltitle'] = 'Asistencia';
$string['attendees'] = 'Participantes';
$string['availabletoadd'] = 'Disponible para añadir';
$string['backtosession'] = 'Mensajes enviados; hacer clic aquí para regresar a lista de inscripción';
$string['cancel'] = 'Cancelar';
$string['completionsignedup'] = 'Los usuarios deben inscribirse a una sesión';
$string['completionsignedupgroup'] = 'Requerir inscribirse';
$string['confirm'] = 'Confirmar';
$string['confirmmessage'] = '¿Está Usted seguro de querer quitar a {$a->name} de {$a->timeslot}?';
$string['confirmremovefromslot'] = '¿Está seguro de querer quitar su inscripción?';
$string['confirmusersignupremoval'] = 'Confirmar remoción de inscripción';
$string['copysession'] = 'Copiar sesión';
$string['cronfixduplicates'] = 'Corregir inscritos duplicados en hoja de inscripción';
$string['defaultdescription'] = 'Sesión {$a}';
$string['deletepageheader'] = 'Confirmar eliminación';
$string['deletesession'] = 'Eliminar';
$string['deletewarningtext'] = '¿Está Usted seguro de querer eliminar "{$a}" ?';
$string['editsession'] = 'Editar';
$string['editsessionheading'] = 'Editar sesión existente';
$string['editsessionhelp'] = 'Para modificar la sesión, por favor llene el formato inferior.';
$string['editspaceserror'] = 'ERROR: Usted no puede reducir el número de lugares  ({$a->spaces}) a menos del número de inscritos ({$a->signedup})';
$string['emailgroupprompt'] = 'Mandar Email a participantes';
$string['emailpagetitle'] = 'Mandar Email a participantes';
$string['eventexport'] = 'Inscripciones exportadas';
$string['eventexportall'] = 'Todas las inscripciones exportadas';
$string['eventsessionadded'] = 'Sesión añadida';
$string['eventsessiondeleted'] = 'Sesión eliminada';
$string['eventsessionmessage'] = 'Usuarios mensajeados en la sesión';
$string['eventsessionupdated'] = 'Sesión actualizada';
$string['eventsignupadded'] = 'Inscripción';
$string['eventsignupcapabilityremoved'] = 'Capacidad para inscribirse perdida';
$string['eventsignupremoved'] = 'Inscripción  quitada';
$string['eventsignupteacheradded'] = 'Inscripción forzada';
$string['eventsignupteacherremoved'] = 'Inscripción revocada';
$string['exportcsvlistallprompt'] = 'Exportar inscripciones de todas las hojas de inscripciones en este curso';
$string['exportlistprompt'] = 'Exportar hoja de inscripción';
$string['first'] = 'Primero';
$string['freespaces'] = 'Lugares libres';
$string['indexnoid'] = 'La Id de un curso debe estipularse para ver todas las hojas de inscripción';
$string['instancedesc'] = 'Anotaciones en la hoja de incripción';
$string['instancedeschelp'] = 'Información que los participantes necesitan conocer cuando se inscriban, como por ejemplo la duración de la sesión.';
$string['instanceheading'] = 'Configuraciones generales';
$string['instancenamehelp'] = 'por ejemplo, Tutorial 1 o Laboratorios de Cómputo o Tutoriales quincenales';
$string['instancetitle'] = 'Título de hoja de inscripción';
$string['last'] = 'Último';
$string['linktomanagetext'] = 'Gestionar sesiones';
$string['liveservicemsg'] = 'Servicio en vivo reconocido; las notificaciones están siendo enviadas a todos los participantes';
$string['locked'] = 'Desbloquear hoja de inscripción';
$string['lockederror'] = 'La hoja de inscripción está bloqueada. Usted no puede inscribirse en este momento.';
$string['lockedprompt'] = 'Bloqueado';
$string['lockhelp'] = 'Si se bloquea los usuarios no podrán cambiar inscripciones en esta hoja de inscripción. El bloquearla ahorita efectivamente congelará las sesiones en su estado actual.';
$string['lockwarning'] = 'La hoja de inscripciones ha sido bloqueada por el profesor. Usted no puede modificar inscripciones a sesiones.';
$string['messageprompt'] = 'Mensaje';
$string['messageprovider:notify'] = 'Notificación de hoja de inscripción';
$string['messagessent'] = 'Mensajes enviados';
$string['messagewillbesent'] = 'Mensaje a los participantes que están siendo eliminados';
$string['moduleadminname'] = 'Hoja de inscripción';
$string['modulename'] = 'Hoja de inscripción';
$string['modulename_help'] = 'La actividad de hoja de inscripción le permite a los usuarios el inscribirse a una sesión individual.


Los profesores pueden:

* Configurar si los nombres de los participantes de una sesión son visibles a otros usuarios.
* Imprimir registros de participantes inscritos a sesiones.
* Generar un archivo CSV de las inscripciones.
* Manualmente añadir y quitar participantes de sesiones.
* Bloquear y desbloquear la habilidad para inscribirse.
* Enviar un mensaje a todos los inscritos a una sesión.';
$string['modulenameplural'] = 'Hojas de inscripción';
$string['movedownsession'] = 'Mover hacia abajo';
$string['moveslot'] = 'Mover sesión {$a}';
$string['moveupsession'] = 'Mover hacia arriba';
$string['newsessionheading'] = 'Nueva sesión';
$string['newsessionhelp'] = 'Para crear una nueva sesión en la hoja de inscripción de arriba, por favor llene el formato inferior.';
$string['newtimslotprompt'] = 'Añadir nueva sesión';
$string['nosignup'] = 'Usted no está inscrito en la hoja de inscripción.';
$string['noslots'] = 'No hay sesiones para esta hoja de inscripción';
$string['numbersline'] = '{$a->total} lugares disponibles en total ({$a->taken} usados, {$a->left} libres)';
$string['numbersline_oversubscribed'] = '{$a->total} lugares disponibles en total ({$a->taken} usados, sobre-inscritos por {$a->left})';
$string['option_spaces_high'] = 'El número de lugares debe ser menor a 65536';
$string['option_spaces_low'] = 'El número de lugares debe ser mayor de 0';
$string['oversubscribed'] = 'Hay {$a->freeslots} lugares restantes en {$a->timeslotname}. Usted trató de añadir {$a->numbertoadd} asistentes.';
$string['oversubscribedby'] = 'Sobre suscrito por';
$string['pagecrumb'] = 'Sesiones';
$string['pagetitle'] = 'Hoja de inscripción';
$string['pluginadministration'] = 'Hoja de inscripción';
$string['pluginname'] = 'Hoja de inscripción';
$string['positionfirst'] = 'Parte superior de la página';
$string['positionlast'] = 'Parte inferior de la página';
$string['positionprompt'] = 'Posición';
$string['privacy'] = 'Privacidad';
$string['privacy:export:messages'] = 'Mensajes';
$string['privacy:export:signups'] = 'Inscripciones';
$string['privacy:metadata:core_message'] = 'Mensajes enviados a participantes vía el sistema de mensajería';
$string['privacy:metadata:tutorialbooking_messages'] = 'Almacena mensajes enviados a participantes mediante el plugin de hoja de inscripción';
$string['privacy:metadata:tutorialbooking_messages:message'] = 'El mensaje que fue enviado';
$string['privacy:metadata:tutorialbooking_messages:sentby'] = 'El usuario quien envió el mensaje';
$string['privacy:metadata:tutorialbooking_messages:senttime'] = 'La hora de cuando fue enviado el mensaje';
$string['privacy:metadata:tutorialbooking_messages:sentto'] = 'El usuario a quien se envió el mensaje';
$string['privacy:metadata:tutorialbooking_messages:subject'] = 'El asunto del mensaje';
$string['privacy:metadata:tutorialbooking_signups'] = 'Almacena las inscripciones que los participantes han hecho a actividades de hoja de inscripción';
$string['privacy:metadata:tutorialbooking_signups:sessionid'] = 'La sesión a la cual el usuario se inscribió';
$string['privacy:metadata:tutorialbooking_signups:signupdate'] = 'La fecha en la cual el usuario se inscribió';
$string['privacy:metadata:tutorialbooking_signups:userid'] = 'El usuario que se incribió';
$string['privacy_showall'] = 'Usuarios pueden ver todas las inscripciones';
$string['privacy_showown'] = 'Usuarios solamente pueden ver sus propias inscripciones';
$string['reasonrequired'] = 'Usted debe proporcionar la razón por la cual está eliminando al participante.';
$string['registerdateline'] = 'Por favor ingrese la fecha de la sesión (dd/mm/aa):        _ _  _ _  _  _';
$string['registerfooter'] = 'Por favor firme junto a su nombre para indicar asistencia. Si su nombre no está en la lista, por favor NO lo añada sin antes preguntar primeramente.';
$string['registerprintdate'] = 'Imprimir registro (por inscripción)';
$string['registerprintname'] = 'Imprimir registro (por nombre)';
$string['removalmessagesubject'] = 'Usted ha sido removido de {$a->timeslot}';
$string['removalreason'] = 'Razón para remoción';
$string['remove'] = 'Confirmar remoción';
$string['removefromslot'] = 'Eliminar mi inscripción';
$string['removeuserfromslot'] = 'Eliminar de esta sesión';
$string['reset'] = 'Deshacer';
$string['save'] = 'Guardar';
$string['saveasnew'] = 'Guardar como nueva sesión';
$string['search:activity'] = 'Hoja de inscripción - información de actividad';
$string['search:session'] = 'Hoja de inscripción - información de sesión';
$string['selectformat'] = 'Seleccionar formato de exportación';
$string['sendmessage'] = 'Enviar mensaje';
$string['sentby'] = 'Remitente';
$string['senttime'] = 'Enviado en';
$string['sentto'] = 'Destinatarios';
$string['sessiondescriptionhelp'] = 'Fecha, hora y lugar, como por ejemplo. 10:00am enn Jueves 14 Ago ien Salón B35, Escuela de Administración.';
$string['sessiondescriptionhelp2'] = '¡Por favor asegúrese de incluir el nombre del edificio!<br/>
¡Los coordinadores del módulo deben asegurarse de que han reservado el salón!';
$string['sessiondescriptionprompt'] = 'Título';
$string['sessionerror'] = '{$a}';
$string['sessionfull'] = 'Sin lugares disponibles; por favor elija otra sesión';
$string['sessionpagetitle'] = 'Gestión de la sesión';
$string['sessionsummaryprompt'] = 'Detalles';
$string['showallmessages'] = 'Mostrar todos los mensajes';
$string['showalltutorialbookings'] = 'Índice de página de inscripción';
$string['showmymessages'] = 'Mostrar solamente mis mensajes';
$string['signupforslot'] = 'Inscribirme para esta sesión';
$string['signuprequired'] = 'Inscribirme a la hoja de inscripción';
$string['spacesprompt'] = 'Número de lugares';
$string['statsline'] = 'La hoja de inscripción tiene {$a->places} lugares, con {$a->signedup} participantes';
$string['studentcoltitle'] = 'Nombre del participante';
$string['subjecttitleprompt'] = 'Asunto';
$string['testservicemsg'] = 'Servicio no-en-vivo - notificación siendo enviada a Administradores (id=2)';
$string['thereareno'] = 'No hay hojas de inscripción en este curso';
$string['timeslottitle'] = 'Título de sesión';
$string['totalspaces'] = 'Espacios totales';
$string['tutorialbooking'] = 'Hoja de inscripción';
$string['tutorialbooking:addinstance'] = 'Permitir a un  usuario el añadir esta actividad a un curso';
$string['tutorialbooking:adduser'] = 'Permitir al  usuario el añadir participantes a una sesión.';
$string['tutorialbooking:editsignuplist'] = 'Permitir a usuarios el editar sesiones';
$string['tutorialbooking:export'] = 'Permitir a usuarios el exportar hojas de inscripción';
$string['tutorialbooking:exportallcoursetutorials'] = 'Necesario para exportar lista para todas las inscripciones en un curso.';
$string['tutorialbooking:message'] = 'Permitir al usuario el enviar mensajes a asistentes vía la actividad de hoja de inscripción.';
$string['tutorialbooking:oversubscribe'] = 'Permitir al usuario el añadir participantes a una sesión aun y cuando esto haga que se sobrepase el máximo de lugares.';
$string['tutorialbooking:printregisters'] = 'Permitirle al usuario imprimir registros de la actividad.';
$string['tutorialbooking:removeuser'] = 'Permitir al usuario el quitar participantes de una sesión.';
$string['tutorialbooking:submit'] = 'Necesario para inscribirse a una sesión.';
$string['tutorialbooking:viewadminpage'] = 'Permitirle al usuario que vea la página de administración de la actividad.';
$string['tutorialbooking:viewallmessages'] = 'Necesario para ver mensajes que otros usuarios enviaron a asistentes a una sesión.';
$string['unauthorised'] = 'Usted no tiene permiso para inscribir(se).';
$string['unlocked'] = 'Bloquear hoja de inscripción';
$string['usedspaces'] = 'Lugares usados';
$string['useralreadysignedup'] = 'El usuario {$a->id} ya está inscrito para una sesión.';
$string['userdisplay'] = '{$a->name} ({$a->username})';
$string['viewmessages'] = 'Ver mensajes enviados';
$string['you'] = 'Usted';
$string['yousignedup'] = 'Usted está inscrito a esta sesión';
