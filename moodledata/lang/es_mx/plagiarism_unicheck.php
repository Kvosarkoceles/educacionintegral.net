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
 * Strings for component 'plagiarism_unicheck', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   plagiarism_unicheck
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['api_region'] = 'Región API Unicheck';
$string['apiregion:eu-central-1'] = 'Europa';
$string['api_region_help'] = 'La región en donde son almacenados y procesados los datos del cliente. Pregúntele a su mánager de cuenta Unicheck cual región es usada para su cuenta.';
$string['apiregion:us-east-1'] = 'Estados Unidos';
$string['api_secret'] = 'Secreto API';
$string['api_secret_help'] = 'Secreto API proporcionado por Unicheck par activar plugin Moodle. Usted puede encontrarlo en <a href="https://corp.unicheck.com/profile/apisettings">https://corp.unicheck.com/profile/apisettings</a>';
$string['archive:limitreachedfulldescription'] = 'Hay más documentos en el archivo "{$a->filename}", pero no han sido analizados ya que el máximo de documentos a analizar dentro de un archivo zip es {$a->max_supported_count}. Para modificar este valor, póngase en contacto con el administrador de esta instalación de Moodle';
$string['archive:limitreachedshortdescripton'] = 'No fueron analizados todos los documentos';
$string['attempts'] = 'Intentos hechos';
$string['cachedef_debugging'] = 'Resultados de prueba de depuración del plugin';
$string['check_all_submitted_assignments'] = 'Verificar los trabajos ya entregados';
$string['check_all_submitted_assignments_help'] = 'En el caso de que Unicheck haya sido desactivado o si quiere generar informes para las entregas anteriores, active esta opción y guarde los ajustes de la tarea. Esto iniciará la revisión masiva de todos los trabajos (archivos y/o textos) enviados para la revisión. La revisión empezará en unos minutos después de activar esta opción.';
$string['check_confirm'] = '¿Está seguro de que quiere empezar la verificación con el plugin de detección de plagio Unicheck?';
$string['check_file'] = 'Iniciar una revisión';
$string['check_start'] = 'Calificación de originalidad Unicheck en progreso';
$string['check_type'] = 'Fuentes para comparación';
$string['check_type_help'] = 'a) Internet - una colección de internet de miles de millones de recursos en línea (artículos, páginas web, publicaciones de blog, noticias, archivos, etc.). Esta fuente incluye las publicaciones de libre acceso en repositorios, revistas y las publicaciones en las páginas personales de autores.
<br>b) Biblioteca Institucional de Unicheck - colección de los trabajos estudiantiles en la cuenta de esta institución. Los archivos se añaden a la colección sólo cuando la opción "Añadir a la Biblioteca Institucional de Unicheck" esté activada.
<br>c) Base de datos externa - fuentes de datos de texto adicionales en la cuenta de esta institución (por ejemplo, trabajos anteriores de los alumnos)';
$string['client_id'] = 'ID del cliente';
$string['client_id_help'] = 'ID de Cliente proporcionado por Unicheck para identificar la cuenta de Unicheck. Puede encontrarlo en <a href="https://corp.unicheck.com/profile/apisettings">https://corp.unicheck.com/profile/apisettings</a>';
$string['cronwarning'] = 'El script de mantenimiento <a href="../../admin/cron.php">cron.php</a> no se ejecutó durante 30 minutos - Cron debe estar configurado para permitir que Unicheck funcione correctamente.';
$string['debugging:batchoperations:batchoperationsdescription'] = 'Con seleccionados...';
$string['debugging:batchoperations:chooseoperation'] = 'Elegir operación';
$string['debugging:batchoperations:confirmdelete'] = '¿Eliminar todos los archivos seleccionados?';
$string['debugging:batchoperations:confirmresubmit'] = '¿Re-enviar todos los archivos seleccionados?';
$string['debugging:batchoperations:delete'] = 'Eliminar';
$string['debugging:batchoperations:filesnotresubmitted'] = 'No hay archivos coincidentes para re-enviar.';
$string['debugging:batchoperations:nofilesselected'] = 'No hay archivos seleccionados';
$string['debugging:batchoperations:resubmit'] = 'Re-enviar';
$string['debugging:batchoperations:selectfile'] = 'Seleccionar {$a}';
$string['debugging:filter:button:reset'] = 'Reiniciar filtros';
$string['debugging:filter:button:submit'] = 'Aplicar filtros';
$string['debugging:filter:errorcode'] = 'Código de error';
$string['debugging:filter:errormessage'] = 'Mensaje de error';
$string['debugging:filter:perpage'] = 'Por página';
$string['debugging:filter:timesubmittedfrom'] = 'Enviado desde';
$string['debugging:filter:timesubmittedto'] = 'Enviado a';
$string['debugging:filter:title'] = 'Opciones de filtro';
$string['debugging:statustable:checkcallback_url'] = 'Probar disponibilidad URL callback Servidor Moodle';
$string['debugging:statustable:checklicense'] = 'Estatus de la licencia';
$string['debugging:statustable:checkmoodle_adhoc'] = 'Tabla Ad-hoc Análisis Moodle';
$string['debugging:statustable:checkmoodle_adhocbigqueue'] = 'Un gran número de trabajos ad-hoc en cola. Necesita commer cron más frecuentemente';
$string['debugging:statustable:checkmoodle_adhoclastexecution'] = 'Última ejecución de cron hace más de {$a} minutos';
$string['debugging:statustable:checkmoodle_adhocslowly'] = 'Procesamiento de trabajos ad-hoc lento';
$string['debugging:statustable:checkunicheck_api_key'] = 'Probar Clave API Unicheck';
$string['debugging:statustable:checkunicheck_host'] = 'Probar disponibilidad Host Unicheck';
$string['debugging:statustable:fixtest'] = 'Corregir revisión {$a} primero';
$string['debugging:statustable:header'] = 'Revisiones de estatus Unicheck';
$string['debugging:statustable:recheck'] = 'Volver a revisar';
$string['debugging:statustable:recheckdescription'] = 'Resultados de disponibilidad almacenados en caché';
$string['debugging:table:attempts'] = 'Intentos hechos';
$string['debugging:table:errorcode'] = 'Código de error';
$string['debugging:table:errormessage'] = 'Mensaje de error';
$string['debugging:table:id'] = 'ID';
$string['debugging:table:identifier'] = 'Identificador';
$string['debugging:table:isarchive'] = 'Es archivo';
$string['debugging:table:module'] = 'Módulo';
$string['debugging:table:possibleoperations'] = 'Operaciones posibles';
$string['debugging:table:timesubmitted'] = 'Hora de enviado';
$string['defaultsdesc'] = 'Configuración predeterminada para nuevas tareas: Elija entre las opciones junto a los siguientes ítems para configurar los ajustes predeterminados para nuevas tareas. Los docentes pueden ajustar las configuraciones disponibles en las tareas';
$string['defaultupdated'] = 'Valores por defecto actualizados';
$string['delete'] = 'Eliminar';
$string['deletedwarning'] = 'Este archivo no pudo ser encontrado - podría haber sido eliminado por el usuario';
$string['draft_submit'] = '¿Cuándo debería enviarse el archivo a Unicheck?';
$string['enable_api_logging'] = 'Activar las bitácoras por API';
$string['enable_api_logging_help'] = 'Marque esta casilla para activar las bitácoras por API en esta instancia de Moodle. Esta opción muestra los datos brutos de solicitud/respuesta de API de Unicheck';
$string['enable_mod_assign'] = 'Activar Unicheck en la actividad Tarea';
$string['enable_mod_assign_help'] = 'Activar el Servicio de detección de plagio Unicheck para la actividad Tarea (textos en línea y envío de archivos disponibles)';
$string['enable_mod_forum'] = 'Activar Unicheck en la actividad Foro';
$string['enable_mod_forum_help'] = 'Activar el Servicio de detección de plagio Unicheck para la actividad Foro (respuestas de texto y entregas de archivos disponibles)';
$string['enable_mod_workshop'] = 'Activar Unicheck en la actividad Taller';
$string['enable_mod_workshop_help'] = 'Activar el Servicio de detección de plagio Unicheck para la actividad Taller (entregas de textos y archivos disponibles)';
$string['enable_plugin'] = 'Activar el Servicio de detección de plagio Unicheck';
$string['enable_plugin_help'] = 'Marque esta casilla para activar el Servicio de detección de plagio Unicheck en esta instancia de Moodle.';
$string['event:api_called'] = 'Solicitud de API';
$string['event:api_user_created'] = 'Usuario creado';
$string['event:api_user_updated'] = 'Usuario actualizado';
$string['event:archive_files_checked'] = 'Archivos archivados  revisados';
$string['event:archive_files_unpacked'] = 'Archivos archivados y listos para revisión de similitud';
$string['event:archive_files_uploaded'] = 'Archivos del archivo subidos';
$string['event:callback_accepted'] = 'Callback (llamada de retorno) aceptada';
$string['event:error_handled'] = 'Error manejado';
$string['event:file_similarity_check_completed'] = 'Revisión de similitud completada';
$string['event:file_similarity_check_failed'] = 'Revisión de similitud falló';
$string['event:file_similarity_check_recalculated'] = 'Revisión de similitud recalculada';
$string['event:file_similarity_check_started'] = 'Revisión de similitud  iniciada';
$string['event:file_upload_completed'] = 'Subida de archivo completada';
$string['event:file_upload_failed'] = 'Subida de archivo falló';
$string['event:file_upload_started'] = 'Subida de archivo iniciada';
$string['exclude_citations'] = 'Excluir referencias y citas';
$string['exclude_citations_help'] = 'Active esta opción para identificar y excluir referencias y citas. Unicheck identifica citas según las normas descritas en las guías de APA, MLA, Chicago, Turabian, Harvard. Las citas se resaltarán en azul y las referencias se marcarán en morado. Estos ítems serán excluidos de la calificación total de similitud.';
$string['exclude_self_plagiarism'] = 'Excluir auto-plagio';
$string['exclude_self_plagiarism_help'] = 'Activa esta opción para excluir el autoplagio en el mismo curso. Las similitudes con las tareas de otros cursos serán igualmente reportados. <br> Esta opción tiene que ser activada antes de la entrega y no debe modificarse posteriormente.';
$string['explainerrors'] = 'Esta página enumera los archivos que se encuentran actualmente en un estado de error. <br/> Cuando se eliminen los archivos en esta página, no podrán ser reenviados, y los errores ya no se mostrarán a los profesores o estudiantes';
$string['external_database'] = 'Base de datos externa';
$string['file'] = 'Archivo';
$string['filedeleted'] = 'Archivo eliminado de la cola';
$string['filereset'] = 'Un archivo se ha restablecido para su reenvío a Unicheck';
$string['fileresubmitted'] = 'Archivo puesto en cola para el reenvío';
$string['generalinfo'] = 'Información general';
$string['getscore'] = 'Obtener puntaje';
$string['heldevents'] = 'Eventos realizados';
$string['heldeventsdescription'] = 'Estos son eventos que no se completaron en el primer intento y se pusieron en cola para su reenvío; esto evita que los eventos posteriores se completen y es posible que necesiten una investigación adicional. Algunos de estos eventos pueden no ser relevantes para Unicheck.';
$string['id'] = 'ID';
$string['identifier'] = 'Identificador';
$string['max_100000_words'] = 'El(los) archivo(s) no puede(n) contener más de 100 000 palabras y tener un tamaño superior a 70 MB';
$string['max_125000_words'] = 'Los archivos deberían de tener no más de 125 000 palabras y no deberían ser mayores de 70MB';
$string['max_supported_archive_files_count'] = 'Número máximo de archivos a revisar en un archivo comprimido';
$string['max_supported_archive_files_count_help'] = 'Especifique el número máximo de archivos a ser revisados por Unicheck. El sistema elegirá sólo aquellos tipos de archivo que son admitidos por Unicheck y procesará archivos uno por uno. Los formatos admitidos son ZIP, RAR.';
$string['min_30_words'] = 'Se requieren al menos 30 palabras';
$string['module'] = 'Módulo';
$string['my_library'] = 'Biblioteca';
$string['name'] = 'Nombre';
$string['no_index_files'] = 'Añadir envíos a Biblioteca Institucional';
$string['no_index_files_help'] = 'Los trabajos de los alumnos se añaden a la Biblioteca Institucional privada sólo cuando esta opción esté activada. Los nuevos envíos se comparan con los trabajos almacenados en la Biblioteca Institucional, además de internet. Esta biblioteca sólo incluye trabajos entregados por los estudiantes de esta institución y no se comparte con otras instituciones.';
$string['noreceiver'] = 'Dirección del destinatario no especificada';
$string['pending'] = 'Este archivo está pendiente de envío a Unicheck';
$string['plagiarism'] = 'Plagio petencal';
$string['plagiarismcheckerid'] = 'ID de Unicheck: {$a->id}';
$string['plagiarism_run_error'] = 'Archivo(s) no enviado(s) para revisión de plagio';
$string['plagiarism_run_success'] = 'Archivo enviado para revisión de plagio';
$string['pluginname'] = 'Detector de plagio Unicheck';
$string['previouslysubmitted'] = 'Enviado previamente como';
$string['privacy:export:plagiarism_unicheck:plagiarismpath'] = 'Detectando el plagio';
$string['privacy:export:plagiarism_unicheck:reportcontentdescription'] = 'Los resultados de detección de similitud por Unicheck para textos en línea';
$string['privacy:export:plagiarism_unicheck:reportfiledescription'] = 'Los resultados de detección de similituds por Unicheck para el archivo subido con pathnamehash {$a}';
$string['privacy:metadata:core_files'] = 'Archivos o textos en línea adjuntados a los formatos de los módulos de actividad donde el plugin de Unicheck está habilitado.';
$string['privacy:metadata:core_plagiarism'] = 'Este plugin recibe la llamada del subsistema antiplagio de Moodle.';
$string['privacy:metadata:plagiarism_external_unicheck_api'] = 'API de Unicheck';
$string['privacy:metadata:plagiarism_external_unicheck_api:domain'] = 'Dominio de servidor de Moodle';
$string['privacy:metadata:plagiarism_external_unicheck_api:filedata'] = 'Contenido del archivo subido';
$string['privacy:metadata:plagiarism_external_unicheck_api:fileformat'] = 'Extensión del archivo subido';
$string['privacy:metadata:plagiarism_external_unicheck_api:filename'] = 'Nombre del archivo subido';
$string['privacy:metadata:plagiarism_external_unicheck_api:submissionid'] = 'ID del contexto donde se sube el archivo';
$string['privacy:metadata:plagiarism_external_unicheck_api:useremail'] = 'Correo electrónico de usuario';
$string['privacy:metadata:plagiarism_external_unicheck_api:userfirstname'] = 'Nombre del Usuario';
$string['privacy:metadata:plagiarism_external_unicheck_api:userid'] = 'ID del Usuario';
$string['privacy:metadata:plagiarism_external_unicheck_api:userlastname'] = 'Apellido(s) del Usuario';
$string['privacy:metadata:plagiarism_external_unicheck_api:userscope'] = 'Alcance de permisos de usuarios: profesor o estudiante';
$string['privacy:metadata:plagiarism_unicheck_callback'] = 'Tabla con las callbacks (llamadas de retorno) del servicio Unicheck';
$string['privacy:metadata:plagiarism_unicheck_callback:event_id'] = 'ID de evento de Unicheck';
$string['privacy:metadata:plagiarism_unicheck_callback:event_type'] = 'Tipo de evento de Unicheck';
$string['privacy:metadata:plagiarism_unicheck_callback:request_body'] = 'El contenido de recurso brinda toda la información sobre el evento donde se guarda toda la información sobre el recurso de usuario.';
$string['privacy:metadata:plagiarism_unicheck_callback:resource_id'] = 'ID de recurso de Unicheck';
$string['privacy:metadata:plagiarism_unicheck_callback:resource_type'] = 'Tipo de recurso de Unicheck: archivo o comprobación';
$string['privacy:metadata:plagiarism_unicheck_files'] = 'Almacena la información sobre los archivos con plagio.';
$string['privacy:metadata:plagiarism_unicheck_files:attempt'] = 'Número de revisiones de archivo para similitud';
$string['privacy:metadata:plagiarism_unicheck_files:check_id'] = 'ID de la comprobación de similitud por Unicheck.';
$string['privacy:metadata:plagiarism_unicheck_files:errorresponse'] = 'La información sobre los errores que ocurrieron tras la comprobación de similitud por Unicheck o a la hora de subir un archivo al servicio de Unicheck';
$string['privacy:metadata:plagiarism_unicheck_files:external_file_id'] = 'ID de archivo en el servicio de Unicheck.';
$string['privacy:metadata:plagiarism_unicheck_files:external_file_uuid'] = 'Certificado del archivo en el servicio Unicheck.';
$string['privacy:metadata:plagiarism_unicheck_files:filename'] = 'El nombre de archivo guardado.';
$string['privacy:metadata:plagiarism_unicheck_files:identifier'] = 'Pathnamehash del archivo guardado.';
$string['privacy:metadata:plagiarism_unicheck_files:metadata'] = 'Información adicional como por ejemplo el número de símbolos con plagio o el número de ficheros en el archivo que han sido omitidos';
$string['privacy:metadata:plagiarism_unicheck_files:similarityscore'] = 'El índice de similitud para el archivo subido.';
$string['privacy:metadata:plagiarism_unicheck_files:state'] = 'Estado de detección de similitud de archivo.';
$string['privacy:metadata:plagiarism_unicheck_files:timesubmitted'] = 'Fecha de cuando el archivo fue enviado.';
$string['privacy:metadata:plagiarism_unicheck_files:type'] = 'Tipo de archivo guardado: archivo o documento.';
$string['privacy:metadata:plagiarism_unicheck_files:userid'] = 'ID del estudiante.';
$string['privacy:metadata:plagiarism_unicheck_users'] = 'Almacena la información de usuarios';
$string['privacy:metadata:plagiarism_unicheck_users:external_token'] = 'Token de usuario en el servicio Unicheck';
$string['privacy:metadata:plagiarism_unicheck_users:external_user_id'] = 'ID de Usuario en el servicio Unicheck';
$string['privacy:metadata:plagiarism_unicheck_users:user_id'] = 'ID de estudiante o de profesor';
$string['processing'] = 'Este archivo fue enviado a Unicheck, ahora se está esperando a que el análisis esté disponible';
$string['progress'] = 'Unicheck está escaneando';
$string['receivernotvalid'] = 'La dirección del destinatario no es válida.';
$string['refresh'] = 'Refrescar página para ver resultados';
$string['report'] = 'Ver reporte completo';
$string['reportready'] = 'Reporte listo';
$string['resubmit'] = 'Re-enviar';
$string['savedconfigfailed'] = 'Se ha introducido una combinación de ID de Cliente/Secreto de API incorrecta. Unicheck fue desactivado, por favor, inténtelo de nuevo.';
$string['savedconfigsuccess'] = 'Configuraciones de detección de plagio guardadas';
$string['scoreavailable'] = 'Este archivo ha sido analizado por Unicheck y el informe ya está disponible.';
$string['scorenotavailableyet'] = 'Este archivo todavía no ha sido analizado por Unicheck.';
$string['sent_student_report'] = 'Notificar estudiantes vía Email';
$string['sent_student_report_help'] = 'Los estudiantes recibirán la información sobre los resultados de comprobación por correo electrónico.';
$string['show_student_report'] = 'Mostrar reportes de similitud a estudiante';
$string['show_student_report_help'] = 'Los estudiantes solamente ven reportes de similitud  para sus propios envíos y no ven reportes de otros estudiantes.';
$string['show_student_score'] = 'Mostrar puntajes de similitud a estudiante';
$string['show_student_score_help'] = 'Los estudiantes solamente ven puntajes de similitud para sus propios envíos y no ven puntajes de otros estudiantes.';
$string['showwhenclosed'] = 'Cuando cerró la Actividad';
$string['similarity'] = 'Similitud';
$string['similarity_sensitivity'] = 'Excluir fuentes con coincidencias inferiores a (%)';
$string['similarity_sensitivity_help'] = 'Las fuentes que tienen menos que el % de similitud  especificado no serán incluidas en el puntaje de similitud  total.';
$string['similarity_words_sensitivity'] = 'Excluir fuentes con coincidencias inferiores a (palabras)';
$string['similarity_words_sensitivity_help'] = 'Las fuentes que tienen menos que el número especificado de palabras (8 mínimo) no serán incluidas en el puntaje de similitud  total.';
$string['status'] = 'Estado';
$string['studentdisclosure'] = 'Familiarizar a los estudiantes con el Servicio de Plagio Unicheck';
$string['studentdisclosuredefault'] = 'Todos los archivos subidos serán enviados al sistema de detección de plagio de Unicheck.';
$string['studentdisclosure_help'] = 'Los alumnos verán este mensaje a la hora de cargar un archivo en una tarea en la que Unicheck esté activado.';
$string['studentemailcontent'] = 'El archivo enviado a {$a->modulename} en {$a->coursename} ya ha sido procesado por el sistema de detección de plagio de Unicheck {$a->modulelink}';
$string['studentemailsubject'] = 'Archivo procesado por Unicheck';
$string['submitondraft'] = 'Enviar el archivo cuando se cargue por primera vez';
$string['submitonfinal'] = 'Enviar el archivo cuando el estudiante lo envía para su calificación';
$string['sync_failed'] = 'Intentar sincronizar los archivos no procesados';
$string['toolarge'] = 'Este archivo es demasiado grande para ser analizado por Unicheck';
$string['ufiles'] = 'Archivos Enviados';
$string['ui:cheatingtitle'] = 'Atención';
$string['ui:cheatingtooltip'] = 'Se detectaron modificaciones al texto. Vea la pestaña de Modificado en el reporte de similitud.';
$string['ui:reportlink'] = '<span class="unicheck-only-xxl-width">Abrir&nbsp;</span>Reporte';
$string['unicheck'] = 'Detector de plagio Unicheck';
$string['unicheck:changeaddsubmissiontolibrarysetting'] = 'Permitir activar/desactivar la adición de envíos a la Biblioteca Institucional';
$string['unicheck:changecheckalreadysubmittedassignmentsetting'] = 'Permitir activar/desactivar la verificación de los envíos de tareas ya completadas';
$string['unicheck:changeenableunichecksetting'] = 'Permitir activar/desactivar el Servicio de detección de plagio Unicheck en actividades';
$string['unicheck:changeexcludecitationssetting'] = 'Permitir activar/desactivar la exclusión de referencias y citas';
$string['unicheck:changeexcludeselfplagiarismsetting'] = 'Permitir activar/desactivar excluir el autoplagio en el curso';
$string['unicheck:changemaxsupportedarchivefilescountsetting'] = 'Permitir cambiar el número máximo de archivos a revisar en un archivo comprimido';
$string['unicheck:changesensitivitypercentagesetting'] = 'Permitir cambiar la exclusión de fuentes con coincidencia inferior a (%)';
$string['unicheck:changesentstudentreportsetting'] = 'Permitir activar/desactivar el envío del informe de estudiantes por correo electrónico';
$string['unicheck:changeshowstudentreportsetting'] = 'Permitir habilitar/deshabilitar el mostrar reportes de similitud  l estudiante';
$string['unicheck:changeshowstudentscoresetting'] = 'Permitir habilitar/deshabilitar el mostrar puntajes de similitud  l estudiante';
$string['unicheck:changesourcesforcomparisonsetting'] = 'Permitir cambiar fuentes para la comparación';
$string['unicheck:changewordsensitivitysetting'] = 'Permitir cambiar la exclusión de fuentes con coincidencia inferior a (palabras)';
$string['unicheck:checkfile'] = 'Permitir revisar archivo para similitud';
$string['unicheckdebug'] = 'Depuración (debugging)';
$string['unicheckdefaults'] = 'Ajustes predeterminados de Unicheck';
$string['unicheck_enable'] = 'Activar el plugin de Unicheck';
$string['unicheck:enable'] = 'Permitir activar/desactivar Unicheck dentro de una actividad';
$string['unicheck_lang'] = 'Idioma';
$string['unicheck_lang_help'] = 'Código del idioma proporcionado por Unicheck';
$string['unicheck:resetfile'] = 'Permitir el reenvío del archivo a Unicheck después de producirse un error';
$string['unicheck_settings_url_text'] = 'Abrir la cuenta del administrador en unicheck.com para ver/copiar ID del Cliente/Secreto de API';
$string['unicheck:vieweditreport'] = 'Permitir ver y editar el informe completo de Unicheck';
$string['unicheck:viewreport'] = 'Permitir ver el informe completo de Unicheck';
$string['unicheck:viewsimilarity'] = 'Permitir ver valor de similitud  de Unicheck';
$string['unknownwarning'] = 'Se ha producido un error al intentar enviar este archivo a Unicheck';
$string['unsupportedfiletype'] = 'Este tipo de archivo no está soportado por Unicheck';
$string['upload_error'] = 'Error al subir el archivo';
$string['uploading'] = 'Cargando';
$string['use_assign_desc_param'] = 'Para desbloquear las configuraciones de Unicheck';
$string['use_assign_desc_value'] = 'Establecer configuración de envío → Requerir que los estudiantes hagan clic en el botón Enviar = Sí';
$string['use_unicheck'] = 'Activar el Servicio de Plagio de Unicheck';
$string['use_unicheck_help'] = 'Los nuevos envíos se revisarán en busca de similitudes automáticamente justo después del envío.';
$string['validation:min_numeric_value'] = 'El número no puede ser menos de {$a}';
$string['waitingevents'] = 'Hay {$a->countallevents} eventos esperando al cron y {$a->countheld} eventos retenidos para reenviarlos';
$string['web'] = 'Internet';
$string['web_and_my_lib_and_external_db'] = 'Internet + Biblioteca + Base de datos externa';
$string['web_and_my_library'] = 'Internet + Biblioteca';
