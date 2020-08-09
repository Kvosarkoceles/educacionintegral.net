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
 * Strings for component 'gradingform_multigraders', language 'es_mx', branch 'MOODLE_38_STABLE'
 *
 * @package   gradingform_multigraders
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcomment'] = 'Añadir comentarios usados frecuentemente';
$string['auto_calculate_final_method'] = 'Método de auto calcular la siguiente calificación y resultados';
$string['auto_calculate_final_method_0'] = 'última calificación anterior';
$string['auto_calculate_final_method_1'] = 'mínima calificación anterior';
$string['auto_calculate_final_method_2'] = 'máxima calificación anterior';
$string['auto_calculate_final_method_3'] = 'promedio sobre calificaciones anteriores';
$string['auto_calculate_final_method_help'] = 'La calificación final es decidida por el último evaluador; sin embargo, el sistema auto calculará la siguiente calificación dependiendo de las anteriores basándose en el algoritmo aquí elegido. El mismo método es usado para decidir el siguiente resultado también.';
$string['backtoediting'] = 'Regresar a edición';
$string['blind_marking'] = 'Calificación a ciegas';
$string['blind_marking_explained'] = 'La calificación a ciegas está activada; los evaluadores secundarios no pueden ver las calificaciones anteriores, solamente el evaluador inicial/primario puede verlas. Sin embargo, cuando las  calificación es publicada, todos los involucrados pueden ver todas las calificaciones.';
$string['blind_marking_help'] = 'Si se activa, los evaluadores intermedios no pueden ver las calificaciones anteriores; solamente el evaluador original puede verlas.';
$string['clicktocopy'] = 'Copiar anotaciones a comentarios de retroalimentación';
$string['clicktodeleteadmin'] = 'Eliminar todos los datos de calificación para esta tarea';
$string['clicktoedit'] = 'Clic para editar';
$string['comment'] = 'Comentario';
$string['criteria'] = 'Criterio para calificar';
$string['definition'] = 'Definición';
$string['description'] = 'Descripción de plantilla';
$string['editdefinition'] = 'Opciones para editar múltiples calificadores';
$string['err_gradeinvalid'] = 'Calificación inválida';
$string['err_gradeoutofbounds'] = 'La calificación no está dentro del rango permitido';
$string['err_noformula'] = 'No hay fórmula definida para calcular la calificación a partir de los resultados. Por favor, visite la configuración del Libro de calificaciones para definir la fórmula.';
$string['feedback_label'] = 'Anotaciones';
$string['final_grade_check'] = '¿Publicar calificación?';
$string['finalgradefinished_noaccess'] = '{$a} completó la calificación de este ítem. Usted no tiene permitido hacerle cambios.';
$string['final_grade_message'] = 'La calificación está publicada';
$string['finalgradenotdecidedyet'] = 'La calificación final aun no ha sido publicada';
$string['finalgradestarted_noaccess'] = '{$a} comenzó a calificar este ítem y Usted no está en la lista de evaluadores secundarios. Usted no tiene permitido hacer cambios.';
$string['finalgradestarted_nosecond'] = '{$a} comenzó a calificar este ítem y no se solicitó más calificación.';
$string['graderdetails_display'] = 'Calificado por {$a}';
$string['gradingdisabled'] = 'El calificar está deshabilitado para este ítem. Ya sea porque está bloqueado o anulado.';
$string['gradingof'] = '{$a} calificando';
$string['instancedetails_display'] = '{$a} calificaciones añadidas.';
$string['maxscore'] = 'Puntaje máximo';
$string['message_assign_name'] = 'Tarea {$a}';
$string['message_footer'] = '<br/><span style="font-size:80%">[mensaje automatizado generado por plugin multievaluadores]</span><br/>';
$string['message_header'] = '<br/>';
$string['messageprovider:secondgrading'] = 'Notificaciones de tareas que necesitan una segunda calificación.';
$string['message_smallmessage1'] = '{$a} ha solicitado segunda calificación.';
$string['message_smallmessage2'] = 'Por favor tómese un tiempito para calificar este ítem.';
$string['message_smallmessage3'] = '{$a} ha completado segunda calificación.';
$string['message_smallmessage4'] = 'Por favor tómese un tiempito y decida la calificación final.';
$string['message_student_name'] = 'Estudiante {$a}';
$string['message_subject'] = 'Segunda calificación solicitada por {$a}';
$string['message_subject_to_initial'] = 'Segunda calificación completada por {$a}';
$string['needregrademessage'] = 'La definición de multievaluadores ha cambiado después de que este estudiante ha sido calificado. El estudiante no puede ver el resultado hasta que {$a} revise la calificación publicada.';
$string['no_grade'] = 'Sin calificación';
$string['pluginname'] = 'Múltiples evaluadores';
$string['previewdefinition'] = 'Previsualizar definición';
$string['require_second_grader'] = 'Solicitar segundo evaluador';
$string['restoredfromdraft'] = 'NOTA: El último intento para calificar a esta persona no fue guardado apropiadamente, por lo que las calificaciones en borrador han sido restauradas.';
$string['save'] = 'Guardar';
$string['score'] = 'puntaje';
$string['secondary_graders'] = 'Evaluadores secundarios';
$string['secondary_graders_help'] = 'Esta es una lista de profesores a ser notificados en caso de que sea necesario un segundo evaluador para una tarea';
$string['secondary_graders_list'] = 'Segundos evaluadores definidos: {$a}.';
$string['show_intermediary_to_students'] = '¿Mostrarle segundos evaluadores a estudiantes?';
$string['show_intermediary_to_students_explained'] = 'El estudiante también puede ver todas las anotaciones secundarias cuando la calificación sea publicada.';
$string['show_intermediary_to_students_help'] = 'Si se selecciona, los evaluadores secundarios pueden elegir si sus anotaciones pueden ser vistas por los estudiantes cuando la calificación sea publicada.';
$string['timestamp_format'] = 'd/m/Y H:i:s';
$string['useralreadygradedthisitem'] = 'Usted ya ha calificado este ítem; alguien más necesita decidir la calificación final y  y los comentarios de retroalimentación.';
$string['useralreadygradedthisitemfinal'] = 'Solamente {$a} puede cambiar la calificación final y las anotaciones.';
$string['visible_to_students'] = '¿Mostrar anotaciones a estudiantes?';
