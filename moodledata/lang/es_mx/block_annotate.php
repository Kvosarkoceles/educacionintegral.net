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
 * Strings for component 'block_annotate', language 'es_mx', branch 'MOODLE_32_STABLE'
 *
 * @package   block_annotate
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['access_default_msg'] = 'Individual (Por defecto). Esto puede cambiars en la configuración.';
$string['access_set_to_msg'] = 'Accesar documento en Annotate configurado a:';
$string['access_shareuser_msg'] = 'Propietario del documento:';
$string['access_shareuser_msg_dft'] = 'Aun no configurado. Use configuración.';
$string['annotate:accessannotate'] = 'Acceder Annotate';
$string['annotate:addinstance'] = 'A{adir el bloque Annotate';
$string['annotate_api_key_default'] = '';
$string['annotate_api_key_lbl'] = 'Clave API para el usuario';
$string['annotate_api_key_msg'] = 'La clave API puede encontrarse al fondo de la página de configuraciones al ingresar a Annotate como un usuario con acceso API.';
$string['annotate_api_user_default'] = '';
$string['annotate_api_user_lbl'] = 'Email usuario API';
$string['annotate_api_user_msg'] = 'Email del usuario Annotate con acceso API. A menudo este es el usuario a quien se le ha otorgado la licencia.';
$string['annotate_header_config'] = 'Configuraciones del servidor Annotate';
$string['annotate_header_description'] = 'Aquí puede Usted ingresar los parámetros correctos para conectarse a su servidor Annotate.';
$string['annotate_moodleId_lbl'] = 'Identificador de Instalación Moodle';
$string['annotate_moodleId_msg'] = 'Para separar los espacios de trabajo basados en la localización de la instalación Moodle.';
$string['annotate:myaddinstance'] = 'Añadir el bloque Annotate a la página de Mi Hogar';
$string['annotate_server_uri_default'] = 'http://localhost/annotate';
$string['annotate_server_uri_lbl'] = 'URL Servidor Annotate';
$string['annotate_server_uri_msg'] = 'Configure esto para su servidor Annotate. Para probarlo, si Usted tiene una instalación de Annotate por defecto en el mismo servidor en donde tiene Moodle, intente  "http://localhost/annotate". Si ambos servidores están en la misma sub-red local, Usted puede usar sus direcciones IP locales aquí también, siempre y cuando cada uno esté configurado a saber su propia dirección.';
$string['annotate_wsuser_token_default'] = '';
$string['annotate_wsuser_token_lbl'] = 'Token de usuario de Servicios Web';
$string['annotate_wsuser_token_msg'] = 'Un usuario específico de Servicios Web Moodle debe crearse para permitirle a Annotate el buscar archivos desde el servidor Moodle. Pueden encontrase instrucciones para esto en  https://moodle.org/plugins/block_annotate';
$string['config_access_label'] = 'Acceso';
$string['config_access_label_help'] = 'Con acceso "Individual", cada usuario tendrá una instancia independiente de cada recurso que accedan y las notas serán privadas a menos que ellos explícitamente compartan el documento en Annotate. Con acceso de "Grupo", hay una copia para el grupo, la cual es propiedad del usuario especificado debajo. Los estudiantes todavía pueden hacer notas privadas pero también pueden hacer notas Estándar visibles para otros usuarios.';
$string['config_group_access'] = 'Grupo';
$string['config_header_label'] = 'Opciones para compartir documento';
$string['config_individual_access'] = 'Individual';
$string['config_shareuser_label'] = 'Propietario del documento (solamente Grupo)';
$string['config_shareuser_label_help'] = 'Para acceso de "Grupo", debe proporcionarse el Email del usuario quien es propietario del documento en Annotate. Esto a menudo es configurado al instructor del curso.';
$string['enter_email_msg'] = 'Escribir Email';
$string['invalid_email_msg'] = 'Email inválido';
$string['pluginname'] = 'Annotate';
$string['transfer_error'] = 'Error';
$string['transfer_error_msg'] = 'Hubo un problema al transferir a Annotate para ver el documento. Por favor contacte a su administrador del servidor.';
