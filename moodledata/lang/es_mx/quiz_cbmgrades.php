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
 * Strings for component 'quiz_cbmgrades', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   quiz_cbmgrades
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accy'] = 'Precisión';
$string['cbm_accy'] = 'Precisión BC';
$string['cbm_av'] = 'Promedio (max=3)';
$string['cbm_bonus'] = 'Bono BC';
$string['cbmexplanations'] = 'Explicaciones PBC:';
$string['cbmgrade'] = 'Calificación BC';
$string['cbmgrades'] = 'Calificaciones PBC';
$string['cbmgradesdownload'] = 'Descarga PBC';
$string['cbmgradesfilename'] = 'cbmgrades';
$string['cbmgrades_help'] = 'Con Puntuación Basada en Certeza (PBC), todas correctas en C=1 (baja certeza) daría una Calificación Moodle del 100%. Las calificación podrían subir hasta 300% si todas las preguntas estuvieran correctas con C=3 (alta certeza). Las Calificaciones Moodle Simples con PBC no son fácilmente comparables con las calificaciones sin la PBC, a menos que se conviertan a Calificaciones PBC (debajo).

**Precisión** es el porcentaje correcto, ignorando la certeza pero ponderando con los valores máximos asignados para cada pregunta. Si el estudiante distingue exitosamente sus respuestas menos confiables de las respuestas más confibles, esto se refleja en un  **Bono BC**,
que es positivo si el total de puntos fuera mayor de lo que podría obtenerse con las mismas respuestas a una certeza uniforme.
La **Certeza BC** (=Certeza + Bono) es la medida más limpia del conocimiento. La **Calificación BC** es la Certeza BC multiplicada por la calificación máxima asignada al examen.';
$string['cbmgradesoptions'] = 'Opciones de Calificaciones PBC';
$string['cbmgradesreport'] = 'Reporte PBC';
$string['cbmgradestitle'] = 'Calificaciones PBC';
$string['chosenresps'] = 'Mostrar puntajes basados en respuestas elegidas, en lugar del examen completo. &nbsp;';
$string['grade'] = 'Calificación Moodle';
$string['marks'] = 'Puntaje Total';
$string['pagesize'] = 'Tamaño de página';
$string['pluginname'] = 'Resumen PBC';
$string['privacy:preference:chosenrs'] = 'Si es que se muestran o no puntajes basados en preguntas elegidas en lugar de todo el examen.';
$string['privacy:preference:qdata'] = 'Si es que se muestran o no los datos para cada Pregunta.';
$string['privacy:preference:qtext'] = 'Si es que se muestran o no las columnas de texto de pregunta.';
$string['privacy:preference:resp'] = 'Si es que se muestran o no las columnas de respuestas de los estudiantes.';
$string['qdata'] = 'Mostrar datos para cada pregunta';
$string['qx'] = 'Preg{$a}';
$string['responses'] = 'Respuestas';
$string['responsex'] = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>Preg{$a}';
$string['scoreschosenrs'] = 'PUNTAJES PBC: ** NOTA Puntos calificados **: Se muestran puntajes basados solamente en las preguntas que respondió el estudiante y no en el examen completo.';
$string['scoreswhole'] = 'PUNTAJES Y CALIFICACIÓN PBC: Mostrando puntajes basados en el examen completo';
$string['showthe'] = 'Opciones:';
