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
 * Strings for component 'qtype_random', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   qtype_random
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['configselectmanualquestions'] = '¿Puede el tipo de pregunta aleatoria seleccionar una pregunta calificada manualmente cuando está haciendo su selección aleatoria de preguntas obtenidas de de una categoría?';
$string['includingsubcategories'] = 'incluyendo subcategorías';
$string['pluginname'] = 'Aleatoria';
$string['pluginnameediting'] = 'Editando una pregunta aleatoria';
$string['pluginname_help'] = 'Una pregunta aleatoria no es un tipo de pregunta, sino una manera de insertar en un examen una pregunta escogida al azar de entre las de una categoría determinada.';
$string['privacy:metadata'] = 'El tipo de pregunta Aletoria no almacena ningún dato personal.';
$string['randomqname'] = 'Aleatoria ({$a})';
$string['randomqnamefromtop'] = '¡Pregunta aleatoria defectuosa! Por favor, elimine esta pregunta.';
$string['randomqnamefromtoptags'] = '¡Pregunta aleatoria defectuosa! Por favor elimine lesta pregunta.';
$string['randomqnametags'] = 'Aleatoria(s) ({$a->category}, marcas: {$a->tags})';
$string['randomqplusname'] = 'Aleatoria ({$a} y sub-categorías)';
$string['randomqplusnamecourse'] = 'Aleatoria (Cualquier categoría en este curso)';
$string['randomqplusnamecoursecat'] = 'Aleatoria (Cualquier categoría dentro de la categoría del curso {$a})';
$string['randomqplusnamecoursecattags'] = 'Aleatoria(s) (Cualquier categoría dentro de categoría {$a->category} del curso , marcas: {$a->tags})';
$string['randomqplusnamecoursetags'] = 'Aleatoria(s) (Cualquier categoría en este curso, marcas: {$a->tags})';
$string['randomqplusnamemodule'] = 'Aleatoria (Cualquier categoría de este examen)';
$string['randomqplusnamemoduletags'] = 'Aleatoria(s) (Cualquier categoría en este examen, marcas: {$a->tags})';
$string['randomqplusnamesystem'] = 'Aleatoria (Cualquier categoría a nivel del sistema)';
$string['randomqplusnamesystemtags'] = 'Aleatoria(s)  (Cualquier categoría a nivel del sistema,marcas ( tags): {$a->tags})';
$string['randomqplusnametags'] = 'Aleatoria(s) ({$a->category} y subcategorías, marcas: {$a->tags})';
$string['selectedby'] = '{$a->questionname} seleccionado por {$a->randomname}';
$string['selectmanualquestions'] = 'Las preguntas aleatorias pueden usar preguntas calificadas manualmente';
$string['taskunusedrandomscleanup'] = 'Quitar preguntas aleatorias no utilizadas';
