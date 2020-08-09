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
 * Strings for component 'repository_nextcloud', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   repository_nextcloud
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['both'] = 'Internos y externos';
$string['cannotconnect'] = 'El usuario no pudo ser autenticado. Por favor ingrese y después suba el archivo.';
$string['chooseissuer'] = 'Emisor';
$string['chooseissuer_help'] = 'Para añadir un nuevo emisor, vaya a Administración del sitio / Servidor /Servicios OAuth 2.';
$string['configplugin'] = 'Configuración del repositorio Nextcloud';
$string['configuration_exception'] = 'Ocurrió un error en la configuración del cliente OAuth 2: {$a}';
$string['contactadminwith'] = 'La acción solicitada no pudo ser ejecutada. En caso de que esto suceda repetidamente, por favor póngase en contacto con el administrador del sitio con la siguiente información adicional:<br>"<i>{$a}</i>".';
$string['couldnotmove'] = 'El archivo solicitado no pudo ser movido en la carpeta {$a}.';
$string['defaultreturntype'] = 'Tipo de retorno por defecto';
$string['endpointnotdefined'] = 'Endpoint {$a} no definido.';
$string['external'] = 'Externos (solamente los enlaces son almacenados en Moodle)';
$string['filenotaccessed'] = 'El archivo solicitado no pudo ser accedido. Por favor revise si es que Usted ha elegido un archivo válido y si Usted está autenticado con la cuenta correcta.';
$string['fileoptions'] = 'Los tipos y los valores por defecto para archivos regresados es configurable aquí. Tenga en cuenta que todos los archivos enlazados externamente serán actualizados de forma tal que el propietario sea la cuenta del sistema de Moodle.';
$string['foldername'] = 'Nombre de carpeta creada en el espacio privado de Nextcloud que contiene todos los enlaces de acceso controlado.';
$string['foldername_help'] = 'Para asegurar que los usuarios encuentren archivos compartidos con ellos, las comparticiones son guardadas dentro de una carpeta específica.

Esta configuración determina el nombre de la carpeta. Se recomienda elegir un nombre asociado con su instancia Moodle.';
$string['internal'] = 'Internos (archivos almacenados en Moodle)';
$string['invalidresponse'] = 'Respuesta de servidor inválida';
$string['issuervalidation_invalid'] = 'Actualmente el emisor {$a}está activo; sin embargo, no implementa todos los endpoints necesarios. El repositorio no funcionará.';
$string['issuervalidation_valid'] = 'Actualmente el emisor {$a} está activo.';
$string['issuervalidation_without'] = 'Usted aun no ha seleccionado un servidor Nextcloud como el emisor OAuth 2.';
$string['nextcloud'] = 'Nextcloud';
$string['nextcloud:view'] = 'Ver Nextcloud';
$string['noclientconnection'] = 'Los clientes OAuth no pudieron ser conectados.';
$string['no_right_issuers'] = 'Ninguno de los emisores existentes implementa todos los endpoints requeridos. Por favor registre un emisor apropiado.';
$string['notauthorized'] = 'Usted no está autorizado a ejecutar esta solicitud. Por favor asegúrese de que Usted esté autenticado con la cuenta correcta.';
$string['oauth2serviceslink'] = '<a href="{$a}" title="Link to OAuth 2 services configuration">Configuración de servicios OAuth 2 </a>';
$string['pathnotcreated'] = 'La ruta hacia carpeta {$a} no pudo ser creada en la cuenta del sistema.';
$string['pluginname'] = 'Nextcloud';
$string['pluginname_help'] = 'Repositorio Nextcloud';
$string['privacy:metadata'] = 'El plugin del repositorio Nextcloud no almacena ningún dato personal ni transmite datos del usuario al sistema remoto.';
$string['request_exception'] = 'Una solicitud a {$a->instance} ha fallado. {$a->errormessage}';
$string['requestnotexecuted'] = 'La solicitud no pudo ser ejecutada. Si esto sucede repetidamente, por favor póngase en contacto con el administrador del sitio.';
$string['right_issuers'] = 'Los siguientes emisores implementan los endpoints requeridos: <br> {$a}';
$string['supportedreturntypes'] = 'Archivos soportados';
