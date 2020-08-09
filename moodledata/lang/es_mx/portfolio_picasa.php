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
 * Strings for component 'portfolio_picasa', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   portfolio_picasa
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clientid'] = 'ID del cliente';
$string['noauthtoken'] = 'No se ha recibido una ficha (token) de autenticación de Google. Por favor asegúrese que Usted le está permitiendo a Moodle acceder a su cuenta de Google';
$string['nooauthcredentials'] = 'Se requieren credenciales de OAuth';
$string['nooauthcredentials_help'] = 'Para usar el plugin del portafolio Picasa Usted debe primero configurar credenciales OAuth en las configuraciones del portafolio.';
$string['oauthinfo'] = '<p>Para usar este plugin, Usted debe registrar este sitio con Google, tal como se describe en la documentación <a href="{$a->docsurl}">Google OAuth 2.0 setup</a>.</p><p>Como parte del proceso de registro, Usted deberá introducir la siguiente URL como (URIs de redireccionamiento autorizadas) \'Authorized Redirect URIs\':</p><p>{$a->callbackurl}</p>Una vez registrado, se le proporcionará una ID de cliente y un secreto que podrá entonces emplear para configurar todos los plugins de Google Drive y Picasa.</p>';
$string['pluginname'] = 'Picasa';
$string['privacy:metadata'] = 'Este plugin envía datos externamente hacia una cuenta enlazada Picasa. No almacena datos localmente.';
$string['privacy:metadata:data'] = 'Datos personales pasados a través del subsistema de portafolio.';
$string['secret'] = 'Secreto';
$string['sendfailed'] = 'El archivo {$a} no pudo transferirse a Picasa';
