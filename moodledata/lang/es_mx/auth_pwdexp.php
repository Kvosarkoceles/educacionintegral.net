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
 * Strings for component 'auth_pwdexp', language 'es_mx', branch 'MOODLE_26_STABLE'
 *
 * @package   auth_pwdexp
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_expirationdays'] = 'Número de días, después de los cuales la contraseña necesita caducar';
$string['auth_expirationdays_key'] = 'Días para caducidad';
$string['auth_pwdexpdescription'] = 'Este autenticador revisa si la contraseña del usuario necesita caducar.<br/>Si así fuera, configura una marca (flag) para forzar a que la cuenta cambie su contraseña y redirige a la URL dada.<br/> Asegúrese de guardar estas configuraciones al menos una vez y después de cada cambio.';
$string['auth_pwdexptitle'] = 'Revisión de Caducidad de Contraseña';
$string['auth_redirecturl'] = 'URL a redireccionar cuandola contraseña ha caducado.';
$string['auth_redirecturl_key'] = 'URL a redireccionar';
$string['auth_server_settings'] = 'Configuraciones de revisión de caducidad de contraseña';
$string['pluginname'] = 'Revisón de Caducidad de Contraseña';
