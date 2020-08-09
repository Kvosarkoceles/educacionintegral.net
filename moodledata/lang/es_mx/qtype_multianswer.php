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
 * Strings for component 'qtype_multianswer', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   qtype_multianswer
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['confirmquestionsaveasedited'] = 'Confirmo que deseo que la pregunta se guarde como editada';
$string['confirmsave'] = 'Confirmar y luego guardar {$a}';
$string['correctanswer'] = 'Respuesta correcta';
$string['correctanswerandfeedback'] = 'Respuesta correcta y Retroalimentación';
$string['decodeverifyquestiontext'] = 'Decodificar y verificar el texto de la pregunta';
$string['invalidmultianswerquestion'] = 'Respuestas incrustadas inválidas en pregunta  (Cloze) ({$a}).';
$string['layout'] = 'Esquema';
$string['layouthorizontal'] = 'Fila horizontal de botones de selección';
$string['layoutmultiple_horizontal'] = 'Fila horizontal de casillas_de_selección';
$string['layoutmultiple_vertical'] = 'Fila vertical de casillas_de_selección';
$string['layoutselectinline'] = 'Menú desplegable en línea en el texto';
$string['layoutundefined'] = 'Esquema indefinido';
$string['layoutvertical'] = 'Columna vertical de botones de seleción';
$string['nooptionsforsubquestion'] = 'Imposible conseguir opciones para la parte de la pregunta # {$a->sub} (question->id={$a->id})';
$string['noquestions'] = 'La pregunta \'cloze\' (multi-respuesta) "<strong>{$a}</strong>" no contiene ninguna pregunta';
$string['pleaseananswerallparts'] = 'Por favor, responda a todas las partes de la pregunta';
$string['pluginname'] = 'Respuestas incrustadas (Cloze)';
$string['pluginnameadding'] = 'Agregando una pregunta con respuestas incrustadas (Cloze)';
$string['pluginnameediting'] = 'Editando una pregunta con respuestas incrustadas (Cloze)';
$string['pluginname_help'] = 'Respuestas incrustadas (Cloze) consisten en  un  texto con preguntas tipo respuestas de opción múltiple o respuesta corta incrustadas en su interior.';
$string['pluginnamesummary'] = 'Las preguntas de este tipo son muy flexibles, y pueden crearse de varias maneras:

con el <a href=" https://moodle.org/plugins/tinymce_clozeeditor">plugin adicional \'Editor cloze\' para TinyMCE</a> si usa el antiguo editor TinyMCE,

con el <a href="
https://moodle.org/plugins/atto_cloze">plugin adicional \'Editor cloze\' para Atto)</a> si usa el nuevo editor Atto,

con el <a href=" http://projects.ael.uni-tuebingen.de/quiz/htmlarea/">Online Cloze Question Quiz Generator</a>,

o introduciendo texto que contiene códigos especiales.

Los tres métodos crean preguntas incrustadas de opción múltiple, de respuestas cortas y numéricas.';
$string['privacy:metadata'] = 'El tipo de pregunta de Respuestas Incrustadas (CLOZE) no almacena ningún dato personal.';
$string['qtypenotrecognized'] = 'tipo de pregunta {$a} no reconocido';
$string['questiondefinition'] = 'Definición de la pregunta';
$string['questiondeleted'] = 'Pregunta eliminada';
$string['questioninquiz'] = '<ul> <li>añadir o borrar preguntas, </li> <li>cambiar el orden de las preguntas dentro del texto,</li> <li>cambiar el tipo de pregunta (numérica, respuesta corta, opción múltiple). </li></ul>';
$string['questionnotfound'] = 'Imposible encontrar la pregunta de la parte #{$a} de la pregunta';
$string['questionsadded'] = 'Pregunta agregada';
$string['questionsaveasedited'] = 'La pregunta se guardará como editada.';
$string['questionsless'] = '{$a} pregunta(s) menos que en la pregunta multi-respuesta almacenada en la base de datos.';
$string['questionsmissing'] = 'No hay preguntas válidas, escriba al menos una pregunta incrustada';
$string['questionsmore'] = '{$a} pregunta(s) más que en la pregunta multi-respuesta almacenada en la base de datos.';
$string['questiontypechanged'] = 'Se ha modificado este tipo de pregunta';
$string['questiontypechangedcomment'] = 'Al menos un tipo de pregunta ha sido cambiado <br >¿Acaso Usted añadió, borró o movió alguna pregunta?<br >Vea hacia adelante.';
$string['questionusedinquiz'] = 'Esta pregunta es usada en {$a->nb_of_quiz} examen(es), intento(s) total(es) : {$a->nb_of_attempts}';
$string['storedqtype'] = 'Tipo de pregunta guardada {$a}';
$string['subqresponse'] = 'parte {$a->i}: {$a->response}';
$string['unknownquestiontypeofsubquestion'] = 'Tipo de pregunta desconocido: {$a->type} de a parte de pregunta # {$a->sub}';
$string['warningquestionmodified'] = '<b>ADVERTENCIA</b>';
$string['youshouldnot'] = '<b>USTED NO DEBERÍA</b>';
