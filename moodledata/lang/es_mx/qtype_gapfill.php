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
 * Strings for component 'qtype_gapfill', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   qtype_gapfill
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addhinttext'] = 'Añadir pista al formato para editar';
$string['addhinttext_text'] = 'Añadir las primeras dos pistas a la sección de Intentos múltiples del formato.';
$string['additemsettings'] = 'Añadir configuraciones del hueco';
$string['answerdisplay'] = 'Mostrar Respuestas';
$string['answerdisplay_help'] = 'Dragdrop (Arrastrar y soltar) muestra una lista de palabras que pueden ser arrastradas hacia los huecos, gapfill (llenar_huecos) muestra los huecos sin opciones de palabras, dropdown (desplegable) muestra  la misma lista de respuestas correctas (y posiblemente incorrectas) para cada campo';
$string['blank'] = 'vacío';
$string['cannotimport'] = 'nopuedeimportar';
$string['casesensitive'] = 'MAYÚS/minúsculas';
$string['casesensitive_help'] = 'Cuando se elige esta opción, si la respuesta correcta fuera GATO, entonces gato se señalaría como una respuesta equivocada.';
$string['correct'] = 'Retroalimentación para correcta.';
$string['correctanswer'] = 'Respuesta correcta';
$string['course'] = 'Ayuda para importar';
$string['coursenotfound'] = 'Curso no encontrado; revise el nombre corto del curso';
$string['courseshortname'] = 'Nombre corto del curso';
$string['courseshortname_help'] = 'Ingrese el nombre corto del curso al que se le importarán preguntas. Esto hace una importación estándar de preguntas XML desde el archivo example_questions.xml en la carpeta del tipo de pregunta gapfill';
$string['delimitchars'] = 'Caracteres delimitadores';
$string['delimitchars_help'] = 'Cambia los caracteres que delimitan un campo y que por defecto son [ ] ,lo que resulta útil para preguntas sobre lenguajes de programación';
$string['delimitset_text'] = 'Configura los delimitadores para los huecos, de forma tal que Usted podría añadir % % para Tres tristes %tigres% tragan  %trigo% en el trigal.';
$string['disableregex'] = 'Deshabilitar Regex';
$string['disableregex_help'] = 'Deshabilitar el procesamiento de expresiones regulares y realizar una comparación estándar de cadenas. Esto puede ser útil para preguntas HTML en donde los paréntesis en ángulo (< and >)  deberían de tratarse literalmente, y en matemáticas, en donde los símbolos como * deberían de verse literalmente en lugar de verlos como expresiones';
$string['disableregexset_text'] = 'Deshabilitar el procesamiento de expresiones regulares de las respuestas';
$string['displaydragdrop'] = 'arrastrar_y_soltar';
$string['displaydropdown'] = 'desplegable';
$string['displaygapfill'] = 'llenarhueco';
$string['distractor1'] = 'azul, zapato, pequeño';
$string['distractor2'] = 'azul, zapato, pequeño';
$string['duplicatepartialcredit'] = 'El crédito es parcial porque Usted tiene respuestas duplicadas';
$string['editquestiontext'] = 'Editar texto de pregunta';
$string['example1'] = 'Arrastrar los verbos a los huecos. Él [rió] y se [sentó]';
$string['example2'] = 'Seleccione los verbos desde los desplegables. Él [rió] y se [sentó]';
$string['example3'] = '¿De donde proviene el canguro? [Australia]. El siguiente hueco aceptará igualmente gato y perro [cat|dog]';
$string['fixedgapsize'] = 'Tamaño fijo de los huecos';
$string['fixedgapsize_help'] = 'Al intentar contestar las preguntas, todos los huecos se configurarán al mismo tamaño que el hueco mayor. Esto remueve el tamaño del hueco como una posible pista para adivinar la respuesta correcta. Por ejemplo, si los huecos fueran [rojo] y [amarillo], sería muy evidente que la palabra \'amarillo\' iría en el hueco más grande.';
$string['fixedgapsizeset_text'] = 'Configura el tamaño de todos los huecos al tamaño del hueco mayor';
$string['gapfill'] = 'LLenarhueco .';
$string['gap_plural'] = 'huecos';
$string['gap_singular'] = 'hueco';
$string['importexamples'] = 'Importar';
$string['incorrect'] = 'Retroalimentación para incorrecta.';
$string['itemsettingsbutton'] = 'Configuraciones del hueco';
$string['itemsettings_button'] = 'Configuraciones del ítem';
$string['itemsettings_button_help'] = 'Hacer clic en este alternador para entrar a las configuraciones para-hueco, tales como retroalimentación para respuestas incorrectas. Haga clic en una palabra hueco-limitada para que emerja el formato de configuraciones';
$string['itemsettingserror'] = 'Solamente funciona con el editor Atto. Vaya a Preferencias de editor para cambiar a Atto';
$string['letterhint0'] = 'La primera letra de la respuesta correcta será añadida a cada hueco incorrecto cuando Usted presione \'Intentar nuevamente\'.';
$string['letterhint1'] = 'La siguiente letra de la respuesta correcta será añadida cuando Usted presione \'Intentar nuevamente\'.';
$string['letterhints'] = 'Pistas de letra';
$string['letterhints_help'] = 'Añadir letra de la respuesta correcta como una pista en modo interactivo cuando se da una respuesta equivocada. Las pistas deben de estar en Intentos múltiples para que esto funcione';
$string['letterhints_text'] = 'Añadir letra de la respuesta correcta como una pista en modo interactivo cuando se da una respuesta equivocada';
$string['moreoptions'] = 'Más Opciones.';
$string['noduplicates'] = 'Sin duplicados';
$string['noduplicates_help'] = 'Cuando se elige, cada respuesta debe ser única, lo que es útil donde cada campo tiene un operador  | (or) ; por ejemplo, ¿cuales son los colores de las medallas olímpicas? y cada campo tiene [oro|plata|bronce] ; si el estudiante escribe oro en cada campo, solamente el primero tendrá puntuación (aunque los otros si tendrán su palomita de correcto). Realmente es más que nada descartar las respuestas duplicadas para fines de puntuación.';
$string['optionsaftertext'] = 'Opciones después del texto';
$string['optionsaftertext_help'] = 'Las opciones arrastrables de respuestas serán mostradas después del cuerpo del texto en lugar de arriba de él.';
$string['optionsaftertext_text'] = 'Configurar a los arrastrables para que estén después del cuerpo del texto';
$string['or'] = 'o';
$string['pleaseenterananswer'] = 'Por favor escriba una respuesta';
$string['pluginname'] = 'LLenar_hueco';
$string['pluginnameadding'] = 'Añadiendo una pregunta de LLenar Hueco.';
$string['pluginnameediting'] = 'Editando LLenar Hueco.';
$string['pluginname_help'] = 'Ponga las palabras para completar dentro de paréntesis cuadrados. Por ejemplo: Tres tristes [tigres] comen trigo en el [trigal]. Los modos de arrastrar_y_soltar y desplegables permiten que una lista aleatorizada de respuestas se muestre y que pueda incluir respuestas opcionales erróneas o distractores.';
$string['pluginnamesummary'] = 'Una pregunta del tipo de llenar hueco. Permite arrastrar-y-soltar o respuestas desplegables con distractores. Sintaxis muy fácil de aprender';
$string['privacy:null_reason'] = 'El tipo de pregunta LLEnarHueco no afecta ni almacena ningún dato por sí mismo.';
$string['questioncatnotfound'] = 'Categoría de pregunta no encontrada; haga <a href={$a}>aquí</a> para inicializar y después en el botón para regresar del navegador';
$string['questionsmissing'] = 'Usted no ha incluido ningún campo en su texto de pregunta';
$string['questiontext'] = 'Texto de la pregunta';
$string['questiontext_help'] = 'Ponga delimitadores alrededor de las palabras que se volverán el texto';
$string['visitquestions'] = 'Haga clic <a href={$a}>aquí</a> para visitar las preguntas';
$string['wronganswers'] = 'Distractores.';
$string['wronganswers_help'] = 'Lista de palabras incorrectas diseñadas para distraer de las respuestas correctas. Cada palabra está separada por comas, solamente aplica en modo de arrastrar-y-soltar/desplegable.';
$string['yougotnrightcount'] = 'Usted completó correctamente {$a->num} {$a->gaporgaps} de entre un total de  {$a->outof}.';
