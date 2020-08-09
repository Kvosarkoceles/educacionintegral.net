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
 * Strings for component 'block_course_checker', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   block_course_checker
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activedates_noactivedates'] = 'No debería haber fechas habilitadas en la sección de "finalización de actividad".';
$string['activedates_noactivedatesinactivity'] = 'No debería haber fechas habilitadas en la actividad {$a->modtype}, busque los campos siguientes: {$a->adateissetin}';
$string['activedates_setting_coursesregex'] = 'Filtro regex para nombre completo del curso';
$string['activedates_setting_coursesregex_help'] = 'Definir el regexp para permitir este revisor solamente donde coincida con los nombres completos de los cursos.';
$string['activedates_setting_modules'] = 'Módulos habilitados';
$string['activedates_success'] = 'La actividad {$a} está correctamente configurada';
$string['admin_domain_list_notvalid'] = 'La lista no es una lista válida de dominios';
$string['admin_domain_name_default_missing'] = 'Nombrededominio faltante: {$a}';
$string['admin_domain_name_notvalid'] = 'Nombrededominio no válido: {$a}.Por favor añada solamente un nombre de dominio por línea';
$string['admin_restrictedint_max'] = 'Valor máximo es {$a}';
$string['admin_restrictedint_min'] = 'Valor mínimo es {$a}';
$string['attendance_missingattendanceactivity'] = 'Revisar Asistencia Falló - sin actividad de asistencia en este curso';
$string['attendance_missingplugin'] = 'Saltar este casodeprueba porque mod_attendance no está instalado';
$string['attendance_onlyoneattendenceactivityallowed'] = 'Revisar Asistencia Falló - solamente una actividad de asistencia está permitida';
$string['attendance_sessionsnotemty'] = 'Revisar Asistencia Falló - no está permitido tener ninguna sesión de asistencia';
$string['attendance_success'] = 'La actividad de asistencia está correctamente configurada';
$string['automaticcheck'] = 'Última revisión automática';
$string['automaticcheckempty'] = 'Las revisiones nunca han sido invocadas para este curso';
$string['backtocourse'] = 'Regresar al curso';
$string['blocks_activity'] = 'Bloque "{$a->name}"';
$string['blocks_comparison'] = '(Curso de referencia: "{$a->valuereference}" | Curso actual: "{$a->valuecurrent}")';
$string['blocks_error'] = 'El bloque está presente por error o está ausente en el curso actual.';
$string['blocks_setting'] = 'Bloques habilitados';
$string['blocks_setting_help'] = 'Definir los bloques permitidos (debe estar habilitado en <a href="/admin/blocks.php" target="_blank">Gestionar bloques</a>) para poder ser activado.';
$string['blocks_success'] = 'El bloque está insertado correctamente en el curso actual';
$string['checker_activedates'] = 'Revisión de fechas activas';
$string['checker_activedates_display'] = 'Fechas activas en configuraciones de actividad';
$string['checker_attendance'] = 'Revisión de Asistencia a Sesiones';
$string['checker_attendance_display'] = 'Asistencia a Sesiones';
$string['checker_blocks'] = 'Revisión de bloques';
$string['checker_blocks_display'] = 'Existen bloques';
$string['checker_col_block_header'] = 'Revisar';
$string['checker_data'] = 'Revisión de actividad de datos';
$string['checker_data_display'] = 'Actividad de datos con campos';
$string['checker_groups'] = 'Revisión de Envíos Grupales';
$string['checker_groups_display'] = 'Envíos Grupales para Tareas';
$string['checker_last_run'] = 'Última ejecución {$a}';
$string['checker_last_run_global'] = 'Fecha desconocida para este revisor. La revisión de curso global fue en {$a}';
$string['checker_links'] = 'Revisión de enlaces';
$string['checker_links_activity'] = 'Actividad: {$a->name}  ({$a->modname})';
$string['checker_links_book_chapter'] = 'Capítulo de libro: {$a->title}';
$string['checker_links_display'] = 'Enlaces en resumen de curso y actividades URL';
$string['checker_links_error_code'] = 'Error HTTP {$a->http_code} en {$a->url}';
$string['checker_links_error_curl'] = 'Error cURL {$a->curl_errno} {$a->curl_error} en {$a->url}';
$string['checker_links_error_httpsecurity'] = 'El dominio dado {$a} está en lista negra al revisar su dirección y número de puerto contra las listas blanca y negra en la seguridad HTTP de Moodle.';
$string['checker_links_error_skipped'] = 'El dominio {$a->host} está puesto en lista blanca para {$a->url}';
$string['checker_links_error_undefined'] = 'Ocurrió un error indefinido con el enlace';
$string['checker_links_ok'] = '{$a->url} es válida (Code {$a->http_code})';
$string['checker_links_setting_connect_timeout'] = 'tiempo agotado en conexión cURL';
$string['checker_links_setting_timeout'] = 'tiempo agotado cURL';
$string['checker_links_setting_useragent'] = 'Agente del Usuario';
$string['checker_links_setting_useragent_help'] = 'Agente del Usuario';
$string['checker_links_setting_whitelist'] = 'Lista blanca de revisor de enlace';
$string['checker_links_setting_whitelist_desc'] = 'Tenga en cuenta que <code>www.w3.org</code> debe estar presente.';
$string['checker_links_setting_whitelist_help'] = 'Por favor añada una URL por línea, como por ejemplo <code>https://moodle.org</code>';
$string['checker_links_summary'] = 'Resumen del curso';
$string['checker_links_wiki_page'] = 'Página Wiki: {$a->title}';
$string['checker_quiz'] = 'Revisión de examen';
$string['checker_quiz_display'] = 'Calificación total en calificación del examen';
$string['checker_referencefilter_comparison'] = '(RCurso de referencia: "{$a->filtervaluereference}" | Curso actual: "{$a->filtervaluecurrent}")';
$string['checker_referencefilter_enabled'] = 'Revisión de filtro de configuraciones habilitada';
$string['checker_referencefilter_enabled_help'] = 'Por favor habilite esto para comparar todos los filtros de curso con el curso de referencia.';
$string['checker_referencefilter_failing'] = 'El filtro "{$a->filterkey}" no es correcto';
$string['checker_referencefilter_filternotsetincurrentcourse'] = 'El filtro "{$a->filterkey}" está ausente en el curso actual.';
$string['checker_referencefilter_success'] = 'Todos los filtros están configurados correctamente en el curso actual';
$string['checker_referenceformatoptions_enabled'] = 'Revisión de opciones de formato de configuraciones de referencia habilitada';
$string['checker_referenceformatoptions_enabled_help'] = 'Por favor habilite esto para comparar todas las opciones del formato del curso con el curso de referencia.';
$string['checker_referenceformatoptions_failing'] = 'La opción de formato "{$a->optionkey}" no es correcta';
$string['checker_referenceformatoptions_success'] = 'Todas las opciones de formato están configuradas correctamente en el curso actual';
$string['checker_referencesettings'] = 'Revisión de Configuraciones de Referencia';
$string['checker_referencesettings_checklist'] = 'Lista de Cotejo de Configuraciones de Referencia del Curso';
$string['checker_referencesettings_checklist_help'] = 'Por favor seleccione una o varias configuraciones para revisar con el curso de referencia.';
$string['checker_referencesettings_comparison'] = '(Curso de referencia: "{$a->settingvaluereference}" | Curso actual: "{$a->settingvaluecurrent}")';
$string['checker_referencesettings_display'] = 'Configuraciones Comparadas con el Curso de referencia';
$string['checker_referencesettings_failing'] = 'La configuración "{$a->setting}" no es correcta';
$string['checker_referencesettings_settingismissing'] = 'La configuración "{$a->setting}" no es una configuracióndecurso';
$string['checker_referencesettings_success'] = 'La configuración "{$a->setting}" es correcta';
$string['checker_subheadings'] = 'Revisión de Subencabezados de Etiqueta';
$string['checker_subheadings_display'] = 'Subencabezados de Etiqueta';
$string['checker_subheadings_setting_whitelist'] = 'Listablanca de Revisión de Subencabezados de Etiqueta';
$string['checker_subheadings_setting_whitelist_help'] = 'Por favor añada una  cadena de  caracteres por línea. Ejemplo: "Estimado(s) DesarrolladordeMódulo".';
$string['checker_userdata'] = 'Revisión de datos del usuario';
$string['checker_userdata_display'] = 'Datos del usuario almacenados en actividades';
$string['check_failed'] = 'Falla';
$string['check_successful'] = 'Éxito';
$string['course_checker:addinstance'] = 'Añadir un nuevo Bloque de Revisor de Curso';
$string['course_checker:view'] = 'Ver el Bloque de Revisor de Curso';
$string['course_checker:view_notification'] = 'Ver las notificaciones del Bloque de Revisor de Curso';
$string['course_checker:view_report'] = 'Ver la página de resultado de revisión';
$string['data_success'] = 'La actividad Base de datos está correctamente configurada y los campos están definidos';
$string['group_activities'] = 'Configuración de Actividad';
$string['group_blocks'] = 'Configuraciones de bloques';
$string['group_course_settings'] = 'Configuración de Curso';
$string['group_links'] = 'Validador de Enlace';
$string['groups_activity'] = 'Actividad "{$a->name}"';
$string['groups_deactivated'] = 'Configuración de envío grupal está desactivada';
$string['groups_idmissing'] = 'Configuración de envío grupal está activa, pero no está configurado ningún agrupamiento';
$string['groups_lessthantwogroups'] = 'Menos de 2 grupos han sido configurados para el agrupamiento activo';
$string['groups_missing'] = 'Agrupamiento no ha sido configurado correctamente';
$string['groups_success'] = 'Configuración de envío grupal está bien definida';
$string['humancheck'] = 'Última revisión manual:';
$string['humancheck_comment_placeholder'] = 'Nota';
$string['humancheckempty'] = 'Este curso nunca ha sido revisado manualmente';
$string['humancheck_reason'] = 'Razón';
$string['humancheck_title'] = 'Configurar fecha de revisión manual';
$string['humancheck_update'] = 'Actualizar revisión humana';
$string['invalidtoken'] = 'Su token es inválido';
$string['lastactivityedition'] = 'Último cambio de actividad';
$string['lastactivityedition_notimestamp'] = 'No se encontró fecha';
$string['link'] = 'Enlace';
$string['link_col_page_header'] = 'Enlace a Resolver';
$string['message'] = 'Mensaje';
$string['message_col_page_header'] = 'Mensaje';
$string['messageprovider_allchecks_completed'] = 'Las revisiones están completadas.';
$string['messageprovider_allchecks_subject'] = 'Revisiones completadas en curso {$a->coursename}';
$string['messageprovider:checker_completed'] = 'Revisión de Curso está completada';
$string['messageprovider_result_html'] = 'Usted puede ver el resultado en {$a->urlhtml}';
$string['messageprovider_result_html_label'] = 'la página de resultado dedicada';
$string['messageprovider_result_plain'] = 'Usted puede ver el resultado en {$a->url}.';
$string['messageprovider_singlechecks_completed'] = 'La revisión {$a->checkername} está completada.';
$string['messageprovider_singlechecks_subject'] = 'Revisión {$a->checkername} completada en curso {$a->coursename}';
$string['nogroupresults'] = 'Nada encontrado para revisarse. ¡Todo está bien!';
$string['noresults'] = 'El curso nunca ha sido revisado automáticamente';
$string['pluginname'] = 'Revisor de Curso';
$string['privacy:metadata'] = 'El bloque de Revisor de Curso solamente contiene datos anónimos.';
$string['quiz_activity'] = 'Actividad: {$a->name}  ({$a->modname})';
$string['quiz_grade_sum_error'] = 'Calificación máxima ({$a->grade}) y Total de puntaje ({$a->sumgrades}) deberían de ser el mismo número en este examen';
$string['quiz_grade_sum_success'] = 'El examen está configurado correctamente';
$string['rerun_col_block_header'] = 'Re-ejecutar';
$string['rerun_disabled_col_block_header'] = 'Esta revisión ya está agendada para re-ejecutarse';
$string['resolutionlink'] = 'Resolución:';
$string['result'] = 'Resultado';
$string['result_checker_disabled'] = 'Este revisor está deshabilitado por el administrador.';
$string['result_checker_manualtask'] = 'Este revisor necesita un poco de trabajo manual.';
$string['result_col_block_header'] = 'Resultado';
$string['result_col_page_header'] = 'Resultado';
$string['result_last_activity_empty'] = 'Sin actividades modificadas desde {$a}';
$string['result_last_activity_header'] = 'Últimas actividades modificadas';
$string['result_last_activity_header_date'] = 'Últimas actividades modificadas desde {$a}';
$string['resultpagegoto'] = 'Ver resultados detallados';
$string['resultpageheader'] = 'Ver resultados detallados';
$string['resultpagetitle'] = 'Ver resultados detallados para curso {$a->name}';
$string['resultpermissiondenied'] = 'Usted no tiene permitido acceder a esta página';
$string['runcheckbtn'] = 'Revisar este curso';
$string['runcheckbtn_already'] = 'Este curso ya está agendado para ser revisado automáticamente.';
$string['runcheckbtn_nocheckers'] = 'No hay revisores habilitados.';
$string['settings_checker_dependency'] = '<div class="alert alert-warning">falló dependencia del revisor; revise que el plugin <a href="/admin/modules.php" target="_blank">{$a}</a> esté instalado y habilitado.</div>';
$string['settings_checker_header'] = 'Configuraciones para {$a}.';
$string['settings_checker_hide'] = '{$a} oculto(s)';
$string['settings_checker_toggle'] = '{$a} habilitada';
$string['settings_general'] = '<p>Si el revisor está deshabilitado (después de guardar los cambios) se mostrará debajo una nueva configuración para ocultar y mostrar cada resultado del revisor.</p>';
$string['settings_referencecourseid'] = 'ID de curso de referencia';
$string['settings_rolesallowedmanual'] = 'Roles para revisión manual';
$string['settings_rolesallowedmanual_description'] = 'Definir los roles permitidos que están configurados globalmente, o por curso, para usar el formato para revisión manual.';
$string['subheadings_generalerror'] = 'Hubo un problema al ejecutar esta revisión';
$string['subheadings_iconmissing'] = 'Falta el ícono en la primera html-tag';
$string['subheadings_labelignored'] = 'Esta etiqueta es ignorada debido a listablanca en la configuración del plugin.';
$string['subheadings_success'] = 'Esta etiquete tiene lindos subencabezado e ícono';
$string['subheadings_wrongfirsthtmltag'] = 'La primera html-tag no es una {$a->htmltag}';
$string['userdata_error'] = 'No debería de haber ningún dato del usuario en la actividad {$a}.';
$string['userdata_setting_coursesregex'] = 'Filtro regex de nombre completo del curso';
$string['userdata_setting_coursesregex_help'] = 'Definir una expresión regular, para ejecutar este revisor solamente, cuando el nombre completo del curso coincida con ella.';
$string['userdata_setting_modules'] = 'Módulos habilitados';
$string['userdata_setting_modules_help'] = 'Definir los módulos permitidos (debe estar habilitado en <a href="/admin/modules.php" target="_blank">Gestionar actividades</a>, contener el método reset_userdata en <code>mod/{modname}/lib.php</code> y estar soportado por este plugin) para revisarse en cuanto a datos del usuario.';
$string['userdata_success'] = 'La actividad {$a} no contiene datos del usuario.';
