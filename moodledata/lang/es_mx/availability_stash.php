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
 * Strings for component 'availability_stash', language 'es_mx', branch 'MOODLE_38_STABLE'
 *
 * @package   availability_stash
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['condition'] = 'condición';
$string['description'] = 'Requerir un objeto en el escondite del usuario para ganar acceso.';
$string['exactly'] = 'exactamente';
$string['lessthan'] = 'menos que';
$string['morethan'] = 'más que';
$string['object'] = 'objeto';
$string['objectnnotrequiredtogetaccess'] = 'No hay {$a->condition} {$a->quantity}x \'{$a->object}\'en su escondite.';
$string['objectnrequiredtogetaccess'] = 'Hay {$a->condition} {$a->quantity}x \'{$a->object}\' en su escondite.';
$string['pluginname'] = 'Disponibilidad en escondite';
$string['privacy:null'] = '-';
$string['quantity'] = 'cantidad';
$string['theirstashcontains'] = 'Sus escondites contienen {$a->conditions} {$a->quantity} {$a->objects}';
$string['title'] = 'Esconder objeto';
$string['unknowncondition'] = '[Condición desconocida]';
$string['unknownobject'] = '[Objeto deesconocido]';
$string['youhavegota'] = 'Usted ha conseguido \'{$a->object}\\';
$string['youhavegotlessthanna'] = 'Usted ha conseguido menos de {$a->quantity}x \'{$a->object}\\';
$string['youhavegotmorethanna'] = 'Usted ha conseguido más de {$a->quantity}x \'{$a->object}\\';
$string['youhavegotna'] = 'Usted ha conseguido {$a->quantity}x \'{$a->object}\\';
$string['youhaventgota'] = 'Usted no ha conseguido \'{$a->object}\\';
$string['youhaventgotanya'] = 'Usted no ha conseguido ningún \'{$a->object}\\';
$string['youhaventgotlessthanna'] = 'Usted no tiene menos de {$a->quantity}x \'{$a->object}\\';
$string['youhaventgotmorethanna'] = 'Usted no tiene más de {$a->quantity}x \'{$a->object}\\';
$string['youhaventgotna'] = 'Usted no tiene {$a->quantity}x \'{$a->object}\\';
