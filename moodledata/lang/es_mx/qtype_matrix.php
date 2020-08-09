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
 * Strings for component 'qtype_matrix', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   qtype_matrix
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['all'] = 'Subpuntos';
$string['allow_dnd_ui'] = 'Permitir uso de Interfaz de Usuario de Arrastrar_y_Soltar';
$string['allow_dnd_ui_descr'] = 'Si se permite, el profesor tendrá la oportunidad de permitir la característica de Arrastrar_y_Soltar a cualquier pregunta Matriz';
$string['cols_description'] = 'Descripción';
$string['colsheader'] = 'Columnas de matriz';
$string['colsheader_desc'] = '<p>TextoCorto será usado cuando esté presente, con el texto más largo como una herramientita.<br />Sea cauteloso acerca de como se mostrará.</p>
<p>Los estudiantes pueden seleccionar una o varias columnas por fila, dependiendo de como ha sido configurada la pregunta, y cada fila recibe una calificación, definida por uno de los métodos de calificar.</p>
<p>La calificación final para la pregunta es un promedio de sus calificaciones para cada una de las filas con la excepción del  tipo Kprime, en donde todas las respuestas deben de ser correctas.</p>';
$string['cols_shorttext'] = 'Respuesta';
$string['false'] = 'Falso';
$string['grademethod'] = 'Método de puntuación';
$string['grademethod_help'] = '<ul>
<li><b>Kprime</b>: El estudiante recibe un punto si todas las respuestas son correctas, medio punto si una respuesta está equivocada y las demás están correctas, y cero puntos en otros casos.
<li><b>Kprime1/0</b>: El estudiante recibe un punto si todas las respuestas son correctas, y cero puntos en otros casos.
<li><b>Subpuntos</b>: Al estudiante se le otorgan sub-puntos por cada respuesta correcta.
</ul>';
$string['kany'] = 'Kprime (al menos una correcta, ninguna respuesta equivocada)';
$string['kprime'] = 'Kprime1/0';
$string['matrixheader'] = 'Matriz de respuesta';
$string['multipleallowed'] = '¿Permitir respuestas múltiples para oraciones de respuesta?';
$string['mustaddupto100'] = 'La suma de todas las ponderaciones no-negativas en cada fila debe ser 100%';
$string['mustdefine1by1'] = 'Usted debe definir cuando menos una matriz de 1 x 1; que tenga o una respuesta corta o una respuesta larga definida para cada fila y columna';
$string['oneanswerperrow'] = 'Usted debe proporcionar una respuesta para cada fila';
$string['pluginname'] = 'Kprime';
$string['pluginnameadding'] = 'Añadiendo una pregunta Kprime';
$string['pluginnameediting'] = 'Editando una pregunta Kprime';
$string['pluginname_help'] = '<p>Las preguntas Kprime consisten de un tronco de pregunta y cuatro oraciones de respuesta correspondientes. Para cada oración de respuesta, los estudiantes tienen que decidir si es acertada o equivocada.</p>';
$string['pluginnamesummary'] = 'En las preguntas Kprime, tienen que estar valorados como "correcta" o "falsa" exactamente cuatro oraciones .';
$string['privacy:metadata'] = 'El plugin de Pregunta Kprime/Matrix no almacena ningún dato personal.';
$string['refresh_matrix'] = 'Refrescar matriz respuesta';
$string['rows_description'] = 'Descripción';
$string['rows_feedback'] = 'Retroalimentación';
$string['rowsheader'] = 'Filas de matriz';
$string['rowsheader_desc'] = '<p>TextoCorto será usado cuando esté presente, con el texto más largo como una herramientita.<br />Sea cauteloso acerca de como se mostrará.</p>
<p>Los estudiantes pueden seleccionar una o varias columnas por fila, dependiendo de como ha sido configurada la pregunta, y cada fila recibe una calificación, definida por uno de los métodos de calificar.</p>
<p>La calificación final para la pregunta es un promedio de sus calificaciones para cada una de las filas con la excepción del  tipo Kprime, en donde todas las respuestas deben de ser correctas.</p>';
$string['rows_shorttext'] = 'Oración de respuesta';
$string['show_non_kprime_gui'] = 'Mostrar interfaz gráfica del usuario para opciones que no son estrictamente opciones de matriz kprime (más de cuatro filas, más de dos columnas, varias opciones).';
$string['shuffleanswers'] = '¿Barajar oraciones de respuesta?';
$string['shuffleanswers_help'] = 'Si se habilita, el orden de las oraciones de respuesta es barajado aleatoriamente para cada intento, siempre y cuando también esté activado el "Barajar dentro de las preguntas".';
$string['true'] = 'Verdadero';
$string['use_dnd_ui'] = '¿Usar Arrastrar y Soltar?';
$string['weightednomultiple'] = 'No tiene sentido elegir califación ponderada cuando no están permitidas respuestas múltiples';
