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
 * Strings for component 'gradingform_guide', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   gradingform_guide
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcomment'] = 'Añadir comentario frecuentemente empleado';
$string['addcriterion'] = 'Añadir criterio';
$string['additionalcomments'] = 'Comentarios adicionales';
$string['additionalcommentsforcriterion'] = 'Comentarios adicionales para criterio, {$a}';
$string['alwaysshowdefinition'] = 'Mostrar definición de la guía a estudiantes';
$string['backtoediting'] = 'Regresar a editar';
$string['clicktocopy'] = 'Elija para copiar este texto a la retroalimentación de criterio';
$string['clicktoedit'] = 'Elija para editar';
$string['clicktoeditname'] = 'Elija para editar nombre del criterio';
$string['comment'] = 'Comentario';
$string['commentpickerforcriterion'] = 'Selector de comentarios frecuentemente usado para {$a} comentarios adicionales';
$string['comments'] = 'Comentarios empleados frecuentemente';
$string['commentsdelete'] = 'Eliminar comentario';
$string['commentsempty'] = 'Elija para editar comentario';
$string['commentsmovedown'] = 'Mover abajo';
$string['commentsmoveup'] = 'Mover arriba';
$string['confirmdeletecriterion'] = '¿Está seguro de querer borrar este item?';
$string['confirmdeletelevel'] = '¿Está seguro de querer borrar este nivel?';
$string['criterion'] = 'Nombre del criterio';
$string['criteriondelete'] = 'Eliminar criterio';
$string['criterionempty'] = 'Elija para editar criterio';
$string['criterionmovedown'] = 'Mover abajo';
$string['criterionmoveup'] = 'Mover arriba';
$string['criterionname'] = 'Nombre de criterio';
$string['criterionremark'] = 'Comentario de criterio {$a}';
$string['definemarkingguide'] = 'Definir guía de puntaje';
$string['description'] = 'Descripción';
$string['descriptionmarkers'] = 'Descripción para los que califican';
$string['descriptionstudents'] = 'Descripción para estudiantes';
$string['err_maxscoreisnegative'] = 'El puntaje máximo no es válido; no se permiten valores negativos';
$string['err_maxscorenotnumeric'] = 'El puntaje máximo del criterio debe ser numérico';
$string['err_nocomment'] = 'El comentario no puede estar vacío';
$string['err_nodescription'] = 'La descripción del estudiante no puede estar vacía';
$string['err_nodescriptionmarkers'] = 'La descripción de quien califica no puede estar vacía';
$string['err_nomaxscore'] = 'El puntaje máximo del criterio no puede estar vacío';
$string['err_noshortname'] = 'El nombre del criterio no puede estar vacío';
$string['err_scoreinvalid'] = 'El puntaje otorgado a  \'{$a->criterianame}\' no es válido, el puntaje máximo es: {$a->maxscore}';
$string['err_scoreisnegative'] = 'El puntaje otorgado a  \'{$a->criterianame}\' no es válido; no se permiten valores negativos';
$string['err_shortnametoolong'] = 'El nombre del criterio debe ser menor de 256 caracteres';
$string['gradingof'] = '{$a} calificando';
$string['guide'] = 'Guía de puntaje';
$string['guidemappingexplained'] = 'ADVERTENCIA: Su guía de puntaje tiene una calificación máxima de <b>{$a->maxscore} points</b> pero la calificación máxima configurada en su actividad es de {$a->modulegrade} Se hará una escala de la calificación máxima en su guía de puntaje respecto a la calificación máxima del módulo.<br /> Los puntajes intermedios serán cpnvertidos respectivamente y redondeados a la calificación disponible más cercana.';
$string['guidenotcompleted'] = 'Por favor proporcione una calificación válida para cada criterio';
$string['guideoptions'] = 'Opciones de guía de puntaje';
$string['guidestatus'] = 'Estatus actual de guía de puntaje';
$string['hidemarkerdesc'] = 'Ocultar descripciones de criterio de calificador';
$string['hidestudentdesc'] = 'Ocultar descripciones de criterio de estudiante';
$string['informationforcriterion'] = 'Información sobre {$a}';
$string['insertcomment'] = 'Insertar comentarios usados frecuentemente';
$string['maxscore'] = 'Puntaje máximo';
$string['name'] = 'Nombre';
$string['needregrademessage'] = 'La definición de la guía de puntaje fue cambiada después de que este estudiante fuera calificado. El estudiante no puede ver esta guía de puntaje hasta que Usted revise la guía de puntaje y actualice la calificación.';
$string['outof'] = 'Puntaje de un total de {$a}';
$string['pluginname'] = 'Guía de puntaje';
$string['previewmarkingguide'] = 'Previsualizar guía de puntaje';
$string['privacy:metadata:criterionid'] = 'Un identificador para un criterio para calificación avanzada.';
$string['privacy:metadata:fillingssummary'] = 'Almacena información acerca de la calificación y retroalimentación de un usuario para la guía de puntaje.';
$string['privacy:metadata:instanceid'] = 'Un identificador para una calificación usada por una actividad.';
$string['privacy:metadata:preference:showmarkerdesc'] = 'Si es que se muestran o no descripciones del criterio del evaluador';
$string['privacy:metadata:preference:showstudentdesc'] = 'Si es que se muestran o no descripciones del criterio del estudiante';
$string['privacy:metadata:remark'] = 'Comentarios relacionados con este criterio de calificación.';
$string['privacy:metadata:score'] = 'Un puntaje para este criterio de calificación.';
$string['regrademessage1'] = 'Usted está a punto de guardar cambios en una guía de puntaje que ya ha sido utilizada para la clasificación. Por favor indique si las calificaciones existentes necesitan revisarse. Si lo requieren, entonces la guía de puntaje se ocultará a los estudiantes hasta que su actividad sea re-calificada';
$string['regrademessage5'] = 'Usted está a punto de guardar cambios significativos en una guía de puntaje que ya ha sido utilizada para la clasificación. El valor del libro de calificaciones no se verá afectado, pero la guía de calificación no será visible para los estudiantes hasta que sus elementos sean recalificados.';
$string['regradeoption0'] = 'No marcar para re-calificar';
$string['regradeoption1'] = 'Marcar para re-calificar';
$string['remark_help'] = 'Ingresar cualquier comentario adicional acerca de este criterio.';
$string['restoredfromdraft'] = 'NOTA: El último intento para calificar a esta persona no se guardó adecuadamente, por lo que se restauraron las calificaciones en borrador (provisionales). Si desea cancelar estos cambios use el botón \'Cancelar\' debajo.';
$string['save'] = 'Guardar';
$string['saveguide'] = 'Guardar guía de puntaje y hacerla disponible';
$string['saveguidedraft'] = 'Guardar como borrador';
$string['score'] = 'puntaje';
$string['scoreforcriterion'] = 'puntaje {$a}';
$string['score_help'] = 'Ingresar un puntaje para {$a->criterion} entre 0 y {$a->maxscore}.';
$string['showmarkerdesc'] = 'Mostrardescripciones de criterio de calificador';
$string['showmarkspercriterionstudents'] = 'Mostrar puntos por criterio a los estudiantes';
$string['showstudentdesc'] = 'Mostrar descripciones de criterio de estudiante';
