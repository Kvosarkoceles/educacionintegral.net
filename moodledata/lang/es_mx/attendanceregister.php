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
 * Strings for component 'attendanceregister', language 'es_mx', branch 'MOODLE_33_STABLE'
 *
 * @package   attendanceregister
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['are_you_sure_to_delete_offline_session'] = '¿Está seguro de querer borrar esta sesión fuera de línea?';
$string['attendanceregister:addinstance'] = 'Añadir nuevo registro de asistencia';
$string['attendanceregister:addotherofflinesess'] = 'Puede agregar sesiones fuera de línea al registro de otras personas';
$string['attendanceregister:addownofflinesess'] = 'Puede añadir Sesiones fuera de línea en su propio Registro';
$string['attendanceregister:deleteotherofflinesess'] = 'Puede borrar la sesión fuera de línea de otros';
$string['attendanceregister:deleteownofflinesess'] = 'Puede borrar las sesiones fuera de línea de su propio registro';
$string['attendanceregister:recalcsessions'] = 'Puede forzar re-cálculo de sesiones de registro de asistencia';
$string['attendanceregister:tracked'] = 'Es seguido/supervisado por Registro de Asistencia';
$string['attendanceregister:viewotherregisters'] = 'Puede ver las entradas del registro de asistencia de otros';
$string['attendanceregister:viewownregister'] = 'Puede ver sus propias entradas de registro de Asistencia';
$string['back_to_normal'] = 'Regresar a versión normal';
$string['back_to_tracked_user_list'] = 'Regresar a lista de usuarios supervisados';
$string['click_for_detail'] = 'elija para ver detalles';
$string['comments'] = 'Comentarios';
$string['completiondurationgroup'] = 'Tiempo contado total';
$string['completiontotalduration'] = 'Requerir tiempo [minutos]';
$string['count'] = '#';
$string['crontask'] = 'Recalcular sesiones de registrp-de-asistencia';
$string['dayscertificable'] = 'Días atrás';
$string['dayscertificable_exceeded'] = 'No puede ser más antiguo de {$a} días';
$string['dayscertificable_help'] = 'Limita que tan antiguas pueden ser las sesiones fuera de línea.<br /> Un estudiante no puede anotar una sesión fuera de línea más antigua que este número de días.';
$string['duration'] = 'Duración';
$string['duration_hh_mm'] = '{$a->hours} h, {$a->minutes} min';
$string['duration_mm'] = '{$a->minutes} min';
$string['enable_offline_sessions_certification'] = 'Habilitar sesiones fuera de línea';
$string['end'] = 'Fin';
$string['first_calc_at_next_cron_run'] = 'Cualquier sesión pasada aparecerá en el siguiente Cron';
$string['force_recalc_all_session'] = 'Recalcular todas las sesiones en línea';
$string['force_recalc_all_session_help'] = 'Borrar y recalcular todas las sesiones en línea de todos los usuarios supervisados.<br /> Normalmente Usted <b>no necesita hacerlo</b>!<br /> Las nuevas sesiones son recalculadas automáticamente (después de una demora).<br /> Esta operación puede ser útil <b>solamente</b>: <ul> <li>Después de cambiar  el rol de un Usuario que previamente tenía un rol diferente en alguno de los cursos supervisados (por ejemplo: cambiar de profesor a alumno, cuando los alumnos son supervisados y los profesores no lo son).</li> <li>Después de modificar las configuraciones del Registro que afectan los cálculos de las sesiones (por ejemplo: <i>Modo de Medir Asistencia</i>, <i>Tiempo-fuera de sesión en línea</i>)</li> </ul> Usted <b>no necesita recalcular cuando inscribe a nuevos usuarios</b>!';
$string['force_recalc_all_session_now'] = 'Recalculando Sesiones, ahora';
$string['force_recalc_user_session'] = 'Recalcular sesiones en línea de este Usuario';
$string['force_recalc_user_session_help'] = 'Borrar y recalcular todas las sesiones en línea de este Usuario.<br /> Normalmente Usted <b>no necesita hacerlo it</b>!<br /> Las nuevas sesiones son recalculadas automáticamente (después de una demora).<br /> Esta operación puede ser útil <b>solamente</b>: <ul> <li>Después de cambiar  el rol del  Usuario que previamente tenía un rol diferente en alguno de los cursos supervisador (por ejemplo: cambiar de profesor a alumno, cuando los alumnos son supervisados y los profesores no lo son).</li> <li>Después de modificar las configuraciones del Registro que afectan los cálculos de las sesiones (por ejemplo: <i>Modo de Medir Asistencia</i>, <i>Tiempo-fuera de sesión en línea</i>)</li> </ul>';
$string['fullname'] = 'Nombre';
$string['grandtotal_time'] = 'Tiempo total';
$string['insert_new_offline_session'] = 'Insertar una nueva sesión de trabajo fuera de línea';
$string['insert_new_offline_session_for_another_user'] = 'Insertar una nueva sesión de tranbajo fuera de línea para {$a->fullname}';
$string['last_calc_online_session_logout'] = 'Fin de registro de la última sesión en línea (excluyendo sesión actual)';
$string['last_session_logout'] = 'Fin de última sesión';
$string['last_site_access'] = 'Última actividad en el sitio';
$string['last_site_login'] = 'Última entrada al sitio';
$string['login_must_be_before_logout'] = '¡Empezar después del fin!';
$string['logout_is_future'] = 'No puede estar en el futuro';
$string['mandatory_offline_sessions_comments'] = 'Comentarios obligatorios';
$string['mandatoryofflinespecifycourse'] = 'Selección obligatoria de curso';
$string['mandatoryofflinespecifycourse_help'] = 'Es obligatorio especificar un curso para las sesiones fuera de línea';
$string['maynotaddselfcertforother'] = 'Usted no puede añadir una sesión fuera de curso para otros usuarios';
$string['mod_attendance_recalculation'] = 'Módulo recalcula bitácora para actualizaciones de sesiones';
$string['modulename'] = 'Registro de Asistencia';
$string['modulename_help'] = 'El Registro de Asistencia calcula el tiempo que los usuarios emplean trabajando en cursos en línea.<br /> Opcionalmente permite además considerar actividades fuera de línea.<br /> Dependiendo del modo de asistencia, el registro puede supervisar actividades en un solo curso, en todos los cursos de la misma categoría, o en todos los cursos "meta ligados" al curso en donde está el registro.<br /> Las sesiones en línea son calculadas mediante las bitácoras de entradas registradas por Moodle.<br /> <b>Las sesiones nuevas se añaden con cierto retraso por el programa CRON, después que el usuario sale del sitio.</b>';
$string['modulenameplural'] = 'Registros de Asistencia';
$string['never'] = '(nunca)';
$string['no_refcourse'] = '(sin curso especificado)';
$string['no_session'] = 'Sin sesión';
$string['no_session_for_this_user'] = '- Aún no hay sesión para este usuario, todavía -';
$string['no_tracked_user'] = '- ningún usuario seguido/supervisado por el registro de asistencia';
$string['not_specified'] = '(no especificado)';
$string['offline'] = 'Fuera de línea';
$string['offlinecomments'] = 'Comentarios del usuario';
$string['offlinecomments_help'] = 'Habilitar añadir comentarios textuales a las sesiones fuera de línea';
$string['offline_refcourse_duration'] = 'Tiempo fuera de línea, Curso:';
$string['offline_session_comments'] = 'Comentarios';
$string['offline_session_comments_help'] = 'Describe el tópico/tema de la sesión de trabajo fuera de línea';
$string['offline_session_deleted'] = 'Sesión fuera de línea borrada';
$string['offline_session_end'] = 'Fin';
$string['offline_session_ref_course'] = 'Curso de Referencia';
$string['offline_session_ref_course_help'] = 'Seleccione el curso para el que se hizo este trabajo fuera de línea o el curso que cubre el tema de trabajo';
$string['offline_session_saved'] = 'Nueva sesión fuera de línea grabada';
$string['offline_sessions_certification'] = 'Sesiones de trabajo fuera de línea';
$string['offline_sessions_certification_help'] = 'Les permite a los usuarios insertar sesiones de trabajo fuera de línea.<br /> Esto es una forma de <i>Auto-Certificación</i> del trabajo realizado.<br /> Esto puede ser útil si la "burocracia" requiere que se mantengan registros de todas las actividades de los estudiantes.<br /> Solamente los usuarios reales pueden añadir sesiones fuera de línea: <i>Los que se identificaron como...</i> administradores ¡no pueden hacerlo!';
$string['offline_session_start'] = 'Empezar';
$string['offline_session_start_help'] = 'Elegir las fechas de principio y fin  &amp; Hora de la sesión de trabajo fuera de línea que desea anotar.<br /> TLa sesión fuera de línea no puede traslaparse con ninguna sesión previamente grabada, ni en línea ni fuera de línea, ni con la sesión en línea actual.';
$string['offline_sessions_total_duration'] = 'Tiempo total fuera de línea';
$string['offlinespecifycourse'] = 'Especificar curso en sesiones fuera de línea';
$string['offlinespecifycourse_help'] = 'Permitirle al usario seleccionar el curso al que la sesión fuera de línea está relacionado.<br /> Esto solamente tiene sentido si el Registro supervisa más de un curso (por ejemplo: El modo de asistencia es  "Categoría" or "Meta-ligado")';
$string['online'] = 'En línea';
$string['online_offline'] = 'En/Fuera de línea';
$string['online_sessions_total_duration'] = 'Duración total de sesiones en línea';
$string['online_session_updated'] = 'Sesiones en línea actualizadas';
$string['online_session_updated_report'] = '{$a->fullname} Sesiones en línea actualizadas: {$a->numnewsessions} nueva(s) encontrada(s)';
$string['onlyrealusercanaddofflinesessions'] = 'Solamente los usuarios reales pueden añadir una sesión fuera de línea';
$string['onlyrealusercandeleteofflinesessions'] = 'Solamente los usuarios reales pueden borrar una sesión fuera de línea';
$string['overlaps_current_session'] = 'Se sobrepone con la sesión en línea actual (desde la entrada actual)';
$string['overlaps_old_sessions'] = 'Se sobrepone con otra sesión, sea en línea o fuera de línea';
$string['participants_attendance_report_viewed'] = 'Reporte de asistencia de participantes visto';
$string['pluginadministration'] = 'Administración del registro de asistencia';
$string['pluginname'] = 'Registro de asistencia';
$string['prev_site_login'] = 'Entrada previa al sitio';
$string['recalc_already_pending'] = '(Ya estaba pendiente de ejecutarse en el cron siguiente)';
$string['recalc_complete'] = 'Re-cálculo de sesiones completado';
$string['recalc_scheduled'] = 'El re-cálculo de la sesión ha sido agendado. Se ejecutará en el siguiente trabajo de Cron';
$string['recalc_scheduled_on_next_cron'] = 'El re-cálculo de la sesión ha sido agendado para realizarse en el siguiente trabajo de Cron';
$string['ref_course'] = 'Curso de Referencia';
$string['registername'] = 'nombre del registro de asistencia';
$string['registertype'] = 'Modo de seguimiento de asistencia';
$string['registertype_help'] = 'Los modos del seguimiento/supervisión de asistencia determinan los cursos supervisados por el registro (por ejemplo: donde las actividades del usuario serán monitoreadas):

* _Solamente este curso_: Solamente en el curso donde está instalado el módulo de registro de asistencia.

* _Todos los cursos en la misma categoría_: La actividad será monitoreada en todos los cursos dentro de la misma categoría en donde está el módulo.

* _Todos los cursos ligados por una meta liga de curso_: La actividad será monitoreada en este curso y en todos los cursos ligados por la liga de Meta curso.';
$string['schedule_reclalc_all_session'] = 'Agendar Re-cálculo de Sesiones';
$string['select_a_course'] = '- Seleccione un curso -';
$string['select_a_course_if_any'] = '- Seleccione un curso, si acaso -';
$string['session_added_by_another_user'] = 'Añadido por: {$a}';
$string['sessions_grandtotal_duration'] = 'Grán total de tiempo';
$string['sessiontimeout'] = 'Tiempo-fuera de sesión en línea';
$string['sessiontimeout_help'] = 'Tiempo-fuera de sesión se emplea para estimar la duración de la sesión en línea.<br /> La sesión en línea seá al menos <b>la mitad</b> de lo que dure el tiempo-fuera.<br /> Observe que si el tiempo-fuera dura mucho tiempo, el registro tiende a sobre-estimar la duración de las sesiones en línea.<br /> si dura muy poco, las sesiones reales se cortarán en muchas sesiones más cortas.<br /> <h3>Explicación completa</h3> Las sesiones de trabajo en línea son <b>estimadas</b> revisando las bitácoras del usuario en los cursos supervisados (vea <i>Modo de seguimiento de asistencia</i>).<br / > Si un período de tiempo transcurrido fue más corto que el que contó el tiempo fuer entre dos entradas en la bitácora, el registro interpreta que el usuario estuvo trabajando en línea de forma contínua (por ejemplo: la sesión continúa).<br /> Si un período de tiempo transcurrido fue más largo que el que contó el tiempo-fuera entre dos entradas en la bitácora, el registro interpreta que el usuario dejó de trabajar en línea (por ejemplo: la sesión terminó) I <b>la mitad</b> del tiempo transcurrido con el tiempo-fuera (por ejemplo: la sesión terminó) y regresó a trabajar para la siguiente entrada al sitio en la bitácora (empezó una sesión nueva)';
$string['show_my_sessions'] = 'Mostrar mis sesiones';
$string['show_printable'] = 'Mostrar versión imprimible';
$string['standardlog_disabled'] = 'La Bitácora Estándar de Moodle etá deshabilitada. Todas las sesiones nuevas de usuarios no son monitoreadas';
$string['standardlog_readonly'] = 'La Bitácora Estándar de Moodle es solo-lectura. Todas las sesiones nuevas de usuario no son monitoreadas';
$string['start'] = 'Principio';
$string['total_time_offline'] = 'Tiempo total fuera de línea';
$string['total_time_online'] = 'Tiempo total en línea';
$string['tracked_courses'] = 'Cursos supervisados/seguidos';
$string['tracked_users'] = 'Usuarios supervisados/seguidos';
$string['type_category'] = 'Todos los cursos en la misma categoría';
$string['type_course'] = 'Únicamente este curso';
$string['type_meta'] = 'Todos los cursos ligados por meta liga a curso';
$string['unknown'] = '(desconocido)';
$string['unreasoneable_session'] = '¿Está seguro? ¡Esto son más de {$a} horas de duración!';
$string['updating_online_sessions_of'] = 'Actualizando sesiones en línea de {$a}';
$string['user_attendance_addoffline'] = 'Añadir una entrada en asistencia de usuario fuera-de-línea';
$string['user_attendance_deloffline'] = 'Eliminar una entrada de usuario en asistencia fuera-de-línea';
$string['user_attendance_details_viewed'] = 'Detalles de asistencia de usuario vistos';
$string['user_sessions_summary'] = 'Resumen de sesiones del usuario';
