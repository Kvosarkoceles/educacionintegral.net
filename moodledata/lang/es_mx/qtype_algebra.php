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
 * Strings for component 'qtype_algebra', language 'es_mx', branch 'MOODLE_37_STABLE'
 *
 * @package   qtype_algebra
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmoreanswerblanks'] = 'Espacios vacíos para {no} Respuestas Más';
$string['addmorevariableblanks'] = 'Espacios vacíos para {no} Variables Más';
$string['algebraoptions'] = 'Opciones';
$string['allfunctions'] = 'Todas las Funciones';
$string['allowedfuncs'] = 'Funciones Permitidas';
$string['allowedfuncs_help'] = '** AÜN NO IMPLEMENTADO **

Estos controles pueden usarse para restringir las funciones que los estudiantes pueden usar en sus respuestas. Si se activa la casilla para "Todas", entonces no habrá restricciones en las funciones que los estudiantes puedan usar en sus respuestas; esta es la configuración por defecto. Para restringir las funciones permitidas, desactive la casilla "Todas" y seleccione las funciones que desea permitir.';
$string['allowedfunctions'] = 'Funciones Permitidas';
$string['answer'] = 'Respuesta: {$a}';
$string['answerboxprefix'] = 'Cadena de texto con la que se prefija la caja de respuesta al mostrarse la pregunta';
$string['answermustbegiven'] = 'Usted debe escribir una respuesta si es que hay una calificación o retroalimentación.';
$string['answerno'] = 'Respuesta {$a}';
$string['answerprefix'] = 'Prefijo de caja de respuesta';
$string['answerprefix_help'] = 'El texto que escriba aquí se pondrá en frente de la caja de respuesta, donde los estudiantes escriben sus respuestas. Por ejemplo, si la pregunta pide la forma de una función, f(x), entonces la cadena "f(x) = " podría escribirse en este campo.';
$string['answerx'] = 'Respuesta {no}';
$string['badclosebracket'] = 'Se encontró un paréntesis de cierre inválido';
$string['badequivtype'] = 'Tipo inválido: solamente puede compararse términos del analizador con otros términos del analizador';
$string['badfuncargs'] = 'Argumentos inválidos para la función \'{$a}\'\\';
$string['braces'] = '\\(...\\)';
$string['brackets'] = '\\[...]';
$string['cdot'] = '\\cdot';
$string['checktolerance'] = 'Revisar tolerancia';
$string['compalgorithm'] = 'Algoritmo de comparación';
$string['compareby'] = 'Algoritmo de comparación';
$string['compareby_help'] = 'Ésto selecciona el método por el cual se compararán las respuestas del estudiante contra todas las respuestas a preguntas. Las diferentes posibilidades son:

 SAGE: usa el programa de Código Libre (Open Source) de <a href="http://www.sagemath.org/">SAGE</a> para realizar una comparación algebraica simbólica completa

Evaluación: Éste método genera números aleatorios para las variables de la pregunta y después evalúa tanto las respuestas del estudiante como las respuestas de la pregunta para ese conjunto de valores.

Equivalencia: Éste es el método más simple. Sólamente realiza la más básica de las comparaciones entre expresiones.';
$string['compareequiv'] = 'Equivalencia';
$string['compareeval'] = 'Evaluación';
$string['comparesage'] = 'SAGE';
$string['correctansweris'] = 'La respuesta correcta es: {$a} dando';
$string['correctanswers'] = 'Respuestas correctas';
$string['decimal'] = '.';
$string['defaultmethod'] = 'Método para comparación por defecto';
$string['disallow'] = 'Respuesta no pemitida';
$string['disallowans'] = 'Respuesta no pemitida';
$string['disallowanswer'] = 'Respuesta no pemitida';
$string['disallow_help'] = 'contiene una expresión que será rechazada como una respuesta, A los estudiantes que escriban respuestas que coincidan con esta, se les impedirá recibir calificación alguna para la pregunta, aún y cuando la respuesta concordaría con la respuesta dada para la pregunta.';
$string['displayresponse'] = 'Mostrar respuesta';
$string['dollar'] = '$...$';
$string['dollars'] = '$$...$$';
$string['duplicatevar'] = 'Nombre de variable duplicado: \'{$a}\' ya está definido.';
$string['dynamic'] = 'Usando solicitud AJAX dinámica';
$string['editingalgebra'] = 'Editando una pregunta de álgebra';
$string['evalchecks'] = 'Revisiones de Evaluación';
$string['exceptionmessage'] = '{$a}';
$string['filloutoneanswer'] = 'Usted debe proporcionar al menos una respuesta posible. Las respuestas que se dejen vacías no se usarán. La primera respuesta que concuerde se usará para determinar la calificación y retroalimentación. Solemente se permiten las variables arriba definidas.';
$string['filloutonevariable'] = 'Usted debe proporcionar al menos una variable.';
$string['formuladisplay'] = 'Méto para mostrar fórmula de respuesta';
$string['host'] = 'URL del host del servidor SAGE';
$string['iframe'] = 'Usando un elemento iframe';
$string['illegalplusminus'] = 'Se encontró un + o - en una ubicación inválida';
$string['illegalvarname'] = 'Nombre de variable ilegal \'{$a}\'; mismo nombre que una función del analizador o una constante especial.';
$string['invalidanswer'] = 'Respuesta inválida o no-reconocida';
$string['mismatchedbracket'] = 'Discrepancia de paréntesis: La pareja de paréntesis de apertura y cierre no son del mismo tipo \'$a\'\\';
$string['mismatchedcloseb'] = 'Discrepancia de paréntesis: Se encontró un paréntesis de cierre sin un paréntesis de apertura';
$string['mismatchedopenb'] = 'Discrepancia de paréntesis: Se encontró un paréntesis de apertura sin un paréntesis de cierre';
$string['missingonearg'] = 'Error de sintaxis: Al operador \'{$a}\' le falta su argumento';
$string['missingtwoargs'] = 'Error de sintaxis: El operador \'{$a}\' requiere dos argumentos';
$string['morethantwoargs'] = 'Tratando de comparar un término con más de 2 argumentos - ¡ no hay código para manejar este caso !';
$string['multiplyoperator'] = 'Operador TeX para multiplicación';
$string['nargswrong'] = 'Número incorrecto de argumentos para el término \'{$a}\'\\';
$string['nchecks'] = 'Número de Revisiones de Evaluación';
$string['nchecks_help'] = 'Número de Revisiones de Evaluación usadas en el Algoritmo de Comparación de Evaluaciones';
$string['noevaluate'] = 'El método de evaluación para el término \'{$a}\' no ha sido implementado';
$string['notanumber'] = 'Valor inválido: se requiere un número.';
$string['notenoughanswers'] = 'Usted debe escribir al menos una respuesta.';
$string['notenoughvars'] = 'Usted debe escribir al menos una variable.';
$string['notopterm'] = 'Error de sintaxis: No se puede condensara un operador único, de nivel superior';
$string['novarmax'] = 'No se especificó límite máximo para la variable';
$string['novarmin'] = 'No se especificó límite mínimo parar la variable.';
$string['options'] = 'Opciones';
$string['parseerror'] = 'Error al analizar función: \'{$a}\'\\';
$string['pluginname'] = 'Álgebra';
$string['pluginnameadding'] = 'Añadiendo una pregunta de álgebra';
$string['pluginnameediting'] = 'Editando una pregunta de álgebra';
$string['pluginname_help'] = 'El estudiante escribe una fórmula como respuesta, que incluye una o más variables. La exactitud se evalúa usando uno de 3 métodos diferentes';
$string['pluginnamesummary'] = 'El estudiante escribe una fórmula que puede incluir una o más variables. La exactitud se evalúa usando uno de 3 métodos diferentes';
$string['port'] = 'Puerto del servidor SAGE';
$string['privacy:metadata'] = 'El plugin de tipo de pregunta Álgebra no almacena ningún dato personal.';
$string['restoreqdbfailed'] = 'Falló la restauración de pregunta de álgebra: error de escritura a BasedeDatos';
$string['restorevardbfailed'] = 'Falló la restauración de variable de pregunta de álgebra: error de escritura a BasedeDatos';
$string['texdelimiters'] = 'Delimitadores para expresiones TeX';
$string['times'] = '\\times';
$string['tolerance'] = 'Tolerancia para Revisiones de Evaluación';
$string['tolerance_help'] = 'Determina la diferencia máxima entre las evaluaciones numéricas de la respuesta del estudiante y las respuestas a la pregunta que se permitirá que cuenten como una coicidencia.';
$string['toleranceltzero'] = 'La tolerancia debe ser mayor o igual a cero';
$string['undeclaredvar'] = 'Variable no declarada \'{$a}\' encontrada';
$string['undefinedfunction'] = 'Función no definida \'{$a}\'\\';
$string['undefinedvar'] = 'Variable(s) {$a} no definida(s) usada en una o más respuestas.';
$string['undefinedvariable'] = 'Variable(s) {$a} no definida(s) encontrada al evaluar numéricamente una expresión';
$string['unknownterm'] = 'Error de sintaxis: Término desconocido encontrado en \'{$a}\' en la expresión';
$string['unusedvar'] = 'Esta variable no es usada por ninguna respuesta.';
$string['uri'] = 'URL del servidor SAGE';
$string['variable'] = 'Variable';
$string['variable_help'] = 'Todos los nombres de variables usados en respuestas deben escribirse aquí. Los valores máximo y mínimo solamente son necesarios sis e usa el algoritmo de comparación de Evaluación.';
$string['variablename'] = 'Nombre';
$string['variableno'] = 'Variable {$a}';
$string['variables'] = 'Variables';
$string['variablex'] = 'Variable {no}';
$string['varmax'] = 'Valor Méximo';
$string['varmin'] = 'Valor Mínimo';
$string['varmingtmax'] = 'El valor mínimo debe ser menor que el valor máximo.';
