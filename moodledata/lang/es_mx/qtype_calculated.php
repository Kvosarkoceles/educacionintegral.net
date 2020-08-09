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
 * Strings for component 'qtype_calculated', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   qtype_calculated
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['additem'] = 'Agregar ítem';
$string['addmoreanswerblanks'] = 'Agregar otra respuesta en blanco.';
$string['addsets'] = 'Agregar conjunto(s)';
$string['answerdisplay'] = 'Mostrar siempre';
$string['answerformula'] = 'Fórmula {$a} de respuesta';
$string['answerhdr'] = 'Respuesta';
$string['answerstoleranceparam'] = 'Parámetros de tolerancia en las respuestas';
$string['answerwithtolerance'] = '{$a->answer} (±{$a->tolerance} {$a->tolerancetype})';
$string['anyvalue'] = 'Cualquier valor';
$string['atleastoneanswer'] = 'Necesita proporcionar al menos una respuesta.';
$string['atleastonerealdataset'] = 'Debe haber por lo menos un conjunto de datos reales en el texto de la pregunta';
$string['atleastonewildcard'] = 'Debe haber al menos un comodín en la fórmula de respuesta o texto de la pregunta';
$string['calcdistribution'] = 'Distribución';
$string['calclength'] = 'Posiciones Decimales';
$string['calcmax'] = 'Máximo';
$string['calcmin'] = 'Mínimo';
$string['choosedatasetproperties'] = 'Elija las propiedades del conjunto de datos de los comodines';
$string['choosedatasetproperties_help'] = 'Un conjunto de datos es un conjunto de valores que sustituyen a un comodín. Usted puede crear un conjunto de datos privado para una pregunta determinada o un conjunto de datos compartido que puede ser utilizado en otras preguntas calculadas dentro de la categoría.';
$string['correctanswerformula'] = 'Fórmula para calcular la respuesta correcta';
$string['correctanswershows'] = 'La respuesta correcta muestra';
$string['correctanswershowsformat'] = 'Formato';
$string['correctfeedback'] = 'Para cualquier respuesta correcta';
$string['dataitemdefined'] = 'con {$a} valores numéricos ya definidos como disponibles';
$string['datasetrole'] = 'Los comodines <strong>{x..} </strong> se sustituirán por valores numéricos de entre su conjunto de datos';
$string['decimals'] = 'con {$a}';
$string['deleteitem'] = 'Eliminar ítem';
$string['deletelastitem'] = 'Eliminar último ítem';
$string['distributionoption'] = 'Elegir opción de distribución';
$string['editdatasets'] = 'Editar el conjunto de datos de los comodines';
$string['editdatasets_help'] = 'Los valores comodín se pueden crear mediante la introducción de un número en cada campo "comodín" y clic en el botón añadir. Para generar automáticamente 10 o más valores, seleccione el número de valores necesarios antes de hacer clic en el botón añadir. Una "distribución uniforme" significa que cualquier valor entre los límites establecidos tiene la misma probabilidad de que se genere;  una "distribución log-uniforme" significa que los valores situados hacia el límite inferior tienen más probabilidad.';
$string['existingcategory1'] = 'usará un conjunto de datos compartidos ya existente';
$string['existingcategory2'] = 'un archivo de un conjunto existente de archivos que también son usados por otras preguntas de esta categoría';
$string['existingcategory3'] = 'un enlace de un conjunto existente de enlaces que también son usados por otras preguntas de esta categoría';
$string['forceregeneration'] = 'forzar regeneración';
$string['forceregenerationall'] = 'forzar regeneración de todos los comodines';
$string['forceregenerationshared'] = 'forzar regeneración solamente de comodines no-compartidos';
$string['functiontakesatleasttwo'] = 'La función {$a} debe tener al menos dos argumentos';
$string['functiontakesnoargs'] = 'La función {$a} no toma ningún argumento';
$string['functiontakesonearg'] = 'La función {$a} debe tener exactamente un argumento';
$string['functiontakesoneortwoargs'] = 'La función {$a} debe tener o uno o dos argumentos';
$string['functiontakestwoargs'] = 'La función {$a} debe tener exactamente dos argumentos';
$string['generatevalue'] = 'Generar un nuevo valor entre';
$string['getnextnow'] = 'Obtener un nuevo \'elemento a añadir\' ahora';
$string['hexanotallowed'] = 'El valor en formato hexadecimal {$a->value} del conjunto de datos <strong>{$a->name}</strong> no está permitido';
$string['illegalformulasyntax'] = 'sintaxis ilegal de fórmula que empieza con \'{$a}';
$string['incorrectfeedback'] = 'Para cualquier respuesta incorrecta';
$string['itemno'] = 'Ítem {$a}';
$string['itemscount'] = 'Items<br />Frecuencia';
$string['itemtoadd'] = 'Item para agregar';
$string['keptcategory1'] = 'usará el mismo conjunto de datos compartidos que antes';
$string['keptcategory2'] = 'un archivo de la misma categoria de conjunto de datos reutilizable que antes';
$string['keptcategory3'] = 'un enlace de la misma categoría  de conjunto de datos reutilizable que antes';
$string['keptlocal1'] = 'usará el mismo conjunto de datos privado que antes';
$string['keptlocal2'] = 'un archivo del mismo conjunto privado de archivos de preguntas que antes';
$string['keptlocal3'] = 'un enlace del mismo conjunto privado de enlaces de preguntas que antes';
$string['lengthoption'] = 'Elegir opción de largo';
$string['loguniform'] = 'Log-uniforme';
$string['loguniformbit'] = 'dígitos, de una distribución loguniforme';
$string['makecopynextpage'] = 'Página siguiente (nueva pregunta)';
$string['mandatoryhdr'] = 'Hay comodines obligatorios presentes en las respuestas';
$string['max'] = 'Máx';
$string['min'] = 'Mín';
$string['minmax'] = 'Rango de valores';
$string['missingformula'] = 'Falta fórmula';
$string['missingname'] = 'Falta nombre de pregunta';
$string['missingquestiontext'] = 'Falta el texto de la pregunta';
$string['mustenteraformulaorstar'] = 'Debe introducir una fórmula o un asterisco \'*';
$string['newcategory1'] = 'usará un nuevo conjunto de datos compartido';
$string['newcategory2'] = 'un archivo de un nuevo conjunto de archivos que también puede ser empleado por otras preguntas en esta categoría';
$string['newcategory3'] = 'un enlace de un nuevo conjunto de enlaces que también pueden emplearse por otras preguntas de esta categoría';
$string['newlocal1'] = 'usará un nuevo conjunto de datos privado';
$string['newlocal2'] = 'un archivo de un nuevo conjunto de archivos que únicamente será usado en esta pregunta';
$string['newlocal3'] = 'un enlace de un nuevo conjunto de enlaces que  únicamente será usada en esta pregunta';
$string['newsetwildcardvalues'] = 'nueva(s) serie(s) de valores para el comodín';
$string['nextitemtoadd'] = 'Siguiente \'Item a agregar';
$string['nextpage'] = 'Siguiente Página';
$string['nocoherencequestionsdatyasetcategory'] = 'Para la pregunta con id  {$a->qid}, el Id de la categoría {$a->qcat} no es idéntico al id de la categoría {$a->sharedcat} del comodín compartido {$a->name}  . Edite la pregunta.';
$string['nocommaallowed'] = 'El , no puede usarse; use el . como en 0.013 o  1.3e-2';
$string['nodataset'] = 'nada - no es un comodín';
$string['nosharedwildcard'] = 'No hay comodines compartidos en esta categoría';
$string['notvalidnumber'] = 'El valor del comodín no es un número válido';
$string['oneanswertrueansweroutsidelimits'] = 'Al menos una respuesta correcta fuera de los límites de valor verdadero.<br /> Modifique los valores de la configuración de la tolerancia en las respuestas disponibles en Parámetros avanzados';
$string['param'] = 'Parámetro {<strong> {$a} </strong>}';
$string['partiallycorrectfeedback'] = 'Para cualquier respuesta parcialmente correcta';
$string['pluginname'] = 'Calculada';
$string['pluginnameadding'] = 'Agregando una pregunta calculada';
$string['pluginnameediting'] = 'Editando una pregunta calculada';
$string['pluginname_help'] = 'Las preguntas calculadas permiten crear preguntas numéricas utilizando comodines dentro de corchetes { } que se sustituyen por valores concretos cuando se realiza el examen. Por ejemplo, la pregunta "¿Cuál es el área de un rectángulo de longitud {I} y ancho {w}?" tendría como respuesta correcta la fórmual "{l} * {w}" (donde * es el signo de multiplicación).';
$string['pluginnamesummary'] = 'Las preguntas calculadas son similares a preguntas numéricas pero con números seleccionados aleatoriamente de un conjunto cuando se intenta hacer el examen';
$string['possiblehdr'] = 'Es posible que haya comodines presentes únicamente en el texto de la pregunta';
$string['privacy:metadata'] = 'El plugin de tipo de pregunta Calculada no almacena ningún dato personal.';
$string['questiondatasets'] = 'Conjunto de datos de la pregunta';
$string['questiondatasets_help'] = 'Conjunto de datos de comodines que se usarán en cada pregunta individual';
$string['questionstoredname'] = 'Nombre guardado de la pregunta';
$string['replacewithrandom'] = 'Remplazar con un valor aleatorio';
$string['reuseifpossible'] = 're-utilizar el valor previo si estuviera disponible';
$string['setno'] = 'Conjunto {$a}';
$string['setwildcardvalues'] = 'Conjunto(s) de valores de comodin(es)';
$string['sharedwildcard'] = 'Comodín compartido {<strong>{$a}</strong>}';
$string['sharedwildcardname'] = 'Comodiín compartido';
$string['sharedwildcards'] = 'Comodines compartidos';
$string['showitems'] = 'Mostrar';
$string['significantfigures'] = 'con {$a}';
$string['significantfiguresformat'] = 'Cifras significativas';
$string['synchronize'] = 'Sincronizar los datos de conjuntos de datos compartido con otras preguntas dentro de un examen';
$string['synchronizeno'] = 'No sincronizar';
$string['synchronizeyes'] = 'Sincronizar';
$string['synchronizeyesdisplay'] = 'Sincronizar y mostrar el nombre de los conjuntos de datos compartidos como prefijo del nombre de la pregunta';
$string['tolerance'] = 'Tolerancia ±';
$string['tolerancetype'] = 'Tipo';
$string['trueanswerinsidelimits'] = 'Respuesta correcta: {$a->correct} dentro de los límites del valor verdadero {$a->true}';
$string['trueansweroutsidelimits'] = '<span class="error">ERROR Respuesta correcta: {$a->correct} fuera de los límites del valor verdadero {$a->true}</span>';
$string['uniform'] = 'Uniforme';
$string['uniformbit'] = 'decimales, de una distribución uniforme';
$string['unsupportedformulafunction'] = 'La función {$a} no está soportada';
$string['updatecategory'] = 'Actualizar la categoría';
$string['updatedatasetparam'] = 'Actualizar los parámetros del conjunto de datos';
$string['updatetolerancesparam'] = 'Actualizar los parámetros de tolerancia de las respuestas';
$string['updatewildcardvalues'] = 'Actualizar los valores de los comodines';
$string['useadvance'] = 'Utilice el botón avanzar para ver los errores';
$string['usedinquestion'] = 'Usada en Pregunta';
$string['wildcard'] = 'Comodín <strong>{$a}</strong>}';
$string['wildcardparam'] = 'Parámetros de los comodines usados para generar los valores';
$string['wildcardrole'] = 'Los comodines <strong>{x..} </strong> se sustituirán por un valor numérico de entre los valores generados';
$string['wildcards'] = 'Comodines {a}...{z}';
$string['wildcardvalues'] = 'Valores de comodines';
$string['wildcardvaluesgenerated'] = 'Valores de los comodines generados';
$string['youmustaddatleastoneitem'] = 'Debe añadir al menos un conjunto de datos antes de que pueda guardar esta pregunta.';
$string['youmustaddatleastonevalue'] = 'Debe agregar al menos un conjunto de valores para los comodines antes de poder guardar esta pregunta.';
$string['zerosignificantfiguresnotallowed'] = '¡La respuesta correcta no puede tener cero cifras significativas!';
