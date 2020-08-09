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
 * Strings for component 'lesson', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   lesson
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accesscontrol'] = 'Control de acceso';
$string['actionaftercorrectanswer'] = 'Acción posterior a la respuesta correcta';
$string['actionaftercorrectanswer_help'] = '<p>La acción normal es seguir el salto de página tal como se ha especificado en la respuesta. En la mayoría de los casos se mostrará la página siguiente de la lección. Se conduce al estudiante a través de la lección siguiendo un camino lógico desde el principio hasta el final.</p> <p>Sin embargo, el módulo Lección puede también usarse como si fuera una tarea a base de <i>tarjetas</i> (<I>flash-cards</I>). Se muestra (opcionalmente) al estudiante alguna información y se le formula una pregunta habitualmente de forma aleatoria. No hay ni principio ni final establecidos, sino simplemente un conjunto de <i>fichas</i> que se muestran unas junto a otras sin ajustarse a un orden particular.</p> <p>Esta opción permite dos variantes muy similares al comportamiento de las tarjetas. La opción "Ir a una página no vista" nunca muestra dos veces la misma página (incluso aunque el estudiante <b>no</b> haya contestado correctamente la pregunta asociada con la página o la tarjeta. La otra opción ("Mostrar una página no contestada") permite al estudiante ver páginas que pueden haber aparecido antes, pero sólo si ha contestado erróneamente a la pregunta asociada.</p> <p>En las lecciones a base de tarjetas el profesor puede decidir si utiliza bien todas las páginas/tarjetas de la lección o sólo un subconjunto aleatorio. Esto se lleva a cabo a través del parámetro &quot; Número de Páginas (Tarjetas) a mostrar&quot;.</p>';
$string['actions'] = 'Acciones';
$string['activitylink'] = 'Enlace a siguiente actividad';
$string['activitylink_help'] = 'Para proporcionar un enlace al final de la lección hacia otra actividad en el curso, seleccione la actividad del menú desplegable.';
$string['activitylinkname'] = 'Ir a: {$a}';
$string['activityoverview'] = 'Usted tiene lecciones pendientes de hacer';
$string['addabranchtable'] = 'Agregar una página de contenido';
$string['addanendofbranch'] = 'Agregar un final de ramificación';
$string['addanewpage'] = 'Añadir una nueva página';
$string['addaquestionpage'] = 'Añadir página';
$string['addaquestionpagehere'] = 'Agregar aquí una página de pregunta';
$string['addbranchtable'] = 'Agregar una página de contenido';
$string['addcluster'] = 'Agregar un cluster';
$string['addedabranchtable'] = 'Agregar una página de contenido';
$string['addedanendofbranch'] = 'Agregado un final de ramificación';
$string['addedaquestionpage'] = 'Agregada página de preguntas';
$string['addedcluster'] = 'Agregado cluster';
$string['addedendofcluster'] = 'Agregado un final de cluster';
$string['addendofbranch'] = 'Añadir fin de rama';
$string['addendofcluster'] = 'Agregar un final de cluster';
$string['addessay'] = 'Crear una página de pregunta de Ensayo';
$string['additionalattemptsremaining'] = 'Completada. Usted puede re-intentar esta lección';
$string['addmatching'] = 'Crear una página de pregunta de Relacionar Columnas';
$string['addmultichoice'] = 'Crear una página de pregunta de Opción Múltiple';
$string['addnewgroupoverride'] = 'Añadir anulación de grupo';
$string['addnewuseroverride'] = 'Añadir anulación de usuario';
$string['addnumerical'] = 'Crear una página de pregunta Numérica';
$string['addpage'] = 'Agregar una página';
$string['addshortanswer'] = 'Crear una página de pregunta de Respuesta Corta';
$string['addtruefalse'] = 'Crear una página de pregunta de Falso/Verdadero';
$string['allotheranswers'] = 'Todas las otras respuestas';
$string['allotheranswersjump'] = 'Salto para Todas las otras respuestas';
$string['allotheranswersscore'] = 'Puntaje para Todas las otras respuestas';
$string['allowofflineattempts'] = 'Permitir que la lección se intente fuera-de-línea usando la App mobile';
$string['allowofflineattempts_help'] = 'Si se habilita, un usuario de la App mobile puede descargar la lección e intentarla fuera-de-línea.
También se descargarán todas las respuestas posibles y las correctas.
Nota: No es posible intentar fuera-de-línea una lección si tiene un límite de tiempo.';
$string['anchortitle'] = 'Comienzo del contenido principal';
$string['and'] = 'Y';
$string['answer'] = 'Respuesta';
$string['answeredcorrectly'] = 'contestadas correctamente.';
$string['answersfornumerical'] = 'Las respuestas a preguntas numéricas deberían ser pares de valores máximo y mínimo';
$string['arrangebuttonshorizontally'] = '¿Disponer horizontalmente los botones de contenido?';
$string['attempt'] = 'Intento: {$a}';
$string['attemptheader'] = 'Intento';
$string['attemptinfonograde'] = '{$a->timestart} ({$a->duration})';
$string['attemptinfowithgrade'] = '{$a->grade}% {$a->timestart} ({$a->duration})';
$string['attempts'] = 'Intentos';
$string['attemptsdeleted'] = 'Intentos eliminados';
$string['attemptsremaining'] = 'Tiene {$a} intento(s) restante(s)';
$string['available'] = 'Disponible a partir de';
$string['averagescore'] = 'Puntuación promedio';
$string['averagetime'] = 'Tiempo promedio';
$string['branch'] = 'Contenido';
$string['branchtable'] = 'Contenido';
$string['cancel'] = 'Cancelar';
$string['cannotfindanswer'] = 'Error: no se pudo encontrar la respuesta';
$string['cannotfindattempt'] = 'Error: no se pudo encontrar el intento';
$string['cannotfindessay'] = 'Error: no se pudo encontrar el ensayo';
$string['cannotfindfirstgrade'] = 'Error: no se pudieron encontrar las calificaciones';
$string['cannotfindfirstpage'] = 'No se pudo encontrar la primera página';
$string['cannotfindgrade'] = 'Error: no se pudieron encontrar las calificaciones';
$string['cannotfindnewestgrade'] = 'Error: no se puede encontrar la calificación más reciente';
$string['cannotfindnextpage'] = 'Respaldo de lección: ¡No se encontró la página siguiente!';
$string['cannotfindpagerecord'] = 'Agregar final de ramificación: registro de página no encontrado';
$string['cannotfindpages'] = 'No se han encontrado páginas en la lección';
$string['cannotfindpagetitle'] = 'Confirmar eliminación: título de página no encontrado';
$string['cannotfindpreattempt'] = 'No se ha encontrado el registro de intento previo';
$string['cannotfindrecords'] = 'Error: no se pudieron encontrar los registros de la lección';
$string['cannotfindtimer'] = 'Error: no se pudieron encontrar los registros de lesson_timer';
$string['cannotfinduser'] = 'Error: no se pudieron encontrar los usuarios';
$string['canretake'] = '{$a} puede retomar la lección';
$string['casesensitive'] = 'Usar expresiones regulares';
$string['casesensitive_help'] = 'Elija la casilla para usar expresiones regulares para analizar las respuestas.';
$string['checkbranchtable'] = 'Comprobar página de contenidos';
$string['checkedthisone'] = 'Eligieron esta.';
$string['checknavigation'] = 'Revisar navegación';
$string['checkquestion'] = 'Revisar pregunta';
$string['classstats'] = 'Estadísticas de clase';
$string['clicktodownload'] = 'Haga clic en el siguiente enlace para descargar el archivo.';
$string['closebeforeopen'] = 'No pudo actualizarse la lección. Usted ha especificado una fecha de cierre anterior a la fecha de apertura.';
$string['cluster'] = 'Cluster';
$string['clusterjump'] = 'Pregunta no vista dentro de un cluster';
$string['clustertitle'] = 'Cluster';
$string['collapsed'] = 'Colapsado';
$string['comments'] = 'Sus comentarios';
$string['completed'] = 'Finalizado';
$string['completederror'] = 'Completar la lección';
$string['completethefollowingconditions'] = 'Para seguir, deberá completar la(s) siguiente(s) condición(es) en la lección <b>{$a}</b>.';
$string['completionendreached'] = 'Se alcanzó el fin requerido';
$string['completionendreached_desc'] = 'Los estudiantes deben alcanzar el final de la página de lección para completar esta actividad';
$string['completiontimespent'] = 'El estudiante debe hacer esta actividad al menos por';
$string['completiontimespentdesc'] = 'El estudiante debe de hacer esta actividad por al menos {$a}';
$string['completiontimespentgroup'] = 'Requerir tiempo empleado';
$string['conditionsfordependency'] = 'Condición(es) para la dependencia';
$string['configintro'] = 'Los valores configurados aquí definen los valores por defecto que son usados en el formato de configuraciones al crear una nueva actividad de Lección. Las configuraciones especificadas como avanzadas solamente son mostradas cuando se hace click sobre el enlace para \'Mostrar más...\'.';
$string['configmaxanswers'] = 'Número máximo de respuestas por página predeterminado';
$string['configmediaclose'] = 'Muestra un botón de cierre en el marco de la ventana emergente generada por un archivo multimedia vinculado';
$string['configmediaheight'] = 'Establece la altura de la ventana emergente para mostrar un archivo multimedia enlazado';
$string['configmediawidth'] = 'Establece el ancho de la ventana emergente para mostrar un archivo multimedia enlazado.';
$string['configpassword_desc'] = 'Si es que se pedirá una contraseña para acceder a la lección.';
$string['configslideshowbgcolor'] = 'Color de fondo para la presentación de diapositivas si está habilitado';
$string['configslideshowheight'] = 'Establece la altura de la presentación de diapositivas si está habilitado';
$string['configslideshowwidth'] = 'Establece el ancho de la presentación de diapositivas si está habilitado';
$string['configtimelimit_desc'] = 'Si se configura un límite de tiempo, se muestra una advertencia al principo de a sección y cuando hubiera un cronómetro descendiente. Si se configura a cero, entonces no hay límite de tiempo.';
$string['confirmdelete'] = 'Eliminar página';
$string['confirmdeletionofthispage'] = 'Confirme que desea eliminar esta página';
$string['congratulations'] = 'Enhorabuena, ha llegado al final de la lección';
$string['continue'] = 'Continuar';
$string['continuetoanswer'] = 'Continuar a cambiar respuestas.';
$string['continuetonextpage'] = 'Continuar a página siguiente';
$string['correctanswerjump'] = 'Salto a respuesta correcta';
$string['correctanswerscore'] = 'Puntuación de respuesta correcta';
$string['correctresponse'] = 'Comentario (correcto)';
$string['createaquestionpage'] = 'Crear una página de pregunta';
$string['credit'] = 'Crédito';
$string['customscoring'] = 'Puntuación personalizada';
$string['customscoring_help'] = '<p>Esta opción le permite asignar un valor numérico a cada respuesta. Las respuestas pueden tener valores negativos o positivos. Se asignará automáticamente a las preguntas importadas 1 punto a cada respuesta correcta y 0 puntos a cada respuesta incorrecta, si bien usted puede cambiar esto después de importarlas.</p>';
$string['deadline'] = 'Fecha límite';
$string['defaultessayresponse'] = 'Su ensayo será calificado por su profesor.';
$string['deleteallattempts'] = 'Eliminar todos los intentos de resolver la lección';
$string['deletedefaults'] = 'Eliminada {$a} x lección por defecto';
$string['deletedpage'] = 'Página eliminada';
$string['deletepagenamed'] = 'Eliminar página: {$a}';
$string['deleting'] = 'Eliminando';
$string['deletingpage'] = 'Eliminando página: {$a}';
$string['dependencyon'] = 'Dependiente de (pre-requisitos)';
$string['dependencyon_help'] = '<p>Esta opción permite que la lección actual dependa del rendimiento de los estudiantes en otra lección del mismo curso (pre-requisitos). Si no alcanza el rendimiento exigido, el estudiante no podrá acceder a esta lección.</p> <p>Las condiciones de la dependencia incluyen: <ul> <li><b>Tiempo empleado:</b> el estudiante debe haber terminado la lección dentro del tiempo que aquí se señale.</li> <li><b>Completada:</b> el estudiante debe haber completado dicha lección.</li> <li><b>Calificación superior a:</b> el estudiante debe haber alcanzado en dicha lección una calificación superior a la especificada en esta opción.</li> </ul> Puede usarse cualquier combinación de las opciones anteriores. </p>';
$string['description'] = 'Descripción';
$string['deselectallattempts'] = 'Des-seleccionar todos los intentos';
$string['detailedstats'] = 'Estadísticas detalladas';
$string['didnotanswerquestion'] = 'No ha contestado a esta pregunta.';
$string['didnotreceivecredit'] = 'No ha recibido crédito';
$string['disabled'] = 'Deshabilitado';
$string['displaydefaultfeedback'] = 'Usar retroalimentación por defecto';
$string['displaydefaultfeedback_help'] = '<p align="center"><strong>Mostrar retroalimentación por defecto</strong></p>

<p>Si se ajusta esta opción a <strong>Sí</strong>, cuando no se encuentre una respuesta a una pregunta en particular, se usará por defecto el comentario "Esa es la respuesta correcta" y "Esa es la respuesta incorrecta".</p>
<p>Si la opción se ajusta a <strong>No</strong>, cuando no se encuentre una respuesta a una pregunta en particular, no se mostrarán comentarios de retroalimentación. El usuario que está realizando la lección pasará directamente a la siguiente página de la lección.</p>';
$string['displayinleftmenu'] = '¿Mostrar en menú?';
$string['displayleftif'] = 'Calificación mínima para mostrar el menú';
$string['displayleftif_help'] = 'Esta configuración determina si un estudiante debe obtener una cierta puntuación para poder ver el menú de la lección. Esto obliga al estudiante a pasar por toda la lección en su primer intento y así obtener la puntuación necesaria para poder utilizar el menú para la revisión.';
$string['displayleftmenu'] = 'Mostrar menú';
$string['displayleftmenu_help'] = 'Si se habilita, se muestra un menú que les permite a los usuarios navegar por la lista de páginas.';
$string['displayofgrade'] = 'Mostrar calificación (sólo para estudiantes)';
$string['displayreview'] = 'Mostrar botón Revisar';
$string['displayreview_help'] = 'Si se activa, cuando una pregunta se responde incorrectamente, se le da al estudiante la opción de intentarlo de nuevo sin crédito de puntos, o continuar con la lección. Si el estudiante elige moverse a otra pregunta, entonces la respuesta elegida (errónea) será seguida. Por defecto los saltos para respuesta errónea están configurados a "esta página" y tienen un puntaje de 0, por lo que se recomienda que configure el salto por respuesta errónea a una página diferente para evitar confusión con sus estudiantes.';
$string['displayscorewithessays'] = 'Usted ha obtenido una puntuación de {$a->score} sobre {$a->tempmaxgrade} para las preguntas calificadas automáticamente.<br>Su(s) {$a->essayquestions} pregunta(s) de su ensayo serán calificadas y añadidas<br>a su calificación final en una fecha posterior.<br><br>Su calificación actual sin contar esa(s) pregunta(s) es de is {$a->score} sobre {$a->grade}.</p>';
$string['displayscorewithoutessays'] = 'Su puntuación es {$a->score} (sobre {$a->grade}).';
$string['duplicatepagenamed'] = 'Duplicar página: {$a}';
$string['edit'] = 'Edición';
$string['editbranchtable'] = 'Editando una página de contenido';
$string['editcluster'] = 'Editando un cluster';
$string['editendofbranch'] = 'Editando una página de fin de rama';
$string['editendofcluster'] = 'Editando una página de fin de cluster';
$string['editessay'] = 'Editando una página de pregunta de Ensayo';
$string['editingquestionpage'] = 'Editando página de pregunta {$a}';
$string['editlessonsettings'] = 'Editar los ajustes de Esta lección';
$string['editmatching'] = 'Editando una página de pregunta de Relacionar columnas';
$string['editmultichoice'] = 'Editando una página de pregunta de Opción Múltiple';
$string['editnumerical'] = 'Editando una página de pregunta Numérica';
$string['editoverride'] = 'Editar anulación';
$string['editpage'] = 'Modificar el contenido de la página';
$string['editpagecontent'] = 'Editar el contenido de esta página';
$string['editquestion'] = 'Editando una página de pregunta';
$string['editshortanswer'] = 'Editando una página de pregunta de Respuesta corta';
$string['edittruefalse'] = 'Editando una página de pregunta de Falso/Verdadero';
$string['email'] = 'Email';
$string['emailallgradedessays'] = 'Enviar por email TODOS los ensayos calificados';
$string['emailgradedessays'] = 'Enviar por email los ensayos calificados';
$string['emailsuccess'] = 'Email enviado con éxito';
$string['emptypassword'] = 'La contraseña no puede estar vacía';
$string['enabled'] = 'Habilitado';
$string['endofbranch'] = 'Fin de ramificación';
$string['endofcluster'] = 'Final de cluster';
$string['endofclustertitle'] = 'Fin de Cluster';
$string['endoflesson'] = 'Fin de lección';
$string['enteredthis'] = 'introdujo esto.';
$string['enterpassword'] = 'Por favor, escriba la contraseña:';
$string['eolstudentoutoftime'] = 'Atención: Usted ha sobrepasado el tiempo fijado para esta lección. Su última respuesta puede no haber sido contabilizada si ha sido dada con el tiempo finalizado.';
$string['eolstudentoutoftimenoanswers'] = 'No ha contestado a ninguna pregunta. En esta lección ha obtenido 0 puntos.';
$string['essay'] = 'Ensayo';
$string['essayemailmessage2'] = '<p>Del Ensayo: {$a->question}</p><p>Su respuesta: <em>{$a->response}</em></p><p>Comentarios del evaluador: <em>{$a->comment}</em></p><p>Usted ha recibido {$a->earned} de un total de {$a->outof} para esta pregunta de ensayo.</p><p>Su calificación para la lección {$a->lesson} ha sido cambiada a {$a->newgrade}%.</p>';
$string['essayemailmessagesmall'] = '<p>Usted ha recibido {$a->earned} de un total de {$a->outof} para esta pregunta de ensayo.</p><p>Su calificación para la lección {$a->lesson} ha sido cambiada a {$a->newgrade}%.</p>';
$string['essayemailsubject'] = 'Calificación disponible para pregunta de lección';
$string['essaynotgradedyet'] = 'Este ensayo todavía no ha sido calificado';
$string['essayresponses'] = 'Respuestas de ensayo';
$string['essays'] = 'Ensayos';
$string['essayscore'] = 'Puntuación del ensayo';
$string['eventcontentpageviewed'] = 'Página de contenido vista';
$string['eventessayassessed'] = 'Ensayo evaluado';
$string['eventessayattemptviewed'] = 'Intento de Ensayo visto';
$string['eventlessonended'] = 'Lección terminada';
$string['eventlessonrestarted'] = 'Lección reiniciada';
$string['eventlessonresumed'] = 'Lección reiniciada';
$string['eventlessonstarted'] = 'Lección iniciada';
$string['eventoverridecreated'] = 'Anulación de lección creada';
$string['eventoverridedeleted'] = 'Anulación de lección eliminada';
$string['eventoverrideupdated'] = 'Anulación de lección actualizada';
$string['eventpagecreated'] = 'Página creada';
$string['eventpagedeleted'] = 'Página eliminada';
$string['eventpagemoved'] = 'Página movida';
$string['eventpageupdated'] = 'Página actualizada';
$string['eventquestionanswered'] = 'Pregunta contestada';
$string['eventquestionviewed'] = 'Pregunta vista';
$string['false'] = 'Falso';
$string['fileformat'] = 'Formato de archivo';
$string['finalwrong'] = 'No exactamente.';
$string['finish'] = 'Terminar';
$string['firstanswershould'] = 'La primera respuesta deberá saltar a la página "Correcta"';
$string['firstwrong'] = 'Lo sentimos, usted ha contestado incorrectamente. ¡Le gustaría volver a intentar la pregunta de nuevo? (si Usted contesta ahora la pregunta correctamente, no contará hacia su puntaje final).';
$string['flowcontrol'] = 'Control de Flujo';
$string['fractionsaddwrong'] = 'Las calificaciones positivas otorgadas no suman 100% sino {$a}%<br />¿Desea regresar y corregir esta pregunta?';
$string['fractionsnomax'] = 'Una de las preguntas debe ser 100% para que sea<br />posible alcanzar la calificación máxima<br />¿Desea regresar y corregir esta pregunta?';
$string['full'] = 'Expandido';
$string['general'] = 'General';
$string['gotoendoflesson'] = 'Ir al final de lección';
$string['grade'] = 'Calificación';
$string['gradebetterthan'] = 'Calificación superior a (%)';
$string['gradebetterthanerror'] = 'Obtener una calificación superior al {$a} por ciento';
$string['graded'] = 'Calificado';
$string['gradeessay'] = 'Calificar preguntas de ensayo ({$a->notgradedcount} no calificadas y {$a->notsentcount} no enviadas)';
$string['gradeis'] = 'La calificación es {$a}';
$string['gradeoptions'] = 'Opciones de Calificación';
$string['groupoverrides'] = 'Anulaciones de grupo';
$string['groupoverridesdeleted'] = 'Anulación de grupo eliminada';
$string['groupsnone'] = 'Sin grupos a los que Usted pueda acceder.';
$string['handlingofretakes'] = 'Manejo de intentos múltiples';
$string['handlingofretakes_help'] = '<p>Cuando se permite a los estudiantes retomar o repetir la lección, esta opción
permite elegir al profesor la clase de calificación final del alumno, por ejemplo, en
la página de calificaciones. Puede ser la <b>media</b>, la <b>primera</b> o la
<b>mejor</b> calificación de las obtenidas en todos los intentos o repeticiones de la lección.</p>

<p>Esta opción puede cambiarla en cualquier momento.</p>';
$string['havenotgradedyet'] = 'Aún no calificado.';
$string['here'] = 'aquí';
$string['highscore'] = 'Calificación máxima';
$string['hightime'] = 'Tiempo máximo';
$string['importcount'] = 'Importando {$a} preguntas';
$string['importquestions'] = 'Importar preguntas';
$string['importquestions_help'] = 'Esta característica habilita que las preguntas en una variedad de formatos sean importadas vía archivo de texto.';
$string['inactiveoverridehelp'] = '* Est anulación está inactiva porque el acceso del usuario a la actividad está restringido. Esto puede ser debido a asignaciones de grupo o de rol, otras restricciones de acceso, o que la actividad esté oculta.';
$string['indicator:cognitivedepth'] = 'Lección cognitiva';
$string['indicator:cognitivedepthdef'] = 'Lección cognitiva';
$string['indicator:cognitivedepthdef_help'] = 'El participante ha alcanzado este porcentaje del compromiso cognitivo ofrecido por las actividades de Lección durante este intervalo de análisis (Niveles = Sin Ver, Ver, Enviar, Ver retroalimentación, Comentar en retroalimentación, Reenviar después de ver retroalimentación)';
$string['indicator:cognitivedepth_help'] = 'Este indicador está basado en la profundidad cognitiva alcanzada por el estudiante en una actividad Lección.';
$string['indicator:socialbreadth'] = 'Lección social';
$string['indicator:socialbreadthdef'] = 'Lección social';
$string['indicator:socialbreadthdef_help'] = 'El participante ha alcanzado este porcentaje del compromiso social ofrecido por las actividades de Lección durante este intervalo de análisis (Niveles = Sin participación, Participante solo, Participante con otros)';
$string['indicator:socialbreadth_help'] = 'Este indicador está basado en la amplitud social alcanzada por el estudiante en una actividad Lección.';
$string['insertedpage'] = 'Página insertada';
$string['invalidfile'] = 'Archivo no válido';
$string['invalidid'] = 'No se pasaron el ID del módulo o el ID de la lección';
$string['invalidlessonid'] = 'La ID de la lección es incorrecta';
$string['invalidoverrideid'] = 'ID de anulación inválido';
$string['invalidpageid'] = 'ID de página no válida';
$string['jump'] = 'Saltar';
$string['jumps'] = 'Saltos';
$string['jumps_help'] = '<p>Cada respuesta tiene un salto de página hacia un enlace. Cuando se elige una
respuesta se muestra el refuerzo al estudiante. Después de ver el mensaje de
refuerzo se produce el salto de página hacia el enlace. Este enlace puede ser
absoluto o relativo. Los enlaces relativos son <b>Esta página </b>y <b>Siguiente página</b>. <b>Esta página</b> significa que el estudiante ve la misma página otra vez. La <b>Siguiente página </b>muestra la página que le sigue en el orden lógico de las páginas. Un enlace Absoluto se determina eligiendo el título de la página.</p>
<p>Nota: si cambia el orden de  las páginas el salto de página (relativo) <b>Siguiente página</b> puede mostrar una página diferente. Cuando se usa un enlace absoluto con el título de la página siempre mostrará la página seleccionada aunque las cambie de orden</p>
<p>&nbsp;</p>';
$string['jumpsto'] = 'Salto a <em>{$a}</em>';
$string['leftduringtimed'] = 'Se ha interrumpido una lección con tiempo fijo.<br>Por favor, haga clic en Continuar para volver a empezar la lección.';
$string['leftduringtimednoretake'] = 'Se ha interrumpido una lección con tiempo fijo y<br>no se permite volver a empezar o continuar la lección.';
$string['leftduringtimedsession'] = 'Usted se fue furante una lección cronometrada.';
$string['lesson:addinstance'] = 'Añadir una nueva lección';
$string['lessonclosed'] = 'Esta lección se cerró el {$a}.';
$string['lessoncloses'] = 'La lección se cierra';
$string['lessoncloseson'] = 'La lección se cierra el {$a}';
$string['lesson:edit'] = 'Editar una actividad de lección';
$string['lessoneventcloses'] = '{$a} cierra';
$string['lessoneventopens'] = '{$a} abre';
$string['lessonformating'] = 'Formateado de la Lección';
$string['lesson:grade'] = 'Calificar preguntas de ensayo en lección';
$string['lesson:manage'] = 'Gestionar una actividad de lección';
$string['lesson:manageoverrides'] = 'Gestionar anulaciones de lección';
$string['lessonmenu'] = 'Menú Lección';
$string['lessonname'] = 'Lección: {$a}';
$string['lessonnotready'] = 'Esta lección no está lista para tomarse. Por favor, póngase en contacto con su {$a}.';
$string['lessonnotready2'] = 'Esta lección no está preparada.';
$string['lessonopen'] = 'Esta lección se abrirá el {$a}.';
$string['lessonopens'] = 'La lección se abre';
$string['lessonpagelinkingbroken'] = 'No se encuentra la primera página. El enlace a la página de la lección debe estar roto. Por favor, póngase en contacto con el administrador.';
$string['lessonstats'] = 'Estadísticas de la lección';
$string['lesson:view'] = 'Ver actividad de lección';
$string['lesson:viewreports'] = 'Ver reportes de lección';
$string['linkedmedia'] = 'Medios enlazados';
$string['loginfail'] = 'Ingreso fallido, por favor pruebe de nuevo...';
$string['lowscore'] = 'Puntuación baja';
$string['lowtime'] = 'Tiempo mínimo';
$string['manualgrading'] = 'Calificar ensayos';
$string['matchesanswer'] = 'Concuerda con la respuesta';
$string['matching'] = 'Relacionar columnas';
$string['matchingpair'] = 'Pareja {$a}';
$string['maxgrade'] = 'Calificación máxima';
$string['maxgrade_help'] = '<p>Este valor determina la máxima calificación que se puede obtener con la
lección.    El rango va de&nbsp; 0 a 100%. Este valor puede cambiarse en
cualquier momento. Los cambios tendrán un efecto inmediato en la página de
calificaciones y los alumnos podrán ver sus calificaciones en diferentes
listas.</p>';
$string['maximumnumberofanswersbranches'] = 'Número máximo de respuestas';
$string['maximumnumberofanswersbranches_help'] = '<p>Este valor determina el máximo número de respuestas que se usarán en la lección. Si una lección solo utilizará preguntas de VERDADERO o FALSO podemos asignarle el valor de 2. Esta configuración puede cambiarse en cualquier momento, porque solamente afecta lo que vé el profesor, no afecta los datos.';
$string['maximumnumberofattempts'] = 'Número máximo de intentos';
$string['maximumnumberofattempts_help'] = '<p>Este valor determina el número máximo de intentos que tienen los estudiantes para responder <b>cualquiera</b> de las preguntas de una lección. En los casos de preguntas que no tienen respuestas; por ejemplo, preguntas cortas o numéricas; este valor indica el número de veces que puede responder antes de que lo envíe a la siguiente página de la lección. </p> <p>El valor por defecto es 5. Valores bajos pueden desalentar al estudiante antes de resolver la pregunta. Valores altos pueden producir frustración.</p> <p>Si asignamos el valor 1 damos al estudiante una única opción para responder cada pregunta. Esto produce un comportamiento similar a los exámenes, excepto que cada pregunta se presenta en una página individual.</p> <p>Advierta que este valor es un parámetro global y que se aplica a todas las preguntas de la lección sin tener en cuenta su tipo de pregunta.</p> <p>Recuerde que este parámetro <b>no</b> se aplica cuando los profesores comprueban las preguntas o cuando navegan por la lección. No son registrados en la base de datos el número de intentos realizados ni las calificaciones obtenidas por los profesores. ¡Los profesores deberían después de todo conocer todas las respuestas!</p>';
$string['maximumnumberofattemptsreached'] = 'Se ha alcanzado el número máximo de intentos. Traslado a la página siguiente';
$string['mediaclose'] = 'Mostrar botón de cierre';
$string['mediafile'] = 'Medio enlazado';
$string['mediafile_help'] = 'Puede subirse un archivo de medio para usarse en la lección. Se mostrará entonces un enlace para \'Haga clic aquí para ver\' dentro de un bloque llamado \'Medio enlazado\' en cada página de la lección.';
$string['mediafilepopup'] = 'Haga clic aquí para ver';
$string['mediaheight'] = 'Altura de la ventana emergente';
$string['mediawidth'] = 'Ancho de la ventana emergente';
$string['messageprovider:graded_essay'] = 'Notificación de ensayo en Lección calificado';
$string['minimumnumberofquestions'] = 'Número mínimo de preguntas';
$string['minimumnumberofquestions_help'] = 'Este ajuste determina el número mínimo de preguntas que se usarán para calcular una calificación para la actividad.';
$string['missingname'] = 'Por favor, escriba un \'nick';
$string['modattempts'] = 'Permitir revisión al estudiante';
$string['modattempts_help'] = '<p>Esta opción permite al estudiante volver atrás para cambiar sus respuestas.</p>';
$string['modattemptsnoteacher'] = 'La revisión del estudiante sólo está disponible para los estudiantes.';
$string['modulename'] = 'Lección';
$string['modulename_help'] = 'El módulo de actividad Lección le permite al profesor proporcionar contenidos y/o actividades en una forma interesante y flexible. Un profesor puede usar una lección para crear un conjunto lineal de páginas de contenidos o actividades instruccionales  que ofrecen una variedad de caminos o de opciones para el estudiante. En cualquier caso, los profesores pueden elegir aumentar la interactividad y asegurar el aprendizaje al incluir variedad de preguntas tales como las de opción múltiple, relacionar columnas y respuesta corta. Dependiendo de la elección de respuesta del alumno, y de cómo el profesor desarrolla la lección, los estudiantes pueden progresar a la siguiente página, ser regresados a una página anterior, o re-direccionados a un camino completamente diferente.


Una lección puede ser calificada, y la calificación se guardará en el libro de calificación.

Las lecciones pueden emplearse

* Para aprendizaje auto-dirigido en un tópico/tema nuevo

* Para escenarios o ejercicios de simulaciones y toma de decisiones

* Para guías de revisión diferenciadas, con diferentes juegos de preguntas de revisión dependientes de las respuestas dadas a las preguntas iniciales';
$string['modulenameplural'] = 'Lecciones';
$string['move'] = 'Mover página';
$string['movedpage'] = 'Página movida';
$string['movepagehere'] = 'Mover la página aquí';
$string['movepagenamed'] = 'Mover página: {$a}';
$string['moving'] = 'Moviendo página: {$a}';
$string['multianswer'] = 'Multirrespuesta';
$string['multianswer_help'] = 'Marque la casilla si la respuesta correcta corresponde a más de una respuesta.';
$string['multichoice'] = 'Opción múltiple';
$string['multipleanswer'] = 'Respuesta múltiple';
$string['nameapproved'] = 'Nombre aprobado';
$string['namereject'] = 'Lo sentimos, su nombre ha sido rechazado por el filtro.<br>Por favor, pruebe con otro nombre.';
$string['new'] = 'nueva';
$string['nextpage'] = 'Página siguiente';
$string['noanswer'] = 'Una o más preguntas no tienen respuesta dada. Por favor regrese y envíe una respuesta.';
$string['noattemptrecordsfound'] = 'No se encontraron registros de intentos. Sin calificación';
$string['nobranchtablefound'] = 'No se ha encontrado página de contenido';
$string['noclose'] = 'Sin fecha de terminación';
$string['nocommentyet'] = 'Aún no comentado.';
$string['nocoursemods'] = 'No se encuentran actividades';
$string['nocredit'] = 'No crédito';
$string['nodeadline'] = 'No fecha límite';
$string['noessayquestionsfound'] = 'No se encuentran preguntas de ensayo en esta lección.';
$string['nohighscores'] = 'No puntuaciones más altas';
$string['nolessonattempts'] = 'No se han hecho intentos de esta lección.';
$string['nolessonattemptsgroup'] = 'No se han hecho intentos por miembros del grupo {$a} en esta lección.';
$string['none'] = 'Ninguno(a)';
$string['nooneansweredcorrectly'] = 'Nadie contestó correctamente.';
$string['nooneansweredthisquestion'] = 'Nadie contestó esta pregunta.';
$string['noonecheckedthis'] = 'Nadie eligió esta.';
$string['nooneenteredthis'] = 'Nadie puso esto.';
$string['noonehasanswered'] = 'Nadie ha contestado aún a una pregunta de ensayo.';
$string['noonehasansweredgroup'] = 'Nadie en {$a} ha contestado todavía alguna pregunta de ensayo.';
$string['noopen'] = 'Sin fecha de apertura';
$string['nooverridedata'] = 'Usted debe de anular al menos una de las configuraciones de lección.';
$string['noretake'] = 'No se le permite retomar esta lección.';
$string['normal'] = 'Normal - seguir el flujo de la lección';
$string['notcompleted'] = 'Sin finalizar';
$string['notcompletedwithdate'] = 'No completado ({$a})';
$string['notdefined'] = 'Sin definir';
$string['notenoughsubquestions'] = 'No se han definido suficientes subpreguntas.<br /> ¿Quiere regresar y arreglar esta pregunta?';
$string['notenoughtimespent'] = 'Usted ha completado esta lección en {$a->timespent}, lo que es menor que el tiempo requerido de {$a->timerequired}. Usted podría necesitar intentar resolver la lección nuevamente.';
$string['notgraded'] = 'No calificado';
$string['notitle'] = 'Sin título';
$string['notyetcompleted'] = 'La lección ha sido iniciada, pero todavía no está completada';
$string['numberofcorrectanswers'] = 'Número de respuestas correctas: {$a}';
$string['numberofcorrectanswersheader'] = 'Número de respuestas correctas';
$string['numberofcorrectmatches'] = 'Número de opciones correctamente relacionadas: {$a}';
$string['numberofpagestoshow'] = 'Número de páginas a mostrar';
$string['numberofpagestoshow_help'] = '<p>Este valor se usa solamente en las lecciones de tipo Tarjeta (<I>Flash Card</I>). Su valor por defecto es cero y significa que todas las Páginas/Tarjeta serán
mostradas en la lección. Cuando el valor es distinto de cero se mostrarán ese número de páginas. Después de mostrar ese número de  Páginas/Tarjeta viene el final de la lección y se muestra la calificación obtenida por el estudiante.</p>

<p>Si el valor que se asigna es superior al número de páginas de la lección se
mostrarán todas las páginas.</p>';
$string['numberofpagesviewed'] = 'Número de preguntas contestadas: {$a}';
$string['numberofpagesviewedheader'] = 'Número de respuestas contestadas';
$string['numberofpagesviewednotice'] = 'Número de preguntas contestadas: {$a->nquestions} (Usted debería contestar al menos {$a->minquestions})';
$string['numerical'] = 'Numérica';
$string['offlinedatamessage'] = 'Usted ha trabajado en este intento usando un dispositivo móvil. Los datos fueron guardados a este sitio hace {$a}. Por favor, revise que Usted no tenga ningun trabajo sin guardar.';
$string['ongoing'] = 'Mostrar puntuación acumulada';
$string['ongoingcustom'] = 'Esta es una lección de {$a->score} puntos. Usted ha obtenido {$a->score} punto(s) sobre {$a->currenthigh} hasta ahora.';
$string['ongoing_help'] = '<p>Cuando se activa esta opción, cada página mostrará los puntos que el estudiante ha obtenido del total de          puntos posible. Por ejemplo, si un estudiante ha contestado correctamente cuatro preguntas de 5 puntos y ha      fallado una pregunta, la puntuación provisional será de 15/20 puntos.</p>';
$string['ongoingnormal'] = 'Usted ha respondido correctamente {$a->correct} pregunta(s) de un total de {$a->viewed} pregunta(s).';
$string['onpostperpage'] = 'Solo un mensaje por calificación';
$string['openafterclose'] = 'Usted ha especificado una fecha de apertura posterior a  la fecha de cierre.';
$string['options'] = 'Opciones';
$string['or'] = 'O';
$string['ordered'] = 'Ordenado';
$string['other'] = 'Otro';
$string['outof'] = 'Sobre un total de {$a}';
$string['override'] = 'Anular';
$string['overridedeletegroupsure'] = '¿Está Usted seguro de querer eliminar la anulación para el grupo {$a}?';
$string['overridedeleteusersure'] = '¿Está Usted seguro de querer eliminar la anulación para el usuario {$a}?';
$string['overridegroup'] = 'Anular grupo';
$string['overridegroupeventname'] = '{$a->lesson} - {$a->group}';
$string['overrides'] = 'Anulaciones';
$string['overrideuser'] = 'Anular usuario';
$string['overrideusereventname'] = '{$a->lesson} - Anulación';
$string['overview'] = 'Visión general';
$string['overview_help'] = 'Una lección se compone de un conjunto de páginas y, ocasionalmente, de páginas de contenido. Una página contiene información y normalmente termina con una pregunta. Con cada respuesta a la pregunta está asociado un salto. Este puede ser relativo (e.g., a la página actual o a la siguiente) o absoluto (e.g., a cualquiera de las páginas de la lección). Una página de contenido es aquella que contiene un conjunto de enlaces a otras páginas de la lección, e.g., una Tabla de Contenidos.';
$string['page'] = 'Página: {$a}';
$string['pageanswers'] = 'Respuestas de página';
$string['pagecontents'] = 'Contenido de la página';
$string['page-mod-lesson-edit'] = 'Editar página de lección';
$string['page-mod-lesson-view'] = 'Ver o previsualizar página de lección';
$string['page-mod-lesson-x'] = 'Cualquier página de lección';
$string['pageresponses'] = 'Respuestas de página';
$string['pages'] = 'Páginas';
$string['pagetitle'] = 'Título de la página';
$string['password'] = 'Contraseña';
$string['passwordprotectedlesson'] = '{$a} es una lección protegida con contraseña.';
$string['pleasecheckoneanswer'] = 'Seleccione una respuesta';
$string['pleasecheckoneormoreanswers'] = 'Seleccione una o más respuestas';
$string['pleaseenteryouranswerinthebox'] = 'Por favor, escriba su respuesta en la caja';
$string['pleasematchtheabovepairs'] = 'Relacione las siguientes parejas';
$string['pluginadministration'] = 'Administración de la lección';
$string['pluginname'] = 'Lección';
$string['pointsearned'] = 'Puntos ganados';
$string['postprocesserror'] = 'Ha ocurrido un error durante el post-procesamiento';
$string['postsuccess'] = 'Mensaje exitoso';
$string['practice'] = 'Lección de práctica';
$string['practice_help'] = '<p>Las lecciones de práctica no se mostrarán en el libro de calificaciones.</p>';
$string['preprocesserror'] = 'Ha ocurrido un error durante el pre-procesamiento';
$string['prerequisiteisobsolete'] = 'La opción de lección pre-requisito está programada para eliminarse. Por favor, use en su lugar las restricciones de acceso.';
$string['prerequisitelesson'] = 'Lección con pre-requisito';
$string['preview'] = 'Previsualizar';
$string['previewlesson'] = 'Previsualizar {$a}';
$string['previewpagenamed'] = 'Previsualizar página: {$a}';
$string['previouspage'] = 'Página anterior';
$string['privacy:metadata:attempts'] = 'Un registro de intentos de página';
$string['privacy:metadata:attempts:answerid'] = 'La ID de la respuesta';
$string['privacy:metadata:attempts:correct'] = 'Si es que el intento fue correcto o no';
$string['privacy:metadata:attempts:pageid'] = 'La ID de la página';
$string['privacy:metadata:attempts:retry'] = 'El número del intento';
$string['privacy:metadata:attempts:timeseen'] = 'El momento cuando fue hecho el intento';
$string['privacy:metadata:attempts:useranswer'] = 'Detalles acerca de la respuesta del usuario';
$string['privacy:metadata:attempts:userid'] = 'La ID del usuario';
$string['privacy:metadata:branch'] = 'Un registro de las páginas vistas';
$string['privacy:metadata:branch:flag'] = 'Si es que la página siguiente fue calculada aleatoriamente o no';
$string['privacy:metadata:branch:nextpageid'] = 'La ID de la página siguiente';
$string['privacy:metadata:branch:pageid'] = 'La ID de la página';
$string['privacy:metadata:branch:retry'] = 'El número del intento';
$string['privacy:metadata:branch:timeseen'] = 'El momento cuando fue vista la página';
$string['privacy:metadata:branch:userid'] = 'La ID del usuario';
$string['privacy:metadata:grades'] = 'Un registro de las calificaciones para cada lección';
$string['privacy:metadata:grades:completed'] = 'El momento cuando fue dada la calificación';
$string['privacy:metadata:grades:grade'] = 'La calificación dada';
$string['privacy:metadata:grades:userid'] = 'La ID del usuario';
$string['privacy:metadata:overrides'] = 'Un registro de anulaciones por lección';
$string['privacy:metadata:overrides:available'] = 'El momento cuando la lección puede ser intentada';
$string['privacy:metadata:overrides:deadline'] = 'La fecha límite para completar la lección.';
$string['privacy:metadata:overrides:maxattempts'] = 'El número máximo de intentos';
$string['privacy:metadata:overrides:password'] = 'La contraseña para acceder a la lección';
$string['privacy:metadata:overrides:retake'] = 'Si es que se permiten re-tomas';
$string['privacy:metadata:overrides:review'] = 'Si es que se permite intentar nuevamente una preguna';
$string['privacy:metadata:overrides:timelimit'] = 'Límite de tiempo, en segundos, para completar la lección.';
$string['privacy:metadata:overrides:userid'] = 'La ID del usuario';
$string['privacy:metadata:timer'] = 'Un registro de un intento de lección';
$string['privacy:metadata:timer:completed'] = 'Si es que la lección está o no completa';
$string['privacy:metadata:timer:lessontime'] = 'El último momento cuando grabamos actividad';
$string['privacy:metadata:timer:starttime'] = 'El momento cuando inició el intento';
$string['privacy:metadata:timer:timemodifiedoffline'] = 'El último momento cuando grabamos actividad desde la App mobile';
$string['privacy:metadata:timer:userid'] = 'La ID del usuario';
$string['privacy:metadata:userpref:lessonview'] = 'El modo de visualización preferido al editar lecciones';
$string['privacy:path:essayanswers'] = 'Respuestas fáciles';
$string['privacy:path:essayresponses'] = 'respuestas de ensayo';
$string['privacy:path:pages'] = 'Páginas';
$string['processerror'] = 'Ha ocurrido un error durante el procesamiento';
$string['progressbar'] = 'Barra de progreso';
$string['progressbar_help'] = 'Si se habilita,una barra es mostrada al fondo de las páginas de lección mostrando porcentajes aproximados de finalización.';
$string['progressbarteacherwarning'] = 'La barra de progreso no se muestra para {$a}';
$string['progressbarteacherwarning2'] = 'Usted no verá la barra de progreso porque puede editar esta lección';
$string['progresscompleted'] = 'Usted ha completado  {$a}% de la lección';
$string['qtype'] = 'Tipo de página';
$string['question'] = 'Pregunta';
$string['questionoption'] = 'Opción de pregunta';
$string['questiontype'] = 'Tipo de pregunta';
$string['randombranch'] = 'Página de contenido aleatorio';
$string['randompageinbranch'] = 'Pregunta aleatoria dentro de una página de contenido';
$string['rank'] = 'Rango';
$string['rawgrade'] = 'Calificación en bruto';
$string['receivedcredit'] = 'Crédito recibido';
$string['redisplaypage'] = 'Volver a mostrar página';
$string['removeallgroupoverrides'] = 'Eliminar todas las anulaciones de grupo';
$string['removealluseroverrides'] = 'Eliminar todas las anulaciones de usuario';
$string['report'] = 'Reporte';
$string['reports'] = 'Reportes';
$string['response'] = 'Comentario';
$string['retakesallowed'] = 'Se permite volver a tomar la lección';
$string['retakesallowed_help'] = '<p>Esta opción determina si los alumnos pueden tomar una lección más de una vez. El profesor puede decidir que la lección contiene material que los alumnos deben conocer en profundidad, en cuyo caso se debería permitir que el alumno repita la lección. Por otro lado, si el material se utiliza como examen esto no debería permitirse.
</p>

<p>Cuando a los alumnos se les permite repetir la lección, la <b>calificación</b> que aparece
    en la página Calificaciones corresponde bien al <B>promedio</B> de calificaciones, bien al <b>mejor</b> resultado obtenido en las repeticiones.
    El siguiente parámetro determina cuál de esas dos alternativas de calificación se utilizará.
</p>
<p>Advierta que el <b>Análisis de Pregunta</b> siempre utiliza las respuestas de los primeros intentos, y que las repeticiones subsiguientes no son tenidas en cuenta.</p>
<p>La opción por defecto es <b>Sí</b>, lo que significa que los alumnos pueden retomar la lección. Se espera que sólo bajo condiciones excepcionales se seleccione la opción <b>No</b>.
</p>';
$string['returnto'] = 'Regresar a {$a}';
$string['returntocourse'] = 'Volver al curso';
$string['reverttodefaults'] = 'Revertir a valores por defecto de la lección';
$string['review'] = 'Revisión';
$string['reviewlesson'] = 'Revisar lección';
$string['reviewquestionback'] = 'Sí, me gustaría probar de nuevo';
$string['reviewquestioncontinue'] = 'No, deseo pasar a la siguiente';
$string['sanitycheckfailed'] = 'Ha fallado el \'Sanity Check\': Este intento se ha eliminado';
$string['save'] = 'Guardar';
$string['savechanges'] = 'Guardar cambios';
$string['savechangesandeol'] = 'Guardar todos los cambios e ir al final de la lección.';
$string['saveoverrideandstay'] = 'Guardar y escribir otra anulación';
$string['savepage'] = 'Guardar página';
$string['score'] = 'Puntuación';
$string['score_help'] = 'El puntaje solamente es usado cuando se habilita el puntaje personalizado. A cada respuesta se le dará entonces un valor numérico (positivo o negativo) en puntos.';
$string['scores'] = 'Puntuaciones';
$string['search:activity'] = 'Lección - información de actividad';
$string['secondpluswrong'] = 'No. ¿Desea probar de nuevo?';
$string['selectallattempts'] = 'Seleccionar todos los intentos';
$string['selectaqtype'] = 'Seleccione un tipo de pregunta';
$string['sent'] = 'Enviado';
$string['shortanswer'] = 'Respuesta corta';
$string['showanunansweredpage'] = 'Mostrar una página no contestada';
$string['showanunseenpage'] = 'Mostrar una página no vista';
$string['singleanswer'] = 'Respuesta única';
$string['skip'] = 'Pasar por alto la navegación';
$string['slideshow'] = 'Pase de diapositivas';
$string['slideshowbgcolor'] = 'Color de fondo del pase de diapositivas';
$string['slideshowheight'] = 'Altura del pase de diapositivas';
$string['slideshow_help'] = '<p>Esta opción permite mostrar la lección como una sesión de diapositivas, con una
anchura, altura y color de fondo personalizado fijos. Se mostrará una barra de
desplazamiento basada en CSS si el contenido de la página excede la anchura o la altura
seleccionadas. Por defecto, las preguntas se "desgajarán" del modo de pase de
diapositivas, y sólo las páginas (i.e., tablas de ramas) se mostrarán en una
diapositiva. Los botones etiquetados por el idioma por defecto como "Siguiente" y
"Anterior" aparecerán en los extremos derecho e izquierdo de la diapositiva si
tal opción es seleccionada en la página. El resto de los botones aparecerán centrados
debajo de la diapositiva.</p>';
$string['slideshowwidth'] = 'Anchura del pase de diapositivas';
$string['startlesson'] = 'Comenzar lección';
$string['studentattemptlesson'] = 'Intento número {$a->attempt} de {$a->lastname}, {$a->firstname}';
$string['studentname'] = '{$a} Nombre';
$string['studentoneminwarning'] = 'Advertencia: Le queda 1 minuto o menos para terminar la lección.';
$string['studentoutoftimeforreview'] = 'Atención: A Usted se le terminó el tiempo para revisar esta lección';
$string['studentresponse'] = 'comentario de {$a}';
$string['submit'] = 'Enviar';
$string['submitname'] = 'Enviar nombre';
$string['teacherjumpwarning'] = 'Un salto {$a->cluster} o {$a->unseen} se está usando en esta lección. En su lugar se usará el salto a la página siguiente. Ingrese como estudiante para probar estos saltos.';
$string['teacherongoingwarning'] = 'La puntuación acumulada sólo se muestra al estudiante. Ingrese como estudiante para probar la puntuación acumulada.';
$string['teachertimerwarning'] = 'El temporizador sólo funciona con estudiantes. Entre como estudiante para probar el temporizador.';
$string['thatsthecorrectanswer'] = 'Esta es la respuesta correcta';
$string['thatsthewronganswer'] = 'Esta es la respuesta equivocada';
$string['thefollowingpagesjumptothispage'] = 'Las páginas siguientes saltan a esta página';
$string['thispage'] = 'Esta página';
$string['timeisup'] = 'Se agotó el tiempo';
$string['timelimit'] = 'Límite de tiempo';
$string['timelimit_help'] = 'Si se habilita, se muestra una advertencia acerca del límite de tiempo al principio de la lección y se muestra un cronómetro descendente. Cualquier respuesta dada después de que el tiempo se haya agotado no es calificada.';
$string['timelimitwarning'] = 'Usted tiene {$a} para terminar la lección.';
$string['timeremaining'] = 'Tiempo restante';
$string['timespenterror'] = 'Dedicar al menos {$a} minutos a la lección';
$string['timespentminutes'] = 'Tiempo empleado (minutos)';
$string['timetaken'] = 'Tiempo empleado';
$string['totalpagesviewedheader'] = 'Número de páginas vistas';
$string['true'] = 'Verdadero';
$string['truefalse'] = 'Falso/Verdadero';
$string['unabledtosavefile'] = 'El archivo que ha subido no se ha podido guardar';
$string['unknownqtypesnotimported'] = 'No se importaron {$a} preguntas con tipos de pregunta no soportados';
$string['unseenpageinbranch'] = 'Pregunta no vista dentro de una página de conenidos';
$string['unsupportedqtype'] = '¡Tipo de pregunta no soportado ({$a})!';
$string['updatedpage'] = 'Página actualizada';
$string['updatefailed'] = 'Actualización fallida';
$string['updatepagenamed'] = 'Actualizar página: {$a}';
$string['usemaximum'] = 'Utilizar el máximo';
$string['usemean'] = 'Utilizar la media';
$string['usepassword'] = 'Lección protegida con contraseña';
$string['usepassword_help'] = '<p>Si se selecciona esta opción, el estudiante no podrá acceder a la lección a menos que escriba la contraseña.</p>';
$string['useroverrides'] = 'Anulaciones de usuario';
$string['useroverridesdeleted'] = 'Anulaciones de usuario eliminadas';
$string['usersnone'] = 'Ningún estudiante tiene acceso a esta lección';
$string['viewessayanswers'] = 'Ver respuestas de ensayos';
$string['viewgrades'] = 'Ver calificaciones';
$string['viewreports'] = 'Ver {$a->attempts} intentos {$a->student} completados';
$string['viewreports2'] = 'Ver {$a} intentos completados';
$string['warning'] = 'Advertencia';
$string['welldone'] = '¡Bien hecho!';
$string['whatdofirst'] = '¿Qué desea hacer primero?';
$string['withselectedattempts'] = 'Con intentos seleccionados...';
$string['wronganswerjump'] = 'Salto a respuesta errónea';
$string['wronganswerscore'] = 'Puntuación de respuesta errónea';
$string['wrongresponse'] = 'Comentario (erróneo)';
$string['xattempts'] = '{$a} intentos';
$string['youhaveseen'] = 'Usted ya ha visto más de una página de esta lección.<br />¿Desea comenzar desde la última página vista?';
$string['youranswer'] = 'Su respuesta';
$string['yourcurrentgradeis'] = 'Su calificación actual es {$a}';
$string['yourcurrentgradeisoutof'] = 'Su calificación actual es {$a->grade} sobre {$a->total}';
$string['youshouldview'] = 'Usted debería ver como mínimo: {$a}';
