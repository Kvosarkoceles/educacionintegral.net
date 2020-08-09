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
 * Strings for component 'qtype_varnumeric', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   qtype_varnumeric
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['combinedcontrolnamevarnumeric'] = 'entrada numérica';
$string['err_notavalidnumberinanswer'] = 'Usted necesita escribir un número válido aquí en el campo de respuesta.';
$string['err_notavalidnumberinerrortolerance'] = 'Usted ha escrito un número no-válido en el campo de error de respuesta.';
$string['pluginname'] = 'Numérica variable';
$string['pluginnameadding'] = 'Añadiendo una pregunta numérica variable';
$string['pluginnameediting'] = 'Editando una pregunta numérica variable';
$string['pluginname_help'] = 'En respuesta a una pregunta, el alumno escribe un número.

Los números usados en la pregunta y los usados para calcular la respuesta son calculados al vuelo (al instante) a partir de expresiones matemáticas o variables predefinidas.

Todas las expresiones son calculadas al vuelo (al instante) y los valores de funciones aleatorias son diferentes para cada usuario.

Si desea información para una pregunta con valores fijos para un conjunto de preguntas \'variantes\', con expresiones precalculadas y con valores aleatorios iguales para cada Usuario, vea el tipo de pregunta \'Conjunto numérico variable\' (Variable numeric set).';
$string['pluginnamesummary'] = 'Permite una respuesta numérica, las expresiones son evaluadas al instante y la expresión evaluada se compara contra la respuesta del estudiante';
$string['privacy:metadata'] = 'El plugin de variable numérica no almacena ningún dato personal.';
$string['scinotation'] = 'Notación científica';
$string['value'] = 'Valor';
$string['value_help'] = 'Escriba valores para \'Variables predefinidas\' aquí o Usted verá valores calculados que se muestran para una \'Variable calculada\'.

Recuerde que para un valor calculado, el valor que Usted observa será diferente para cada usuario.';
