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
 * Strings for component 'portfolio_boxnet', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   portfolio_boxnet
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clientid'] = 'ID del cliente';
$string['clientsecret'] = 'Secreto del cliente';
$string['existingfolder'] = 'Carpetas existentes a donde poner el/los archivo(s)';
$string['folderclash'] = '¡La carpeta que solicitó crear ya existía !';
$string['foldercreatefailed'] = 'No pudo crear la carpeta destino en Box';
$string['folderlistfailed'] = 'No pudo obtener una lista de carpetas de Box';
$string['missinghttps'] = 'Requiere HTTPS';
$string['missinghttps_help'] = 'Box solamente trabajará con un sitio que tenga habilitado HTTPS.';
$string['missingoauthkeys'] = 'Faltan ID y secreto del cliente';
$string['missingoauthkeys_help'] = 'No hay ID o secreto del cliente configurado para este plugin. Usted puede obtener uno de estos de la página de desarrollo (development) de Box.';
$string['newfolder'] = 'Nueva carpeta en donde poner archivo(s)';
$string['noauthtoken'] = 'No pudo recuperar una ficha (token) de autenticación para emplear en esta sesión';
$string['notarget'] = 'Usted debe especificar si se subirá a una carpeta existente o a una carpeta nueva';
$string['noticket'] = 'No se pudo recibir un ticket desde Box para comenzar con la sesión de autenticación';
$string['password'] = 'Su contraseña de Box (no se guardará)';
$string['pluginname'] = 'Box';
$string['privacy:metadata'] = 'Este plugin envía datos externamente hacia una cuenta de Box enlazada. No almacena datos localmente.';
$string['privacy:metadata:data'] = 'Datos personales pasados a través del subsistema de portafolio.';
$string['sendfailed'] = 'No pudo enviar contenido a Box: {$a}';
$string['setupinfo'] = 'Instrucciones de configuración';
$string['setupinfodetails'] = 'Para obtener un secreto y una ID de cliente, ingrese a Box y visite su <a href="{$a->servicesurl}">Box developers page</a>. Siga \'Create new application\' y cree una nueva aplicación para su sitio Moodle. El ID del cliente y el secreto se muestran en la sección de  \'OAuth2 parameters\' del formato de edición de la aplicación. Opcionalmente, Usted puede también proporcionar otra información acerca de su sitio Moodle.';
$string['sharedfolder'] = 'Compartido';
$string['sharefile'] = '¿Compartir este archivo?';
$string['sharefolder'] = '¿Compartir esta carpeta nueva?';
$string['targetfolder'] = 'Carpeta destino';
$string['tobecreated'] = 'Para crear';
$string['username'] = 'Su nombre_de_usuario de Boxt (no será guardado)';
$string['warninghttps'] = 'Box requiere que su sitio web use HTTPS para que funcione el portafolio.';
