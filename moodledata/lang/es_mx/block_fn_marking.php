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
 * Strings for component 'block_fn_marking', language 'es_mx', branch 'MOODLE_33_STABLE'
 *
 * @package   block_fn_marking
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptoverride'] = 'Aceptar anulación';
$string['adminfrontpage'] = 'Vista admin-portada';
$string['aggregatetype'] = 'Agregar tipo';
$string['allactivitytypes'] = 'Todos los tipos de actividad';
$string['allcategories'] = 'Todas las categorías';
$string['allcourses'] = 'Todos los cursos';
$string['allcourseswithblock'] = 'Solamente incluir cursos que tienen el Bloque de Gestor de Calificar';
$string['allgroups'] = 'Todos los grupos';
$string['allparticipants'] = 'Todos los participantes';
$string['assign'] = 'Tarea';
$string['atmaxresubmission'] = 'A re-envío máximo';
$string['blockinfo'] = 'Información del bloque';
$string['blocksettings'] = 'Configurando un bloque de calificación FN';
$string['blocksitesettings'] = 'Configuraciones del sitio del bloque';
$string['blocktitle'] = 'Mánager de Calificador';
$string['cfgdisplaytitle'] = 'Mostrar título';
$string['checkagain'] = 'Revisar otra vez';
$string['close'] = 'Cerrar';
$string['config_days'] = 'Configurar el número de días que lleva el estudiante sin conectarse';
$string['config_days_help'] = '<p>Esta configuración le permite definir </p> <p>el número de días que llevan los estudiantes sin entrar al curso.</p>';
$string['config_percent'] = 'Configurar el porcentaje de puntos';
$string['config_percent_help'] = '<p>Esta configuración le permite especificar </p> <p>el porciento de puntos, y después de esto, verá el número de estudiantes con puntajes inferiores al x porciento.</p>';
$string['config_sectiontitles'] = 'Títulos de secciones';
$string['config_sectiontitles_help'] = '<p>vacío=valor por defecto del curso.</p>';
$string['config_showgradeslink'] = 'Mostrar enlace a calificación';
$string['config_showgradeslink_help'] = '<p>Esta configuración determina si es que se mostrará </p> <p> o se ocultará el enlace hacia calificación en el bloque.</p>';
$string['config_showmarked'] = 'Mostrar actividades calificadas';
$string['config_showmarked_help'] = '<p>Esta configuración determina si es que se mostrará </p> <p> o se ocultarán las actividades calificadas en el bloque.</p>';
$string['config_shownotloggedinuser'] = 'Mostrar usuarios no-en-línea';
$string['config_shownotloggedinuser_help'] = '<p>Esta configuración determina si es que se mostrará </p> <p> o se ocultará el número de estudiantes no conectados en la semana anterior.</p>';
$string['config_showreportlink'] = 'Mostrar enlace a reporte';
$string['config_showreportlink_help'] = '<p>Esta configuración determina si es que se mostrará </p> <p> o se ocultará el enlace hacia reporte en el bloque.</p>';
$string['config_showsaved'] = 'Mostrar actividades en borrador';
$string['config_showsaved_help'] = '<p>Esta configuración determina si es que se mostrarán </p> <p> o se ocultarán las actividades en borrador del estudiante en el bloque.</p>';
$string['config_showstudentmarkslessthanfiftypercent'] = 'Mostrar puntajes de estudiantes menores al 50%';
$string['config_showstudentmarkslessthanfiftypercent_help'] = '<p>Esta configuración determina si es que se mostrará </p> <p> o se ocultará el número de estudiantes con puntajes inferiores al 50%.</p>';
$string['config_showstudentnotsubmittedassignment'] = 'Mostrar estudiantes que no enviaron tarea';
$string['config_showstudentnotsubmittedassignment_help'] = '<p>Esta configuración determina si es que se mostrará </p> <p> o se ocultará el número de estudiantes que no enviaron su tarea la semana pasada.</p>';
$string['config_showunmarked'] = 'Mostrar actividades no calificadas';
$string['config_showunmarked_help'] = '<p>Esta configuración determina si es que se mostrarán </p> <p> o se ocultarán las actividades no-calificadas en el bloque.</p>';
$string['config_title'] = 'Título de instancia';
$string['config_title_help'] = '<p>Esta configuración permite cambiar el título del bloque </p> <p>Si el encabezado del bloque está oculto, el título no aparecerá.</p>';
$string['config_unsubmitted'] = 'Mostrar actividades no enviadas';
$string['config_unsubmitted_help'] = '<p>Esta configuración determina si es que se mostrarán </p> <p> o se ocultarán las actividades no-enviadas en el bloque.</p>';
$string['coursecategories'] = 'Categorías de curso';
$string['coursecategoriesincluded'] = 'Categorías de curso incluidas';
$string['cron'] = 'Trabajo de CRON';
$string['descconfig'] = '<p>Active esta opción para ocultar todos los bloques al ver la interfaz para Gestionar Calificaciones y proporcionar un aspecto menos amontonado. Por favor tenga en cuenta que ANTES de activar esta opción, Usted necesita añadir el siguiente código a  <b><em>susitiomoodle/theme/base/config.php</em>.</b></p> <p></p> <pre><code style="font-size:12px; color:#FF7600;"> // Ocultar columnas de bloques izquierdo y derecho al ver el Gestor de Calificaciones \'markingmanager\' => array(
    \'file\' => \'general.php\',
    \'regions\' => array(),
    \'options\' => array(\'noblocks\'=>true),
),
</code></pre>
DESPUÉS de añadir el código superior, su archivo deberá de verso como la imagen <a href="http://moodlefn.com/docs/marking_manager_no_blocks.png">mostrada aquí</a>.';
$string['displaytitle'] = 'Actividades enviadas';
$string['editortoggle'] = 'Alternador editor en-línea';
$string['enrolledcourses'] = 'Cursos inscritos';
$string['experimental'] = 'Experimental';
$string['fn_marking:addinstance'] = 'Añadir instancia';
$string['fn_marking:myaddinstance'] = 'Añadir un nuevo bloque de Gestor Calificador al Tablero';
$string['fn_marking:viewblock'] = 'Ver bloque';
$string['fn_marking:viewreadonly'] = 'Ver solo lectura';
$string['forum'] = 'Foro';
$string['grade'] = '<b>Calificación: </b>';
$string['gradebook'] = 'Libro de calificaciones';
$string['gradeoverridedetected'] = 'Anulación de calificación detectada';
$string['gradeslink'] = 'Calificaciones';
$string['gradingstudentprogress'] = 'Mostrando < {$a->index} de {$a->count} >';
$string['headertitle'] = 'Gestor Calificador';
$string['help'] = 'Ayuda';
$string['hideonlineeditor'] = 'Ocultar editor en-línea';
$string['includecourses'] = 'Cursos a incluir';
$string['includehiddencourses'] = 'Incluir cursos ocultos';
$string['include_orphaned'] = 'Incluir actividades huérfanas';
$string['keepseparate'] = 'Mantener separadas tareas en borrador';
$string['labelnoblocks'] = 'Ocultar todos los bloques';
$string['lastrefreshrequired'] = 'Último refresco: Actualización necesaria';
$string['lastrefreshtime'] = 'Último refresco: hace {$a}';
$string['lastrefreshupdating'] = 'Último refresco: actualizando';
$string['listcourseszeroungraded'] = 'Enlistar cursos con cero actividades sin-calificar';
$string['manual'] = 'Manual';
$string['manualgrading'] = 'Calificación Manual';
$string['marked'] = 'Calificado';
$string['markinmanagerscoursecats'] = 'Gestor Calificador  - Categorías de Curso';
$string['markinmanagerscoursecatsdesc'] = 'Las categorías de curso seleccionadas que serán procesadas por el bloque del Gestor Calificador en la Portada y en el Tablero de Moodle.';
$string['moodledefaultview'] = 'Vista por defecto de Moodle';
$string['moodlegradebook'] = 'Abrir Libro de Calificaciones de Moodle';
$string['morethan10'] = 'Hay más de 10 cursos con trabajos sin-calificar.';
$string['name'] = 'Nombre';
$string['no'] = 'No';
$string['nograde'] = 'Sin calificación';
$string['notloggedin'] = '- sin ingreso en';
$string['notsubmittedany'] = '- sin envío en';
$string['opengradereport'] = 'Abrir reporte de calificación';
$string['opensitesettingspage'] = 'Página de configuraciones de sitio abierto';
$string['overallfailinggrade'] = '- calificación menor de';
$string['pagelayout'] = 'Diseño de página';
$string['pageload'] = 'Carga de página';
$string['pluginname'] = 'Gestor Calificador NED';
$string['pluginnametext'] = 'Nombre de plug-in';
$string['plugintitle'] = 'Gestor Calificador';
$string['posts'] = 'Publicaciones';
$string['progressreport'] = 'Reporte del progreso';
$string['quiz'] = 'Examen';
$string['rating'] = 'Valoración';
$string['refreshmodecourse'] = 'Modo refrescar bloque - Curso';
$string['refreshmodefrontpage'] = 'Modo refrescar bloque - Portada';
$string['refreshnow'] = 'Refrescar ahora';
$string['removeoverride'] = 'Quitar anulación';
$string['replies'] = 'Responde';
$string['reportslink'] = 'Reportes';
$string['save'] = 'Guardar';
$string['saved'] = 'Borrador';
$string['scale'] = 'Escala';
$string['sectiontitles'] = 'Títulos de secciones';
$string['selectcategories'] = 'Seleccionar categorías';
$string['selectedcourses'] = 'Cursos seleccionados (debajo)';
$string['setblocktitle'] = 'Configurartítulo del bloque';
$string['setnumberofdays'] = 'Configurar número de días';
$string['setpercentmarks'] = 'Configurar porcentaje de puntos';
$string['show'] = 'Mostrar';
$string['showcourselink'] = 'Enlace del curso';
$string['showgradebook'] = 'Libro de calificaciones';
$string['showgradeslink'] = 'Reporte del Progreso';
$string['showmarked'] = 'Actividades calificadas';
$string['shownotloggedinuser'] = 'Mostrar usuarios no conectados';
$string['showonlineeditor'] = 'Mostrar editor en-línea';
$string['showreportslink'] = 'Lista de Estudiantes';
$string['showsaved'] = 'Mostrar actividades en borrador';
$string['showstudentmarkslessthanfiftypercent'] = 'Mostrar número de estudiantes con puntajes menores al 50%';
$string['showstudentnotsubmittedassignment'] = 'Mostrar número de estudiantes que no enviaron tareas';
$string['showtopmessage'] = 'Mostrar mensaje arriba de interfaz';
$string['showunmarked'] = 'Requiere calificarse';
$string['showunsubmitted'] = 'Actividades no enviadas';
$string['simplegradebook'] = 'Reporte del Progreso';
$string['sort'] = 'Ordenar';
$string['student'] = 'Estudiante';
$string['student_have_posted'] = 'Los siguientes estudiantes han publicado en este foro:';
$string['studentlist'] = 'Lista de estudiantes';
$string['studentssubmission'] = 'Envío del Estudiante';
$string['successful'] = 'Exitoso';
$string['teachersfeedback'] = 'Retroalimentación del Profesor';
$string['title:failingwithgradelessthanxpercent'] = 'Los siguientes estudiantes tienen una calificación global menor de';
$string['title:markslessthanxpercent'] = 'Los siguientes estudiantes no han enviado ninguna actividad por';
$string['title:notlogin'] = 'Los siguientes estudiantes no se han conectado por';
$string['title:notsubmittedanyactivity'] = 'Los siguientes estudiantes no han enviado ninguna actividad por';
$string['title:saved'] = 'Los siguientes estudiantes tienen actividades en borrador';
$string['topmessage'] = 'Mensaje a mostrar';
$string['ttmarking'] = 'Interfaz para calificar';
$string['type'] = 'Tipo';
$string['unmarked'] = 'Requiere calificar';
$string['unsubmitted'] = 'No enviado';
$string['updatecache'] = 'Actualizar caché';
$string['updatecachewarning'] = '¿Quiere Usted refrescar el bloque de Gestor Calificador ?';
$string['version'] = 'Versión';
$string['view'] = 'Ver';
$string['visitpluginhome'] = 'Visitar página del plugin';
$string['whocanrate'] = 'Quién puede valorar';
$string['yes'] = 'Sí';
