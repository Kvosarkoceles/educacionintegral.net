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
 * Strings for component 'auth_ldap_syncplus', language 'es_mx', branch 'MOODLE_38_STABLE'
 *
 * @package   auth_ldap_syncplus
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_ldap_syncplusdescription'] = 'Este método proporciona autenticación contra un servidor LDAP externo.
Si el nombre_de_usuario y la contraseña son válidos, Moodle creará una nueva entrada de usuario en su BasedeDatos. Este módulo puede leer atributos del usuario desde LDAP y pre-llenar los campos necesarios en Moodle. Para los ingresos siguientes solamente se revisarán el nombre_de_usuario y la contraseña.';
$string['auth_remove_deletewithgraceperiod'] = 'Suspender internamente y eliminar internamente por completo después del período de gracia';
$string['nouserentriestosuspend'] = 'Sin entradas de usuarios para suspender';
$string['pluginname'] = 'Servidor LDAP (Sync Plus)';
$string['privacy:metadata'] = 'El plugin de autenticación LDAP (Sync Plus) no almacena ningún dato personal.';
$string['removeuser_graceperiod'] = 'Período de gracia para eliminar completamente';
$string['removeuser_graceperiod_desc'] = 'Después de suspender internamente a un usuario, el \'script\' de sincronización esperará este número de días para que el usuario sea completamente eliminado internamente. Si el usuario re-aparece en LDAP dentro de este período de gracia, el usuario será re-activado. Nota: Esta configuración solamente es usada si "Remover usuario ext" está configurado a "Suspender internamente y eliminar por completo internamente después del período de gracia"';
$string['syncroles'] = 'Trabajo de sincronización de roles LDAP (Sync Plus)';
$string['sync_script_createuser_enabled'] = 'Si se habilita (por defecto), el \'script\' de sincronización creará cuentas Moodle para todos los usuarios LDAP que nunca hubieran ingresado a Moodle antes. Si se deshabilita, el \'script\' de sincronización no creará cuentas Moodle para todos los usuarios LDAP.';
$string['sync_script_createuser_enabled_key'] = 'Añadir nuevos usuarios';
$string['synctask'] = 'Trabajo de sincronización de usuarios LDAP (Sync Plus)';
$string['userentriestosuspend'] = 'Entradas de usuarios a suspender: {$a}';
$string['waitinginremovalqueue'] = 'Esperando haciendo cola para remoción por {$a->days} días de gracia: {$a->name} ID {$a->id}';
