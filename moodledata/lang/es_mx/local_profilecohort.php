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
 * Strings for component 'local_profilecohort', language 'es_mx', branch 'MOODLE_38_STABLE'
 *
 * @package   local_profilecohort
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addintro'] = 'En esta pestaña, Usted puede añadir una nueva regla que mapea un valor de campo de perfil de usuario personalizado a una cohorte a la que el usuario será añadido.';
$string['addrule'] = 'Añadir regla para campo de perfil de usuario personalizado ...';
$string['addrules'] = 'Añadir regla nueva';
$string['andnextrule'] = 'La regla siguiente también debe de coincidir, para unirse a esta cohorte.';
$string['cohortsintro'] = 'En esta pestaña, Usted puede seleccionar las cohortes que Usted quiere que este plugin gestione.<br>
Una vez seleccionadas, Usted ya no podrá manualmente actualizar los miembros de estas cohortes. Aun más, cualesquier usuarios que sean actualmente miembros de estas cohortes serán removidos de las cohortes y las cohortes serán entonces llenadas desde cero con los usuarios que coincidan con las reglas que Usted cree con este plugin<br>
Si Usted decide dejar de gestionar una cohorte con este plugin y la des-selecciona aquí, todos los usuarios que actualmente sean miembros de esta cohorte continuarán siendo miembros. Adicionalmente, Usted podrá una vez más actualizar manualmente a los miembros de esta cohorte.';
$string['delete'] = 'Eliminar esta regla';
$string['iffield'] = 'Si {$a}';
$string['invisiblecohortsnote'] = 'Por favor tenga en cuenta que: Este plugin maneja cohortes invisibles completamente iguales a las cohortes visibles. Así, la lista de cohortes también incluye a cohortes que hayan sido creadas como invisibles.';
$string['match_contains'] = 'Contiene';
$string['match_defined'] = 'Está definida';
$string['match_empty'] = 'Está vacío';
$string['match_exact'] = 'Coincide con';
$string['match_notcontains'] = 'No contiene';
$string['match_notdefined'] = 'No está definido';
$string['match_notempty'] = 'No está vacío';
$string['match_notexact'] = 'No coincide con';
$string['matchtype'] = 'Coincide con el tipo';
$string['matchvalue'] = 'Coincide con el valor';
$string['members'] = 'Miembros de cohorte';
$string['membersintro'] = 'En esta pestaña Usted puede ver los usuarios que actualmente son miembros de la cohorte que son gestionados por este plugin.';
$string['moveto'] = 'Mover a posición';
$string['nocohorts'] = 'No hay cohortes disponibles para usarse por este plugin - por favor visite {$a} para crear algunas cohortes';
$string['nofields'] = 'No se han definido campos de perfil de usuario personalizados.<br>Usted necesita definir campos de perfil de usuario personalizados antes de que pueda añadir reglas aquí  - por favor visite {$a} para crear al menos un campo de perfil de usuario personalizado';
$string['nousers'] = 'Esta cohorte, actualmente, no contiene ningún usuario';
$string['pluginname'] = 'Membresía de cohorte basada en campo de perfil';
$string['privacy:metadata'] = 'El plugin de membresía de cohorte basada en campo de perfil proporciona funcionalidad extendida a administradores Moodle, pero no almacena ningún dato personal.';
$string['selectcohorts'] = 'Seleccionar cohorte a ser gestionada';
$string['selectvalue'] = 'el usuario será añadido a la cohorte';
$string['updatecohorts'] = 'Actualizar cohorte desde campos de perfil del usuario personalizados';
$string['viewintro'] = 'En esta pestaña, Usted define las reglas que mapean valores de campo de perfil de usuario personalizado a las cohortes adonde será añadido el usuario.,<br>Las reglas definidas son procesadas en el orden en el que son mostradas. Sin embargo, , un usuario que coincida con varias reglas será añadido a todas las cohortes relevantes.<br>
Por favor tenga en cuenta que: Cuando las reglas son cambiadas, un trabajo en segundo plano será agendado para actualizar a todos los usuarios afectados - habrá un retraso corto (unos cuantos minutos, dependiendo de la configuración de sus trabajos agendados en Moodle y del cronjob del servidor Moodle) antes de que todas las membresías en las cohortes sean actualizadas. Sin embargo, cualquier usuario que ingrese al sitio antes de que terminen los trabajos en segundo plano será actualizado inmediatamente.';
$string['viewrules'] = 'Ver / editar reglas';
