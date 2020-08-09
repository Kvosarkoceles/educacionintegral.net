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
 * Strings for component 'jazzquiz', language 'es_mx', branch 'MOODLE_37_STABLE'
 *
 * @package   jazzquiz
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add'] = 'Añadir';
$string['add_question'] = 'Añadir pregunta';
$string['add_to_quiz'] = 'Añadir al examen';
$string['allow_guests'] = 'Permitir invitados';
$string['anonymous'] = 'Anónima';
$string['anonymous_answers'] = 'Respuestas anónimas (Puede verse la asistencia)';
$string['anonymous_answers_info'] = 'Las respuestas son anonimizadas en esta sesión. Su asistencia continúa siendo grabada.';
$string['answer'] = 'Respuesta correcta';
$string['a_out_of_b_responded'] = '{$a->a} / {$a->b} respondieron';
$string['a_out_of_b_voted'] = '{$a->a} / {$a->b} votaron';
$string['a_responses'] = '{$a} respuestas';
$string['a_students_answered'] = '<b>{$a}</b> estudiantes contestaron al menos una pregunta.';
$string['a_students_joined_quiz'] = '<b>{$a}</b> estudiantes se unieron al examen.';
$string['attempts'] = 'Intentos';
$string['attempt_started'] = 'Un intento ya ha sido iniciado por Usted; por favor revise debajo para continuar con su intento abierto';
$string['attendance'] = 'Asistencia';
$string['attendance_list'] = 'Lista de asistencia';
$string['click_to_show_original_results'] = 'Click para mostrar resultados originales';
$string['click_to_show_vote_results'] = 'Click para mostrar resultados de votos';
$string['closing_session'] = 'Cerrando sesión...';
$string['create_new_question'] = 'Crear pregunta nueva';
$string['default_question_time'] = 'Tiempo por defecto para pregunta';
$string['default_question_time_help'] = 'El tiempo por defecto para mostrar cada pregunta.<br>Esto puede ser anulado por preguntas individuales.';
$string['delete_question'] = 'Eliminar pregunta {$a}';
$string['download_attendance_list'] = 'Descargar lista de asistencia';
$string['download_report'] = 'Descargar reporte';
$string['download_responses'] = 'Descargar respuestas';
$string['edit'] = 'Editar';
$string['edit_page_open_session_error'] = 'Usted no puede editar el examen mientras una sesión esté abierta.';
$string['edit_question'] = 'Editar pregunta';
$string['end'] = 'Fin';
$string['error_getting_current_results'] = 'Hubo un error al obtener los resultados actuales.';
$string['error_getting_vote_results'] = 'Hubo un error al obtener los resultados de votación.';
$string['error_saving_vote'] = 'Hubo un error al  guardar su voto.';
$string['error_starting_vote'] = 'Hubo un error al comenzar la votación.';
$string['error_with_request'] = 'Hubo un error con la solicitud.';
$string['event_attempt_started'] = 'Intento iniciado';
$string['event_question_answered'] = 'Pregunta contestada para intento';
$string['exit'] = 'Salida';
$string['failed_to_end_question'] = 'No pudo terminar  la pregunta.';
$string['fullscreen'] = 'Pantalla completa';
$string['fully_anonymous'] = 'Completamente anónimo';
$string['fully_anonymous_info'] = 'Ambas, respuestas y asistencia son anonimizadas completamente en esta sesión.';
$string['goto_session'] = 'Ir a sesión en progreso';
$string['improvise'] = 'Improvisar';
$string['instructions_for_instructor'] = 'h3>Por favor asegúrese de leer las instrucciones:</h3>
 <p>Hay teclas rápidas (hotkeys) disponibles que pueden usarse cuando un campo de entrada no está enfocado.</p>
<table>
<tr>
<th>Control</th>
<th>Hotkey</th>
<th>Descripción</th>
</tr>
<tr>
<td>
<i class="fa fa-repeat"></i> Re-poll
</td>
<td>r</td>
<td>
Le permite al instructor re-plantear la pregunta que recién se ha hecho.
Esto es lo mismo que iniciar una pregunta desde la <i class="fa fa-bars"></i> lista desplegable de saltos.
</td>
</tr>
<tr>
<td>
<i class="fa fa-bar-chart"></i> Votar
</td>
<td>
Permitirle a los estudiantes que voten en sus respuestas.
El instructor puede hacer clic en una respuesta para alternar si es que puede o no ser incluida para votar o no-votar.
El hacer clic en la barra de la respuesta comenzará un juntado desde esa respuesta .
Tenga en cuenta que esta barra consumirá a la siguiente barra a la que Usted haga click.
</td>
</tr>
<tr>
<td>
<i class="fa fa-edit"></i> Improvisar
</td>
<td>
Muestra una lista de preguntas hechas para improvisación.
Escriba la pregunta en el pizarrón y pida respuestas para estas preguntas.
</td>
</tr>
<tr>
<td>
<i class="fa fa-bars"></i> Saltar
</td>
<td>
Muestra una lista de todas las preguntas planeadas para el examen.
</td>
</tr>
<tr>
<td>
<i class="fa fa-forward"></i> Siguiente
</td>
<td>
Continuar a la siguiente pregunta en la lista de preguntas planeadas.
</td>
</tr>
<tr>
<td>
<i class="fa fa-close"></i> Terminar
</td>
<td>
Terminar la pregunta actual.
</td>
</tr>
<tr>
<td>
<i class="fa fa-expand"></i> Pantalla completa
</td>
<td>
Mostrar los resultados en pantalla completa. Las respuestas no aparecerán durante una pregunta, para que Usted pueda conservarlo así por toda la sesión.
</td>
</tr>
<tr>
<td>
<i class="fa fa-square-o"></i> / <i class="fa fa-check-square-o"></i> Respuesta correcta
</td>
<td>
Le da al instructor una vista de la pregunta junto con la respuesta correcta seleccionada.
</td>
</tr>
<tr>
<td>
<i class="fa fa-square-o"></i> / <i class="fa fa-check-square-o"></i> Respuestas
</td>
<td>
Ocultar o mostrar las respuestas de estudiantes.
</td>
</tr>
<tr>
<td>
<i class="fa fa-window-close"></i> Abandonar
</td>
<td>
Salir de la sesión de examen actual.
</td>
</tr>
</table>';
$string['instructions_for_student'] = '<p>Por favor espere a que el instructor comience el examen.</p>';
$string['instructor_sessions_going'] = 'Ya hay una sesión en progreso. Por favor haga clic en el botón inferior para ir a la sesión';
$string['invalid_question_time'] = 'El tiempo de pregunta debe ser un número entero de 0 o superior';
$string['jazzquiz:addinstance'] = 'Añadir una instancia de JazzQuiz';
$string['jazzquiz:attempt'] = 'Intentar un JazzQuiz';
$string['jazzquiz:control'] = 'Controlar un JazzQuiz (Usualmente solo para instructores).';
$string['jazzquiz:editquestions'] = 'Editar preguntas para un JazzQuiz.';
$string['jazzquiz:seeresponses'] = 'Ver otras respuestas de estudiantes para calificarlas';
$string['jazzquizsettings'] = 'Configuraciones generales de JazzQuiz';
$string['join_quiz'] = 'Unirse al Examen';
$string['join_quiz_instructions'] = 'Hacer clic debajo para unirse al examen';
$string['jump'] = 'Saltar';
$string['loading'] = 'Cargando...';
$string['modulename'] = 'JazzQuiz (ExamenJazz)';
$string['modulename_help'] = '<p>
La actividad JazzQuiz (ExamenJazz) le permite a un instructor crear y administrar exámenes en tiempo real. Se pueden usar todos los tipos regulares de preguntas para examen en el  JazzQuiz.
</p>
<p>
El instructor tiene la habilidad de saltar a diferentes preguntas mientras está corriendo una sesión.
Los respondentes son mostrados en-vivo en una gráfica de barras, optimizada para proyectores. También está disponible un modo a pantalla completa.
Puede configurarse un límite de tiempo para que automáticamente se termine la pregunta, o el instructor puede manualmente terminar la pregunta y avanzar a la siguiente.
</p>';
$string['modulenameplural'] = 'JazzQuizzes';
$string['multichoice_options'] = 'Opciones Múltiples';
$string['next'] = 'Siguiente';
$string['no_attempts_found'] = 'No se encontraron intentos.';
$string['nonanonymous_session'] = 'Sesión no-anónima';
$string['nonanonymous_session_info'] = 'Esta es una sesión no-anónima. Ambas, asistencia y respuestas son grabadas.';
$string['no_session'] = 'No hay sesión abierta';
$string['no_sessions_exist'] = 'Aun no existen sesiones.';
$string['no_students_have_joined'] = 'No se han unido estudiantes';
$string['no_time_limit'] = 'Sin límite de tiempo';
$string['no_time_limit_help'] = 'Haga clic en este campo para que no haya cronómetro en esta pregunta. <p>Entonces se le pedirá al instructor que haga click en el botón de \'terminar la pregunta\' para que termine la pregunta</p>';
$string['one_student_has_joined'] = '1 estudiante se ha unido';
$string['pluginadministration'] = 'Administración de JazzQuiz';
$string['pluginname'] = 'JazzQuiz (ExamenJazz)';
$string['privacy:metadata:core_question'] = 'La actividad JazzQuiz almacena información sobre el uso de preguntas en el subsistema core_question.';
$string['privacy:metadata:jazzquiz_attempts'] = 'Detalles acerca del intento de examenpara una sesión JazzQuiz';
$string['privacy:metadata:jazzquiz_attempts:responded'] = 'Si es que la última pregunta que fue preguntada ha sido o no contestada.';
$string['privacy:metadata:jazzquiz_attempts:timefinish'] = 'El momento cuando la última pregunta en el intento fue terminada.';
$string['privacy:metadata:jazzquiz_attempts:timemodified'] = 'El momento cuando la última pregunta en el intento fue modificada.';
$string['privacy:metadata:jazzquiz_attempts:timestart'] = 'El momento cuando la última pregunta en el intento fue iniciada.';
$string['privacy:metadata:jazzquiz_attempts:userid'] = 'El ususrio que hizo el intento.';
$string['question'] = 'Pregunta';
$string['question_move_down'] = 'Mover pregunta {$a} hacia abajo';
$string['question_move_up'] = 'Mover pregunta {$a} hacia arriba';
$string['questions'] = 'Preguntas';
$string['question_time'] = 'Tiempo del examen';
$string['question_time_help'] = 'Tiempo del examen en segundos';
$string['question_will_end_in_x_seconds'] = 'La pregunta terminará en {$a} segundos';
$string['question_will_start_in_x_seconds'] = 'La pregunta iniciará en {$a} segundos';
$string['question_will_start_now'] = 'La pregunta iniciará ahorita';
$string['quit'] = 'Abandonar';
$string['quiz_not_running'] = '<p>Espere a aue su profesor comience el examen.</p><p>Use el botón de re-cargar para revisar si ya ha iniciado.</p>';
$string['repoll'] = 'Re-plantear';
$string['reports'] = 'Reportes';
$string['responses'] = 'Respuestas';
$string['review'] = 'Revisar';
$string['save_question'] = 'Guardar pregunta';
$string['select_session'] = 'Seleccionar sesión a revisar';
$string['session'] = 'Sesión';
$string['session_closed'] = 'La sesión ahora está cerrada';
$string['session_name'] = 'Nombre de sesión';
$string['session_name_required'] = 'El nombre de la sesión es necesario';
$string['short_answer'] = 'Respuesta corta';
$string['short_math_answer'] = 'Respuesta matemática corta';
$string['showing_original_results'] = 'Mostrando resultados originales';
$string['showing_vote_results'] = 'Mostrando resultados de votación';
$string['startquiz'] = 'Iniciar examen';
$string['start_session'] = 'Iniciar sesión';
$string['student'] = 'Estudiante';
$string['teacher_start_instructions'] = '<p>Iniciar un examen  para que los estudiantes lo tomen.</p><p>Defina un nombre de sesión para ayudar a buscar los resultados en una fecha posterior.</p>';
$string['unable_to_create_session'] = 'No se puede crear sesión';
$string['view'] = 'Vista';
$string['vote'] = 'Votar';
$string['wait_for_instructor'] = 'Por favor espere a que el instructor inicie la siguiente pregunta.';
$string['wait_for_question_time'] = 'Tiempo para esperar la pregunta';
$string['wait_for_question_time_help'] = 'Tiempo para esperar a que la pregunta inicie.';
$string['wait_for_students'] = 'Esperando a que los estudiantes se conecten';
$string['x_seconds_left'] = '{$a}s restantes';
$string['x_students_have_joined'] = '{$a} estudiantes se han unido.';
$string['you_already_voted'] = 'Lo sentimos, pero Usted ya ha votado.';
