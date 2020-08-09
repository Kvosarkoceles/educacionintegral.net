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
 * Strings for component 'repository_onedrive', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   repository_onedrive
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['access'] = 'Acceso';
$string['both'] = 'Internos y externos';
$string['cachedef_folder'] = 'IDs de Archivo OneDrive para carpetas en la cuenta del sistema';
$string['configplugin'] = 'Configurar plugin OneDrive';
$string['confirmimportskydrive'] = '¿Está Usted seguro de querer importar todos los archivos desde el repositorio "Microsoft SkyDrive" al repositorio "Microsoft OneDrive" ? El repositorio Microsoft OneDrive debe de estar configurado y trabajando  para que los archivos importados continuen funcionando como antes. ¡Advertencia: Esta acción no puede deshacerse!';
$string['defaultreturntype'] = 'Tipo de retorno por defecto';
$string['external'] = 'Externos (solamente los enlaces son almacenados en Moodle)';
$string['fileoptions'] = 'Los tipos y valores por defecto para archivos regresados es configurable aquí. Por favor tenga en cuenta que todos los archivos enlazados externamente serán actualizados, de forma tal que el propietario sea la cuenta del sistema de Moodle.';
$string['importskydrivefiles'] = 'Importar archivos desde el repositorio Microsoft SkyDrive';
$string['internal'] = 'Internos (archivos almacenados en Moodle)';
$string['issuer'] = 'Servicio OAuth 2';
$string['issuer_help'] = 'Seleccionar el servicio OAuth 2 que está configurado para hablar a la API OneDrive. Si el servicio aun no existe, Usted necesitará crearlo.';
$string['mysitenotfound'] = 'Usted nunca ha ingresado con anterioridad a OneDrive. Usted tiene que ingresar a Onedrive al menos una vez antes de que pueda usarse con Moodle.';
$string['oauth2serviceslink'] = '<a href="{$a}" title="Link to OAuth Services configuration">Configuración de servicios OAuth 2</a>';
$string['onedrive:view'] = 'Ver repositorio OneDrive';
$string['owner'] = 'Propiedad de: {$a}';
$string['pluginname'] = 'Microsoft OneDrive';
$string['privacy:metadata:repository_onedrive'] = 'El repositorio Microsoft OneDrive almacena otorgamientos de acceso, y transmite datos desde Moodle al sistema remoto.';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:itemid'] = 'La ID del item para otorgar un acceso temporal  a Microsoft OneDrive.';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:permissionid'] = 'La ID del permiso para otorgar un acceso temporal  a Microsoft OneDrive.';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:timecreated'] = 'La fecha/hora de creación para otorgar un acceso temporal  a Microsoft OneDrive.';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:timemodified'] = 'La fecha/hora de modificación para otorgar un acceso temporal  a Microsoft OneDrive.';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:usermodified'] = 'La ID del usuario que modificó el acceso temporal  a Microsoft OneDrive.';
$string['privacy:metadata:repository_onedrive:searchtext'] = 'La consulta de texto de búsqueda del usuario de repositorio Microsoft OneDrive.';
$string['removetempaccesstask'] = 'Quitar acceso de escritura temporal de enlaces controlados.';
$string['searchfor'] = 'Buscar {$a}';
$string['servicenotenabled'] = 'Acceso no configurado.';
$string['skydrivefilesexist'] = 'Archivos encontrados en el repositorio Microsoft SkyDrive. Este repositorio se ha hecho obsoleto por Microsoft,; sin embargo, los archivos pueden ser importados hacia el repositorio Microsft OneDrive.';
$string['skydrivefilesimported'] = 'Todos los archivos fueron importados desde el repositorio Microsoft OneDrive.';
$string['skydrivefilesnotimported'] = 'Algunos archivos no pudieron ser importados desde el repositorio Microsoft SkyDrive.';
$string['supportedreturntypes'] = 'Archivos soportados';
