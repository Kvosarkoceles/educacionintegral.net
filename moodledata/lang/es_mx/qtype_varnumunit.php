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
 * Strings for component 'qtype_varnumunit', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   qtype_varnumunit
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmoreunits'] = 'Espacios vacìos para {no} unidades más';
$string['anyotherunit'] = 'Cualquier otra unidad';
$string['correctansweris'] = 'La parte numérica correcta de la pregunta es: {$a}.';
$string['notenoughunits'] = 'Usted no ha escrito ninguna expresión que coincida con las unidades. Usted debe escribir al menos una expresión que coincida con las unidades.';
$string['notvalidnumberprepostfound'] = 'Su respuesta debería de empezar con un número.';
$string['percentgradefornumandunit'] = 'Valor : {$a->num}, Unidades : {$a->unit}';
$string['pluginname'] = 'Conjunto numérico variable con unidades';
$string['pluginnameadding'] = 'Añadiendo una pregunta de conjunto numérico variable con unidades';
$string['pluginnameediting'] = 'Editando una pregunta de conjunto numérico variable con unidades';
$string['pluginname_help'] = 'En respuesta a una pregunta, el alumno escribe un número y las unidades apropiadas.

La pregunta es similar al tipo de pregunta de "Conjunto Numérico Variable", pero acepta, califica y proporciona retroalimentación para las unidades también.

Los números usados en la pregunta y los usados para calcular la respuesta son elegidos a partir de conjuntos predefinidos que pueden ser precalculados desde expresiones matemáticas.

Todas las expresiones son calculadas al momento de la creación de la pregunta y los valores de funciones aleatorias son los mismos para todos los usuarios.';
$string['pluginnamesummary'] = 'Permite una respuesta numérica con unidades; las preguntas pueden tener varias \'variantes\'. las expresiones son pre-evaluadas para cada variante de pregunta';
$string['preservespacenotrequire'] = 'Preservar espacios, pero no requerirlos';
$string['preservespacerequire'] = 'Preservar espacios, y requerir un espacio entre el número y la unidad';
$string['privacy:metadata'] = 'El plugin del conjunto numérico variable no almacena ningún dato personal.';
$string['removeallspace'] = 'Quitar todos los espacios antes de calificar';
$string['replacedash'] = 'Remplazar guiones';
$string['spaceinunit'] = 'Espacios en unidades';
$string['spacesfeedbackmustbegiven'] = 'Usted ha seleccionado la opción "Preservar espacios, y requerir un espacio entre el número y la unidad", pero no especificó retroalimentación para esta opción. Por favor escriba una retroalimentación.';
$string['spacingfeedback'] = 'Espaciar retroalimentación';
$string['spacingfeedback_default'] = 'Usted necesita poner un espacio entre el número y la unidad.';
$string['spacingfeedback_help'] = 'Mensaje a mostrar cuando "Espacio y unidades" es "Preservar espacios y requerir un espacio entre el número y la unidad"';
$string['summarise_response'] = 'Número : "{$a->numeric}", Unidad : "{$a->unit}"';
$string['superscriptallowed'] = 'Permitir, pero no requeriri, superíndices';
$string['superscriptnone'] = 'Sin superíndices';
$string['superscripts'] = 'En respuesta del estudiante';
$string['superscriptscinotationrequired'] = 'Requerir notación científica';
$string['unitduplicate'] = 'La misma expresión pmatch usada más de una vez.';
$string['unitmustbegiven'] = 'Usted ha proporcionado una calificación y /o retroalimentación aquí, pero no ha especificado una expresión que coincida con las unidades. Escriba una expresión o reinicie la calificación a cero y quite la retroalimentación.';
$string['unitno'] = 'Unidad {$a}';
$string['units'] = 'Unidades';
$string['unitsfractionsnomax'] = 'Una de las unidades debería de tener un puntaje de 100%, para que sea posible obtener la calificación máxima para la parte de unidad de la pregunta.';
$string['units_help'] = 'Usar sintaxis de coincidencia de patrón para describir unidades que concuerdan (coinciden).';
$string['unitweighting'] = 'Ponderación relativa de las partes de la respuesta';
$string['value'] = 'Valor';
$string['value_help'] = 'Escriba aquí los valores para "Variables Predefinidas", o verá aquí valores calculados para una \'Variable Calculada\'.';
