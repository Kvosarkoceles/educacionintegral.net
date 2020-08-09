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
 * Strings for component 'qtype_regexp', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   qtype_regexp
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addahint'] = 'Añadir una pista';
$string['addingregexp'] = 'Añadiendo pregunta de expresión regular';
$string['addmoreanswers'] = 'Añadir {no} respuesta(s) más';
$string['answer'] = 'Respuesta:';
$string['answer1mustbegiven'] = 'La respuesta 1 no puede estar vacía';
$string['answermustbegiven'] = 'Usted debe escribir una respuesta si hay una calificación o retroalimentación.';
$string['answerno'] = 'Respuesta: {$a}';
$string['bestcorrectansweris'] = '<strong>La mejor respuesta correcta es:</strong><br />{$a}';
$string['calculatealternate'] = '(Re)calcular respuestas alternas';
$string['caseno'] = 'No, MAY/minúsculas no importa';
$string['casesensitive'] = 'Sensibilidad a MAY/minúsculas';
$string['caseyes'] = 'Si, MAYÚSCULAS/minúsculas si deben coincidir';
$string['clicktosubmit'] = 'Elija el botón <strong>Comprobar (Check)</strong> para enviar esta respuesta <strong>completa</strong>.';
$string['correctansweris'] = '<strong>La respuesta correcta es:</strong><br />{$a}';
$string['correctanswersare'] = '<strong>Las otras respuestas aceptadas son:</strong>';
$string['editingregexp'] = 'Editando pregunta de expresión regular';
$string['filloutoneanswer'] = '<strong>Respuesta 1</strong> debe ser una respuesta correcta (calificación = 100%) y no será analizada como una expresión regular. Las expresiones regulares se escriben para Respuesta 2 en adelante.';
$string['hidealternate'] = 'Ocultar respuestas alternas';
$string['illegalcharacters'] = '<strong>¡ERROR!</strong> En respuestas con una calificación > 0 estos metacaracteres <em>no-escapados (unescaped)</em> no están permitidos: <strong>{$a}</strong>';
$string['letter'] = 'Letra';
$string['misplacedwords'] = 'Palabras mal colocadas';
$string['notenoughanswers'] = 'Este tipo de pregunta requiere al menos una respuesta';
$string['penaltyforeachincorrecttry'] = 'Castigo por intentos incorrectos y Comprar una letra o palabra';
$string['penaltyforeachincorrecttry_help'] = 'Cuando Usted corra sus preguntas empleando el comportamiento de  \'Interactivo con intentos múltiples\' o \'modo Adaptativo\', de forma tal que sus estudiantes tendrán varios intentos para tener correcta la pregunta, entonces esta opción controla que tanto son penalizados por cada intento incorrecto.

El castigo es proporcional al puntaje total de la pregunta; así, si la pregunta vale tres puntos, y el castigo es de 0.3333333, entonces el estudiante obtendrá 3 puntos si la tiene correcta al primer intento, 2 si acierta al segundo intento y 1 si acierta al tercer intento

Si Usted ha configurado el modo del <strong>Botón de Ayuda</strong> a <strong>Letra</strong> o <strong>Palabra</strong> para esta pregunta, <strong><em>el mismo castigo</em></strong> aplica cada vez que el estudiante elige el Botón de <strong>Comprar Letra/Palabra</strong>.';
$string['pleaseenterananswer'] = 'Por favor escriba una respuesta';
$string['pluginname'] = 'Respuesta corta de expresión regular';
$string['pluginnameadding'] = 'Añadiendo una pregunta de expresión regular';
$string['pluginnameediting'] = 'Editando pregunta de expresión regular';
$string['pluginname_help'] = 'Hacer clic derecho en la liga inferior de <em>Más Ayuda</em> para abrir la página de Ayuda en una nueva pestaña/ventana.';
$string['pluginnamesummary'] = 'Similar a respuesta corta, pero el análisis de las respuestas del estudiante se basa en expresiones regulares';
$string['privacy:metadata'] = 'El plugin Tipo de Pregunta RegExp no almacena ningún dato personal.';
$string['regexp'] = 'Respuesta corta expresión regular';
$string['regexperror'] = 'Error en expresión regular:<strong>{$a}</strong>';
$string['regexperrorclose'] = 'cerrado: <strong>{$a}</strong>';
$string['regexperrornopermutations'] = '<strong>¡ERROR!</strong> ¡No hay palabras permutadas dentro de sus corchetes (paréntesis cuadrados) dobles!';
$string['regexperroroddunderscores'] = '<strong>¡ERROR!</strong> ¡Hay un número NON de subrayados dentro de sus dobles corchetes (paréntesis cuadrados)!';
$string['regexperroropen'] = 'abierto: <strong>{$a}</strong>';
$string['regexperrorparen'] = '<strong>ERROR!</strong> ¡Revise sus paréntesis o corchetes (paréntesis cuadrados)!';
$string['regexperrorsqbrack'] = 'Corchetes (Paréntesis cuadrados)';
$string['regexperrortoomanypermutations'] = '<strong>¡ERROR!</strong> ¡No más de 2 conjuntos de permutaciones permitidos por respuesta (corchetes o paréntesis cuadrados dobles)!';
$string['regexp_help'] = 'Hacer clic derecho en la liga inferior sobre  <em>Más Ayuda</em> para abrir la página de Ayuda en una nueva pestaña/ventana.';
$string['regexpsensitive'] = 'Usar expresiones regulares para revisar respuestas';
$string['regexpsummary'] = 'Similar a respuesta corta, pero el análisis de las respuestas del estudiante se basa en expresiones regulares';
$string['settingsformultipletries'] = 'Configuraciones para intentos múltiples y Compras de letras y palabras';
$string['showhidealternate'] = 'Mostrar/Ocultar respuestas alternas';
$string['showhidealternate_help'] = '¿Calcular y mostrar todas las respuestas correctas en este formato? ¡Esto puede tardar bastante tiempo en su servidor, dependiendo del número y complejidad de las expresiones regulares que Usted haya escrito en los campos de Respuesta!

Pero, por otra parte, es la forma recomendada de revisar que sus expresiones para "respuestas correctas" están escritas correctamente.';
$string['studentshowalternate'] = 'Mostrar respuestas alternas';
$string['studentshowalternate_help'] = '¿Mostrar <strong>all</strong> respuestas alternas correctas a los estudiantes en la página de revisión? Si hubiera muchas respuestas alternativas correctas generadas automáticamente, el mostrarlas todas puede hacer la página de revisión bastante larga.';
$string['usehint'] = 'Modo botón de ayuda';
$string['usehint_help'] = 'Elegir cualquier modo diferente a <strong>Ninguna</strong> mostrará un botón que le permite al estudiante obtener la siguiente letra o palabra.

En el modo <strong>Adaptativo</strong> el botón mostrado dirá "<strong>Comprar siguiente letra</strong>" o "<strong>Comprar siguiente palabra</strong>" de acuerdo al modo seleccionado por el profesor.

Para configurar el "costo" de comprar una letra o palabra, vea las configuraciones sobre <strong>Castigo para intentos incorrectos y Comprar una letra o palabra</strong> más abajo en esta página.

En el modo de <strong>Adaptativo Sin castigo</strong> el botón mostrado dirá "<strong>Obtener siguiente letra</strong>" o dirá "<strong>Obtener siguiente palabra</strong>" Por defecto, el botón de ayuda está configurado a  <b>Ninguna</b>';
$string['word'] = 'Palabra';
$string['wordorpunctuation'] = 'Palabra o Puntuación';
$string['wrongwords'] = 'Palabras incorrectas';
