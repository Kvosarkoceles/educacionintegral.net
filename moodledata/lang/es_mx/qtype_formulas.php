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
 * Strings for component 'qtype_formulas', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   qtype_formulas
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['abserror'] = 'Error absoluto';
$string['addmorepartsblanks'] = 'Espacios vacíos para {no} partes más';
$string['algebraic_formula'] = 'Fórmula algebraica';
$string['answer'] = 'Respuesta*';
$string['answercombinedunitmulti'] = 'Respuesta y unidad para la parte {$a->part}';
$string['answercombinedunitsingle'] = 'Respuesta y unidad';
$string['answercoordinatemulti'] = 'Respuesta para parte {$a->part} y coordenada {$a->numanswer}';
$string['answercoordinatesingle'] = 'Respuesta para coordenada {$a->numanswer}';
$string['answer_help'] = '**Requerido**.
debe ser una lista de números, o una lista de cadenas de caracteres, dependiendo del tipo de respuesta elegido. Cuando solamente hay una respuesta, puede escribirse directamente un número o una cadena de caracteres. Por favor tenga en cuenta que el número de elementos en la lista define el número de campos de respuesta para esta parte.

<pre class="prettyprint">123<br>[1, 0, 0, 1]<br>a<br>[1, a, b]<br>"exp(-a t)"<br>["vx t","vy t - 0.5 a t^2"]</pre>';
$string['answermark'] = 'Puntuación de parte*';
$string['answermark_help'] = '**Requerido**.
La puntuación para la respuesta de esta parte, que debería ser un número mayor de 0. La puntuación por defecto de la pregunta completa es la suma de las puntuaciones por defecto de todas sus partes.

Nota: Si se deja vacío este campo de puntuación, se eliminará la parte cuando se guarde exitosamente la pregunta.';
$string['answermulti'] = 'Respuesta para parte {$a->part}';
$string['answerno'] = 'Parte {$a}';
$string['answersingle'] = 'Respuesta';
$string['answertype'] = 'Tipo de respuesta';
$string['answertype_help'] = 'Hay cuatro tipos de respuestas.

Las respuestas de número, numérica y fórmula numérica requieren un número o una lista de números como respuesta.

Las respuestas de fórmula algebraica requieren una cadena de caracteres o una lista de cadenas como respuesta.

Los diferentes tipos de respuestas impondrán diferentes restricciones al escribir las respuestas, por lo que los estudiantes necesitarán saber cómo escribirlas. La revisión del formato en el código de la pregunta también les dirá cuando escriban si es que algo está equivocado. Por favor, lea la documentación para los detalles.';
$string['answerunitmulti'] = 'Unidad para parte {$a->part}';
$string['answerunitsingle'] = 'Unidad';
$string['checkvarshdr'] = 'Revisar inicialización de variables';
$string['choiceno'] = 'No';
$string['choiceyes'] = 'Si';
$string['commonsiunit'] = 'Unidad común del Sistema Internacional de Unidades';
$string['correctansweris'] = 'Una respuesta correcta posible es: {$a}';
$string['correctfeedback'] = 'Para cualquier respuesta correcta';
$string['correctfeedback_help'] = 'Esta retroalimentación será mostrada a estudiantes que obtengan la puntuación máxima en esta parte. Puede incluir variables  globales y locales que serán remplazadas por sus valores';
$string['correctness'] = 'Criterio para calificar*';
$string['correctnessexpert'] = 'Experto';
$string['correctness_help'] = '**Requerida**. Usted puede elegir entre error relativo o error absoluto con rango del error. No puede usarse error relativo para el tipo de respuesta algebraica.

Para la definición precisa del error relativo y del error absoluto hay más de un campo de respuesta; vea la documentación.';
$string['correctnesssimple'] = 'Simple';
$string['defaultanswermark'] = 'Puntuación de parte por defecto';
$string['defaultanswermark_desc'] = 'Puntuación de parte por defecto para nuevas partes de pregunta';
$string['defaultanswertype'] = 'Tipo de respuesta por defecto';
$string['defaultanswertype_desc'] = 'Tipo de respuesta por defecto para nuevas partes de pregunta';
$string['defaultcorrectness'] = 'Criterio para calificar por defecto';
$string['defaultcorrectness_desc'] = 'Criterio para calificar por defecto para nuevas partes de pregunta';
$string['defaultunitpenalty'] = 'Penalización unitaria por defecto';
$string['defaultunitpenalty_desc'] = 'Penalización por defecto para unidad equivocada (0-1)';
$string['error_algebraic_var'] = 'Error de sintaxis de variable algebraica.';
$string['error_answerbox_duplicate'] = 'Cada sustituible (placeholder) de respuesta solamente puede usarse una vez en una parte.';
$string['error_answer_missing'] = 'No se ha definido respuesta alguna';
$string['error_answertype_mistmatch'] = 'Discrepancia de tipo de respuesta: Una respuesta de tipo numérica requiere número y un tipo de respuesta algebraica requiere cadena de caracteres';
$string['error_criterion'] = 'El criterio de caplificación debe ser evaluado a un único número.';
$string['error_eval_numerical'] = 'Algunas expresiones no pueden evaluarse numéricamente.';
$string['error_fixed_range'] = 'Error de sintaxis de un rango fijo.';
$string['error_forbid_char'] = 'La fórmula o expresión contiene operadores o caracteres prohibidos.';
$string['error_forloop'] = 'Error de sintaxis del bucle para (for)';
$string['error_forloop_expression'] = 'La expresión del bucle para (for) debe ser una lista.';
$string['error_forloop_var'] = 'La variable del bucle para (for) tiene algunos errores.';
$string['error_func_param'] = 'Número equivocado o tipo equivocado de parámetros para la función $a()';
$string['error_mark'] = 'El puntaje para la respuesta debe tener un valor mayor a 0.';
$string['error_no_answer'] = 'Se requiere al menos una respuesta.';
$string['error_placeholder_format'] = 'Formato del sustituible (placeholder) equivocado o caracteres prohibidos.';
$string['error_placeholder_main_duplicate'] = 'Sustituible (placeholder) duplicado en el texto de la pregunta principal.';
$string['error_placeholder_missing'] = 'Falta el sustituible (placeholder) en el texto de la pregunta principal.';
$string['error_placeholder_sub_duplicate'] = 'El sustituible (placeholder) ya ha sido definido en alguna otra parte.';
$string['error_placeholder_too_long'] = 'La longitud del sustituible (placeholder) está limitada a 40 caracteres.';
$string['error_randvars_set_size'] = 'El número de elementos generables en el conjunto debe de ser mayor a 1.';
$string['error_randvars_type'] = 'Todos los elementos en el conjunto deben de tener exactamente el mismo tipo y tamaño.';
$string['error_rule'] = '¡Error de procesamiento de regla!';
$string['error_ruleid'] = 'No existe tal regla en el archivo con la ID / el nombre.';
$string['error_subexpression_empty'] = 'Una sub-expresión está vacía.';
$string['error_syntax'] = 'Error de sintaxis.';
$string['error_unit'] = '¡Error al evaluar unidad!';
$string['error_unitpenalty'] = 'La penalización debe ser un número entre 0 y 1.';
$string['error_validation_eval'] = '¡Error al intentar evaluación!';
$string['error_vars_array_index_nonnumeric'] = 'No puede usarse un valor no-numérico como índice de lista.';
$string['error_vars_array_index_out_of_range'] = '¡¡¡ Índice fuera de rango !!!';
$string['error_vars_array_size'] = 'El tamaño de la lista debe estar entre 1 y 1000.';
$string['error_vars_array_type'] = 'El elemento en la misma lista debe ser del mismo tipo, ya sea número o cadena de caracteres.';
$string['error_vars_array_unsubscriptable'] = 'La variable es no-subindizable.';
$string['error_vars_bracket_mismatch'] = 'Discrepancia de paréntesis.';
$string['error_vars_end_separator'] = 'Falta un separador de la tarea el final.';
$string['error_vars_name'] = 'La sintaxis del nombre de la variable es incorrecta.';
$string['error_vars_reserved'] = 'La functión {$a}() es reservada ay no puede usarse como variable.';
$string['error_vars_string'] = '¡Error! Ya sea una cadena de caracteres sin comillas dobles de cierre o el uso de un caracter inaceptable, como por ejemplo  \'.';
$string['error_vars_undefined'] = 'La variable \'{$a}\' no ha sido definida.';
$string['feedback'] = 'Retroalimentación de parte general';
$string['feedback_help'] = 'La retroalimentación de esta parte se mostrará a todos los estudiantes. Puede incluir variables globales y locales, que serán remplazadas por sus valores.';
$string['functiontakesatleasttwo'] = 'La función {$a} debe tener al menos dos argumentos';
$string['functiontakesnoargs'] = 'La función {$a} no toma ningun argumento';
$string['functiontakesonearg'] = 'La función {$a} debe tener exactamente un argumento';
$string['functiontakesoneortwoargs'] = 'La función {$a} debe tener ya sea uno o dos argumentos';
$string['functiontakestwoargs'] = 'La función {$a} debe tener exactamente dos argumentos';
$string['globaloptions'] = '[Global] -';
$string['globalvarshdr'] = 'Variables';
$string['illegalformulasyntax'] = 'Sintaxis ilegal de fórmula que comienza con \'{$a}\\';
$string['incorrectfeedback'] = 'Para cualquier respuesta incorrecta';
$string['incorrectfeedback_help'] = 'Esta retroalimentación será mostrada a estudiantes que no obtengan ninguna puntuación en esta parte. Puede incluir variables  globales y locales que serán remplazadas por sus valores';
$string['instantiate'] = 'Instanciar';
$string['mainq'] = 'Pregunta principal';
$string['modelanswer'] = 'Respuesta modelo';
$string['none'] = 'Ninguno/Nada';
$string['number'] = 'Número';
$string['number_unit'] = 'Número y unidad';
$string['numdataset'] = 'Numero de conjunto-de-datos';
$string['numeric'] = 'Numérica';
$string['numerical_formula'] = 'Fórmula numérica';
$string['numerical_formula_unit'] = 'Fórmula numérica y unidad';
$string['numeric_unit'] = 'Numérica y unidad';
$string['otherrule'] = 'Otras reglas';
$string['otherrule_help'] = 'Aquí el autor de la pregunta puede definir reglas de conversión adicionales para otras unidades base aceptables. Vea la documentación para los usos avanzados.';
$string['partiallycorrectfeedback'] = 'Para cualquier respuesta parcialmente correcta';
$string['partiallycorrectfeedback_help'] = 'Esta retroalimentación será mostrada a estudiantes que no obtengan la puntuación máxima en esta parte. Puede incluir variables  globales y locales que serán remplazadas por sus valores';
$string['placeholder'] = 'Nombre del sustituible (placeholder)';
$string['placeholder_help'] = 'Un remplazable (placeholder) es usado para identificar la ubicación en el texto de la pregunta principal que será remplazada por el contenido de la parte. Es una cadena de caracteres alfanuméricos prefijada por \'**#**\', tal como en  #1, #2a, #2b y #A.

Si este  campo se deja vacío, la parte será añadida al final del texto principal de la pregunta.';
$string['pleaseputananswer'] = 'Por favor, escriba una respuesta en cada campo de respuesta.';
$string['pluginname'] = 'Fórmulas';
$string['pluginnameadding'] = 'Añadiendo una pregunta de fórmulas';
$string['pluginnameediting'] = 'Editando una pregunta de fórmulas';
$string['pluginname_help'] = 'Para empezar a usar esta pregunta, por favor lea el <a href="http://code.google.com/p/moodle-coordinate-question/wiki/Tutorial">Tutorial</a>.

Para preguntas posibles, por favor descargue e importe el <a href="http://code.google.com/p/moodle-coordinate-question/downloads/list">Ejemplo</a>,
o vea las <a href="http://code.google.com/p/moodle-coordinate-question/wiki/ScreenShots">Imágenes de pantallas</a>.

Para las opciones en el formato de edición inferior, por favor, lea <a href="http://code.google.com/p/moodle-coordinate-question/wiki/QuestionOptions">Opciones de Preguntas</a>

Para la docuentación completa, por favor lea la <a href="http://code.google.com/p/moodle-coordinate-question/wiki/Documentation">Documentación</a>';
$string['pluginnamesummary'] = 'Tipo de pregunta con valores aleatorios y respuestas múltiples.
El campo de respuesta puede colocarse en cualquier sitio, por lo que pueden crearse preguntas que involucren varias estructuras tales como vectores, polinomios y matrices.
También están integradas ajustadamente y son fáciles de usar otras características tales como revisión de unidades y preguntas con múltiples partes.';
$string['postunit'] = 'Unidad';
$string['postunit_help'] = 'Usted puede especificar aquí la unidad. Este tipo de pregunta está especialmente diseñado para El Sistema Internacional de Unidades, por lo que un espacio vacío representa el \'producto\' de diferente \'unidad base\'  y <tt> ^ </tt> es usado para los exponentes .
También, <tt> / </tt> puede usarse para exponente inverso. Cualquier permutación de la unidad base es tratada igualmente.

Los estudiantes necesitan usar el mismo formato de escritura. Por ejemplo:

<pre class="prettyprint">1 m<br>0.1 m^2<br>20 m s^(-1)<br>400 kg m/s<br>100 kW</pre>';
$string['privacy:metadata'] = 'El plugin del tipo de pregunta Formulas no almacena ningún dato personal.';
$string['qtextpreview'] = 'Previsualizar usando conjunto-de-datos';
$string['questiontext'] = 'Texto de la pregunta';
$string['questiontext_help'] = 'Adicionalmente al texto normal de la pregunta, Usted puede usar aquí variables globales y remplazables (placeholders).

Las variables globales serán remplazadas por sus valores y los remplazables por sus partes. Un ejemplo simple con variables <tt> A, B, C </tt> y remplazables <tt> #1, #2, #3 </tt> es:

<pre class="prettyprint">¿Cual es el resultado de  {A} + {B}?<br>{#1}<br>¿Cual es el resultado de {A} - {B}?<br>{#2}<br>¿Cual es el resultado de {C} / {B}?<br>{#3}</pre>';
$string['relerror'] = 'Error relativo';
$string['renew'] = 'Renovar';
$string['ruleid'] = 'Reglas básicas de conversión';
$string['ruleid_help'] = 'Este tipo de pregunta tiene interconstruido un sistema para conversión de unidades y tiene reglas básicas para conversión.

La regla básica son las reglas del \'Sistema Común de Unidades Internacionales\' , que covertirá unidades estándar tales como la unidad para longitud, digamos km, m, cm y mm.
Esta opción no tiene efecto si no se ha usado una unidad.';
$string['settingusepopup'] = 'Usar herramientas de ayuda (tooltips)';
$string['settingusepopup_desc'] = 'Mostrar respuesta correcta y retroalimentación en una herramienta de ayuda (tooltip)';
$string['subqoptions'] = 'Opciones extra';
$string['subqtext'] = 'Texto de la parte';
$string['subqtext_help'] = 'Aquí pueden especificarse campos con porción texto y porción respuesta. Los remplazables que pueden usarse para especificar lugares con campos de respuesta son:

<pre class="prettyprint">{_0}<br>{_1}<br>{_2}<br>...<br>{_u}</pre>

Los <tt> {_0}, {_1}, {_2} </tt> son los campos de escritura para coordenadas y <tt> {_u} </tt> es el campo de escritura para unidad.

Todos los campos faltantes son anexados automáticamente al final del texto de la parte. Un caso especial es que si <tt> {_0}, {_u} </tt> son especificados consecutivamente, y solamente hay una coordenada y una unidad, como por ejemplo <tt> {_0}{_u} </tt>, estos serán combinados en un único campo de respuesta a escribir para ambos respuesta y unidad.';
$string['unit'] = 'Unidad';
$string['unitpenalty'] = 'Deducción por unidad equivocada (0-1)*';
$string['unitpenalty_help'] = 'Esta opción especifica la puntuación con la que Usted desea penalizar al estudiante por una unidad equivocada.

Toma valores entre 0 y 1. Si fuera 1, tanto la unidad como la respuesta deben ser correctas al mismo tiempo para obtener puntuación; Esto es, la unidad y la respuesta son tratadas como una entidad. Por otra parte, si tuviera valor de 0, los estudiantes pueden obtener puntuación total con solamente la respuesta correcta, todas las cadenas de caracteres aleatorios no tendrían efecto al estar al final de la pregunta.

Por lo tanto, se recomienda usar el valor de 1 siempre que la respuesta no tenga una unidad asociada.';
$string['unsupportedformulafunction'] = 'La función {$a} no está soportada';
$string['vars1'] = 'Variables locales';
$string['vars1_help'] = 'Usted puede definir aquí variables en la misma forma en que se definen las variables globales al nivel de la pregunta. Las variables aquí definidas pueden usarse en la retroalimentación o en la respuesta de la parte y su espectro de visibilidad está limitado a la parte.';
$string['vars2'] = 'Calificando variables';
$string['vars2_help'] = 'Todas las variables locales y las respuestas del alumno pueden usarse aquí. Vea la documentación para usos avanzados.';
$string['varsdata'] = 'Conjunto-de-datos instancializado';
$string['varsglobal'] = 'Variables globales';
$string['varsglobal_help'] = 'Aquí pueden especificarse fórmulas para manipular las variables aleatorias instancializadas (todas las variables aleatorias están disponibles aquí). La lista completa de operadores y funciones matemáticas están dadas en la documentación.

<pre class="prettyprint">a = 1.11111;<br>b = exp(3);<br>c = A + a + b;<br>d = sin(1.5*pi()) + c;<br>e = round(a, 0);<br>f = [0,1,2,3][A];<br>g = ["zero","one","two","three"][A];<br>distance = sqrt(a*a + b*b);</pre>';
$string['varsrandom'] = 'Variables aleatorias';
$string['varsrandom_help'] = 'Se generan nuevos valores aleatorios para estas variables al inicio de cada intento. Puede hacerse al definir un conjunto de elementos entre los cuales elegir:

<pre class="prettyprint">A = {1,2,3};<br>C = {[1,-1], [2,-2], [3,-3]};<br>E = {10:100:10, 100, 1000};</pre>

Los elementos pueden ser números, cadenas de caracteres o listas de ellos. Al inicio de un intento, se sacará un elemento del conjunto y se asignará a la variable en la izquierda. También, para un conjunto de números, Usted puede usar la notación de rango como por ejemplo 10:100:10 (vea el ejemplo E superior.). </p>';
$string['varsstatistics'] = 'Estadísticas';
$string['yougotnright'] = 'Usted ha contestado correctamente {$a->num} parte(s) de esta pregunta.';
