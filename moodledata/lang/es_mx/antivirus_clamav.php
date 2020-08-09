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
 * Strings for component 'antivirus_clamav', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   antivirus_clamav
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['antivirusfailed'] = 'Hubo un problema con la revisión de AntiVirus en este momento. Su archivo {$a->item} no ha sido subido. Por favor inténtelo nuevamente más tarde..';
$string['clamfailed'] = 'Clam AV no se ha ejecutado. El mensaje de error de retorno es {$a}. Ésta es la salida de Clam:';
$string['clamfailureonupload'] = 'Cuando falle ClamAV';
$string['configclamactlikevirus'] = 'Tratar los archivos como si efectivamente fueran virus';
$string['configclamdonothing'] = 'Tratar los archivos como si estuvieran OK';
$string['configclamfailureonupload'] = 'Si estuviera seleccionado \'Tratar archivos como OK\', los archivos serán movidos a l directorio de destino. Si estuviera seleccionado  \'Rehusar subida, intentar nuevamente\' al usuario se le pedirá que lo intente después nuevamente. Si estuviera seleccionado \'Tratar archivos como virus\' los archivos serán movidos al área de cuarentena, o eliminados. Advertencia: Con esta opción, Si por alguna razón Clam no funcionara (usualmente debido a que Usted ha ingresado una ruta-hacia-Clam inválida), TODOS los archivos que sean subidos serán movidos al área dada de cuarentena, o serán eliminados.';
$string['configclamtryagain'] = 'Rehusar subida; intentarlo nuevamente';
$string['errorcantopensocket'] = 'La conexión al socket de dominio Unix resultó en error {$a}';
$string['errorclamavnoresponse'] = 'ClamAV no responde; revise el estado de corrida del demonio (daemon).';
$string['errornounixsocketssupported'] = 'El transporte del socket del dominio Unix no está soportado en este sistema. Por favor, use en su lugar la opción de línea de comando.';
$string['invalidpathtoclam'] = 'Moodle está configurado para ejecutar Clam al cargar un archivo, pero la ruta para Clam AV, {$a}, no es válida.';
$string['pathtoclam'] = 'Línea de comando';
$string['pathtoclamdesc'] = 'Si el método de corrida está configurado a "línea de comando", ingrese aquí la ruta hacia ClamAV. En Linux esto será /usr/bin/clamscan o /usr/bin/clamdscan.';
$string['pathtounixsocket'] = 'Socket de dominio Unix';
$string['pathtounixsocketdesc'] = 'Si el método de corrida se configura a "Socket de dominio Unix", ingrese aquí la ruta hacia el socket Unix de ClamAV. En Linux Debian esto será /var/run/clamav/clamd.ctl. Por favor asegúrese que el demonio (daemon) de clamav tiene acceso de lectura a los archivos subidos; la manera más fácil de asegurar esto es añadir el usuario \'clamav\' a su grupo webserver (\'www-data\' en Debian Linux).';
$string['pluginname'] = 'Antivirus ClamAV';
$string['privacy:metadata'] = 'El plugin ClamAV Antivirus no almacena ningún dato personal.';
$string['quarantinedir'] = 'Directorio de cuarentena';
$string['runningmethod'] = 'Método de corrida';
$string['runningmethodcommandline'] = 'Línea de comando';
$string['runningmethoddesc'] = 'Método de correr ClamAV. Por defecto se usa la línea de comando; sin embargo, en sistemas Unix se puede obtener mejor desempeño al usar sockets del sistema.';
$string['runningmethodtcpsocket'] = 'Socket TCP';
$string['runningmethodunixsocket'] = 'Socket de dominio Unix';
$string['tcpsockethost'] = 'Hostname del socket TCP';
$string['tcpsockethostdesc'] = 'Nombre del dominio del servidor ClamAV';
$string['tcpsocketport'] = 'Puerto del socket TCP';
$string['tcpsocketportdesc'] = 'El puerto usado cuando se conecta a ClamAV';
$string['tries'] = 'Intentos de escaneo';
$string['tries_desc'] = 'Número de intentos hechos por ClamAV si hay un error durante el proceso de escaneo.';
$string['tries_notice'] = 'El escaneo de Clamav ha intentado {$a->tries} vez/veces.
{$a->notice}';
$string['unknownerror'] = 'Se ha producido un error desconocido con Clam.';
