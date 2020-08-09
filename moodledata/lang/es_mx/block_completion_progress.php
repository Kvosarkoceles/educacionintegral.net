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
 * Strings for component 'block_completion_progress', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   block_completion_progress
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['completed_colour'] = '#73A839';
$string['completed_colour_descr'] = 'Color HTML para elementos que han sido completados';
$string['completed_colour_title'] = 'Color completado';
$string['completion_not_enabled'] = 'El seguimiento de finalización no está habilitado en este sitio.';
$string['completion_not_enabled_course'] = 'El seguimiento de finalización no está habilitado en este curso.';
$string['completion_progress:addinstance'] = 'Añadir un nuevo bloque de Progreso de Finalización';
$string['completion_progress:myaddinstance'] = 'Añadir un nuevo bloque de Progreso de Finalización a la página de Mi hogar';
$string['completion_progress:overview'] = 'Ver vista general de Progreso de Finalización para todos los estudiantes';
$string['completion_progress:showbar'] = 'Mostrar la barra en el bloque de Progreso de Finalización';
$string['config_activitiesincluded'] = 'Actividades incluidas';
$string['config_activitycompletion'] = 'Todas las actividades con finalización configurada';
$string['config_default_title'] = 'Progreso de Finalización';
$string['config_group'] = 'Visible solamente al grupo o agrupamiento';
$string['config_header_monitored'] = 'Monitoreada';
$string['config_icons'] = 'Usar íconos en barra';
$string['config_longbars'] = 'Como presentar barras largas';
$string['config_orderby'] = 'Ordenar barra por';
$string['config_orderby_course_order'] = 'Orden en curso';
$string['config_orderby_due_time'] = 'Tiempo usando fecha "{$a}"';
$string['config_percentage'] = 'Mostrar porcentaje a estudiantes';
$string['config_scroll'] = 'Deslizar';
$string['config_selectactivities'] = 'Seleccionar actividades';
$string['config_selectedactivities'] = 'Actividades seleccionadas';
$string['config_squeeze'] = 'Apretujar';
$string['config_title'] = 'Título alterno';
$string['config_wrap'] = 'Envolver';
$string['coursenametoshow'] = 'Nombre de curso a mostrar en Tablero';
$string['defaultlongbars'] = 'Presentación por defecto para barras largas';
$string['forceiconsinbar'] = 'Forzar íconos en la barra de progreso';
$string['fullname'] = 'Nombre completo del curso';
$string['futureNotCompleted_colour'] = '#025187';
$string['futureNotCompleted_colour_descr'] = 'Código HTML del color para elementos futuros que aun no han sido completados';
$string['futureNotCompleted_colour_title'] = 'Color futuro no-completado';
$string['how_activitiesincluded_works'] = 'Como funciona incluyendo actividades';
$string['how_activitiesincluded_works_help'] = '<p>Por defecto, todas las actividades con configuraciones de Finalización de actividad están incluidas en la barra.</p><p>Usted también puede seleccionar manualmente actividades a ser incluidas.</p>';
$string['how_group_works'] = 'Como funciona grupo visible';
$string['how_group_works_help'] = '<p>Seleccionar un grupo o agrupamiento limitará la visualización de este bloque solamente a ese grupo o agrupamiento.</p>';
$string['how_longbars_works'] = 'Como son presentadas las barras largas';
$string['how_longbars_works_help'] = '<p>Cuando las barras exceden de un largo definido, cómo pueden ser presentadas, en una de las maneras siguientes.</p><ul><li>Apretujadas en una barra horizontal</li><li>Desplazándose hacia los lados para mostra segmentos traslapados de la barra</li><li>Envueltas para mostrar todos los segmentos de la barra en varialíneas</li></ul><p>Por favor tenga en cuenta que, cuando la barra está envuelta, no se mostrará el indicador de AHORITA.</p>';
$string['how_ordering_works'] = 'Como funciona ordenamiento';
$string['how_ordering_works_help'] = '<p>Hay dos maneras de ordenar actividades en el bloque de Progreso de Finalización.</p><ul><li><em>Fecha-hora usando la fecha de "Finalización esperada en" </em> (por defecto)<br />Las fechas esperadas de finalización de actividades/recursos son usadas para ordenar la barra. En donde las actividades/recursos no tengan una fecha de finalización esperada, en su lugar se usará el orden en el curso. Cuando se usa esta opción, las fechas de finalización esperadas son ignoradas. Cuando se usa esta opción, no se muestra el indicador AHORITA.</li></ul>';
$string['how_selectactivities_works'] = 'Como funciona incluyendo actividades';
$string['how_selectactivities_works_help'] = '<p>Para seleccionar manualmente actividades a ser incluidas en la barra, asegúrese de que  "Actividades incluidas" esté configurado a "actividades seleccionadas".</p><p>Solamente pueden ser incluidas actividades con finalización de actividad configurada.</p><p>Mantenga presionada la tecla CTRL para seleccionar varias actividades.</p>';
$string['lastonline'] = 'Último en el curso';
$string['mouse_over_prompt'] = 'Pasar ratón encima o tocar barra para información.';
$string['no_activities_config_message'] = 'No hay actividades ni recursos con finalización de actividad configurada, o no se han seleccionado actividades ni recursos. Configure la finalización de la actividad para las actividades y recursos y después configure este bloque.';
$string['no_activities_message'] = 'No se están monitoreando actividades ni recursos. Use la configuración para ajustar el monitoreo.';
$string['no_blocks'] = 'No están configurados bloques de Progreso de Finalización para sus cursos.';
$string['no_courses'] = 'Usted no está inscrito en ningun curso. Solamente se mostrarán barras de cursos inscritos.';
$string['not_all_expected_set'] = 'No todas las actividades con finalización tienen una fecha "{$a}" configurada.';
$string['notCompleted_colour'] = '#C71C22';
$string['notCompleted_colour_descr'] = 'Código de color HTML para elementos actuales que todavía no han sido completados';
$string['notCompleted_colour_title'] = 'Color no-completado';
$string['no_visible_activities_message'] = 'Ninguna de las actividades monitoreadas es actualmente visible';
$string['now_indicator'] = 'AHORITA';
$string['overview'] = 'Vista general de estudiantes';
$string['pluginname'] = 'Progreso de Finalización';
$string['privacy:metadata'] = 'El Bloque Progreso de Finalización solamente muestra datos de finalización existentes.';
$string['progress'] = 'Progreso';
$string['progressbar'] = 'Progreso de Finalización';
$string['selectitem'] = 'Seleccionar \'{$a}\\';
$string['shortname'] = 'Nombre corto de curso';
$string['showallinfo'] = 'Mostrar toda la información';
$string['showinactive'] = 'Mostrar estudaintes inactivos en Vista general';
$string['showlastincourse'] = 'Mostrar última vez que estudiante estuvo en curso en la Vista general';
$string['submitted'] = 'Enviado';
$string['submittednotcomplete_colour'] = '#FFCC00';
$string['submittednotcomplete_colour_descr'] = 'Código de color HTML para elementos que han sido enviados, pero que todavía no están completados';
$string['submittednotcomplete_colour_title'] = 'Color enviado pero no completado';
$string['time_expected'] = 'Esperado';
$string['why_set_the_title'] = '¿Porqué querría Usted configurar el título de instancia de bloque?';
$string['why_set_the_title_help'] = '<p>Puede haber varias instancias del bloque de Progreso de Finalización. Usted puede usar diferentes bloques de Progreso de Finalización para monitorear diferentes conjuntos de actividades o recursos. Por ejemplo, Usted podría monitorear el progreso de las tareas en un bloque y los exámenes en otro bloque. Por esta razón, Usted puede anular el título por defecto y configurar un título de bloque más apropiado para cada instancia.</p>';
$string['why_show_precentage'] = '¿Porqué mostrar un porcentaje de progreso a estudiantes?';
$string['why_show_precentage_help'] = '<p>Es posible mostrar un porcentaje global del progreso a los estudiantes.</p><p>Esto se calcula como el número de actividades finalizadas dividido entre el número total de actividades en la barra.</p><p>El porcentaje de progreso aparece hasta que el estudiante pasa el ratón encima de  un ítem en la barra.</p>';
$string['why_use_icons'] = '¿Porqué querría Usted usar íconos?';
$string['why_use_icons_help'] = '<p>Usted puede querer añadir íconos de palomitas y cruces en Progreso de Finalización para hacer más accesible visualmente este bloque para estudiantes con daltonismo.</p><p>Esto también podría hacer más claro el significado del bloque si Usted cree que los colores no son intuitivos, ya sea por razones culturales o personales.</p>';
$string['wrapafter'] = 'Al dar-la-vuelta, limitar filas a';
