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
 * Strings for component 'portfolio_flickr', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   portfolio_flickr
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['apikey'] = 'clave API';
$string['contenttype'] = 'Tipos contenidos';
$string['err_noapikey'] = 'Sin clave API';
$string['err_noapikey_help'] = 'No hay clave API configurada para este plugin. Puede obtener una clave de estas desde la página de servicios de Flickr.';
$string['hidefrompublicsearches'] = '¿Esconder estas imágenes de las búsquedas públicas?';
$string['isfamily'] = 'Visible para la familia';
$string['isfriend'] = 'Visible para los amigos';
$string['ispublic'] = 'Pública (cualquiera puede verla)';
$string['moderate'] = 'Moderada';
$string['noauthtoken'] = 'No se ha podido recuperar una ficha (token) de autenticación para usar en esta sesión';
$string['other'] = 'Arte, ilustración, CGI, o imágenes no-fotográficas';
$string['photo'] = 'Fotos';
$string['pluginname'] = 'Flickr.com';
$string['privacy:metadata'] = 'Este plugin envía datos externamente hacia una cuenta enlazada Flickr. No almacena datos localmente.';
$string['privacy:metadata:data'] = 'Datos personales pasados a través del subsistema de portafolio.';
$string['restricted'] = 'Restringido';
$string['safe'] = 'Seguro';
$string['safetylevel'] = 'Nivel de seguridad';
$string['screenshot'] = 'Volcados de pantalla';
$string['set'] = 'Configurado';
$string['setupinfo'] = 'Instrucciones de configuración';
$string['setupinfodetails'] = 'Para obtener la clave API y la cadena secreta, ingrese a Flickr y <a href="{$a->applyurl}">solicite una nueva clave</a>. Una vez que sean generadas su clave nueva y su secreto, siga el enlace de \'Edit auth flow for this app\' en la página. Seleccione \'App Type\' a \'Web Application\'. En el campo de Callback URL, ponga el valor: <br /><code>{$a->callbackurl}</code><br />Opcionalmente, Usted también puede proporcionar su logo y descripción de su sitio Moodle. Estos valores se pueden configurar después en <a href="{$a->keysurl}">la página</a> que enlista sus aplicaciones Flickr.';
$string['sharedsecret'] = 'Cadena secreta';
$string['title'] = 'Título';
$string['uploadfailed'] = 'No pudo subir imágen(es) a flickr.com: {$a}';
