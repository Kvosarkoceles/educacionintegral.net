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
 * Strings for component 'block_online_users_map', language 'es_mx', branch 'MOODLE_24_STABLE'
 *
 * @package   block_online_users_map
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['centrelat'] = 'Latitud inicial';
$string['centrelng'] = 'Longitud inicial';
$string['centreuser'] = 'Centrar en localización de usuario';
$string['configcentrelat'] = 'Latitud central inicial del mapa - en formato decimal simple (no usar grados/minutos)';
$string['configcentrelng'] = 'Longitud central inicial del mapa - en formato decimal simple (no usar grados/minutos)';
$string['configcentreuser'] = 'Centrar el mapa en la localización de los usuarios actuales, con el nivel de aumento del zoom desde arriba. Esta configuración tiene preferencia sobre las coordinadas de lat/lng de arriba, a menos que el usuario actual no tenga una localización válida';
$string['configdebug'] = 'Mostrar mensajes de depuración (debug) al correr el cron';
$string['configgeonamesurl'] = 'URL a la API de Geonames';
$string['configgeonamesusername'] = 'Su nombredeusuario en Geonames. Usted puede obtener su propio nombredeusuario de {$a}. Si Usted le deja al bloque que siga usando el nombredeusuario de demostración por defecto, Usted podrá encontrase con que fallan sus llamadas a actualizar las localizaciones de usuarios.';
$string['configgoogleapikey'] = 'Clave API de Google Maps, obtener una clave de {$a}';
$string['confignamesonmap'] = '¿Deberían de mostrarse los nombres de usuario en el mapa? Si no está activada la casilla, se mostrará la ciudad del usuario en lugar del nombre.';
$string['configoffline'] = '¿Mostrar también a los usuarios fuera de línea?';
$string['configtimetosee'] = 'Número de minutos que determinan el período de inactividad después del cual se considerará que un usuario está fuera de línea.';
$string['configtype'] = 'Seleccionar el provedor del mapa a emplear';
$string['configupdatelimit'] = 'Número máximo de localidades a actualizar en cada corrida de cron - de forma que no afecte el rendimiento. Este debe ser un número entero mayor o igual a 0. Cuando se elige 0 esto actualizará todos los registros.';
$string['configzoomlevel'] = 'Nivel inicial de aumento del zoom del mapa';
$string['debug'] = 'Mostrar mensajes de depuración (debug)';
$string['geonamesurl'] = 'URL del API de Geonames';
$string['geonamesusername'] = 'Nombredeusuario para Geonames';
$string['googleapikey'] = 'Clave API de Google Maps';
$string['namesonmap'] = 'Mostrar nombres de usuarios';
$string['offline'] = 'Mostrar usuarios fuera de línea';
$string['online_users_map:addinstance'] = 'Añadir un nuevo bloque de mapa de usuarios en línea';
$string['online_users_map:myaddinstance'] = 'Añadir un nuevo bloque de mapa de usuarios en línea a la página de Mi Moodle';
$string['periodnminutes'] = 'Últimos {$a} minutos';
$string['pluginname'] = 'Mapa de usuarios en línea';
$string['timetosee'] = 'Remover después de inactividad';
$string['type'] = 'Tipo de mapa a emplear';
$string['updatelimit'] = 'Máximo número de localidades a actualizar';
$string['zoomlevel'] = 'Nivel de aumento del zoom inicial';
