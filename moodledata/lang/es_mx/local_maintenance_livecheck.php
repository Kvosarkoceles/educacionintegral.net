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
 * Strings for component 'local_maintenance_livecheck', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   local_maintenance_livecheck
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Modo de Mantenimiento (revisión viva)';
$string['privacy:metadata'] = 'El plugin modo de mantenimiento (revisión viva) proporciona funcionalidad extendida a usuarios Moodle, pero no almacena ningún dato personal.';
$string['setting_advancedsettingsheading'] = 'Cpnfiguraciones avanzadas';
$string['setting_backoff'] = 'Tiempo de protección de revisión en vivo';
$string['setting_backoff_desc'] = 'Con esta configuración, Usted puede poner un tiempo de retraso (en segundos) en el cual el navegador del usuario no realizará ninguna revisión. Puede usarse para reducir la carga en el lado del servidor y se describe mejor con un ejemplo: Si Usted siempre agenda el modo de mantenimiento con 10 minutos de anticipación y ha configurado el intervalo de revisión en vivo a 60 segundos, Usted podría configurar el tiempo de retraso a 120 segundos. Entonces, los navegadores de los usuarios realizarán la primera revisión en vivo 180 segundos después de la carga de la página. Así, los usuarios serán notificados 7 minutos antes de que inicie el modo de mantenimiento en el peor de los casos, lo que debería de ser suficiente para la mayoría de los escenarios.';
$string['setting_checkinterval'] = 'Intervalo de revisión en vivo';
$string['setting_checkinterval_desc'] = 'Con esta configuración Usted puede configurar el intervalo (en segundos) en el cual los navegadores de los usuarios revisarán si es que el modo de mantenimiento se habilitará pronto, o si ha sido habilitado mientras tanto. Aun y cuando esta revisión es muy ligera en el lado del servidor, Usted debería de ser cauteloso con intervalos realmente cortos, porque los intervalos cortos, junto con una gran cantidad de usuarios concurrentes activos, podrían generar una carga adicional perceptible en su servidor. Para configuraciones normales de Moodle, las configuraciones por defecto deberían de estar bien.';
$string['setting_enable'] = 'Habilitar revisión en vivo';
$string['setting_enable_desc'] = 'Con esta configuración, Usted puede habilitar la revisión en vivo de los anuncios de mantenimiento. Siempre que no esté habilitada la revisión en vivo, los anuncios de mantenimiento solamente son mostrados en una carga de la página completa.';
$string['setting_generalfunctionalityheading'] = 'Funcionalidad general';
$string['setting_livecheckend'] = 'Hora de finalización de revisión en vivo';
$string['setting_livecheckend_desc'] = 'Con esta configuración, Usted puede controlar la hora del día (con respecto a la hora del servidor) en la que debería de realizarse la revisión en vivo.  Si Usted configura ambas configuraciones a 0:00 la revisión en vivo se realizará durante todo el día, lo que es la configuración por defecto. Sin embarfgo, si Usted está seguro de que Usted siempre habilitará el modo de mantenimiento  solamente durante una ventana de inspección definida, Usted puede  limitar la revisión en vivo a esta ventana de inspección para ahorrar la carga en el lado del servidor durante el resto del día.';
$string['setting_livecheckstart'] = 'Hora de inicio de revisión en vivo';
$string['setting_livecheckweekdays'] = 'Días de la semana de revisión en vivo';
$string['setting_livecheckweekdays_desc'] = 'Con esta configuración, Usted puede controlar los días de la semana en los que debería de realizarse la revisión en vivo. Por defecto, todos los días de la semana están habilitados. Sin embargo, si Usted está seguro de que Usted nunca habilitará el modo de mantenimiento en los fines de semana o en ciertos días laborables, Usted puede deshabilitar estos días de la semana para ahorrar la carga en el lado del servidor en estos días.';
