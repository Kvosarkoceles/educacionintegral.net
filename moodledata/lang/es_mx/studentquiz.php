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
 * Strings for component 'studentquiz', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   studentquiz
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['abort_button'] = 'Abortar';
$string['add_comment'] = 'Añadir comentario';
$string['add_reply'] = 'Añadir respuesta';
$string['after_answering_end_date'] = 'Este StudentQuiz se cerró para respuestas en {$a}.';
$string['after_submission_end_date'] = 'Este StudentQuiz se cerró para envío de preguntas en {$a}.';
$string['anonymous_user_name'] = 'Usuario anónimo #{$a}';
$string['answeringndbeforestart'] = 'La fecha límite para contestar no puede estar especificada anterior a la fecha para contestar';
$string['api_state_change_success_content'] = 'Estado/visibilidad de pregunta cambiado exitosamente';
$string['api_state_change_success_title'] = 'Éxito';
$string['approve'] = 'Aprobar';
$string['approved'] = '✓';
$string['approved_column_name'] = 'Aprobado';
$string['approved_veryshort'] = 'A';
$string['approveselectedscheck'] = 'Está Usted seguro de querer des/aprobar las preguntas siguientes ?<br /><br />{$a}';
$string['approve_toggle'] = 'Des/Aprobar';
$string['average_column_name'] = 'Promedio';
$string['before_answering_end_date'] = 'Este StudentQuiz se cierra para respuestas en {$a}.';
$string['before_answering_start_date'] = 'Abierto para responder a partir de {$a}.';
$string['before_submission_end_date'] = 'Este StudentQuiz se cierra para envío de preguntas en {$a}.';
$string['before_submission_start_date'] = 'Abierto para envío de preguntas a partir de {$a}.';
$string['cannotcapturecommenthistory'] = 'No se puede capturar registro de historia de comentarios';
$string['changeselectedsstate'] = 'Cambiar el estado de las siguientes preguntas:<br /><br />{$a}';
$string['collapseall'] = 'Colapsar todos los comentarios';
$string['collapsecomment'] = 'Colapsar comentario';
$string['comment_author'] = 'Autor';
$string['comment_cannot_update'] = 'No se puede actualizar comentario';
$string['comment_column_name'] = 'Comentarios';
$string['comment_error'] = 'Por favor comente';
$string['comment_error_unsaved'] = '¿Quiere guardar primeramente este comentario?';
$string['comment_help'] = 'Escribir un comentario';
$string['comment_help_help'] = 'Escribir un comentario a la pregunta';
$string['commenthistory'] = 'Historia de comentarios';
$string['comment_veryshort'] = 'C';
$string['confirmdeletecomment'] = '¿Está seguro de querer eliminar este comentario?';
$string['createnewquestion'] = 'Crear pregunta nueva';
$string['createnewquestionfirst'] = 'Crear primera pregunta';
$string['creator_anonym_fullname'] = 'Estudiante Anónimo';
$string['current_of_total'] = '{$a->current} de {$a->total}';
$string['delete'] = 'Eliminar';
$string['deletecomment'] = 'Eliminar comentario';
$string['deletedbyauthor'] = 'Este comentario fue eliminado en {$a}.';
$string['deletedbyuser'] = 'Este comentario fue eliminado por {$a->user} en {$a->date}.';
$string['deletedcomment'] = 'Comentario eliminado.';
$string['describe_already_deleted'] = 'Este comentario ya fue eliminado.';
$string['describe_not_creator'] = 'Este comentario no es suyo.';
$string['describe_out_of_time_delete'] = 'Este comentario está fuera del tiempo permitido para eliminarlo.';
$string['describe_out_of_time_edit'] = 'Este comentario ya no está en tiempo para editarlo';
$string['difficulty_all_column_name'] = 'Dificultad de Comunidad';
$string['difficulty_level_column_name'] = 'Dificultad';
$string['difficulty_title'] = 'Barra de dificultad';
$string['editcomment'] = 'Editar comentario';
$string['editedcommenthistory'] = 'Editado por {$a->lastesteditedcommentauthorname} en {$a->lastededitedcommenttime}';
$string['editedcommenthistorylinktext'] = 'Historia';
$string['editorplaceholder'] = 'Ingresar aquí su comentario ...';
$string['emailautomationnote'] = 'Por favor tenga en cuenta que este es un mensaje de sistema automatizado - esta dirección Email no es monitoreada.';
$string['emailcommentaddedbody'] = 'Estimado/a  {$a->recepientname},

Su pregunta \'{$a->questionname}\' en actividad StudentQuiz \'{$a->modulename}\' en curso \'{$a->coursename}\' ha sido comentada por  \'{$a->actorname}\' en \'{$a->timestamp}\'.

El comentario es: \'{$a->commenttext}\'

Usted puede revisar esta pregunta en: {$a->questionurl}.';
$string['emailcommentaddedsmall'] = 'Su pregunta \'{$a->questionname}\' ha sido comentada por  {$a->actorname}.';
$string['emailcommentaddedsubject'] = 'Pregunta ha sido comentada: {$a->questionname}';
$string['emailcommentdeletedbody'] = 'Estimado/s {$a->recepientname},

El comentario en \'{$a->commenttime}\' a su pregunta \'{$a->questionname}\' en actividad StudentQuiz \'{$a->modulename}\' en curso \'{$a->coursename}\' ha sido eliminado por \'{$a->actorname}\' en \'{$a->timestamp}\'.

El comentario era: \'{$a->commenttext}\'

You can review this question at: {$a->questionurl}.';
$string['emailcommentdeletedsmall'] = 'El comentario a su pregunta \'{$a->questionname}\' ha sido eliminada por {$a->actorname}.';
$string['emailcommentdeletedsubject'] = 'Comentario ha sido eliminado a pregunta: {$a->questionname}';
$string['emaildigestbody'] = 'Este es su resumen {$a->digesttype} de notificaciones para la actividad StudentQuiz  <b>{$a->modulename}</b> disponible aquí:';
$string['emaildigestbody_section_content'] = 'Su pregunta <b>{$a->questionname}</b> ha sido <b>{$a->actiontype}</b> por <b>{$a->actorname}</b>';
$string['emaildigestbody_section_title'] = 'Notificación {$a->seq}, {$a->timestamp}';
$string['emaildigestsubject'] = 'Notificación Resumida de StudentQuiz';
$string['emailminecommentdeletedbody'] = 'Estimado/a {$a->recepientname},

Su comentario en \'{$a->commenttime}\' a la pregunta \'{$a->questionname}\' en la actividad StudentQuiz \'{$a->modulename}\' en curso \'{$a->coursename}\' ha sido eliminado por \'{$a->actorname}\' en \'{$a->timestamp}\'.

El comentario era: \'{$a->commenttext}\'

You can review this question at: {$a->questionurl}.';
$string['emailminecommentdeletedsmall'] = 'Su comentario a la pregunta  \'{$a->questionname}\' ha sido eliminado por  {$a->actorname}.';
$string['emailminecommentdeletedsubject'] = 'Comentario ha sido eliminado a pregunta: {$a->questionname}';
$string['emailsalutation'] = 'Estimado/a {$a},';
$string['emailsinglebody'] = 'Su pregunta <b>{$a->questionname}</b> en la actividad  StudentQuiz <b>{$a->modulename}</b> en el curso <b>{$a->coursename}</b> ha sido {$a->eventname} por <b>{$a->actorname}</b> en <b>{$a->timestamp}</b>.';
$string['emailsinglebody_reviewlink'] = 'Usted puede revisar esta pregunta en:';
$string['error_form_validation'] = '{$a}';
$string['error_sendalert'] = 'Hubo un error al enviar su reporte a {$a}.
El reporte no pudo ser enviado.';
$string['expandall'] = 'Expandir todos los comentarios';
$string['expandcomment'] = 'Expandir comentarios';
$string['filter'] = 'Filtrar';
$string['filter_advanced_element'] = '{$a} (Elemento avanzado)';
$string['filter_comment_label_date'] = 'Fecha';
$string['filter_comment_label_forename'] = 'Nombre';
$string['filter_comment_label_sort_by'] = 'Ordenar por';
$string['filter_comment_label_sort_toggle'] = 'Ordenar por {$a->field} {$a->type}';
$string['filter_comment_label_surname'] = 'Apeliido(s)';
$string['filter_ishigher'] = 'es superior a';
$string['filter_islower'] = 'es inferior a';
$string['filter_label_approved'] = 'Preguntas aprobadas';
$string['filter_label_comment'] = 'Comentarios';
$string['filter_label_createdate'] = 'Creación';
$string['filter_label_difficulty_level'] = 'Dificultad';
$string['filter_label_fast_filters'] = 'Filtro rápido para preguntas';
$string['filter_label_myattempts'] = 'Mis intentos';
$string['filter_label_mydifficulty'] = 'Mi dificultad';
$string['filter_label_mylastattempt'] = 'Mí último intento';
$string['filter_label_myrate'] = 'Mi Valoración';
$string['filter_label_onlyapproved'] = 'Aprobadas';
$string['filter_label_onlyapproved_help'] = 'Preguntas aprobadas por su profesor';
$string['filter_label_onlydifficult'] = 'Difícil para todos';
$string['filter_label_onlydifficultforme'] = 'Difícil para mí';
$string['filter_label_onlydifficultforme_help'] = 'Pregunta con mi dificultad de más de {$a}%';
$string['filter_label_onlydifficult_help'] = 'Pregunta con una dificultad promedio de más de {$a}%';
$string['filter_label_onlygood'] = 'Buenas';
$string['filter_label_onlygood_help'] = 'Pregunta con una valoración promedio de al menos {$a} estrellas';
$string['filter_label_onlymine'] = 'Mías';
$string['filter_label_onlymine_help'] = 'Preguntas que Usted creó';
$string['filter_label_onlynew'] = 'No-contestada';
$string['filter_label_onlynew_help'] = 'Preguntas que Usted nunca ha contestado antes';
$string['filter_label_question'] = 'Título de pregunta';
$string['filter_label_question_creation_item'] = '{$a->creationtext} {$a->rowtext} {$a->inputtext}';
$string['filter_label_question_creation_item_inputtext'] = '{$a->inputtext} {$a->inputtype}';
$string['filter_label_questiontext'] = 'Contenido de pregunta';
$string['filter_label_rates'] = 'Valoración';
$string['filter_label_show_mine'] = 'Mis preguntas';
$string['filter_label_tags'] = 'Marca';
$string['finish_button'] = 'Terminar';
$string['image_placeholder'] = '[Imagen]';
$string['invalidcomment'] = 'comentarioinvalido';
$string['invalidemail'] = 'La dirección Email no es válida. Por favor ingrese una sola dirección Email.';
$string['lastattempt_right'] = '✓';
$string['lastattempt_right_label'] = 'Último intento correcto';
$string['lastattempt_wrong'] = '✗';
$string['lastattempt_wrong_label'] = 'Último intento incorrecto';
$string['latest_column_name'] = 'Más reciente';
$string['manager_anonym_fullname'] = 'Mánager Anónimo';
$string['message'] = 'Mensaje';
$string['messageprovider:commentadded'] = 'Notificación de pregunta añadida';
$string['messageprovider:commentdeleted'] = 'Notificación de eliminación de comentario';
$string['messageprovider:minecommentdeleted'] = 'Notificación de eliminación de mi comentario';
$string['messageprovider:questionchanged'] = 'Notificación de evento de pregunta';
$string['migrate_already_done'] = 'No se hizo nada porque esta actividad ya ha sido migrada !';
$string['migrate_ask'] = '¡La velocidad de StedentQuiz mejoró con la versión 3.2.1 pero este conjunto de preguntas todavía está basado en una versión anterior.
Las preguntas y los exámenes serán cargados más rápidamente si Usted ejecuta esta migración rápida. Usted experimentará una carga más rápida: nada más cambiará.';
$string['migrated_successful'] = '¡Esta actividad ha sido migrada exitosamente!';
$string['migrate_studentquiz'] = 'Migrar preguntas de StudentQuiz anteriores a la versión 3,2,1 a la versión más rápida con valores agregados';
$string['migrate_studentquiz_short'] = 'Acelerar este conjunto de preguntas';
$string['mine_column_name'] = 'Mías';
$string['missingparam'] = 'Un parámetro falta o está equivocado';
$string['moderator'] = 'Moderador';
$string['modulename'] = 'StudentQuiz (ExamenEstudiante)';
$string['modulename_help'] = 'La actividad StudentQuiz (ExamenEstudiante) le permite a los estudiantes añadir preguntas para la multitud. En la vista general del StudentQuiz, los estudiantes pueden filtrar preguntas. Ellos también pueden usar las preguntas filtradas en la multitud para practicar. El profesor tiene la opción de anonimizar la columna de \'creado por\'.<br><br>La actividad de StudentQuiz le otorga  a los estudiantes puntos para motivarlos a que añadan preguntas y a que practiquen. Los Puntos están enlistados en una tabla de ranking.';
$string['modulenameplural'] = 'StudentQuizzes (ExámenesEstudiante)';
$string['more'] = 'Más';
$string['myattempts_column_name'] = 'Mis Intentos';
$string['mydifficulty_column_name'] = 'Mi Dificultad';
$string['mylastattempt_column_name'] = 'Mi Último Intento';
$string['myrate_column_name'] = 'Mi Valoración';
$string['nav_export'] = 'Exportar';
$string['nav_import'] = 'Importar';
$string['nav_question_no'] = 'Pregunta {$a->current} de {$a->total}';
$string['needtoallowatleastoneqtype'] = 'Usted necesita permitir al menos un tipo de pregunta';
$string['next_button'] = 'Siguiente';
$string['no_comment'] = 'no disponible';
$string['nocommenthistoryexist'] = 'Aun no hay historia de comentarios para este comentario.';
$string['no_comments'] = 'Sin comentarios';
$string['no_difficulty_level'] = 'no disponible';
$string['no_myattempts'] = 'no disponible';
$string['no_mylastattempt'] = 'no disponible';
$string['no_mylastattempt_label'] = 'La pregunta no está intentada';
$string['no_questions_add'] = 'No hay preguntas en este StudentQuiz. Siéntase con libertad de añadir algunas preguntas.';
$string['no_questions_filter'] = 'Ninguna de las preguntas coincidió con su criterio de filtro. Reinicie el filtro para ver todo.';
$string['no_questions_selected_message'] = 'Por favor seleccioen al menos un tipo de pregunta para comenzar el examen';
$string['no_rates'] = 'no disponible';
$string['no_tags'] = 'no disponible';
$string['not_approved'] = '✗';
$string['number_column_name'] = 'Número';
$string['numberreply'] = '{$a} Respuestas';
$string['num_questions'] = '{$a} preguntas';
$string['onlyrootcommentcanreply'] = 'Solamente el primer nivel de comentario puede ser respuesta';
$string['pagesize'] = 'Tamaño de página';
$string['please_enrole_message'] = 'Por favor inscríbase en este curso para ver su progreso personal';
$string['pluginadministration'] = 'Administración de StudentQuiz';
$string['pluginname'] = 'StudentQuiz (ExamenEstudiante)';
$string['previous_button'] = 'Anterior';
$string['privacy:metadata:mod_studentquiz_comment_sort'] = 'Una preferencia del usuario para tipo de filtro de comentario.';
$string['privacy:metadata:studentquiz_attempt'] = 'representa un intento de usuario para contestar un conjunto de preguntas.';
$string['privacy:metadata:studentquiz_attempt:categoryid'] = 'ID de la categoría.';
$string['privacy:metadata:studentquiz_attempt:questionusageid'] = 'ID del uso de pregunta.';
$string['privacy:metadata:studentquiz_attempt:studentquizid'] = 'ID del StudentQuiz.';
$string['privacy:metadata:studentquiz_attempt:userid'] = 'ID del usuario.';
$string['privacy:metadata:studentquiz_comment'] = 'Almacena comentarios para preguntas.';
$string['privacy:metadata:studentquiz_comment:comment'] = 'Comentario de la pregunta.';
$string['privacy:metadata:studentquiz_comment:created'] = 'Hora de creación del comentario.';
$string['privacy:metadata:studentquiz_comment:deleted'] = 'Comentario de hora de eliminación.';
$string['privacy:metadata:studentquiz_comment:deleteuserid'] = 'Comentario de ID del usuario eliminado';
$string['privacy:metadata:studentquiz_comment:edited'] = 'Hora de comentario editado.';
$string['privacy:metadata:studentquiz_comment:edituserid'] = 'ID del usuario que editó comentario.';
$string['privacy:metadata:studentquiz_comment_history'] = 'Almacenar historia de comentarios de  los comentarios';
$string['privacy:metadata:studentquiz_comment_history:action'] = 'Tipo de historia 0 - Crear | 1 - Editar | 2 - Eliminar';
$string['privacy:metadata:studentquiz_comment_history:commentid'] = 'ID del comentario';
$string['privacy:metadata:studentquiz_comment_history:content'] = 'Contenido de historia de comentarios';
$string['privacy:metadata:studentquiz_comment_history:timemodified'] = 'Hora de comentario modificado';
$string['privacy:metadata:studentquiz_comment_history:userid'] = 'ID del usuario que editó comentario';
$string['privacy:metadata:studentquiz_comment:parentid'] = 'ID del comentario paterno. 0: comentario del nivel superior.';
$string['privacy:metadata:studentquiz_comment:questionid'] = 'ID de la pregunta.';
$string['privacy:metadata:studentquiz_comment:status'] = 'Estado del comentario';
$string['privacy:metadata:studentquiz_comment:timemodified'] = 'Hora actual de modificación';
$string['privacy:metadata:studentquiz_comment:userid'] = 'ID del usuario.';
$string['privacy:metadata:studentquiz_comment:usermodified'] = 'ID de usuario que modificó comentario';
$string['privacy:metadata:studentquiz_notification'] = 'Cola de notificaciones';
$string['privacy:metadata:studentquiz_notification:content'] = 'Contenido de la notificación';
$string['privacy:metadata:studentquiz_notification:recipientid'] = 'ID del destinatario';
$string['privacy:metadata:studentquiz_notification:status'] = 'Estado de la notificación';
$string['privacy:metadata:studentquiz_notification:studentquizid'] = 'ID del StudentQuiz';
$string['privacy:metadata:studentquiz_notification:timetosend'] = 'Hora para enviar la notificación';
$string['privacy:metadata:studentquiz_progress'] = 'Almacena información del progreso del estudiante con esta pregunta.';
$string['privacy:metadata:studentquiz_progress:attempts'] = 'Número de intentos para contestar esta pregunta.';
$string['privacy:metadata:studentquiz_progress:correctattempts'] = 'Número de respuestas correctas.';
$string['privacy:metadata:studentquiz_progress:lastanswercorrect'] = '0: la última respuesta fue incorrecta o indefinida, 1: la última respuesta fue correcta.';
$string['privacy:metadata:studentquiz_progress:questionid'] = 'ID de la pregunta.';
$string['privacy:metadata:studentquiz_progress:studentquizid'] = 'ID del StudentQuiz.';
$string['privacy:metadata:studentquiz_progress:userid'] = 'ID del usuario.';
$string['privacy:metadata:studentquiz_rate'] = 'Almacena valoraciones para preguntas.';
$string['privacy:metadata:studentquiz_rate:questionid'] = 'ID de la pregunta.';
$string['privacy:metadata:studentquiz_rate:rate'] = 'Valoración para la pregunta.';
$string['privacy:metadata:studentquiz_rate:userid'] = 'ID del usuario.';
$string['progress_bar_caption'] = 'Su progreso en la actividad StudentQuiz';
$string['questionsinuse'] = '(* Las preguntas marcadas con un asterisco ya están en uso en algunos exámenes.)';
$string['ranking_block_title'] = 'Ranking';
$string['ranking_block_title_anonymised'] = 'Ranking (anonimizado)';
$string['rate_all_column_name'] = 'Valoración de Comunidad';
$string['rate_column_name'] = 'Valoración';
$string['rate_error'] = 'Por favor valore';
$string['rate_help'] = 'Valore esta pregunta';
$string['rate_help_help'] = 'Valore esta pregunta.<br />1 estrella es muy mala y 5 estrellas es muy buena';
$string['rate_multi_stars_desc'] = '{$a} estrellas seleccionada';
$string['rate_one_star_desc'] = '1 estrella seleccionada';
$string['rate_points'] = 'Puntos';
$string['rate_title'] = 'Valorar';
$string['ratingbar_title'] = 'Barra de valoración';
$string['remove_comment'] = 'Quitar';
$string['remove_comment_label'] = 'Quitar comentario';
$string['replies'] = 'Respuestas';
$string['reply'] = 'Respuesta';
$string['replycomment'] = 'Respuesta';
$string['reportcomment'] = 'Reporte';
$string['report_comment_condition1'] = 'Es abusivo';
$string['report_comment_condition2'] = 'Es acoso';
$string['report_comment_condition3'] = 'Contiene contenido obsceno, como  por ejemplo pornografía';
$string['report_comment_condition4'] = 'Es calumnioso o difamatorio';
$string['report_comment_condition5'] = 'Viola el derecho de autor (copyright)';
$string['report_comment_condition6'] = 'Está en contra de las reglas por alguna otra razón';
$string['report_comment_condition_more'] = 'Otra información (opcional)';
$string['report_comment_emailappendix'] = 'Usted está recibiendo este Email porque su dirección Email ha sido usada en el StudentQuiz para reportar un comentario inaceptable.';
$string['report_comment_emailpreface'] = 'Un comentario ha sido reportado por {$a->fullname} ({$a->username},
{$a->email}).';
$string['report_comment_emailsubject'] = 'Reportar comentario {$a->commentid}: {$a->coursename} {$a->studentquizname}';
$string['report_comment_feedback'] = 'Su reporte ha sido enviado exitosamente. Un miembro del personal investigará este asunto.';
$string['report_comment_info'] = 'La característica de \'Reporte\' puede enviar este comentario a un miembro del personal que lo investigará. <strong>Por favor solamente use esta característica si Usted piensa que el comentario infringe las reglas</strong>.';
$string['report_comment_invalid'] = 'Usted necesita especificar la razón para reportar este comentario.';
$string['report_comment_invalid_checkbox'] = 'Usted necesita seleccionar al menos una de las casillas.';
$string['report_comment_link_text'] = 'Previsualizar aquí';
$string['report_comment_not_available'] = 'La función para reportar comentario no está disponible.';
$string['report_comment_pagename'] = 'Reportar un comentario como inaceptable';
$string['report_comment_reasons'] = 'Razones para reportar el comentario :';
$string['report_comment_reporter_detail'] = '{$a->fullname} ({$a->username}; {$a->email}; {$a->ip})';
$string['report_comment_reporter_info'] = '<strong>Detalles de quien reporta</strong>:';
$string['report_comment_submit'] = 'Enviar reporte';
$string['reportcomment_title'] = 'Reportar comentario como inaceptable';
$string['reportquiz_admin_title'] = 'Estadísticas del estudiante';
$string['reportquiz_stats_all_last_attempt_correct'] = 'Promedio de comunidad de últimas respuestas correctas';
$string['reportquiz_stats_all_last_attempt_incorrect'] = 'Promedio de comunidad de últimas respuestas incorrectas';
$string['reportquiz_stats_all_percentage_correct_answers'] = 'Porcentaje de comunidad de respuestas correctas';
$string['reportquiz_stats_all_percentage_correct_answers_help'] = 'Suma de respuestas correctas / suma de todas las respuestas.';
$string['reportquiz_stats_all_progress'] = 'Promedio del Progreso de la Comunidad';
$string['reportquiz_stats_all_progress_help'] = 'Promedio del Progreso de la Comunidad basado en todos los miembros de la comunidad.';
$string['reportquiz_stats_all_question_attempts_correct'] = 'Promedio de la comunidad de respuestas correctas';
$string['reportquiz_stats_all_question_attempts_incorrect'] = 'Promedio de la comunidad de respuestas incorrectas';
$string['reportquiz_stats_all_questions_answered'] = 'Promedio de la comunidad de todas las respuestas';
$string['reportquiz_stats_all_questions_answered_help'] = 'Número promedio de respuestas dadas por todos los miembros de la comunidad.';
$string['reportquiz_stats_all_questions_approved'] = 'Número de preguntas aprobadas';
$string['reportquiz_stats_all_questions_approved_help'] = 'Los profesores pueden aprobar las preguntas para verificar que estén correctas. Este es el número de todas las preguntas aprobadas dentro de este StudentQuiz.';
$string['reportquiz_stats_all_questions_created'] = 'Número de preguntas en este StudentQuiz';
$string['reportquiz_stats_all_questions_created_help'] = 'Número de preguntas creadas por la comunidad';
$string['reportquiz_stats_all_rates_average'] = 'Valoración promedio de todas las preguntas';
$string['reportquiz_stats_all_rates_average_help'] = 'La valoración de cada pregunta es el promedio de estrellas que recibió de la comunidad. Ejemplo: La comunidad creó 4 preguntas. Si la pregunta A fue valorada con 3 estrellas por la comunidad, la pregunta B = 4 estrellas, pregunta C = 2 estrellas y pregunta D = 5 estrellas, entonces la  valoración promedio de todas las preguntas es 3.5.';
$string['reportquiz_stats_own_last_attempt_correct'] = 'Número de sus últimas respuestas correctas';
$string['reportquiz_stats_own_last_attempt_incorrect'] = 'Número de sus últimas respuestas incorrectas';
$string['reportquiz_stats_own_percentage_correct_answers'] = 'Porcentaje de sus respuestas correctas';
$string['reportquiz_stats_own_percentage_correct_answers_help'] = 'Porcentaje de todas sus respuestas correctas del conjunto de todas sus respuestas dadas en este StudentQuiz. Las parcialmente correctas cuentan como respuestas incorrectas.';
$string['reportquiz_stats_own_progress'] = 'Progreso Personal';
$string['reportquiz_stats_own_progress_help'] = 'Porcentaje de sus últimas respuestas correctas del conjunto de todas sus preguntas dentro de este StudentQuiz. Las respuestas parcialmente correctas cuentan como respuestas incorrectas.';
$string['reportquiz_stats_own_question_attempts_correct'] = 'Total de sus respuestas correctas';
$string['reportquiz_stats_own_question_attempts_incorrect'] = 'Total de sus respuestas incorrectas';
$string['reportquiz_stats_own_questions_answered'] = 'Total de todas sus respuestas';
$string['reportquiz_stats_own_questions_answered_help'] = 'Número de todas sus respuestas dadas dentro de este StudentQuiz.';
$string['reportquiz_stats_own_questions_approved'] = 'Número de sus preguntas aprobadas';
$string['reportquiz_stats_own_questions_approved_help'] = 'Los profesores pueden aprobar manualmente las preguntas para verificar que estén correctas. Este es el número de sus preguntas aprobados dentro de este StudentQuiz.';
$string['reportquiz_stats_own_questions_created'] = 'Número de preguntas que Usted ha contribuido';
$string['reportquiz_stats_own_questions_created_help'] = 'Número de preguntas que Usted ha contribuido a este StudentQuiz.';
$string['reportquiz_stats_own_rates_average'] = 'Su promedio de valoración recibido';
$string['reportquiz_stats_own_rates_average_help'] = 'La valoración de cada pregunta es el promedio de estrellas que recibió de la comunidad. ejemplo: Usted creó las preguntas A y B. Si su pregunta A fue valorada con 3 estrellas por la comunidad y su pregunta B fue valorada con 4 estrellas, entonces Usted recibió una valoración promedio de 3.5.';
$string['reportquiz_stats_title'] = 'Estadísticas';
$string['reportquiz_total_attempt'] = 'Veces que los usuarios corrieron el examen';
$string['reportquiz_total_obtained_marks'] = 'Calificación Total';
$string['reportquiz_total_questions_answered'] = 'Total de respuestas';
$string['reportquiz_total_questions_right'] = 'Total de respuestas correctas';
$string['reportquiz_total_questions_wrong'] = 'Respuestas equivocadas';
$string['reportquiz_total_users'] = 'Número de participantes';
$string['reportrank_table_column_approvedquestions'] = 'Puntos por preguntas aprobadas';
$string['reportrank_table_column_communitystatus'] = 'Estadísticas de la Comunidad';
$string['reportrank_table_column_correctanswers'] = 'Respuesdtas correctas';
$string['reportrank_table_column_countquestions'] = 'Puntos por preguntas creadas';
$string['reportrank_table_column_description'] = 'Descripción';
$string['reportrank_table_column_factor'] = 'Factor';
$string['reportrank_table_column_fullname'] = 'Nombre_completo';
$string['reportrank_table_column_incorrectanswers'] = 'Respuestas Incorrectas';
$string['reportrank_table_column_lastcorrectanswers'] = 'Puntos por últimos intentos correctos';
$string['reportrank_table_column_lastincorrectanswers'] = 'Puntos por últimos intentos incorrectos';
$string['reportrank_table_column_points'] = 'Puntos';
$string['reportrank_table_column_progress'] = 'Progreso personal';
$string['reportrank_table_column_quantifier_name'] = 'Nombre';
$string['reportrank_table_column_rank'] = 'Ranking';
$string['reportrank_table_column_summeanrates'] = 'Puntos por estrellas recibidas';
$string['reportrank_table_column_total_points'] = 'Puntos Totales';
$string['reportrank_table_column_value'] = 'Valor';
$string['reportrank_table_column_yourstatus'] = 'Estadísticas Personales';
$string['reportrank_table_quantifier_caption'] = 'Cómo son calculados sus puntos';
$string['reportrank_table_title'] = 'Ranking de estudiantes - 10 Superiores';
$string['reportrank_table_title_for_manager'] = 'Ranking de estudiantes';
$string['reportrank_title'] = 'Ranking';
$string['review_button'] = 'Revisar';
$string['savechanges'] = 'Guardar cambios';
$string['scheduled_task_send_digest_notification'] = 'Enviar notificación de resumen';
$string['setting_question_publishing'] = 'Publicación de pregunta';
$string['setting_question_publishing_automatic'] = 'Publicar automáticamente nuevas preguntas';
$string['setting_question_publishing_help'] = 'Las preguntas publicadas aparecen en el lote de preguntas para que otros estudiantes las tomen. Ya sea que Usted permita que todas las preguntas sean publicadas automáticamente, o requerir aprobación antes de que sean publicadas.<br> Tenga en cuenta que esta configuración solamente aplica para las preguntas recientemente creadas.';
$string['setting_question_publishing_require_approval'] = 'Requerir aprobación antes de publicarla';
$string['settings_allowallqtypes'] = 'Permitir todos los tipos de preguntas';
$string['settings_allowedqtypes'] = 'Tipos de preguntas permitidas';
$string['settings_allowedqtypes_help'] = 'Limitar los tipos de preguntas permitidas a las entradas seleccionadas';
$string['settings_anonymous'] = 'Anonimizador de estudiantes';
$string['settings_anonymous_help'] = 'Los estudiantes no pueden ver los nombres de otros.';
$string['settings_anonymous_label'] = 'Hacer estudiantes anónimos';
$string['settings_approvedquantifier'] = 'Factor de pregunta aprobada';
$string['settings_approvedquantifier_help'] = 'Puntos para cada pregunta aprobada';
$string['settings_approvedquantifier_label'] = 'Puntos para cada pregunta aprobada';
$string['settings_availability_close_answering_from'] = 'Cerrada para respuestas a partir de';
$string['settings_availability_close_submission_from'] = 'Cerrado para envío de preguntas a partir de';
$string['settings_availability_open_answering_from'] = 'Abierto para contestar desde';
$string['settings_availability_open_submission_from'] = 'Abierto para envío de preguntas desde';
$string['settings_commentdeletionperiod'] = 'Período para eliminación/edición del comentario (minutos)';
$string['settings_commentdeletionperiod_help'] = 'Configurar el período de tiempo (en minutos) que el botón para Editar/Eliminar estará disponible para que los estudiantes puedan editar/eliminar sus propios comentarios (o sus respuestas a un comentario) una vez que sea publicado. Los valores entre 0 y 60 minutos están permitidos. Si el período de eliminación se configura a 0, los estudiantes no podrán editar/eliminar sus propios comentarios. Tenga en cuenta que los profesores y los administradores siempre podrán editar/eliminar comentarios de los estudiantes, y también podrán ver el contenido de los comentarios eliminados.';
$string['settings_comment_editor_toolbar'] = 'Configuración de barra de herramientas del editor del comentario';
$string['settings_comment_editor_toolbar_des'] = 'La lista de plugins y el orden en el que son mostrados pueden ser configurados aquí';
$string['settings_email_digest_first_day'] = '¿Primer día de la semana?';
$string['settings_email_digest_first_day_help'] = 'Si Usted ha seleccionado un resumen semanal, esta opción le permite definir el primer día (comenzando a las 00h:00m:00s de ese día) del periodo de siete días. Esto es especialmente útil si la actividad inicia a media-semana, por ejemplo.';
$string['settings_email_digest_type'] = 'Tipo de resumen de Email';
$string['settings_email_digest_type_daily_digest'] = 'Resumen diario';
$string['settings_email_digest_type_help'] = 'StudentQuiz  tiene varias notificaciones que Usted puede habilitar, tal como informarle al estudiante autor de la pregunta acerca de un cambio de estado (por ejemplo, que un profesor ha aprobado una de sus preguntas). Usted puede usar esta configuración para especificar la frecuencia de estas notificaciones. Los Emails resumidos solamente serán enviados cuando haya al menos una notificación en el periodo configurado.';
$string['settings_email_digest_type_no_digest'] = 'Sin resumen (un Email por acción)';
$string['settings_email_digest_type_weekly_digest'] = 'Resumen semanal';
$string['settings_excluderoles'] = 'Excluir roles en ranking';
$string['settings_excluderoles_help'] = 'Los roles seleccionados están ocultos en los rankings; los usuarios inscritos en estos roles todavía pueden participar normalmente en la actividad.';
$string['settings_excluderoles_label'] = 'roles en ranking a excluir';
$string['settings_forcecommenting'] = 'Imponer comentarios';
$string['settings_forcecommenting_help'] = 'Imponer comentarios en el intento de pregunta';
$string['settings_forcerating'] = 'Imponer valoración';
$string['settings_forcerating_help'] = 'Imponer valoraciones en el intento de pregunta';
$string['settings_lastcorrectanswerquantifier'] = 'Factor de última respuesta correcta';
$string['settings_lastcorrectanswerquantifier_help'] = 'Puntos para cada respuesta correcta en el último intento';
$string['settings_lastcorrectanswerquantifier_label'] = 'Puntos para últimas respuestas correctas';
$string['settings_lastincorrectanswerquantifier'] = 'Factor de última respuesta incorrecta';
$string['settings_lastincorrectanswerquantifier_help'] = 'Puntos para cada respuesta incorrecta o parcialmente incorrecta en el último intento';
$string['settings_lastincorrectanswerquantifier_label'] = 'Puntos para últimas respuestas incorrectas';
$string['settings_notification'] = 'Configuraciones de la notificación';
$string['settings_questionquantifier'] = 'Factor de pregunta creada';
$string['settings_questionquantifier_help'] = 'Puntos para cada pregunta creada';
$string['settings_questionquantifier_label'] = 'Puntos para cada pregunta creada';
$string['settings_ratequantifier'] = 'Factor de valoración';
$string['settings_ratequantifier_help'] = 'Puntos por cada estrella recibida';
$string['settings_ratequantifier_label'] = 'Multiplicador para el promedio de estrellas recibidas para una pregunta';
$string['settings_removeqbehavior'] = 'Quitar plugin de comportamiento de pregunta StudentQuiz';
$string['settings_removeqbehavior_help'] = 'Esta información debería de aparecer solamente una vez durante la actualización. Nosotros le informamos que hemos detectado que su plugin de comportamiento de pregunta StudentQuiz está instalado. Este plugin ya no es necesario más, por lo que trataremos de removerlo automáticamente. Si Usted todavía ve esta configuración, por favor desinstale manualmente el plugin de comportamiento de pregunta StudentQuiz <a href="{$a}">aquí</a>.';
$string['settings_removeqbehavior_label'] = 'Quitar plugin de comportamiento de pregunta StudentQuiz';
$string['settings_reportingemail'] = 'Email para reportar comentarios ofensivos';
$string['settings_reportingemail_help'] = 'Si esta dirección Email es proporcionada, entonces aparece un enlace para Reporte junto a cada comentario. Los usuarios pueden seleccionar el enlace para reportar comentarios ofensivos. La información será enviada a esta dirección.

Si este Email se deja vacío, entonces la característica de Reporte no será mostrada ( a menos que se haya proporcionado una dirección de reporte para todo el sitio).

Puede añadirse más de una dirección Email siempre y cuando estén separadas por un puntoycoma.';
$string['settings_section_description_default'] = 'Estos valores definen los valores predeterminados cuando se crea una nueva actividad Studentquiz.';
$string['settings_section_header_comment_rating'] = 'Configuraciones de comentarios y valoraciones';
$string['settings_section_header_question'] = 'Configuraciones de pregunta';
$string['settings_section_header_ranking'] = 'Configuraciones de ranking';
$string['show_less'] = 'Mostrar menos';
$string['show_more'] = 'Mostrar más';
$string['slot_of_slot'] = 'Pregunta {$a->slot} de {$a->slots} en este lote';
$string['start_quiz_button'] = 'Iniciar Examen';
$string['state_approved'] = 'Aprobadas';
$string['state_changed'] = 'Cambiadas';
$string['state_change_tooltip_approved'] = 'La pregunta está aprobada. Haga clic aquí para cambiar el estado de esta pregunta';
$string['state_change_tooltip_changed'] = 'La pregunta está cambiada. Haga clic aquí para cambiar el estado de esta pregunta';
$string['state_change_tooltip_disapproved'] = 'La pregunta está des-aprobada. Haga clic aquí para cambiar el estado de esta pregunta';
$string['state_change_tooltip_new'] = 'La pregunta es nueva. Haga clic aquí para cambiar el estado de esta pregunta';
$string['state_column_name'] = 'Estado';
$string['state_column_name_veryshort'] = 'E';
$string['state_disapproved'] = 'Rechazadas';
$string['state_new'] = 'Nuevas';
$string['state_toggle'] = 'Cambiar estado';
$string['statistic_block_approvals'] = 'Preguntas aprobadas';
$string['statistic_block_created'] = 'Preguntas creadas';
$string['statistic_block_disapprovals'] = 'Preguntas rechazadas';
$string['statistic_block_new_changed'] = 'Preguntas nuevas/cambiadas';
$string['statistic_block_progress_available'] = 'Preguntas disponibles';
$string['statistic_block_progress_last_attempt_correct'] = 'Último intento correctas';
$string['statistic_block_progress_last_attempt_incorrect'] = 'Último intento incorrectas';
$string['statistic_block_progress_never'] = 'Preguntas nunca contestadas';
$string['statistic_block_title'] = 'Mi Progreso';
$string['studentquiz'] = 'studentquiz';
$string['studentquiz:addinstance'] = 'Añadir nueva instancia para StudentQuiz';
$string['studentquiz:emailnotifycommentadded'] = 'Notificación de adición de comentario';
$string['studentquiz:emailnotifycommentdeleted'] = 'Notificación de eliminación de comentario';
$string['studentquiz:emailnotifyquestion'] = 'Notificación de evento de pregunta';
$string['studentquiz:manage'] = 'Moderar preguntas en StudentQuiz';
$string['studentquizname'] = 'Nombre del StudentQuiz';
$string['studentquizname_help'] = 'Nombre de este StudentQuiz';
$string['studentquiz:previewothers'] = 'Previsualizar preguntas de otros en StudentQuiz';
$string['studentquiz:submit'] = 'Enviar preguntas en StudentQuiz';
$string['studentquiz:unhideanonymous'] = 'Puede ver nombres reales aun y cuando el anonimizador esté activo';
$string['studentquiz:view'] = 'Ver preguntas en StudentQuiz';
$string['submissionendbeforestart'] = 'La fecha límite para envíos no puede estar especificada anterior a la fecha  de apertura para envíos';
$string['tags'] = 'Marcas';
$string['unapprove'] = 'Desaprobar';
