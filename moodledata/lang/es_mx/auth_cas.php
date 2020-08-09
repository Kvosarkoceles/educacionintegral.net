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
 * Strings for component 'auth_cas', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   auth_cas
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accesCAS'] = 'Usuarios CAS';
$string['accesNOCAS'] = 'Otros usuarios';
$string['auth_cas_auth_logo'] = 'Logo del método de autenticación';
$string['auth_cas_auth_logo_description'] = 'Proporcionar un logo para el método de autenticación CAS que le sea familiar a sus usuarios.';
$string['auth_cas_auth_name'] = 'Nombre del método de autenticación';
$string['auth_cas_auth_name_description'] = 'Proporcionar un nombre para el método de autenticación CAS que le sea familiar a sus usuarios.';
$string['auth_cas_auth_service'] = 'CAS';
$string['auth_cas_auth_user_create'] = 'Crear usuarios en fuente externa';
$string['auth_cas_baseuri'] = 'URI del servidor (en blanco si no hay baseUri)<br />Por ejemplo, si el servidor CAS responde a host.domaine.fr/CAS/ entonces<br />cas_baseuri = CAS/';
$string['auth_cas_baseuri_key'] = 'URI Base';
$string['auth_cas_broken_password'] = 'No puede seguir sin cambiar su contraseña; en todo caso, no hay una página disponible para cambiarla. Por favor, póngase en contacto con su administrador Moodle.';
$string['auth_cas_cantconnect'] = 'La parte LDAP del módulo CAS no puede conectarse con el servidor: {$a}';
$string['auth_cas_casversion'] = 'Versión';
$string['auth_cas_certificate_check'] = 'Ponga el valor \'Si\' si quiere validar el certificado del servidor.';
$string['auth_cas_certificate_check_key'] = 'Validación del servidor';
$string['auth_cas_certificate_path'] = 'Ruta del archivo de cadena de certificación de la CA (formato PEM) para validar el certificado del servidor';
$string['auth_cas_certificate_path_empty'] = 'Si activa la validación del servidor, necesita especificar una ruta de certificado';
$string['auth_cas_certificate_path_key'] = 'Ruta del certificado';
$string['auth_cas_changepasswordurl'] = 'URL de cambio de contraseña';
$string['auth_cas_create_user'] = 'Activar si se desea insertar usuarios autenticados con CAS en la base de datos de Moodle. En caso contrario, sólo tendrán acceso los usuarios que ya existen en la base de datos de Moodle.';
$string['auth_cas_create_user_key'] = 'Crear usuario';
$string['auth_cas_curl_ssl_version'] = 'La versión (2 o 3) de SSL a usar. Por defecto, PHP tratará de determinar esto por sí mismo, aunque en algunos casos esto debe configurarse manualmente.';
$string['auth_cas_curl_ssl_version_default'] = 'Por defecto';
$string['auth_cas_curl_ssl_version_key'] = 'Versión cURL SSL';
$string['auth_cas_curl_ssl_version_SSLv2'] = 'SSLv2';
$string['auth_cas_curl_ssl_version_SSLv3'] = 'SSLv3';
$string['auth_cas_curl_ssl_version_TLSv10'] = 'TLSv1.0';
$string['auth_cas_curl_ssl_version_TLSv11'] = 'TLSv1.1';
$string['auth_cas_curl_ssl_version_TLSv12'] = 'TLSv1.2';
$string['auth_cas_curl_ssl_version_TLSv1x'] = 'TLSv1.x';
$string['auth_casdescription'] = 'Este método utiliza un servidor CAS (Central Authentication Service) para autenticar a los usuarios en un entorno de ingreso único (SSO = Single Sign On). Usted puede también usar una autenticación simple LDAP. Si el nombre_de_usuario y la contraseña son válidos de acuerdo con CAS, Moodle crea una entrada de nuevo usuario en su base de datos, tomando de LDAP los atributos del usuario si fuera preciso. En los siguientes ingresos sólo se comprueban el nombre_de_usuario y la contraseña.';
$string['auth_cas_enabled'] = 'Activar si se desea usar la autenticación CAS.';
$string['auth_cas_hostname'] = 'Nombre del servidor CAS <br />e.g.: host.domain.fr';
$string['auth_cas_hostname_key'] = 'Nombre del host (\'Hostname\')';
$string['auth_cas_invalidcaslogin'] = 'Lo sentimos, ha fallado su ingreso: no se pudo autorizar';
$string['auth_cas_language'] = 'Seleccionar idioma para las páginas de autenticación';
$string['auth_cas_language_key'] = 'Idioma';
$string['auth_cas_logincas'] = 'Acceso de conexión segura';
$string['auth_cas_logoutcas'] = 'Cambie a \'sí\' si quiere salir del CAS cuando se desconecte de Moodle';
$string['auth_cas_logoutcas_key'] = 'Salir del CAS';
$string['auth_cas_logout_return_url'] = 'Proporcione la URL a donde serán redireccionados los usuarios de CAS después de salir.<br />Si se deja vacío, los usuarios serán redireccionados al lugar en donde Moodle redirecciona a sus usuarios';
$string['auth_cas_logout_return_url_key'] = 'URL de regreso alternativo al salir';
$string['auth_cas_multiauth'] = 'Cambie a \'sí\' si quiere tener multi-autenticación (CAS + otra autenticación)';
$string['auth_cas_multiauth_key'] = 'Multi-autenticación';
$string['auth_casnotinstalled'] = 'No se puede usar la autenticación CAS. El módulo PHP LDAP no está instalado.';
$string['auth_cas_port'] = 'Puerto del servidor CAS';
$string['auth_cas_port_key'] = 'Puerto';
$string['auth_cas_proxycas'] = 'Cambie a \'sí\' si quiere utilizar CAS en modo proxy';
$string['auth_cas_proxycas_key'] = 'Modo proxy';
$string['auth_cas_server_settings'] = 'Configuración del servidor CAS';
$string['auth_cas_text'] = 'Conexión segura';
$string['auth_cas_use_cas'] = 'Usar CAS';
$string['auth_cas_version'] = 'Versión de CAS';
$string['CASform'] = 'Opción de autenticación';
$string['noldapserver'] = 'No hay ningún servidor LDAP configurado para CAS! Sincronización deshabilitada.';
$string['pluginname'] = 'Usar un servidor CAS (SSO)';
$string['privacy:metadata'] = 'El plugin de autenticación (SSO) del servidor CAS no almacena ningún dato personal.';
$string['synctask'] = 'Trabajo de sincronización de usuarios CAS';
