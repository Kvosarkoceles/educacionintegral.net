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
 * Strings for component 'recommend', language 'es_mx', branch 'MOODLE_31_STABLE'
 *
 * @package   recommend
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptrecommendation'] = 'Aceptar';
$string['addquestion'] = 'Añadir pregunta';
$string['addrequest'] = 'Solicitar recomendación';
$string['allrequests'] = 'Todas las solicitudes';
$string['areyousure_delete_request'] = '¿Está Usted seguro de querer eliminar completamente esta solicitud de recomendación?';
$string['areyousure_reject_recommendation'] = '¿Está Usted seguro de querer rechazar esta recomendación?';
$string['completiononlyaccepted'] = 'Contar solamente recomendaciones aceptadas';
$string['completionrequired'] = 'Número mínimo de recomendaciones completadas:';
$string['editquestion'] = 'Editar pregunta';
$string['editquestions'] = 'Editar preguntas';
$string['error_cannotdeleterequest'] = 'Lo siento, esta solicitud no puede ser eliminada';
$string['error_emailduplicated'] = 'Duplicar dirección E-mail';
$string['error_emailmissing'] = 'No está especificado E-mail para esta recomendación';
$string['error_emailnotvalid'] = 'La dirección E-mail no es válida';
$string['error_emailused'] = 'Ya se ha enviado solicitud a este E-mail';
$string['error_questionnotfound'] = 'Pregunta no encontrada';
$string['error_recommendationsubmitted'] = 'Esta recomendación ya está enviada';
$string['error_requestnotfound'] = 'Lo siento, no pudimos encontrar esta solicitud de recomendación';
$string['eventquestioncreated'] = 'Pregunta de recomendación creada';
$string['eventquestiondeleted'] = 'Pregunta de recomendación eliminada';
$string['eventquestionupdated'] = 'Pregunta de recomendación actualizada';
$string['eventrequestaccepted'] = 'Recomendación aceptada';
$string['eventrequestcompleted'] = 'Recomendación completada';
$string['eventrequestcreated'] = 'Solicitud de recomendación creada';
$string['eventrequestdeclined'] = 'Solicitud de recomendación declinada';
$string['eventrequestdeleted'] = 'Solicitud de recomendación eliminada';
$string['eventrequestrejected'] = 'Recomendación rechazada';
$string['eventrequestsent'] = 'Solicitud de recomendación enviada';
$string['labelcontents'] = 'Contenidos';
$string['maxrequests'] = 'Solicitudes máximas permitidas';
$string['maxrequests_help'] = 'Número máximo de solicitudes que se le permite enviar a un participante. Es razonable configurar bajo este valor, para alentar a los participantes a que pre-confirmen con la persona que recomienda  y evitar que envíen masivamente un gran número de solicitudes.
Sin embargo, diferentes circunstancias  podrían impedirles a las personas que firmarían la recomendación el que llenen el formato, y debería de permitírseles a los participantes el que envíen más solicitudes del número necesario de recomendaciones';
$string['messageprovider:completed'] = 'Notificación de recomendación completada para personas que califican';
$string['messageprovider:statuschanged'] = 'Notificación de cambio de estatus de solicitud de recomendación';
$string['modulename'] = 'Solicitud de recomendación';
$string['modulename_help'] = 'Este módulo les permite a los participantes solicitar recomendaciones. La persona que recomienda no necesita registrarse en el sitio. La persona que califica puede ver recomendaciones, aceptarlas o declinarlas.';
$string['modulenameplural'] = 'Solicitudes de recomendación';
$string['norequests'] = 'No se crearon solicitudes de recomendación';
$string['notificationcompleted_body'] = 'Estimado {$a->recipient},

Se ha completado una nueva recomendación en el sitio {$a->site} y está en espera de ser aceptada.

Participante: {$a->participant}
Nombre de quien firma la recomendación: {$a->name}

Para ver recomendaciones, siga el enlace:
{$a->link}

Si necesita ayuda, contacte al administrador del sitio,
{$a->admin}';
$string['notificationcompleted_short'] = 'Nueva recomendación';
$string['notificationcompleted_subject'] = '{$a->courseshortname}: {$a->modulename}: Nueva recomendación';
$string['notificationstatuschanged_body'] = 'Estimado {$a->recipient},

Esto es para notiifcarle acerca del cambio de estatus de la recomendación que Usted solicitó.
Nombre de la persona que recomienda: {$a->name}
E-mail: {$a->email}
Nuevo estatus: <b>{$a->status}</b>

Para ver todas sus solicitudes de recomendación, siga el enlace:
{$a->link}

Si necesita ayuda, contacte al administrador del sitio,
{$a->admin}';
$string['notificationstatuschanged_short'] = '{$a->courseshortname}: {$a->modulename}: Su estatus de solicitud de recomendación ha cambiado';
$string['notificationstatuschanged_subject'] = 'Su estatus de solicitud de recomendación ha cambiado';
$string['options'] = 'Opciones';
$string['options_help'] = 'Especifique una opción para cada línea, prefije cada línea con la ponderación y el signo / . Todas las ponderaciones deben de ser diferentes; por ejemplo:<br><pre>1/Malo<br>3/Bueno<br>5/Excelente</pre>';
$string['pluginadministration'] = 'Administración de solicitud de recomendación';
$string['pluginname'] = 'Solicitud de recomendación';
$string['prefillwith'] = 'Pre-llenar con';
$string['preview'] = 'Previsualizar recomendación';
$string['question'] = 'Pregunta';
$string['questiontype'] = 'Escribir';
$string['recommend:accept'] = 'Aceptar y rechazar recomedaciones completadas';
$string['recommend:addinstance'] = 'Añadir una nueva actividad de solitud de recomendación';
$string['recommendationaccepted'] = 'Recomendación aceptada';
$string['recommendationfor'] = 'Recomendación para {$a}';
$string['recommendationrejected'] = 'Recomendación rechazada';
$string['recommendationtitle'] = 'Recomendación {$a}';
$string['recommendatorname'] = 'Nombre de la persona que firma la recomendación';
$string['recommend:delete'] = 'Eliminar cualquier solicitud o recomendación';
$string['recommend:editquestions'] = 'Editar preguntas en la recomendación';
$string['recommendname'] = 'Nombre';
$string['recommendname_help'] = 'Nombre de la actividad como se muestra en la página del curso. No se le muestra a la persona que firma la recomendación.';
$string['recommend:request'] = 'Solicitar nueva recomendación';
$string['recommend:viewdetails'] = 'Ver los detalles de la recomendación (solicitada y completada)';
$string['rejectrecommendation'] = 'Rechazar';
$string['requestdeleted'] = 'La solicitud fue eliminada';
$string['requestemailsubject'] = 'Solicitar asunto del E-mail';
$string['requestemailtemplate'] = 'Solicitar plantilla de E-mail';
$string['requestinstructions'] = 'Use este formato para enviarles solicitudes hasta a {$a} personas quienes podrían recomendarlo a Usted.
Cada persona que firme recomendación recibirá un E-mail con un enlace hacia un formato en-línea para recomendación.
Sea cuidadoso al llenar este formato; después de que se envíe una solicitud de recomendación, Usted no podra hecerle ningun cambio.';
$string['requestinstructionsmult'] = 'Usted no necesita mandar todas las solicitudes de una sola vez; Usted puede regresar y mandar solicitudes adicionales en cualquier momento.';
$string['requestscreated'] = 'Solicitud(es) de recomendación creada(s)';
$string['requestsent'] = 'Solicitud de recomendación enviada';
$string['requestssettings'] = 'Configuraciones de solicitudes';
$string['requesttemplatebody'] = 'Estimado {NAME}

{PARTICIPANT} le ha pedido a Usted una recomendación en el sitio {SITE}.
Para llenar en-lìnea el formato de la recomendación, por favor siga el enlace:
{LINK}
Si necesita ayuda, contacte al administrador del sitio
{ADMIN}';
$string['requesttemplatesubject'] = 'Solicitud de recomendación proveniente de {SITE}';
$string['requiredrecommendgroup'] = 'Recomendaciones recibidas';
$string['requiredrecommendgroup_help'] = 'Si no está seleccionada la configuración de  "Contar solamente recomendaciones aceptadas", las recomendaciones completas que no hayan sido todavía revisadas por el profesor serán contadas. Sin embargo, si posteriormente las recomendaciones completadas fueran rechazadas por el profesor, la actividad completada podría volverse otra vez incompleta.';
$string['resend'] = 'Re-enviar solicitud';
$string['selectquestiontype'] = 'Selccionar tipo de pregunta';
$string['sendnow'] = 'Enviar sin retraso';
$string['status'] = 'Estatus';
$string['status0'] = 'Agendada';
$string['status1'] = 'Solicitud de recomendación enviada';
$string['status2'] = 'Solicitud de recomendación declinada';
$string['status3'] = 'Recomendación completada';
$string['status4'] = 'Recomendación rechazada';
$string['status5'] = 'Recomendación aceptada';
$string['suredeletequestion'] = '¡Está Usted seguro de querer eliminar esta pregunta? Todas las respuestas a esta pregunta en las recomendaciones existentes también serán eliminadas.';
$string['taskname'] = 'Mandar solicitudes de recomendación agendadas';
$string['thanksforrecommendation'] = 'Gracias, su recomendación ha sido procesada.';
$string['timecompleted'] = 'Completada';
$string['timerequested'] = 'Solicitada';
$string['typelabel'] = 'Texto explicatorio sin control de la entrada';
$string['typeradio'] = 'Conjunto de botones de selección';
$string['typetextarea'] = 'Texto multi-línea con editor';
$string['typetextfield'] = 'Campo de texto de una sola línea';
$string['yourrecommendations'] = 'Sus recomendaciones';
