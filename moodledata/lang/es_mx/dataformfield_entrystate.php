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
 * Strings for component 'dataformfield_entrystate', language 'es_mx', branch 'MOODLE_33_STABLE'
 *
 * @package   dataformfield_entrystate
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowedto'] = 'Permitido a';
$string['allowedto_help'] = 'Permitido a';
$string['alreadyinstate'] = 'La entrada ({$a->entryid}) ya está en el estado solicitado {$a->newstate}.';
$string['entrystate:addinstance'] = 'Añadir un nuevo estado de Entrada dataformfield';
$string['incorrectstate'] = 'No pudo encontrarse el estado solicitado {$a}.';
$string['instatingdenied'] = 'Usted no tiene permitido cambiar el estado de esta entrada.';
$string['notify'] = 'Notificar';
$string['notify_help'] = 'Notificar';
$string['pluginname'] = 'Estado de entrada';
$string['state'] = 'Estado';
$string['statechanged'] = 'El estado de la entrada con id {$a->id} ha cambiado de {$a->old} a {$a->new}.';
$string['stateicon'] = 'Ícono del estado';
$string['stateicon_help'] = 'Ícono del estado';
$string['states'] = 'Estados';
$string['states_help'] = 'Nombres de estados, uno por línea. Ejemplos:<p>Borrador<br />Enviado<br />Aprobado</p>La lista de estados deberá guardarse antes de poder añadir transiciones.';
$string['transition'] = 'Transición';
$string['transition_help'] = 'Una lista de estados que a los que se puede avanzar desde este estado. CAda estado es una nueva línea.';
$string['transitions'] = 'Transiciones';
