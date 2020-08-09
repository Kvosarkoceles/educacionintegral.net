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
 * Strings for component 'block_gismo', language 'es_mx', branch 'MOODLE_28_STABLE'
 *
 * @package   block_gismo
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['about'] = 'Acerca de Gismo';
$string['about_gismo'] = 'Acerca de GISMO';
$string['accesses'] = 'Accesos';
$string['accesses_tooltip'] = 'accesos';
$string['actions_on'] = 'Acciones sobre';
$string['activities'] = 'Actividades';
$string['assignments'] = 'Tareas';
$string['assignments22'] = 'Tareas (2.2)';
$string['assignments22_chart_title'] = 'Tareas: vista general tareas (2.2)';
$string['assignments_chart_title'] = 'Actividades: vista general de tareas';
$string['authors'] = 'Autores';
$string['cancel'] = 'Cancelar';
$string['chats'] = 'Chats';
$string['chats_chart_title'] = 'Actividades: vista general de chats';
$string['chats_over_time'] = 'Chats en el tiempo';
$string['chats_over_time_chart_title'] = 'Actividades:contribuciones a chats en el tiempo';
$string['chats_ud_chart_title'] = 'Actividades: detalles de estudiante en chats';
$string['close'] = 'Cerrar';
$string['completion'] = 'Finalización';
$string['completion_assignment22_chart_title'] = 'Finalizaciones de tareas (2.2)';
$string['completion_assignment22_menu'] = 'Tareas (2.2)';
$string['completion_assignment_chart_title'] = 'Finalizaciones de tareas';
$string['completion_assignment_menu'] = 'Tareas';
$string['completion_chat_chart_title'] = 'Finalizaciones de chats';
$string['completion_chat_menu'] = 'Chats';
$string['completion_completed_on_tooltip'] = 'Completada en';
$string['completion_completed_on_tooltip_months'] = '[\'Ene\',\'Feb\',\'Mar\',\'Abr\',\'May\',\'Jun\',\'Jul\',\'Ago\',\'Sep\',\'Oct\',\'Nov\',\'Dic\']';
$string['completion_forum_chart_title'] = 'Finalizaciones de foros';
$string['completion_forum_menu'] = 'Foros';
$string['completion_quiz_chart_title'] = 'Finalizaciones de exámenes';
$string['completion_quiz_menu'] = 'Exámenes';
$string['completion_resource_chart_title'] = 'Finalizaciones de recursos';
$string['completion_resource_menu'] = 'Recursos';
$string['completion_wiki_chart_title'] = 'Finalizaciones de wikis';
$string['completion_wiki_menu'] = 'Wikis';
$string['confirm_exiting'] = '¿ Realmente desea salir de GISMO ?';
$string['contact_us'] = 'Por favor, siéntase con la libertad para contactar a los autores con preguntas, o para reportar problemas, a las siguientes direcciones:';
$string['date'] = 'Fecha';
$string['debug_mode'] = 'Modo depuración (debug)';
$string['debug_modedesc'] = 'Si se configura a cierto, los mensajes de depuración se mostrarán durante el proceso de exportación de datos de Gismo.';
$string['debug_mode_false'] = 'Deshabilitado';
$string['debug_mode_true'] = 'Habilitado';
$string['detail_resources'] = 'Detalles sobre recursos';
$string['details'] = 'Detalles';
$string['detail_show'] = 'Mostrar detalles';
$string['err_access_denied'] = 'Usted no está autorizado para realizar esta acción';
$string['err_authentication'] = 'Usted no está autenticado. Es posible que su sesión Moodle haya caducado.<br /><br /><a href="">Login</a>';
$string['err_block_instance_id_not_set'] = '¡ ID de instancia de bloque no está configurada !';
$string['err_cannot_extract_data'] = '¡ No pueden extraerse datos del servidor !';
$string['err_course_not_set'] = '¡ La ID del curso no está configurada !';
$string['err_missing_course_students'] = '¡ No pueden extraerse los estudiantes del curso !';
$string['err_missing_data'] = '¡ No se puede proceder con el análisis, porque no hay datos con los cuales trabajar !';
$string['err_missing_parameters'] = '¡ Falta uno o más parámetros requeridos !';
$string['err_no_data'] = 'Sin datos';
$string['err_srv_data_not_set'] = '¡ Falta uno o más parámetros requeridos !';
$string['err_unknown'] = '¡ Error desconocido !';
$string['exit'] = 'Salir';
$string['exportalllogs'] = 'Exportar todas las bitácoras';
$string['export_chart_as_image'] = 'Exportar gráficos como imagen';
$string['exportcourselogs'] = 'Exportar solamente cursos con bloque gismo';
$string['export_data_hours_from_last_run'] = 'Retraso (horas) antes de la ejecución del siguiente proceso de exportación de datos';
$string['export_data_hours_from_last_rundesc'] = 'El proceso de exportación de datos de gismo solamente puede re-ejecutarse después de X horas; el configurar este tiempo demasiado pequeño puede crear problemas de desempeño.<br /> Por favor no lo cambie si no sabe lo que hace.';
$string['export_data_limit_records'] = 'Limitar registros en consultas SQL';
$string['export_data_limit_recordsdesc'] = 'Limitar el número de registros seleccionados para cada consulta durante la exportación de datos (en GISMOdata_manager.php).<br /> Por favor no cambie esto si no sabe lo que está haciendo.';
$string['export_data_run_inf'] = 'Correr exportación de datos Gismo desde';
$string['export_data_run_infdesc'] = 'Ejecutar exportación de datos Gismo solamente desde esta hora.<br /> Esta configuración debe ser más pequeña que export_data_run_sup.';
$string['export_data_run_sup'] = 'Correr exportación de datos Gismo hasta';
$string['export_data_run_supdesc'] = 'No ejecutar exportación de datos Gismo después de esta hora.<br /> Esta configuración debe ser mayor que export_data_run_inf.';
$string['export_data_task'] = 'Tarea de exportación de datos GISMO';
$string['exportlogs'] = 'Exportar bitácoras';
$string['exportlogsdesc'] = 'Exportar todas las bitácoras: Esta opción crea bitácoras Gismo de todos los cursos en la plataforma Moodle; esto crea muchos registros en las tablas de la BasedeDatos de Gismo, pero los datos están disponibles inmediatamente cuando se pone el bloque de Gismo dentro de un curso.<br /> Exportar solamente los cursos con el bloque Gismo: Exporta solamente los cursos que tengan un bloque Gismo; si Usted selecciona esta opción, los datos Gismo del curso estarán disponibles solamente varias horas después de que Usted ponga un bloque Gismo dentro de un curso.';
$string['exportlogs_missing'] = 'Falta parámetro para exportación';
$string['exportlogs_missingcourselogs'] = 'El proceso de análisis de bitácora corre a horas fijas; usualmente en la noche. Sus datos del curso estarán disponibles dentro de 24 horas';
$string['file'] = 'Archivo';
$string['forums'] = 'Foros';
$string['forums_chart_title'] = 'Actividades: vista general de foro';
$string['forums_over_time'] = 'Foros en el tiempo';
$string['forums_over_time_chart_title'] = 'Actividades: contribuciones a foros en el tiempo';
$string['forums_ud_chart_title'] = 'Actividades: detalles de estudiantes en foros';
$string['from'] = 'Desde';
$string['gismo'] = 'Gismo';
$string['gismo:addinstance'] = 'Añadir un nuevo bloque Gismo';
$string['gismo_help'] = '<p>Gismo trabaja con aquellos cursos que reunen los siguientes requisitos::</p><ul><li>hay al menos un estudiante inscrito en el curso</li><li>hay al menos una instancia de uno de los siguientes módulos:<ul><li>Recursos</li><li>Tareas</li><li>Exámenes</li></ul></li></ul>';
$string['gismo_report_launch'] = 'Herramienta de reporte';
$string['gismo:trackteacher'] = 'Maestro Gismo';
$string['gismo:trackuser'] = 'Estudiante Gismo';
$string['gismo_version'] = 'Versión';
$string['gismo_version_value'] = '3.3';
$string['gismo:view'] = 'GISMO - Falló la autorización';
$string['help'] = 'Ayuda';
$string['help_docs'] = 'Pequeña descripción';
$string['hide_menu'] = 'Ocultar menú';
$string['home'] = 'Hogar de Gismo';
$string['homepage_chart_activities_assignments_overview'] = 'Actividades: Vista general de tareas';
$string['homepage_chart_resources_access_overview'] = 'Recursos: Vista general de accesos';
$string['homepage_chart_resources_students_overview'] = 'Recursos: vista general de estudiantes';
$string['homepage_charts_preview_title'] = 'Vista general de gráficas';
$string['homepage_chart_students_accesses_by_students'] = 'Estudiantes: Accesos por estudiantes';
$string['homepage_chart_students_access_overview'] = 'Estudiantes: Vista general de accesos';
$string['homepage_chart_students_access_overview_on_resources'] = 'Estudiantes: Vista general de accesos en recursos';
$string['homepage_processing_data'] = 'Procesando datos';
$string['homepage_processing_data_wait'] = '¡ Por favor espere, procesando datos !';
$string['homepage_text'] = 'GISMO (Graphical Interactive Student MOnitoring and tracking tool) es  una herramienta gráfica del sistema para monitorear y rastrear estudiantes interactivamente desde el Sistema de Gestión de Cursos de Moodle. También genera representaciones gráficas útiles, que pueden explorarse por los instructores del curso y los estudiantes, para tener una visión general de las actividades de aprendizaje.<br />
Por favor, seleccione uno de los menús en la parte superior de ésta página para empezar a usar GISMO.<br />
Si Usted quisiera echarle un vistazo al tutorial, por favor elija en el menú "Ayuda" > "Tutorial".';
$string['homepage_title'] = 'Bienvenido a GISMO';
$string['info_text'] = '<p>Para personalizar la gráfica, Usted puede seleccionar/des-seleccionar ítems de los menús habilitados.</p>";
message += "<p>Instrucciones</p>";
message += "<ul style=\'list-style-position: inside;\'>";
message += "<li>Casilla principal: seleccionar/des-seleccionar todos los ítems enlistados.</li>";
message += "<li>Ítem Click: seleccionar/des-seleccionar el ítem elegido.</li>";
message += "<li>Ítem Alt+Click: seleccionar solamente el ítem elegido</li>";
message += "<li><img src=\'images/eye.png\'> mostrar detalles del ítem</li>";
message += "</ul>';
$string['info_title'] = 'GISMO - Listas';
$string['intro_information_about_gismo'] = 'La información acerca de este lote/versión está descrita debajo:';
$string['items'] = 'ÍTEMS';
$string['list'] = 'lista';
$string['manualexportpassword'] = 'Exportación de contraseña manual';
$string['manualexportpassworddesc'] = 'Esto significa que el script export_data.php no puede ejecutarse desde un navegador web sin proporcionar la contraseña usando la forma siguiente de URL::<br /><br />http://sitio.ejemplo.com.mx/blocks/gismo/lib/gismo/server_side/export_data.php?password=Uno_Bien_bueno_y_$eguro<br /><br />Si esto se dejara vacío, no se requerirá contraseña.';
$string['manualexportpassworderror'] = 'Falta la contraseña para exportación manual , o está equivocada';
$string['menu_hide'] = 'Ocultar menú';
$string['menu_show'] = 'Mostrar menú';
$string['no_chart_at_the_moment'] = '¡ Por el momento no hay gráficas !';
$string['nr_submissions'] = 'Número de envíos';
$string['option_axes_label_max_length'] = 'Long máx etiqueta ejes (caracteres)';
$string['option_axes_label_max_offset'] = 'Desfase máx etiqueta ejes (caracteres)';
$string['option_base_color'] = 'Color base';
$string['option_blue'] = 'Azul';
$string['option_chart_settings'] = 'Configuraciones del gráfico';
$string['option_general_settings'] = 'Configuraciones generales';
$string['option_green'] = 'Verde';
$string['option_include_hidden_items'] = 'Incluir ítems ocultos';
$string['option_intro'] = 'Esta sección le permite personalizar opciones específicas de las aplicaciones.';
$string['option_number_of_colors'] = 'Número de colores (gráficas de matriz)';
$string['option_other_settings'] = 'Otras configuraciones';
$string['option_red'] = 'Rojo';
$string['options'] = 'Opciones';
$string['option_window_resize_delay_seconds'] = 'Retraso en cambio de tamaño de ventana (segundos)';
$string['page_title'] = 'Gismo -';
$string['pluginname'] = 'Gismo';
$string['print'] = 'Imprimir';
$string['processing_wait'] = '¡ Por favor espere, procesando datos !';
$string['quizzes'] = 'Exámenes';
$string['quizzes_chart_title'] = 'Actividades: Vista general de exámenes';
$string['release_date'] = 'Fecha de liberación';
$string['release_date_value'] = '2014-12-15';
$string['resources'] = 'Recursos';
$string['resources_access_detail_chart_title'] = 'Recursos: detalles de recursos en estudiantes';
$string['resources_access_overview'] = 'Vista general de accesos';
$string['resources_access_overview_chart_title'] = 'Recursos: Vista general de accesos';
$string['resources_students_overview'] = 'Vista general de estudiantes';
$string['resources_students_overview_chart_title'] = 'Recursos: Vista general de estudiantes';
$string['save'] = 'Guardar';
$string['show'] = 'Mostrar';
$string['show_details'] = 'Mostrar detalles';
$string['show_menu'] = 'Mostrar menú';
$string['student_accesses'] = 'Accesos por estudiantes';
$string['student_accesses_chart_title'] = 'Estudiantes: accesos por estudiantes';
$string['student_accesses_overview'] = 'Vista general de accesos';
$string['student_accesses_overview_chart_title'] = 'Estudiantes: Vista general de accesos';
$string['student_reporting'] = 'Reportar a estudiantes';
$string['student_reporting_desc'] = 'Si se habilita, los estudiantes podrán ver sus bitácoras';
$string['student_reporting_disabled'] = 'Deshabilitado';
$string['student_reporting_enabled'] = 'Habilitado';
$string['student_resources_details_chart_title'] = 'Estudiantes: Detalles de estudiantes en recursos';
$string['student_resources_overview'] = 'Vista general de accesos en recursos';
$string['student_resources_overview_chart_title'] = 'Estudiantes: Vista general de accesos en recursos';
$string['students'] = 'Estudiantes';
$string['teachers'] = 'Profesores';
$string['timeline'] = 'Línea de Tiempo';
$string['to'] = 'A';
$string['tutorial'] = 'Tutorial';
$string['users'] = 'Usuarios';
$string['welcome'] = 'Bienvenido a GISMO v 3.3';
$string['wikis'] = 'Wikis';
$string['wikis_chart_title'] = 'Actividades: Vista general de wikis';
$string['wikis_over_time'] = 'Wikis en el tiempo';
$string['wikis_over_time_chart_title'] = 'Actividades: Contribuciones a wikis en el tiempo';
$string['wikis_ud_chart_title'] = 'Actividades: Detalles de estudiantes en wikis';
