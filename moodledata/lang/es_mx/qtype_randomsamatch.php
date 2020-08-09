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
 * Strings for component 'qtype_randomsamatch', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   qtype_randomsamatch
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['insufficientoptions'] = 'Hay insuficientes opciones para selección para esta pregunta; por lo tanto, no está disponible en este examen. Por favor, informe a su profesor.';
$string['nosaincategory'] = 'No existen preguntas de respuesta corta en la categoría que Usted eligió \'{$a->catname}\'. Elija una categoría diferente, fabrique algunas preguntas dentro de esta categoría.';
$string['notenoughsaincategory'] = 'Solamente hay {$a->nosaquestions} preguntas de respuesta corta en la categoría que eligió \'{$a->catname}\'. Elija una categoría diferente, haga más preguntas en esta categoría o reduzca la cantidad de preguntas que ha seleccionado.';
$string['pluginname'] = 'Relacionar aleatoriamente respuestas-cortas';
$string['pluginnameadding'] = 'Añadiendo una pregunta de relacionar aleatoriamente respuesta-corta';
$string['pluginnameediting'] = 'Editando una pregunta de relacionar aleatoriamente respuesta-corta';
$string['pluginname_help'] = 'Desde la perspectiva del estudiante, se parece a una pregunta de relacionar columnas. La diferencia es que la lista de nombres o aseveraciones (preguntas) para relacionar se eligen aleatoriamente de las preguntas de respuesta corta en la categoría actual. Deberían de existir suficientes preguntas de respuestas cortas sin emplear en la categoría, de lo contrario se mostrará un mensaje de error.';
$string['pluginnamesummary'] = 'Como una pregunta de relacionar columnas, pero creada aleatoriamente a partir de preguntas de respuesta corta en una categoría particular.';
$string['privacy:metadata'] = 'El tipo de pregunta de Relacionar Respuesta Corta Aleatoria no almacena ningún dato personal.';
$string['randomsamatch'] = 'Concordancia de respuesta corta aleatoria';
$string['randomsamatchintro'] = 'Para cada una de las siguientes preguntas, seleccione la respuesta que corresponda del menú';
$string['randomsamatchnumber'] = 'Número de preguntas a seleccionar';
$string['subcats'] = 'Incluir subcategorías';
$string['subcats_help'] = 'Si se activa, las preguntas se eligirán también de subcategorías.';
