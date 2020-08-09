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
 * Strings for component 'filter_amanote', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   filter_amanote
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autosaveperiod'] = 'Período de auto-guardado';
$string['autosaveperiod_help'] = 'Configurar el período de tiempo en minutos entre los guardados automáticos (min: 1, máx:30) Configurar el período a 0 significa no auto-guardar.';
$string['downloadnotes'] = 'Descargar archivo con anotaciones';
$string['filtername'] = 'Amanote';
$string['importantinformationdescription'] = 'Para que este módulo funcione correctamente, por favor revise que se cumplan los siguientes requisitos en su sitio Moodle:

1. Filtro Amanote está habilitado (Administración del sitio > Plugins > Filtros > Gestionar filtros)

2. Servicios web están habilitados (Administración del sitio > Características avanzadas)

3. *Servicio web Moodle mobile* está habilitado (Administración del sitio  > Plugins > Servicios web > Servicios externos)

4. Protocolo REST está activado (Administración del sitio > Plugins > Servicios web > MGestionar protocolos)

5. Capacidad *webservice/rest:use* está permitida para *usuarios autenticados* (Administración  del sitio > Usuarios > Permisos > Definir Roles > Usuarios autenticados Usuarios > Gestionar roles)';
$string['importantinformationheading'] = 'Información importante sobre instalación';
$string['key'] = 'Clave de activación';
$string['key_help'] = 'Esta clave es necesaria para características avanzadas como por ejemplo Creador de Podcast.';
$string['openanalytics'] = 'Abrir Analítica del Aprendizaje';
$string['openinamanote'] = 'Abrir en Amanote';
$string['openpodcast'] = 'Abrir Creador de Podcast';
$string['pluginadministration'] = 'Administración del módulo Amanote';
$string['privacy:metadata'] = 'Para integrar con Amanote, algunos datos del usuario necesitan ser enviados a la aplicación cliente Amanote  (sistema remoto).';
$string['privacy:metadata:access_token'] = 'El token de acceso del usuario es necesario para guardar las anotaciones en el espacio de archivos privados de Moodle.';
$string['privacy:metadata:access_token_expiration'] = 'La expiración del token de acceso es enviada para prevenir que el usuario use la App con un token expirado.';
$string['privacy:metadata:email'] = 'El E-mail del usuario es enviado al sistema remoto para permitir una mejor experiencia del usuario (compartir anotaciones, etc).';
$string['privacy:metadata:fullname'] = 'El nombre completo del usuario es enviado al sistema remoto para permitir una mejor experiencia del usuario.';
$string['privacy:metadata:subsystem:corefiles'] = 'Archivos (PDF, AMA) son almacenados usando el sistema de archivo de Moodle.';
$string['privacy:metadata:userid'] = 'El userid es enviado de Moodle a Amanote para acelerar el proceso de autenticación.';
$string['saveinprivate'] = 'Guardar anotaciones en archivos privados';
$string['saveinprivate_help'] = 'Guardar el archivo con anotaciones en los archivos privados del usuario. Esto permitirá que el usuario regrese a sus anotaciones la siguiente vez que abra el  archivo con anotaciones en Amanote.';
$string['teacher'] = 'Profesor';
