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
 * Strings for component 'booking', language 'es_mx', branch 'MOODLE_37_STABLE'
 *
 * @package   booking
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['active'] = 'Activo';
$string['activitycompletionsuccess'] = 'Todos los usuarios seleccionados han sido marcados para finalización de actividad';
$string['addastemplate'] = 'Añadir como plantilla';
$string['addcategory'] = 'Editar categorías';
$string['addeditbooking'] = 'Editar reservaciones';
$string['addmorebookings'] = 'Añadir más reservaciones';
$string['addnewbookingoption'] = 'Añadir una nueva opción de reservación';
$string['addnewbookingoptionfromtemplate'] = 'Añadir una nueva opción de reservación desde plantilla';
$string['addnewcategory'] = 'Añadir nueva categoría';
$string['addnewinstitution'] = 'Añadir nueva institución';
$string['addnewtagtemplate'] = 'Añadir nueva plantilla de marcas';
$string['address'] = 'Dirección';
$string['addteachers'] = 'Añadir profesores';
$string['addtocalendar'] = 'Añadir al calendario';
$string['addtogroup'] = 'Inscribir automáticamente usuarios en grupo';
$string['addtogroup_help'] = 'Inscribir usuarios automáticamente al grupo - el grupo será creado automáticamente son el nombre de "Bookin name - Option name"';
$string['addusertogroup'] = 'Añadir usuario al grupo:';
$string['advancedoptions'] = 'Opciones avanzadas';
$string['aftercompletedtext'] = 'Despues de completada la actividad';
$string['aftercompletedtext_help'] = 'Deje esto vacío para usar el texto por defecto. Usted puede usar (así como están, en idioma inglés) cualquiera de los siguientes remplazables (placeholders) en el texto:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{email} - User email</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{pollurl}</li>
<li>{pollurlteachers}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher}</li>
<li>{teacherN} - N es el número de profesor como por ejemplo {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} -  Insertar código QR code con la ID del usuario</li>
<li>{qr_username} - Insertar código QR con nombre_de_usuario del usuario</li>
<li>{times} - Horas de la sesión</li>
<li>{shorturl} - Opción de URL corta</li>
</ul>';
$string['agreetobookingpolicy'] = 'He leído y estoy de acuerdo con las siguientes políticas para reservaciones';
$string['allbookingoptions'] = 'Descargar usuarios para todas las opciones de reservaciones';
$string['allchangessave'] = 'Todos los cambios han sido guardados.';
$string['allcomments'] = 'Todos pueden comentar';
$string['allmailssend'] = '¡ Se han enviado exitosamente todos los Emails a usuarios !';
$string['allowdelete'] = 'Permitirle a los usuarios cancelar sus reservaciones ellos mismos';
$string['allowupdate'] = 'Permitir que se actualicen reservaciones';
$string['allratings'] = 'Todos pueden valorar';
$string['allusersbooked'] = 'Todos los {$a} usuarios seleccionados han sidoexitosamente asignados a esta opción de reservación.';
$string['answer'] = 'Respuesta';
$string['answered'] = 'Contestado';
$string['asglobaltemplate'] = 'Usar como plantilla global';
$string['associatedcourse'] = 'Curso asociado';
$string['astemplate'] = 'Usar como plantilla en este curso';
$string['attachedfiles'] = 'Archivos anexos';
$string['attachical'] = 'Añadir eventos de iCal';
$string['attachicaldesc'] = 'Las notificaciones por Email incluirán un evento anexo iCal, si esto es habilitado';
$string['attachicalsess'] = 'Anexar todas las fechas de sesión como eventos iCal';
$string['attachicalsessdesc'] = 'LAs notificaciones por email incluirán todas las fechas de sesión definidas para una opción de reservación como anexo iCal..';
$string['autoenrol'] = 'Inscribir usuarios automáticamente';
$string['autoenrol_help'] = 'Si se selecciona, los usuarios serán inscritos dentro del curso relevante tan pronto como hagan la reservación y serán des-inscritos del curso tan pronto como se cancele la reservación.';
$string['availability'] = 'Todavía disponible';
$string['available'] = 'Lugares disponibles';
$string['availableplaces'] = 'Lugares disponibles: {$a->available} de {$a->maxanswers}';
$string['backtoresponses'] = '<< Regresar a respuestas';
$string['banusernames'] = 'Prohibir nombres_de_usuarios';
$string['banusernames_help'] = 'Para limitar cuales nombres_de_usuarios no pueden participar, simplemente escríbalos en este campo, separados por comas. Para prohibir los nombres_de_usuarios que terminan en gmail.com y yahoo.com, simplemente escriba: gmail.com, yahoo.com';
$string['banusernameswarning'] = 'Su nombre_de_usuario está prhibido, por lo que Usted no puede reservar.';
$string['beforebookedtext'] = 'Antes reservada';
$string['beforebookedtext_help'] = 'Deje esto vacío para usar el texto por defecto. Usted puede usar (así como están, en idioma inglés) cualquiera de los siguientes remplazables (placeholders) en el texto:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{email} - User email</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{pollurl}</li>
<li>{pollurlteachers}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher}</li>
<li>{teacherN} - N es el número de profesor como por ejemplo {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} -  Insertar código QR code con la ID del usuario</li>
<li>{qr_username} - Insertar código QR con nombre_de_usuario del usuario</li>
<li>{times} - Horas de la sesión</li>
<li>{shorturl} - Opción de URL corta</li>
</ul>';
$string['beforecompletedtext'] = 'después reservada';
$string['beforecompletedtext_help'] = 'Deje esto vacío para usar el texto por defecto. Usted puede usar (así como están, en idioma inglés) cualquiera de los siguientes remplazables (placeholders) en el texto:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{email} - User email</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{pollurl}</li>
<li>{pollurlteachers}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher}</li>
<li>{teacherN} - N es el número de profesor como por ejemplo {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} -  Insertar código QR code con la ID del usuario</li>
<li>{qr_username} - Insertar código QR con nombre_de_usuario del usuario</li>
<li>{times} - Horas de la sesión</li>
<li>{shorturl} - Opción de URL corta</li>
</ul>';
$string['booked'] = 'Reservado';
$string['bookedpast'] = 'Reservado (curso terminado)';
$string['bookedtext'] = 'Confirmación de reservación';
$string['bookedtext_help'] = 'Deje esto vacío para usar el texto por defecto. Usted puede usar (así como están, en idioma inglés) cualquiera de los siguientes remplazables (placeholders) en el texto:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{email} - User email</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher}</li>
<li>{teacherN} - N es el número de profesor como por ejemplo {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} -  Insertar código QR code con la ID del usuario</li>
<li>{qr_username} - Insertar código QR con nombre_de_usuario del usuario</li>
<li>{times} - Horas de la sesión</li>
<li>{shorturl} - Opción de URL corta</li>
</ul>';
$string['bookedusers'] = 'Usuarios que reservaron';
$string['booking'] = 'Reservaciones';
$string['booking:addeditownoption'] = 'Añadir opinión nueva y editar opiniones propias.';
$string['booking:addinstance'] = 'Añadir nueva reservación';
$string['bookingattachment'] = 'Anexo';
$string['bookingcategory'] = 'Categoría';
$string['booking:choose'] = 'Reservar';
$string['bookingclose'] = 'Hasta';
$string['booking:comment'] = 'Añadir comentarios';
$string['booking:communicate'] = 'Puede comunicarse';
$string['bookingdeleted'] = 'Su reservación fue cancelada';
$string['booking:deleteresponses'] = 'Eliminar respuestas';
$string['booking:downloadresponses'] = 'Descargar respuestas';
$string['bookingduration'] = 'Duración';
$string['bookingfull'] = 'No hay lugares disponibles';
$string['bookingfulldidntregister'] = 'La opción está llena, ¡por eso no transferí a todos los usuarios!';
$string['booking:managecomments'] = 'Gestionar comentarios';
$string['bookingmanagererror'] = 'El nombre_de_usuario escrito no es válido. Puede ser que no exista o que haya más de un usuario con este nombre_de_usuario (por ejemplo, si Usted tiene habilitadas autenticaciones por Mnet y locales)';
$string['bookingmeanwhilefull'] = 'Mientras tanto, alguien tomó el último lugar disponible';
$string['bookingname'] = 'Nombre de reservación';
$string['bookingopen'] = 'Abierto';
$string['bookingoptioncalendarentry'] = 'Ir a <a href="{$a}">opcíón de reservación</a>.';
$string['bookingoption_created'] = 'Opción de reservación creada';
$string['bookingoption_deleted'] = 'Opción de reservación eliminada';
$string['bookingoptionname'] = 'Nombre de opción de reservación';
$string['bookingoptionsfromtemplatemenu'] = 'Nueva opción de reservación desde plantilla';
$string['bookingoptionsmenu'] = 'Opciones de reservacion';
$string['bookingoptiontext'] = 'Texto de opción de reservación dependiendo del estatus de reservación';
$string['bookingoptiontitle'] = 'Título de opción de reservación';
$string['bookingoption_updated'] = 'Opción de reservación actualizada';
$string['bookingorganizatorname'] = 'Nombre del organizador';
$string['bookingpoints'] = 'Puntos del curso';
$string['bookingpolicy'] = 'Política de reservaciones';
$string['bookingpollurl'] = 'URL de encuesta';
$string['bookingpollurlteachers'] = 'URL de encuesta de profesor';
$string['booking:rate'] = 'Valorar opciones de reservación elegidas';
$string['booking:readallinstitutionusers'] = 'Mostrar todos los usuarios';
$string['booking:readresponses'] = 'Leer respuestas';
$string['bookingsaved'] = 'Su reservación fur guardada exitosamente. Usted puede ahora proceder a reservar otros cursos.';
$string['booking:sendpollurl'] = 'Enviar URL de encuesta';
$string['booking:sendpollurltoteachers'] = 'Mandar URL de encuesta a profesores';
$string['booking:subscribeusers'] = 'Hacer reservaciones para otros usuarios';
$string['bookingtags'] = 'Marcas';
$string['bookingtext'] = 'Texto de reservación';
$string['booking:updatebooking'] = 'Gestionar opciones de reservación';
$string['booking:viewallratings'] = 'Ver todas las valoraciones crudas dadas por individuos';
$string['booking:viewanyrating'] = 'Ver todas las valoraciones que cualquiera recibió';
$string['booking:viewrating'] = 'Ver todas las valoraciones que Usted recibió';
$string['booknow'] = 'Reservar ahora';
$string['bookotherusers'] = 'Reservar para otros usuarios';
$string['booktootherbooking'] = 'Reservar usuarios a otra reservación';
$string['bookuserswithoutcompletedactivity'] = 'Reservar usuarios sin actividad completada';
$string['btnbooknowname'] = 'Nombre del botón: "Reservar ahorita"';
$string['btncacname'] = 'Nombre del botón: "Confirmar finalización de actividad"';
$string['btncancelname'] = 'Nombre del botón: "Cancelar reservación"';
$string['cancancelbook'] = '¿Permitirle al usuario cancelar o reservar la reservación durante el período de reservación?';
$string['cancancelbookdays'] = 'Prohibirle a usuarios cancelar su reservación (n) días antes del inicio';
$string['cancancelbookdaysno'] = 'No limitar';
$string['cancel'] = 'Cancelar';
$string['cancelbooking'] = 'Cancelar reservación';
$string['cannotremovesubscriber'] = 'Usted tiene que quitar la finalización de actividad antes de cancelar la reservación. ¡ La reservación NO fue cancelada !';
$string['categories'] = 'Categorías';
$string['category'] = 'Categoría';
$string['categoryname'] = 'Nombre de categoría';
$string['cfgsignin'] = 'Configuración de Hoja para apuntarse';
$string['cfgsignin_desc'] = 'Configurar las configuraciones de la hoja para apuntarse';
$string['choosecourse'] = 'Elija un curso';
$string['choosepdftitle'] = 'Seleccionar un título para la hoja para apuntarse';
$string['closed'] = 'Reservaciones cerradas';
$string['comments'] = 'Comentarios';
$string['completed'] = 'Completado';
$string['completedcomments'] = 'Solamente con actividad completada';
$string['completedratings'] = 'Solamente con actividad completada';
$string['completionmodule'] = 'Actividad completada';
$string['completionmodule_help'] = 'Eliminar a todos los usuarios, que completaron esta actividad. ¡Los usuarios serán eliminados con un click del botón en la página del reporte!';
$string['conectedbooking'] = 'Reservación conectada';
$string['conectedbooking_help'] = 'Instancia de reservación elegible para transferir usuarios reservados. Usted puede definir desde cual opción dentro de la instancia de reservación seleccionada y a cuantos usuarios aceptará.';
$string['confirmactivtyfrom'] = 'Confirmar actividad de usuarios desde';
$string['confirmationmessage'] = 'Su reservación ha sido registrada. Status: {$a->status} Participante: {$a->name} Curso: {$a->bookingname} Fecha: {$a->date} Para ver todos sus cursos reservados, elija la liga siguiente: {$a->link}';
$string['confirmationmessagesettings'] = 'Configuraciones de Email de confirmación';
$string['confirmationmessagewaitinglist'] = 'Hola {$a->participant},

Su solicitud de reservación ha sido registrada

Estatus de reservación: {$a->status}
Participante: {$a->participant}
Curso: {$a->title}
Fecha: {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}
Para ver todos sus cursos reservados, elija el enlace siguiente: {$a->bookinglink}';
$string['confirmationsubject'] = 'Confirmación de reservación para {$a->title}';
$string['confirmationsubjectbookingmanager'] = 'Nueva reservación para {$a->title} por {$a->participant}';
$string['confirmationsubjectwaitinglist'] = 'Estatus de reservación para {$a->title}';
$string['confirmationsubjectwaitinglistmanager'] = 'Estatus de reservación para {$a->title}';
$string['confirmbookingoffollowing'] = 'Por favor confirme la reservación para el siguiente curso';
$string['confirmdeletebookingoption'] = '¿Realmente desea eliminar esta opción de reservación?';
$string['confirmoptioncompletion'] = '(Des)confirmar estado de finalización';
$string['confirmpresence'] = 'Confrmar presencia';
$string['confirmusers'] = 'Confirmar actividad del usuario';
$string['confirmuserswith'] = 'Confirmar usuarios que completaron actividad o que recibieron insignia';
$string['copy'] = '- Copiar';
$string['copyonlythisbookingurl'] = 'Copiar esta URL de reservación';
$string['copypollurl'] = 'Copiar URL de encuesta';
$string['copytoclipboard'] = 'Copiar al portapapeles: Ctrl+C, Enter';
$string['coursedate'] = 'Fecha';
$string['courseendtime'] = 'Hora de fin del curso';
$string['coursestarttime'] = 'Hora de principio del curso';
$string['createdby'] = 'Módulo de reservaciones hecho por edulabs.org';
$string['csvfile'] = 'Archivo CSV';
$string['csvfile_help'] = 'El archivo CSV debe contener solamente una columna llamada Institution (Institución).';
$string['customfield'] = 'Campo personalizado a ser configurado en las configuraciones de opción de reservación. Después será mostrado en la vista general de opción de reservación.';
$string['customfieldconfigure'] = 'Campos personalizados de opción de reservación';
$string['customfielddef'] = 'Campo personalizado de opción de reservación';
$string['customfielddesc'] = 'Después de añadir un campo personalizado, Usted puede definir el valor para el campo en las configuraciones de la opción de reservación. El valor será mostrado en la descripción de la opción de reservación.';
$string['customfieldoptions'] = 'Lista de valores posibles';
$string['customfieldtype'] = 'Tipo de campo';
$string['customlabels'] = 'Etiquetas personalizadas';
$string['dateerror'] = 'Fecha equivocada en la línea {$a}:';
$string['datenotset'] = 'Fecha no configurada';
$string['dateparseformat'] = 'Formato para procesar fecha';
$string['dateparseformat_help'] = 'Por favor, use el formato de fecha especificado en el archivo CSV file. Ayuda con <a href="http://php.net/manual/en/function.date.php">este</a> reurso para opciones.';
$string['days'] = '{$a} días';
$string['daystonotify'] = '¿Cuantos días antes del evento deberá notificarse a los participantes?';
$string['daystonotify2'] = 'Segunda notificación antes del inicio de evento para notificar a participantes.';
$string['daystonotify_help'] = '¡Solamente funcionará si la opción de fecha de inicio y término está configur Use 0 para deshabilitad esta funcionalidad.ada!';
$string['defaultbookingoption'] = 'Opciones por defecto para reservaciones';
$string['defaultdateformat'] = 'j.n.Y H:i:s';
$string['defaulttemplate'] = 'Plantilla predeterminada';
$string['defaulttemplatedesc'] = 'Plantilla predeterminada de opción de reservación, al crear nueva opción de reservación.';
$string['delcustfield'] = 'Eliminar este campo y todas las configuraciones asociadas al campo en las opciones de reservación';
$string['deletebooking'] = '¿Realmente desea des-inscribirse del curso siguiente <br /><br /> <b>{$a} </b>';
$string['deletebookingoption'] = 'Eliminar esta opción de reservación';
$string['deletecategory'] = 'Eliminar';
$string['deletedbookingmessage'] = 'Reservación eliminada para el curso siguiente: {$a->title}

Usuario: {$a->participant}
Título: {$a->title}
Fecha: {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}
Curso: {$a->courselink}
Enlace a reservación: {$a->bookinglink}';
$string['deletedbookingsubject'] = 'Reservación eliminada: {$a->title} por {$a->participant}';
$string['deletedbookingusermessage'] = 'Hola {$a->participant},
Su reservación para {$a->title} ({$a->startdate} {$a->starttime}) ha sido cancelada.';
$string['deletedbookingusersubject'] = 'Reservación para {$a->title} cancelada';
$string['deletedrule'] = 'Regla eliminada exitosamente.';
$string['deletedtext'] = 'Mensaje de reservación cancelada';
$string['deletedtext_help'] = 'Deje esto vacío para usar el texto por defecto. Usted puede usar (así como están, en idioma inglés) cualquiera de los siguientes remplazables (placeholders) en el texto:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{email} - User email</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{pollurl}</li>
<li>{pollurlteachers}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher}</li>
<li>{teacherN} - N es el número de profesor como por ejemplo {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} -  Insertar código QR code con la ID del usuario</li>
<li>{qr_username} - Insertar código QR con nombre_de_usuario del usuario</li>
<li>{times} - Horas de la sesión</li>
<li>{shorturl} - Opción de URL corta</li>
</ul>';
$string['deleteresponsesactivitycompletion'] = 'Eliminar a todos los usuarios con actividad completada: {$a}';
$string['deleterule'] = 'Eliminar';
$string['deletesubcategory'] = '¡Por favor, primeramente elimine todas las sub-categorías de esta categoría!';
$string['deleteuserfrombooking'] = '¿Realmente desea eliminar los usuarios de la reservación?';
$string['delnotification'] = 'Usted ha elimninado exitosamente {$a->del} de {$a->all} usuarios. ¡Los usuarios que hayan completado actividad no pueden ser eliminados!';
$string['delnotificationactivitycompletion'] = 'Usted eleiminó a {$a->del} de {$a->all} usuarios. ¡Los usuarios que han completado actividad, no pueden ser eliminados!';
$string['disablebookingusers'] = 'Deshabilitar reservaciones de usuarios - Ocultar botón para Reservar ahora.';
$string['donotselectcourse'] = 'No seleccionó curso';
$string['dontuse'] = 'No usar plantilla';
$string['download'] = 'Descargar';
$string['downloadallresponses'] = 'Descargar todas las respuestas para todas las opciones de reservaciones';
$string['downloadusersforthisoptionods'] = 'Descargar usuarios como archivo .ODS';
$string['downloadusersforthisoptionxls'] = 'Descargar usuarios como archivo .XLS';
$string['duplicatebooking'] = 'Duplicar esta opción de reservación';
$string['duplicatename'] = 'el nombre de la opción de reservación ya existe. Por favor elija otro.';
$string['editcategory'] = 'Editar';
$string['editingoptiondate'] = 'Usted está actualmente editando esta sesión';
$string['editinstitutions'] = 'Editar instituciones';
$string['editotherbooking'] = 'Otras reglas para reservar';
$string['editrule'] = 'Editar';
$string['edittag'] = 'Editar';
$string['editteachers'] = 'Editar';
$string['editteacherslink'] = 'Editar profesores';
$string['enablecompletion'] = 'Habilitar finalización manual de actividad en respuestas de opción de reservación';
$string['enablecompletiongroup'] = 'Finalización manual de actividad';
$string['enablepresence'] = 'Habilitar presencia';
$string['endtimenotset'] = 'Fecha final no configurada';
$string['enrolledcomments'] = 'Solamente inscritos';
$string['enrolledinoptions'] = 'que ya reservaron en opciones de reservacion:';
$string['enrolledratings'] = 'Solamente inscritos';
$string['enrolmentstatus'] = 'No inscribir inmediatamente, sino solamente al momento de inicio del curso';
$string['entervalidurl'] = '¡Por favor, escriba una URL válida !';
$string['error:failedtosendconfirmation'] = 'El usuario siguiente no recibió un correo de confirmación de Reservación. Status: {$a->status} Participante: {$a->name} Curso: {$a->bookingname} Fecha: {$a->date} Liga: {$a->link}';
$string['errorpagination'] = 'Por favor ngrese un número mayor de 0';
$string['eventbooking_cancelled'] = 'Reservacion cancelada';
$string['eventbookingoption_booked'] = 'Opción de reservación reservada';
$string['eventduration'] = 'Duración del evento';
$string['eventpoints'] = 'Puntos';
$string['eventreport_viewed'] = 'Reporte visto';
$string['eventteacher_added'] = 'Profesor añadido';
$string['eventteacher_removed'] = 'Profesor quitado';
$string['eventtype'] = 'Tipo de evento';
$string['eventuserprofilefields_updated'] = 'Perfil-del usuario actualizado';
$string['excelfile'] = 'Archivo CSV con finalización de actividad';
$string['existingsubscribers'] = 'Suscriptores existentes';
$string['expired'] = 'Lo sentimos, esta actividad se cerró el {$a} y ya no está disponible';
$string['fields'] = 'Campos a mostrar en diferentes contextos';
$string['fillinatleastoneoption'] = 'Usted necesita proporcionar al menos dos posibles respuestas.';
$string['forcourse'] = 'para el curso';
$string['full'] = 'LLeno';
$string['fullname'] = 'Nombre completo';
$string['generatenewurl'] = 'Generar nueva URL corta';
$string['generaterecnum'] = 'Generar números';
$string['generaterecnumareyousure'] = '¡Esto generará números nuevos y eliminará permanentemente al antiguo!';
$string['generaterecnumnotification'] = 'Los números nuevos fueron generados exitosamente.';
$string['goenrol'] = 'Ir al registro';
$string['googleapikey'] = 'Clave API Google';
$string['googleapikey_desc'] = 'Clave API key para Google URL Shortener (acortador de URL). Obténgala aquí: https://developers.google.com/url-shortener/v1/getting_started#APIKey';
$string['gotobooking'] = '<< Reservaciones';
$string['gotop'] = 'Ir a superior';
$string['groupdeleted'] = 'Esta instancia de reservación crea grupos automáticamente en el curso  destino; pero el grupo ha sido eliminado manualmente en el curso destino. Active la siguiente casilla para recrear el grupo.';
$string['groupexists'] = 'El grupo ya existe en el curso destino; por favor elija otro nombre para la opción de reservación';
$string['groupname'] = 'Nombre del grupo';
$string['hidedescription'] = 'Ocultar descripción';
$string['hours'] = '{$a} horas';
$string['howmanyusers'] = '¿Cuantos usuarios puede reservar Usted?';
$string['howmanyusers_help'] = '';
$string['icalcancel'] = 'Incluir evento iCal cuando la reservación sea cancelada como evento cancelado';
$string['icalcanceldesc'] = 'Cuando un usuario cancela una reservación o es quitado de la lista de usuarios reservados, entonces añadir un anexo iCal como evento cancelado.';
$string['icalcfg'] = 'Configuración de los anexos ical';
$string['icalcfgdesc'] = 'Configurar los archivos ical que están anexos a mensajes Email. Estos archivos permiten añadir las fechas de reservaciones al calendario personal.';
$string['icalfieldlocation'] = 'Texto a mostrar en la localización del campo ical';
$string['icalfieldlocationdesc'] = 'Elegir de la lista desplegable cual texto debería de usarse para el campo "localización" del calendario';
$string['importcsvbookingoption'] = 'Importar CSV con opciones de reservación';
$string['importcsvtitle'] = 'Importar CSV';
$string['importexcelbutton'] = 'Importar finalización de actividad';
$string['importexceltitle'] = 'Importar finalización de actividad';
$string['import_failed'] = 'La importación falló debido a la siguiente razón:';
$string['importfinished'] = '¡Importación terminada!';
$string['importinfo'] = 'Información de la importación: Usted puede usar las columnas siguientes en la subida de CSV (Explicación entre paréntesis)';
$string['import_partial'] = 'La importación solamente fue completada parcialmente. Hubo problemas con las líneas siguientes y no fueron importadas:';
$string['includeteachers'] = 'Incluir profesores en la hoja para apuntarse';
$string['infonobookingoption'] = 'Por favor use el bloque {$a} para añadir su primera opción de reservación';
$string['institution'] = 'Institución';
$string['institutionname'] = 'Nombre de la institución';
$string['institutions'] = 'Instituciones';
$string['lblacceptingfrom'] = 'Nombre de la etiqueta: "Aceptando de"';
$string['lblbooking'] = 'Nombre de etiqueta: "Reservación"';
$string['lblbooktootherbooking'] = 'Nombre del botón "Reservar usuarios a otra opción de reservación"';
$string['lblinstitution'] = 'Nombre de la etiqueta: "Institución"';
$string['lbllocation'] = 'Nombre de la etiqueta: "Lugar"';
$string['lblname'] = 'Nombre de la etiqueta: "Nombre"';
$string['lblnumofusers'] = 'Nombre de la etiqueta: "Núm. de usuarios"';
$string['lblsputtname'] = 'Nombre de etiqueta "Mandar URL de encuesta a profesores"';
$string['lblsurname'] = 'Nombre de la etiqueta: "Apellido(s)"';
$string['lblteachname'] = 'Nombre de la etiqueta: "Profesores"';
$string['leftandrightdate'] = '{$a->leftdate} a {$a->righttdate}';
$string['limit'] = 'Límite';
$string['limitanswers'] = 'Limitar el número de participantes';
$string['limitanswers_help'] = '¡Si Usted cambia esta opción y tenía personas reservadas, Usted puede quitarlas sin notificación!';
$string['location'] = 'Sitio';
$string['mailconfirmationsent'] = 'Pronto recibirá un correo de confirmación';
$string['managebooking'] = 'Gestionar';
$string['manageoptiontemplates'] = 'Gestionar plantillas de opción de reservación';
$string['maxoverbooking'] = 'Número máximo de lugares en lista de espera';
$string['maxparticipantsnumber'] = 'Número máximo de participantes';
$string['maxperuser'] = 'Reservaciones máximas por usuario';
$string['maxperuser_help'] = 'El número máximo de reservaciones que puede hacer un usuario individual el mismo tiempo. Después de que haya pasado el tiempo de terminación de un evento, ya no se contará este límite.';
$string['maxperuserwarning'] = 'Usted tiene actualmente {$a->count} de un total de {$a->limit} reservaciones máximas disponibles de ({$a->eventtype}) para su cuienta de usuario';
$string['messageprovider:bookingconfirmation'] = 'Confirmaciones de reservación';
$string['messagesend'] = 'Su mensaje fue enviado exitosamente.';
$string['messagesubject'] = 'Asunto';
$string['messagetext'] = 'Mensaje';
$string['minutes'] = '{$a} minutos';
$string['modulename'] = 'Reservación';
$string['modulenameplural'] = 'Reservaciones';
$string['moveoptionto'] = 'Mover opción de reservación hacia otra instancia de reservación';
$string['multiicalfiles'] = 'Anexar un archivo ical por fecha para compatibilidad con MS Outlook 2010';
$string['multiicalfilesdesc'] = 'Solamente MS Outlook 2010 no soporta fechas múltiples dentro de un archivo ical. Las versiones anteriores y posteriores si lo soportan (Excepto Outlook 365). Si Usted desea enviar fechas compatibles con MS Outlook, entonces active esta opción para anexar múltiples archivos ical (uno por fecha/evento)';
$string['multiselect'] = 'Selección múltiple';
$string['mustchooseone'] = 'Usted debe elegir una opción antes de guardar. Nada se guardó.';
$string['mustfilloutuserinfobeforebooking'] = 'Antes de proceder al formato para reservación, por favor llene algunos datos personales';
$string['mybookings'] = 'Mis reservaciones';
$string['myoptions'] = 'Mis opciones ({$a})';
$string['newtemplatesaved'] = 'LA nueva plantilla para opción de reservación fue guardada.';
$string['next'] = 'Siguiente';
$string['no'] = 'No';
$string['nobookingselected'] = 'No se seleccionó opción de reservación';
$string['nocomments'] = 'Comentariosdeshabilitados';
$string['nocourse'] = 'Ningun curso seleccionado para esta opción de reservación';
$string['nodateset'] = 'Fecha del curso no configurada';
$string['noguestchoose'] = 'Lo sentimos, los invitados no pueden introducir datos';
$string['noratings'] = 'Valoraciones deshabilitadas';
$string['noresultsviewable'] = 'Los resultados no están visibles actualmente.';
$string['norighttobook'] = 'No es posible reservar para su rol de usuario. Por favor contacte al administrador del sitio para que le proporcione los permisos apropiados o entre al sitio.';
$string['nosubscribers'] = '¡No hay profesores asignados!';
$string['notallbooked'] = 'Los usuarios siguientes no pudieron ser reservados debido a que se alcanzó el número máximo de reservaciones por usuario o por falta de lugares disponibles para la opción de reservación: {$a}';
$string['notbooked'] = 'Aún no reservado';
$string['notconectedbooking'] = 'No conectado';
$string['noteacherfound'] = 'No se encontró profesor en la línea {$a}:';
$string['notemplate'] = 'No usar como plantilla';
$string['notes'] = 'Notas de reservación';
$string['notificationsubject'] = 'Curso próximo futuro...';
$string['notificationtext'] = 'Texto de notificación a mostrar en finalización de actividad.';
$string['notificationtext_help'] = 'Deje esto vacío para usar el texto por defecto. Usted puede usar (así como están, en idioma inglés) cualquiera de los siguientes remplazables (placeholders) en el texto:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{email} - User email</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{pollurl}</li>
<li>{pollurlteachers}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher}</li>
<li>{teacherN} - N es el número de profesor, por ejemplo {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insertar código QR con id del usuario</li>
<li>{qr_username} - Insertar código  QR con nombre_de_usuario del usuario</li>
<li>{times} - Horas de la sesión</li>
<li>{shorturl} - Opción de URL corta</li>
</ul>';
$string['notificationtextmessage'] = 'El curso iniciarát:

Curso: {$a->title}
Fechas: {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}';
$string['notificationtextsubject'] = '¡Información acerca del inicio del curso!';
$string['notifyemail'] = 'Notificación antes del inicio';
$string['notifyemaildefaultmessage'] = 'Su reservación ha sido registrada


Estatus de reservación: {$a->status}
Participante: {$a->participant}
Curso: {$a->title}
Fecha: {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}
Para ver todos sus cursos reservados, haga clic en el enlace siguiente: {$a->bookinglink}
El curso asociado puede encontrarse aquí: {$a->courselink}';
$string['notifyemail_help'] = 'Deje esto vacío para usar el texto por defecto. Usted puede usar (así como están, en idioma inglés) cualquiera de los siguientes remplazables (placeholders) en el texto:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{email} - User email</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{pollurl}</li>
<li>{pollurlteachers}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher}</li>
<li>{teacherN}  - N es el número de profesor, por ejemplo {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insertar código QR con id del usuario</li>
<li>{qr_username} - Insertar código  QR con nombre_de_usuario del usuario</li>
<li>{times} - Horas de la sesión</li>
<li>{shorturl} - Opción de URL corta</li>
</ul>';
$string['notopenyet'] = 'Lo sentimos, esta actividad no estará disponible hasta después de {$a}';
$string['notstarted'] = 'Aun no iniciado';
$string['nouserfound'] = 'No se encontró usuario:';
$string['nousers'] = '¡Sin usuarios!';
$string['numberrows'] = 'Numerar filas';
$string['numberrowsdesc'] = 'Numerar cada fila de la hoja para apuntarse. el número será mostrado a la izquierda del nombre en la misma columna';
$string['numgenerator'] = '¿Habilitar generación de número de registro?';
$string['numrec'] = 'Núm. registro';
$string['onlythisbookingurl'] = 'Enlazar hacia esta URL de reservación';
$string['onwaitinglist'] = 'Usted está en la lista de espera';
$string['optiondates'] = 'Sesión con Fechas Múltiples';
$string['optiondatesmessage'] = 'Sesión {$a->number}: {$a->date} <br> Desde: {$a->starttime} <br> Hasta: {$a->endtime}';
$string['optiondatessuccessfullydelete'] = 'Se eliminó la hora de sesión.';
$string['optiondatessuccessfullysaved'] = 'Se guardó la hora de sesión.';
$string['optiondatestime'] = 'Hora de sesión';
$string['optionid'] = 'ID de opción';
$string['optionmenu'] = 'Esta opción de reservación';
$string['optionsfields'] = 'Campos en la página de vista general de opciones de reservcación';
$string['optiontemplatename'] = 'Nombre de plantilla de opción';
$string['optiontemplatessettings'] = 'Plantillas de opción de reservación';
$string['organizatorname'] = 'Nombre del organizador';
$string['otherbookingaddrule'] = 'Añadir regla nueva';
$string['otherbookinglimit'] = 'Límite';
$string['otherbookinglimit_help'] = 'Cuantos usuarios aceptará Usted desde la opción. Si fuera 0 Usted podrá aceptar usuarios ilimitados.';
$string['otherbookingnumber'] = 'Número de usuarios';
$string['otherbookingoptions'] = 'Aceptando de';
$string['otherbookingsuccessfullysaved'] = '¡Regla guardada!';
$string['paginationnum'] = 'N. de registros - paginación';
$string['pdfdate'] = 'Fecha(s) de Reservación(es):';
$string['pdflandscape'] = 'Paisaje';
$string['pdflocation'] = 'Sitio:';
$string['pdfportrait'] = 'Retrato';
$string['pdfroom'] = 'Salón';
$string['pdfsignature'] = 'Firma';
$string['pdfstudentname'] = 'Nombre del estudiante';
$string['pdftodaydate'] = 'Fecha:';
$string['pluginadministration'] = 'Administración de reservaciones';
$string['pluginname'] = 'Reservación';
$string['pollstrftimedate'] = '%Y-%m-%d';
$string['pollurl'] = 'URL de encuesta';
$string['pollurl_help'] = 'Deje esto vacío para usar el texto por defecto. Usted puede usar (así como están, en idioma inglés) cualquiera de los siguientes remplazables (placeholders) en el texto:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{email} - User email</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher}</li>
<li>{teacherN} - N es el número de profesor, por ejemplo {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insertar código QR con id del usuario</li>
<li>{qr_username} - Insertar código QR con nombre_de_usuario del usuario</li>
<li>{times} - Horas de la sesión</li>
<li>{shorturl} - Opción de URL corta</li>
</ul>';
$string['pollurlteachers'] = 'URL de encuesta a profesores';
$string['pollurlteachers_help'] = 'Deje esto vacío para usar el texto por defecto. Usted puede usar (así como están, en idioma inglés) cualquiera de los siguientes remplazables (placeholders) en el texto:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{email} - User email</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher}</li>
<li>{teacherN} - N es el número de profesor, por ejemplo {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insertar código QR con id del usuario</li>
<li>{qr_username} - Insertar código QR con nombre_de_usuario del usuario</li>
<li>{times} - Horas de la sesión</li>
<li>{shorturl} - Opción de URL corta</li>
</ul>';
$string['pollurlteacherstext'] = 'URL para enviar encuesta Profesores';
$string['pollurlteacherstext_help'] = 'Deje esto vacío para usar el texto por defecto. Usted puede usar (así como están, en idioma inglés) cualquiera de los siguientes remplazables (placeholders) en el texto:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{pollurl}</li>
<li>{pollurlteachers}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher}</li>
<li>{teacherN} - N es el número de profesor, comopor ejemplo {teacher1}</li>
<li>{qr_id} - Inserte código QR con id del usuario</li>
<li>{qr_username} - Inserte código QR con nombre_De-usuario del usuario</li>
<li>{times} - Horas de la sesión</li>
<li>{shorturl} - Opción de URL corta</li>
</ul>';
$string['pollurlteacherstextmessage'] = 'Por favor, conteste la encuesta

URL de la encuesta {pollurlteachers}';
$string['pollurlteacherstextsubject'] = 'Por favor, conteste la encuesta';
$string['pollurltext'] = 'Enviar URL de encuesta';
$string['pollurltext_help'] = 'Deje esto vacío para usar el texto por defecto del sitio. Usted puede usar  (así como están, en idioma inglés) cualquiera de los siguientes remplazables (\'\'placeholders\'\') en el texto:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{email} - User email</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{pollurl}</li>
<li>{pollurlteachers}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher}</li>
<li>{teacherN} - N es el número del profesor, por ejemplo {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insertar código QR con ID del usuario</li>
<li>{qr_username} - Insertar código QR con nombre_de_usuario del usuario</li>
<li>{times} - Horas de sesión</li>
<li>{shorturl} - Opción de URL corta</li>
</ul>';
$string['pollurltextmessage'] = 'Por favor, conteste la encuesta

URL de la encuesta {pollurl}';
$string['pollurltextsubject'] = 'Por favor, conteste la encuesta';
$string['potentialsubscribers'] = 'Suscriptores potenciales';
$string['presence'] = 'Presencia';
$string['previous'] = 'Anterior';
$string['privacy:metadata:booking_answers'] = 'Representa una reservación a un evento';
$string['privacy:metadata:booking_answers:bookingid'] = 'ID del evento';
$string['privacy:metadata:booking_answers:notes'] = 'Notas adicionales';
$string['privacy:metadata:booking_answers:optionid'] = 'Especifica cual versión de un evento; por ejemplo, semestre_verano o semestre_invierno';
$string['privacy:metadata:booking_answers:status'] = 'Información del estado para esta reservación';
$string['privacy:metadata:booking_answers:timecreated'] = 'Sello de tiempo de cuando fue creada la reservación';
$string['privacy:metadata:booking_answers:timemodified'] = 'Sello de tiempo de cuando fue modificada por última vez la reservación';
$string['privacy:metadata:booking_answers:userid'] = 'Usuario que está reservado para este evento';
$string['privacy:metadata:booking_answers:waitinglist'] = 'Si es que este usuario está en una lista de espera';
$string['privacy:metadata:booking_ratings'] = 'Representa su valoración de un evento';
$string['privacy:metadata:booking_ratings:optionid'] = 'Cual versión de un evento fue valorada';
$string['privacy:metadata:booking_ratings:rate'] = 'Valoración que fue asignada';
$string['privacy:metadata:booking_ratings:userid'] = 'Usuario que valoró este evento';
$string['privacy:metadata:booking_teachers'] = 'Representa al profesor de un evento';
$string['privacy:metadata:booking_teachers:completed'] = 'Si el trabajo fue completado';
$string['privacy:metadata:booking_teachers:optionid'] = 'Cual versión de un evento es enseñada';
$string['privacy:metadata:booking_teachers:userid'] = 'Usuario que está enseñando este evento';
$string['question'] = 'Pregunta';
$string['ratings'] = 'Valoraciones de Opcion_de_Reservación';
$string['ratingsuccess'] = 'Las valoraciones fueron actualizadas exitosamente';
$string['recreategroup'] = 'Recrear grupos en el curso destino e inscribir usuarios en el grupo';
$string['removeafterminutes'] = 'Quitar finalización de actividad después de N minutos';
$string['removeresponses'] = 'Quitar todas las respuestas';
$string['removeuseronunenrol'] = '¿Quitar usuario de reservación, cuando lo des-inscriban del curso?';
$string['reportfields'] = 'Campos de respuestas descargables (CSV,XLS-Descarga)';
$string['reset'] = 'Reiniciar';
$string['responses'] = 'Respuestas';
$string['responsesfields'] = 'Campos en la página para "gestionar respuestas"';
$string['responsesto'] = 'Respuestas a {$a}';
$string['rootcategory'] = 'Raíz';
$string['savenewtagtemplate'] = 'Guardar';
$string['searchdate'] = 'Fecha';
$string['searchname'] = 'Nombre(s)';
$string['searchsurname'] = 'Apellido(s)';
$string['searchtag'] = 'Buscar marcas';
$string['searchwaitinglist'] = 'En lista de espera';
$string['select'] = 'Selección';
$string['selectanoption'] = 'Por favor seleccione una opciónd e reservación';
$string['selectatleastoneuser'] = '¡Por favor, seleccione al menos un usuario!';
$string['selectcategory'] = 'Seleccionar categoría';
$string['selectfield'] = 'Lista desplegable';
$string['selectoptionid'] = '¡Por favor, seleccione opción!';
$string['selectoptioninotherbooking'] = 'Opción';
$string['selectpresencestatus'] = 'Elegir estatus de presencia';
$string['sendconfirmmail'] = 'Mandar correo de confirmación';
$string['sendconfirmmailtobookingmanger'] = 'Mandar correo de confirmación al mánager de reservaciones';
$string['sendcustommessage'] = 'Mandar mensaje personalizado';
$string['sendmailtobooker'] = 'Página para Reservar para otros usuarios: Enviar Email al usuario que reserva en vez de mandárselos a los usuarios que son reservados.';
$string['sendmailtobooker_help'] = 'Active esta opción para mandar Emails de confirmación de reservación al usuario que reserva para otros usuarios en lugar de usuarios que han sido añadidos a una opción de reservación.
Esto solamente es relevante para reservaciones hechas en la página para "reservar para otros usuarios".';
$string['sendpollurltoteachers'] = 'Enviar URL de encuesta';
$string['sendreminderemail'] = 'Enviar Email recordatorio';
$string['sendreminderemailsuccess'] = '¡El Email de notificación fue enviado exitosamente!';
$string['shorturl'] = 'URL corta de esta opción';
$string['showactive'] = 'Reservaciones activas';
$string['showallbookings'] = 'Mostrar vista general de reservaciones para todas las reservaciones';
$string['showcustomfields'] = 'Campos de opción de reservación personalizada';
$string['showcustomfields_desc'] = 'Seleccionar los campos de opciones de reserrvación personalizada a ser mostrados en la hoja para apuntarse';
$string['showdescription'] = 'Mostrar descripción';
$string['showhelpfullnavigationlinks'] = 'Mostrar enlaces de navegación';
$string['showhelpfullnavigationlinks_help'] = 'Mostrar enlaces hacia \'Ir al registro\' y  \'Ir a superior\' .';
$string['showinapi'] = '¿Mostrar en API?';
$string['showmybookingsonly'] = 'Mis reservaciones';
$string['showonlymyinstitutions'] = 'Mi institución';
$string['showviews'] = 'Vistas a mostrar en la vista general de opciones de reservación';
$string['signature'] = 'Firma';
$string['signinaddemptyrows'] = 'Número de filas vacías para añadir para personas que no se apuntaron';
$string['signincustfields'] = 'Campos de perfil personalizados';
$string['signincustfields_desc'] = 'Seleccionar los campos personalizados del perfil del usuario a mostrarse en la hoja para apuntarse';
$string['signinextracols'] = 'Columna adicional';
$string['signinextracols_desc'] = 'Usted puede imprimir hasta 3 columnas adicionales en la hoja para apuntarse. LLenen el título de la columna o déjelo vacío para no tener columnas adicionales';
$string['signinextracols_heading'] = 'Columnas adicionales en la hoja para apuntarse';
$string['signinlogo'] = 'Logo a mostrar en la hoja para apuntarse';
$string['signinlogofooter'] = 'Logo en pie de página a mostrar en la hoja para apuntarse';
$string['signinlogoheader'] = 'Logo enencabezado a mostrar en la hoja para apuntarse';
$string['signinonesession'] = 'Mostrar hora de sesión seleccionada en la hoja para apuntarse';
$string['sign_in_sheet_download'] = 'Descargar Hoja para Apuntarse';
$string['signinsheetfields'] = 'Campos de hoja ara apuntarse (PDF)';
$string['spaceleft'] = 'espacio disponible';
$string['spacesleft'] = 'espacios disponibles';
$string['startendtimeknown'] = 'Hora de principio y fin del curso son conocidas';
$string['starttimenotset'] = 'No se configuró fecha de inicio';
$string['status_attending'] = 'Asistiendo';
$string['statuschangebookedmessage'] = 'Hola {$a->name}, Su status de reservación ha cambiado. Usted está ahora registrado en {$a->bookingname}. Status de reservación: {$a->status} Participante: {$a->name} Curso: {$a->bookingname} Fecha: {$a->date} Para ver todos sus cursos reservados elija la liga siguiente: {$a->link}';
$string['statuschangebookedsubject'] = 'Cambió el estatus de reservación para {$a->title}';
$string['statuschangetext'] = 'Mensaje de cambio de estatus';
$string['statuschangetext_help'] = 'Deje esto vacío para usar el texto por defecto del sitio. Usted puede usar  (así como están, en idioma inglés) cualquiera de los siguientes remplazables (\'\'placeholders\'\') en el texto:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{email} - User email</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{pollurl}</li>
<li>{pollurlteachers}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher}</li>
<li>{teacherN} - N es el número del profesor, por ejemplo {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insertar código QR con id del usurio</li>
<li>{qr_username} - Insertar código QR con nombre_del_usuario del usuario</li>
<li>{times} - Horas de la sesión</li>
<li>{shorturl} - Opción de URL corta</li>
</ul>';
$string['status_complete'] = 'Completo';
$string['status_failed'] = 'Reprobado';
$string['status_incomplete'] = 'Incompleto';
$string['status_noshow'] = 'No visto';
$string['status_unknown'] = 'Desconocido';
$string['submitandaddnew'] = 'Guardar y añadir nuevo';
$string['subscribersto'] = 'Profesores para \'{$a}\\';
$string['subscribetocourse'] = 'Inscribir usuarios al curso';
$string['subscribeuser'] = '¿Realmente quiere inscribir a los usuarios en el curso siguiente?';
$string['successfulldeleted'] = '¡La categoría fue eliminada!';
$string['successfulldeletedinstitution'] = '¡La institución fue eliminada!';
$string['sucesfullcompleted'] = 'La actividad fue completada exitosamente para usuarios.';
$string['sucesfullytransfered'] = 'Los usuarios fueron transferidos exitosamente.';
$string['tagsuccessfullysaved'] = 'La marca fue guardada.';
$string['tagtag'] = 'Marca';
$string['tagtemplates'] = 'Plantillas de marca';
$string['tagtext'] = 'Texto';
$string['taken'] = 'Tomado';
$string['teacherroleid'] = 'Suscribir al profesor con ese rol al curso.';
$string['teachers'] = 'Profesores';
$string['templatedeleted'] = '¡La plantilla fue eliminada!';
$string['terminated'] = 'Terminado';
$string['textfield'] = 'Ingreso de texto de línea única';
$string['timecloseoption'] = 'Limitar la disponibilidad de esta opción de reservación hasta una cierta fecha';
$string['timecreated'] = 'Hora de creación';
$string['timerestrict'] = 'Restringir respuestas a este lapso de tiempo';
$string['to'] = 'a';
$string['toomuchusersbooked'] = 'El número máximo de usuarios que Usted puede reservar es : {$a}';
$string['topic'] = 'Tópico';
$string['transefusers'] = 'Transferir usuarios';
$string['transfer'] = 'Transferir';
$string['transferheading'] = 'Transferir usuarios seleccionados a la opción de reservación seleccionada';
$string['transferhelp'] = 'Transferir usuarios, que no hayan completado la actividad, de la opción seleccionada hacia {$a}.';
$string['transferoptionsuccess'] = 'La opción de reservación y los usuarios han sido transferidos exitosamente.';
$string['transferproblem'] = 'Lo siguiente no pudo ser transferido debido a limitación del usuario o limitación de opción de reservación: {$a}';
$string['transfersuccess'] = 'El usuario ha sido exitosamente transferido a la nueva opción de reservación';
$string['unlimited'] = 'El número de lugares disponibles no está limitado';
$string['updatebooking'] = 'Editar esta opción de reservación';
$string['usedinbooking'] = '¡Usted no puede eliminar esta categoría, porque Usted está usándola al reservar!';
$string['usedinbookinginstances'] = 'La plantilla es utilizada en las siguientes instancias de reservación';
$string['usercalendarentry'] = 'Usted está reservado para esta <a href="{$a}">sesión</a>.';
$string['userdownload'] = 'Descargar usuarios';
$string['userid'] = 'UserID (ID del usuario)';
$string['userleave'] = 'Usuario ha cancelado su propia reservación';
$string['userleavebookedmessage'] = 'Hola {$a->participant},

Usted se ha des-inscrito exitosamente de {$a->title}.';
$string['userleavebookedsubject'] = 'Usted se ha des-inscrito exitosamente de {$a->title}';
$string['userleave_help'] = 'Deje esto vacío para usar el texto por defecto. Usted puede usar (así como están, en idioma inglés) cualquiera de los siguientes remplazables (placeholders) en el texto:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{email} - User email</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{pollurl}</li>
<li>{pollurlteachers}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher}</li>
<li>{teacherN} - N es el número de profesor, como por ejemplo {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Inserte código QR con id del usuario</li>
<li>{qr_username} - Insert QR code with user username</li>
<li>{times} - Horas de sesión</li>
<li>{shorturl} - Opción de URL corta</li>
</ul>';
$string['usernameofbookingmanager'] = 'Nombre_de_usuario del mánager de reservaciones';
$string['usernameofbookingmanager_help'] = 'Nombre_de_usuario del usuario que se mostrará en el campo "De" de las notificaciones de confirmación. Si está habilitada la opción para "Enviar Email de confirmación al Mánager de reservaciones", éste será el usuario quien recibe  una copia de las notificaciones de confirmación.';
$string['users'] = '<< Gestionar respuestas';
$string['usersonlist'] = 'Usuario en lista';
$string['userssuccessfullenrolled'] = '¡Todos los usuarios han sido inscritos!';
$string['userssuccessfullybooked'] = 'Todos los usuarios han sido reservados en la otra opción de reservación.';
$string['userssuccessfullygetnewpresencestatus'] = 'Todos los usuarios tienen un nuevo estatus de presencia.';
$string['userssucesfullygetnewpresencestatus'] = 'Estatus de presencia para usaurios seleccionados exitosamente actualizados';
$string['viewallresponses'] = 'Gestionar {$a} respuestas';
$string['waitinglist'] = 'En lista de espera';
$string['waitinglisttaken'] = 'En la lista de espera';
$string['waitinglistusers'] = 'Usuarios en lista de espera';
$string['waitingplacesavailable'] = 'Lugares disponibles en lista de espera';
$string['waitingtext'] = 'Confirmación de lista de espera';
$string['waitingtext_help'] = 'Deje esto vacío para usar el texto por defecto del sitio. Usted puede usar  (así como están, en idioma inglés) cualquiera de los siguientes remplazables (\'\'placeholders\'\') en el texto:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{email} - User email</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{pollurl}</li>
<li>{pollurlteachers}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher}</li>
<li>{teacherN} - N es el número del profesor como por ejemplo {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insertar código QR con ID del usuario</li>
<li>{qr_username} - Insertar código QR con nombre_de_usuario del usuario</li>
<li>{times} - Horas de sesiones</li>
<li>{shorturl} - Opción de URL corta</li>
</ul>';
$string['waitspaceavailable'] = 'Lugares en lista de espera disponibles';
$string['week'] = 'Semana';
$string['whichview'] = 'Valor por defecto para opciones de reservación';
$string['whichviewerror'] = 'Usted tiene que incluir la vista predeterminada en: Vistas a mostrar en la vista general de opciones de reservación';
$string['withselected'] = 'Con usuarios seleccionados:';
$string['wrongdataallfields'] = '¡Por favor, llene todos los campos!';
$string['yes'] = 'Si';
$string['yourselection'] = 'Su selección';
