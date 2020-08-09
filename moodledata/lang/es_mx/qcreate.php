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
 * Strings for component 'qcreate', language 'es_mx', branch 'MOODLE_35_STABLE'
 *
 * @package   qcreate
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityclosed'] = 'La actividad está cerrada.';
$string['activitygrade'] = 'A Usted le han otorgado una calificación total de  {$a->grade} / {$a->outof} par esta actividad.';
$string['activityname'] = 'Nombre de la actividad';
$string['activityopen'] = 'La actividad está abierta.';
$string['addminimumquestionshdr'] = 'Número requerido de Preguntas del Tipo (opcional)';
$string['addmorerequireds'] = 'Añadir más tipos de preguntas requeridas';
$string['allandother'] = 'Para permitir todos los tipos de preguntas, seleccione \'{$a}\' y no seleccione nada más.';
$string['allowall'] = 'Permitir todos los tipos d epreguntas';
$string['allowedqtypes'] = 'Tipos d ePreguntas Valoradas';
$string['allowedqtypes_help'] = 'Aquí es donde Usted especifica los tipos d epreguntas que están permitidos. Si Usted selecciona \'Permitir todos los tipos d epreguntas\', entonces los estudiantes puedenhacer cualquier tipo de pregunta del total especificado en \'Total de Preguntas Evaluadas\'.';
$string['allquestions'] = '0 - (Todas las preguntas)';
$string['alreadydone'] = 'Usted ha hecho {$a} preguntas de este tipo.';
$string['alreadydoneextra'] = 'Usted ha hecho {$a} preguntas extra de este tipo.';
$string['alreadydoneextraone'] = 'Usted ha hecho una pregunta extra de este tipo.';
$string['alreadydoneone'] = 'Usted ha hecho una pregunta de este tipo.';
$string['and'] = '{$a} Y';
$string['andmorenewquestions'] = 'y {$a} nueva(s) pregunta(s) más.';
$string['attemptqcreatenow'] = 'Intentar ahora creación de pregunta';
$string['automaticgrade'] = 'A Usted le han otorgado una calificación automática de {$a->grade} / {$a->outof} para estas preguntas, dado que Usted ha hecho {$a->done} de {$a->required} preguntas requeridas.';
$string['availability'] = 'Disponibilidad';
$string['betterthangrade'] = 'preguntas con calificación  <strong>manual</strong> igual o mejor a';
$string['clickhere'] = 'Elija aquí para crear una pregunta de tipo \'{$a}\'.';
$string['clickhereanother'] = 'Elija aquí para crear otra pregunta de tipo \'{$a}\'.';
$string['close'] = 'Cerrar actividad';
$string['closebeforeopen'] = 'No pudo actualizarse la actividad de creación de pregunta. Usted ha especificado una fecha de cierre anterior a la fecha de apertura.';
$string['closeon'] = 'Cerrar en';
$string['comma'] = '{$a},';
$string['comment'] = 'Comentario';
$string['completionquestions'] = 'El estudiante debe de crear:';
$string['completionquestionsdesc'] = 'El estudiante debe crear al menos {$a} pregunta(s)';
$string['completionquestionsgroup'] = 'Requerir preguntas';
$string['completionquestions_help'] = 'Si se habilita, esta actividad se considera completa cuando el estudiante haya creado ese número de preguntas (valoradas o no).';
$string['confirmdeletequestion'] = '¿Está Usted seguro de querer eliminar esta pregunta?';
$string['createdquestions'] = 'Preguntas creadas';
$string['creating'] = 'Creando Preguntas';
$string['deletegrades'] = 'Eliminar preguntas creadas y calificaciones manuales';
$string['donequestionno'] = 'Usted ha completado {$a->done} de {$a->no} preguntas de tipo \'{$a->qtypestring}\'. Éstas estaán enlistadas debajo.';
$string['eventeditpageviewed'] = 'Página de edición de creación de pregunta vista';
$string['eventoverviewviewed'] = 'Página de vista general de creación de pregunta vista';
$string['eventquestiongraded'] = 'Preguntas Evaluadas';
$string['eventquestionregraded'] = 'Preguntas Re-calificadas';
$string['exportgood'] = 'Exportar preguntas buenas';
$string['exportgoodquestions'] = 'Exportar las Preguntas que Hayan Sido Valoradas Arriba de una Calificación Seleccionada';
$string['exportnaming'] = 'Ponerle a los Nombres de Preguntas Exportadas Prefijo Con';
$string['exportquestions'] = 'Exportar preguntas a archivo';
$string['exportselection'] = 'Exportar solamente estas preguntas';
$string['extraqdone'] = 'Usted ha hecho una pregunta extra.';
$string['extraqgraded'] = 'Una pregunta de cualquiera de los tipos inferiores será calificada';
$string['extraqsdone'] = 'Usted ha hecho {$a->extraquestionsdone} preguntas extra.';
$string['extraqsgraded'] = '{$a->extrarequired} preguntas de cualquiera de los tipos inferiores será calificada';
$string['finalgrade'] = 'Calificación final para {$a}';
$string['fullstop'] = '{$a}.';
$string['grade'] = 'Calificar';
$string['gradeallautomatic'] = 'Las calificaciones son completamente automáticas, no hay calificación manual.';
$string['gradeallmanual'] = 'Las calificaciones son completamente manuales, no hay calificación automática.';
$string['gradeavailablehtml'] = '{$a->username} ha calificado su pregunta creada
\'<i>{$a->questionname}</i>\' para \'<i>{$a->qcreate}</i>\'<br /><br />
Usted puede verla en la  <a href="{$a->url}">página de la actividad</a>.';
$string['gradeavailablesmall'] = '{$a->username} ha calificado su pregunta creada para {$a->qcreate}';
$string['gradeavailabletext'] = '{$a->username} ha calificado su pregunta creada \'{$a->questionname}\' para \'{$a->qcreate}\'

Usted puede verla en la página:

{$a->url}';
$string['gradecomment'] = 'Comentario a la pregunta \'{$a->qname}\' creada por {$a->user}';
$string['graded'] = 'Calificada';
$string['grade_help'] = 'Esta es la calificación total de la actividad quew se reporta al Libro de calificaciones. Es posible configurarla a \'Sin calificación\', para que la actividad no sea calificada.';
$string['grademixed'] = 'LA calificación se realiza {$a->automatic}%% automaticamente, {$a->manual}%% manualmente.';
$string['gradequestions'] = 'Calificar preguntas';
$string['graderatio'] = 'Proporción de Calificación Automática / Manual';
$string['graderatio_help'] = 'Aquí Usted especifica cómo se dividirá la Calificación Total: el porcentaje para la Calificación Automática está a la izquierda, y para la Calificació Manual a la derecha. LA calificación automática es la calificación \'otorgada\' por el sistema simplemente por hacer una pregunta.';
$string['graderatiois'] = 'Proporción de Calificación Automática / Manual: {$a}';
$string['graderatiooptions'] = '{$a->automatic} / {$a->manual}';
$string['gradesdeleted'] = 'Preguntas y calificaciones manuales eliminadas';
$string['grading'] = 'Calificando';
$string['indicator:cognitivedepth'] = 'Creación de pregunta cognitiva';
$string['indicator:cognitivedepth_help'] = 'Este indicador está basado en la profundidad cognitiva alcanzada por el estudiante en una actividad de creación de pregunta.';
$string['indicator:socialbreadth'] = 'Creación de pregunta social';
$string['indicator:socialbreadth_help'] = 'Este indicador está basado en la amplitud social alcanzada por el estudiante en una actividad de creación de pregunta.';
$string['intro'] = 'Introducción';
$string['invalidqcreatezid'] = 'ID de creación de pregunta inválido';
$string['manualgrade'] = 'Un profesor le ha otorgado a Usted una calificación de {$a->grade} / {$a->outof} para las preguntas que ha hecho.';
$string['marked'] = 'Evaluada';
$string['messageprovider:gradernotification'] = 'Notificación de pregunta creada';
$string['messageprovider:studentnotification'] = 'Notificación de pregunta calificada';
$string['minimumquestions'] = 'Mínimo de Preguntas';
$string['minimumquestions_help'] = 'En este menú Usted puede especificar cuantas preguntas de un tipo específico deben de crear los estudiantes.';
$string['modulename'] = 'Creación de Pregunta';
$string['modulename_help'] = 'La actividad de creación de preguntas le permite a un profesor pedirle a los estudiantes que creen preguntas; pueden especificarse, el número de preguntas requeridas, los tipos de preguntas disponibles y el número de preguntas requeridas para cada tipo de pregunta.';
$string['modulenameplural'] = 'Creaciones de Preguntas';
$string['needsgrading'] = 'Requiere calificarse';
$string['needsregrading'] = 'Necesita re-calificarse';
$string['needtoallowatleastoneqtype'] = 'Usted debe de permitir al menos un tipo de pregunta';
$string['needtoallowqtype'] = 'Usted necesita permitir el tipo de pregunta \'{$a}\' si es que Usted quiere pedir que se cree un número mínimo de preguntas de este tipo.';
$string['newquestions'] = 'Nuevas preguntas creadas';
$string['noofquestionstotal'] = 'Preguntas Totales Calificadas';
$string['noofquestionstotal_help'] = 'Este es el número total de preguntas que deben de crear los estudiantes. Este númeor debe de ser igual a, o mayor de, el mínimo número d epreguntas requeridas';
$string['noquestions'] = 'No se creado pregunta alguna';
$string['noquestionsabove'] = 'No hay preguntas con una calificación manual configurada arriba de {$a->betterthan} en la categoría \'{$a->categoryname}\'.';
$string['notgraded'] = 'Todavía sin calificar';
$string['nothingtosave'] = 'Nada que guardar';
$string['notifications'] = 'Notificaciones';
$string['nousers'] = 'No hay usuarios inscritos en este curso / grupo.';
$string['open'] = 'Actividad abierta';
$string['openafterclose'] = 'No pudo actualizarse la actividad de creación de pregunta. Usted ha especificado una fecha de apertura posterior a la fecha de cierre.';
$string['openclosedatesupdated'] = 'Fechas de apertura y cierre de actividad de creación de pregunta actualizadas';
$string['open_help'] = 'Usted puede especificar el horario en el que la actividad de creación de preguntas está accesible para que las personas hagan preguntas. Antes d ela hora de apertura, y después de la hora de cierre, los estudiantes no podrán crear preguntas.';
$string['openmustbemorethanclose'] = 'El tiempo par abrir la actividad debe de ser un tiempo anterior al de cerrar la actividad';
$string['openon'] = 'Abrir en';
$string['overview'] = 'Vista general';
$string['pagesize'] = 'Número de preguntas a mostrar por página';
$string['pluginadministration'] = 'Administración de la creación de Preguntas';
$string['pluginname'] = 'Creación de Preguntas';
$string['preview'] = 'Vista previa';
$string['previewquestion'] = 'Previsualizar pregunta';
$string['qcreate'] = 'qcreate';
$string['qcreate:addinstance'] = 'Añadir una instancia de creación de pregunta';
$string['qcreatecloses'] = 'La acividad de creación de pregunta cierra';
$string['qcreateeventcloses'] = '{$a} se cierra';
$string['qcreateeventopens'] = '{$a} se abre';
$string['qcreate:grade'] = 'Calificar pregunta';
$string['qcreateopens'] = 'La acividad de creación de pregunta abre';
$string['qcreate:receivegradernotifications'] = 'Recibir notificaciones para Calificador';
$string['qcreate:receivestudentnotifications'] = 'Recibir notificaciones para estudiante';
$string['qcreate:submit'] = 'Enviar pregunta';
$string['qcreate:view'] = 'Ver actividad de creación de preguntas';
$string['qsgraded'] = '{$a} pregunta(s) de cualquiera de estos tipos será(n) calificada(s):';
$string['qtype'] = 'Tipo de Pregunta';
$string['qtype_help'] = 'En este menú Usted puede especificar cual tipo de pregunta deberán de crear los estudiantes.';
$string['questiongrade'] = 'Calificación para pregunta  \'{$a->qname}\' creada por {$a->user}';
$string['questions'] = 'Pregunta(s) para completar esta actividad';
$string['questionscreated'] = '{$a} pregunta(s) creada(s)';
$string['questiontogradehtml'] = '{$a->username} ha creado una nueva pregunta <i>\'{$a->questionname}\'</i>
para <i>\'{$a->qcreate}\' en {$a->timeupdated}</i><br /><br />
Está <a href="{$a->url}">disponible en el sitio web</a>.';
$string['questiontogradesmall'] = '{$a->username} ha creado una nueva pregunta para {$a->qcreate}.';
$string['questiontogradetext'] = '{$a->username} ha creado una nueva pregunta  \'{$a->questionname}\'
para \'{$a->qcreate}\' en {$a->timeupdated}

Está disponible aquí:

{$a->url}';
$string['requiredanyplural'] = '{$a->no} preguntas de cualquier tipo son requeridas';
$string['requiredanysingular'] = 'Se requiere una pregunta de cualquier tipo';
$string['requiredplural'] = '{$a->no} preguntas del tipo \'{$a->qtypestring}\' son requeridas';
$string['requiredquestions'] = 'Preguntas Requeridas par Crear:';
$string['requiredsingular'] = 'Una pregunta del tipo \'{$a->qtypestring}\' es requerida';
$string['saveallfeedback'] = 'Guardar toda mi retroalimentación';
$string['saveallfeedbackandgrades'] = 'Guardar todas las calificaciones y retroalimentación';
$string['search:activity'] = 'Actvidades de creación de pregunta';
$string['selectone'] = 'Seleccionar Una ...';
$string['sendgradernotifications'] = 'Notificar a los Calificadores';
$string['sendgradernotifications_help'] = 'Si se habilita, los calificadores (usualmente profesores) recibirán un mensaje cuando un estudiante cree una nueva pregunta. Los métodos de mensajería son configurables.';
$string['sendstudentnotifications'] = 'Notificar a estudiantes';
$string['sendstudentnotifications_help'] = 'Si se habilita, los estudiantes reciben un mensaje cuando se califica una de sus preguntas.';
$string['show'] = 'Mostrar';
$string['showgraded'] = 'preguntas que no necesitan calificación';
$string['showneedsregrade'] = 'preguntas que necesitan re-calificación';
$string['showungraded'] = 'preguntas que necesitan calificación';
$string['specifictext'] = 'Texto específico';
$string['studentaccessaddonly'] = 'crear solamente';
$string['studentaccessedit'] = 'vista previa, ver / guardar como nueva y editar / eliminar';
$string['studentaccessheader'] = 'Acceso de pregunta para estudiante';
$string['studentaccesspreview'] = 'vista previa';
$string['studentaccesssaveasnew'] = 'previsualizar y ver / guardar como nueva';
$string['studentqaccess'] = 'A las preguntas propias';
$string['studentqaccess_help'] = 'Use este menú para definir cuales derechos de acceso tiene los estudiantes sobre las preguntas que crean.';
$string['studentshavedone'] = 'Los estudiantes han creado {$a} pregunta(s).';
$string['synchronizeqaccesstask'] = 'Sincronizar las capacidades de acceso a las preguntas para los estudiantes';
$string['timeclose'] = 'La actividad se cierra en {$a->timeclose}';
$string['timeclosed'] = 'La actividad se cerró en {$a}.';
$string['timecreated'] = 'Hora de creación de preguntas';
$string['timenolimit'] = 'Sin límites de tiempo configurados.';
$string['timeopen'] = 'La actividad se abre en {$a->timeopen}';
$string['timeopenclose'] = 'La actividad está abierta de {$a->timeopen} a {$a->timeclose}';
$string['timeopened'] = 'La actividad se abrió en {$a}.';
$string['timewillclose'] = 'La actividad se cerrará en {$a}.';
$string['timewillopen'] = 'La actividad se abrirá en {$a}.';
$string['timing'] = 'Horario de la actividad';
$string['todoquestionno'] = 'Usted  todavía tiene que hacer {$a->stillrequiredno} pregunta(s) de tipo \'{$a->qtypestring}\'.';
$string['totalgrade'] = 'Calificación total';
$string['totalgradeis'] = 'Calificación total: {$a}';
$string['totalrequiredislessthansumoftotalsforeachqtype'] = 'El total requerido es menor que la suma d elos totales calificados para cada tipo de pregunta.<br />¡Debe de ser igual o mayor!';
$string['updategradestask'] = 'Actualizar calificaciones de la actividad de creación de preguntas';
$string['username'] = 'Nombre_de_usuario del creador de la pregunta';
$string['viewgrading'] = 'Calificar preguntas';
$string['youhavedone'] = 'Usted ha creado {$a} pregunta(s).';
$string['youvesetmorethanonemin'] = 'Usted ha configurado más de un número mínimo de preguntas para el tipo de pregunta \'{$a}\'!';
