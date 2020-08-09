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
 * Strings for component 'block_cohortspecifichtml', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   block_cohortspecifichtml
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cohortselection'] = 'Mostrar a cohortes';
$string['cohortselection_help'] = 'Este bloque solamente será mostrado a miembros de al menos una cohorte seleccionada. Esto significa que si Usted seleccionó, por ejemplo, dos cohortes y un usuario es miembro solamente de una de ellas, el bloque será mostrado al usuario ya que es parte de al menos una cohorte seleccionada. Esto es el equivalente de una conexión O (en inglés, OR).';
$string['cohortspecifichtml:addinstance'] = 'Añadir un nuevo bloque HTML (en cohortes)';
$string['cohortspecifichtml:myaddinstance'] = 'Añadir un nuevo bloque HTML (en cohortes) al Tablero';
$string['cohortspecifichtml:viewalways'] = 'Siempre ver el bloque';
$string['invertcohortselection'] = 'Invertir la selección (ocultarla para cohortes seleccionadas)';
$string['invertcohortselection_help'] = 'Con esta configuración Usted puede invertir su selección. Esto significa que el bloque no será mostrado a miembros de la cohorte seleccionada, sino a todos los demás.<br/>
Ejemplos: <ul> <li>Si un usuario concuerda con al menos una de las cohortes seleccionadas el bloque no le será mostrado, aunque también fuese miembro de una cohorte  que no está seleccionada.</li>
<li>Si Usted ha seleccionado a ninguna de las cohortes y lo invierte, el bloque será visible para  <strong>todos</strong> los usuarios.</li></ul>';
$string['newhtmlcohortblock'] = 'nuevo HTML (en cohortes)';
$string['nocohorts'] = 'Aun no está definida ninguna cohorte. Sin cohortes,  <strong>el bloque no será visible</strong> para nadie, aunque Usted hubiera ingresado contenido arriba. <br/>
Las cohortes pueden ser gestionadas en la <a href="{$a->url}">administración del sitio</a>.';
$string['notvisibletoall'] = '<br/>Este bloque <strong>no es visible</strong> para <strong>ningun</strong> usuarior.';
$string['notvisibletocohorts'] = '<br/><strong>No es</strong> visible para cohortes:';
$string['pluginname'] = 'HTML (en cohortes)';
$string['privacy:metadata:block'] = 'El Bloque HTML (en cohortes) almacena todos sus datos dentro del subsistema block.';
$string['resetcohortselection'] = 'Reiniciar selección';
$string['resetcohortselection_help'] = 'Si Usted habilita y guarda esta configuración, la selección que hizo será reiniciada. Esto significa que ninguna cohorte es seleccionada. Desafortunadamente, este truquillo es necesario, porque el des-seleccionar a todas las cohortes no resultará en ningun cambio ya que un resultado vacío es pasado al servidor. <br/>
Si Usted abre nuevamente la configuración del bloque esta configuración es reiniciada y no será mostrada ya que no hay nada que pudiera ser reiniciado.';
$string['unrestricted'] = 'Sin restricción';
$string['visibletoall'] = '<br/>Este bloque es <strong>visible</strong> parao <strong>todos</strong> los usuarios.';
$string['visibletocohorts'] = '<br/><strong>Solamente</strong> visible para cohortes:';
