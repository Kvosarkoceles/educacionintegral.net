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
 * Strings for component 'local_session_keepalive', language 'es_mx', branch 'MOODLE_38_STABLE'
 *
 * @package   local_session_keepalive
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Mantener-viva (keepalive) la sesión';
$string['privacy:metadata'] = 'El plugin session keepalive (mantener  viva la sesión) proporciona funcionalidad extendida a usuarios Moodle, pero no almacena ningún dato personal.';
$string['setting_advancedsettingsheading'] = 'Configuraciones avanzadas';
$string['setting_enable'] = 'Habilitar mantener-viva la sesión';
$string['setting_enable_desc'] = 'Con esta configuración, Usted puede habilitar session keepalive. Mientras no estée habilitado session keepalive, este plugin no hace nada y las sesiones del usuario expirarán normalmente. Esto significa que los datos ingresados del usuario que son enviados al servidor después de que la sesión haya expirado se perderán. Tan pronto como esta característica sea habilitada, el plugin mantendrá viva la sesión tanto como sea necesario.';
$string['setting_generalfunctionalityheading'] = 'Funcionalidad general';
$string['setting_keepaliveend'] = 'Tiempo de fin de mantener-vivo';
$string['setting_keepaliveend_desc'] = 'Con estas dos configuraciones, Usted puede controlar las horas del día (respecto a la hora del servidor) cuando debería de estar activo session keepalive. Si Usted configura ambos ajustes a 0:00, session keepalive estará activo durante todo el día, lo cual es el ajuste por defecto. Sin embargo, si Usted está seguro de que solamente quiere session keepalive durante un lapso de tiempo definido, Usted puede limitar session keepalive a este rango de tiempo, para disminuir la carga del servidor durante el resto del día.';
$string['setting_keepaliveinterval'] = 'Intervalo de mantener-vivo';
$string['setting_keepaliveinterval_desc'] = 'Con esta configuración, Usted puede configurar el intervalo (en minutos) en el cual los navegadores  del usuario revisarán si hay escritura del usuario no-enviada y mantendrán viva la sesión si fuera necesario. Aun y cuando esta solicitud fuera muy ligera para el servidor, Usted no debería de configurar el intervalo más corto de lo necesario porque, intervalos innecesariamente cortos, aunados a una gran cantidad de usuarios activos concurrentes, podrían generar una carga adicional perceptible en su servidor. Para configuraciones normales de Moodle,los valores por defecto deberían de estar bien.<br>
Es mejor configurar el intervalo a la mitad del \'timeout\' de la sesión configurado e en la página de configuración de  {$a->page}  (actualmente configurado a {$a->minutes} minutos). Por ejemplo: Si el \'timeout\' de la sesión está configurado a 120 minutos, configurar el tiempo de mantener-vivo a 60 minutos. Los navegadores de los usuarios entonces realizarán la primera solicitud de mantener-vivo 60 minutos después de la carga de la página, lo que es todavía bastante tiempo antes de que la sesión caduque normalmente.';
$string['setting_keepalivestart'] = 'Tiempo de inicio de mantener-vivo';
$string['setting_keepaliveweekdays'] = 'Días d ela semana de mantener-vivo';
$string['setting_keepaliveweekdays_desc'] = 'Con esta configuración, puede controlar los días entre semana (de lunes a viernes) cuando debereía de estar activo session keepalive. Por defecto, están habilitados todos los días entre semana. Sin embargo, si Usted está seguro de que nunca necesitará session keepalive entre semana en algunos días laborables, Usted puede deshabilitar estos días entre semana para disminuir la carga del lado del servidor en estos días.';
