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
 * Strings for component 'enrol_ldapuserrel', language 'es_mx', branch 'MOODLE_26_STABLE'
 *
 * @package   enrol_ldapuserrel
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bind_dn'] = 'Si quiere usar un usuario-liga para buscar usuarios, especifíquelo aquí. Algo como  \'cn=ldapuser,ou=public,o=org\'';
$string['bind_dn_key'] = 'Nombre distinguido de usuario-liga';
$string['bind_pw'] = 'Contraseña para el usuario-liga';
$string['bind_pw_key'] = 'Contraseña';
$string['bind_settings'] = 'Configuraciones del ligado';
$string['filter'] = 'Filtro LDAP usado para buscar mentores. Usualmente \'(objectclass=*)\' o \'(objectclass=posixGroup)';
$string['filter_key'] = 'Filtro LDAP';
$string['host_url'] = 'Especifica el host LDAP en formato-URL similar a \'ldap://ldap.myorg.com/\' o \'ldaps://ldap.myorg.com/';
$string['host_url_key'] = 'URL del host';
$string['idnumber_attribute'] = 'Nombre del campo en LDAP que representa el identificador único del mentor.';
$string['idnumber_attribute_key'] = 'Identificador único del mentor en LDAP';
$string['ldap_encoding'] = 'Especifica la codificación usada por el servidor LDAP. La mayoría probablemente son utf-8, MS AD v2 usa la codificación de plataforma por defecto, tal como cp1252, cp1250, etc.';
$string['ldap_encoding_key'] = 'Codificación LDAP';
$string['localobjectuserfield'] = 'Campo del usuario en Moodle para el aprendiz';
$string['localobjectuserfield_desc'] = 'Nombre del campo en la tabla de usuarios de Moodle que es usado para identificar al aprendiz';
$string['localsubjectuserfield'] = 'Campo de usuario en Moodle para el mentor';
$string['localsubjectuserfield_desc'] = 'Nombre del campo en la tabla de usuarios en Moodle que es usado para identificar el mentor';
$string['pluginname'] = 'Asignación de rol de usuario LDAP';
$string['pluginname_desc'] = 'Usted puede usar LDAP para controlar su rol de mentor. Se asume que su LDAP contiene al menos un campo que contiene una entrada de nombre de usuario de aprendiz. Estos son comparados contra los campos que Usted elige en las tablas de usuarios locales.';
$string['remote_fields_mapping'] = 'Mapeo de campo remoto LDAP';
$string['role_mapping'] = '<p>Para cada rol que Usted quiera asignar desde LDAP, Usted necesita especificar la lista de contextos en donde están localizados los mentores. Separe los diferentes contextos con  \';\'.</p><p>Usted también necesita especificar el atributo que usa su servidor LDAP para mantener la lista de aprendices.</p>';
$string['role_mapping_key'] = 'Mapear roles desde LDAP';
$string['roles'] = 'Mapeo de roles';
$string['search_sub'] = 'Buscar rol de usuario desde subcontextos';
$string['search_sub_key'] = 'Buscar subcontextos';
$string['server_settings'] = 'Configuraciones de servidor LDAP';
$string['user_type'] = 'Si la membresía del grupo contiene nombres distinguidos, especifica cómo se guardan los usuarios en LDAP';
$string['user_type_key'] = 'Tipo de usuario';
$string['version'] = 'La versión del protocolo LDAP que su servidor está usando';
$string['version_key'] = 'Versión';
