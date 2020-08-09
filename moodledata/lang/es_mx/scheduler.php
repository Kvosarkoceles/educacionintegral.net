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
 * Strings for component 'scheduler', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   scheduler
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'Acción';
$string['actions'] = 'Acciones';
$string['addappointment'] = 'Añadir otro estudiante';
$string['addcommands'] = 'Añadir lugares';
$string['addondays'] = 'Añadir citas agendadas en';
$string['addsession'] = 'Añadir lugares repetidos';
$string['addsingleslot'] = 'Añadir un solo lugar';
$string['addslot'] = 'Usted puede añadir lugares para cita agendada adicionales en cualquier momento';
$string['addstudenttogroup'] = 'Añadir a este estudiante al grupo de cita';
$string['allappointments'] = 'Añadir citas agendadas';
$string['allononepage'] = 'Todos los lugares en una página';
$string['allowgroup'] = 'Lugar exclusivo - elegir para cambiar';
$string['alreadyappointed'] = 'No puede hacerse la reservación. El lugar ya está completamente reservado.';
$string['appointagroup_help'] = 'Elija si quiere hacer la cita solamente para Usted, o para un grupo completo.';
$string['appointfor'] = 'Hacer cita para';
$string['appointforgroup'] = 'Hacer citas para: {$a}';
$string['appointingstudent'] = 'Reservación para lugar';
$string['appointingstudentinnew'] = 'Reservaciones para lugar nuevo';
$string['appointment'] = 'Cita';
$string['appointmentmode'] = 'Configurando el modo de reservación';
$string['appointmentmode_help'] = '<p>Usted puede elegir aquí algunas variantes en la manera en que se pueden tomar las citas (reservaciones). </p>
<p><ul>
<li><strong>"<emph>n</emph> citas en el agendador":</strong> El estudiante solamente puede reservar un número fijo de citas en esta actividad. Aun y cuando el profesor las marcara como "vistas", a ellos no se les permitirá reservar más reuniones. La única manera de reiniciarle al estudiante la habilidad para reservar es eliminar  los registros antiguos de "visto".</li>
<li><strong>"<emph>n</emph> citas (reservaciones) cada vez":</strong> El estudiante puede reservar un número fijo de citas (reservaciones). Una vez que termine la reunión y el profesor haya marcado al estudiante como "visto", el estudiante puede reservar más citas. Sin embargo, el estudiante está limitado a  <emph>n</emph> fechas-horas "abiertas" (no-vistas) en cualquier momento dado.
</li>
</ul>
</p>';
$string['appointmentno'] = 'Reservación {$a}';
$string['appointmentnote'] = 'Notas para cita (visible lestudiante)';
$string['appointments'] = 'Reservaciones';
$string['appointmentsgrouped'] = 'Citas agrupadas por lugar';
$string['appointmentsummary'] = 'Reservación en {$a->startdate} desde {$a->starttime} hasta {$a->endtime} con {$a->teacher}';
$string['appointsolo'] = 'solamente yo';
$string['appointsomeone'] = 'Añadir nueva reservación';
$string['areaappointmentnote'] = 'Archivos en notas de citas';
$string['areaslotnote'] = 'Archivos en notas de lugar';
$string['areateachernote'] = 'Archivos en notas confidenciales';
$string['attendable'] = 'Asistible';
$string['attendablelbl'] = 'Total de candidatos para agendar';
$string['attended'] = 'Asistida';
$string['attendedlbl'] = 'Cantidad de estudiantes que asistieron';
$string['attendedslots'] = 'Lugares asistidos';
$string['availableslots'] = 'Lugares disponibles';
$string['availableslotsall'] = 'Todos los lugares';
$string['availableslotsnotowned'] = 'Sin dueño';
$string['availableslotsowned'] = 'Con dueño';
$string['bookaslot'] = 'Reservar un lugar';
$string['bookingdetails'] = 'Detalles de reservación';
$string['bookingformoptions'] = 'Formato de reservación y datos proporcionados por el estudiante';
$string['bookinginstructions'] = 'Instrucciones para Reservar';
$string['bookinginstructions_help'] = 'Este texto será mostrado a estudiantes antes de que hagan una reservación. Puede, por ejemplo, enseñarle a los estudiantes como llenar el campo para mensaje opcional, o cuales archivos pueden subir.';
$string['bookslot'] = 'Reservar lugar';
$string['bookwithteacher'] = 'Profesor';
$string['bookwithteacher_help'] = 'Elija un profesor para la cita';
$string['break'] = 'Receso entre lugares';
$string['breaknotnegative'] = 'La duración del receso no puede ser negativa';
$string['canbook1appointment'] = 'Usted puede reservar una reservación más en este agendador.';
$string['canbooknappointments'] = 'Usted puede reservar {$a} reservaciones más en este agendador';
$string['canbooknofurtherappointments'] = 'Usted ya no puede hacer más reservaciones en este agendador.';
$string['canbooksingleappointment'] = 'Usted puede reservar una reservación más en este agendador.';
$string['canbookunlimitedappointments'] = 'Usted puede reservar cualquier número de reservaciones en este agendador.';
$string['cancelbooking'] = 'Cancelar reservación';
$string['chooseexisting'] = 'Elegir existente';
$string['choosingslotstart'] = 'Eligiendo la hora de inicio';
$string['choosingslotstart_help'] = 'Cambie (o elija) la hora de inicio de la reservación, Si esta reservación conflictúa con algunos otros lugares, se le preguntará a Usted si este lugar remplaza a todas las reservaciones que conflictúan. Tenga en cuenta que el nuevo parámetro del lugar anulará todas las configuraciones previas.';
$string['comments'] = 'Comentarios';
$string['complete'] = 'Reservada';
$string['confirmbooking'] = 'Confirmar reservación';
$string['confirmdelete-all'] = 'Esto eliminará <b>todos</b> los lugares en este agendador. La eliminación no puede deshacerse. ¿Desea continuar de todos modos?';
$string['confirmdelete-mine'] = 'Esto eliminará todos los lugaen este agendador. La eliminación no puede deshacerse. ¿Desea continuar de todos modos?';
$string['confirmdelete-myunused'] = 'Esto eliminará todos los lugares no utilizados en este agendador. La eliminación no puede deshacerse. ¿Desea continuar de todos modos?';
$string['confirmdelete-one'] = '¿Eliminar lugar?';
$string['confirmdelete-selected'] = 'Esto eliminará los lugares seleccionados. La eliminación no puede deshacerse. ¿Desea continuar de todos modos?';
$string['confirmdelete-unused'] = 'Esto eliminará todos los lugares no utilizados en este agendador. La eliminación no puede deshacerse. ¿Desea continuar de todos modos?';
$string['confirmrevoke'] = '¿Revocar todas las citas en el espacio-tiempo actual?';
$string['conflictingslots'] = 'El lugar en {$a} no puede ser creado debido a lugares conflictuantes:';
$string['conflictlocal'] = '{$a->datetime} ({$a->duration} minutos) en este agendador';
$string['conflictremote'] = '{$a->datetime} ({$a->duration} minutos) en curso{$a->courseshortname}, agendador {$a->schedulername}';
$string['contentformat'] = 'Formato';
$string['contentformat_help'] = '<p>Hay tres opciones básicas para el formato de exportación, que difieren en como son  manejados los lugares con varias citas.
<dl>
<dt>Una línea por lugar</dt>:
<dd>
El archivo de salida contendrá una línea para cada lugar. Si un lugar contiene múltiples citas, entonces en sustitución del nombre del estudiante, etc, se mostrará un marcador  "(múltiple)".
</dd>
<dt>Una línea por cita</dt>:
<dd>
El archivo de salida contendrá una línea para cada cita. Si un lugar contiene múltiples citas, entonces aparecerá varias veces en la lista (con sus datos repetidos).
</dd>
<dt>Citas agrupadas por lugar</dt>:
<dd>
Todas las citas en un lugar están agrupadas juntas, precedidas por una línea de encabezado que indica el lugar en cuestión. Es posible que esto no funcione bien con el formato de archivo de salida CSV,
debido a que el número de columnas no es constante.
</dd>
</dl>
Usted puede explorar el efecto de estas opciones usando el botón de "Vista previa".</p>';
$string['copytomyself'] = 'Mandarme una copia a mi mismo';
$string['course'] = 'Curso';
$string['createexport'] = 'Crear archivo para exportar';
$string['csvfieldseparator'] = 'Separador de campos para el CSV';
$string['csvformat'] = 'CSV';
$string['cumulatedduration'] = 'Sumatoria de duraciones de reservaciones';
$string['datatoinclude'] = 'Datos a incluir';
$string['datatoinclude_help'] = 'Seleccione los campos que deberían incluirse en la exportación. Cada uno de estos aparecerá en una columna del archivo de salida.';
$string['date'] = 'Fecha';
$string['datelist'] = 'Vista general';
$string['defaultslotduration'] = 'Duración por defecto del lugar';
$string['defaultslotduration_help'] = 'La duración por defecto (en minutos) para los lugares para citas que Usted configura';
$string['deleteallslots'] = 'eliminar todos los lugares';
$string['deleteallunusedslots'] = 'Eliminar lugar sin usar';
$string['deletecommands'] = 'Eliminar lugares';
$string['deletedconflictingslots'] = 'Para el lugar en {$a}, se han eliminado los lugares conflictivos:';
$string['deletemyslots'] = 'Eliminar todos mis lugares';
$string['deleteonsave'] = 'Eliminar esta cita (al guardar el formato)';
$string['deleteselection'] = 'Eliminar lugares seleccionados';
$string['deletetheseslots'] = 'Eliminar estos lugares';
$string['deleteunusedslots'] = 'Eliminar mis lugares sin usar';
$string['department'] = '¿ Desde donde ?';
$string['disengage'] = 'Abandonar mis cita';
$string['displayfrom'] = 'Mostrar lugares a estudiantes desde';
$string['distributetoslot'] = 'Distribuir a todo el grupo';
$string['divide'] = '¿ Dividir en lugares ?';
$string['duration'] = 'Duración';
$string['durationrange'] = 'La duración del lugar debe estar entre  {$a->min} y {$a->max} minutos..';
$string['editbooking'] = 'Editar reservación';
$string['email_applied_html'] = '<p>Se ha solicitado una cita para {$a->date} a las {$a->time},<br/>
por el estudiante <a href="{$a->attendee_url}">{$a->attendee}</a> para el curso:

<p>{$a->course_short}: <a href="{$a->course_url}">{$a->course}</a></p>

<p>usando el agendador titulado "<i>{$a->module}</i>" en el sitio web: <a href="{$a->site_url}">{$a->site}</a>.</p>';
$string['email_applied_plain'] = 'Se ha solicitado una cita para el {$a->date} a las  {$a->time},
por el estudiante {$a->attendee} para el curso:

{$a->course_short}: {$a->course}

usando el agendador titulado "{$a->module}" en el sitio web: {$a->site}.';
$string['email_applied_subject'] = '{$a->course_short}: Nueva cita';
$string['email_cancelled_html'] = '<p>Su cita en <strong>{$a->date}</strong> at <strong>{$a->time}</strong>,<br/>
con el estudiante <strong><a href="{$a->attendee_url}">{$a->attendee}</a></strong> para el curso :</p>

<p><strong>{$a->course_short} : <a href="{$a->course_url}">{$a->course}</a></strong></p>

<p>en el agendador llamado "<em>{$a->module}</em>" en el sitio webe : <strong><a href="{$a->site_url}">{$a->site}</a></strong></p>

<p><strong><span class="error">ha sido cancelado o movido</span></strong>.</p>';
$string['email_cancelled_plain'] = 'Su cita del {$a->date} at {$a->time},
con el estudiante {$a->attendee} para el curso:

{$a->course_short} : {$a->course}

en el agendador titulado "{$a->module}" en el sitio web : {$a->site}

ha sido cancelada o movida.';
$string['email_cancelled_subject'] = '{$a->course_short}: Cita cancelada o movida por un estudiante';
$string['email_invite_html'] = '<p>Por favor elija un lugar en el tiempo para una cita en:</p> <p>{$a->scheduler_url}</p>';
$string['email_invitereminder_html'] = '<p>Esto es solamente un recordatorio de que Usted todavía no ha configurado su cita. Por favor, elija un lugar en el tiempo tan pronto como sea posible en:</p><p>{$a->scheduler_url}</p>';
$string['email_invitereminder_subject'] = 'Recordatorio: {$a->module}';
$string['email_invite_subject'] = 'Invitación: {$a->module}';
$string['emailreminder'] = 'Mandar un recordatorio por Email';
$string['email_reminder_html'] = '<p>Usted tiene una cita futura en <b>{$a->date}</b>
desde las <b>{$a->time}</b> hasta las <b>{$a->endtime}</b><br/>
con <b><a href="{$a->attendant_url}">{$a->attendant}</a></b>.</p>

<p>Ubicación: <b>{$a->location}</b></p>';
$string['emailreminderondate'] = 'Mandar un Email recordatorio en';
$string['email_reminder_plain'] = 'Usted tiene una cita próxima en {$a->date} desde {$a->time} hasta {$a->endtime} con {$a->attendant}. Lugar: {$a->location}';
$string['email_reminder_subject'] = '{$a->course_short}: Recordatorio de cita';
$string['email_teachercancelled_html'] = '<p>Su cita en <strong>{$a->date}</strong> a las <strong>{$a->time} </strong>,<br/>
con el  {$a->staffrole} <strong><a href="{$a->attendant_url}">{$a->attendant}</a></strong> para el curso:</p>

<p><strong>{$a->course_short}: <a href="{$a->course_url}">{$a->course}</a></strong></p>

<p>en el agendador "<em>{$a->module}</em>" del sitio web: <strong><a href="{$a->site_url}">{$a->site}</a></strong></p>

<p><strong><span class="error">ha sido cancelado</span></strong>. Por favor solicite un nuevo lugar.</p>';
$string['email_teachercancelled_plain'] = 'Su reservación en {$a->date} at {$a->time},
con el {$a->staffrole} {$a->attendant} para el curso:

{$a->course_short}: {$a->course}

en el agendador titulado "{$a->module}" en el sitio web: {$a->site}

ha sido cancelada. Por favor, solicite un nuevo lugar.';
$string['email_teachercancelled_subject'] = '{$a->course_short}: Cita cancelada por el profesor';
$string['end'] = 'Fin';
$string['enddate'] = 'Repetir lugares de tiempo hasta';
$string['event_appointmentlistviewed'] = 'Lista del agendador de citas  vista';
$string['event_bookingadded'] = 'Reservación del agendador añadida';
$string['event_bookingformviewed'] = 'Formato de reservación de agendador visto';
$string['event_bookingremoved'] = 'Reservación de agendador removida';
$string['event_slotadded'] = 'Lugar de agendador añadido';
$string['event_slotdeleted'] = 'Lugar de agendador eliminado';
$string['everyone'] = 'Todos';
$string['excelformat'] = 'Excel';
$string['exclusive'] = 'Exclusiva';
$string['exclusivity'] = 'Exclusividad';
$string['exclusivity_help'] = '<p>Usted puede configurar un límite para la cantidad de estudiantes que pueden solicitar un mismo lugar dado. </p>
<p>Al configurar un límite de 1 (por defecto) significa que el lugar es exclusivo para un solo estudiante.</p>
<p>El configurar un límite de digamos, 3 significará que hasta 3 estudiantes pueden reservar en el lugar.</p>
<p>si se deshabilita, cualquier número de estudiantes puede reservar el lugar; nunca se considerará "lleno".</p>';
$string['exclusivityoverload'] = 'El lugar tiene {$a} estudiantes citados, más de lo permitido por esta configuración.';
$string['exclusivitypositive'] = 'El número de estudiantes por lugar necesita ser 1 o más.';
$string['explaingeneralconfig'] = 'Estas opciones solamente pueden configurarse al nivel de sitio y aplicarán para todos los agendadores de esta instalación Moodle.';
$string['export'] = 'Exportar';
$string['exporthdr'] = 'Exportar lugares y citas';
$string['exporttimerange'] = 'Rango de tiempo';
$string['exporttimerangeall'] = 'Espacio-tiempos futuros y pasados';
$string['exporttimerangefuture'] = 'Solamente espacio-tiempos futuros';
$string['exporttimerangepast'] = 'Solamente espacio-tiempos pasados';
$string['field-appointmentnote'] = 'Nota de cita (al estudiante)';
$string['field-attended'] = 'Asistida';
$string['field-date'] = 'Fecha';
$string['field-endtime'] = 'Hora del fin';
$string['field-filecount'] = 'Número de archivos subidos';
$string['field-grade'] = 'Calificación';
$string['field-groupsmulti'] = 'Grupos (varias columnas)';
$string['field-groupssingle'] = 'Grupos';
$string['field-groupssingle-label'] = 'Grupos (una columna)';
$string['field-location'] = 'Lugar';
$string['field-maxstudents'] = 'Máx estudiantes';
$string['field-slotnotes'] = 'Notas del lugar';
$string['field-starttime'] = 'Hora de inicio';
$string['field-studentemail'] = 'Email del estudiante';
$string['field-studentfirstname'] = 'Nombre del estudiante';
$string['field-studentfullname'] = 'Nombre completo del estudiante';
$string['field-studentidnumber'] = 'Número ID del estudiante';
$string['field-studentlastname'] = 'Apellido(s) del estudiante';
$string['field-studentnote'] = 'Mensaje por estudiante';
$string['field-studentusername'] = 'Nombre_de_usuario del estudiante';
$string['field-teachernote'] = 'Nota confidencial (profesor solamente)';
$string['fileformat'] = 'Formato del archivo';
$string['fileformat_help'] = 'Los siguientes formatos de archivo están disponibles:
<ul>
<li>Archivos de texto de Valores Separados por Comas (Comma Separated Value =CSV). El separador de campo, el cual por defecto es una coma, puede elegirse debajo.
Los archivos CSV pueden abrirse en la mayoría de las aplicaciones de hoja-de-cálculo;</li>
<li>Archivos de Microsoft Excel (formato Excel 2007);</li>
<li>Open Document spreadsheets (ODS);</li>
<li>Formato HTML- una página web que muestra la tabla de salida,
la cual puede imprimirse usando la característica de impresión del navegador de Internet;</li>
<li>Documentos PDF. Usted puede elegir la orientación entre apaisada y retrato.</li>
</ul>';
$string['finalgrade'] = 'Calificación final';
$string['firstslotavailable'] = 'El primer lugar se abrirá en: {$a}';
$string['forbidgroup'] = 'Lugar de grupo - hacer clic para cambiar';
$string['forcewhenoverlap'] = 'Forzar cuando se sobrepongan';
$string['forcewhenoverlap_help'] = '<h3>Forzar la creación de lugar cuando se traslapen lugares</h3>
<p>Esta configuración determina cuantos nuevos lugares se manejarán si se traslapan con otros lugares  ya existentes.</p>
<p>si se habilita, el lugar existente traslapado será eliminado y el nuevo lugar será creado.</p>
<p>Si se deshabilita, el lugar traslapado se conservará y <em>no</em> se creará un nuevo lugar.</p>';
$string['forcourses'] = 'Elegir estudiantes en cursos';
$string['friday'] = 'Viernes';
$string['generalconfig'] = 'Configuración general';
$string['grade'] = 'Calificación';
$string['gradeingradebook'] = 'Calificación en el Libro de Calificaciones';
$string['gradingstrategy'] = 'Estrategia de calificación';
$string['gradingstrategy_help'] = 'En un agendador en donde los estudiantes pueden tener varias citas, seleccione la manera en la que se agragarán las calificaciones. El libro de calificaciones puede mostrar, tanto la <ul><li>calificación promedio o</li><li>la calificación máxima</li></ul> que el estudiante ha obtenido.';
$string['group'] = 'grupo';
$string['groupbookings'] = 'Reservación en grupos';
$string['groupbookings_help'] = 'Permitirles a los estudiantes reservar un lugar para todos los miembros de sus grupos. (Tenga en cuenta que esto está separado de la configuración de "modo de grupo", la cual controla los lugares que puede ver un estudiante.)';
$string['groupbreakdown'] = 'Por tamaño del grupo';
$string['groupmodeyourgroups'] = 'Modo de grupo: {$a->groupmode}. Solamente los estudiantes dentro de {$a->grouplist} pueden reservar citas con Usted.';
$string['groupmodeyourgroupsempty'] = 'Modo de grupo: {$a->groupmode}. Usted no es miembro de ningun grupo, por lo tanto, los estudiantes no pueden reservar citas con Usted.';
$string['groupscheduling'] = 'Habilitar reservación grupal';
$string['groupscheduling_desc'] = 'Permitir que se agenden grupos completos a la vez. (además de la opción Global, el modo de grupo de la actividad debe configurarse a "Grupos visibles" o "Grupos separados" para poder habilitar esta característica.)';
$string['groupsession'] = 'sesión grupal';
$string['groupsize'] = 'Tamaño del grupo';
$string['guardtime'] = 'Tiempo de guardia';
$string['guardtime_help'] = 'Un tiempo de guardia impide que los estudiantes cambien su reservación poco antes de la cita.
<p>Si se habilita el tiempo de guardia y se configura, por ejemplo, a 2 horas, entonces los estudiantes no podrán reservar un lugar que inicie en menos de 2 horas del momento actual, ni podrán descartar una reservación que inicie en menos de 2 horas.</p>';
$string['guestscantdoanything'] = 'Los invitados no pueden hacer nada aquí';
$string['howtoaddstudents'] = 'Para añadir estudiantes a un agendador de rango global (\'\'global scoped scheduler\'\') use la configuración de rol para el módulo .<br/>Usted también puede usar las definiciones de rol del módulo para definir a los asistentes entre sus estudiantes.';
$string['htmlformat'] = 'HTML';
$string['ignoreconflicts'] = 'Ignorar conflictos de reservación';
$string['ignoreconflicts_help'] = 'Si se activa esta casilla, entonces el lugar se moverá a la fecha y hora solicitada, aun cuando existan otros lugares en la misma hora. Esto puede provocar un encimamiento de reservaciones para varios profesores o estudiantes, y por esta razón debería de usarse con cautela.';
$string['includeemptyslots'] = 'Incluir lugares vacíos';
$string['includeslotsfor'] = 'Incluir lugares para';
$string['incourse'] = 'en curso';
$string['introduction'] = 'Introducción';
$string['isnonexclusive'] = 'No-exclusiva';
$string['landscape'] = 'Apaisado';
$string['lengthbreakdown'] = 'Por duración del lugar';
$string['limited'] = 'Limitada ({$a} restantes)';
$string['location'] = 'Lugar';
$string['location_help'] = 'Especifique el lugar reservado del encuentro.';
$string['markasseennow'] = 'Marcar como visto ahora';
$string['markseen'] = 'Después de haber tenido una cita con un estudiante, por favor, márquelo como "Visto" al elegir la casilla apropiada junto a la imagen del usuario arriba.';
$string['maxgrade'] = 'Tomar la calificación máxima';
$string['maxstudentlistsize'] = 'Longitud máxima de la lista de estudiantes';
$string['maxstudentlistsize_desc'] = 'La longitud máxima de la lista de estudiantes que necesitan hacer una reservación, como se muestra en la vista del profesor para el agendador. Si hay más estudiantes que este número, no se mostrará ninguna lista.';
$string['maxstudentsperslot'] = 'Número máximo de estudiantes por lugar';
$string['maxstudentsperslot_desc'] = 'Los lugares de-grupo / lugares-no-exclusivos pueden tener como máximo este número de estudiantes. Tenga en cuenta que, adicionalmente, siempre puede elegirse la configuración de "ilimitada" para un lugar.';
$string['meangrade'] = 'Tomar la calificación promedio';
$string['meetingwith'] = 'Juntándose con su';
$string['meetingwithplural'] = 'Juntándose con su';
$string['message'] = 'Mensaje';
$string['messagebody'] = 'Cuerpo del mensaje';
$string['messageprovider:bookingnotification'] = 'Notificación cuando se hace o cancela una reservación';
$string['messageprovider:invitation'] = 'Invitación para reservar un lugar';
$string['messageprovider:reminder'] = 'recordatorio de un evento próximo';
$string['messagesent'] = 'Mensaje enviado a {$a} recipientes';
$string['messagesubject'] = 'Asunto';
$string['minutes'] = 'minutos';
$string['minutesperslot'] = 'minutos por lugar';
$string['missingstudents'] = '{$a} estudiantes todavía necesitan hacer una cita';
$string['missingstudentsmany'] = '{$a} estudiantes todavía necesitan hacer una cita. No se despliega la lista debido a su tamaño.';
$string['mixindivgroup'] = 'Mezclar reservaciones individuales y grupales';
$string['mixindivgroup_desc'] = 'En donde esté habilitado el agendado de grupo, permitir también reservaciones individuales.';
$string['mode'] = 'Modo';
$string['modeappointments'] = 'reservación(es)';
$string['modeintro'] = 'Los estudiantes pueden registrar';
$string['modeoneatatime'] = 'cada vez';
$string['modeoneonly'] = 'en este agendador';
$string['modulename'] = 'Agendador';
$string['modulename_help'] = 'La actividad de agendador le ayuda para agendar citas (reservaciones) con sus estudiantes.

Los profesores especifican los lugares ( horas-fechas) para las reuniones, los estudiantes entonces eligen una de ellas en Moodle.

Los profesores en turno pueden grabar el resultado de la reunión - y opcionalmente una calificación - dentro del agendador.

Se soporta agendar grupos;  esto es, en cada lugar-hora-fecha se pueden acomodar a varios alumnos, y opcionalmente es posible agendar citas (reservaciones) para grupos completos al mismo tiempo.';
$string['modulenameplural'] = 'Agendadores';
$string['monday'] = 'Lunes';
$string['multiple'] = '(múltiple)';
$string['myappointments'] = 'Mis citas';
$string['myself'] = 'Yo mismo';
$string['name'] = 'Nombre dle agendador';
$string['needteachers'] = 'No pueden añadirse lugares porque este curso no tiene profesores';
$string['negativerange'] = 'El rango es negativo. Esto no puede ser.';
$string['never'] = 'Nunca';
$string['nfiles'] = '{$a} archivos';
$string['noappointments'] = 'Sin citas';
$string['noexistingstudents'] = 'No hay estudiantes';
$string['nogroups'] = 'No hay grupos disponibles para agendar';
$string['noresults'] = 'Sin resultados.';
$string['noschedulers'] = 'No hay agendadores';
$string['noslots'] = 'No hay lugares a reservar disponibles';
$string['noslotsavailable'] = 'No hay lugares disponibles para reservar en este momento..';
$string['noslotsopennow'] = 'No hay lugares abiertos para reservar ahorita mismo';
$string['nostudents'] = 'Sin estudiantes agendados';
$string['nostudenttobook'] = 'No hay estudiantes para reservar';
$string['note'] = 'Calificación';
$string['noteacherforslot'] = 'No hay profesor para el lugar';
$string['noteachershere'] = 'No hay profesor disponible';
$string['notenoughplaces'] = 'Lo sentimos,no hay suficientes citas libres en este lugar.';
$string['notesrequired'] = 'Usted debe escribir texto adentro de este campo antes de reservar el lugar.';
$string['notifications'] = 'Notificaciones';
$string['notifications_help'] = 'Cuando se habilita esta opción, los profesores y estudiantes recibirán notificaciones de cuando se aplican o cancelan reservaciones.';
$string['notseen'] = 'No visto';
$string['now'] = 'Ahora';
$string['occurrences'] = 'Ocurrencias';
$string['odsformat'] = 'ODS';
$string['on'] = 'en';
$string['onedaybefore'] = '1 día antes de la fecha';
$string['onelineperappointment'] = 'Una línea por cita';
$string['onelineperslot'] = 'Una línea por lugar';
$string['oneslotadded'] = '1 lugar añadido';
$string['oneslotdeleted'] = '1 lugar eliminado';
$string['oneweekbefore'] = '1 semana antes de la fecha';
$string['onthemorningofappointment'] = 'En la ,mañana de la reservación';
$string['options'] = 'Opciones';
$string['otherstudents'] = 'Otros participantes';
$string['outlineappointments'] = '{$a->attended} acitas atendidas, {$a->upcoming} próximas.';
$string['outlinegrade'] = 'Calificación: {$a}.';
$string['overall'] = 'En general';
$string['overlappings'] = 'Algunos otros lugares se sobreponen';
$string['pageperteacher'] = 'Una página por cada {$a}';
$string['pagination'] = 'Paginación';
$string['pagination_help'] = 'Elegir si es que la exportación debería contener una página separada para cada profesor.
 En formatos Excel y ODS, estas páginas corresponden a pestañas (hojas-de-trabajo) en el libro-de-trabajo.';
$string['pdfformat'] = 'PDF';
$string['pdforientation'] = 'Orientación de página PDF';
$string['pluginadministration'] = 'Adminsitración del agendador';
$string['pluginname'] = 'Agendador';
$string['portrait'] = 'Retrato';
$string['preview'] = 'Vista previa';
$string['previewlimited'] = '(La vista previa está limitada a {$a} filas.)';
$string['privacy:metadata:filepurpose'] = 'Campo usado en notas para la cita';
$string['privacy:metadata:scheduler_appointment'] = 'Representa una cita de estudiante en un agendador';
$string['privacy:metadata:scheduler_appointment:appointmentnote'] = 'Nota por el profesor (visible al estudiante)';
$string['privacy:metadata:scheduler_appointment:appointmentnoteformat'] = 'Formato de nota del profesor';
$string['privacy:metadata:scheduler_appointment:attended'] = 'Si es que la cita fue asistida';
$string['privacy:metadata:scheduler_appointment:grade'] = 'Calificación para la cita';
$string['privacy:metadata:scheduler_appointment:studentid'] = 'Estudiante que reservó la cita';
$string['privacy:metadata:scheduler_appointment:studentnote'] = 'Nota por estudiante';
$string['privacy:metadata:scheduler_appointment:studentnoteformat'] = 'formato de la nota del estudiante';
$string['privacy:metadata:scheduler_appointment:teachernote'] = 'Nota por profesor (privada)';
$string['privacy:metadata:scheduler_appointment:teachernoteformat'] = 'Formato de nota privada de profesor';
$string['privacy:metadata:scheduler_slots'] = 'representa una posición en un agendador';
$string['privacy:metadata:scheduler_slots:appointmentlocation'] = 'Lugar de la cita';
$string['privacy:metadata:scheduler_slots:duration'] = 'Duración de la reservación en minutos';
$string['privacy:metadata:scheduler_slots:exclusivity'] = 'Número máximo de estudiantes en la reservación';
$string['privacy:metadata:scheduler_slots:notes'] = 'Notas acerca de la reservación';
$string['privacy:metadata:scheduler_slots:notesformat'] = 'Formato de las notas';
$string['privacy:metadata:scheduler_slots:starttime'] = 'Hora de inicio de la reservación';
$string['privacy:metadata:scheduler_slots:teacherid'] = 'Profesor asociado con la reservación';
$string['purgeunusedslots'] = 'Purgar lugares no utilizados en el pasado.';
$string['recipients'] = 'Recipientes';
$string['registeredlbl'] = 'Estudiante agendado';
$string['reminder'] = 'Recordatorio';
$string['requireupload'] = 'Se necesita subida de archivo';
$string['resetappointments'] = 'Eliminar citas y calificaciones';
$string['resetslots'] = 'Eliminar lugares agendados';
$string['return'] = 'Regresar al curso';
$string['revealteachernotes'] = 'Revelar notas del profesor en exportaciones de privacidad';
$string['revealteachernotes_desc'] = 'Si esta opción es seleccionada, entonces las notas confidenciales del profesor (que normalmente no son visibles a estudiantes) serán reveladas a estudiantes en las solicitudes de exportaciones de datos; por ejemplo, vía la API de privacidad. Usted debería decidir basándose en el uso individual de este campo, si es que necesitan incluirse en las exportaciones de datos para estudiantes bajo la GDPR.';
$string['revoke'] = 'Revocar  la reservación';
$string['saturday'] = 'Sábado';
$string['save'] = 'Guardar';
$string['savechoice'] = 'Guardar mi elección';
$string['saveseen'] = 'Guardar vistas';
$string['schedule'] = 'Agenda';
$string['scheduleappointment'] = 'Agendar reservación para {$a}';
$string['schedulecancelled'] = '{$a} : Su cita cancelada o movida';
$string['schedulegroups'] = 'Agendar por grupo';
$string['scheduleinnew'] = 'Agendar en un lugar nuevo';
$string['scheduleinslot'] = 'Agendar en lugar';
$string['scheduler'] = 'Agendador';
$string['scheduler:addinstance'] = 'Añadir un nuevo agendador';
$string['scheduler:appoint'] = 'Agendar lugares';
$string['scheduler:attend'] = 'Asistencia estudiantes';
$string['scheduler:canscheduletootherteachers'] = 'Agendar citas para otros miembros del staff';
$string['scheduler:canseeotherteachersbooking'] = 'Ver y revisar las reservaciones de otros profesores';
$string['scheduler:disengage'] = 'Esta capacidad es obsoleta y no hace nada';
$string['scheduler:editallattended'] = 'Marcar a estudiantes en todas las citas como asistentes / no asistentes.';
$string['scheduler:editallgrades'] = 'Editar calificaciones en todas las citas.';
$string['scheduler:editallnotes'] = 'Editar notas de citas en todas las citas.';
$string['scheduler:manage'] = 'Gestionar sus lugares y citas';
$string['scheduler:manageallappointments'] = 'Gestionar todos los datos del reservador';
$string['scheduler:seeotherstudentsbooking'] = 'Ver reservaciones de otros estudiantes en el lugar';
$string['scheduler:seeotherstudentsresults'] = 'Ver resultados de otros lugares de estudiantes';
$string['scheduler:seeoverviewoutsideactivity'] = 'Use la pantalla de vista general para ver lugares fuera de la actividad actual del agendador.';
$string['scheduler:viewfullslots'] = 'Ver lugares aunque estén reservados completamente (en pantalla del estudiante)';
$string['scheduler:viewslots'] = 'Ver lugares que están abiertos para reservación (en pantalla del estudiante)';
$string['schedulestudents'] = 'Agendar por estudiante';
$string['scopemenu'] = 'Mostrar lugares en: {$a}';
$string['scopemenuself'] = 'Mostrar mis lugares en: {$a}';
$string['search:activity'] = 'Agendador - información de actividad';
$string['seen'] = 'Visto';
$string['selectedtoomany'] = 'Usted ha seleccionado demasiados lugares . Usted no puede seleccionar más de {$a}.';
$string['sendinvitation'] = 'Mandar invitación';
$string['sendmessage'] = 'Mandar mensaje';
$string['sendreminder'] = 'Mandar recordatorio';
$string['sendreminders'] = 'Mandar E-mails recordatorios para citas próximas';
$string['sepcolon'] = 'Dos puntos';
$string['sepcomma'] = 'Coma';
$string['sepsemicolon'] = 'Punto y coma';
$string['septab'] = 'Tabulador';
$string['showemailplain'] = 'Mostrar direcciones Email en texto plano';
$string['showemailplain_desc'] = 'En la vista del profesor para el agendador, se muestran las direcciones de Email de los estudiantes que necesitan una cita en texto plano, adicionalmente a los enlaces de mailto: .';
$string['showparticipants'] = 'Mostrar participantes';
$string['slot'] = 'Lugar';
$string['slotdatetime'] = '{$a->shortdatetime} para {$a->duration} minutos';
$string['slotdatetimelabel'] = 'Fecha y hora';
$string['slotdatetimelong'] = '{$a->date}, {$a->starttime} &ndash; {$a->endtime}';
$string['slotdescription'] = '{$a->status} en {$a->startdate} desde {$a->starttime} hasta {$a->endtime} en {$a->location} con {$a->facilitator}.';
$string['slot_is_just_in_use'] = '¡Lo sentimos, la reservación ya ha sido elegida por otro estudiante! Por favor, inténtelo de nuevo.';
$string['slots'] = 'Lugares';
$string['slotsadded'] = '{$a} lugares han sido añadidos';
$string['slotsdeleted'] = '{$a} lugares han sido eliminados';
$string['slottype'] = 'Tipo de lug';
$string['slotupdated'] = 'lugar 1 espacio actualizado';
$string['slotwarning'] = '<strong>Advertencia: </strong>El mover este lugar hacia el horario seleccionado conflictúa con los lugares enlistados debajo. Elija "Ignorar conflictos de agenda" si desea mover el lugar a pesar de todo.';
$string['staffbreakdown'] = 'Por {$a}';
$string['staffrolename'] = 'Nombre del rol del profesor';
$string['staffrolename_help'] = 'La etiqueta para el rol que atiende a los estudiantes. esto no necesariamente es un "profesor".';
$string['start'] = 'Inicio';
$string['startpast'] = 'Usted no puede iniciar un lugar vacío de reservación en el pasado.';
$string['statistics'] = 'Estadísticas';
$string['student'] = 'Estudiante';
$string['studentbreakdown'] = 'Por estudiante';
$string['studentcomments'] = 'Mensaje del estudiante';
$string['studentdetails'] = 'Detalles del estudiante';
$string['studentfiles'] = 'Archivos subidos';
$string['studentmultiselect'] = 'Cada estudiante puede ser seleccionado solamente una vez en este lugar';
$string['studentnote'] = 'Mensaje por el estudiante';
$string['studentprovided'] = 'Estudiante proporcionó: {$a}';
$string['students'] = 'Estudiantes';
$string['sunday'] = 'Domingo';
$string['tab-otherappointments'] = 'Todas las citas de este estudiante';
$string['tab-otherstudents'] = 'Estudiantes en este lugar';
$string['tab-thisappointment'] = 'Esta cita';
$string['teacher'] = 'Profesor';
$string['teachernote'] = 'Notas confidenciales (visibles solamente para el profesor)';
$string['teachersmenu'] = 'Mostrar lugares para: {$a}';
$string['thiscourse'] = 'este curso';
$string['thisscheduler'] = 'este agendador';
$string['thissite'] = 'todo el sitio';
$string['thursday'] = 'Jueves';
$string['timefrom'] = 'De:';
$string['timerange'] = 'Rango de tiempo';
$string['timeto'] = 'Para:';
$string['totalgrade'] = 'Calificación total';
$string['tuesday'] = 'Martes';
$string['unattended'] = 'No asistido';
$string['unlimited'] = 'Ilimitado';
$string['unregisteredlbl'] = 'Estudiantes no agendados';
$string['upcomingslots'] = 'Lugares siguientes';
$string['updategrades'] = 'Actualizar calificaciones';
$string['updatesingleslot'] = '';
$string['uploadmaxfiles'] = 'Número máximo de archivos subidos';
$string['uploadmaxfilesglobal'] = 'Número máximo de archivos subidos';
$string['uploadmaxfilesglobal_desc'] = 'El número máximo de archivos que un estudiante puede subir en un formato de reservación. Esto puede reducirse aun más al nivel de agendadores individuales.';
$string['uploadmaxfiles_help'] = 'El número máximo de archivos que un estudiante puede subir en un formato de reservación. . La subida de archivos es opcional, a menos que esté activada la casilla "Subida de archivos requerida". Si se configura a 0, los estudiantes no verán una caja para subida de archivo.';
$string['uploadmaxsize'] = 'Tamaño máximo de archivo';
$string['uploadmaxsize_help'] = 'Tamaño máximo de archivo para subidas del estudiante. Este límite aplica para cada archivo.';
$string['uploadrequired'] = 'Usted debe subir archivos aquí antes de reservar el lugar.';
$string['uploadstudentfiles'] = 'Archivos subidos';
$string['usebookingform'] = 'Usar formato para reservación';
$string['usebookingform_help'] = 'Si se habilita, el estudiante ve una pantalla separada para reservación antes de que puedan reservar un lugar. La pantalla para reservar puede requerirles que ingresen datos, que suban archivos, o que resuelvan un captcha; vea debajo las opciones.';
$string['usecaptcha'] = 'Usar CAPTCHA para nuevas reservaciones';
$string['usecaptcha_help'] = 'Si se habilita, los estudiantes necesitarán resolver una pregunta de seguridad  CAPTCHA antes de hacer una nueva reservación.
Use esta configuración si Usted sospecha que los estudiantes usan programsa automatizados para apropiarse de lugares disponibles.
<p>No se mostrará captcha si el estudiante edita una reservación existente.</p>';
$string['usenotes'] = 'Usar notas para citas';
$string['usenotesboth'] = 'Ambos tipos de notas';
$string['usenotesnone'] = 'ninguno';
$string['usenotesstudent'] = 'Nota de cita, visible para profesor y estudiante';
$string['usenotesteacher'] = 'Nota confidencial, visible solamente a profesores';
$string['usestudentnotes'] = 'Permitirle a estudiantes ingresar un mensaje';
$string['usestudentnotes_help'] = 'Si se habilita, la pantalla de reservación contendrá una caja de texto en la cual los estudiantes deberán ingresar un mensaje. Use las "Instrucciones para reservación" de arriba para decirle a los estudiantes cual información deberán de proporcionar.';
$string['viewbooking'] = 'Ver detalles';
$string['wednesday'] = 'Miércoles';
$string['welcomebackstudent'] = 'Usted puede reservar lugares adicionales al hacer clic en el botón inferior para "Reservar lugar".';
$string['welcomenewstudent'] = 'La tabla debajo muestra todos los lugares disponibles para una cita. Haga su elección al seleccionar un botón de selección y no se olvide de elegir "Guarda mi elección" después. Si Usted necesita hacer un cambio posterior, puede volver a visitar esta página.';
$string['welcomenewteacher'] = 'Por favor, elija el botón inferior para añadir lugares de reservaciones.';
$string['what'] = '¿ Qué ?';
$string['whathappened'] = '¿ Qué pasó ?';
$string['whatresulted'] = '¿ Qué resultó ?';
$string['when'] = '¿ Cuando ?';
$string['where'] = '¿ Donde ?';
$string['who'] = '¿ Con quién ?';
$string['whosthere'] = '¿ Quién está allì ?';
$string['xdaysbefore'] = '{$a} días antes del evento';
$string['xweeksbefore'] = '{$a} semanas antes del evento';
$string['yesallgroups'] = 'Si, para todos los grupos';
$string['yesingrouping'] = 'Si, en agrupamiento {$a}';
$string['yesoptional'] = 'Si, opcional para estudiante';
$string['yesrequired'] = 'Si, el estudiante debe de ingresar un mensaje';
$string['yourappointmentnote'] = 'Comentarios sòlo para sus ojos';
$string['yourslotnotes'] = 'Comentarios sobre el encuentro';
$string['yourstudentnote'] = 'Su mensaje';
$string['yourtotalgrade'] = 'Su calificación total en esta actividad es <strong>{$a}</strong>.';
