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
 * Strings for component 'activequiz', language 'es_mx', branch 'MOODLE_32_STABLE'
 *
 * @package   activequiz
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activequiz:addinstance'] = 'Añadir una instancia de Examen Activo';
$string['activequiz:attempt'] = 'Intentar un Examen Activo';
$string['activequiz:control'] = 'Controlar un Examen Activo (usualmente para instructores solamente).';
$string['activequiz:editquestions'] = 'Editar preguntas para un Examen Activo';
$string['activequizintro'] = 'Introducción';
$string['activequiz:seeresponses'] = 'Ver las respuestas de otros estudiantes para calificarlas';
$string['activequizsettings'] = 'Configuraciones generales de Examen Activo';
$string['activequiz:viewownattempts'] = 'Permitirles a los estudiantes que vean sus propios intentos de un examen';
$string['activitygrades'] = 'Calificaciones de la actividad:';
$string['addquestion'] = 'Añadir pregunta';
$string['addtoquiz'] = 'Añadir';
$string['anonymousresponses'] = 'Hacer anónimas las respuestas del estudiante';
$string['anonymousresponses_help'] = 'Hacer anónimas las respuestas del estudiante para la vista del instructor, de forma tal que si se mostraran sus pantallas, no se verán los nombres de los estudiantes ni los nombres de sus grupos';
$string['anonymoususer'] = 'Usuario anónimo';
$string['assessed'] = 'Evaluada';
$string['assessed_help'] = 'Seleccione esta casilla para hacer su examen evaluado';
$string['attempt_grade'] = 'Calificación del intento';
$string['attemptno'] = 'Número del intento';
$string['attempts'] = 'Intentos';
$string['attemptstarted'] = 'Un intento ya ha sido iniciado por Usted; por favor, haga click debajo para continuar con su intento';
$string['attemptstartedalready'] = 'Un intento ya ha sido iniciado por uno de los miembros de su equipo';
$string['attemptview'] = 'Ver intento';
$string['cantaddquestiontwice'] = 'Usted no puede añadir la misma pregunta a un examen más de una vez';
$string['cantinitattempts'] = 'No pueden inicializarse intentos para Usted';
$string['closesession'] = 'Cerrar sesión';
$string['closingsession'] = 'Cerrando sesión...';
$string['countdatasetlabel'] = 'Número de respuestas';
$string['defaultquestiontime'] = 'Tiempo por defecto para pregunta';
$string['defaultquestiontime_help'] = 'El tiempo por defecto para mostrar cada pregunta.<br /> Esto puede ser anulado por preguntas individuales.';
$string['edit'] = 'Editar examen';
$string['editpage_opensession_error'] = 'Usted no puede editar una pregunta de examen mientras está abierta una sesión.';
$string['enabledquestiontypes'] = 'Habilitar tipos de preguntas';
$string['enabledquestiontypes_info'] = 'Tipos de preguntas que son habilitadas para usarse dentro de instancias de la actividad de examen activo.';
$string['endquestion'] = 'Teminar pregunta';
$string['errorregrade'] = 'Lo sentimos, ocurrió un error al intentar re-calificar todos los exámenes';
$string['eventattemptstarted'] = 'Intento iniciado';
$string['eventattemptviewed'] = 'Intento visto';
$string['eventquestionanswered'] = 'Pregunta contestada para el intento';
$string['eventquestionmanuallygraded'] = 'Pregunta calificada manualmente';
$string['feedbackintro'] = 'Retroalimentación para su pregunta. Por favor, espere a que el instructor inicie la siguiente pregunta';
$string['firstsession'] = 'Primera sesión';
$string['fullanonymize'] = 'Anonimizar completamente las respuestas del estudiante';
$string['fullanonymize_help'] = 'Anonimizar completamente las respuestas del estudiante. Por favor, tenga en cuenta que si selecciona esta opción, las respuestas de este período de sesiones no serán calificadas y aplicado a los estudiantes.';
$string['gatheringresults'] = 'Juntando resultados...';
$string['gotosession'] = 'Ir a sesión en progreso';
$string['grademethod'] = 'Método para calificar la sesión';
$string['grademethod_help'] = 'Este es el método que es usado al calificar. Este método es para calcular la calificación con sesiones múltiples en el mismo Examen Activo';
$string['gradesettings'] = 'Configuraciones de la calificación';
$string['groupattendance'] = 'Permitir participación en equipo';
$string['groupattendance_help'] = 'Si se habilita esta casilla, el estudiante que toma el examen puede seleccionar cuales estudiantes participan dentro de su equipo.';
$string['grouping'] = 'Agrupamiento';
$string['grouping_help'] = 'Selecione los agrupamientos que le gustaría usar para agrupar a los estudiantes';
$string['groupmembership'] = 'Membresía del grupo';
$string['groupworksettings'] = 'Configuraciones del grupo';
$string['hide_correct_answer'] = 'Ocultar la respuesta correcta';
$string['hidenotresponded'] = 'Ocultar a los-que-no-contestaron';
$string['hidestudentresponses'] = 'Ocultar respuestas';
$string['highestsessiongrade'] = 'Calificación más alta de la sesión';
$string['indvquestiontime'] = 'Tiempo para pregunta';
$string['indvquestiontime_help'] = 'Tiempo en segundos para la pregunta.';
$string['instructorquizinst'] = '<p>Por favor, espere en esta página hasta que los estudiantes se hayan conectado. Una vez que se haga click en <b>iniciar examen</b>, el examen iniciará con la primera pregunta</p>
<p>
<p>Controles:</p>
<ul>
<li>
Re-preguntar pregunta
<ul>
<li>
Le permite al instructor re-preguntar la pregunta actual o la anterior (disponible durante la revisión de una pregunta).
</li>
</ul>
</li>
<li>
Siguiente pregunta
<ul>
<li>
Continuar a la siguiente pregunta (disponible durante la revisión de una pregunta).
</li>
</ul>
</li>
<li>
Terminar pregunta
<ul>
<li>
Terminar con la pregunta actual. También le permite al instructor terminar tempranamente una pregunta cronometrada (disponible mientras está corriendo una pregunta). <i>Si la pregunta no tiene límite de tiempo, el instructor necesitará hacer click en <b>terminar pregunta.</b></i>
</li>
</ul>
</li>
<li>
Ir a pregunta
<ul>
<li>
Abre una caja de diálogo para dirigir a todos los usuarios hacia una pregunta específica del examen (disponible durante la revisión de una pregunta).
</li>
</ul>
</li>
<li>
Cerrar sesión
<ul>
<li>
Cierra la sesión actual, y también todos los intentos de los estudiantes. Esto calificará automáticamente todos los intentos (disponible en cualquier momento).
</li>
</ul>
</li>
<li>
Re-cargar resultados
<ul>
<li>
Re-cargar las respuestas del estudiante en la caja de información. Le permite al instructor que pueda ver cuantos estudiantes o equipos han respondido y cuanto todavía faltan de responder (disponible durante la revisión de una pregunta).
</li>
</ul>
</li>
<li>
Ocultar/Mostrar los que no-respondieron
<ul>
<li>
Ocultar o mostrar la caja de información que muestra cuantos estudiantes o equipos han respondido y cuales estudiantes o grupos aún faltan de responder (disponible cuando se está preguntando una pregunta).
</li>
</ul>
</li>
<li>
Mostrar la respuesta correcta
<ul>
<li>
Le da la instructor una vista de la pregunta con la respuesta correcta seleccionada (disponible durante la revisión de una pregunta). Esto no mostrará la respuesta correcta para los tipos de pregunta con calificación manual, como los ensayos o preguntas de dibujar.
</li>
</ul>
</li>
</ul>
</p>';
$string['instructorsessionsgoing'] = 'Hay una sesión en progreso. Por favor, haga click en el botón inferior apara ir a la sesión';
$string['invalidattemptaccess'] = 'Usted no tiene permiso para acceder a este intento';
$string['invalidgroupid'] = 'Se requiere una ID de grupo válida para estudiantes';
$string['invalid_indvquestiontime'] = 'El tiempo para la pregunta debe ser un número entero igual o mayor a 0';
$string['invalid_numberoftries'] = 'El número de intentos debe de ser un número entero igual o mayor a 1';
$string['invalid_points'] = 'Los puntos son necesarios y deben de ser un número mayor de 0';
$string['invalidquestionattempt'] = 'Pregunta inválida  ($a->questionname) siendo añadida al intento de examen.';
$string['isanonymous'] = 'Todas las respuestas a este examen activo son anónimas';
$string['joinquiz'] = 'Unirse al examen';
$string['joinquizinstructions'] = 'Haga click debajo para unirse al examen';
$string['jumptoquesetioninstructions'] = 'Seleccione una pregunta a la que le gustaría ir:';
$string['jumptoquestion'] = 'Ir a pregunta';
$string['lastsession'] = 'Última sesión';
$string['loading'] = 'Inicializando Examen';
$string['manualcomment'] = 'Comentario manual';
$string['manualcomment_help'] = 'El comentario que los instructores pueden añadir al calificar un intento';
$string['marks'] = 'Calificaciones';
$string['marks_help'] = 'La calificación numérica para cada pregunta, y el puntaje general del intento';
$string['modulename'] = 'Examen Activo';
$string['modulename_help'] = '<p>La actividad de Examen Activo le permite a un instructor crear y administrar exámenes en tiempo-real. Pueden usarse todos los tipos regulares de preguntas dentro del Examen Activo.</p>
<p>Examen Activo permite la participación individual o en equipos. Es posible la concurrencia (participación) en equipos, por lo que los puntos dados durante el Examen Activo solamente serán aplicados a los participantes que concurrieron (asistieron) a la sesión. Las preguntas pueden configurarse para permitir intentos múltiples. Puede configurarse un límite de tiempo para que se termine la pregunta automáticamente, o el instructor puede terminar la pregunta manualmente y avanzar a la siguiente. El instructor también tiene la habilidad para saltar a diferentes  preguntas mientras corre la sesión. El instructor puede monitorear al grupo o a una participación individual, las respuestas de los participantes en tiempo-real  y la pregunta que se está preguntando. </p>
<p>Cada intento del examen es calificado automáticamente en forma similar a un examen regular (con la excepción de las preguntas de tipo Ensayo y PoodLL) y la calificación es grabada en el Libro de Calificaciones. Se puede hacer la calificación automática para la participación en equipo al transferirle la calificación desde el respondente individual a los otros miembros del equipo. </p>
<p>El instructor tiene opciones para mostrar pistas, dar retroalimentación y mostrar las respuestas correctas a los estudiantes cuando se termine el examen.</p>
<p>Los Exámenes Activos pueden usarse como un vehículo para implementar el Aprendizaje Basado en Equipo dentro de Moodle.</p>';
$string['modulenameplural'] = 'Exámenes activos';
$string['nextquestion'] = 'Siguiente pregunta';
$string['nochangegroups'] = 'Usted no puede cambiar equipos después de crear sesiones o si no se definieron agrupamientos para este curso.';
$string['nochangegroups_label'] = '&nbsp;';
$string['nofeedback'] = 'No hay retroalimentación para esta pregunta';
$string['no_questions'] = 'No hay preguntas que se hayan añadido a este examen.';
$string['nosession'] = 'No hay ninguna sesión abierta';
$string['notime'] = 'Sin límte-de-tiempo';
$string['notime_help'] = 'Elija este campo para que no haya cronómetro en esta pregunta. <p>Entonces se le pedirá al instructor que haga click sobre el botón de \'terminar la pregunta\' para que se termine la pregunta</p>';
$string['notresponded'] = 'Número de no-respondentes del total de intentos';
$string['notries'] = 'No te quedan más intentos para esta pregunta';
$string['numberoftries'] = 'Número de intentos';
$string['numberoftries_help'] = 'Número de intentos de pregunta que intentará el usuario. Los estudiantes continúan limitados por el límite de tiempo para la pregunta';
$string['overallgrade'] = 'Calificación promedio: {$a->overallgrade} / {$a->scale}';
$string['percentagedatasetlabel'] = 'Porcentaje de respuestas totales';
$string['pluginadministration'] = 'Adminsitración del Examen Activo';
$string['pluginname'] = 'Examen Activo';
$string['points'] = 'Puntos de Preguntas';
$string['points_help'] = 'El número de puntos que Usted quiere que valga esta pregunta';
$string['qdeleteerror'] = 'No pudo eliminarse la pregunta';
$string['qdeletesucess'] = 'Pregunta exitosamente eliminada';
$string['qmoveerror'] = 'No pudo moverse la pregunta';
$string['qmovesuccess'] = 'Pregunta movida exitosamente';
$string['question'] = 'Pregunta';
$string['questiondelete'] = 'Eliminar pregunta {$a}';
$string['questionedit'] = 'Editar pregunta';
$string['questionfinished'] = 'Pregunta terminada; esperando resultados';
$string['questionlist'] = 'Lista de Preguntas';
$string['questionmovedown'] = 'Mover pregunta {$a} hacia abajo';
$string['questionmoveup'] = 'Mover pregunta {$a} hacia arriba';
$string['quiznotrunning'] = 'El examen de momento no está corriendo - espere a que su profesor lo inicie. Use el botón de \'Recargar\' para recargar la página para revisar nuevamente';
$string['regradeallgrades'] = 'Re-calificar todas las calificaciones';
$string['reload_results'] = 'Re-cargar Resultados';
$string['repollquestion'] = 'Re-preguntar pregunta';
$string['response_attempt_controls'] = 'Editar/Ver Intento';
$string['responses'] = 'Ver respuestas';
$string['reviewafter'] = 'Después de que las sesiones hayan cerrado';
$string['reviewoptionsettings'] = 'Opciones para revisar';
$string['savequestion'] = 'Guardar pregunta';
$string['scale'] = 'Calificación Máxima';
$string['scale_help'] = 'Este valor (número entero) escalará los puntos que hubiera recibido en el examen a este valor.';
$string['select_group'] = 'Seleccione su equipo';
$string['selectsession'] = 'Seleccionar sesión para verla:&nbsp;&nbsp;&nbsp;&nbsp;';
$string['sessionaverage'] = 'Promedio de la sesión';
$string['sessionclosed'] = 'La sesión ahora  está cerrada';
$string['sessionname'] = 'Nombre de la sesión';
$string['sessionname_required'] = 'Se requiere el nombre de la sesión';
$string['sessionnametext'] = '<span style="font-weight: bold">Sesión: </span>';
$string['show_correct_answer'] = 'Mostrarrespuesta correcta';
$string['showhistoryduringquiz'] = 'Mostrar historia de respuesta';
$string['showhistoryduringquiz_help'] = 'Mostrar la historia de respuesta del estudiante/grupo para esta pregunta al revisar las respuestas a una pregunta durante un examen.';
$string['shownotresponded'] = 'Mostrar los que no-respondieron';
$string['showstudentresponses'] = 'Mostrar respuestas';
$string['startedon'] = 'Iniciado en';
$string['startquiz'] = 'Iniciar examen';
$string['start_session'] = 'Iniciar sesión';
$string['studentquizinst'] = '<p>Por favor, espere a que el instructor inicie el examen. Una vez que haya iniciado Usted verá un cronómetro descendiente para la primera pregunta</p>';
$string['successregrade'] = 'Examen re-calificado exitosamente';
$string['teacherjoinquizinstruct'] = 'Use esto si Usted mismo quiere intentar hacer un examen<br />(Usted también necesitará iniciar el examen en una ventana separada)';
$string['teacherstartinstruct'] = 'Use esto para iniciar un examen para que lo contesten los estudiantes<br />Use la caja-de-texto para definir un nombre para esta sesión (para ayudarle cuando busque los resultados después).';
$string['theattempt'] = 'El intento';
$string['theattempt_help'] = 'Si es que el estudiante puede o no revisar el intento en absoluto.';
$string['timecompleted'] = 'Tiempo finalizado';
$string['timemodified'] = 'Tiempo modificado';
$string['timertext'] = 'Su pregunta terminará y se auto-enviará en :';
$string['trycount'] = 'A Usted le quedan {$a->tries} intentos más.';
$string['unabletocreate_session'] = 'No se puede crear sesión';
$string['view'] = 'Ver examen';
$string['viewstats'] = 'Ver estadísticas del examen';
$string['waitforquestion'] = 'Esperando a que se envíe la pregunta en:';
$string['waitforquestiontime'] = 'Tiempo para esperar la pregunta';
$string['waitforquestiontime_help'] = 'El tiempo a esperar para que una pregunta inicie/antes_de_iniciar.';
$string['waitforrevewingend'] = 'El instructor ahorita está revisando la pregunta anterior. Por favor, espere a que inicie la siguiente pregunta';
$string['waitstudent'] = 'Esperando a que se conecten los estudiantes';
$string['workedingroups'] = 'Se trabajará en equipos.';
$string['workedingroups_help'] = 'Active esta casilla para indicar que los estudiantes trabajarán en equipos. Asegúrese de seleccionar un grupo debajo.';
