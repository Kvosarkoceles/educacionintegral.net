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
 * Strings for component 'auth_userkey', language 'es_mx', branch 'MOODLE_38_STABLE'
 *
 * @package   auth_userkey
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_userkeydescription'] = 'Ingrese a oodle usando una clave de usuario por única vez';
$string['createuser'] = '¿Crear usuario?';
$string['createuser_desc'] = 'Si se habilita, se creará un usuario nuevo si no se encuentra uno en el LMS.';
$string['incorrectkeylifetime'] = 'El tiempo de vida de la clave del usuario debe ser un número';
$string['incorrectredirecturl'] = 'Usted debe proporcionar una URL válida';
$string['incorrectssourl'] = 'Usted debe proporcionar una URL válida';
$string['iprestriction'] = 'Restricción por IP';
$string['iprestriction_desc'] = 'Si se habilita, una llamada web debe contener parámetro  "ip" al solicitar URL de ingreso.
Un usuario tiene debe de tener IP proporcionada para poder usar una clave para ingresar al LMS.';
$string['ipwhitelist'] = 'Rangos de IPs de lista_blanca';
$string['ipwhitelist_desc'] = 'Ignorar restricciones por IP si la dirección desde donde se emitió este token, o desde donde viene el intento para ingresar, caen dentro de estos rangos.
\\n Esto puede pasar cuando algunos usuarios llegan a Moodle, o el sistema que emite los tokens para ingresar, lo hacen vía una red privada o DMZ (Zona DesMilitarizada).
\\n Si la ruta hacia, ya sea, el sistema que emite los tokens, o este Moodle, es vía un rango de direcciones privadas, entonces configurar este valor a 10.0.0.0/8;172.16.0.0/12;192.168.0.0/16';
$string['keylifetime'] = 'Tiempo de vida de la clave del usuario';
$string['keylifetime_desc'] = 'Tiempo de vida en segundos de cada clave para ingreso de usuario';
$string['mappingfield'] = 'Campo para mapear';
$string['mappingfield_desc'] = 'Este campo del usuario será usado para encontrar al usuario relevante en el LMS.';
$string['noip'] = 'No se puede buscar dirección IP del cliente.';
$string['pluginisdisabled'] = 'El plugin para autenticación por clave_dl_usuario está deshabilitado.';
$string['pluginname'] = 'Autenticación por clave del usuario';
$string['redirecterrordetected'] = 'Se detectó redirección no soportada hacia {$a} , ejecución terminada.';
$string['redirecturl'] = 'URL para redireccionar al salir';
$string['redirecturl_desc'] = 'Opcionalmente, Usted puede redirecionar a los usuarios hacia esta URL después de que se salgan del LMS.';
$string['ssourl'] = 'URL del host SSO';
$string['ssourl_desc'] = 'URL del host SSO (Single-Sign-On) a donde redireccionar a los usuarios. Si se define, los usuarios serán redireccionados aquí al ingresar en lugar de la página de ingreso de Moodle';
$string['updateuser'] = '¿Actualizar usuario?';
$string['updateuser_desc'] = 'Si se habilita, el usuario será actualizado con las propiedades proporcionadas cuando sea llamado el servicio_web.';
$string['userkey:generatekey'] = 'Generar clave de usuario para ingresar';
