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
 * Strings for component 'local_davroot', language 'es_mx', branch 'MOODLE_25_STABLE'
 *
 * @package   local_davroot
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowconns'] = 'Permitir conexiones';
$string['allowconnsdescr'] = 'Permitir que los usuarios permitidos accesen archivos de Moodle mediante WebDAV';
$string['davroot:canconnect'] = 'Permitirle al usuario conectarse al servidor WebDAV, exponiendo los Archivos de Moodle';
$string['lockmanager'] = 'Bloquear (candado) Mánager';
$string['lockmanagerdescr'] = 'Permite manejar todos los bloqueos-de-archivo centralmente en {$a->lockmngrfolder}';
$string['pluginbrowser'] = 'Plugin de Navegador';
$string['pluginbrowserdescr'] = 'Produce índices tipo Apache para el Sistema de archivos virtuales de Moodle';
$string['pluginmount'] = 'Plugin DavMount';
$string['pluginmountdescr'] = 'Añade soporte para RFC 4709. Esta especificación define un documento pequeño que puede decirle a un cliente como montar un servidor WebDAV';
$string['pluginname'] = 'DavRoot';
$string['pluginnamedescr'] = 'Expone los archivos de Moodle mediante WebDAV';
$string['plugintempfilefilter'] = 'Plugin de Filtro de Archivo Temporal';
$string['plugintempfilefilterdescr'] = 'Intercepta archivos  temporales comunes conocidos creados por el Sistema Operativo y Aplicaciones y los pone en un directorio temporal, {$a->tmpfilefilterfolder}';
$string['readonly'] = 'Acceso de Solo-lectura';
$string['readonlydescr'] = 'Negar todo excepto un acceso solo-lectura (la opción más segura)';
$string['slashrep'] = '[slash]';
$string['urlrewrite'] = 'Habilitar re-escritura URL';
$string['urlrewritedescr'] = 'Permitir que se escriban URLs de DAV sin la página PHP al final: {$a->wwwpath}';
$string['vhostenabled'] = 'Habilitar Host Virtual';
$string['vhostenableddescr'] = 'Permitirle a WebDAV estar expuesto bajo la raíz de un Host Virtual configurado para mapear a  {$a->dirpath}';
$string['warnmdl35990'] = '<span style="color: red;"><a href="http://tracker.moodle.org/browse/MDL-35990" target="_blank">MDL-35990</a> impedirle a DAVRoot trabajar debajo de la configuración de Host Virtual!</span>';
$string['warnmdl35990descr'] = '<span style="color: red;">Espere errores tipo 500 de Status de  HTTP hasta que remueva la línea "<span style="font-family: courier new, courier, monospace; color: black;">require_once(dirname(dirname(__FILE__)) . \'/config.php\');</span>" del archivo  <span style="font-family: courier new, courier, monospace; color: black;">{$a->filepath}</span></span>';
