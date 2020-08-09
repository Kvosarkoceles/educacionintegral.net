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
 * Strings for component 'checkmark', language 'es_mx', branch 'MOODLE_38_STABLE'
 *
 * @package   checkmark
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['absent'] = 'Ausente';
$string['activateindividuals'] = 'Activar función individual';
$string['addsubmission'] = 'Añadir envío';
$string['all'] = 'Todo(s)';
$string['all_absent'] = 'Todos los participantes ausentes';
$string['all_attendant'] = 'Todos los participantes asistentes';
$string['allowresubmit'] = 'Permitir re-envíos';
$string['allowresubmit_help'] = 'Si se habilita, los estudiantes tendrán permitido el re-enviar marcas de verificación después de que hayan sido calificados (para que sean re-calificados).';
$string['allowsubmissionsfromdate'] = 'Permitir envíos a partir de';
$string['allowsubmissionsfromdate_help'] = 'Si se habilita, los estudiantes no podrán enviar antes de esta fecha. Si está deshabilitado, los estudiantes podrán comenzar a enviar inmediatamente.';
$string['all_unknown'] = 'Todos con estatus desconocido de asistencia';
$string['alreadygraded'] = 'Su envío ya ha sido calificado y no están permitidos los re-envíos.';
$string['alwaysshowdescription'] = 'Siempre mostrar descripción';
$string['alwaysshowdescription_help'] = 'Si está deshabilitado, la Descripción de la Tarea de arriba solamente estará disponible para los estudiantes en la fecha de "Permitir envíos a partir de".';
$string['attendance'] = 'Asistencia';
$string['attendancegradebook'] = 'Grabar asistencia en Libro de calificaciones';
$string['attendancegradebook_help'] = 'Si Usted activa esta característica, las asistencias serán visibles en el Libro de calificaciones como un ítem de calificación separado: <ul><li>Calificación vacía - estatus desconocido</li><li>Calificación 0 - si ausente</li><li>Calificación 1 - si presente</li></ul>';
$string['attendancegradelink'] = 'Enlazar asistencia a cálculo automático de calificaciones_al_envío';
$string['attendancegradelink_help'] = 'Active esta configuración para enlazar las asistencias guardadas con las calificaciones calculadas automáticamente de la marca-de-verificación. Los puntos del módulo de marca-de-verificación solamente son agregados, cuando la asistencia de la persona fur marcada en concordancia.';
$string['attendancegradelink_hint'] = 'Nota: Las calificaciones calculadas automáticamente están enlazadas a la asistencia.';
$string['attendance_help'] = 'La columna estatus representa la asistencia del estudiante:<br /><ul><li>? - desconocido</li><li>✓ - presente</li><li>✖ - ausente</li></ul>';
$string['attendance_not_set_grade_locked'] = 'La asistencia para {$a} no se pudo configurar, porque la calificación está bloqueada o anulada en el Libro de calificaciones.';
$string['attendancestatus'] = 'Estatus actual de su asistencia';
$string['attendant'] = 'Asistente';
$string['autograde_all'] = 'Calificar todos los envíos';
$string['autogradebuttonstitle'] = 'Calcular calificaciones-por-envío para marca de verificación {$a}';
$string['autograde_confirm'] = 'Usted está a punto de actualizar calificaciones y retroalimentación para <strong>{$a}</strong>. Las calificaciones y retroalimentaciones anteriores serán sobre-escritas.';
$string['autograde_confirm_continue'] = '¿Está Usted seguro de querer continuar?';
$string['autograde_custom'] = 'Calificar los usuarios seleccionados';
$string['autograde_error'] = 'Ocurrió un error durante la auto-calificación.';
$string['autograde_failed'] = '¡Falló la auto-calificación!';
$string['autograde_non_numeric_grades'] = 'La auto-calificación requiere que se configure una calificación numérica máxima. Esto puede configurarse en las configuraciones-de-la-instancia.';
$string['autograde_notsupported'] = 'Esta escala no está soportada por la calificación automática.';
$string['autograde_no_users_selected'] = 'Usted no ha seleccionado ningún usuario para calificar. Seleccione a los usuarios requeridos mediante las casillas de selección en la columna izquierda de la tabla inferior.';
$string['autograde_one_success'] = '¡ Auto-calificado exitoso ! Un envío actualizado.';
$string['autograde_req'] = 'Calificación des-calificada';
$string['autograde_str'] = 'Auto-calificar';
$string['autograde_strall'] = 'Todos los envíos';
$string['autograde_strchanged'] = 'Debido a la auto-calificación, las calificaciones para <strong>{$a}</strong> estudiante(s) serán cambiadas.';
$string['autograde_str_help'] = 'La auto-calificación calcula las calificaciones de acuerdo a los puntos por ejemplo y los ejemplos seleccionados. Añade los puntos para cada ejemplo revisado y usa esto como la calificación del usuario. <ul><li>calificar usuarios seleccionados - solamente califica a estos usuarios, que están revisados en la lista. Si un usuario no ha enviado nada, se añade un envío vacío.</li><li>calificar a quien necesite calificarse - califica a todos los envíos que tengan fecha más reciente que la calificación correspondiente</li><li>calificar todos los envíos - califica todos los envíos presentes (para esta instancia). NO añade envíos vacíos.</li></ul><br />La calificación se calcula  basándose en calificaciones de ejemplos elegidos y ejemplos revisados:<ul><li>calificación estándar: aquí cada ejemplo es ponderado igualmente (calificación integral por ejemplo). La calificación se calcula al multiplicar la suma de los ejemplos revisados con el cociente de la calificación de la marca de verificación y el número de marcas de verificación.</li><li>ponderaciones de ejemplos individuales: la calificación es la suma de calificaciones de ejemplo para cada ejemplo revisado (de acuerdo a las configuraciones de la  instancia).</li></ul>';
$string['autograde_strmultiplesubmissions'] = '{$a} envíos';
$string['autograde_stronesubmission'] = '1 envío';
$string['autograde_strreq'] = 'Envíos que necesitan una actualización de calificación';
$string['autograde_success'] = '¡Auto-calificación exitosa!  {$a} envíos actualizados.';
$string['autograde_users_with_unknown_attendance'] = '¡ATENCIÓN: {$a} envíos NO SE PUDIERON calificar automáticamente debido a un estatus desconocido de asistencia!';
$string['availabledate'] = 'Permitir envíos desde';
$string['availabledate_help'] = 'Principio del período para envío. Después de esta fecha los estudiantes pueden enviar.';
$string['bulk'] = 'Procesamiento masivo';
$string['bulk_help'] = 'Aquí Usted puede realizar acciones como "configurar asistencia", "calificación automática" o una combinación de varias entradas.<br />
<ul>
<li><strong>marcar como asistente:</strong> Marcar usuarios seleccionados como asistente</li>
<li><strong>marcar como ausente:</strong> Marcar usuarios seleccionados como ausente</li>
<li><strong>calificar automáticamente:</strong> Calcular calificación automática para usuarios seleccionados</li>
<li><strong>marcar como asistente y calificar:</strong> Marcar usuarios seleccionados como asistentes y calificarlos automáticamente inmediatamente después</li>
<li><strong>marcar como ausente y calificar:</strong> Marcar usuarios seleccionados como ausentes y calificarlos automáticamente inmediatamente después</li>
</ul><br />
Nota: Si la asistencia está enlazada a las calificaciones, solamente los usuarios asistentes pueden recibir puntos por los ejemplos seleccionados. ¡Los usuarios ausentes serán calificados con 0 puntos y los usuarios con asistencia desconocida serán saltados por completo!';
$string['bulk_no_users_selected'] = 'Usted no ha seleccionado a ningún usuario. Sleccione a los usuarios requeridos mediante las casillas de selcción en la columna izquierad de la tabla inferior.';
$string['cannotviewcheckmark'] = 'Usted no puede ver esta marca de verificación';
$string['cantfixevent'] = 'No sepudo reparar evento con ID {$a->id}, named {$a->name} ({$a->matches} coincidencias).';
$string['cfg_nowarning'] = 'Sin advertencia';
$string['cfg_pdfexampleswarning'] = 'Cantidad de ejemplos a mostrar una advertencia para exportación PDF';
$string['cfg_pdfexampleswarning_desc'] = 'Cantidad mínima de ejemplos arriba para los que se muestra una advertencia de que no puede garantizarse una exportación PDF razonable. Usualmente Usted no tiene que cambiar esto, excepto si Usted no quisiera mostrarlo para nada o si Usted quisiera ajustarlo para su instalación.';
$string['checkbrokengradebookgrades'] = 'Revisar calificaciones rotas en Libro de calificaciones';
$string['checkbrokengradebookgrades_desc'] = 'Debido a un problema con la versión 2.9.1 de Checkmark (marca de verificación), las calificaciones no han sido transferidas correctamente al Libro de calificaciones. Los envíos siguientes han sido afectados por este problema:';
$string['checkbrokengradebookgrades_mail'] = 'Debido a un problema con la versión 2.9.1 de Checkmark (marca de verificación), las calificaciones no han sido transferidas correctamente al Libro de calificaciones. Los envíos siguientes han sido afectados por este problema y fueron corregidos automáticamente:';
$string['checkmark:addinstance'] = 'Añadir instancia de marca de verificación';
$string['checkmarkdetails'] = 'Detalles de marca de verificación';
$string['checkmark:grade'] = 'Calificar marca de verificación';
$string['checkmark:gradepresentation'] = 'Presentación de calificación';
$string['checkmarkmail'] = '{$a->grader} publicó retroalimentación en su envío de marca-de-verificación para \'{$a->checkmark}\'

Usted puede verlo anexado a su envío de marca-de-verificación:

{$a->url}';
$string['checkmarkmailhtml'] = '{$a->grader} publicó retroalimentación en su envío de marca-de-verificación para \'<i>{$a->checkmark}</i>\'<br /><br />
Usted puede verlo anexado a su <a href="{$a->url}">envío de marca-de-verificación</a>.';
$string['checkmarkmailsmall'] = '{$a->grader} publicó retroalimentación para su envío de marca-de-verificación para \'{$a->checkmark}\' Usted puede verla anexada a su envío';
$string['checkmark:manageoverrides'] = 'Gestionar anulaciones de marca de verificación';
$string['checkmarkname'] = 'Nombre de marca de verificación';
$string['checkmark_overviewsummary'] = 'Usted ha seleccionado {$a->checked_examples} / {$a->total_examples} ejemplos ({$a->checked_grade} / {$a->total_grade} puntos)<br />{$a->grade}<br />';
$string['checkmark_overviewsummary_nograde'] = 'Usted ha seleccionado {$a->checked_examples} / {$a->total_examples} ejemplos<br />{$a->grade}<br />';
$string['checkmarks'] = 'Marcas de verificación';
$string['checkmarkstatstitle'] = 'Marca de verificación de vista general del curso';
$string['checkmarksubmission'] = 'Envíos de marca de verificación';
$string['checkmark:submit'] = 'Enviar marca de verificación';
$string['checkmark_summary'] = 'Usted ha seleccionado <span id="examples">{$a->checked_examples}</span> de un total de {$a->total_examples} ejemplos.<br />(<span id="grade">{$a->checked_grade}</span> de un máximo de {$a->total_grade} puntos)';
$string['checkmark:trackattendance'] = 'Monitorear asistencia estudiantil';
$string['checkmark:view'] = 'Ver marca de verificación';
$string['checkmark:view_preview'] = 'Vista previa';
$string['checksummary'] = 'Resumen de marca de verificación';
$string['choose'] = 'Con la Selección...';
$string['comment'] = 'Comentario';
$string['configshowrecentsubmissions'] = 'Cualquiera puede ver notificaciones de envíos en reportes de actividad reciente.';
$string['couldfixevent'] = 'Si se pudo reparar exitosamente el evento con  ID {$a->id}, llamado {$a->name}.';
$string['count_individuals_mismatch'] = '¡El número de nombres individuales ({$a->namecount}) no concuerda con el número de calificaciones individuales ({$a->gradecount})!';
$string['coursemisconf'] = 'El curso está mal configurado';
$string['currentgrade'] = 'Calificación actual en el libro de calificaciones';
$string['custom_settings'] = 'configuraciones personalizadas';
$string['cutoffdate'] = 'Fecha de corte';
$string['cutoffdate_help'] = 'Si se activa, esto marca el final del período de envío. Despues de esta fecha, ningún estudiante podrá enviar. Si se deshabilita los estudiantes tendrán permitido enviar aun después de la fecha límite esperada.';
$string['data_preview'] = 'Vista previa de datos';
$string['data_preview_help'] = 'Haga clic en [+] o [-] para mostrar o para ocultar columnas en la vista previa de impresión.';
$string['data_settings'] = 'Configuraciones de impresión';
$string['datasettingstitle'] = 'Configuraciones de datos';
$string['dates_overwritten'] = '¡Las fechas han sido sobre-escritas!';
$string['defaultsettings'] = 'Configuraciones predeterminadas de Marca de verificación';
$string['defaultsettings_help'] = 'Estas configuraciones definen los valores por defecto para todos los nuevos ejercicios de Marca de verificación.';
$string['deletealloverrides'] = 'Eliminar todas las anulaciones de fechas';
$string['deleteallsubmissions'] = 'Borarr todos los envíos';
$string['description'] = 'Descripción';
$string['downloadall'] = 'Descargar todas las marcas de verificación como .ZIP';
$string['due'] = 'Marca de verificación pendiente';
$string['duedate'] = 'Fecha prometida  límite';
$string['duedate_help'] = 'Final del período nominal de envío. Después de esta fecha los estudiantes podrán enviar, pero sus envíos serán marcados como retrasados.';
$string['duedateno'] = 'Sin fecha prometida límite';
$string['duedatevalidation'] = 'La fecha límite esperada debe ser después de la fecha de "disponible a partir de".';
$string['early'] = '{$a} anticipadamente';
$string['editmysubmission'] = 'Editar mi envío';
$string['element_disabled'] = 'El elemento siguiente está deshabilitado debido a envíos existentes.';
$string['elements_disabled'] = 'Los siguientes elementos están deshabilitados debido a envíos existentes.';
$string['emailstudents'] = 'Alertas por Email a estudiantes';
$string['emailteachermail'] = '{$a->username} ha actualizado el envío de marca-de-verificación para \'{$a->checkmark}\' en {$a->dayupdated} en {$a->timeupdated}.

Está disponible aquí:

{$a->url}';
$string['emailteachermailhtml'] = '{$a->username} ha actualizado el envío de marca-de-verificación para <i>\'{$a->checkmark}\' en {$a->dayupdated} en {$a->timeupdated}</i><br /><br />
Está <a href="{$a->url}">disponible en el sitio web</a>.';
$string['emailteachers'] = 'Alertas por email a profesores';
$string['emailteachers_help'] = 'Si se habilita,los profesores reciben notificación por Email cuando los estudiantes añaden o actualizan un envío de marca de verificación.

Solamente los profesores que puedan calificar la marca de verificación particular son notificados. Por ejemplo, si el curso usa grupos separados, los profesores restringidos a grupos  particulares no recibirán notificación acerca de estudiantes  en otros grupos.';
$string['emptysubmission'] = 'Usted todavía no ha enviado nada';
$string['enablenotification'] = 'Enviar notificaciones';
$string['enablenotification_help'] = 'Si se habilita, los estudiantes serán notificados una vez que sus envíos de marca de verificación (o presentaciones correspondientes) sean calificados o se marque su asistencia.';
$string['end_of_submission_for'] = 'Fin del envío para {$a}';
$string['errornosubmissions'] = 'No hay envíos disponibles para descargar';
$string['eventexamplecreated'] = 'Ejemplo creado';
$string['eventexampledeleted'] = 'Ejemplo eliminado';
$string['eventexampleupdated'] = 'Ejemplo actualizado';
$string['eventgradeupdated'] = 'Calificación actualizada';
$string['eventsubmissionoverwritten'] = 'Envío sobrescrito';
$string['eventsubmissionsexported'] = 'Envío exportado';
$string['eventsubmissionupdated'] = 'Envío actualizado';
$string['eventviewprintpreview'] = 'Impresión de vista previa vista';
$string['eventviewsubmissions'] = 'Envíos vistos';
$string['examplecount_changed_after_submission'] = 'La cantifdad de ejemplos no puede ser cambiada, tan pronto como un envío esté presente.';
$string['examplegrades'] = 'Calificaciones individuales';
$string['examplegrades_help'] = 'Define la ponderación de cada ejemplo. Estos serán separados por el delimitador dado en paréntesis.';
$string['examplenames'] = 'Nombres individuales';
$string['examplenames_help'] = 'Define los nombres de ejemplos. Estos serán separados por el delimitador dado en paréntesis.';
$string['exampleprefix'] = 'Prefijo individual';
$string['exampleprefix_help'] = 'Opcionalmente ingrese un prefijo individual que será puesto automáticamente al frente de todos los nombres individuales. Este campo puede dejarse vacío.';
$string['example_preview_title'] = 'Vista previa de ejemplo';
$string['example_preview_title_help'] = 'La vista previa de ejemplo muestra una vista general de las opciones de marca de verificación.';
$string['export'] = 'exportar';
$string['exporttemplate_grades'] = 'Lista_de_calificar simple';
$string['exporttemplate_grades_extended'] = 'Lista_de_calificar extendida';
$string['exporttemplates'] = 'Plantilla';
$string['exporttemplates_help'] = 'Exportación rápida con plantillas predefinidas<br />
<ul>
<li><strong>configuraciones personalizadas</strong><br />
no se usa plantilla, todas las configuraciones deben hacerse manualmente</li>
<li><strong>Lista_de_calificar simple:</strong><br />
retrato, font pequeño, con encabezado/pie_de_página, nombres impresos en una línea<br />
conteniendo las siguientes columnas: [fullname, examples, grade]</li>
<li><strong>Lista_de_calificar extendida:</strong><br />
apaisada, font pequeño, con encabezado/pie_de_página, nombres impresos en una línea<br />
conteniendo las siguientes columnas: [fullname, idnumber, examples, checked, grade]</li>
<li><strong>Signaturelist simple:</strong><br />
portrait, small font, con encabezado/pie_de_página, nombres impresos en una línea<br />
conteniendo las siguientes columnas: [fullname, examples, signature]</li>
<li><strong>Signaturelist extended:</strong><br />
landscape, small font, con encabezado/pie_de_página, nombres impresos en una línea<br />
conteniendo las siguientes columnas: [fullname, idnumber, examples, checked, grade, signature]</li>
</ul>';
$string['exporttemplate_signature'] = 'Lista_de_firma simple';
$string['exporttemplate_signature_extended'] = 'Lista_de_firma extendida';
$string['extended_until'] = 'Extendida hasta {$a}';
$string['failedupdatefeedback'] = 'Falló al actualizar retroalimentación al envío para el usuario {$a}';
$string['feedback'] = 'Retroalimentación';
$string['feedbackfromteacher'] = 'Retroalimentación del {$a}';
$string['feedbackupdated'] = 'Retroalimentación al envío actualizada para {$a} personas';
$string['filter'] = 'Filtro';
$string['firstexamplenumber'] = 'Número del primer ejemplo';
$string['firstexamplenumber_help'] = 'Número del primer ejemplo. Los ejemplos siguientes tendrán números incrementados en 1 de su predecesor.';
$string['flexiblenaming'] = 'Nombre/calificación individual';
$string['flexiblenaming_help'] = 'Si se activa, se usarán nombres y calificaciones individuales para cada ejemplo.';
$string['forced'] = 'anulado por el profesor';
$string['forcesinglelinenames'] = 'Forzar nombres de una_línea';
$string['forcesinglelinenames_help'] = '<p>Imponer que el nombre sea escrito al PDF en una sola línea.</p>
<p><i>Cuidado:</i> si hubiera demasiadas columnas o el nombre fuera demasiado largo, será distorsionado y puede volverse ilegible. Oculte algunas columnas sin_importancia para tener más espacio para el nombre si esto le sucediera.</p>';
$string['format'] = 'Formato';
$string['grade'] = 'Calificación';
$string['grade_attendence_name'] = 'Calificación por asistencia';
$string['grade_automatically'] = 'calificar automáticamente';
$string['grade_checks_name'] = 'Calificación por revisiones';
$string['graded'] = 'Calificado';
$string['grade_help'] = 'Cuando están activadas funciones individuales la calificación tiene que ser la suma de todas las calificaciones de ejemplo (máximo 100).<br />Cuando Usted esté usando ejemplos estándares la calificación tiene que ser un número entero múltiplo del número de ejemplos. Así, los puntos por ejemplo se ajustan automáticamente.<br />Con JavaScript activado la calificación se selecciona automáticamente al usar funciones iindividuales. En el caso de usar ejemplos estándares con JavaScript activado solamente serán aceptados múltiples enteros del número de ejemplos.';
$string['grade_mismatch'] = '¡La calificación debe ser un múltiple entero de la cantidad de ejemplos!';
$string['grade_presentation_name'] = 'Calificación por presentación';
$string['gradesum_mismatch'] = '¡La suma de las calificaciones individuales no coincidirá con las calificaciones totales elegidas ({$a->gradesum}/{$a->maxgrade})!';
$string['gradingdue'] = 'Recordarme calificar para';
$string['gradingdue_help'] = 'La fecha esperada para cuando ya debería de estar completada la calificación de los envíos. Esta fecha es usada para priorizar las notificaciones en el Tablero para los profesores.';
$string['grant_extension'] = 'Otorgar extensión';
$string['guestnosubmit'] = 'Lo sentimos, los invitados no tienen permitido enviar una marca de verificación. Usted necesita ingresar al sitio/registrarse antes de que pueda enviar su respuesta.';
$string['guestnoupload'] = 'Lo siento, los invitados no tiene permitido subir';
$string['hidealltoggle'] = 'Ocultar todos los ejemplos';
$string['hideexamples'] = 'Ocultar ejemplos en tabla de envíos';
$string['hideintro'] = 'Ocultar descripción hasta la fecha de "Disponible a partir de"';
$string['hideintro_help'] = 'Si se habilita, la descripción de la marca de verificación está oculta hasta la fecha de "Disponible a partir de". Solamente se muestra el nombre de la marca de verificación.';
$string['informstudents'] = 'Enviar notificaciones';
$string['informstudents_help'] = 'Si se activa, el participante recibe una notificación acerca de su estatus de asistencia.';
$string['invalidcheckmark'] = 'Marca de verificación incorrecta';
$string['invalidid'] = 'La ID de la marca de verificación era incorrecta';
$string['invaliduserid'] = 'ID de usuario incorrecto';
$string['itemstocount'] = 'Número';
$string['lastgrade'] = 'Última calificación';
$string['late'] = '{$a} retrasado';
$string['manycolumnsinpdfwarning'] = 'Atención: debido a un gran número de ejemplos y a un espacio limitado, no puede asegurarse una exportación razonable a PDF. Trate de ocultar columnas innecesarias o use exportación XLSX u ODS en su lugar y adapte el diseño en su aplicación de hoja_de_cálculo.';
$string['maximumgrade'] = 'Calificación máxima';
$string['messageprovider:checkmark_updates'] = 'Notificaciones de marca de verificación';
$string['modulename'] = 'Marca de verificación';
$string['modulename_help'] = 'Las marcas de verificación le permiten al profesor especificar una tarea en donde los estudiantes tienen que palomear marcas que después pueden ser calificadas.';
$string['modulenameplural'] = 'Marcas de verificación';
$string['newsubmissions'] = 'Marcas de verificación enviadas';
$string['noattempts'] = 'No se han realizado intentos para esta marca de verificación';
$string['nocheckmarks'] = 'Todavía no hay marcas de verificación';
$string['nomoresubmissions'] = 'Ya no se permiten más envíos.';
$string['nonnegativeintrequired'] = '¡ Necesita ser un número entero y mayor o igual a cero  (>= 0) !';
$string['norequiregrading'] = 'No hay marcas de verificación que requieran calificarse';
$string['nostudents'] = '¡No hay usuarios que mostrar!';
$string['nostudentsmatching'] = '¡No hay usuarios que concuerden con las configuraciones actuales!';
$string['nosubmission'] = 'No se han enviado marcas de verificación';
$string['nosubmisson'] = 'No se han enviado marcas de verificación';
$string['notactive'] = 'Inactivo';
$string['notavailableyet'] = 'Lo sentimos, esta marca de verificación todavía no está disponible.<br />Las instrucciones para la marca de verificación se mostrarán aquí en la fecha que está debajo.';
$string['notgradedyet'] = 'Todavía no-calificado';
$string['notsubmittedyet'] = 'Todavía no-c}enviado';
$string['nousers'] = '¡No hay usuarios para mostrar!';
$string['numberofexamples'] = 'Número de ejemplos';
$string['numberofexamples_help'] = 'Número de ejemplos en esta marca de verificación.';
$string['operation'] = 'Operación';
$string['optimum'] = 'Óptimo';
$string['optionalsettings'] = 'Configuraciones opcionales';
$string['overridden'] = 'Anulada';
$string['override'] = 'Anular';
$string['override_and_next'] = 'Anular y crear una nueva anulación';
$string['override_groups_dates'] = 'Anular fechas de grupos';
$string['override_users_dates'] = 'Anular fechas de usuarios';
$string['page-mod-checkmark-submissions'] = 'Página de envío del módulo de marca de verificación';
$string['page-mod-checkmark-view'] = 'Pagina principal del módulo de marca de verificación';
$string['page-mod-checkmark-x'] = 'Cada pagina del módulo de marca de verificación';
$string['pagesize'] = 'Envíos mostrados por página';
$string['pagesize_help'] = 'Elija "Óptimo" para optimizar la distribución de las entradas en la lista de acuerdo al tamaño del texto elegido y la orientación de la página, si hubiera muchísimos participantes registrados en su curso.';
$string['pdfpageorientation'] = 'Orientación de la página';
$string['pdfpagesize'] = 'Envíos mostrados por página';
$string['pdfpagesize_help'] = 'Elija "Óptimo" para optimizar la distribución de las entradas en la lista de acuerdo al tamaño del texto elegido y la orientación de la página, si hubiera muchísimos participantes registrados en su curso.';
$string['pdfprintheader'] = 'Imprimir encabezado/-pie de página';
$string['pdfprintheader_help'] = 'Imprimir encabezado/pie_de_página si se selecciona';
$string['pdfprintheaderlong'] = 'Imprimir encabezado/pie_de_página si se selecciona';
$string['pdfsettings'] = 'Configuraciones del PDF';
$string['pdftextsize'] = 'Tamaño del texto';
$string['pluginadministration'] = 'Administración de marca de verificación';
$string['pluginname'] = 'Marca de verificación';
$string['popupinnewwindow'] = 'Abrir en una ventana emergente';
$string['posintrequired'] = '¡Necesita ser un número entero  y mayor de cero (> 0) !';
$string['posintst100required'] = 'Tiene que ser un número entero dentro del intervalo [0,100] (0 <= X <= 100)!';
$string['presentationfeedback'] = 'Retralimentación por presentación';
$string['presentationfeedback_table'] = 'Retroalimentación (presentación)';
$string['presentationgrade'] = 'Calificación por presentación';
$string['presentationgradebook'] = 'Mostrar calificación por presentación en el Libro de calificaciones';
$string['presentationgradebook_help'] = 'Esta opción controla si la calificación de presentación se mostrará como un ítem extra de calificación en el Libro de calificaciones.';
$string['presentationgrade_short'] = 'PT';
$string['presentationgrade_table'] = 'Calificación (presentación)';
$string['presentationgrading'] = 'Monitorear calificaciones por presentación';
$string['presentationgrading_grade'] = 'Calificar presentación';
$string['presentationgrading_grade_help'] = 'Este elemento controla como puede ser calificada la presentación. Pala la calificación, Usted puede seleccionar, ya sea <ul><li><strong>ninguna</strong> no se grabará ninguna calificación, pero Usted puede usar un texto como retroalimentación.</li><li><strong>escala</strong> Use una escala para calificar la presentación del estudiante</li><li><strong>punto</strong> Use un valor numérico para calificar la presentación del estudiante</li></ul>';
$string['presentationgrading_help'] = 'Si se activa, las calificaciones de presentacón pueden grabarse como un elemento extra de información de calificación.';
$string['presentationheader'] = 'Calificación de presentación';
$string['printsettingstitle'] = 'Exportar configuraciones';
$string['privacy:metadata:attendance'] = 'Estado de asistencia del usuario.';
$string['privacy:metadata:checks'] = 'Tabla que contiene ejemplos de asistencia revisada del usuario (ligada a una entrada en la tabla de envíos).';
$string['privacy:metadata:cutoffdate'] = 'Fecha y hora hasta cuando son posibles los envíos.';
$string['privacy:metadata:feedback'] = 'Retroalimentación textual dada al usuario.';
$string['privacy:metadata:feedbacks'] = 'Tabla que contiene datos de retroalimentación del usuario.';
$string['privacy:metadata:feedback:timecreated'] = 'La fecha y hora de cuando fue creada la retroalimentación.';
$string['privacy:metadata:feedback:timemodified'] = 'La fecha y hora más reciente de cuando fue actualizada/modificada la retroalimentación.';
$string['privacy:metadata:format'] = 'Formato para la retroalimentación textual dada al usuario.';
$string['privacy:metadata:grade'] = 'Calificación del usuario.';
$string['privacy:metadata:graderid'] = 'El usuario que dió retroalimentación.';
$string['privacy:metadata:mailed'] = 'Indica si el usuario ha sido informado acerca de la retroalimentación.';
$string['privacy:metadata:overrides'] = 'Tabla que contiene todas las fechas anuladas (disponible-desde, fecha esperada, fechas-de-corte).';
$string['privacy:metadata:override:timecreated'] = 'La fecha y hora de cuando las fechas han sido anuladas para este usuario.';
$string['privacy:metadata:override:timemodified'] = 'La fecha y hora más reciente de cuando las fechas han sido anuladas para este usuario.';
$string['privacy:metadata:pref:filter'] = 'El filtro por defecto a usar cuando se muestran tablas de  envío.';
$string['privacy:metadata:pref:forcesinglelinenames'] = 'La configuración por defecto sobre forzar o no exportaciones de envío con nombres de una sola línea.';
$string['privacy:metadata:pref:format'] = 'El formato por defecto a usar en el formato al mostrar tablas de envío.';
$string['privacy:metadata:pref:mailinfo'] = 'La configuración por defecto sobre enviar o no mensajes a usuarios si tienen retroalimentación.';
$string['privacy:metadata:pref:pageorientation'] = 'La orientación de página por defecto a usar al mostrar el formato de exportación de envío.';
$string['privacy:metadata:pref:pdfprintperpage'] = 'Cuantos envíos deberían de ser exportados por defecto.';
$string['privacy:metadata:pref:perpage'] = 'Cuantos envíos deberían de ser visibles en una página por defecto.';
$string['privacy:metadata:pref:printheader'] = '¿Los encabezados deberían de ser exportados por defecto para este usuario?';
$string['privacy:metadata:pref:quickgrade'] = '¿Debería de estar activada por defecto la calificación rápida para este usuario?';
$string['privacy:metadata:pref:sumabs'] = '¿Deberían de mostrarse por defecto sumas absolutas  para este usuario?';
$string['privacy:metadata:pref:sumrel'] = '¿Deberían de mostrarse por defecto sumas relativas para este usuario?';
$string['privacy:metadata:pref:textsize'] = 'Tamaño de texto por defecto a usar para las exportaciones de este usuario.';
$string['privacy:metadata:pref:zipped'] = 'Configuración por defecto si es que son preferidos PDFs separados por grupo como archivo ZIP.';
$string['privacy:metadata:presentationfeedback'] = 'Retroalimentación textual dada a la presentación del usuario.';
$string['privacy:metadata:presentationformat'] = 'Formato para la retroalimentación textual dada a la presentación del usuario.';
$string['privacy:metadata:presentationgrade'] = 'Calificación dada para la presentación del usuario.';
$string['privacy:metadata:state'] = 'Señalización acerca de si es que el ejemplo está revisado/no-revisado.';
$string['privacy:metadata:submissions'] = 'Tabla que contiene datos acerca de los envíos del usuario.';
$string['privacy:metadata:submission:timecreated'] = 'La fecha y hora de cuando fue creado el envío.';
$string['privacy:metadata:submission:timemodified'] = 'La fecha y hora más reciente de cuando fue actualizado/modificado el envío.';
$string['privacy:metadata:subsys:message'] = 'Checkmark (Marca de verificación) envía mensajes a los usuarios si es que han recibido retroalimentación y a los profesores cuando alguien envió (y si está habilitado).';
$string['privacy:metadata:timeavailable'] = 'Tiempo desde el principio del período de envío.';
$string['privacy:metadata:timedue'] = 'Fecha esperada para el envío.';
$string['privacy:path:feedback'] = 'retroalimentación';
$string['privacy:path:submission'] = 'envío';
$string['quickgrade'] = 'Permitir calificación rápida';
$string['quickgrade_help'] = 'Si se habilita, pueden calificarse múltiples marcas de verificación en una página. Añada calificaciones y comentarios y después haga clic en el botón para  "Guardar toda mi retroalimentación" para guardar todos los cambios para esa página.';
$string['remembertoupdategrades'] = 'Usted tiene envíos calificados automáticamente en esta marca de verificación. ¡Nosotros recomendamos encarecidamente que actualice o re califique los envíos si Usted cambió las calificaciones de los ejemplos!';
$string['requiregrading'] = 'requerir calificación';
$string['reviewed'] = 'Revisado';
$string['saveallfeedback'] = 'Guardar toda mi retroalimentación';
$string['search:activity'] = 'Marca de verificación- información de actividad';
$string['select'] = 'Seleccionar';
$string['selection'] = 'Selección';
$string['sendnotifications'] = 'Enviar notificaciones';
$string['setabsent'] = 'marcar como ausente';
$string['setabsentandgrade'] = 'marcar como ausente y calificar';
$string['setattendant'] = 'marcar como asistente';
$string['setattendantandgrade'] = 'marcar como asistente y calificar';
$string['showalltoggle'] = 'Mostrar todos los ejemplos';
$string['showrecentsubmissions'] = 'Mostrar envíos recientes';
$string['signature'] = 'firma';
$string['start'] = 'inicio';
$string['strallononepage'] = 'Imprimir todo en una página';
$string['strassignment'] = 'tarea';
$string['strautograded'] = '[auto-calificada]';
$string['strexample'] = 'Ejemplo';
$string['strexamples'] = 'Ejemplos';
$string['strlandscape'] = 'Apaisado';
$string['strlarge'] = 'Grande';
$string['strmedium'] = 'Mediano';
$string['strpapersizes'] = 'Tamaño del papel';
$string['strpoint'] = 'Punto';
$string['strpoints'] = 'Puntos';
$string['strportrait'] = 'Retrato';
$string['strprint'] = 'Descargar archivo';
$string['strprintpreview'] = 'Exportar';
$string['strprintpreviewtabalt'] = 'Abrir exportación';
$string['strrefreshdata'] = 'Actualizar vista previa de datos';
$string['strsmall'] = 'Pequeño';
$string['strstdexamplecount'] = 'Número de ejemplos';
$string['strstdexamplecountdesc'] = 'Es la cantidad de cuantos ejemplos se usarán por defecto';
$string['strstdexamplestart'] = 'Número del primer ejemplo';
$string['strstdexamplestartdesc'] = 'Es el número del primer ejemplo';
$string['strstdgrades'] = 'Calificaciones estándares';
$string['strstdgradesdesc'] = 'Calificaciones si se usa "nombres individuales"';
$string['strstdnames'] = 'Nombres estándares';
$string['strstdnamesdesc'] = 'Nombres de ejemplos si se usa "nombres individuales"';
$string['strsubmissions'] = 'Envíos';
$string['strsubmissionstabalt'] = 'Abrir vista de envíos';
$string['strsum'] = 'Suma';
$string['str_userid'] = 'ID del estudiante';
$string['strvalidmsgtime'] = 'Duración de la validez del mensaje';
$string['strvalidmsgtimedesc'] = 'Número de días después de los cuales ya no se enviarán más notificaciones para calificar a los usuarios.';
$string['submission'] = 'Envío';
$string['submissionfeedback'] = 'Retroalimentación al envío';
$string['submissions'] = 'Envíos';
$string['submissionsamount'] = '{$a->submitted} de {$a->total} estudiantes ya enviaron.';
$string['submissionsaved'] = 'Sus cambios han sido guardados';
$string['submissionsgraded'] = '{$a->graded} de {$a->all} envíos calificados';
$string['submissionsnotgraded'] = '{$a->reqgrading} de {$a->all} envíos no calificados';
$string['submitcheckmark'] = 'Enviar su marca de verificación usando este formato';
$string['submitted'] = 'Enviado';
$string['submitted_entries'] = 'Enviado';
$string['summary_abs'] = 'x/y ejemplos seleccionados';
$string['summary_rel'] = '% ejemplos seleccionados';
$string['trackattendance'] = 'Monitorear asistencia';
$string['trackattendance_help'] = 'Activar esta configuración para habilitar el monitoreo de la asistencia de participantes.';
$string['ungraded'] = 'Sin-calificar';
$string['unknown'] = 'Desconocido';
$string['usermisconf'] = 'El usuario está mal configurado';
$string['usernosubmit'] = 'Lo siento, Usted no tienenpermitido el enviar una marca de verificación.';
$string['viewfeedback'] = 'Sus calificaciones y retroalimentación de marca de verificación';
$string['viewmysubmission'] = 'Ver mi envío';
$string['viewsubmissions'] = 'Ver {$a} marcas de verificación enviadas';
$string['yoursubmission'] = 'Su envío';
$string['zippedgrouppdfs'] = 'Grupos como PDFs separados';
