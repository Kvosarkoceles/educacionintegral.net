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
 * Strings for component 'tool_lifecycle', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   tool_lifecycle
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['abortdisableworkflow'] = 'Deshabilitar flujograma (abortar procesos,¡podría ser riesgoso!)';
$string['abortdisableworkflow_confirm'] = 'El flujograma va a estar deshabilitado y todos los procesos ejecutándose en este flujograma serán abortados. ¿Está Usted seguro?';
$string['abortprocesses'] = 'Abortar procesos ejecutándose (,¡podría ser riesgoso!)';
$string['abortprocesses_confirm'] = 'Todos los procesos ejecutándose en este fljograma serán abortados. ¿Está Usted seguro?';
$string['activateworkflow'] = 'Activar';
$string['active_automatic_workflows_heading'] = 'Flujogramas Automáticos Activos';
$string['active_manual_workflows_heading'] = 'Flujogramas Manuales Activos';
$string['active_processes_list_header'] = 'Procesos Activos';
$string['active_workflow_not_changeable'] = 'La instancia del flujograma ya estaba activada.No es posible cambiar ninguno de sus pasos ya.';
$string['active_workflow_not_removeable'] = 'La instancia de flujograma está activa. Bo es posible quitarla.';
$string['active_workflows_list'] = 'Enlistar flujogramas activos y definiciones de flujogramas';
$string['add_new_step_instance'] = 'Añadir Nueva Instancia de Paso...';
$string['add_new_trigger_instance'] = 'Añadir Nueva Instancia de Disparador...';
$string['add_workflow'] = 'Añadir Flujograma';
$string['adminsettings_edit_step_instance_heading'] = 'Instancia de paso para flujograma \'{$a}\\';
$string['adminsettings_edit_trigger_instance_heading'] = 'Disparador para flujograma \'{$a}\\';
$string['adminsettings_edit_workflow_definition_heading'] = 'Definición del Flujograma';
$string['adminsettings_heading'] = 'Configuraciones del Flujograma';
$string['adminsettings_workflow_definition_steps_heading'] = 'Pasos del Flujograma';
$string['all_delays'] = 'Todos los retrasos';
$string['anonymous_user'] = 'Usuario Anónimo';
$string['apply'] = 'Aplicar';
$string['backupcreated'] = 'Creado en';
$string['backupworkflow'] = 'Respaldar Flujograma';
$string['cannot_trigger_workflow_manually'] = 'El flujograma requerido no pudo ser disparado manualmente.';
$string['config_backup_path'] = 'Ruta de la carpeta de respaldo de lifecycle';
$string['config_backup_path_desc'] = 'Esta configuración define la localización del almacenamiento de los respaldos creados por el paso del respaldo.
La ruta tiene que ser especificada como una ruta absoluta en su servidor.';
$string['config_delay_duration'] = 'Duración predeterminada de un retraso de curso';
$string['config_delay_duration_desc'] = 'Esta configuración define la duración predeterminada del retraso de un flujograma en caso de que uno de sus procesos sea retrocedido o termine.
La duración del retraso determina por cuanto tiempo un curso estará exento de ser procesado nuevamente en alguno de estos casos.';
$string['course_backups_list_header'] = 'Respaldos del Curso';
$string['coursename'] = 'Nombre del curso';
$string['date'] = 'Fecha esparada';
$string['deactivated_workflows_list'] = 'Enlistar flujogramas desactivados';
$string['deactivated_workflows_list_header'] = 'Flujogramas desactivados';
$string['delayed_courses_header'] = 'Cursos retrasados';
$string['delayed_for_workflows'] = 'Retrasado para {$a} flujogramas';
$string['delayed_for_workflow_until'] = 'Retrasado para "{$a->name}" hasta {$a->date}';
$string['delayed_globally'] = 'Retrasado globalmente hasta {$a}';
$string['delayed_globally_and_seperately'] = 'Retrasado globalmente y separadamente para {$a} flujogramas';
$string['delayed_globally_and_seperately_for_one'] = 'Retrasado globalmente y separadamente para 1 flujograma';
$string['delays'] = 'Retrasos';
$string['delays_for_workflow'] = 'Retrasos para "{$a}"';
$string['delete_all_delays'] = 'Eliminar todos los retrasos';
$string['delete_delay'] = 'Eliminar retraso';
$string['deleteworkflow'] = 'Eliminar Flujograma';
$string['deleteworkflow_confirm'] = 'El flujograma va a ser eliminado. Esto no puede deshacerse. ¿Está seguro?';
$string['disableworkflow'] = 'Deshabilitar flujograma (los procesos siguen corriendo)';
$string['disableworkflow_confirm'] = 'El flujograma va a ser deshabilitado.  ¿Está seguro?';
$string['download'] = 'Descargar';
$string['duplicateworkflow'] = 'Duplicar Flujograma';
$string['editworkflow'] = 'Editar Configuraciones Generales';
$string['error_wrong_trigger_selected'] = 'Usted intentó solicitar un disparo no-manual.';
$string['followedby_none'] = 'Ninguno';
$string['general_config_header'] = 'General y Subplugins';
$string['general_settings_header'] = 'Configuraciones Generales';
$string['globally'] = 'Retrasos globales';
$string['globally_until_date'] = 'Globalment hasta {$a}';
$string['interaction_success'] = 'Acción guardada exitosamente.';
$string['invalid_workflow'] = 'Configuración de flujograma inválida';
$string['invalid_workflow_cannot_be_activated'] = 'La definición del flujograma es inválida, por lo que no puede ser activado.';
$string['invalid_workflow_details'] = 'Ir a vista de detalles, para crear un disparador para este flujograma';
$string['lastaction'] = 'Última acción en';
$string['lifecycle_cleanup_task'] = 'Eliminar entradas de retrasos antiguos para flujogramsa de ciclo de vida';
$string['lifecycle:managecourses'] = 'Puede gestionar cursos en tool_lifecycle';
$string['lifecyclestep'] = 'Procesar paso';
$string['lifecycle_task'] = 'Correr los procesos del ciclo de vida';
$string['lifecycletrigger'] = 'Disparador';
$string['manual_trigger_process_existed'] = 'Ya existe un flujograma para este curso.';
$string['manual_trigger_success'] = 'Flujograma iniciado exitosamente.';
$string['name_until_date'] = '"{$a->name}" hasta {$a->date}';
$string['nocoursestodisplay'] = '¡Actualmente no hay cursos que necesiten de su atención!';
$string['nointeractioninterface'] = '¡Sin interfaz de interacción disponible!';
$string['noprocessfound'] = '¡No se pudo encontrar un proceso con la processid proporcionada!';
$string['nostepfound'] = '¡No se pudo encontrar un paso con el stepid proporcionado!';
$string['pluginname'] = 'Ciclo de Vida';
$string['plugintitle'] = 'Ciclo de Vida del Curso';
$string['privacy:metadata:tool_lifecycle_action_log'] = 'Una bitácora de acciones hechas por mánagers de currsos.';
$string['privacy:metadata:tool_lifecycle_action_log:action'] = 'Identificador de la acción que fue hecha.';
$string['privacy:metadata:tool_lifecycle_action_log:courseid'] = 'ID del Curso en donde se hizo la acción.';
$string['privacy:metadata:tool_lifecycle_action_log:processid'] = 'ID del Proceso en donde se hizo la acción.';
$string['privacy:metadata:tool_lifecycle_action_log:stepindex'] = 'Índice de los Pasos en el Flujograma, la acción para la cual se hizo.';
$string['privacy:metadata:tool_lifecycle_action_log:time'] = 'Hora de cuando se hizo la acción';
$string['privacy:metadata:tool_lifecycle_action_log:userid'] = 'ID del usuario que hizo la acción.';
$string['privacy:metadata:tool_lifecycle_action_log:workflowid'] = 'ID del flujograma en donde se hizo la acción';
$string['process_proceeded_event'] = 'Un proceso ha continuado';
$string['process_rollback_event'] = 'Un proceso ha sido revertido';
$string['process_triggered_event'] = 'Un proceso ha sido disparado';
$string['restore'] = 'Restaurar';
$string['restore_step_does_not_exist'] = 'elpaso {$a} no está instalado,pero está incluido en el archivo de respaldo.Por favor instálelo primeramente e inténtelo de nuevo..';
$string['restore_subplugins_invalid'] = 'Formato equivocado del archivo de respaldo. La estructura del elemento del subplugin no es la esperada.';
$string['restore_trigger_does_not_exist'] = 'El disparador {$a} no está instalado, pero está incluido en el archivo del respaldo. Por favor, instálelo primeramente e inténtelo nuevamente.';
$string['restore_workflow_not_found'] = 'Formato equivocado del archivo de respaldo. No se pudo encontrar el flujograma.';
$string['show_delays'] = 'Tipo de vista';
$string['status'] = 'Estado';
$string['step'] = 'Procesar paso';
$string['step_delete'] = 'Eliminar';
$string['step_edit'] = 'Editar';
$string['step_instancename'] = 'Nombre de Instancia';
$string['step_instancename_help'] = 'Título de instancia de paso (visible solamente para admins)';
$string['step_settings_header'] = 'Configuraciones específicas del tipo de paso';
$string['step_show'] = 'Mostrar';
$string['step_sortindex'] = 'Arriba/Abajo';
$string['step_subpluginname'] = 'Nombre del Subplugin';
$string['step_subpluginname_help'] = 'Título del subplugin/disparador del paso (visible solamente para admnis).';
$string['step_type'] = 'Tipo';
$string['subplugintype_lifecyclestep'] = 'Paso dentro de un proceso de ciclo de vida';
$string['subplugintype_lifecyclestep_plural'] = 'Pasos dentro de un proceso de ciclo de vida';
$string['subplugintype_lifecycletrigger'] = 'Disparador para iniciar un proceso de ciclo de vida';
$string['subplugintype_lifecycletrigger_plural'] = 'Disparadores para iniciar un proceso de ciclo de vida';
$string['tablecourseslog'] = 'Acciones Anteriores';
$string['tablecoursesremaining'] = 'Cursos restantes';
$string['tablecoursesrequiringattention'] = 'Cursos que requieren su atención';
$string['tools'] = 'Herramientas';
$string['trigger'] = 'Disparador';
$string['trigger_does_not_exist'] = 'No se pudo encontrar el disparador solicitado.';
$string['trigger_enabled'] = 'Habilitado';
$string['trigger_instancename'] = 'Nombre de instancia';
$string['trigger_instancename_help'] = 'Título de la instancia del disparador (visible solamente para admins)';
$string['trigger_settings_header'] = 'Configuraciones específicas del tipo de disparador';
$string['trigger_sortindex'] = 'Arriba/Abajo';
$string['trigger_subpluginname'] = 'Nombre del Subplugin';
$string['trigger_subpluginname_help'] = 'Título del subplugin/disparador del paso (visible solamente para admins)';
$string['trigger_workflow'] = 'Flujograma';
$string['upload_workflow'] = 'Subir Flujograma';
$string['viewheading'] = 'Gestionar Cursos';
$string['viewsteps'] = 'Ver Pasos del Flujograma';
$string['workflow'] = 'Flujograma';
$string['workflow_active'] = 'Activar';
$string['workflow_definition_heading'] = 'Definiciones del Flujograma';
$string['workflow_delayforallworkflows'] = '¿Retraso para todos los Flujograma?';
$string['workflow_delayforallworkflows_help'] = 'Si se activa, la duración no solamente retrasa la ejecución de este flujograma para un curso, sino que lo hace para todos los demás flujogramas también. Así, hasta que pase el tiempo no puede iniciarse ningún proceso para el curso respectivo.';
$string['workflow_displaytitle'] = 'Mostrar título del Flujograma';
$string['workflow_displaytitle_help'] = 'Este título es mostrado a usuarios cuando gestionan sus cursos.';
$string['workflow_duplicate_title'] = '{$a} (Copia)';
$string['workflow_finishdelay'] = 'Retraso en caso de curso terminado';
$string['workflow_finishdelay_help'] = 'Si un curso ha terminado una instancia del proceso de este flujograma, este valor describe el tiempo hasta que un proceso para esta combinación de curso y flujograma pueda ser iniciada de nuevo.';
$string['workflow_is_running'] = 'El flujograma está corriendo';
$string['workflownotfound'] = 'No se pudo encontrar flujograma con id {$a}';
$string['workflow_not_removeable'] = 'No es posible quitar esta instancia del flujograma. ¿Podría ser que todavía tuviera procesos ejecutándose?';
$string['workflow_processes'] = 'Procesos activos';
$string['workflow_rollbackdelay'] = 'Retraso en caso de revertir';
$string['workflow_rollbackdelay_help'] = 'Si un curso fue revertido dentro de una instancia del proceso de este flujograma, este valor describe el tiempo hasta que un proceso para esta combinación de curso y flujograma pueda ser iniciada de nuevo.';
$string['workflow_sortindex'] = 'Arriba/Abajo';
$string['workflow_started'] = 'Flujograma iniciado.';
$string['workflow_timeactive'] = 'Activo desde';
$string['workflow_timedeactive'] = 'Desactivado desde';
$string['workflow_title'] = 'Título';
$string['workflow_title_help'] = 'Título del flujograma (visible solamente para admins)';
$string['workflow_tools'] = 'Acciones';
$string['workflow_trigger'] = 'Disparador para el flujograma';
