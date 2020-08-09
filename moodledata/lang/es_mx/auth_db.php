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
 * Strings for component 'auth_db', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   auth_db
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_dbcannotconnect'] = 'No se puede conectar a base de datos externa.';
$string['auth_dbcannotreadtable'] = 'No se puede leer tabla externa.';
$string['auth_dbcantconnect'] = 'No se ha podido conectar con la base de datos de autenticación especificada...';
$string['auth_dbchangepasswordurl_key'] = 'URL de cambio de contraseña';
$string['auth_dbcolumnlist'] = 'La tabla externa contiene las siguientes columnas:<br />{$a}';
$string['auth_dbdebugauthdb'] = 'Depurar ADPdb';
$string['auth_dbdebugauthdbhelp'] = 'Depurar conexión ADOdb a una base de datos externa - Utilizarlo cuando se esté obteniendo una página en blanco durante el ingreso. No es conveniente para sitios de producción.';
$string['auth_dbdeleteuser'] = 'Eliminado el usuario {$a->name} id {$a->id}';
$string['auth_dbdeleteusererror'] = 'Error  al eliminar al usuario {$a}';
$string['auth_dbdescription'] = 'Este método utiliza una tabla de una base de datos externa para comprobar si un determinado usuario y contraseña son válidos. Si la cuenta es nueva, la información de otros campos puede también ser copiada en Moodle.';
$string['auth_dbextencoding'] = 'Codificación de base de datos externa';
$string['auth_dbextencodinghelp'] = 'Codificación del usuario en base de datos externa';
$string['auth_dbextrafields'] = 'Estos campos son opcionales. Usted puede elegir pre-rellenar algunos campos del usuario de Moodle con información desde los <strong>campos de la base de datos externa</strong> que especifique aquí. <p>Si deja esto en blanco, se tomarán los valores por defecto</p>.<p>En ambos casos, el usuario podrá editar todos estos campos después de entrar</p>.';
$string['auth_dbfieldpass'] = 'Nombre del campo que contiene las contraseñas';
$string['auth_dbfieldpass_key'] = 'Campo de contraseña';
$string['auth_dbfielduser'] = 'Nombre del campo que contiene los nombres_de_usuarios. Este campo debe ser un tipo de dato varchar.';
$string['auth_dbfielduser_key'] = 'Campo de nombre_de_usuario';
$string['auth_dbhost'] = 'La computadora que hospeda el servidor de la base de datos. Use una entrada de sistema DSN si usa ODBC. Use una entrada PDO DSN si usa PDO.';
$string['auth_dbhost_key'] = 'Host';
$string['auth_dbinsertuser'] = 'Insertado el usuario {$a->name} id {$a->id}';
$string['auth_dbinsertuserduplicate'] = 'Error al insertar al usuario {$a->username} - un usuario con el mismo nombre_de_usuario ya había sido creado por el plugin de \'{$a->auth}\'.';
$string['auth_dbinsertusererror'] = 'Error al insertar al usuario {$a}';
$string['auth_dbname'] = 'Nombre de la base de datos por sí misma. Déjelo vacío si usa una ODBC DSN. Déjela vacía si su PDO DSN ya contiene el nombre de la base de datos.';
$string['auth_dbname_key'] = 'Nombre de la Base de Datos';
$string['auth_dbnoexttable'] = 'Tabla externa no especificada.';
$string['auth_dbnouserfield'] = 'Campo de usuario externo no especificado.';
$string['auth_dbpass'] = 'Contraseña correspondiente al nombre_de_usuario anterior';
$string['auth_dbpass_key'] = 'Contraseña';
$string['auth_dbpasstype'] = '<p>Especifique el formato que está usando el campo de contraseña.</p> <p>Use "interno" si quiere que la base de datos externa gestione los nombres_de_usuarios y las direcciones de correo electrónico, pero que Moodle administre las contraseñas. Si utiliza "interno", Usted <i>debe de</i> proporcionar un campo de dirección de correo electrónico poblado en la base de datos externa, y Usted debe ejecutar regularmente tanto admin/cron.php como auth/db/cli/sync_users.php. Moodle enviará un correo electrónico a los nuevos usuarios con una contraseña temporal.</p>';
$string['auth_dbpasstype_key'] = 'Formato de contraseña';
$string['auth_dbreviveduser'] = 'Recuperado el usuario {$a->name} id {$a->id}';
$string['auth_dbrevivedusererror'] = 'Error al recuperar al usuario {$a}';
$string['auth_dbsaltedcrypt'] = 'Cadena para \'\'hashing\'\' de encriptación de una vía';
$string['auth_dbsetupsql'] = 'Comando de ajuste SQL';
$string['auth_dbsetupsqlhelp'] = 'Comando SQL para la configuración especial de la base de datos, comúnmente se utiliza para la codificación de comunicación - ejemplo para MySQL y PostgreSQL: <em>SET NAMES \'utf8\'</em>';
$string['auth_dbsuspenduser'] = 'Suspendido el usuario {$a->name} id {$a->id}';
$string['auth_dbsuspendusererror'] = 'Error al suspender al usuario {$a}';
$string['auth_dbsybasequoting'] = 'Utilizar citaciones (quotes) de sybase';
$string['auth_dbsybasequotinghelp'] = 'Escape con comilla sencilla de estilo Sybase - necesaria para  Oracle, MS SQL y algunas otras bases de datos. ¡No se use para MySQL!';
$string['auth_dbsyncuserstask'] = 'Sincronizar trabajos de usuarios';
$string['auth_dbtable'] = 'Nombre de la tabla en la base de datos';
$string['auth_dbtableempty'] = 'La tabla externa está vacía.';
$string['auth_dbtable_key'] = 'Tabla';
$string['auth_dbtype'] = 'El tipo de base de datos (Vea la documentación <a href="http://adodb.org/dokuwiki/doku.php" target="_blank">ADOdb - Database Abstraction Layer for PHP</a> para los detalles).';
$string['auth_dbtype_key'] = 'Base de datos';
$string['auth_dbupdateusers'] = 'Actualizar usuarios';
$string['auth_dbupdateusers_description'] = 'Además de insertar nuevos usuarios, actualizar usuarios existentes.';
$string['auth_dbupdatinguser'] = 'Actualizando al usuario {$a->name} id {$a->id}';
$string['auth_dbuser'] = 'Nombre_de_usuario con acceso de lectura a la base de datos';
$string['auth_dbuser_key'] = 'Usuario de la Base de Datos';
$string['auth_dbuserstoadd'] = 'Entradas de usuario a añadir: {$a}';
$string['auth_dbuserstoremove'] = 'Entradas de usuario a eliminar: {$a}';
$string['pluginname'] = 'Usar una base de datos externa';
$string['privacy:metadata'] = 'El plugin de Autenticación por base de datos externa no almacena ningún dato personal.';
