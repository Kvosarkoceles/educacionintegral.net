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
 * Strings for component 'repository_owncloud', language 'es_mx', branch 'MOODLE_37_STABLE'
 *
 * @package   repository_owncloud
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['both'] = 'Interno y externo';
$string['cannotconnect'] = 'El usuario no pudo ser autenticado; por favor ingrese al sitio y después suba el archivo.';
$string['chooseissuer'] = 'Emisor';
$string['chooseissuer_help'] = 'Para añadir un nuevo emisor, visite la página de administración  de servicios OAuth 2. <br> Para ayuda adicional con OAuth 2, por favor refiérase a la documentación de Moodle.';
$string['configplugin'] = 'Configuración de ownCloud';
$string['configuration_exception'] = 'Ocurrió un error en la configuración del cliente de OAuth 2: {$a}';
$string['confirmmigration'] = '¿Está seguro de querer migrar todos los archivos y la configuración al repositorio Nextcloud? El repositorio Nextcloud debe estar instalado para que los archivos continúen funcionando como antes. Advertencia: ¡Esta accción no puede deshacerse!';
$string['contactadminwith'] = 'La acción solicitada no pudo ser ejecutada. En caso de que esto ocurra frecuentemente, por favor contacte al administrador del sitio con la información siguiente:<br>"<i>{$a}</i>"';
$string['couldnotmove'] = 'El archivo solicitado no pudo ser movido a la carpeta {$a}.';
$string['defaultreturntype'] = 'Tipo de retorno por defecto';
$string['external'] = 'Externo (solamente enlaces almacenados en Moodle)';
$string['filenotaccessed'] = 'El archivo solicitado no pudo ser accedido. Por favor revise si es que Usted ha elegido un archivo válido y si Usted está autenticado con la cuenta correcta.';
$string['fileoptions'] = 'Los tipos y los valores por defecto para archivos regresados son configurables aquí. Tenga en cuenta que todos los archivos enlazados externamente serán actualizados de forma tal que el propietario sea la cuenta del sistema de Moodle.';
$string['foldername'] = 'Nombre de la carpeta creada en el espacio privado de usuarios de OwnCloud que contiene todos los enlaces de acceso controlado.';
$string['foldername_help'] = 'Para asegurar que los usuarios encuentren archivos compartidos con ellos, los archivos compartidos son guardados en una carpeta específica. <br>
Esta configuración determina el nombre de la carpeta. Se recomienda elegir un nombre asociado con su instancia de Moodle.';
$string['internal'] = 'Interno (archivos almacenados en Moodle)';
$string['issuervalidation_invalid'] = 'Actualmente el emisor {$a} está activo, pero no implementa todos los endpoints necesarios. El repositorio no funcionará.';
$string['issuervalidation_valid'] = 'Actualmente el emisor {$a} está activo.';
$string['issuervalidation_without'] = 'Usted aun no ha seleccionado un servidor ownCloud como el emisor OAth 2.';
$string['migration'] = 'Migrar repositorio';
$string['migrationexplanation'] = 'Empezando con Moodle 3.6, el repositorio ownCloud está integrado adentro de Moodle y ahora es llamado el repositorio Nextcloud. Atiende a ambos, tanto ownCloud y Nextcloud. Como consecuencia, este plugin ya no es mantenido más. Por favor, migre los archivos y la configuración al plugin de repositorio más nuevo usando la siguiente opción.';
$string['migrationlink'] = 'Iniciar migración';
$string['no_right_issuers'] = 'Ninguno de los emisores existentes implementa todos los endpoints requeridos. Por favor, registre un emidor apropiado.';
$string['notauthorized'] = 'Usted no está autorizado para ejecutar la solicitud demandada. Por favor asegúrese de que Usted está autenticado con la cuenta correcta.';
$string['oauth2serviceslink'] = '<a href="{$a}" title="Link to OAuth 2 services configuration">Configuración de servicios OAuth 2</a>';
$string['owncloud'] = 'ownCloud';
$string['owncloudfilesmigrated'] = 'Todos los archivos y configuraciones han sido migrados al repositorio Nextcloud. El plugin del repositorio ownCloud puede eliminarse con seguridad.';
$string['owncloudfilesnotmigrated'] = 'Ocurrió un error al tratar de migrar todos los archivos y configuraciones al repositorio Nextcloud.';
$string['owncloud:view'] = 'Ver ownCloud';
$string['pluginname'] = 'ownCloud';
$string['pluginname_help'] = 'Repositorio ownCloud';
$string['privacy:metadata'] = 'El plugin del repositorio OwnCloud no almacena ningún dato personal ni transmite datos del usuario al sistema remoto.';
$string['request_exception'] = 'Una solicitud a {$a->instance} ha fallado. {$a->errormessage}';
$string['requestnotexecuted'] = 'La solicitud no pudo ser ejecutada. Si esto sucede frecuentemente, por favor póngase en contacto con el administrador del sitio o del curso.';
$string['right_issuers'] = 'Los emisores siguientes implementan los endpoints requeridos: <br> {$a}';
$string['supportedreturntypes'] = 'Archivos soportados';
