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
 * Strings for component 'tool_trigger', language 'es_mx', branch 'MOODLE_35_STABLE'
 *
 * @package   tool_trigger
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'Acción';
$string['active'] = 'Activo';
$string['addworkflow'] = 'Añadir nuevo flujograma de disparo';
$string['areatomonitor'] = 'Área a monitorear';
$string['areatomonitor_help'] = 'El área de Moodle que contiene el evento por el cual disparar el flujograma.';
$string['availablefields'] = 'Campos disponibles';
$string['badstepclass'] = 'Nombre de clase de paso incorrecto';
$string['badsteptype'] = 'Tipo de paso incorrecto';
$string['cleanupsettings'] = 'Configuraciones de limpieza';
$string['cleanupsettingsdesc'] = 'Las configuraciones siguientes controlan los trabajos de limpieza para este plugin.';
$string['cli_extractfields'] = 'Extrayendo campos para eventos de aprendizaje de la base de datos.';
$string['cli_filefail'] = 'No se pudo escribir archivo: {$a}';
$string['cli_filesummary'] = 'Archivo escrito a: {$a}';
$string['cli_writingfile'] = 'Escribiendo {$a} definiciones de campo de evento a archivo ...';
$string['core'] = 'Núcleo';
$string['deleterule'] = 'Eliminar regla';
$string['deletestep'] = 'Eliminar paso';
$string['description'] = 'Descripción';
$string['downloadrule'] = 'Regla de descarga';
$string['draft'] = 'Borrador';
$string['draftmode'] = 'Modo borrador';
$string['draftmode_help'] = 'Usar modo borrador para probar flujograma con disparadores.';
$string['duplicatedworkflowname'] = '{$a} (copia)';
$string['duplicaterule'] = 'Duplicar regla';
$string['editrule'] = 'Editar regla';
$string['editsettings'] = 'Configuraciones de flujograma';
$string['editstep'] = 'Editar paso';
$string['editworkflow'] = 'Editar flujograma disparador';
$string['emailactionstepdesc'] = 'Un paso para permitir que se envíe un Email';
$string['emailactionstepname'] = 'Email';
$string['emailcontent'] = 'Contenido';
$string['emailcontent_help'] = 'El contenido a usar en el Email';
$string['emailsubject'] = 'Asunto';
$string['emailsubject_help'] = 'El texto a usar en el asunto del Email';
$string['emailto'] = 'Para';
$string['emailto_help'] = 'A quien se envía el Email';
$string['erroreditstep'] = 'Algo salió mal al intentar guardar el paso del flujograma. Por favor inténtelo nuevamente.';
$string['errorimportworkflow'] = 'Algo salió mal al importar el flujograma. Por favor inténtelo nuevamente.';
$string['errorsavingworkflow'] = 'Algo salió mal al intentar guardar el flujograma. Por favor inténtelo nuevamente.';
$string['event'] = 'Evento';
$string['eventfields'] = 'Campos de evento';
$string['eventtomonitor'] = 'Evento a monitorear';
$string['eventtomonitor_help'] = 'El evento Moodle para el cual monitorea el flujograma.';
$string['filter'] = 'Filtro';
$string['httpostactionheaders'] = 'Encabezados';
$string['httpostactionheaders_help'] = 'Los encabezados de solicitud (request headers) a enviar.';
$string['httpostactionparams'] = 'Parámetros';
$string['httpostactionparams_help'] = 'Los parámetros a enviar con la solicitud';
$string['httpostactionurl'] = 'URL';
$string['httpostactionurl_help'] = 'La URL a la cual publicar los datos.';
$string['httppostactionstepdesc'] = 'Un paso para permitirle a flujogramas Moodle que envien datos a HTTP/S endpoint.';
$string['httppostactionstepname'] = 'HTTP Post';
$string['importmodaltitle'] = 'Importar flujograma desde archivo';
$string['importworkflow'] = 'Importar un flujogramna';
$string['invalidjson'] = 'El archivo de importación del  flujograma contiene JSON inválido y no pudo ser importado';
$string['invalidversion'] = 'El archivo de importación del flujograma no es válido con esta versión del plugin';
$string['jsonencode'] = 'Parámetros de codificación JSON';
$string['jsonencode_help'] = 'Si se habilita, los valores en el campo de Parámetro serán codificados con JSON.';
$string['lasttriggered'] = 'Último disparado';
$string['learning'] = 'Habilitar modo de aprendizaje';
$string['learning_help'] = 'El modo de aprendizaje colectará datos acerca de campos disponibles para eventos disparados';
$string['learningsettings'] = 'Configuraciones del modo de aprendizaje';
$string['lookup'] = 'Búsqueda';
$string['manage'] = 'Gestionar';
$string['manageworkflow'] = 'Gestionar flujograma';
$string['messageprovider:tool_trigger'] = 'Notificaciones de disparador de evento';
$string['modaltitle'] = 'Añadir paso de flujograma.';
$string['movestepdown'] = 'Mover paso hacia fin';
$string['movestepup'] = 'Mover paso hacia principio';
$string['name'] = 'Nombre';
$string['noavailablefields'] = 'Sin campos disponibles; considere activar modo de aprendizaje.';
$string['noworkflowfile'] = 'No se encontró archivo de flujograma';
$string['numsteps'] = 'Pasos';
$string['outputprefix'] = 'Prefijo para campos añadidos';
$string['pluginname'] = 'Disparador de evento';
$string['pluginname_help'] = 'Disparado de evento para Moodle';
$string['pluginsettings'] = 'Configuraciones del Plugin';
$string['privacy:metadata:events'] = 'Datos de eventos Moodle monitoreados';
$string['privacy:metadata:events:anonymous'] = 'Si es que el evento fue o no señalizado como anónimo';
$string['privacy:metadata:events:eventname'] = 'El nombre del evento';
$string['privacy:metadata:events:ip'] = 'La dirección IP usada al momento del evento';
$string['privacy:metadata:events:origin'] = 'El origen del evento';
$string['privacy:metadata:events:other'] = 'Información adicional acerca del evento';
$string['privacy:metadata:events:realuserid'] = 'La ID del usuario real detrás del evento, cuando se enmascara a un usuario.';
$string['privacy:metadata:events:relateduserid'] = 'La ID del usuario relacionado con este evento';
$string['privacy:metadata:events:timecreated'] = 'El momento cuando ocurrió el evento';
$string['privacy:metadata:events:userid'] = 'La ID del usuario que disparó este evento';
$string['step_action_email:privacy:desc'] = 'Este plugin puede se configurado para enviar email que contienen datos desde Moodle.';
$string['step_action_httppost:privacy:desc'] = 'Este plugin puede ser configurado para enviar solicitudes  HTTP a bases de datos externas, que contienen datos de Moodle.';
$string['step_action_logdump_desc'] = 'Este paso imprime el evento y datos de pasos del flujograma a la bitácora de cron (Principalmente útil para pruebas).';
$string['step_action_logdump_name'] = 'Bitácora de cron';
$string['stepclass'] = 'Paso';
$string['stepclass_help'] = 'Elegir el paso a aplicar.';
$string['stepdescription'] = 'Descripción del paso';
$string['stepdescription_help'] = 'Una descripción significativa para este paso.';
$string['step_filter_fail_desc'] = 'Un paso que siempre falla (Principalmente útil para pruebas).';
$string['step_filter_fail_name'] = 'Falla';
$string['step_lookup_course_courseidfield'] = 'Campo de datos ID del curso';
$string['step_lookup_course_desc'] = 'El paso busca datos acerca de un curso.';
$string['step_lookup_course_name'] = 'Búsqueda del curso';
$string['step_lookup_course:privacy:coursedata_desc'] = 'Datos acerca de cursos, incluyendo ID, nombre del curso, fechas de inicio y término, etc.';
$string['step_lookup_user_desc'] = 'Este paso busca datos acerca de un usuario.';
$string['step_lookup_user_name'] = 'Búsqueda del usuario';
$string['step_lookup_user_nodeleted'] = '¿Salir si el usuario ha sido eliminado?';
$string['step_lookup_user:privacy:userdata_desc'] = 'Datos personales acerca de usuarios, como nombres_de_usuarios, nombres, direcciones Email, etc.';
$string['step_lookup_user_useridfield'] = 'Campo de datos Id del usuario';
$string['stepmodalbutton'] = 'Añadir paso del flujograma';
$string['stepname'] = 'Nombre del paso';
$string['stepname_help'] = 'El nombre de este paso.';
$string['steprequired'] = 'El flujograma debe tener al menos un paso.';
$string['steptype'] = 'Tipo de paso';
$string['steptype_help'] = 'El tipo de paso a aplicar.';
$string['taskcleanup'] = 'Eliminar eventos procesados antiguos';
$string['tasklearn'] = 'Aprender acerca de los campos en eventos almacenados.';
$string['tasklearnstart'] = 'Iniciando el procesamiento de extracción de campo del evento ...';
$string['taskprocessworkflows'] = 'Trabajo agendado de procesar flujogramas.';
$string['timetocleanup'] = 'Hora de limpiar eventos antiguos';
$string['timetocleanup_help'] = 'Esta configuración configura el tiempo que los flujogramas ejecutados exitosamente permanecen en la base de datos de Moodle antes de ser eliminados.';
$string['trigger:manageworkflows'] = 'Crear y configurar flujogramas  disparados-por-evento automáticos';
$string['workflowactive'] = 'Flujograma activo';
$string['workflowactive_help'] = 'Solamente serán procesados flujogramas activos cuando un evento sea disparado.';
$string['workflowcopysuccess'] = 'Flujograma duplicado exitosamente';
$string['workflowdeleteareyousure'] = '¿Está seguro de querer eliminar el flujograma "{$a}"?';
$string['workflowdeletesuccess'] = 'Flujograma eliminado exitosamente';
$string['workflowdescription'] = 'Descripción';
$string['workflowdescription_help'] = 'Una descripción breve de este propósito del flujograma.';
$string['workflowfile'] = 'Archivo de flujograma';
$string['workflowimported'] = 'Flujograma importado exitosamente';
$string['workflowname'] = 'Nombre';
$string['workflowname_help'] = 'El nombre legible por humanos para este flujograma.';
$string['workflowoverview'] = 'Vista general del flujograma';
