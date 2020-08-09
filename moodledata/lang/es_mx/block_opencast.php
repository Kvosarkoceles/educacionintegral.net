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
 * Strings for component 'block_opencast', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   block_opencast
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accesspolicies'] = 'Políticas de Acceso';
$string['aclgroupdeleted'] = 'Acceso eliminado para video: {$a->title}';
$string['aclnothingtobesaved'] = 'No se han hecho cambios a la visibilidad';
$string['aclrolesadded'] = 'El cambio en visibilidad ha sido disparado para permitirles a todos los estudiantes del curso el acceso al video: {$a->title}

Por favor, refresque el sitio después de un tiempo para ver el estado actual de la visibilidad.';
$string['aclrolesaddedgroup'] = 'El cambio en visibilidad ha sido disparado para permitirles a los estudiantes de grupos seleccionados el acceso al video: {$a->title}

Por favor, refresque el sitio después de un tiempo para ver el estado actual de la visibilidad.';
$string['aclroleschangeerror'] = 'Error durante el cambio de visibilidad del video: {$a->title}

Algunos cambios podrían no haberse guardado.
Si esto ocurre repetidamente, por favor póngase en contacto con su equipo de soporte.';
$string['aclrolesdeleted'] = 'El cambio en visibilidad ha sido disparado para impedirles a todos los estudiantes del curso el acceso al video: {$a->title}

Por favor, refresque el sitio después de un tiempo para ver el estado actual de la visibilidad.';
$string['aclrolesname'] = 'Roles';
$string['aclrolesnamedesc'] = 'Usted puede usar el reemplazable [COURSEID] en el nombre del rol que es automáticamente reemplazado.';
$string['actions'] = 'Lista de acciones separadas por coma';
$string['addrole'] = 'Añadir un nuevo rol';
$string['addvideo'] = 'Añadir video';
$string['adhocfiledeletion'] = 'Eliminar videoarchivo de Moodle';
$string['adhocfiledeletiondesc'] = 'Si se activa, el plugin intenta eliminar el videoarchivo del sistema de archivo de Moodle inmediatamente después de haber subido al servidor opencast.
   Por favor tenga en cuenta que el archivo seguirá permaneciendo en el sistema de archivo, si es usado en otros lugares en Moodle.';
$string['adminchoice_noworkflow'] = '-- Sin flujograma --';
$string['allowunassign'] = 'Permitir des-asignar del curso';
$string['allowunassigndesc'] = 'Eliminar la asignación de una serie de curso para controlar visibilidad en el selector de archivos y listas de curso. Esta característica solamente está disponible cuando es posible tener eventos sin series en opencast. Por favor pregúntele al administrador del sistema opencast antes de activar esto.';
$string['backupopencastvideos'] = 'Respaldar videos Opencast';
$string['backupsettings'] = 'Configuraciones para respaldo y restauración';
$string['blocksettings'] = 'Configuraciones para una instancia de bloque';
$string['changevisibility'] = 'Alterar visibilidad';
$string['changevisibility_group'] = 'El video es visible para todos los estudiantes que pertenecen a los grupos seleccionados. Hacer clic para alterar visibilidad.';
$string['changevisibility_header'] = 'Cambiar visibilidad para {$a->title}';
$string['changevisibility_hidden'] = 'El video (no) está visible para ningún estudiante. Hacer clic para alterar visibilidad';
$string['changevisibility_mixed'] = 'La visibilidad del video está en un estado inválido. Hacer clic para elegir la visibilidad correcta.';
$string['changevisibility_visible'] = 'El video es visible para todos los estudiantes del curso. Hacer clic para alterar visibilidad.';
$string['coursefullnameunknown'] = 'Nombredecurso desconocido';
$string['createdby'] = 'Subido por';
$string['createseriesforcourse'] = 'Crear nueva serie';
$string['cronsettings'] = 'Configuraciones para trabajos de subida';
$string['deleteaclgroup'] = 'Eliminar video de esta lista';
$string['deleteevent'] = 'Eliminar un evento en opencast';
$string['deleteeventdesc'] = 'Usted está a punto de eliminar este video permanentemente e irreversiblemente de opencast.
   Todos los enlaces incrustados a él se volverán inválidos. Por favor no continúe a menos de que esté absolutamente seguro.';
$string['deletegroupacldesc'] = 'Usted está a punto de eliminar el acceso a este video desde este curso.
   Si el acceso es eliminado, el video no es mostrado en el selector de archivos ni en la lista de videos disponibles. Esto no afecta a los videos que ya estén incrustados.
   El video no será eliminado en Opencast.';
$string['deleteworkflow'] = 'Flujograma a iniciar antes de que el evento sea eliminado';
$string['deleteworkflowdesc'] = 'Antes de eliminar un video, un flujograma puede ser definido, el cual es llamado para retirar el evento de todos los canales de publicación.';
$string['deleting'] = 'Va a ser eliminado';
$string['dodeleteaclgroup'] = 'Eliminar acceso a videos de este curso';
$string['dodeleteevent'] = 'Eliminar video permanentemente';
$string['duplicateworkflow'] = 'Flujograma para eventos duplicados';
$string['editseriesforcourse'] = 'Editar mapeo de serie';
$string['erroremailbody'] = '{$a->errorstr} Detalles: {$a->message}.';
$string['errorgetblockvideos'] = 'La lista no puede ser cargada (Error: {$a})';
$string['errorrestoremissingevents_subj'] = 'Error de opencast durante proceso de restauración';
$string['errorrestoremissingseries_subj'] = 'Error de opencast durante proceso de restauración';
$string['eventdeleted'] = 'El video ha sido eliminado';
$string['eventdeletedfailed'] = 'No se pudo eliminar el evento';
$string['eventdeletionstarted'] = 'El video será eliminado pronto.';
$string['eventuploadfailed'] = 'Falló la subida';
$string['eventuploadsucceeded'] = 'Subida exitosa';
$string['form_seriesid'] = 'ID de la serie';
$string['form_seriestitle'] = 'Título de la serie';
$string['gotooverview'] = 'Ir a vista general ...';
$string['groupcreation'] = 'Crear un grupo';
$string['groupcreationdesc'] = 'Si se activa, se creará un grupo durante la subida.';
$string['groupname'] = 'Nombre del grupo';
$string['groupnamedesc'] = 'Grupo al cual el video es añadido. Importante: La longitud del nombre del grupo está restringida a 128 bytes. Usted puede usar los reemplazables  [COURSEID] y [COURSENAME] que son automáticamente reemplazados.';
$string['group_name_empty'] = 'El nombre del grupo no debe estar vacío si un grupo debería de ser creado.';
$string['groupseries_header'] = 'Grupo y Serie';
$string['heading_actions'] = 'Acciones';
$string['heading_delete'] = 'Eliminar';
$string['heading_permanent'] = 'Permanente';
$string['heading_role'] = 'Rol';
$string['hend_date'] = 'Fecha de Término';
$string['hlocation'] = 'Lugar';
$string['hpublished'] = 'Publicado';
$string['hstart_date'] = 'Fecha de Inicio';
$string['htitle'] = 'Título';
$string['hvisibility'] = 'Visibilidad';
$string['hworkflow_state'] = 'Estado';
$string['invalidacldata'] = 'Datos ACL inválidos';
$string['limituploadjobs'] = 'Limitar trabajo de subida por cron';
$string['limituploadjobsdesc'] = 'Limitar el número de uploadjobs (trabajos_de_subida) hechos por un cronjob (trabajo_de_cron). El cronjob puede ser agendado aquí: {$a}';
$string['limitvideos'] = 'Número de videos';
$string['limitvideosdesc'] = 'Máximo número de videos a mostrar en bloque';
$string['missingevent'] = 'Falló creación de evento';
$string['missinggroup'] = 'Grupo faltante en opencast';
$string['missingseries'] = 'Serie faltante en opencast';
$string['missingseriesassignment'] = 'Asignación de serie faltante';
$string['morevideos'] = 'Más videos ...';
$string['mstatecreatingevent'] = 'Subiendo ...';
$string['mstatecreatinggroup'] = 'Creando Grupo Opencast ...';
$string['mstatecreatingseries'] = 'Creando Serie Opencast ...';
$string['mstatereadytoupload'] = 'Listo para transferirse';
$string['mstatetransferred'] = 'Transferido';
$string['mstateunknown'] = 'Estado desconocido';
$string['mstateuploaded'] = 'Procesando trabajos post-subida';
$string['noseriesid'] = 'La ID de la serie aun no está definida.';
$string['nothingtodisplay'] = 'Sin videos disponibles';
$string['notpublished'] = 'No publicado';
$string['novideosavailable'] = 'Sin videos disponibles';
$string['ocstatecapturing'] = 'Capturando';
$string['ocstatefailed'] = 'Falló';
$string['ocstateneedscutting'] = 'Necesita cortarse';
$string['ocstateprocessing'] = 'Procesando';
$string['ocstatesucceeded'] = 'Exitoso';
$string['opencast:addinstance'] = 'Añadir un nuevo bloque de subida opencast';
$string['opencast:addvideo'] = 'Añadir un nuevo video al bloque de subida opencast';
$string['opencast:createseriesforcourse'] = 'Crear una nueva serie en opencast para un curso Moodle';
$string['opencast:defineseriesforcourse'] = 'Enlazar una serie opencast existente a un curso Moodle';
$string['opencast:deleteevent'] = 'Finalmente eliminar un video (evento) en opencast';
$string['opencast:myaddinstance'] = 'Añadir un nuevo bloque de subida de Opencast al Tablero';
$string['opencast:unassignevent'] = 'Des-asignar un video del curso, donde el video fue subido.';
$string['opencast:viewunpublishedvideos'] = 'Ver todos los videos del servidor opencast, aunque no estén publicados';
$string['overview'] = 'Vista General';
$string['planned'] = 'Planeado';
$string['pluginname'] = 'Videos Opencast';
$string['privacy:metadata:block_opencast_uploadjob'] = 'Información acerca de subidas de videos.';
$string['privacy:metadata:block_opencast_uploadjob:courseid'] = 'ID del curso en donde el video es subido';
$string['privacy:metadata:block_opencast_uploadjob:fileid'] = 'ID del archivo/video que es subido';
$string['privacy:metadata:block_opencast_uploadjob:opencasteventid'] = 'ID del evento opencast que fue creado durante la subida';
$string['privacy:metadata:block_opencast_uploadjob:status'] = 'Estado del proceso de subida';
$string['privacy:metadata:block_opencast_uploadjob:timecreated'] = 'La fecha de cuando fue creado el trabajo de subida.';
$string['privacy:metadata:block_opencast_uploadjob:timemodified'] = 'La fecha de cuando fue modificado por última vez el trabajo de subida.';
$string['privacy:metadata:block_opencast_uploadjob:userid'] = 'La ID del usuario que subió el video';
$string['privacy:metadata:core_files'] = 'El bloque opencast almacena archivos (videos) que han sido subidos por el usuario.';
$string['privacy:metadata:opencast'] = 'El bloque interactua con una instancia opencast y por eso los datos necesitan ser intercambiados.';
$string['privacy:metadata:opencast:file'] = 'El archivo que es seleccionado es subido a opencast.';
$string['processdelete'] = 'Procesar trabajos de eliminación para Opencast';
$string['processupload'] = 'Procesar subida';
$string['publishtoengage'] = 'Publicar para Motivar';
$string['publishtoengagedesc'] = 'Seleccionar esta opción para publicar el video después de subir para motivar al jugador. La configuración de opencast debe soportar esto.';
$string['restoreopencastvideos'] = 'Restaurar videos opencast';
$string['reuseexistingupload'] = 'Re-utilizar subidas existentes';
$string['reuseexistinguploaddesc'] = 'Si se activa, múltiples videos con el mismo \'hash\' del contenido son subidos a opencast solamente una vez.
Esto ahorra almacenamiento y potencia de procesamiento, pero podría causar problemas cuando Usted usa políticas de acceso específicas basadas en series opencast.';
$string['rolename'] = 'Nombre del rol';
$string['series_already_exists'] = 'El curso ya está asignado a una serie.';
$string['seriescreated'] = 'La serie fue creada.';
$string['series_does_not_exist'] = 'La serie asignada a este curso no es válida, ¡Por favor póngase en contacto con su administrador!';
$string['series_does_not_exist_admin'] = 'La serie con el identificador \'{$a}\' no pudo ser recuperada desde Opencast.';
$string['seriesidnotvalid'] = 'La serie no existe.';
$string['seriesidsaved'] = 'La ID de la serie fue guardada.';
$string['seriesidunset'] = 'La ID de la serie fue  removida.';
$string['seriesname'] = 'Nombre de la serie';
$string['seriesnamedesc'] = 'Series a las cuales el video es añadido. Usted puede usar los reemplazables [COURSEID] y [COURSENAME] los cuales son automáticamente reemplazados.';
$string['series_name_empty'] = 'El nombre de la serie no puede estar vacío.';
$string['seriesnotcreated'] = 'La serie no pudo ser creada.';
$string['setting_permanent'] = 'Es permanente';
$string['settings'] = 'Videos Opencast';
$string['submit'] = 'Guardar cambios';
$string['uploadingeventfailed'] = 'Falló creación del evento';
$string['uploadjobssaved'] = 'Subida exitosa de video.<br />El video está agendado para ser transferido a Opencast ahora. Usted no necesita esperar en esta página para que termine la transferencia.';
$string['uploadqueuetoopencast'] = 'Videos agendados para ser transferidos a Opencast';
$string['uploadworkflow'] = 'Flujograma a iniciar después de subida';
$string['uploadworkflowdesc'] = 'Configurar el nombre corto único del flujograma, que debería de ser iniciado después de subir exitosamente un archivo de video a opencast.
   Si se deja vacío, el flujograma estándar (ng-schedule-and-upload) será usado. Solicitar flujogramas adicionales que podrían haber sido creados por el administrador de opencast.';
$string['videonotfound'] = 'Video no encontrado';
$string['videosavailable'] = 'Videos disponibles en este curso';
$string['videostoupload'] = 'Videos a subir a opencast';
$string['visibility'] = 'Visibilidad del video.';
$string['visibility_group'] = 'Permitirles a todos los estudiantes que pertenezcan a grupos seleccionados el que accedan al video';
$string['visibility_hide'] = 'Impedirle a todos los estudiantes acceder al video';
$string['visibility_show'] = 'Permitirle a todos los estudiantes del curso acceder al video';
$string['workflownotdefined'] = 'El flujograma para actualizar metadatos no está definido.';
$string['workflow_not_existing'] = 'Este flujograma no existe.';
$string['workflowrolesdesc'] = 'El flujograma es disparado cuando las reglas no-permanentes ACL son eliminadas o añadidas. Si no se configura, no será posible cambiar la visibilidad de los video subidos mediante el bloque.';
$string['workflowrolesname'] = 'Flujograma para cambiar las reglas ACL';
$string['worklowisrunning'] = 'Un flujograma está corriendo. Usted no puede cambiar la visibilidad en este momento.';
$string['wrongmimetypedetected'] = 'Se usó un mimetype inválido al subir el video {$a->filename} del curso {$a->coursename}.
   ¡Solamente están permitidos archivos de video!';
