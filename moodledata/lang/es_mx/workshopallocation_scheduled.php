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
 * Strings for component 'workshopallocation_scheduled', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   workshopallocation_scheduled
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['crontask'] = 'Procesamiento en segundo plano para asignación agendada';
$string['currentstatus'] = 'Estatus actual';
$string['currentstatusexecution'] = 'Estatus';
$string['currentstatusexecution1'] = 'Ejecutado en {$a->datetime}';
$string['currentstatusexecution2'] = 'Será ejecutado niuevamente en {$a->datetime}';
$string['currentstatusexecution3'] = 'Será ejecutado en {$a->datetime}';
$string['currentstatusexecution4'] = 'Esperando ejecución';
$string['currentstatusnext'] = 'Siguiente ejecución';
$string['currentstatusnext_help'] = 'En algunos casos, la asignación se agendará para ser ejecutada automáticamente de nuevo aún cuando ya hubiese sido ejecutada. Esto puede suceder si la fecha límite para envíos ha sido ampliada, por ejemplo';
$string['currentstatusreset'] = 'Reiniciar';
$string['currentstatusreset_help'] = 'El guardar este formato con la casilla marcada resultará en que se reinicie el estatus actual. Toda la información sobre la ejecución previa se quitará de forma tal que pueda ejecutarse de nuevo la asignación (si está habilitada arriba).';
$string['currentstatusresetinfo'] = 'Marque la casilla y guarde el formato para reiniciar el resultado de la ejecución';
$string['currentstatusresult'] = 'Resultado de la ejecución reciente';
$string['enablescheduled'] = 'Habilitar asignación agendada';
$string['enablescheduledinfo'] = 'Asignar automáticamente los envíos al final de la fase de envíos.';
$string['pluginname'] = 'Asignación agendada';
$string['privacy:metadata'] = 'El plugin de Asignación agendada no almacena ningún dato personal. Los datos personales actuales acerca de quien va a evaluar a quien son almacenados por el módulo de Taller mismo y forman la base para exportar los detalles de las evaluaciones.';
$string['randomallocationsettings'] = 'Configuraciones de Asignación';
$string['randomallocationsettings_help'] = 'Los parámetros para el método de asignación aleatoria se definen aquí. Serán usados por el plugin de asignación aleatori para hacer la asignación de los envíos.';
$string['resultdisabled'] = 'Asignación agendada deshabilitada';
$string['resultenabled'] = 'Asignación agendada habilitada';
$string['resultexecuted'] = 'Éxito';
$string['resultfailed'] = 'No se pudo asignar los envíos automáticamente';
$string['resultfailedconfig'] = 'Asignación agendada mal-configurada';
$string['resultfaileddeadline'] = 'El taller no tiene definids la fecha límite para los envíos';
$string['resultfailedphase'] = 'El taller no está en la fase de envíos';
$string['resultvoid'] = 'No se asignaron envíos';
$string['resultvoiddeadline'] = 'Aún no pasa la fecha límite de envíos';
$string['resultvoidexecuted'] = 'La asignación ya ha sido ejecutada';
$string['scheduledallocationsettings'] = 'Configuraciones de asignación agendada';
$string['scheduledallocationsettings_help'] = 'Si se habilita, el método de asignación agendada automáticamente agendará los envíos para ser valorados al final de la fase de envíos. El final de la fase puede definirse en el taller ajustando la \'Fecha límite para envíos\' .

Internamente, el método aleatorio para asignación se ejecuta con los parámetros pre-definidos en este formato. Esto significa que la asignación agendada funciona como si el profesor ejecutase por si mismo la asignacón aleatoria al final de la fase de envíos, empleando las configuraciones de asignación descritas debajo.

Observe que la asignación agendada NO es ejecutada si Usted manualmente cambia el taller a la fase de valoración antes de que termine la fase de envíos. Usted tiene que asignar los envíos personalmente en ese caso. El método de asignación agendada es particularmente útil cuando se  emplea junto con la característica de cambio automático de fase.';
$string['setup'] = 'Configurar la asignación agendada';
