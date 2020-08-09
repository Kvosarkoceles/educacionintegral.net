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
 * Strings for component 'assign', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   assign
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityoverview'] = 'Usted tiene tareas que requieren su atención';
$string['addattempt'] = 'Permitir otro intento';
$string['addnewattempt'] = 'Añadir un nuevo intento';
$string['addnewattemptfromprevious'] = 'Añadir un nuevo intento basado en un envío anterior';
$string['addnewattemptfromprevious_help'] = 'Esto copiará los contenidos de sus envíos previos a un nuevo envío, para que Usted trabaje en él.';
$string['addnewattempt_help'] = 'Esto creará un nuevo envío vacío, para que Usted trabaje en él.';
$string['addnewgroupoverride'] = 'Añadir anulación de grupo';
$string['addnewuseroverride'] = 'Añadir anulación de usuario';
$string['addsubmission'] = 'Añadir envío';
$string['addsubmission_help'] = 'Usted aún no ha hecho un envío.';
$string['allocatedmarker'] = 'Marcador Asignado';
$string['allocatedmarker_help'] = 'Evaluador asignado a este envío.';
$string['allowsubmissions'] = 'Permitir al usurio continuar haciendo entregas a esta tarea';
$string['allowsubmissionsanddescriptionfromdatesummary'] = 'Los detalles de la tarea y el formato de entrega estarán disponibles en <strong>{$a}</strong>';
$string['allowsubmissionsfromdate'] = 'Permitir envíos a partir de';
$string['allowsubmissionsfromdate_help'] = 'Si se habilita, los estudiantes no podrán envíar nada antes de esta fecha. Si se deshabilita, los estudiantes podrán empezar a enviar inmediatamente.';
$string['allowsubmissionsfromdatesummary'] = 'Esta tarea aceptará entregas de <strong>{$a}</strong>';
$string['allowsubmissionsshort'] = 'Permitir cambios en la entrega';
$string['alwaysshowdescription'] = 'Siempre mostrar descripción';
$string['alwaysshowdescription_help'] = 'Si está deshabilitado, la descripción de la Tarea superior solo será visible para los estudiantes en la fecha "Permitir envíos a partir de",';
$string['applytoteam'] = 'Aplicar calificaciones y retroalimentación a todo el equipo';
$string['assign:addinstance'] = 'Añadir una nueva tarea';
$string['assign:editothersubmission'] = 'Editar los envios de otros estudiantes';
$string['assign:exportownsubmission'] = 'Exportar entrega propia';
$string['assignfeedback'] = 'Plugin de retroalimentación';
$string['assignfeedbackpluginname'] = 'Plugin de retroalimentación';
$string['assign:grade'] = 'Calificar tarea';
$string['assign:grantextension'] = 'Otorgar extensión';
$string['assign:manageallocations'] = 'Gestionar marcadores asignados a envíos';
$string['assign:managegrades'] = 'revisar y liberar calificaciones';
$string['assign:manageoverrides'] = 'Gestionar anulaciones de tarea';
$string['assignmentisdue'] = 'La tarea ha vencido';
$string['assignmentmail'] = '{$a->grader} ha puesto una retroalimentación en su entrega a la tarea de \'{$a->assignment}\'

Usted puede verla añadida a su entrega: {$a->url}';
$string['assignmentmailhtml'] = '<p>{$a->grader} ha puesto una retroalimentación en su entrega a la tarea de \'<i>{$a->assignment</i>\'</p>
<p>
Usted puede verla añadida a su entrega: <a href="{$a->url}" </a>.</p>';
$string['assignmentmailsmall'] = '{$a->grader} has puesto una retroalimentación en su entrega a la tarea de \'{$a->assignment}\'

Usted puede verla añadida a su entrega';
$string['assignmentname'] = 'Nombre de la tarea';
$string['assignmentplugins'] = 'Plugins de tarea';
$string['assignmentsperpage'] = 'Tareas por página';
$string['assign:receivegradernotifications'] = 'Recibir notificaciones de envío del evaluador';
$string['assign:releasegrades'] = 'Liberar calificaciones';
$string['assign:revealidentities'] = 'Revelar las identidades de los estudiantes';
$string['assign:reviewgrades'] = 'Revisar calificaciones';
$string['assign:showhiddengrader'] = 'Ver la identidad de un evaluador oculto';
$string['assignsubmission'] = 'Plugin de entregas';
$string['assignsubmissionpluginname'] = 'Plugin de entregas';
$string['assign:submit'] = 'Enviar tarea';
$string['assign:view'] = 'Ver tarea';
$string['assign:viewblinddetails'] = 'Ver identidad de estudiantes cuando se habilite calificación ciega';
$string['assign:viewgrades'] = 'Ver calificaciones';
$string['attemptheading'] = 'Intento {$a->attemptnumber}: {$a->submissionsummary}';
$string['attempthistory'] = 'Intentos previos';
$string['attemptnumber'] = 'Número de intento';
$string['attemptreopenmethod'] = 'Intentos reabiertos';
$string['attemptreopenmethod_help'] = 'Determina cómo se reabren los envíos de los estudiantes. Las opciones disponibles son:

* Nunca- El envío del estudiante no puede ser reabierto.
* Manualmente -  El envío del estudiante puede ser reabierto por un profesor.
* Automáticamente hasta pasar - El envío del estudiante es reabierto automáticamente, hasta que el estudiante alcance la calificación necesaria para pasar (aprobar), que está configurada en el libro de calificaciones para esta tarea.';
$string['attemptreopenmethod_manual'] = 'Manualmente';
$string['attemptreopenmethod_none'] = 'Nunca';
$string['attemptreopenmethod_untilpass'] = 'Automáticamente hasta pasar';
$string['attemptsettings'] = 'Configuraciones del intento';
$string['availability'] = 'Disponibilidad';
$string['backtoassignment'] = 'Volver a la tarea';
$string['batchoperationconfirmaddattempt'] = '¿Permitir otro intento para los envíos seleccionados?';
$string['batchoperationconfirmdownloadselected'] = '¿Descargar envíos seleccionados?';
$string['batchoperationconfirmgrantextension'] = '¿Otorgar una extensión a todos los envíos seleccionados?';
$string['batchoperationconfirmlock'] = '¿Bloquear todas las entregas seleccionadas?';
$string['batchoperationconfirmremovesubmission'] = '¿Quitar envíos seleccionados?';
$string['batchoperationconfirmreverttodraft'] = 'Revertir loas entregas seleccionados a borrador?';
$string['batchoperationconfirmsetmarkingallocation'] = '¿ Configurar asignación de calificadores para todos los envíos seleccionados ?';
$string['batchoperationconfirmsetmarkingworkflowstate'] = '¿ Configurar estado del flujograma calificador para todos los envíos seleccionados ?';
$string['batchoperationconfirmunlock'] = '¿Desbloquear todas las entregas seleccionadas?';
$string['batchoperationlock'] = 'bloquear entregas';
$string['batchoperationreverttodraft'] = 'revertir entregas a borrador';
$string['batchoperationsdescription'] = 'Con las seleccionadas...';
$string['batchoperationunlock'] = 'desbloquear entregas';
$string['batchsetallocatedmarker'] = 'Configurar calificador asignado  para {$a} usuario(s) seleccionado(s).';
$string['batchsetmarkingworkflowstateforusers'] = 'Configurar  estado del flujograma calificador  para {$a} usuario(s) seleccionado(s).';
$string['blindmarking'] = 'Calificación ciega';
$string['blindmarkingenabledwarning'] = 'La calificación ciega está habilitada en esta actividad.';
$string['blindmarking_help'] = 'La calificación ciega oculta la identidad de los estudiantes a los evaluadores. Las configuraciones de calificación ciega se bloquearán en cuanto  se haga  un envío o se ponga una calificación con respecto a esta tarea.';
$string['calendardue'] = '{$a} está en fecha de entrega';
$string['calendargradingdue'] = '{$a} está pendiente de ser calificada';
$string['changefilters'] = 'Cambiar filtros';
$string['changeuser'] = 'Cambiar usuario';
$string['choosegradingaction'] = 'Acción de calificar';
$string['choosemarker'] = 'Elija...';
$string['chooseoperation'] = 'Elegir operación';
$string['clickexpandreviewpanel'] = 'Haga clic para expandir el panel de revisión';
$string['collapsegradepanel'] = 'Colapsar el panel de revisión';
$string['collapsereviewpanel'] = 'Colapsar el panel de revisión';
$string['comment'] = 'Comentario';
$string['completionsubmit'] = 'Los estudiantes deben enviar a esta actividad para completarla';
$string['configshowrecentsubmissions'] = 'Todos pueden ver las notificaciones de las entregas en los reportes de actividad reciente.';
$string['confirmbatchgradingoperation'] = '¿Está Usted seguro de querer  {$a->operation} a {$a->count} estudiantes?';
$string['confirmsubmission'] = '¿Está Usted seguro de querer enviar su trabajo para que sea calificado? Usted ya no le podrá hacer más cambios';
$string['confirmsubmissionheading'] = 'Confirmar envío';
$string['conversionexception'] = 'No se pudo convertir tarea. La excepción fue: {$a}';
$string['couldnotconvertgrade'] = 'No se pudo convertir calificación de tarea del usuario {$a}.';
$string['couldnotconvertsubmission'] = 'No se pudo convertir la calificación de la entrega a la tarea del usuario {$a}.';
$string['couldnotcreatecoursemodule'] = 'No pudo crearse módulo de curso';
$string['couldnotcreatenewassignmentinstance'] = 'No se pudo crear nueva instancia tarea.';
$string['couldnotfindassignmenttoupgrade'] = 'No se pudo encontrar instancias de tarea anteriores para actualizar.';
$string['crontask'] = 'Procesamiento en segundo plano para módulo tarea';
$string['currentassigngrade'] = 'Calificación actual en tarea';
$string['currentattempt'] = 'Éste es el intento {$a}.';
$string['currentattemptof'] = 'Éste es el intento {$a->attemptnumber} ( {$a->maxattempts} intentos permitidos ).';
$string['currentgrade'] = 'Calificación actual en el libro';
$string['cutoffdate'] = 'Fecha de corte';
$string['cutoffdatecolon'] = 'Fecha de corte: {$a}';
$string['cutoffdatefromdatevalidation'] = 'La fecha de corte no puede ser anterior a la fecha de \'Permitir envíos a partir de\'.';
$string['cutoffdate_help'] = 'Si se configura, la tarea no aceptará envíos después de esta fecha si no hubiera extensiones.';
$string['cutoffdatevalidation'] = 'La fecha de corte no puede ser anterior a la fecha de entrega.';
$string['defaultlayout'] = 'Restaurar el diseño por defecto';
$string['defaultsettings'] = 'Parámetros por defecto de la tareas';
$string['defaultsettings_help'] = 'Estos parámetros definen los valores por defecto para todas las nuevas tareas.';
$string['defaultteam'] = 'Grupo por defecto';
$string['deleteallsubmissions'] = 'Eliminar todos los envíos';
$string['description'] = 'Descripción';
$string['disabled'] = 'Deshabilitado';
$string['downloadall'] = 'Descargar todas las entregas';
$string['downloadasfolders'] = 'Descargar envíos en carpetas';
$string['downloadasfolders_help'] = 'Los envíos de tarea pueden descargarse en carpetas. Cada envío es puesto en una carpeta separada, con la estructura de la carpeta conservada para cualquier subcarpeta, y los archivos no son renombrados.';
$string['downloadselectedsubmissions'] = 'Descargar envíos seleccionados';
$string['duedate'] = 'Fecha de entrega';
$string['duedatecolon'] = 'Fecha esperada: {$a}';
$string['duedate_help'] = 'Esta es la fecha cuando se debería de entregar la tarea. Los envíos seguirán siendo permitidos aún después de esta fecha de entrega, pero cualquier envío mandado después de esta fecha será marcado como \'retrasado\'. Para evitar que se puedan enviar tareas depués de una cierta fecha debe configurar la fecha de corte.';
$string['duedateno'] = 'No hay fecha de entrega';
$string['duedatereached'] = 'La fecha de vencimiento de esta tarea ya ha pasado';
$string['duedatevalidation'] = 'La fecha de entrega no puede ser anterior a la fecha de Permitir envíos a partir de.';
$string['duplicateoverride'] = 'Duplicar anulación';
$string['editaction'] = 'Acciones...';
$string['editattemptfeedback'] = 'Editar la calificación y retroalimentación para el intento número {$a}.';
$string['editingpreviousfeedbackwarning'] = 'Usted está editando la retroalimentación para un intento previo. Éste es el intento {$a->attemptnumber} de un total de {$a->totalattempts}.';
$string['editingstatus'] = 'Estatus de edición';
$string['editonline'] = 'Editar en línea';
$string['editoverride'] = 'Editar anulación';
$string['editsubmission'] = 'Editar envío';
$string['editsubmission_help'] = 'Usted todavía puede hacer cambios a su envío.';
$string['editsubmissionother'] = 'Editar envios para {$a}';
$string['enabled'] = 'Habilitado';
$string['errornosubmissions'] = 'No hay entregas que descargar';
$string['errorquickgradingvsadvancedgrading'] = 'Las calificacines no se guardaron porque esta tarea actualmente está empleando calificación avanzada';
$string['errorrecordmodified'] = 'Las calificaciones no se guardaron porque alguien acaba de modificar uno o más registros, antes de que usted terminara de cargar la página';
$string['eventallsubmissionsdownloaded'] = 'Todos los envíos están siendo descargados.';
$string['eventassessablesubmitted'] = 'Se ha enviado un envío';
$string['eventbatchsetmarkerallocationviewed'] = 'Asignación de marcador de conjunto de lote vista';
$string['eventbatchsetworkflowstateviewed'] = 'Estado del Flujograma de configuración masiva vista.';
$string['eventextensiongranted'] = 'Se ha otorgado una extensión.';
$string['eventfeedbackupdated'] = 'Retroalimentación actualizada';
$string['eventfeedbackviewed'] = 'Retroalimentación vista';
$string['eventgradingformviewed'] = 'Formato para calificar visto';
$string['eventgradingtableviewed'] = 'Tabla para calificar vista';
$string['eventidentitiesrevealed'] = 'Las identidades han sido reveladas';
$string['eventmarkerupdated'] = 'El marcador asignado ha sido actualizado.';
$string['eventoverridecreated'] = 'Anulación de tarea creada';
$string['eventoverridedeleted'] = 'Anulación de tarea eliminada';
$string['eventoverrideupdated'] = 'Anulación de tarea  actualizada';
$string['eventremovesubmissionformviewed'] = 'Confirmación de remoción de envío vista.';
$string['eventrevealidentitiesconfirmationpageviewed'] = 'Página de confirmación de revelación de identidades.';
$string['eventstatementaccepted'] = 'El usuario ha aceptado la declaratoria del envío.';
$string['eventsubmissionconfirmationformviewed'] = 'Formato de confirmación de envío visto.';
$string['eventsubmissioncreated'] = 'Envío creado.';
$string['eventsubmissionduplicated'] = 'El usuario duplicó su envío.';
$string['eventsubmissionformviewed'] = 'Formato de envío visto.';
$string['eventsubmissiongraded'] = 'El envío ha sido calificado.';
$string['eventsubmissionlocked'] = 'Los envíos han sido bloqueados para un usuario.';
$string['eventsubmissionstatusupdated'] = 'El estatus del envío ha sido actualizado';
$string['eventsubmissionstatusviewed'] = 'El estatus del envío ha sido visto.';
$string['eventsubmissionunlocked'] = 'Los envíos han sido des-bloqueados para un usuario.';
$string['eventsubmissionupdated'] = 'El usuario ha guardado un envío.';
$string['eventsubmissionviewed'] = 'Envío visto.';
$string['eventworkflowstateupdated'] = 'El estado del flujograma ha sido actualizado.';
$string['expandreviewpanel'] = 'Expandir el panel de revisión';
$string['extensionduedate'] = 'Fecha de entrega extendida';
$string['extensionnotafterduedate'] = 'La fecha extendida debe ser posterior a la fecha de entrega original';
$string['extensionnotafterfromdate'] = 'La fecha extendida debe ser posterior a la fecha de Permitir envíos a partir de';
$string['feedback'] = 'Retroalimentación';
$string['feedbackavailableanonhtml'] = 'Usted tiene nueva retroalimentación en su envío de tarea para  \'<i>{$a->assignment}</i>\'<br /><br />

Usted puede verla anexada a su <a href="{$a->url}">envío de tarea</a>.';
$string['feedbackavailableanonsmall'] = 'Nueva retroalimentación para tarea {$a->assignment}';
$string['feedbackavailableanontext'] = 'Usted tiene nueva retroalimentación en su envío de tarea para \'{$a->assignment}\'

Usted puede verla anexada a su envío de tarea:

{$a->url}';
$string['feedbackavailablehtml'] = '{$a->username} ha publicado retroalimentación a su envío de tarea para \'<i>{$a->assignment}</i>\'<br /><br /> Usted puede verla incluída en su <a href="{$a->url}">envío de tarea</a>.';
$string['feedbackavailablesmall'] = '{$a->username} ha proporcionado retroalimentación para la tarea {$a->assignment}';
$string['feedbackavailabletext'] = '{$a->username}  ha publicado retroalimentación a su envío de tarea para \'{$a->assignment}\' Usted puede verla incluída en suenvío de tarea';
$string['feedbackplugin'] = 'Plugin de retroalimentación';
$string['feedbackpluginforgradebook'] = 'Plugin de retroalimentación que empujará comentarios al libro de calificaciones';
$string['feedbackpluginforgradebook_help'] = 'Solamente un plugin de retroalimentación de tarea puede empujar retroalimentación al libro de calificaciones';
$string['feedbackplugins'] = 'Plugins de retroalimentación';
$string['feedbacksettings'] = 'Configuraciones de retroalimentación';
$string['feedbacktypes'] = 'Tipos de retroalimentación';
$string['filesubmissions'] = 'Envíos de archivo';
$string['filter'] = 'Filtro';
$string['filtergrantedextension'] = 'Extensión otorgada';
$string['filternone'] = 'Sin filtro';
$string['filternotsubmitted'] = 'No enviado';
$string['filterrequiregrading'] = 'Requiere calificación';
$string['filtersubmitted'] = 'Enviada';
$string['fixrescalednullgrades'] = 'Esta tarea contiene algunas calificaciones erróneas. Usted puede <a href="{$a->link}">corregir automáticamente estas calificaciones</a>. Esto podría afectar los totales del curso.';
$string['fixrescalednullgradesconfirm'] = '¿ Está seguro de querer corregir calificaciones erróneas ? Todas las calificaciones afectadas serán eliminadas. Esto podría afectar los totales del curso.';
$string['fixrescalednullgradesdone'] = 'Calificaciones corregidas.';
$string['gradeabovemaximum'] = 'La calificación debe ser menor o igual a {$a}.';
$string['gradebelowzero'] = 'La calificación debe ser mayor o igual a cero.';
$string['gradecanbechanged'] = 'La calificación puede cambiarse';
$string['gradechangessaveddetail'] = 'Se guardaron los cambios a la calificación y a la retroalimentación';
$string['graded'] = 'Calificado';
$string['gradedby'] = 'Calificado por';
$string['gradedfollowupsubmit'] = 'Calificada - envío posterior recibido';
$string['gradedon'] = 'Calificado en';
$string['gradeitem:submissions'] = 'Envíos';
$string['gradelocked'] = 'La calificación está bloqueada o anulada en el libro de calificaciones.';
$string['gradeoutof'] = 'Calificación sobre {$a}';
$string['gradeoutofhelp'] = 'Calificación';
$string['gradeoutofhelp_help'] = 'Introduzca aquí la calificación para los envíos del estudiante. Puede utilizar decimales.';
$string['gradersubmissionupdatedhtml'] = '{$a->username} ha actualizado la entrega de su tarea a
<i>\'{$a->assignment}\'</i><br /><br />
Está <a href="{$a->url}">disponible en el sitio web</a>.';
$string['gradersubmissionupdatedsmall'] = '{$a->username} ha actualizado su entrega a la tarea  {$a->assignment}.';
$string['gradersubmissionupdatedtext'] = '{$a->username} ha actualizado la entrega de su tarea
a \'{$a->assignment}\' en {$a->timeupdated}

Está disponible aquí:

{$a->url}';
$string['gradestudent'] = 'calificar estudiante: (id={$a->id}, nombrecompleto={$a->fullname}).';
$string['gradeuser'] = 'Calificación {$a}';
$string['grading'] = 'Calificando';
$string['gradingchangessaved'] = 'Los cambios en la calificación fueron guardados';
$string['gradingduedate'] = 'Recordarme calificar en';
$string['gradingduedate_help'] = 'La fecha esperada en la que debería de haberse completado la calificación de los envíos. Esta fecha es usada para priorizar las notificaciones del Tablero para los profesores.';
$string['gradingdueduedatevalidation'] = 'La fecha para recordarme calificar  no puede ser antes de la fecha esperada.';
$string['gradingduefromdatevalidation'] = 'La fecha para recordarme calificar  no puede ser antes de la fecha para Permitir envíos a partir de.';
$string['gradingmethodpreview'] = 'Criterio para calificar';
$string['gradingoptions'] = 'Opciones del listado de calificaciones';
$string['gradingstatus'] = 'Estatus de calificación';
$string['gradingstudent'] = 'Calificando estudiante';
$string['gradingsummary'] = 'Sumario de calificaciones';
$string['grantextension'] = 'Otorgar extensión';
$string['grantextensionforusers'] = 'Otorgar extensión para {$a} estudiantes';
$string['groupoverrides'] = 'Anulaciones de grupo';
$string['groupoverridesdeleted'] = 'Anulaciones de grupo eliminadas';
$string['groupsnone'] = 'Sin grupos a los que Usted pueda acceder.';
$string['groupsubmissionsettings'] = 'Configuraciones de envío de grupo';
$string['hiddenuser'] = 'Participante';
$string['hidegrader'] = 'Ocultar a los estudiantes la  identidad del evaluador';
$string['hidegrader_help'] = 'Si se habilita, la identidad de cualquier usuario que califica un envío de tarea no es mostrada, para que los estudiantes no puedan ver quien calificó sus trabajos.

Tenga en cuenta que esta configuración no tiene efecto sobre la caja de comentarios en la página para calificar.';
$string['hideshow'] = 'Ocultar/Mostrar';
$string['inactiveoverridehelp'] = '* Esta anulación está inactiva porque el acceso del usuario a la actividad está restringido. Esto puede ser debido a asignaciones de grupo o de rol, otras restricciones de acceso, o que la actividad esté oculta.';
$string['indicator:cognitivedepth'] = 'Tarea cognitiva';
$string['indicator:cognitivedepthdef'] = 'Tarea cognitiva';
$string['indicator:cognitivedepthdef_help'] = 'El participante ha alcanzado este porcentaje del compromiso cognitivo ofrecido por las actividades de Tarea durante este intervalo de análisis (Niveles = Sin Ver, Ver, Enviar, Ver retroalimentación, Comentar en retroalimentación, Reenviar después de ver retroalimentación)';
$string['indicator:cognitivedepth_help'] = 'Este indicador está basado en la profundidad cognitiva alcanzada por el estudiante en una actividad de Tarea.';
$string['indicator:socialbreadth'] = 'Tarea social';
$string['indicator:socialbreadthdef'] = 'Tarea social';
$string['indicator:socialbreadthdef_help'] = 'El participante ha alcanzado este porcentaje del compromiso social ofrecido por las actividades de Tarea durante este intervalo de análisis (Niveles = Sin participación, Participante solo, Participante con otros)';
$string['indicator:socialbreadth_help'] = 'Este indicador está basado en la amplitud social alcanzada por el estudiante en una actividad de Tarea.';
$string['instructionfiles'] = 'Archivos de instrucciones';
$string['introattachments'] = 'Filtros adicionales';
$string['introattachments_help'] = 'Pueden añadirse filtros adicionales para usar en la tarea, tales como plantillas de respuesta. Los enlaces para descarga de los archivos se mostrarán en la página de la tarea, debajo de la descripción.';
$string['invalidfloatforgrade'] = 'No se entendió la calificación proporcionada: {$a}';
$string['invalidgradeforscale'] = 'La calificación proporcionada no era válida para la escala actual';
$string['invalidoverrideid'] = 'ID de anulación inválida';
$string['lastmodifiedgrade'] = 'Última modificación (calificación)';
$string['lastmodifiedsubmission'] = 'Última modificación (entrega)';
$string['latesubmissions'] = 'Envíos retrasados';
$string['latesubmissionsaccepted'] = 'Permitido hasta {$a}';
$string['loading'] = 'Cargando...';
$string['locksubmissionforstudent'] = 'Evita nuevas entregas del estudiante: (id={$a->id}, nombre={$a->fullname}).';
$string['locksubmissions'] = 'Bloquear entregas';
$string['manageassignfeedbackplugins'] = 'Gestionar plugins de retroalimentación de tarea';
$string['manageassignsubmissionplugins'] = 'Gestionar plugins de envío de tarea';
$string['marker'] = 'Calificador';
$string['markerfilter'] = 'Filtro de calificador';
$string['markerfilternomarker'] = 'Sin marcador';
$string['markingallocation'] = 'Usar asignación de calificador';
$string['markingallocation_help'] = 'Si se habilita al mismo tiempo que  el flujograma calificador, permite que los sujetos calificadores sean asignados a estudiantes individuales.';
$string['markingworkflow'] = 'Usar flujograma calificador';
$string['markingworkflow_help'] = 'Si se habilita, las calificaciones seguirán una serie de etapas del flujograma antes de que sean liberadas a los estudiantes. Ésto permite que haya varias rondas de calificación y permite que todas las calificaciones se liberen para todos los estudiantes a un mismo tiempo.';
$string['markingworkflowstate'] = 'Estado del flujograma calificador';
$string['markingworkflowstate_help'] = 'Los estados posibles del flujograma pueden incluir (dependiendo de sus permisos):

* No calificado - el evaluador todavía no ha empezado
* Siendo calificado - el evaluador ha empezado, pero todavía no ha terminado
* Calificación completada - el evaluador  ha terminado, pero podría necesitar volver a revisar/corregir.
* En revisión - la calificación está ahora con el profesor a cargo del control de calidad
* Lista para liberarse - el profesor a cargo está satisfecho con las calificaciones, pero está esperando antes de darles el acceso a los estudiantes a sus calificaciones
* Liberado - los estudiantes pueden acceder a las calificaciones/retroalimentación';
$string['markingworkflowstateinmarking'] = 'En calificación';
$string['markingworkflowstateinreview'] = 'En revisión';
$string['markingworkflowstatenotmarked'] = 'No calificado';
$string['markingworkflowstatereadyforrelease'] = 'Listo para liberar';
$string['markingworkflowstatereadyforreview'] = 'Calificación completada';
$string['markingworkflowstatereleased'] = 'Liberada';
$string['maxattempts'] = 'Intentos máximos';
$string['maxattempts_help'] = 'El número máximo de intentos de envíos que pueden ser hechos por un estudiante. Después de que se haya alcanzado este número, los envíos no se podrán reabrir.';
$string['maxgrade'] = 'Calificación Máxima';
$string['maxperpage'] = 'Máximo de Tareas por página';
$string['maxperpage_help'] = 'El número máximo de Tareas que un evaluador puede mostrar en la página para calificar tareas. Es útil para prevenir des-conexiones por tiempo excesivo en cursos con muchos participantes.';
$string['messageprovider:assign_notification'] = 'Notificaciones de tareas';
$string['modulename'] = 'Tarea';
$string['modulename_help'] = 'El módulo de actividad tarea le permite al profesor comunicar tareas, recolectar los trabajos y proporcionar calificaciones y retroalimentación.

Los estudiantes pueden enviar cualquier contenido digital (archivos), tal como documentos de procesador de textos, hojas de cálculo, imágenes y clips de audio o video. De forma alterna, o adicional, la tarea puede requerir que el estudiante escriba texto directamente en un campo empleando un editor de texto. Una tarea también puede emplearse para recordarle a los estudiantes sobre tareas \'de la vida real\' que necesitan realizar fuera de línea, como trabajos para clases de arte, asistencia a museos y otras actividades que no requieren de contenidos digitales. Los estudiantes pueden enviar su trabajo en forma individual o como miembros de un equipo.

Cuando se revisan las tareas, los profesores pueden dejar comentarios de retroalimentación y subir archivos; por ejemplo documentos de alumnos con anotaciones del profesor, o comentarios grabados en audio. Las tareas pueden calificarse empleando una escala numérica o escala a la medida, o un método de calificación avanzado como rúbrica. Las calificaciones finales se anotan en el libro de calificaciones.';
$string['modulenameplural'] = 'Tareas';
$string['moreusers'] = '{$a} más...';
$string['multipleteams'] = 'Miembro de más de un grupo';
$string['multipleteams_desc'] = 'Esta tarea requiere envío en grupo. Usted es miembro de más de un grupo. Para poder enviar, Usted debe de ser miembro de exactamente un grupo. Por favor, póngase en contacto con su profesor para actualizar su membresía de grupo.';
$string['multipleteamsgrader'] = 'Miembro de más de un grupo, por lo que no puede hacer envíos.';
$string['mysubmission'] = 'Mi entrega:';
$string['newsubmissions'] = 'Tareas enviadas';
$string['noattempt'] = 'Sin intento';
$string['noclose'] = 'Sin fecha de cierre';
$string['nofiles'] = 'Sin archivos.';
$string['nofilters'] = 'Sin filtros';
$string['nograde'] = 'Sin calificación.';
$string['nolatesubmissions'] = 'No se aceptan envíos retrasados.';
$string['nomoresubmissionsaccepted'] = 'Solamente permitido para participantes que hayan recibido una extensión';
$string['none'] = 'Ninguno(a)';
$string['noonlinesubmissions'] = 'Esta tarea no requiere que usted envíe nada de forma online';
$string['noopen'] = 'Sin fecha de apertura';
$string['nooverridedata'] = 'Usted debe de anular al menos una de las configuraciones de tarea..';
$string['nosavebutnext'] = 'Siguiente';
$string['nosubmission'] = 'No se ha enviado nada en esta tarea';
$string['nosubmissionsacceptedafter'] = 'No se aceptan envíos después de';
$string['noteam'] = 'No es miembro de ningún grupo';
$string['noteam_desc'] = 'Esta tarea requiere envío en grupos. Usted no es miembro de ningún grupo, por lo que no puede crear un envío Por favor, póngase en contacto con su profesor para ser añadido a un grupo.';
$string['noteamgrader'] = 'No es miembro de ningún grupo, por lo que no puede hacer envíos.';
$string['notgraded'] = 'No calificado';
$string['notgradedyet'] = 'No calificado aún';
$string['notifications'] = 'Avisos';
$string['notsubmittedyet'] = 'Aún no ha enviado esta tarea';
$string['nousers'] = 'Sin usuarios';
$string['nousersselected'] = 'Sin usuarios seleccionados';
$string['numberofdraftsubmissions'] = 'Borradores';
$string['numberofparticipants'] = 'Participantes';
$string['numberofsubmissionsneedgrading'] = 'Necesita calificarse';
$string['numberofsubmittedassignments'] = 'Enviados';
$string['numberofteams'] = 'Grupos';
$string['offline'] = 'No se requieren entregas online';
$string['open'] = 'Abierto';
$string['outlinegrade'] = 'Calificación: {$a}';
$string['outof'] = '{$a->current} de un total de {$a->total}';
$string['overdue'] = '<font color="red">La Tarea está retrasada por: {$a}</font>';
$string['override'] = 'Anular';
$string['overridedeletegroupsure'] = '¿Está Usted seguro de querer eliminar la anulación para el grupo {$a}?';
$string['overridedeleteusersure'] = '¿Está Usted seguro de querer eliminar la anulación para el usuario {$a}?';
$string['overridegroup'] = 'Anular grupo';
$string['overridegroupeventname'] = '{$a->assign} - {$a->group}';
$string['overrides'] = 'Anulaciones';
$string['overrideuser'] = 'Anular usuario';
$string['overrideusereventname'] = '{$a->assign} - Anular';
$string['page-mod-assign-view'] = 'Página principal del módulo tareas y entregas';
$string['page-mod-assign-x'] = 'Cualquier página del módulo tarea';
$string['paramtimeremaining'] = '{$a} restante(s)';
$string['participant'] = 'Participante';
$string['pluginadministration'] = 'Administración de tareas';
$string['pluginname'] = 'Tarea';
$string['preventsubmissionnotingroup'] = 'Requerir grupo para hacer envío';
$string['preventsubmissionnotingroup_help'] = 'Si se habilita, los usuarios que no sean miembros de un grupo no podrán hacer envíos.';
$string['preventsubmissions'] = 'Evita que los usuarios realicen más entregas en esta tarea';
$string['preventsubmissionsshort'] = 'Impedir cambios en la entrega';
$string['previous'] = 'Anterior';
$string['privacy:attemptpath'] = 'intento {$a}';
$string['privacy:blindmarkingidentifier'] = 'El identificador usado para calificar a ciegas';
$string['privacy:gradepath'] = 'calificar';
$string['privacy:metadata:assigndownloadasfolders'] = 'Una preferencia del usuario, para que los envíos múltiples sean descargados a carpetas o no';
$string['privacy:metadata:assignfeedbackpluginsummary'] = 'Datos de retroalimentación para la Tarea';
$string['privacy:metadata:assignfilter'] = 'Opciones de filtro como por ejemplo \'Enviado\', No enviado\', \'Necesita calificarse\' y \'Extensión otorgada\'';
$string['privacy:metadata:assigngrades'] = 'Almacena calificaciones de usuarios para la tarea';
$string['privacy:metadata:assignmarkerfilter'] = 'Filtrar el resumen de tarea  por el evaluador asignado.';
$string['privacy:metadata:assignmentid'] = 'ID de la tarea.';
$string['privacy:metadata:assignmessageexplanation'] = 'Los mensajes son enviados a estudiantes mediante el sistema de mensajería.';
$string['privacy:metadata:assignoverrides'] = 'Almacena información de anulación para la tarea';
$string['privacy:metadata:assignperpage'] = 'Número de tareas a mostrar por página.';
$string['privacy:metadata:assignquickgrading'] = 'Una preferencia sobre si se usa o no la calificación rápida.';
$string['privacy:metadata:assignsubmissiondetail'] = 'Almacena información de envío del usuario';
$string['privacy:metadata:assignsubmissionpluginsummary'] = 'Datos del envío para la tarea';
$string['privacy:metadata:assignuserflags'] = 'Almacena meta datos del usuario como por ejemplo fechas de extensión';
$string['privacy:metadata:assignusermapping'] = 'El mapeo para calificación a ciegas';
$string['privacy:metadata:assignworkflowfilter'] = 'Filtrar por las diferentes etapas del flujograma.';
$string['privacy:metadata:grade'] = 'La calificación numérica para este envío de tarea. Puede estar determinada por Escalas/Métodos avanzados para calificar, etc, pero siempre se convertirá de vuelta a un número de punto flotante.';
$string['privacy:metadata:grader'] = 'La ID del usuario del evaluador.';
$string['privacy:metadata:groupid'] = 'La ID del grupo del cual es miembro el usuario.';
$string['privacy:metadata:latest'] = 'Simplifica enormemente las consultas que esperan saber información acerca de solamente los últimos intentos.';
$string['privacy:metadata:mailed'] = '¿Ya se le ha enviado correo a este usuario?';
$string['privacy:metadata:timecreated'] = 'Hora de creación';
$string['privacy:metadata:userid'] = 'ID de usuario.';
$string['privacy:studentpath'] = 'studentsubmissions';
$string['privacy:submissionpath'] = 'submission';
$string['quickgrading'] = 'Calificación rápida';
$string['quickgradingchangessaved'] = 'Se guardaron los cambios de las calificaciones';
$string['quickgrading_help'] = 'La calificación rápida le permite asignar calificaciones (y resultados) directamente en la tabla de envíos. La calificación rápida no es compatible con la calificación avanzada y no se recomienda cuando existan varias personas que califican.';
$string['quickgradingresult'] = 'Calificación rápida';
$string['recordid'] = 'Identificador';
$string['relativedatessubmissionduedateafter'] = '{$a->datediffstr} después del inicio del curso';
$string['relativedatessubmissionduedatebefore'] = '{$a->datediffstr} antes del inicio del curso';
$string['relativedatessubmissiontimeleft'] = 'Calculado para cada estudiante';
$string['removeallgroupoverrides'] = 'Eliminar todas las anulaciones de grupo';
$string['removealluseroverrides'] = 'Eliminar todas las anulaciones de usuario';
$string['removesubmission'] = 'Quitar envío';
$string['removesubmissionconfirm'] = '¿Está seguro de querer eliminar los datos del envío?';
$string['removesubmissionconfirmforstudent'] = '¿Está seguro de querer eliminar los datos del envío para el estudiante {$a}?';
$string['removesubmissionforstudent'] = 'Quitar envío para estudiantet: (id={$a->id}, fullname={$a->fullname}).';
$string['reopenuntilpassincompatiblewithblindmarking'] = 'Reabrir hasta que la opción para pasar sea incompatible con la calificación ciega, porque las calificaciones no son liberadas al Libro de Calificaciones hasta que las identidades de los estudiantes sean reveladas.';
$string['requireallteammemberssubmit'] = 'Obligar a que todos los miembros del grupo envíen';
$string['requireallteammemberssubmit_help'] = 'Si se habilita, todos los miembros del grupo de estudiantes deben elegir el botón de envío para esta tarea antes de que se considere como enviada la tarea del grupo. Si se deshabilita, se considerará como enviada la tarea del grupo tan pronto alguno de los estudiantes del grupo elija el botón de envío.';
$string['requiresubmissionstatement'] = 'Exigir que los estudiantes acepten la declaratoria para el envío.';
$string['requiresubmissionstatement_help'] = 'Exigir que los estudiantes acepten la declaratoria para el envío para todos los envíos para esta tarea.';
$string['revealidentities'] = 'Revelar identidad de los estudiantes';
$string['revealidentitiesconfirm'] = '¿Está seguro de querer revelar las identidades de los estudiantes para esta tarea?. Esta operación no podrá deshacerse. Una vez que las identidades de los estudiantes sean reveladas, las calificaciones se enviarán al libro de calificaciones.';
$string['reverttodefaults'] = 'Revertir a los valores predeterminados de tarea';
$string['reverttodraft'] = 'Revertir la entrega al estatus de borrador.';
$string['reverttodraftforstudent'] = 'Revertir la entrega a borrador para el estudiante: (id={$a->id}, nombre={$a->fullname}).';
$string['reverttodraftshort'] = 'Revertir la entrega a borrador';
$string['reviewed'] = 'Revisado';
$string['save'] = 'Guardar';
$string['saveallquickgradingchanges'] = 'Guardar todos los cambios de calificación rápida';
$string['saveandcontinue'] = 'Guardar y continuar';
$string['savechanges'] = 'Guardar cambios';
$string['savegradingresult'] = 'Calificación';
$string['savenext'] = 'Guardar y mostrar siguiente';
$string['saveoverrideandstay'] = 'Guardar e ingresar otra anulación';
$string['savingchanges'] = 'Guardando cambios...';
$string['scale'] = 'Escala';
$string['search:activity'] = 'Tarea - información de actividad';
$string['selectedusers'] = 'Usuarios seleccionados';
$string['selectlink'] = 'Seleccione...';
$string['selectuser'] = 'Seleccionar {$a}';
$string['sendlatenotifications'] = 'Notificar a los evaluadores las entregas fuera de plazo';
$string['sendlatenotifications_help'] = 'Si está habilitado, los evaluadores (normalmente profesores) reciben un mensaje cuando un estudiante realiza una entrega a la tarea fuera de plazo . Se pueden configurar los métodos de mensajería.';
$string['sendnotifications'] = 'Mandar avisos a los (profesores) calificadores';
$string['sendnotifications_help'] = 'Si se habilita, los (profesores) calificadores reciben un mensaje cuando un estudiante envía una tarea, anticipadamente, a tiempo y retrasada. Los métodos de mensaje son configurables.';
$string['sendstudentnotifications'] = 'Notificar a estudiantes';
$string['sendstudentnotificationsdefault'] = 'Ajuste por defecto para "Notificar a estudiantes"';
$string['sendstudentnotificationsdefault_help'] = 'Establecer el valor por defecto para la casilla de verificación "Notificar a estudiantes" en el formato de evaluación.';
$string['sendstudentnotifications_help'] = 'Si se habilita, los estudiantes recibirán un mensaje acerca de la calificación o retroalimentación. Si el flujograma para calificar está habilitado en esta tarea, las notificaciones no serán enviadas hasta que la calificación sea "Liberada".';
$string['sendsubmissionreceipts'] = 'Mandar recibo de envío a estudiantes';
$string['sendsubmissionreceipts_help'] = 'Este interruptor habilita los recibos de envíos para estudiantes. Los estudiantes recibirán una notificación cada vez que envíen exitosamente una tarea.';
$string['setmarkerallocationforlog'] = 'Configurar asignación de calificadores : (id={$a->id}, fullname={$a->fullname}, marker={$a->marker}).';
$string['setmarkingallocation'] = 'Configurar calificador asignado';
$string['setmarkingworkflowstate'] = 'Configurar estado de flujograma calificador';
$string['setmarkingworkflowstateforlog'] = 'Configurar estado del flujograma calificador : (id={$a->id}, fullname={$a->fullname}, state={$a->state}).';
$string['settings'] = 'Configuraciones de tarea';
$string['showrecentsubmissions'] = 'Mostrar entregas recientes';
$string['status'] = 'Estatus';
$string['studentnotificationworkflowstateerror'] = 'El estado del flujograma calificador debe ser "Liberado" para notificar a los estudiantes.';
$string['submission'] = 'Entrega';
$string['submissioncopiedhtml'] = '<p>Usted ha hecho una copia de su envío de tarea previo para \'<i>{$a->assignment}</i>\'.</p>
<p>Usted puede ver el estatus de su <a href="{$a->url}">envío de tarea</a>.</p>';
$string['submissioncopiedsmall'] = 'Usted ha copiado su envío de tarea previo para {$a->assignment}';
$string['submissioncopiedtext'] = 'Usted ha hecho una copia de su envío de tarea previo para \'{$a->assignment}\'

Usted puede ver el estatus de su envío de tarea:

{$a->url}';
$string['submissiondrafts'] = 'Requerir que los estudiantes opriman el botón \'enviar\'';
$string['submissiondrafts_help'] = 'Si está habilitado, los estudiantes tendrán que pulsar un botón de Entrega para declarar que es su entrega definitiva. Esto permite que los estudiantes puedan tener una versión borrador de su entrega en el sistema. Si esta configuración se cambia de "No" a "Si" después de que los estudiantes ya hayan enviado sus trabajos, estos envíos serán considerados como finales.';
$string['submissioneditable'] = 'Los estudiantes pueden editar este envío';
$string['submissionempty'] = 'Nada fue enviado';
$string['submissionlog'] = 'Estudiante: {$a->fullname}, Estatus: {$a->status}';
$string['submissionmodified'] = 'Usted tiene datos de envíos existentes. Por favor, abandone esta página e inténtelo nuevamente.';
$string['submissionmodifiedgroup'] = 'El envío ha sido modificado por alguien más. Por favor abandone esta página e inténtelo nuevamente.';
$string['submissionnotcopiedinvalidstatus'] = 'El envío no fue copiado debido a que había sido editado posteriormente a que fuera reabierto.';
$string['submissionnoteditable'] = 'Los estudiantes no pueden editar este envío';
$string['submissionnotready'] = 'Esta tarea no está lista para enviar.';
$string['submissionplugins'] = 'Plugins de envío';
$string['submissionreceipthtml'] = 'Usted ha realizado una entrega en la tarea \'<i>{$a->assignment}</i>\'.</p>
<p>Puede ver el estatus de su entrega en <a href="{$a->url}">entrega de la tarea</a>.</p>';
$string['submissionreceiptotherhtml'] = 'Tu envio de tarea para
\'<i>{$a->assignment}</i>\' ha sido enviado.<br /><br />
Puede ver el estatus de su <a href="{$a->url}">trabajo enviado</a>.';
$string['submissionreceiptothersmall'] = 'Su envío de tarea para{$a->assignment} ha sido enviado.';
$string['submissionreceiptothertext'] = 'Su envío de tarea para
\'{$a->assignment}\' ha sido enviado

Usted puede ver el estatus de su envío de tarea:

{$a->url}';
$string['submissionreceipts'] = 'Enviar recibo de entrega';
$string['submissionreceiptsmall'] = 'Usted ha realizado su entrega de la tarea {$a->assignment}';
$string['submissionreceipttext'] = 'Usted ha realizado una entrega en la tarea \'{$a->assignment}\'

Puede ver el estatus de su entrega en:

{$a->url}';
$string['submissionsclosed'] = 'Entrega cerrada';
$string['submissionsettings'] = 'Configuración de entrega';
$string['submissionslocked'] = 'Esta tarea no acepta entregas';
$string['submissionslockedshort'] = 'No se permiten cambios en las entregas';
$string['submissionsnotgraded'] = 'Entregas no calificadas: {$a}';
$string['submissionstatement'] = 'Declaratoria para el envío';
$string['submissionstatementacceptedlog'] = 'Declaratoria para el envío aceptada por el usuario {$a}';
$string['submissionstatementdefault'] = 'Este envío es mi propio trabajo, excepto en donde he reconocido el uso de los trabajos de otras personas.';
$string['submissionstatement_help'] = 'Declaratoria que cada estudiante debe aceptar para enviar su trabajo.';
$string['submissionstatementteamsubmission'] = 'Declaratoria de envío grupal';
$string['submissionstatementteamsubmissionallsubmit'] = 'Declaratoria de envío grupal donde todos los miembros del grupo envían';
$string['submissionstatementteamsubmissionallsubmitdefault'] = 'Este envío es mi propio trabajo como un miembro del grupo, excepto en donde yo reconozco el uso de los trabajos de otras personas.';
$string['submissionstatementteamsubmissionallsubmit_help'] = 'Declaratoria que cada estudiante debe aceptar para enviar su trabajo como un miembro del grupo.';
$string['submissionstatementteamsubmissiondefault'] = 'Este envío es el trabajo de mi grupo, excepto en donde nosotros reconocemos el uso de los trabajos de otras personas.';
$string['submissionstatementteamsubmission_help'] = 'Declaratoria que cada estudiante debe aceptar para enviar el trabajo de su grupo.';
$string['submissionstatus'] = 'Estatus de la entrega';
$string['submissionstatus_'] = 'Sin entrega';
$string['submissionstatus_draft'] = 'Borrador (no enviado)';
$string['submissionstatusheading'] = 'Estatus de la entrega';
$string['submissionstatus_marked'] = 'Calificado';
$string['submissionstatus_new'] = 'Sin envío';
$string['submissionstatus_reopened'] = 'Reabierto';
$string['submissionstatus_submitted'] = 'Enviado para calificar';
$string['submissionsummary'] = '{$a->status}. Modificado por última vez en {$a->timemodified}';
$string['submissionteam'] = 'Grupo';
$string['submissiontypes'] = 'Tipos de envíos';
$string['submitaction'] = 'Enviar';
$string['submitassignment'] = 'Enviar tarea';
$string['submitassignment_help'] = 'Una vez que esta tarea se haya enviado, usted no podrá hacerle más cambios';
$string['submitforgrading'] = 'Enviar para evaluarse';
$string['submitted'] = 'Enviada';
$string['submittedearly'] = 'La tarea fue enviada {$a} antes';
$string['submittedlate'] = 'La tarea fue enviada {$a} después';
$string['submittedlateshort'] = '{$a} después';
$string['subpagetitle'] = '{$a->contextname} - {$a->subpage}';
$string['subplugintype_assignfeedback'] = 'Plugin de retroalimentación';
$string['subplugintype_assignfeedback_plural'] = 'Plugins de retroalimentación';
$string['subplugintype_assignsubmission'] = 'Plugin de envío';
$string['subplugintype_assignsubmission_plural'] = 'Plugins de envío';
$string['teamname'] = 'Equipo: {$a}';
$string['teamsubmission'] = 'Los estudiantes envían en grupos';
$string['teamsubmissiongroupingid'] = 'Agrupamiento para los grupos de estudiantes';
$string['teamsubmissiongroupingid_help'] = 'Este es el agrupamiento que empleará la tarea para encontrar los grupos para los grupos de estudiantes. Si no se configura, entonces se usará el conjunto de grupos predeterminado.';
$string['teamsubmission_help'] = 'Si se habilita, los estudiantes serán divididos en grupos basados en el conjunto de grupos predeterminado o un agrupamiento personalizado. Un envío en grupo estará compartido entre los miembros del grupo y todos los miembros del grupo verán los cambios de todos ellos al envío.';
$string['textinstructions'] = 'Instrucciones de la tarea';
$string['timemodified'] = 'Última modificación';
$string['timeremaining'] = 'Tiempo restante';
$string['timeremainingcolon'] = 'Tiempo restante: {$a}';
$string['togglezoom'] = 'Aumentar/disminuir zoom de la región';
$string['ungroupedusers'] = 'La configuración de \'Requerir grupo para hacer envío\' está activada y algunos usuarios, o no son miembros de ningún grupo, o son miembros de más de un grupo, por lo que no pueden hacer envíos.';
$string['ungroupedusersoptional'] = 'La configuración \'Estudiantes envían en grupos\' está habilitada y algunos usuarios, o no son miembros de ningún grupo, o son miembros de más de un grupo. Por favor tenga en cuenta  que estos estudiantes enviarán como miembros del \'Grupo predeterminado\'.';
$string['unlimitedattempts'] = 'Ilimitados';
$string['unlimitedattemptsallowed'] = 'Se permiten intentos ilimitados.';
$string['unlimitedpages'] = 'Ilimitado';
$string['unlocksubmissionforstudent'] = 'Permitir entregas al usuario: (id={$a->id}, nombre={$a->fullname}).';
$string['unlocksubmissions'] = 'Desbloquear entregas';
$string['unsavedchanges'] = 'Cambios no guardados';
$string['unsavedchangesquestion'] = 'Hay cambios no-guardados a calificaciones o retroalimentación. ¿Quiere guardar los cambios y continuar?';
$string['updategrade'] = 'Actualizar calificación';
$string['updatetable'] = 'Guardar y actualizar tabla';
$string['upgradenotimplemented'] = 'Actualización no implementada en el plugin ({$a->type} {$a->subtype})';
$string['userassignmentdefaults'] = 'Predeterminados tarea de usuario';
$string['userextensiondate'] = 'Se otorgó extensión hasta: {$a}';
$string['usergrade'] = 'Calificación del usuario';
$string['useridlistnotcached'] = 'Los cambios en calificaciones NO SE GUARDARON, porque no fue posible determinar para cual envío eran.';
$string['useroverrides'] = 'Anulaciones de usuario';
$string['useroverridesdeleted'] = 'Anulaciones de usuario eliminadas';
$string['usersnone'] = 'Ningún estudiante tiene acceso a esta tarea';
$string['usersubmissioncannotberemoved'] = 'El envío de {$a} no puede ser eliminado.';
$string['userswhoneedtosubmit'] = 'Usuarios que necesitan enviar: {$a}';
$string['validmarkingworkflowstates'] = 'Estados válidos del flujograma calificador';
$string['viewadifferentattempt'] = 'Ver un intento diferente';
$string['viewbatchmarkingallocation'] = 'Ver página de asignación de calificación de conjunto de lote';
$string['viewbatchsetmarkingworkflowstate'] = 'Ver página de estado del flujograma calificador de configuración masiva';
$string['viewfeedback'] = 'Ver retroalimentación';
$string['viewfeedbackforuser'] = 'Ver retroalimentación para usuario: {$a}';
$string['viewfull'] = 'Ver completo';
$string['viewfullgradingpage'] = 'Abrir la página completa de calificar para proporcionar retroalimentación';
$string['viewgradebook'] = 'Ver libro de calificaciones';
$string['viewgrading'] = 'Ver todos los envíos';
$string['viewgradingformforstudent'] = 'Ver la página de calificar para estudiante: (id={$a->id},nombrecompleto={$a->fullname}).';
$string['viewownsubmissionform'] = 'Ver la página propia de entregas a tareas.';
$string['viewownsubmissionstatus'] = 'Ver página de estatus de las entregas propios.';
$string['viewrevealidentitiesconfirm'] = 'Ver la página de confirmación de revelación de identidad de estudiantes.';
$string['viewsubmission'] = 'Ver entrega';
$string['viewsubmissionforuser'] = 'Ver entrega del usuario: {$a}';
$string['viewsubmissiongradingtable'] = 'Ver tabla de calificaciones de las entregas';
$string['viewsummary'] = 'Ver resumen';
$string['workflowfilter'] = 'Filtro de flujograma';
$string['xofy'] = '{$a->x} de {$a->y}';
