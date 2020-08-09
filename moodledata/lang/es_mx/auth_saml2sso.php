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
 * Strings for component 'auth_saml2sso', language 'es_mx', branch 'MOODLE_33_STABLE'
 *
 * @package   auth_saml2sso
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_saml2ssodescription'] = 'Los usuarios pueden ingresar usando el Proveedor de Identidad SAML2';
$string['error_create_user'] = 'Ocurrió un error al crear una cuenta de usuario. Por favor, contacte al administrador.';
$string['error_entityid'] = 'Debe darse un nombre de orígen del Proveedor de Servicio SAML2 (SP)';
$string['error_field_idp_firstname'] = 'El campo de Nombre(s)  de IdP es obligatorio';
$string['error_field_idp_lastname'] = 'El campo de Apellido(s)  de IdP es obligatorio';
$string['error_idpattr'] = 'Debe darse un atributo de mapeo de nombre_de_usuario (username)';
$string['error_lockconfig_field_map_email'] = 'La dirección Email  en los campos de Mapeo de datos es obligatoria';
$string['error_lockconfig_field_map_firstname'] = 'El nombre(s)  en los campos de Mapeo de datos es obligatorio';
$string['error_lockconfig_field_map_lastname'] = 'El apellido(s)  en los campos de Mapeo de datos es obligatorio';
$string['error_sp_path'] = 'Debe darse una ruta al Proveedor de Servicio SAML2 (SP) en config';
$string['help_autocreate'] = '¿Permitir crear nuevos usuarios?';
$string['help_dual_login'] = 'Definir si es que los usuarios pueden ingresar directamente a Moodle. Para pasar de lado IdP Usted debería de añadir el parámetro saml=off . Por ejemplo: /login/index.php?saml=off';
$string['help_edit_profile'] = 'Si los usuarios no pueden editar perfil, ellos no verán el enlace hacia el perfil';
$string['help_entityid'] = 'Nombre orígen del Provedor de Servicio disponible en /config/authsources.php';
$string['help_field_idp_firstname'] = 'El campo de IdP que contiene el nombre del usuario';
$string['help_field_idp_fullname'] = '¿ Es un único campo el nombre_de_usuario de IdP ? Si así fuera, llene con el mismo valor en los campos de nombre y apellido inferiores';
$string['help_field_idp_lastname'] = 'Campo de IdP que contiene el apellido del usuario';
$string['help_idpattr'] = '¿ Cual atributo de IdP debería ser usado para nombre_de_usuaro ?';
$string['help_logout_url_redir'] = 'URL para redireccionar usuarios al salir del sitio. Si la URL es inválida o vacía, redireccionará a la página principal de Moodle (ejemplo: https://ir.a/otra/url)';
$string['help_moodle_mapping'] = '¿ Donde revisar si existe el nombre_de_usuario ? Si se usa idnumber, recordar mapear in Mapeo de Datos abajo';
$string['help_single_signoff'] = '¿Sacar usuarios de Moodle y IdP?';
$string['help_sp_path'] = 'Ruta absoluta a la instalación del Provedor del Servicio installation. Ejemplo.: /var/www/simplesamlphp/';
$string['label_autocreate'] = 'Auto crear usuarios';
$string['label_dual_login'] = 'Ingreso Dual';
$string['label_edit_profile'] = '¿Pueden los usuarios editar su perfil?';
$string['label_entityid'] = 'Nombre fuente del Provedor del Servicio';
$string['label_field_idp_firstname'] = 'Campo del Nombre de IdP';
$string['label_field_idp_fullname'] = 'Nombre Completo de IdP';
$string['label_field_idp_lastname'] = 'Campo de Apellido(s) de IdP';
$string['label_idpattr'] = 'Mapeo de nombre_de_usuario';
$string['label_instructions_p1'] = '<p>Usted deebe llenar los siguientes códigos de mapeo de Datos como:</p><ul><li>Nombre(s) => givenName</li><li>Apellido(s) => surname</li><li>Dirección Email: => email</li></ul><p>Usted puede cambiar esto en <code>$stringMapping</code> array in <code>auth.php</code></p>';
$string['label_instructions_title'] = 'Instrucciones';
$string['label_logout'] = 'Haga click aquí para salir';
$string['label_logout_url_redir'] = 'URL para salida';
$string['label_moodle_mapping'] = 'Revisión de nombre_De_usuario';
$string['label_single_signoff'] = 'Single Sign Off (Salida Única)';
$string['label_sp_path'] = 'Provedor de Servicio (SP) SAML2';
$string['nouser'] = 'No hay usuario con la Id proporcionada y el auto-ingresar no está permitido. La Id proporcionada es:';
$string['pluginname'] = 'Autenticación SAML2 SSO';
$string['settings_saml2sso'] = '';
$string['success_config'] = 'Todos los campos de config fueron guardados exitosamente';
