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
 * Strings for component 'block_azuread', language 'es_mx', branch 'MOODLE_25_STABLE'
 *
 * @package   block_azuread
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['AADNotEnabled'] = 'El plugin de autorización de Directorio Activo Azure no está habilitado. Por favor contacte a su administrador de Moodle.';
$string['appid'] = 'ID de aplicación';
$string['appiddesc'] = 'ID de aplicación de app Moodle que registra';
$string['azureadNotDoSync'] = 'No-permitir Sincronización';
$string['azureadNotDoSyncdesc'] = 'Este valor determina si es que Moodle sincroniza usuarios desde Office 365 o no.';
$string['azureadSPNNotSet'] = 'Su plugin de Office 365 no está configurado. Administrador, por favor configure Appid en las configuraciones del plugin del Directorio Activo Azure';
$string['azureadSyncToken'] = 'Ficha (token) de Sincronización de Directorio Activo Azure';
$string['azureadSyncTokendesc'] = 'Este valor no debería de cambiarse o modificarse. Está escrito como una cadena de base64 por el motor de sincronización de Azure. El único cambio aceptable es vaciarlo; esto forzará una re-sincronización de todos los usuarios desde el Directorio Activo Azure.';
$string['blocklogo'] = 'Logo del bloque';
$string['blocklogodesc'] = 'Este es el texto que se mostrará en la parte superiror del bloque de ingreso';
$string['blockname'] = 'Ingreso Office 365';
$string['companydomain'] = 'Dominio de la Universidad';
$string['companydomaindesc'] = 'Dominio de la Universidad registrado con Office 365';
$string['companyid'] = 'ID de Universidad';
$string['companyiddesc'] = 'ID de Universidad de la app que registra Moodle';
$string['configTitle'] = 'Título del bloque';
$string['identityNotSignedIn'] = 'No ingresado';
$string['identitySignInButtonText'] = 'Ingresar';
$string['identitySignInText'] = 'Ingresar a Office 365';
$string['officeLink'] = 'Abrir portal Office 365';
$string['pluginname'] = 'Directorio Activo Azure';
$string['profileLink'] = 'Editar Perfil Office 365';
$string['symmkey'] = 'Clave simétrica';
$string['symmkeydesc'] = 'Clave simétrica de registrar Moodle con Directorio Activo Azure';
$string['warningauthmismatch'] = 'Usted está ingresado usando un nombre de usuario que no es de Office 365. Por favor salga empleando este enlace.';
