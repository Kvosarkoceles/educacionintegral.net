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
 * Strings for component 'block_people', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   block_people
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['noparticipantslist'] = 'En este curso está prohibido ver la lista de participantes';
$string['participantslist'] = 'Mostrar lista de participantes';
$string['people:addinstance'] = 'Añadir un nuevo bloque de Personas';
$string['people:myaddinstance'] = 'Añadr un nuevo bloque de Personas al Tablero';
$string['pluginname'] = 'Personas';
$string['privacy:metadata'] = 'El plugin Personas proporciona funcionalidad extendida a usuarios Moodle, pero no almacena ningún dato personal.';
$string['resetvisibilityerror'] = 'Órale ... Algo salió mal al actualizar las tablas de la base de datos... <br/> La configuración para "Reiniciar visibilidad" ha sido reiniciada.';
$string['resetvisibilitysuccess'] = '¡Éxito! Todas las instancias de "Bloques_de_personas" son visibles (nuevamente). <br/> La configuración para "Reiniciar visibilidad" ha sido reiniciada.';
$string['setting_hideblock'] = 'Ocultando el bloque';
$string['setting_hideblock_desc'] = 'Al habilitar esta confdiguración, el bloque puede ser ocultado a los usuarios.<br/>
Aviso importante:<br/>
El deshabilitar esta configuración quitará enteramente el mostrar / ocultar el ítem del menú del bloque. Esto significa, que los usuarios ya no pueden ocultar más este bloque; pero por otra parte, los bloques que ya estén ocultos no podrán mostrarse nunca más tampoco. Si Usted quiere habilitar esta característica, considere usar la siguiente función para reiniciar la visibilidad para todas las instancias de "Bloque_personas".';
$string['setting_hideblockheading'] = 'Ocultando el bloque';
$string['setting_linkparticipantspage'] = 'Mostrar elnace hacia la página de participantes';
$string['setting_linkparticipantspage_desc'] = 'Al habilitar esta configuración, será mostrado un enlace hacia la página de participantes del curso dentro del bloque.';
$string['setting_multipleroles'] = 'Mostrar roles múltiples';
$string['setting_multipleroles_desc'] = 'Esta configuración le permite controlar si es que los usuarios que tienen más de uno de los roles configurados arriba son enlistados una vez o varias veces en este bloque. Si esta configuración es deshabilitada, los usuarios solamente serán enlistados con el primer rol que tengan de acuerdo con el orden de rol global. Si esta configuración es habilitada, los usuarios serán enlistados dentro de cada uno de sus roles.';
$string['setting_participantspageheading'] = 'Página de participantes';
$string['setting_resetvisibility'] = 'Reiniciar visibilidad';
$string['setting_resetvisibility_desc'] = 'Al habilitar esta casilla de selección, la visibilidad de todas las intancias del "Bloque_personas" será configurada a visible (nuevamente).<br/>
Por favor tenga en cuenta que: <br/>
Después de guardar esta opción, las operaciones de la base de datos para reiniciar la visibilidad serán disparadas y esta casilla de selección será des-seleccionada nuevamente. La vez próxima que habilite y guarde esta característica desencadenará operaciones de la base de datos para reiniciar nuevamente la visibilidad.';
$string['setting_roles'] = 'Mostrar estos roles';
$string['setting_roles_desc'] = 'Esta configuración le permite controlar cuales usuarios  aparecen en este bloque. Los usuarios necesitan tener al menos uno de estos roles en un curso para ser mostrados en el bloque.';
$string['setting_rolesheading'] = 'Roles';
