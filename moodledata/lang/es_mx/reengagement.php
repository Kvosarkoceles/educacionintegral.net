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
 * Strings for component 'reengagement', language 'es_mx', branch 'MOODLE_37_STABLE'
 *
 * @package   reengagement
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitycompleted'] = 'Esta actividad ha sido marcada como completada';
$string['afterdelay'] = 'Después del retraso';
$string['areyousure'] = '¿Está seguro de querer hacer este cambio?';
$string['completeattimex'] = 'Esta acividad se finalizará en {$a}';
$string['completion'] = 'Finalización';
$string['completiondatesupdated'] = 'Fechas de finalización actualizadas.';
$string['completiontime'] = 'Tiempo de finalización';
$string['completionwillturnon'] = 'Tenga en cuenta que al añadir esta actividad al curso se habilitará la finalización de actividad.';
$string['crontask'] = 'Trabajo del cron de re-compromiso';
$string['cronwarning'] = 'El trabajo agendado de re-compromiso no ha corrido por al menos 60 minutos - Cron debe ser configurado para permitir que Re-compromiso funcione correctamente';
$string['days'] = 'Días';
$string['duration'] = 'Duración';
$string['duration_help'] = '<p>La duración del re-compromiso es el período de tiempo entre que un usuario comienza un re-compromiso y que sea maracdo como terminado.
La duración del re-compromiso está especificada como un período de tiempo (por ejemplo semanas) y un número de períodos (por ejemplo 7).</p>

<p>Este ejemplo significaría que un usuario que comienza un período de re-compromiso ahora sería marcado como competente en el lapso de 7 semanas.</p>';
$string['emailcontent'] = 'Contenido de notificación (Usuario)';
$string['emailcontentdefaultvalue'] = 'Este es una notificación recordatoria del curso %courseshortname%.';
$string['emailcontent_help'] = 'Cuando el módulo le notifica a un usuario, toma el contenido de la notificación de este campo.';
$string['emailcontentmanager'] = 'Contenido de notificación (Mánager)';
$string['emailcontentmanagerdefaultvalue'] = 'Esta es una notificación recordatoria del curso  %courseshortname%, con respecto al usuario %userfirstname% %userlastname%.';
$string['emailcontentmanager_help'] = 'Cuando el módulo notifica al mánager de un usuario, toma el contenido de la notificación de este campo.';
$string['emailcontentthirdparty'] = 'Contenido de notificación (Tercera persona)';
$string['emailcontentthirdpartydefaultvalue'] = 'Esta es una notificación recordatoria del curso %courseshortname%, con respecto al usuario %userfirstname% %userlastname%';
$string['emailcontentthirdparty_help'] = 'Cuando el módulo notifica a un tercero, toma el contenido de la notificación de este campo.';
$string['emaildelay'] = 'Retraso de la notificación';
$string['emaildelay_help'] = 'Cuando el módulo está configurado a notificar a usuarios "después de retraso", esta configuración controla de cuanto tiempo es el retraso.';
$string['emailrecipient'] = 'Destinatario(s) de la notificación';
$string['emailrecipient_help'] = 'Cuando una notificación necesita ser enviada para motivar a un usuario a re-comprometerse con el curso, esta configuración controla si es que la notificación es enviada al usuario, su(s) mánager(s) o ambos.';
$string['emailsubject'] = 'Asunto de la notificación (Usuario)';
$string['emailsubject_help'] = 'Cuando el módulo notifica a un usuario, toma el asunto de la notificación de este campo.';
$string['emailsubjectmanager'] = 'Asunto de notificación (Mánager(s))';
$string['emailsubjectmanager_help'] = 'Cuando el módulo notifica al mánager de un usuario, toma el asunto de la notificación de este campo.';
$string['emailsubjectthirdparty'] = 'Asunto de la notificación (Tercero)';
$string['emailsubjectthirdparty_help'] = 'Cuando el módulo notifica a un tercero, toma el asunto de la notificación de este campo.';
$string['emailtime'] = 'Hora de la notificación';
$string['emailuser'] = 'Notificar usuario';
$string['emailuser_help'] = 'Cuando debería la actividad de notificar a usuarios: <ul>
<li>Nunca: No notificar a usuarios.</li>
<li>Al finalizar re-compromiso: Mandar notificación al usuario ciuando  esté completada la actividad re-compromiso.</li>
<li>Deespués del retraso: Mandar notificación al usuario un tiempo definido después de que hayan iniciado el módulo.</li>
</ul>';
$string['frequencytoohigh'] = 'El número máximo de recordatorios con el período de retraso que Usted ha configurado es {$a}.';
$string['hours'] = 'Horas';
$string['introdefaultvalue'] = 'Esta es una actividad de re-compromiso; su propósito es el regular un lapso de tiempo entre las actividades que la preceden, y las actividades que siguen.';
$string['messageprovider:mod_reengagement'] = 'Notificaciones de re-compromiso';
$string['minutes'] = 'Minutos';
$string['modulename'] = 'Re-compromiso';
$string['modulenameplural'] = 'Re-compromisos';
$string['mustenablecompletionavailability'] = 'Deben habilitarse configuraciones de seguimiento de finalización y restricción del acceso para poder usar la actividad de reengagement.';
$string['never'] = 'Nunca';
$string['newcompletiontime'] = 'Nueva hora de finalización';
$string['nochange'] = 'Sin cambio';
$string['nochangenoaccess'] = 'Sin cambio (el usuario no ha accedido al curso)';
$string['noemailattimex'] = 'El mensaje agendado para {$a} no se enviará porque Usted ha completado la actividad meta';
$string['nosuppresstarget'] = 'No se seleccionó actividad meta';
$string['oncompletion'] = 'En la finalización del re-compromiso';
$string['periodtoolow'] = 'El restraso es demasiado bajo - debe ser al menos de 5 minutos.';
$string['pluginadministration'] = '';
$string['pluginname'] = 'Re-compromiso';
$string['privacy:metadata:completiontime'] = 'Cuando este módulo estará completo';
$string['privacy:metadata:emailsent'] = 'Email ha sido enviado';
$string['privacy:metadata:emailtime'] = 'Cuando este usuario debería ser comunicado por Email';
$string['privacy:metadata:reengagement'] = 'ID de Re-compromiso';
$string['privacy:metadata:reengagement_inprogress'] = 'Actividad Reengagement en progreso';
$string['privacy:metadata:userid'] = 'ID del usuario al que se relaciona este registro';
$string['receiveemailattimex'] = 'El mensaje se enviará en {$a}.';
$string['receiveemailattimexunless'] = 'Se enviará mensaje en {$a} a menos que Usted complete la actividad meta.';
$string['reengagement'] = 're-compromiso';
$string['reengagement:addinstance'] = 'reengagement:añadirinstancia';
$string['reengagement:bulkactions'] = 'Realizar acciones masivas en re-compromiso';
$string['reengagementduration'] = 'Duración del re-compromiso';
$string['reengagement:editreengagementduration'] = 'Editar duración del re-compromiso';
$string['reengagementfieldset'] = 'Detalles del re-compromiso';
$string['reengagementintro'] = 'Introducción al re-compromiso';
$string['reengagementname'] = 'Nombre del re-compromiso';
$string['reengagementsinprogress'] = 'Re-compromisos en progreso';
$string['reengagement:startreengagement'] = 'Iniciar re-compromiso';
$string['remindercount'] = 'Número de recordatorios';
$string['remindercount_help'] = 'Este es el númeo de veces que es enviado un Emali después de cada período de retraso. Hay algunos límites a los valoresque Usted puede usar<ul>
<li>menos de 24 hrs - límite de 2 recordatorios.</li>
<li>menos de 5 días - límite de 10 recordatorios.</li>
<li>menos de 15 días - límite de 26 recordatorios.</li>
<li>más de 15 días - límite máximo de 40 recordatorios.</li></ul>';
$string['resetbyenrolment'] = 'Por fecha de creación de inscripción y una duración de: {$a}';
$string['resetbyfirstaccess'] = 'Por primer acceso al curso y una duración de: {$a}';
$string['resetbyspecificdate'] = 'Por fecha especificada';
$string['resetcompletion'] = 'Reiniciar fecha de finalización';
$string['search:activity'] = 'Recompromiso - información de actividad';
$string['specifydate'] = 'Configurar fecha de finalización a:';
$string['suppressemail'] = 'Suprimir notificación si se completa la actividad meta';
$string['suppressemail_help'] = 'Esta opción le dice a la actividad que suprima las notificaciones a usuarios cuando está completa una actividad nombrada.';
$string['suppresstarget'] = 'Actividad meta.';
$string['suppresstarget_help'] = 'Use el menú desplegable para elegir cual actividad debería ser revisada para finalización antes de enviar la otificación recordatoria.';
$string['thirdpartyemails'] = 'Destinatarios terceros';
$string['thirdpartyemails_help'] = 'Una lista separada por comas de direcciones email para terceros  que deberían de recibir una notificación cuando lo hace el usuario.';
$string['userandmanager'] = 'Uuario y Mánager(s)';
$string['weeks'] = 'Semanas';
$string['withselectedusers'] = 'Con usuarios seleccionados...';
$string['withselectedusers_help'] = '* Enviar mensaje - Para enviar un mensaje a uno o más participantes
* Reiniciar la fecha de terminación por acceso al curso - Para ajustar la fecha de finalización de re-compromiso basada en el primer acceso a este curso.';
