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
 * Strings for component 'checklist', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   checklist
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcomments'] = 'Añadir comentarios';
$string['additem'] = 'Añadir';
$string['additemalt'] = 'Añadir un nuevo item a la lista';
$string['additemhere'] = 'Insertar nuevo item después de este';
$string['addownitems'] = 'Añadir sus propios items';
$string['addownitems-stop'] = 'Dejar de añadir sus propios items';
$string['allowmodulelinks'] = 'Permitir enlaces a módulos';
$string['anygrade'] = 'Cualquiera';
$string['anygrouping'] = 'Cualquier agrupamiento';
$string['autopopulate'] = 'Mostrar módulos de curso en lista de cotejo';
$string['autopopulate_help'] = 'Esto añadirá automáticamente una lista de todos los recursos y actividades en el curso actual hacia la lista de cotejo.<br /> Esta lista será actualizada con cualquier cambio en el curso; sin embargo, cuando visite la página de "Editar" de la lista.<br /> los ítems podrán ocultarse de la lista, al elegir el ícono \'ocultar\' a un lado de ellos.<br /> Para quitar los items automáticos de la lista, cambie esta opción a \'No\' y entonces elija \'Quitar items de módulos del curso\' en la página de \'Editar\'.';
$string['autoupdate'] = 'Tacharla cuando se completen los módulos';
$string['autoupdate2'] = 'Tachar cuando los cursos o módulos se completen';
$string['autoupdate2_help'] = 'Esto tachará ítems en su lista de cotejo automáticamente cuando  Usted complete la actividad relevante en el curso.<br />
Si está activado el rastreo de la finalización para una actividad en particular, esta se usará para tachar al ítem de la lista<br>
En caso contrario, el \'completar\' una actividad varía de una actividad a otra - \'ver\' un recurso, \'enviar\' un examen o una tarea, \'publicar\' en un foro o \'unirse\' a un chat, etc. (para los detalles acerca de qué es lo que exactamente causa que una actividad se marque como \'completada\', pídale a su administrador que busque en el archivo \'mod/checklist/classes/local/autoupdate.php\')<br>
Si un ítem está ligado a un curso y ese curso tiene habilitada la finalización, entonces el ítem será actualizado cuando ese curso sea marcado como completado.';
$string['autoupdate_help'] = 'Esto tachará automáticamente los items en su lista de cotejo en cuanto Usted complete la actividad relevante en el curso.<br /> \'Completar\' una actividad varía de una actividad a otra.- \'ver\' un recurso, \'enviar\' un examen o tarea \'publicar\' en un foro o unirse a un chat, etc.<br /> Si estuviera activado el seguimiento de completo (completion tracking) de Moodle 2.0 para una actividad particular, esto se usará para tachar el item en la listat<br /> Para detalles de exactamente qué causa que una actividad se marque como \'completa\', pida al administrador que vea el archivo  \'mod/checklist/autoupdate.php\'<br /> Nota: Puede tardarse hasta 60 segundos para que una activad de un estudiante se vea reflejada en su lista de cotejo';
$string['autoupdatenote'] = 'Es la marca del \'estudiante\' la que se actualiza automáticamente - no se mostrarán actualizaciones en las listas de cotejo para \'Solamente Profesor\'';
$string['autoupdatewarning_both'] = 'Hay items en esta lista que serán actualizadas automáticamente (en cuanto los estudiantes completen la actividad relacionada). Sin embargo, como esta es una lista de cotejo de \'estudiante y profesor\', las barras de progreso no se actualizarán hasta que el profesor esté de acuerdo con los puntajes otorgados.';
$string['autoupdatewarning_student'] = 'Hay items en esta lista que serán actualizadas automáticamente (en cuanto los estudiantes completen la actividad relacionada).';
$string['autoupdatewarning_teacher'] = 'Hay ítems en esta lista que serán actualizados automáticamente (cuando los estudiantes hayan completado la actividad frelacionada).';
$string['calendardescription'] = 'Este evento fue añadido por la lista de cotejo: {$a}';
$string['canceledititem'] = 'Cancelar';
$string['changetextcolour'] = 'Siguiente color de texto';
$string['checkeditemsdeleted'] = 'Items de lista de cotejo eliminado';
$string['checklist'] = 'listas de cotejo';
$string['checklist:addinstance'] = 'Añadir una nueva lista de cotejo';
$string['checklistautoupdate'] = 'Permitir que las listas de cotejo se actualicen automáticamente';
$string['checklist:edit'] = 'Crear y editar listas de cotejo';
$string['checklist:emailoncomplete'] = 'Recibir emails de completado';
$string['checklistfor'] = 'Lista de cotejo para';
$string['checklistintro'] = 'Introducción';
$string['checklist:preview'] = 'Previsualizar una lista de cotejo';
$string['checklistsettings'] = 'Configuraciones';
$string['checklist:updatelocked'] = 'Actualizar calificaciones de listas de cotejo bloqueadas';
$string['checklist:updateother'] = 'Actualizar calificaciones de lista de cotejo del estudiante';
$string['checklist:updateown'] = 'Actualizar las calificaciones de sus listas de cotejo';
$string['checklist:viewmenteereports'] = 'Ver (solamente) progreso del aprendiz';
$string['checklist:viewreports'] = 'Ver progreso del estudiante';
$string['checks'] = 'Revisar calificaciones';
$string['choosecourse'] = 'Elegir curso...';
$string['comments'] = 'Comentarios';
$string['completionpercent'] = 'Porcentaje de items que deberán ser tachados:';
$string['completionpercentgroup'] = 'Requerir tachar';
$string['configchecklistautoupdate'] = 'Antes de permitir esto, Usted debe hacer algunos cambios en el código del núcleo de Moodle. Por favor lea el archivo mod/checklist/README.txt para mayores detalles.';
$string['configshowcompletemymoodle'] = 'Si esta casilla se deja vacía, entonces las listas de cotejo se ocultarán de la página de \'Mi Moodle\'';
$string['configshowmymoodle'] = 'Si esta casilla se deja vacía, entonces las actividades de listas de cotejo  (con barras de progreso) ya no aparecerán en la página de \'Mi Moodle\'';
$string['configshowupdateablemymoodle'] = 'Si se activa esto, entonces solamente se mostrarán las listas de cotejo actualizables de la página de \'Mi Moodle\'';
$string['confirmdeleteitem'] = '¿Está Usted seguro de querer eliminar permanentemente esta lista de cotejo?';
$string['deleteitem'] = 'Eliminar este item';
$string['duedatesoncalendar'] = 'Añadir las fechas límite al calendario';
$string['edit'] = 'Editar lista de cotejo';
$string['editchecks'] = 'Editar verificaciones';
$string['editdatesstart'] = 'Editar fechas';
$string['editdatesstop'] = 'Suspender fechas de edición';
$string['edititem'] = 'Editar este item';
$string['emailoncomplete'] = 'Mandar correo electrónico cuando la lista de cotejo esté completa:';
$string['emailoncompletebody'] = 'El usuario {$a->user} ha completado la lista de cotejo \'{$a->checklist}\'  en el curso \'{$a->coursename}\' Vea la lista de cotejo aquí:';
$string['emailoncompletebodyown'] = 'Usted ha completado la lista de cotejo \'{$a->checklist}\'  en el curso \'{$a->coursename}\' Vea la lista de cotejo aquí:';
$string['emailoncomplete_help'] = 'Cuando se completa una lista de cotejo, se puede mandar un correo electrónico de notificación: al estudiante que la completó, a todos los profesores en el curso, o a ambos.<br /> Un administrador puede controlar quienes reciben este correo al usar la capacidad \'mod:checklist/emailoncomplete\' - por defecto, todos los profesores y profesores no-editores tienen esta capacidad.';
$string['emailoncompletesubject'] = 'El usuario {$a->user} ha completado la lista de cotejo  \'{$a->checklist}\\';
$string['emailoncompletesubjectown'] = 'Usted ha completado la lista de cotejo \'{$a->checklist}\\';
$string['enterurl'] = 'Ingresar URL...';
$string['eventchecklistcomplete'] = 'Lista de cotejo completa';
$string['eventeditpageviewed'] = 'Editar página visible';
$string['eventreportviewed'] = 'Reporte visto';
$string['eventstudentchecksupdated'] = 'Revisiones del estudiante vistas';
$string['eventteacherchecksupdated'] = 'Revisiones del profesor vistas';
$string['export'] = 'Exportar items';
$string['forceupdate'] = 'Actualizar revisiones para todos los items automáticos';
$string['gradetocomplete'] = 'Calificación para completar:';
$string['grouping'] = 'Visible a agrupamientos';
$string['guestsno'] = 'Usted no tiene permiso para ver esta lista de cotejo';
$string['headingitem'] = 'Este item es un encabezado - no tendrá una casilla de cotejo junto';
$string['import'] = 'Importar items';
$string['importfile'] = 'Elegir archivo a importar';
$string['importfromcourse'] = 'Curso completo';
$string['importfromsection'] = 'Sección actual';
$string['indentitem'] = 'Indentar item';
$string['itemcomplete'] = 'Completado';
$string['items'] = 'Items de lista de cotejo';
$string['linkcourses'] = 'Permitir enlazar ítems a cursos';
$string['linkcourses_desc'] = 'Cuando se habilita, los ítems en la lista de cotejo pueden enlazarse a cursos dentro de Moodle -marcándose como completados cuando el curso asociado esté completado. El habilitar esto puede tener algunas repercusiones en el desempeño al editar ítems de listas de cotejo en sitios con muchos cursos.';
$string['linkto'] = 'Enlazar a';
$string['linktocourse'] = 'Curso asociado con este ítem';
$string['linktomodule'] = 'Enlazar a este módulo';
$string['linktourl'] = 'enlaces asociados con este ítem';
$string['lockteachermarks'] = 'Bloquear calificaciones del profesor';
$string['lockteachermarks_help'] = 'Cuando se habilita esta configuración, una vez que un profesor haya guardado una calificación de \'Si\', ya no podrán cambiarla después. Los usuarios con la capacidad \'mod/checklist:updatelocked\' si podrán seguir cambiando la calificación.';
$string['lockteachermarkswarning'] = 'Nota: Una vez que Usted haya guardado estas calificaciones, Usted ya no podrá cambiar ninguna calificación de \'Si\'';
$string['modulename'] = 'Lista de cotejo';
$string['modulename_help'] = 'El módulo de Lista de Cotejo (checklist) le permite al profesor crear una lista de cotejo / lista de trabajos/ lista de pendientes, para que sus estudiantes trabajen al respecto.';
$string['modulenameplural'] = 'Listas de cotejo';
$string['moveitemdown'] = 'Mover item abajo';
$string['moveitemup'] = 'Mover item arriba';
$string['noitems'] = 'No hay items en lista de cotejo';
$string['onlyenrolled'] = 'Solo usuarios activos';
$string['onlyenrolleddesc'] = 'Cuando se selecciona, solamente son mostrados usuarios con inscripciones activas en las listas de cotejo (des-seleccionar  para regresar al comportamiento antiguo)';
$string['openlinkinnewwindow'] = '¿Abrir en ventana nueva?';
$string['optionalhide'] = 'Ocultar items opcionales';
$string['optionalitem'] = 'Este item es opcional';
$string['optionalshow'] = 'Mostrar items opcionales';
$string['or'] = 'O';
$string['percentcomplete'] = 'Items requeridos';
$string['percentcompleteall'] = 'Todos los items';
$string['pluginadministration'] = 'Administración de listas de cotejo';
$string['pluginname'] = 'Lista de cotejo';
$string['preview'] = 'Previsualizar';
$string['privacy:metadata:checklist_check'] = 'Información acerca de cuales ítems de lista de cotejo han sido marcadas por el usuario (o marcadas por el profesor para el usuario) en una lista de cotejo dada.';
$string['privacy:metadata:checklist_check:item'] = 'La ID del ítem de lista de cotejo que ha sido marcado';
$string['privacy:metadata:checklist_check:teacherid'] = 'La ID del profesor que actualizó por última vez el estado de este ítem';
$string['privacy:metadata:checklist_check:teachermark'] = 'El estado asignado a este ítem, para el usuario, por el profesor';
$string['privacy:metadata:checklist_check:teachertimestamp'] = 'La hora en la cual el profesor asignó por última vez un estado a este ítem';
$string['privacy:metadata:checklist_check:userid'] = 'La Id del usuario que ha marcado el ítem (o, si fue marcado por el profesor, el usuario para quien fue marcado)';
$string['privacy:metadata:checklist_check:usertimestamp'] = 'La hora en la cual el usuario marcó por última vez el ítem (0 si el ítem actualmente está sin-marcar)';
$string['privacy:metadata:checklist_comment'] = 'Información acerca de comentarios que hayan sido hechos por un profesor acerca del progreso del usuario en una lista de cotejo dada';
$string['privacy:metadata:checklist_comment:commentby'] = 'La ID del usuario (profesor) que hizo este comentario';
$string['privacy:metadata:checklist_comment:itemid'] = 'La ID del ítem de la lista de cotejo con el que se relaciona el comentario';
$string['privacy:metadata:checklist_comment:text'] = 'El texto del comentario';
$string['privacy:metadata:checklist_comment:userid'] = 'La ID del usuario (estudiante) con el cual se relaciona este comentario';
$string['privacy:metadata:checklist_item'] = 'Información acerca de ítems privados que el usuario ha añadido a la lista de cotejo dada';
$string['privacy:metadata:checklist_item:checklist'] = 'La ID de la lista de cotejo a la que fue añadido este ítem  privado';
$string['privacy:metadata:checklist_item:displaytext'] = 'El texto del ítem privado de la lista de cotejo';
$string['privacy:metadata:checklist_item:userid'] = 'La ID del usuario que creó este ítem privado (0 para ítems que fueron creados por un  profesor y mostrados a todos los usuarios)';
$string['progress'] = 'Progreso';
$string['removeauto'] = 'Quitar items de módulo del curso';
$string['report'] = 'Ver progreso';
$string['reporttablesummary'] = 'Tabla que muestra los items en la lista de cotejo que cada estudiante ha completado';
$string['requireditem'] = 'Este item es necesario - debe de completarse';
$string['resetchecklistprogress'] = 'Reiniciar el progreso de la lista de cotejo y los items del usuario';
$string['savechecks'] = 'Guardar';
$string['showcompletemymoodle'] = 'Mostrar las Listas de Cotejo completadas en la página de \'Mi Moodle\'';
$string['showfulldetails'] = 'Mostrar detalles completos';
$string['showhidechecked'] = 'Mostrar/ocultar ítems seleccionados';
$string['showmymoodle'] = 'Mostrar las Listas de Cotejo en la página de \'Mi Moodle\'';
$string['showprogressbars'] = 'Mostrar barras de progreso';
$string['showupdateablemymoodle'] = 'Mostrar solamente las listas de cotejo actualizables en la página de \'Mi Moodle\'';
$string['teacheralongsidecheck'] = 'Estudiante y profesor';
$string['teachercomments'] = 'Profesores pueden agregar comentarios';
$string['teacherdate'] = 'Fecha en la que un profesor actualizó por última vez este item';
$string['teacheredit'] = 'Actualizaciones por';
$string['teacherid'] = 'El profesor que actualizó por última vez esta calificación';
$string['teachermarkno'] = 'El profesor asegura que Usted NO ha completado esto';
$string['teachermarkundecided'] = 'El profesor aún no ha calificado esto';
$string['teachermarkyes'] = 'El profesor asegura que Usted ha completado esto';
$string['teachernoteditcheck'] = 'Solamente estudiante';
$string['teacheroverwritecheck'] = 'Solamente profesor';
$string['theme'] = 'Tema para mostrar lista de cotejo';
$string['togglecolumn'] = 'Alternar columna';
$string['toggledates'] = 'Alternar nombres y fechas';
$string['togglerow'] = 'Alternar fila';
$string['unindentitem'] = 'Item no indentado';
$string['updatecompletescore'] = 'Guardar calificaciones de acompletado';
$string['updateitem'] = 'Actualizar';
$string['userdate'] = 'Fecha en la que se actualizó por última vez este item';
$string['useritemsallowed'] = 'El usuario puede añadir sus propios items';
$string['useritemsdeleted'] = 'Items del usuario eliminados';
$string['view'] = 'Ver lista de cotejo';
$string['viewall'] = 'Ver a todos los estudiantes';
$string['viewallcancel'] = 'Cancelar';
$string['viewallsave'] = 'Guardar';
$string['viewsinglereport'] = 'Ver progreso para este usuario';
$string['viewsingleupdate'] = 'Actualizar progreso para este usuario';
$string['yesnooverride'] = 'Si, no se puede anular';
$string['yesoverride'] = 'Si, puede anularse';
