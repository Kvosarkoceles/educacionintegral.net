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
 * Strings for component 'completion', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   completion
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['achievinggrade'] = 'Alcanzando calificación';
$string['activities'] = 'Actividades';
$string['activitiescompleted'] = 'Finalización de actividad';
$string['activitiescompletednote'] = 'Nota: La finalización de actividad debe configurarse para que una actividad aparezca en la lista de arriba.';
$string['activitieslabel'] = 'Actividades / recursos';
$string['activityaggregation'] = 'La condición requiere que';
$string['activityaggregation_all'] = 'Se finalicen TODAS las actividades seleccionadas';
$string['activityaggregation_any'] = 'Se finalice CUALQUIERA de las actividades seleccionadas';
$string['activitycompletion'] = 'Finalización de actividad';
$string['activitycompletionupdated'] = 'Cambios guardados';
$string['activitygradenotrequired'] = 'Calificación no requerida';
$string['affectedactivities'] = 'Los cambios afectarán las siguientes <b>{$a}</b> actividades o recursos';
$string['aggregationmethod'] = 'Método de agregación';
$string['all'] = 'Todos';
$string['any'] = 'Cualquiera';
$string['approval'] = 'Aprobación';
$string['areyousureoverridecompletion'] = '¿Está Usted seguro de querer anular el estado actual de finalizacion de esta actividad para este usuario y marcarlo como "{$a}"?';
$string['badautocompletion'] = 'Cuando selecciona finalización automática, debe también activar al menos un requisito (vea más abajo)';
$string['badcompletiongradeitemnumber'] = 'Requerir calificación no puede ser habilitada para<b>{$a}</b> porque calificar por {$a} no está habilitada.';
$string['bulkactivitycompletion'] = 'Edición masiva de Finalización de actividad';
$string['bulkactivitydetail'] = 'Seleccionar las actividades que desea editar masivamente.';
$string['bulkcompletiontracking'] = 'Seguimiento de la finalización';
$string['bulkcompletiontracking_help'] = '<strong>Ninguna:</strong> No indicar finalización de actividad

<strong>Manual:</strong> El estudiante puede marcar manualmente la actividad como completada

<strong>Con condición(es):</strong> Mostrar actividad como completada cuando se cumplan las condiciones';
$string['checkactivity'] = 'Casilla de selección para actividad / recurso: {$a}';
$string['checkall'] = 'Activar o desactivar todas las actividades y recursos';
$string['checkallsection'] = 'Activar o desactivar todas las actividades y recursos en la sección siguiente: {$a}';
$string['completed'] = 'Completado';
$string['completedunlocked'] = 'Opciones de finalización desbloqueadas';
$string['completedunlockedtext'] = 'Cuando guarda los cambios, se borrará el estado de finalización de todos los estudiantes. Si cambia de parecer sobre este asunto, no guarde el formato.';
$string['completedwarning'] = 'Opciones de finalización bloqueadas';
$string['completedwarningtext'] = 'Esta actividad ya ha sido marcada como completada por {$a} participante(s). El cambiar las opciones para finalización borrará su estado de finalización y puede causar confusión. Por esto, las opciones han sido bloqueadas y no deberían de des-bloquearse a menos que sea absolutamente necesario.';
$string['completion'] = 'Seguimiento de finalización';
$string['completionactivitydefault'] = 'Usar valores  por defecto de actividad';
$string['completion-alt-auto-enabled'] = 'El sistema marca este ítem como completo de acuerdo con las condiciones: {$a}';
$string['completion-alt-auto-fail'] = 'Finalizado {$a} (no obtuvo calificación de aprobado)';
$string['completion-alt-auto-n'] = 'Sin finalizar: {$a}';
$string['completion-alt-auto-n-override'] = 'No completado: {$a->modname} (configurado por {$a->overrideuser})';
$string['completion-alt-auto-pass'] = 'Finalizado: {$a} (obtuvo calificación de aprobado)';
$string['completion-alt-auto-y'] = 'Finalizado: {$a}';
$string['completion-alt-auto-y-override'] = 'Completado: {$a->modname} (configurado por {$a->overrideuser})';
$string['completion-alt-manual-enabled'] = 'Los estudiantes pueden marcar manualmente este ítem como completado: {$a}';
$string['completion-alt-manual-n'] = 'No finalizado; {$a}. Seleccione para marcar como finalizado';
$string['completion-alt-manual-n-override'] = 'No completado: {$a->modname} (configurado por {$a->overrideuser}). Seleccionar para marcarlo como completado.';
$string['completion-alt-manual-y'] = 'Finalizado; {$a} seleccione para marcar como no finalizado';
$string['completion-alt-manual-y-override'] = 'Completado: {$a->modname} (configurado por {$a->overrideuser}). Seleccionar para marcarlo como no completado.';
$string['completion_automatic'] = 'Mostrar la actividad como completada cuando se cumplan las condiciones';
$string['completiondefault'] = 'Seguimiento de Finalización por defecto';
$string['completiondisabled'] = 'Deshabilitado, no se muestra en los ajustes de la actividad';
$string['completionduration'] = 'Inscripción';
$string['completionenabled'] = 'Habilitado, control por medio de los ajustes de finalización y de actividad';
$string['completionexpected'] = 'Se espera finalizar en';
$string['completionexpecteddesc'] = 'Finalización esperada en {$a}';
$string['completionexpectedfor'] = '{$a->instancename} debería estar completada';
$string['completionexpected_help'] = 'Esta opción especifica la fecha en que se espera que la actividad esté finalizada.';
$string['completion-fail'] = 'Finalizado (no obtuvo calificación de aprobado)';
$string['completion_help'] = 'Si se activa esta opción, se rastrea el grado de finalización de cualquier actividad, bien manual, bien automáticamente, basándose en determinadas condiciones. Si se desea, se pueden fijar múltiples condiciones. Si se hace así, la actividad únicamente se considerará completa si se cumplen TODAS las condiciones.

Una marca (paloma) al lado del nombre de la actividad en la página del curso indica cuándo la actividad está completa.';
$string['completionicons'] = 'Casillas para marcar la finalización';
$string['completionicons_help'] = 'Una marca (paloma) junto al nombre de una actividad puede utilizarse para indicar que una actividad se completó.

Si se muestra una casilla con el borde punteado, la marca aparecerá automáticamente cuando Usted haya completado la actividad de acuerdo con las condiciones establecidas por el profesor.

Si se muestra una casilla con el borde sólido, entonces Usted puede hacer clic sobre ella para activarla cuando Usted piense que ya ha completado la actividad. (Al volver a hacer clic sobre ella, la marca, la paloma desaparecerá, si Usted cambiara de opinión).';
$string['completion_manual'] = 'Los estudiantes pueden marcar manualmente la actividad como completada';
$string['completionmenuitem'] = 'Finalización';
$string['completion-n'] = 'No finalizado';
$string['completion_none'] = 'No indicar finalización de la actividad';
$string['completionnotenabled'] = 'Finalización no está habilitada';
$string['completionnotenabledforcourse'] = 'Finalización no está habilitada para este curso';
$string['completionnotenabledforsite'] = 'Finalización no está habilitado para este sitio. Vaya a \'Administración del sitio > Características avanzadas > Habilitar seguimiento del grado de finalización \'.';
$string['completion-n-override'] = 'No completado (configurado por {$a})';
$string['completionondate'] = 'Fecha';
$string['completionondatevalue'] = 'Fecha en la cual el curso será marcado como completado';
$string['completion-pass'] = 'Finalizado (alcanzó calificación de aprobado)';
$string['completionsettingslocked'] = 'Ajustes de finalización bloqueados';
$string['completionupdated'] = 'Se actualizó finalización para actividad <b>{$a}</b>';
$string['completionusegrade'] = 'Requerir calificación';
$string['completionusegrade_desc'] = 'El estudiante debe recibir una calificación para completar esta actividad';
$string['completionusegrade_help'] = 'Si se activa, la actividad se considera finalizada cuando un estudiante recibe una calificación. Los iconos Aprobar y Suspender se muestran si se ha establecido una calificación de aprobado para la actividad.';
$string['completionview'] = 'Requerir ver';
$string['completionview_desc'] = 'El estudiante debe ver esta actividad para completarla';
$string['completion-y'] = 'Finalizado';
$string['completion-y-override'] = 'Completado (configurado por {$a})';
$string['configcompletiondefault'] = 'La configuración por defecto para seguimiento de finalización cuando se crean actividades nuevas.';
$string['configenablecompletion'] = 'Si se habilita, pueden configurarse condiciones para finalización de curso y de actividad. El configurar condiciones de finalización de actividades está recomendado para que sean mostrados datos significativos para usuarios en sus vistas generales del curso en el Tablero.';
$string['confirmselfcompletion'] = 'Confirmar finalización por si mismo';
$string['courseaggregation'] = 'La condición requiere que';
$string['courseaggregation_all'] = 'Se finalicen TODOS los cursos seleccionados';
$string['courseaggregation_any'] = 'Se finalice CUALQUIERA de los cursos seleccionados';
$string['coursealreadycompleted'] = 'Usted ya ha finalizado este curso';
$string['coursecomplete'] = 'Curso finalizado';
$string['coursecompleted'] = 'Curso finalizado';
$string['coursecompletion'] = 'Finalización del curso';
$string['coursecompletioncondition'] = 'Condición: {$a}';
$string['coursegrade'] = 'Calificación del curso';
$string['coursesavailable'] = 'Cursos disponibles';
$string['coursesavailableexplaination'] = 'Nota: Los criterios del grado de finalización del curso deben ajustarse para que un curso aparezca en la lista de arriba.';
$string['criteria'] = 'Criterios';
$string['criteriagroup'] = 'Grupo de criterios';
$string['criteriarequiredall'] = 'Son necesarios todos los criterios que aparecen más abajo';
$string['criteriarequiredany'] = 'Es necesario cualquiera de los criterios que aparecen más abajo';
$string['csvdownload'] = 'Descargar en formato de hoja de cálculo (UTF-8 .csv)';
$string['datepassed'] = 'Fecha pasada';
$string['days'] = 'Días';
$string['daysoftotal'] = '{$a->days} de {$a->total}';
$string['defaultcompletion'] = 'Finalización de actividad por defecto';
$string['defaultcompletionupdated'] = 'Cambios guardados';
$string['deletecompletiondata'] = 'Eliminar datos de finalización';
$string['dependencies'] = 'Dependencias';
$string['dependenciescompleted'] = 'Finalización de otros cursos';
$string['editcoursecompletionsettings'] = 'Editar ajustes de grado de finalización del curso';
$string['enablecompletion'] = 'Habilitar seguimiento del grado de finalización';
$string['enablecompletion_help'] = 'Si se habilita, pueden configurarse las condiciones de la finalización de la actividad y/o las condiciones de finalización del curso en las configuraciones de la actividad. Se recomienda tener esto habilitado para se muestren datos significativos en el Tablero de la vista general del curso';
$string['enrolmentduration'] = 'Duración de la inscripción';
$string['enrolmentdurationlength'] = 'El usuario debe permanecer inscrito por';
$string['err_noactivities'] = 'No está habilitada la información sobre la finalización de ninguna actividad. Puede activar la información sobre la finalización de una actividad editando la configuración para la actividad.';
$string['err_nocourses'] = 'La finalización del curso no está habilitada para ningún otro curso, por lo que no se puede mostrar ninguno. Puede activar la finalización de cursos dentro de las configuraciones del curso.';
$string['err_nograde'] = 'En este curso no se ha establecido una calificación para pasar el curso. Para activar este tipo de criterio, debe crear una calificación para pasar el curso.';
$string['err_noroles'] = 'No hay roles con la capacidad \'moodle/course:markcomplete\' en este curso.';
$string['err_nousers'] = 'No hay estudiantes en este curso o grupo para los que se muestre la información sobre finalización. (Por defecto, la información sobre finalización se muestra solo para usuarios con la capacidad para \'Ser mostrado en reportes de finalización\'. Esta capacidad está permitida para el rol predeterminado de estudiante solamente,  por lo que si no hubiera estudiantes, Usted verá este mensaje).';
$string['err_settingslocked'] = 'Uno o más estudiantes han finalizado ya  un criterio, por lo que los parámetros han sido bloqueados. Desbloquer los parámetros de los criterios de finalización borrará cualquier dato de usuario, lo que podría causar confusión.';
$string['err_system'] = 'Se ha producido un error interno en el sistema de finalización. (Los administradores del sistema pueden habilitar la información de depuración para ver más detalles)';
$string['eventcoursecompleted'] = 'Curso completado';
$string['eventcoursecompletionupdated'] = 'Finalización del curso actualizada';
$string['eventcoursemodulecompletionupdated'] = 'Finalización de actividad de curso actualizada';
$string['eventdefaultcompletionupdated'] = 'Valor por defecto para finalización de actividad de curso actualizado';
$string['excelcsvdownload'] = 'Descargar en formato compatible con Excel (.csv)';
$string['fraction'] = 'Fracción';
$string['graderequired'] = 'Calificación del curso requerida';
$string['gradexrequired'] = '{$a} requerido';
$string['hiddenrules'] = 'Algunas configuraciones específicas para <b>{$a}</b> se han ocultado. Para ver des-seleccione otras  actividades';
$string['inprogress'] = 'En curso';
$string['manual'] = 'Manual';
$string['manualcompletionby'] = 'Finalización manual por otros';
$string['manualcompletionbynote'] = 'Nota: La capacidad moodle/course:markcomplete debe estar permitida para que un rol aparezca en la lista.';
$string['manualselfcompletion'] = 'Auto-finalizar manualmente';
$string['manualselfcompletionnote'] = 'Nota: El bloque de auto-finalización debería de añadirse al curso si se habilita la auto-finalización manual.';
$string['markcomplete'] = 'Marcar completo';
$string['markedcompleteby'] = 'Marcado completo por {$a}';
$string['markingyourselfcomplete'] = 'Marcando Usted mismo como completado';
$string['modifybulkactions'] = 'Modificar las acciones que Usted quiere editar masivamente';
$string['moredetails'] = 'Más detalles';
$string['nocriteriaset'] = 'No hay criterios establecidos para la finalización de este curso';
$string['nogradeitem'] = 'Requerir calificación no puede habilitarse para <b>{$a}</b> porquela actividad no está calificada.';
$string['notcompleted'] = 'No finalizado';
$string['notenroled'] = 'Usted no está inscrito en este curso';
$string['nottracked'] = 'Usted actualmente no está siendo monitoreado en cuanto a su grado de avance de este curso';
$string['notyetstarted'] = 'Aún no ha comenzado';
$string['overallaggregation'] = 'Requisitos de finalización';
$string['overallaggregation_all'] = 'El curso está completo cuando TODAS las condiciones se cumplen';
$string['overallaggregation_any'] = 'El curso está completo cuando CUALQUIERA de las condiciones se cumple';
$string['pending'] = 'Pendiente';
$string['periodpostenrolment'] = 'Período después de la inscripción';
$string['privacy:metadata:completionstate'] = 'Si es que la actividad ha sido completado.';
$string['privacy:metadata:course'] = 'Un identificador del curso.';
$string['privacy:metadata:coursecompletedsummary'] = 'Almacena  información acerca de usuarios que tienen criterios completados en un curso.';
$string['privacy:metadata:coursemoduleid'] = 'La ID de la actividad';
$string['privacy:metadata:coursemodulesummary'] = 'Almacena  datos de finalización de actividad para un usuario.';
$string['privacy:metadata:coursesummary'] = 'Almacena los datos de finalización del curso para un usuario.';
$string['privacy:metadata:gradefinal'] = 'Calificación final recibida por la finalización del curso.';
$string['privacy:metadata:overrideby'] = 'La ID del usuario que anuló la finalización de la actividad.';
$string['privacy:metadata:reaggregate'] = 'Si es que la finalización del curso fue re-agregada.';
$string['privacy:metadata:timecompleted'] = 'La hora en la cual fue completado el curso.';
$string['privacy:metadata:timeenrolled'] = 'La hora en la cual el usuario fue inscrito en el curso.';
$string['privacy:metadata:timemodified'] = 'La hora en la cual la finalización de la actividad fue modificada.';
$string['privacy:metadata:timestarted'] = 'La hora en la cual el curso fue iniciado.';
$string['privacy:metadata:unenroled'] = 'Si es que el usuario ha sido o no des-inscrito (dado de baja) del curso.';
$string['privacy:metadata:userid'] = 'La ID del usuario de la persona con datos de finalización de actividad y de curso';
$string['privacy:metadata:viewed'] = 'Si es que la actividad fue vista.';
$string['progress'] = 'Progreso del estudiante';
$string['progress-title'] = '{$a->user}, {$a->activity}: {$a->state} {$a->date}';
$string['progresstotal'] = 'Progreso: {$a->complete} / {$a->total}';
$string['recognitionofpriorlearning'] = 'Reconocimiento de aprendizaje previo';
$string['remainingenroledfortime'] = 'Permanecer inscrito durante un período de tiempo especificado';
$string['remainingenroleduntildate'] = 'Permanecer inscrito hasta una fecha especificada';
$string['reportpage'] = 'Mostrando usuarios {$a->from} a {$a->to} de {$a->total}.';
$string['requiredcriteria'] = 'Criterios necesarios';
$string['resetactivities'] = 'Borrar todas las actividades y recursos seleccionados';
$string['restoringcompletiondata'] = 'Escribiendo datos de grado de finalización';
$string['roleaggregation'] = 'La condición requiere que';
$string['roleaggregation_all'] = 'TODOS los roles seleccionados maquen cuando se cumplen las condiciones';
$string['roleaggregation_any'] = 'CUALQUIERA de los roles seleccionados maque cuando se cumplen las condiciones';
$string['roleidnotfound'] = 'Rol con ID {$a} no encontrado';
$string['saved'] = 'Guardado';
$string['seedetails'] = 'Ver detalles';
$string['select'] = 'Seleccionar';
$string['self'] = 'Auto';
$string['selfcompletion'] = 'Auto finalización';
$string['showinguser'] = 'Mostrando usuario';
$string['unenrolingfromcourse'] = 'Dando de baja (des-inscribiendo) del curso';
$string['unenrolment'] = 'Dar de baja (des-inscribir)';
$string['unit'] = 'Unidad';
$string['unlockcompletion'] = 'Desbloquear opciones de grado de finalización';
$string['unlockcompletiondelete'] = 'Desbloquear opciones de grado de finalización y eliminar los datos de grado de finalización del usuario';
$string['updateactivities'] = 'Actualizar estatus de finalización de actividades seleccionadas';
$string['usealternateselector'] = 'Usar el selector de curso alternativo';
$string['usernotenroled'] = 'El usuario no está inscrito en este curso';
$string['viewcoursereport'] = 'Ver reporte del curso';
$string['viewingactivity'] = 'Viendo el/la/los {$a}';
$string['withconditions'] = 'Con condiciones';
$string['writingcompletiondata'] = 'Escribiendo los datos del grado de finalización';
$string['xdays'] = '{$a} días';
$string['yourprogress'] = 'Su progreso';
