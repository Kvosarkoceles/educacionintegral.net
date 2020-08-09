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
 * Strings for component 'local_purgequestioncategory', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   local_purgequestioncategory
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['confirmmessage'] = 'Usted va a purgar una categoría de pregunta. Si Usted continúa, esta categoría y todas sus sub-categorías y las preguntas no-usadas serán eliminadas permanentemente. ¡Esta acción no puede deshacerse!';
$string['confirmpurge'] = 'Confirmar purga de categoría de preguntas';
$string['iconfirm'] = 'Yo confirmo que yo si entiendo lo que estoy haciendo';
$string['infowithmove'] = 'La categoría \'{$a->name}\' contiene {$a->subcategories} subcategorías, {$a->unusedquestions} preguntas no-utilizadas y {$a->usedquestions} preguntas, que no pueden eliminarse (preguntas que todavía están siendo usadas en algunos exámenes existentes). Por favor, elija otra categoría para mover allí las preguntas no-eliminables.';
$string['infowithoutmove'] = 'La categoría \'{$a->name}\' contiene {$a->subcategories} subcategorías y {$a->unusedquestions} preguntas no-utilizadas.';
$string['pluginname'] = 'Purgar categorías de pregunta';
$string['privacy:metadata'] = 'Este plugin no almacena ningún dato personal.';
$string['purgecategories'] = 'Purgar categorías';
$string['purgequestioncategory:purgecategory'] = 'Eliminar categoría de pregunta con todas las preguntas y subcategorías';
$string['purgethiscategory'] = 'Purgar esta categoría';
$string['validationcategory'] = 'Por favor seleccione una categoría válida';
$string['validationconfirm'] = 'Usted tiene que confirmar esta acción';
