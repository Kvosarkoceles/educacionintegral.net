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
 * Strings for component 'plagiarism_compilatio', language 'es_mx', branch 'MOODLE_38_STABLE'
 *
 * @package   plagiarism_compilatio
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['account_expire_soon_content'] = 'Usted puede usar Compilatio hasta el fin del mes. Si su suscripción no es renovada, Usted no podrá usar los servicios de Compilatio después de esta fecha.';
$string['account_expire_soon_title'] = 'Su cuenta de Compilatio.net caduca pronto';
$string['activate_compilatio'] = 'Habilitar Compilatio';
$string['admin_disabled_reports'] = 'El administrador no les permite a los profesores que muestren los reportes de similitud a los estudiantes.';
$string['admin_goto_helpcenter'] = 'cceder al Compilatio Support Centre para ver artículos relacionados con la administración del plugin para Moodle.';
$string['allow_teachers_to_show_reports'] = 'Permitirle a profesores mostrar reportes de similitud a sus estudiantes';
$string['analysing'] = 'Analizando documento';
$string['analysis_completed'] = 'Análisis completado: {$a} % de similitudes.';
$string['analysis_date'] = 'Fecha del Análisis (Análisis a_una_hora_fija solamente)';
$string['analysis_started'] = '{$a} análisis han sido solicitados.';
$string['analysis_type'] = 'Análisis inicia';
$string['analysistype_direct'] = 'Directo';
$string['analysis_type_help'] = '<p>Hay 3 opciones posibles:</p>
<ul>
<li><strong>Directo: </strong>El documento es enviado a Compilatio y analizado de inmediato.</li>
<li><strong>Manual:</strong> El documento es enviado a Compilatio  pero el profesor debe disparar manualmente el análisis de documentos.</li>
<li><strong>A_una_hora_fija: </strong>El documento es enviado a Compilatio y analizado en la fecha/hora configurada.</li>
</ul>
<p>Para habilitar que todos los documentos sean comparados entre ellos, espere hasta que todos los trabajos hayan sido enviados por los estudiantes y entonces dispare el análisis.</p>';
$string['analysistype_manual'] = 'Manual';
$string['analysistype_prog'] = 'A_una_hora_fija';
$string['analyze'] = 'Analizar';
$string['analyzing'] = 'Analizando';
$string['api_key_not_tested'] = 'Su clave API no ha sido verificada porque ha fallado la conexión a Compilatio.net.';
$string['api_key_not_valid'] = 'Su clave API no es válida. Es específica para la plataforma usada. Usted puede obtener una al contactar a <a href=\'mailto:ent@compilatio.net\'>ent@compilatio.net</a>.';
$string['api_key_valid'] = 'Su clave API es válida';
$string['assign_statistics'] = 'Estadísticas sobre Tareas';
$string['auto_diagnosis_title'] = 'Auto-diagnóstico';
$string['average'] = 'Tasa promedio';
$string['average_similarities'] = 'En esta tarea, la tasa de similitud promedio es {$a}%.';
$string['compilatio'] = 'Plugin de plagio compilatio';
$string['compilatioapi'] = 'Dirección del ApI de Compilatio';
$string['compilatioapi_help'] = 'Esta es la dirección del API de Compilatio';
$string['compilatiodefaults'] = 'Valores por defecto de Compilatio';
$string['compilatio_display_student_report'] = 'Mostrar reporte de similitud al estudiante';
$string['compilatio_display_student_report_help'] = 'El reporte de similitud da un desglose de cuales partes del envío fueron plagiadas y la ubicación de las fuentes detectadas.';
$string['compilatio_display_student_score'] = 'Mostrar puntaje de similitud al estudiante';
$string['compilatio_display_student_score_help'] = 'El puntaje de similitud es el porcentaje del envío que ha sido concordado con otro contenido';
$string['compilatio_draft_submit'] = 'Cuando deber´ía de enviarse el archivo a Compilatio';
$string['compilatio:enable'] = 'Permitirle al profesor habilitar/deshabilitar Compilatio dentro de una actividad';
$string['compilatio_enable_mod_assign'] = 'Habilitar Compilatio para Tareas';
$string['compilatio_enable_mod_forum'] = 'Habilitar Compilatio para Foros';
$string['compilatio_enable_mod_workshop'] = 'Habilitar Compilatio para Talleres';
$string['compilatioenableplugin'] = 'Habilitar Compilatio para {$a}';
$string['compilatioexplain'] = 'Para más información sobre este plugin, vea: <a href="http://www.compilatio.net/en/" target="_blank">compilatio.net</a>';
$string['compilatio_help_assign'] = 'Mostrar ayuda acerca del plugin Compilatio';
$string['compilatiopassword'] = 'Clave API';
$string['compilatiopassword_help'] = 'Código personal proporcionado por Compilatio para acceder al API';
$string['compilatio:resetfile'] = 'Permitirle al profesor re-enviar el archivo a Compilatio después de un error';
$string['compilatio_studentemail'] = 'Mandar E-mail al estudiante';
$string['compilatio_studentemail_help'] = 'Esto le mandará un correo electónico al estudiante cuando un archivo haya sido procesado, para que sepa que está disponible un reporte.';
$string['compilatio:triggeranalysis'] = 'Permitirle al profesor disparar manualmente análisis.';
$string['compilatio:viewreport'] = 'Permitirle al profesor ver el reporte completo de Compilatio';
$string['context'] = 'Contexto';
$string['cron_check'] = 'CRON ha sido ejecutado por última vez hace {$a} .';
$string['cron_check_never_called'] = 'CRON nunca ha sido ejecutado sede la activación del plugin. Podría estar mal configurado en su servidor.';
$string['cron_check_not_ok'] = 'No ha sido ejecutado en la última hora.';
$string['cron_frequency'] = 'Al parecer corre cada {$a} minutos.';
$string['cron_recommandation'] = 'Recomendamos usar una demora menor de 15 minutos entre cada ejecución del cron';
$string['defaults_desc'] = 'Las configuraciones siguientes son los ajustes por defecto al habilitar Compilatio dentro de un Módulo de Actividad';
$string['defaultupdated'] = 'Valores por defecto actualizados';
$string['disclaimer_data'] = 'Al habilitar Compilatio, Usted acepta el hecho de que los datos acerca de su configuración de Moodle serán colectados para mejorar el soporte y mantenimiento de este servicio.';
$string['display_notifications'] = 'Mostrar notificaciones';
$string['display_stats'] = 'Mostrar estadísticas acerca de esta tarea';
$string['documents_analyzed'] = '{$a->countAnalyzed} documento(s) de un total de {$a->documentsCount} han sido enviados y analizados.';
$string['documents_analyzed_between_thresholds'] = '{$a->documentsBetweenThresholds} documento(s) entre {$a->greenThreshold}% y {$a->redThreshold}%.';
$string['documents_analyzed_higher_red'] = '{$a->documentsAboveRedThreshold} documento(s) mayores de {$a->redThreshold}%.';
$string['documents_analyzed_lower_green'] = '{$a->documentsUnderGreenThreshold} documento(s) menores de {$a->greenThreshold}%.';
$string['documents_analyzing'] = '{$a} documento(s) está(n) siendo analizado(s).';
$string['documents_in_queue'] = '{$a} documento(s) está(n) en la cola para ser analizado(s).';
$string['documents_number'] = 'Documentos analizados';
$string['enabledandworking'] = 'El plugin de Compilatio está habilitado y funcionando.';
$string['enable_javascript'] = 'Por favor, habilite Javacript para poder tener una mejor experiencia con el plugin Compilatio.<br/>
Aquí están las  <a href=\'http://www.enable-javascript.com/\' target=\'_blank\'>
instrucciones acerca de como habilitar JavaScript en su navegador web</a>.';
$string['error'] = 'Error';
$string['errors'] = 'Errores :';
$string['export_csv'] = 'Exportar datos acerca de esta tarea en un archivo CSV';
$string['export_global_csv'] = 'Hacer clic aquí para exportar estos datos en formato CSV';
$string['export_raw_csv'] = 'Hacer clic aquí para exportar datos crudos en formato CSV';
$string['failedanalysis'] = 'Compilatio no pudo analizar su documento:';
$string['filename'] = 'Nombredearchivo';
$string['filereset'] = 'Un archivo ha sido reiniciado para re-envío a Compilatio';
$string['firstname'] = 'Nombre(s)';
$string['get_scores'] = 'Obtener puntajes de plagio desde Compilatio.net';
$string['global_statistics'] = 'Estadísticas Globales';
$string['goto_helpcenter'] = 'Hacer clic en el signo de interrogación para abrir una ventana y conectarse con el Compilatio Support Centre.';
$string['green_threshold'] = 'Verde hasta';
$string['help_compilatio_format_content'] = 'Compilatio.net maneja la mayoría de los formatos usados en procesadores de texto y en Internet.
Los formatos siguientes están soportados :';
$string['help_compilatio_settings_content'] = 'Están disponibles tres tipos de análisis con el plugin Compilatio :
<ul>
<li>
Directo : <br/>
Cada documento es enviado a Compilatio y analizado tan pronto como es subido por el estudiante.<br/>
Recomendado si Usted desea obtener los resultados rápidamente y no es necesario que todos los documentos sean comparados entre ellos.
</li>
<li>
A_una_hora_fija : <br/>
Elija la fecha para iniciar el análisis Compilatio, posterior a la fecha prometida de entrega de los estudiantes.<br/>
Recomendado si Usted desea comparar todos los documentos de la actividad mutuamente.
</li>
<li>
Manual : <br/>
El documento de la actividad no será analizado hasta que Usted dispare el análisis.<br/>
Usted puede hacer clic en el botón para “Iniciar análisis” de cada documento para disparar el análisis.
</li>
</ul>';
$string['help_compilatio_settings_title'] = '¿Cual modo debería usar en las configuraciones de Compilatio de una actividad?';
$string['hide_area'] = 'Ocultar Informaciones de Compilatio';
$string['immediately'] = 'Inmediatamente';
$string['indexed_document'] = 'Documento añadido a la base de datos de documentos de su institución. Sus contenidos pueden ser usados para detectar similitudes con otros documentos.';
$string['indexing_state'] = 'Añadir documentos a la Base de Datos de Documentos';
$string['indexing_state_help'] = 'Si: Añadir documentos en la base de datos de documentos. Estos documentos serán usados como material de comparación para análisis futuros.
No: Los documentos no son añadidos en la base de datos de documentos y no serán usados para comparaciones.';
$string['information_settings'] = 'Informaciones';
$string['lastname'] = 'Apellido(s)';
$string['loading'] = 'Cargando, por favor espere...';
$string['manual_analysis'] = 'El análisis de este documento debe ser disparado manualmente.';
$string['manual_send_confirmation'] = '{$a} archivo(s) ha(n) sido enviado(s) a Compilatio.';
$string['max_attempts_reach_files'] = 'El análisis ha sido interrumpido para los archivos siguientes. Los análisis fueron enviados demasiadas veces, Usted ya no puede reiniciarlos más :';
$string['max_file_size_allowed'] = 'Tamaño máximo de documento : <strong>{$a->Mo} MB</strong>';
$string['maximum'] = 'Tasa máxima';
$string['minimum'] = 'Tasa mínima';
$string['news_analysis_perturbated'] = 'Compilatio.net - Análisis perturbado';
$string['news_incident'] = 'Incidente en Compilatio.net';
$string['news_maintenance'] = 'Mantenimiento en Compilatio.net';
$string['news_update'] = 'Actualización en Compilatio.net';
$string['no_document_available_for_analysis'] = 'No había documentos disponibles para análisis';
$string['no_documents_available'] = 'No hay documentos disponibles para análisis en esta Tarea.';
$string['no_statistics_yet'] = 'Aun no se ha analizado ningún documento.';
$string['not_analyzed'] = 'Los documentos siguientes no pueden ser analizados :';
$string['not_analyzed_unextractable'] = '{$a} documento(s) no han sido analizados porque no contenían suficiente texto.';
$string['not_analyzed_unsupported'] = '{$a} documento(s) no han sido analizados porque sus formatos no están soportados.';
$string['not_indexed_document'] = 'Documento no añadido a la base de datos de documentos de su institución. Sus contenidos no serán usados para detectar similitudes con otros documentos.';
$string['numeric_threshold'] = 'El umbral debe ser un número.';
$string['orange_threshold'] = 'Naranja hasta';
$string['owner_file'] = 'GDPR y propiedad del documento';
$string['owner_file_school'] = 'La escuela es propietaria del documento';
$string['owner_file_student'] = 'El estudiante es el único propietario del documento';
$string['pending'] = 'Este eachivo está pendiente de enviar a Compilatio';
$string['pending_status'] = 'Pendiente';
$string['planned'] = 'Planeado';
$string['plugin_disabled'] = 'Este plugin no está habilitado en la plataforma Moodle';
$string['plugin_disabled_assign'] = 'El plugin no está habilitado para Tareas.';
$string['plugin_disabled_forum'] = 'El plugin no está habilitado para Foros.';
$string['plugin_disabled_workshop'] = 'El plugin no está habilitado para Talleres.';
$string['plugin_enabled'] = 'Este plugin está habilitado en la plataforma Moodle';
$string['plugin_enabled_assign'] = 'El plugin está habilitado para Tareas.';
$string['plugin_enabled_forum'] = 'El plugin está habilitado para Foros.';
$string['plugin_enabled_workshop'] = 'El plugin está habilitado para Talleres.';
$string['pluginname'] = 'Plugin de detección de plagio Compilatio';
$string['previouslysubmitted'] = 'Previamente enviado como';
$string['privacy:metadata:core_plagiarism'] = 'Este plugin es llamado por el subsistema de plagio de Moodle';
$string['privacy:metadata:external_compilatio_document:filename'] = 'El nombre del envío';
$string['privacy:metadata:external_compilatio_report:id'] = 'La ID del reporte de Compilatio';
$string['privacy:metadata:external_compilatio_report:plagiarism_percent'] = 'El puntaje de similitud del envío';
$string['privacy:metadata:plagiarism_compilatio_files:similarityscore'] = 'El puntaje de similitud del envío';
$string['privacy:metadata:plagiarism_compilatio_files:userid'] = 'La ID del usuario Moodle que hizo el envío';
$string['processing_doc'] = 'Compilatio está analizando este archivo.';
$string['programmed_analysis_future'] = 'Los documentos serán analizados por Compilatio en {$a}.';
$string['programmed_analysis_past'] = 'Documentos han sido enviados para análisis a Compilatio en {$a}.';
$string['progress'] = 'Progreso :';
$string['queue'] = 'Cola';
$string['queued'] = 'Este documento ahora está en cola y va a ser analizado pronto por Compilatio';
$string['red_threshold'] = 'rojo en caso contrario';
$string['report'] = 'reporte';
$string['reset'] = 'Reiniciar';
$string['restart_failed_analysis'] = 'Reiniciar análisis interumpido';
$string['restart_failed_analysis_title'] = 'Reiniciar análisis interumpido :';
$string['results'] = 'Resultados :';
$string['saved_config_failed'] = '<strong>La combinación clave API - dirección ingresada es inválida. Compilatio está deshabilitado; por favor inténtelo nuevamente.<br/>
La página de <a href="autodiagnosis.php">auto-diagnóstico</a> puede ayudarle para configurar este plugin.</strong><br/>
Error :';
$string['savedconfigsuccess'] = 'Configuraciones de Plagio Guardadas';
$string['send_files'] = 'Subir archivos a Compilatio.net para detección de plagio';
$string['showwhenclosed'] = 'Cuando se cierre la Actividad';
$string['similarities'] = 'Similitudes';
$string['similarities_disclaimer'] = 'Usted puede analizar similitudes en los documentos de esta tarea con <a href=\'http://www.compilatio.net/en/\' target=\'_blank\'>Compilatio</a>.<br/> Sea cuidadoso: las similitudes medidas durante el análisis no necesariamente significan que hubo plagio. El reporte del análisis le ayuda a identificar si las similitudes coinciden con citaciones apropiadas o con plagio.';
$string['similarity_percent'] = '% of similitudes';
$string['startallcompilatioanalysis'] = 'Analizar todos los documentos';
$string['startanalysis'] = 'Iniciar análisis';
$string['start_analysis_title'] = 'Análisis inicia';
$string['statistics_title'] = 'Estadísticas';
$string['studentdisclosuredefault'] = 'Todos los archivos subidos aquí serán enviados al servicio para detección de plagio Compilatio';
$string['studentemailcontent'] = 'El archivo que Usted envió a {$a->modulename} en {$a->coursename} ha sido ya procesado por la herramienta para detección de plagio Compilatio. {$a->modulelink}';
$string['studentemailsubject'] = 'Archivo procesado por Compilatio';
$string['students_disclosure'] = 'Declaratoria del estudiante';
$string['students_disclosure_help'] = 'Este texto será mostrado a todos los estudiantes en la página de subida de archivo.';
$string['submitondraft'] = 'Enviar archivo la primera vez que se suba';
$string['submitonfinal'] = 'Enviar archivo cuando el estudiante loenvíe para ser calificado';
$string['subscription_state'] = '<strong>Su suscripción a  Compilatio.net expirará al final de {$a->end_date}. Este mes, Usted ha analizado el equivalente de {$a->used} documento(s) conteniendo menos de 5,000 palabras.</strong>';
$string['tabs_title_help'] = 'Ayuda';
$string['tabs_title_notifications'] = 'Notificaciones';
$string['tabs_title_stats'] = 'Estadísticas';
$string['teacher'] = 'Profesor';
$string['thresholds_description'] = 'Indique el umbral que desea usar, para facilitar el trabajo del reporte de análisis ($ de similitud)';
$string['thresholds_settings'] = 'Límites :';
$string['timesubmitted'] = 'Enviado a Compilatio en';
$string['toolarge'] = 'Este archivo es demasiado grande para que lo procese Compilatio. Tamaño máximo : {$a->Mo} MB';
$string['trigger_timed_analyses'] = 'Disparar análisis de plagio agendado';
$string['unextractable'] = 'El contenido de este documento no pudo ser extraido';
$string['unextractablefile'] = 'Su documento no contiene suficientes palabras, o no puede extraérsele el texto.';
$string['unextractable_files'] = 'Los archivos siguientes no pudieron ser analizados por Compilatio. Ya sea porque no tienen suficientes palabras o el texto no  pudo extraerse :';
$string['unknownlang'] = 'Precaución: el idioma de algunos pasajes en este documento no fue reconocido.';
$string['unknownwarning'] = 'Ocurrió un error al tratar de enviar este archivo a Compilatio';
$string['unsent_documents'] = 'Documento(s) no enviado(s)';
$string['unsent_documents_content'] = 'Esta tarea contiene documento(s) no enviado(s) a Compilatio.';
$string['unsupported'] = 'Documento no soportado';
$string['unsupported_files'] = 'Los archivos siguientes no pudieron ser analizados por Compilatio porque su formato no está soportado :';
$string['unsupportedfiletype'] = 'Este tipo de archivo no es soportado por Compilatio';
$string['updatecompilatioresults'] = 'Refrescar las informaciones';
$string['updated_analysis'] = 'Los resultados del análisis Compilatio han sido actualizados.';
$string['update_in_progress'] = 'Actualizando información';
$string['update_meta'] = 'Realizar operaciones agendadas Compilatio.net';
$string['use_compilatio'] = 'Permitir detección de similitud con Compilatio';
$string['waitingforanalysis'] = 'Este archivo será procesado en {$a}';
$string['webservice_not_ok'] = 'El servidor no pudo conectarse al servidor web. Su firewall podría estar bloqueando la conexión.';
$string['webservice_ok'] = 'El servidor se puede conectar con el servidor web.';
$string['webservice_unreachable_content'] = 'Actualmente no está disponible Compilatio.net. Nos disculpamos por el inconveniente.';
$string['webservice_unreachable_title'] = 'Compilatio.net no está disponible.';
