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
 * Strings for component 'adaptivequiz', language 'es_mx', branch 'MOODLE_31_STABLE'
 *
 * @package   adaptivequiz
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityreports'] = 'Reporte de intentos';
$string['adaptivequiz:addinstance'] = 'Añadir un nuevo examen adaptativo';
$string['adaptivequiz:attempt'] = 'Intentar examen adaptativo';
$string['adaptivequizname'] = 'Nombre';
$string['adaptivequizname_help'] = 'Escriba el nombre de la instancia de Examen Adaptativo';
$string['adaptivequiz:reviewattempts'] = 'Revisar envíos de examen adaptativo';
$string['adaptivequiz:viewreport'] = 'Ver reportes de examen adaptativo';
$string['all_attempts_deleted'] = 'Todos los intentos de Examen Adaptativo fueron eliminados';
$string['all_grades_removed'] = 'Todas las calificaciones de Examen Adaptativo fueron eliminadas';
$string['answer'] = 'Respuesta';
$string['answerdistgraph_numrightwrong'] = 'Num erróneas(-) / Num correctas(+)';
$string['answerdistgraph_questiondifficulty'] = 'Nivel de pregunta';
$string['answerdistgraph_title'] = 'Distribución de la respuesta para {$a->firstname} {$a->lastname}';
$string['answers_display_name'] = 'Respuestas';
$string['attemptclosed'] = 'Este intento ha sido cerrado manualmente.';
$string['attemptclosedstatus'] = 'Cerrado manualmente por {$a->current_user_name} (user-id: {$a->current_user_id}) en {$a->now}.';
$string['attemptdeleted'] = 'Intento eliminado para {$a->name} enviado en {$a->timecompleted}';
$string['attemptfeedback'] = 'Retroalimentación del intento';
$string['attemptfeedback_help'] = 'La retroalimentación del intento es mostrada al usuario una vez que el intento esté terminado';
$string['attemptfinishedtimestamp'] = 'Hora de fin del intento';
$string['attemptfirst'] = 'Primer intento';
$string['attemptlast'] = 'Último intento';
$string['attemptquestion_ability'] = 'Medida de Habilidad';
$string['attemptquestion_abilitylogits'] = 'Habilidad Medida (logits)';
$string['attempt_questiondetails'] = 'Detalles de la Pregunta';
$string['attemptquestion_difficulty'] = 'Dificultad de la Pregunta (logits)';
$string['attemptquestion_diffsum'] = 'Suma de Dificultad';
$string['attemptquestion_error'] = 'Error Estándar (&plusmn;&nbsp;x%)';
$string['attemptquestion_level'] = 'Nivel de la Pregunta';
$string['attemptquestion_num'] = '#';
$string['attemptquestion_rightwrong'] = 'Correcta/Incorrecta';
$string['attemptquestion_stderr'] = 'Error Estándar (&plusmn;&nbsp;logits)';
$string['attemptsallowed'] = 'Intentos permitidos';
$string['attemptsallowed_help'] = 'El númeo de veces que un estudiante puede intentar esta habilidad';
$string['attemptstarttime'] = 'Hora de inicio del intento';
$string['attemptstate'] = 'Estado del intento';
$string['attempt_state'] = 'Estado del intento';
$string['attemptstopcriteria'] = 'Razón para interrumpir el intento';
$string['attempt_summary'] = 'Resumen del Intento';
$string['attempttotaltime'] = 'Tiempo total (hh:mm:ss)';
$string['attempt_user'] = 'Usuario';
$string['back_to_all_questions'] = '&laquo; Regresar a todas las preguntas';
$string['backtomainreport'] = 'Regresar a reportes principales';
$string['backtoviewattemptreport'] = 'Regresar a ver reporte de intentos';
$string['backtoviewreport'] = 'Regresar a reportes principales';
$string['bestscore'] = 'Mejor Puntaje';
$string['bestscorestderror'] = 'Error Estándar';
$string['browsersecurity'] = 'Seguridad del Navegador';
$string['browsersecurity_help'] = 'Si se seleciona "Pantalla completa con algo de seguridad JavaScript" el examen solamente iniciará si el estudiante tiene un navegador de Internet con JavaScript habilitado; el examen aparecerá en una ventana emergente a pantalla completa, que cubre todas las otras ventanas y que no tiene controles para  navegación, y a los estudiantes se les impide, tanto como es posible, el usar facilidades del tipo de copiar y pegar';
$string['calcerrorwithinlimits'] = 'El error estándar calculado de {$a->calerror} está dentro de los límites impuestos por la actividad {$a->definederror}';
$string['closeattempt'] = 'Cerrar intento';
$string['completeattempterror'] = 'Eror al tratar de completar registro del intento';
$string['confirmcloseattempt'] = '¿Está Usted seguro de querer cerrar y finalizar este intento de {$a->name}?';
$string['confirmcloseattemptscore'] = '{$a->num_questions} preguntas fueron contestadas y el puntaje hasta aquí es  {$a->measure} {$a->standarderror}.';
$string['confirmcloseattemptstats'] = 'Este intento fue iniciado en {$a->started} y actualizado por última vez en {$a->modified}.';
$string['confirmdeleteattempt'] = 'Confirmando la eliminación del intento de {$a->name} enviado en {$a->timecompleted}';
$string['deleteattemp'] = 'Eliminar intento';
$string['discrimination_display_name'] = 'Discriminación';
$string['downloadcsv'] = 'Descargar CSV';
$string['enterrequiredpassword'] = 'Escriba contraseña requerida';
$string['errorattemptstate'] = 'Hubo un error al determinar el estado del intento';
$string['errorclosingattempt'] = 'Registro del intento no encontrado';
$string['errorclosingattempt_alreadycomplete'] = 'Este intento ya está completo, no puede cerrarse manualmente.';
$string['errordeletingattempt'] = 'No se encontró registro del intento';
$string['errorfetchingquest'] = 'No pudo obtenerse una pregunta para el nivel {$a->level}';
$string['errorlastattpquest'] = 'Error al revisar el valor de respuesta para la última pregunta intentada';
$string['errornumattpzero'] = 'Error con el número de preguntas intentadas siendo igual a cero, pero el usuario envió una respuesta a pregunta anterior';
$string['errorsumrightwrong'] = 'La suma de respuestas correctas e incorrectas no es igual al número total de preguntas intentadas';
$string['formelementdecimal'] = 'Escriba un número decimal. Con un máximo de 10 dígitos de longitud y un máximo de 5 dígitos a la derecha del punto decimal';
$string['formelementempty'] = 'Escriba un número entero positivo del 1 al 999';
$string['formelementnegative'] = 'Escriba un número positivo del 1 al 999';
$string['formelementnumeric'] = 'Escriba un valor numérico del 1 al 999';
$string['formlowlevelgreaterthan'] = 'Los niveles más inferiores deben ser menores que el nivel más alto';
$string['formminquestgreaterthan'] = 'El número mínimo de preguntas debe ser menor que el número máximo  de preguntas.';
$string['formquestionpool'] = 'Seleccione al menos una categoría d epregunta';
$string['formstartleveloutofbounds'] = 'El nivel inicial debe ser un número entre el nivel más bajo y el más alto';
$string['formstderror'] = 'Debe ingresar un porcentaje menor a 50 y mayor o igual a 0';
$string['functiondisabledbysecuremode'] = 'Esta funcionalidad está actualmente deshabilitada';
$string['gradehighest'] = 'Calificación más alta';
$string['grademethod'] = 'Método de calificación';
$string['grademethod_help'] = 'Cuando se permiten múltiples intentos, están disponibles los siguientes métodos para calcular la calificación final del examen:

* Calificación mayor de todos los intentos
* Primer intento (todos los demás intentos son ignorados)
* Último intento (todos los demás intentos son ignorados)';
$string['graphlegend_error'] = 'Eror estándar';
$string['graphlegend_target'] = 'Nivel Objetivo';
$string['highestlevel'] = 'Nivel más alto de dificultad';
$string['highestlevel_help'] = 'El nivel más alto o más difícil del que pueden seleccionarse preguntas. Durante un intento, la actividad no irá más allá de este nivel de dificultad';
$string['highlevelusers'] = 'Usuarioa arriba del nivel-de-pregunta';
$string['id'] = 'ID';
$string['indvuserreport'] = 'Reporte individual de intentos de usuario para {$a}';
$string['leveloutofbounds'] = 'Nivel solicitado {$a->level} fuera de límites para el intento';
$string['lowestlevel'] = 'Nivel más bajo de dificultad';
$string['lowestlevel_help'] = 'El nivel más bajo o menos difícil del que pueden seleccionarse preguntas para la evaluación. Durante un intento, la actividad no irá más allá de este nivel de dificultad';
$string['lowlevelusers'] = 'Usuarios debajo del nivel-de-pregunta';
$string['maximumquestions'] = 'Númeromáximo de preguntas';
$string['maximumquestions_help'] = 'El número máximo d epreguntas que puede intentar un estudiante';
$string['maxquestattempted'] = 'Número máximo de preguntas intentadas';
$string['midlevelusers'] = 'Usuarios cerca del nivel-de-pregunta';
$string['minimumquestions'] = 'Númeromáximo d epreguntas';
$string['minimumquestions_help'] = 'El número mínimo de preguntas que debe intentar el estudiante';
$string['missingtagprefix'] = 'Falta prefijo de marca';
$string['modulename'] = 'Examen Adaptativo';
$string['modulename_help'] = 'La actividad de Examen Adpatativo le permite a un profesor crear exámenes que miden eficientemente las habilidades del examinado. Los exámenes adaptativos están compuestos de preguntas sleccionadas del banco de preguntas, que están marcadas con un puntaje de su dificultad. Las preguntas son elegidas para coincidir con el nivel estimado de habilidad del examinado actual. Si el examinado tiene éxito con una pregunta, a continuación se le presentará una pregunta más difícil. Si el examinado contesta incorrectamente una pregunta, a continuación se le presentará una pregunta menos difícil. Esta técnica evolucionará en una secuencia de preguntas que convergen en la habilidad efectiva del examinado. El examen se detiene cuando se ha determinado la habildad del examinado con la exactitud requerida.

Esta actividad es más apropiada para determinar una medida de habilidad a lo largo de una escala unidimensional. Mientras que la escala puede ser muy amplia, las preguntas deben todas proporcionar una medida de habilidad o aptitud en la misma escala. En un examen para colocación, por ejemplo, las preguntas en la parte baja de la escala que los novatos pueden contestar correctamente deberían de también ser contestables por los expertos, mientras que las preguntas en la parte alta de la escala deberían de ser únicamente contestables por expertos o por una adivinanza afortunada. Las preguntas que no discriminen entre los sustentantes de diferentes habilidades harán ineficiente el examen y pueden proporcionar resultados inconclusos.

Las preguntas en el Examen Adaptativo deben de

* ser calificadas automáticamente como correcta/incorrecta
* ser marcadas con su nivel de dificultad usando \'adpq_\' seguido por un número entero positivo que esté dentro del rango para el examen

El Examen Adaptativo puede configurarse para

* definir el rango de dificultades-de-pregunta/habilidades-de-usuario a medirse. 1-10, 1-16, and 1-100 son ejemplos de rangos válidos.
* definir la precisión requerida antes de que se detenga el examen. A menudo un error de 5% en la medición de la habilidad es una regla para detenerse apropiada
* requerir un número mínimo de preguntas a contestarse
* requerir un número máximo de preguntas a contestarse

Esta descripción y el procedimiento para examinar en esta actividad están basados en  <a href="http://www.rasch.org/memo69.pdf">Computer-Adaptive Testing: A Methodology Whose Time Has Come</a> por John Michael Linacre, Ph.D. MESA Psychometric Laboratory - University of Chicago. MESA Memorandum No. 69.';
$string['modulenameplural'] = 'Examen Adaptativo';
$string['na'] = 'n/d';
$string['name'] = 'Nombre';
$string['noattemptrecords'] = 'Sin registros de intento para este estudiante';
$string['noattemptsallowed'] = 'No más intentos permitidos en esta actividad';
$string['nonewmodules'] = 'No se encontraron instancias de Examen Adaptativo';
$string['nopermission'] = 'Usted no tiene permiso para ver este recuso';
$string['notinprogress'] = 'Este intento no está en progreso.';
$string['notyourattempt'] = 'Este no es su intento para la actividad';
$string['numofattemptshdr'] = 'Número de intentos';
$string['numright'] = 'Núm correctos';
$string['numwrong'] = 'Núm incorrectos';
$string['percent_correct_display_name'] = '% Correctos';
$string['pluginadministration'] = 'Examen Adaptativo';
$string['pluginname'] = 'Examen Adaptativo';
$string['questionanalysisbtn'] = 'Análisis de Pregunta';
$string['questionnumber'] = 'Pregunta #';
$string['questionpool'] = 'Lote de Preguntas';
$string['questionpool_help'] = 'Seleccione la(s) categoría(s) de donde se sacarán las preguntas para un intento.';
$string['question_report'] = 'Análisis de Pregunta';
$string['questionsattempted'] = 'Suma de preguntas intentadas';
$string['questions_report'] = 'Reporte de Preguntas';
$string['recentactquestionsattempted'] = 'Preguntas intentadas: {$a}';
$string['recentattemptstate'] = 'Inicio del intento:';
$string['recentcomplete'] = 'Completado';
$string['recentinprogress'] = 'En progreso';
$string['requirepassword'] = 'Requiere contraseña';
$string['requirepassword_help'] = 'Se les pide a los estudiantes que escriban una contraseña antes de iniciar sus intentos';
$string['requirepasswordmessage'] = 'Para intentar este examen Usted necesita saber la contraseña del examen';
$string['resetadaptivequizsall'] = 'Eliminar todos los intentos de Examen Adaptativo';
$string['result'] = 'Resultado';
$string['reviewattempt'] = 'Revisar intento';
$string['reviewattemptreport'] = 'Reviesando intento por {$a->fullname} enviado en {$a->finished}';
$string['score'] = 'Puntaje';
$string['scoring_table'] = 'Tablas de Puntaje';
$string['standarderror'] = 'Error estándar para detenerse';
$string['standarderrorhdr'] = 'Error estándar';
$string['standarderror_help'] = 'Cuando la cantidad de error en la medición de la habilidad del usuario disminuye por debajo de esta cantidad, el examen se detendrá. Ajuste esta cantidad desde el valor por defecto de 5% para requerir más o menos precisión en la medición de habilidad';
$string['startattemptbtn'] = 'Iniciar intento';
$string['startinglevel'] = 'Nivel inicial de dificultad';
$string['startinglevel_help'] = 'Cuando el estudiante inicie un intent, la actividad seleccionará aleatoriamente una pregunta que coincida con elnivel de dificultad';
$string['statistic'] = 'Estadística';
$string['stopingconditionshdr'] = 'Condiciones para detenerse';
$string['submitanswer'] = 'EWnviar respuesta';
$string['times_used_display_name'] = 'Veces Usada';
$string['unknownuser'] = 'Usuario desconocido';
$string['updateattempterror'] = 'Eror al tratar de actualizar registro de intento';
$string['user'] = 'Usuario';
$string['value'] = 'Valor';
$string['viewreportbtn'] = 'Ver reporte';
$string['wrongpassword'] = 'La contraseña es incorrecta';
