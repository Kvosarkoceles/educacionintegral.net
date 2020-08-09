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
 * Strings for component 'kalmediaassign', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   kalmediaassign
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_media'] = 'Añadir medios';
$string['all'] = 'Todos';
$string['allowdeleting'] = 'Añadir re-enviar';
$string['allowdeleting_help'] = 'Si se habilita, los estudiantes pueden remplazar medios enviados. El que sea o no posible enviar después de la fecha esperada está controlado por la configuración de "Impedir envíos retrasados"';
$string['alwaysshowdescription'] = 'Siempre mostrar descripción';
$string['alwaysshowdescription_help'] = 'Si se deshabilita, la Descripción de Tarea de arriba solamente será visible para estudiantes en la fecha de "Permitir envíos a partir de".';
$string['assignmentexpired'] = 'Envío cancelado. Ha pasado la fecha esperada de la tarea.';
$string['assignmentsubmitted'] = 'Éxitos; su tarea ha sido enviada';
$string['availabledate'] = 'Disponible a partir de';
$string['cancel'] = 'Cerrar';
$string['cannotdisplaythumbnail'] = 'No puede mostrarse miniatura';
$string['checkconversionstatus'] = 'Revisar estatus de conversión de medios';
$string['currentgrade'] = 'Calificación actual';
$string['deleteallsubmissions'] = 'Eliminar todos los envíos de medios';
$string['description'] = 'Descripción';
$string['duedate'] = 'Fecha esperada';
$string['early'] = '{$a} anicipadamente';
$string['emailteachermail'] = '{$a->username} ha actualizado su envío de tarea para \'{$a->assignment}\' en {$a->timeupdated}

Está disponible aquí:

{$a->url}';
$string['emailteachermailhtml'] = '{$a->username} ha actualizado su envío de tarea para <i>\'{$a->assignment}\' en {$a->timeupdated}</i><br /><br />
Está <a href="{$a->url}">disponible en el sitio web</a>.';
$string['emailteachers'] = 'Alertas por email a profesores';
$string['emailteachers_help'] = 'Si se habilita, los profesorrs recibirán notificación Email cuando los estudiantes añadan o actualicen un envío de tarea. Solamente los profesores que pueden calificar la tarea particular son notificados. Así, por ejemplo, si el curso usa grupos separados, los profesores restringidos a grupos particulares no recibirán notificaciones acerca de estudiantes en otros grupos.';
$string['emptyentryid'] = 'Tarea de medios no fueron enviadas correctamente. Por favor intente re-enviar.';
$string['event_grades_updated'] = 'Calificaciones de envíos de Medios actualizadas';
$string['event_media_submitted'] = 'Medio enviado';
$string['event_submission_detail_viewed'] = 'Detalles del envío de medio vistos';
$string['event_submission_page_viewed'] = 'Página de envío de medios vista';
$string['feedback'] = 'Retroalimentación';
$string['feedbackcomment'] = 'Comentario de retroalimentación';
$string['finalgrade'] = 'Calificación Final';
$string['fullname'] = 'Nombre';
$string['grade'] = 'Calificación';
$string['gradedby'] = 'Calificado por';
$string['gradedon'] = 'Calificado en';
$string['grade_media_not_cache'] = 'Este medio podría todavía estar en proceso de convertirse...';
$string['grademodified'] = 'Última modificación (Calificación)';
$string['grades'] = 'Calificaciones';
$string['gradesubmission'] = 'Calificar envíos';
$string['gradingstatus'] = 'Estatus de calificación';
$string['gradingsummary'] = 'Resumen de calificación';
$string['group_filter'] = 'Filtro de Grupo';
$string['invalidid'] = 'ID inválida';
$string['invalidperpage'] = 'Ingresar un número mayor de cero';
$string['kalmediaassign:addinstance'] = 'Añadir una Tarea Kaltura media';
$string['kalmediaassign:gradesubmission'] = 'Calificar envíos de medios';
$string['kalmediaassign:screenrecorder'] = 'Grabadora de pantalla';
$string['kalmediaassign:submit'] = 'Enviar medio';
$string['lastgrade'] = 'Última calificación';
$string['late'] = '{$a} tardíamente';
$string['latesubmission'] = 'Retrasado';
$string['media_converting'] = 'El medio todavía está siendo convertido. Por favor revise el estatus de los medios más tarde.';
$string['media_preview_header'] = 'Vista previa del envío';
$string['messageprovider:kalmediaassign_updates'] = 'Notificaciones de tarea Kaltura Media';
$string['modulename'] = 'Tarea Kaltura Media';
$string['modulename_help'] = 'La Tarea Kaltura Media le permite a un profesor crear tareas que requieren que los estudiantes suban y envíen videos de Kaltura. Los profesores pueden calificar envíos de estudiantes y proporcionar retroalimentación.';
$string['modulenameplural'] = 'Tareas Kaltura Media';
$string['name'] = 'Nombre';
$string['noassignments'] = 'No se encontraron Tareas Kaltura Media en el curso';
$string['noenrolledstudents'] = 'No hay estudiantes inscritos en el curso';
$string['nosubmission'] = 'Sin envío';
$string['nosubmissions'] = 'Sin envíos';
$string['not_insert'] = 'No se pudieron insertar datos del envío.';
$string['notsubmittedyet'] = 'Aun no enviada';
$string['not_update'] = 'BNo se pudo actualizar datos del envío';
$string['numberofmembers'] = 'Número de miembros';
$string['numberofrequiregrading'] = 'Número de los que requieren calificarse';
$string['numberofsubmissions'] = 'Número de envíos';
$string['optionalsettings'] = 'Configuraciones opcionales';
$string['outlinegrade'] = 'Calificación: {$a}';
$string['pagesize'] = 'Envíos mostrados por página';
$string['pagesize_help'] = 'Configurar el número de tareas a mostrar por página';
$string['pluginadministration'] = 'Tarea Kaltura Media';
$string['pluginname'] = 'Tarea Kaltura Media';
$string['preventlate'] = 'Impedir envíos retrasados';
$string['previewmedia'] = 'Vista previa';
$string['privacy:metadata:kalmediaassign_submission'] = 'Información acerca de envío y calificación de tareas de medios.';
$string['privacy:metadata:kalmediaassign_submission:grade'] = 'Puntuación al envío de medio.';
$string['privacy:metadata:kalmediaassign_submission:submissioncomment'] = 'Comentarios del profesor al estudiante';
$string['privacy:metadata:kalmediaassign_submission:teacher'] = 'La ID del profesor que calificó el medio enviado.';
$string['privacy:metadata:kalmediaassign_submission:timecreated'] = 'Hora de cuando el medio fue enviado.';
$string['privacy:metadata:kalmediaassign_submission:timemarked'] = 'Hora de cuando el medio fue calificado por el profesor.';
$string['privacy:metadata:kalmediaassign_submission:timemodified'] = 'Hora de cuando el medio fue modificado.';
$string['privacy:metadata:kalmediaassign_submission:userid'] = 'La ID del usuario que envió un medio';
$string['quickgrade'] = 'Permitir calificación rápida';
$string['quickgrade_help'] = 'Si se habilita, se pueden calificar varias tareas en una sola página. Añada calificaciones y comentarios y después haga clic en el botón para "Guardar mi retroalimentación" para guardar todos los cambios para esa pagina.';
$string['remainingtime'] = 'Tiempo restante';
$string['replace_media'] = 'Reemplazar medios';
$string['reqgrading'] = 'Necesitando calificarse';
$string['reset_userdata'] = 'Todos los datos';
$string['reviewmedia'] = 'Revisr envío';
$string['save'] = 'Guardar cambios';
$string['savedchanges'] = 'Cambios guardados';
$string['savefeedback'] = 'Guardar calificación y retroalimentación';
$string['savepref'] = 'Guardar preferencias';
$string['scr_loading'] = 'Cargando...';
$string['show'] = 'Mostrar';
$string['show_help'] = 'Si el filtro se configura a \'Todos\', entonces todos los envíos de estudiantes serán mostrados; aun y cuando el estudiante no hubiera enviado nada. Si se configura a \'Requerir calificarse\', solamente los envíos que no hubieran sido calificados o envíos que hubieran sido actualizados por el estudiante después de que fue calificado serán mostrados. Si se configura a \'Enviados\' solamente los estudiantes que enviaron una tarea de medio.';
$string['singlegrade'] = 'Añadir texto de ayuda';
$string['singlegrade_help'] = 'Añadir texto de ayuda';
$string['singlesubmissionheader'] = 'Calificar envío';
$string['status'] = 'Estatus';
$string['status_marked'] = 'Calificado';
$string['status_nomarked'] = 'No calificado';
$string['status_nosubmission'] = 'No enviado';
$string['status_submitted'] = 'Enviado para calificar';
$string['status_timemodified'] = 'Última modificación';
$string['submission'] = 'Envío';
$string['submissionclosed'] = 'Cerrado';
$string['submissioncomment'] = 'Comentario';
$string['submissionexpired'] = 'La tarea está caduca';
$string['submissionnotopened'] = 'Aun no abierto';
$string['submissionsettings_hdr'] = 'Configuraciones de envíos';
$string['submissionstatus'] = 'Estatus del envío';
$string['submit_media'] = 'Enviar medios';
$string['submitted'] = 'Enviado';
$string['table_failed'] = 'La tabla de envío no puede mostrarse por causa de un error.';
$string['timemodified'] = 'Última modificación (Envío)';
