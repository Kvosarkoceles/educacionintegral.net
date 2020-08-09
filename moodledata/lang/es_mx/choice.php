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
 * Strings for component 'choice', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   choice
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmorechoices'] = 'Añadir más opciones a elegir';
$string['allowmultiple'] = 'Permitir que se seleccione más de una elección';
$string['allowupdate'] = 'Permitir la actualización de la elección';
$string['answered'] = 'Contestado';
$string['atleastoneoption'] = 'Necesita proporcionar al menos una respuesta posible.';
$string['calendarend'] = '{$a} cierra';
$string['calendarstart'] = '{$a} abre';
$string['cannotsubmit'] = 'Lo sentimos, hubo un problema al enviar su eleccción. Por favor, inténtelo de nuevo.';
$string['choice'] = 'Elección';
$string['choiceactivityname'] = 'Elección: {$a}';
$string['choice:addinstance'] = 'Añadir una nueva elección';
$string['choice:choose'] = 'Grabar una elección';
$string['choiceclose'] = 'Permitir respuestas hasta';
$string['choicecloseson'] = 'La elección cierra en {$a}';
$string['choice:deleteresponses'] = 'Modificar y eliminar respuestas';
$string['choice:downloadresponses'] = 'Descargar respuestas';
$string['choicefull'] = 'Una o más de las opciones que Usted ha seleccionado ya se han llenado. Su respuesta no ha sido guardada. Por favor, haga otra selección.';
$string['choicename'] = 'Título de la elección';
$string['choiceopen'] = 'Permitir respuestas desde';
$string['choiceoptions'] = 'Opciones de la elección';
$string['choiceoptions_help'] = '<P>Aquí es donde usted especifica las opciones que los participantes tienen para elegir. <P>Puede rellenar cualquier número de estas, es decir, puede dejar alguna en blanco si no necesita las 6 opciones. Las opciones no rellenadas no apareceránn. Si requiere más opciones para elegir oprima el botón "Añadir 3 campos al formato".';
$string['choice:readresponses'] = 'Ver respuestas';
$string['choicesaved'] = 'Su elección ha sido guardada';
$string['choicetext'] = 'Texto de la elección';
$string['choice:view'] = 'Ver actividad Elección';
$string['chooseaction'] = 'Elija una acción ...';
$string['chooseoption'] = 'Elección: {$a}';
$string['closebeforeopen'] = 'Usted ha especificado una fecha de cierre anterior a la fecha de apertura.';
$string['completionsubmit'] = 'Mostrar como completada cuando el usuario hace una elección';
$string['description'] = 'Descripción';
$string['deselectalloption'] = 'Des-seleccionar todos "{$a}"';
$string['displayhorizontal'] = 'Mostrar horizontalmente';
$string['displaymode'] = 'Modo Mostrar para las opciones';
$string['displayvertical'] = 'Mostrar verticalmente';
$string['eventanswercreated'] = 'Respuesta de elección añadida';
$string['eventanswerdeleted'] = 'Respuesta de elección eliminada';
$string['eventanswersubmitted'] = 'Elección hecha';
$string['eventanswerupdated'] = 'Elección actualizada';
$string['eventreportdownloaded'] = 'Reporte de elección descargado';
$string['eventreportviewed'] = 'Reporte de elección visto';
$string['expired'] = 'Esta actividad se cerró el {$a}.';
$string['full'] = '(Lleno)';
$string['havetologin'] = 'Debe registrarse antes de enviar su elección';
$string['includeinactive'] = 'Incluir respuestas de usuarios inactivos/suspendidos';
$string['indicator:cognitivedepth'] = 'Elección cognitiva';
$string['indicator:cognitivedepthdef'] = 'Elección cognitiva';
$string['indicator:cognitivedepthdef_help'] = 'El participante ha alcanzado este porcentaje de compromiso cognitivo ofrecido por las actividades de Elección durante este intervalo de análisis (Niveles = Sin ver, Ver, Enviar, Ver retroalimentación)';
$string['indicator:cognitivedepth_help'] = 'Este indicador está basado en la profundidad cognitiva alcanzada por el estudiante en una actividad Elección.';
$string['indicator:socialbreadth'] = 'Elección social';
$string['indicator:socialbreadthdef'] = 'Elección social';
$string['indicator:socialbreadthdef_help'] = 'El participante ha alcanzado este porcentaje del compromiso social ofrecido por las actividades de Elección durante este intervalo de análisis (Niveles = Sin participación, Participante solo, Participante con otros)';
$string['indicator:socialbreadth_help'] = 'Este indicador está basado en la amplitud social alcanzada por el estudiante en una actividad Elección.';
$string['limit'] = 'Límite';
$string['limitanswers'] = 'Limitar el número de respuestas permitidas';
$string['limitanswers_help'] = 'Esta opción le permite limitar el número de participantes que pueden seleccionar cada opción a elegir. Cuando se alcanza el límite, entonces nadie más puede elegir esa opción.

Por favor tenga en cuenta que si Usted usa esta actividad en modo de grupo, entonces el límite es por grupo. Por ejemplo, si el límite es configurado a 5, entonces 5 miembros de cada grupo pueden seleccionar la opción, Si hay 3 grupos, esto significaría que hasta 5 x 3 = 15 participantes podrían seleccionar la opción.

Si los límites están deshabilitados, entonces cualquier número de participantes puede seleccionar cada una de las opciones.';
$string['limitno'] = 'Límite {no}';
$string['modulename'] = 'Elección';
$string['modulename_help'] = 'El módulo de actividad Elección permite al profesor hacer una sola pregunta y ofrecer una selección de respuestas posibles.

Los resultados de la elección pueden publicarse después de que los estudiantes hayan contestado, o después de cierta fecha, o nunca. Los resultados pueden publicarse junto con los nombres de los estudiantes o de forma anónima (aunque los profesores siempre ven los nombres de los estudiantes y sus respuestas).

Una actividad de elección puede emplearse para

* Una encuesta rápida para estimular que piensen sobre un tema particular
* Para evaluar rápidamente que tanto entendieron  los estudiantes
* Para facilitarles a los estudiantes la toma de decisiones, por ejemplo para votar sobre la dirección que tomará el curso';
$string['modulenameplural'] = 'Elecciones';
$string['moveselectedusersto'] = 'Mover a los usuarios seleccionados a...';
$string['multiplenotallowederror'] = 'No están permitidas respuestas múltiples en esta elección';
$string['mustchooseone'] = 'Debe elegir una respuesta antes de guardar. No se ha guardado nada.';
$string['noguestchoose'] = 'Lo sentimos, los invitados no pueden participar en elecciones.';
$string['noresultsviewable'] = 'Los resultados no pueden verse en este momento.';
$string['notanswered'] = 'Sin contestar aún';
$string['notenrolledchoose'] = 'Lo sentimos, solo los usuarios inscritos pueden elegir opciones.';
$string['notopenyet'] = 'Esta actividad no estará disponible hasta {$a}.';
$string['numberofuser'] = 'Número de respuestas';
$string['numberofuserinpercentage'] = 'Porcentaje de respuestas';
$string['openafterclose'] = 'Usted ha especificado una fecha de apertura posterior a  la fecha de cierre.';
$string['option'] = 'Opción';
$string['optionno'] = 'Opción {no}';
$string['options'] = 'Opciones';
$string['page-mod-choice-x'] = 'Cualquier página del módulo elección';
$string['pluginadministration'] = 'Administración de la elección';
$string['pluginname'] = 'Elección';
$string['previewonly'] = 'Esto es solamente una vista previa de las opciones disponibles para esta actividad. Usted no podrá enviar su elección hasta {$a}.';
$string['privacy'] = 'Privacidad de los resultados';
$string['privacy:metadata:choice_answers'] = 'Información acerca de la(s) respuesta(s) elegida(s) por el usuario para una actividad de elección dada';
$string['privacy:metadata:choice_answers:choiceid'] = 'La ID de la actividad de Elección';
$string['privacy:metadata:choice_answers:optionid'] = 'La ID de la opción que el usuario seleccionó.';
$string['privacy:metadata:choice_answers:timemodified'] = 'El sello de tiempo que indica cuando fue modificada la Elección por el usuario';
$string['privacy:metadata:choice_answers:userid'] = 'La ID del usuario que contesta esta actividad de Elección';
$string['publish'] = 'Publicar resultados';
$string['publishafteranswer'] = 'Mostrar los resultados a los estudiantes después de que respondan';
$string['publishafterclose'] = 'Mostrar los resultados a los estudiantes sólo después de cerrar la elección';
$string['publishalways'] = 'Mostrar siempre los resultados a los estudiantes';
$string['publishanonymous'] = 'Publicar resultados anónimamente, sin mostrar los nombres de los alumnos';
$string['publishinfoanonafter'] = 'Los resultados anónimos serán publicados después de su respuesta.';
$string['publishinfoanonclose'] = 'Los resultados anónimos serán publicados después de que la actividad sea cerrada.';
$string['publishinfofullafter'] = 'Resultados completos, mostrando los opciones de todos, serán publicados después de su respuesta.';
$string['publishinfofullclose'] = 'Resultados completos, mostrando los opciones de todos, serán publicados después de que la actividad sea cerrada.';
$string['publishinfonever'] = 'Los resultados de esta actividad no serán publicados después de que Usted responda.';
$string['publishnames'] = 'Publicar resultados completos, con los nombres  y elecciones de los alumnos';
$string['publishnot'] = 'No publicar resultados para los alumnos';
$string['removemychoice'] = 'Eliminar mi elección';
$string['removeresponses'] = 'Eliminar todas las respuestas';
$string['responses'] = 'Respuestas';
$string['responsesresultgraphheader'] = 'Vista de Gráfica';
$string['responsesto'] = 'Respuestas para {$a}';
$string['results'] = 'Resultados';
$string['savemychoice'] = 'Guardar mi elección';
$string['search:activity'] = 'Elección - información de actividad';
$string['selectalloption'] = 'Seleccionar todos "{$a}"';
$string['showpreview'] = 'Mostrar previsualización';
$string['showpreview_help'] = 'Permitirle a los estudiantes previsualizar las opciones disponibles antes de que la elección sea abierta para envío.';
$string['showunanswered'] = 'Mostrar columna de no contestadas';
$string['spaceleft'] = 'espacio disponible';
$string['spacesleft'] = 'espacios disponibles';
$string['taken'] = 'Tomadas';
$string['userchoosethisoption'] = 'Usuarios que eligen esta opción';
$string['viewallresponses'] = 'Ver {$a} respuestas';
$string['viewchoices'] = 'Ver opciones';
$string['withselected'] = 'Con seleccionados';
$string['yourselection'] = 'Su selección';
