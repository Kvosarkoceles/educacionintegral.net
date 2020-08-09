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
 * Strings for component 'tool_cohortdatabase', language 'es_mx', branch 'MOODLE_35_STABLE'
 *
 * @package   tool_cohortdatabase
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['createusers_auth'] = 'Autenticación';
$string['createusers_auth_desc'] = 'El tipo de autrenticación a configurar para estos usuarios.';
$string['createusers_email'] = 'Email remoto';
$string['createusers_email_desc'] = 'El nombre del campo en la tabla remota que contiene el Email';
$string['createusers_firstname'] = 'Nombre remoto';
$string['createusers_firstname_desc'] = 'El nombre del campo en la tabla remota que contiene el nombre';
$string['createusers_idnumber'] = 'IDnumber remoto';
$string['createusers_idnumber_desc'] = 'El nombre del campo en la tabla remota que contiene el idnumber';
$string['createusers_lastname'] = 'Apellido remoto';
$string['createusers_lastname_desc'] = 'El nombre del campo en la tabla remota que contiene el apellido';
$string['createusers_username'] = 'Nombre_de_usuario remoto';
$string['createusers_username_desc'] = 'El nombre del campo en la tabla remota que contiene el nombre_del_usuario';
$string['dbencoding'] = 'Codificación de base de datos';
$string['dbhost'] = 'Host de base de datos';
$string['dbhost_desc'] = 'Nombre del host o dirección IP del tipo de servidor de base de datos. Use un nombre DNS del sistema si está usando ODBC.';
$string['dbname'] = 'Nombre de base de datos';
$string['dbname_desc'] = 'Dejar vacío se se usa un nombre DNS en host de base de datos.';
$string['dbpass'] = 'Contraseña de base de datos';
$string['dbsetupsql'] = 'Comando de configuración de base de datos';
$string['dbsetupsql_desc'] = 'Comando SQL para configuración de base de datos especial; a menudo usado para configurar la codificación de la comunicación - ejemplo para  MySQL y PostgreSQL: <em>SET NAMES \'utf8\'</em>';
$string['dbsybasequoting'] = 'Usar comillas sybase';
$string['dbsybasequoting_desc'] = 'Escape de comilla sencilla estilo Sybase - necesario para Oracle, MS SQL y algunas otras  bases de datos. ¡No usar para MySQL!';
$string['dbtype'] = 'Manejador (driver) de base de datos';
$string['dbtype_desc'] = 'Nombre del manejador (driver) ADOdb de base de datos, tipo del motor de base de datos externa.';
$string['dbuser'] = 'Usuario de base de datos';
$string['debugdb'] = 'Depurar ADOdb';
$string['debugdb_desc'] = 'Depurar conexión ADOdb a base de datos externa - usar cuando se obtenga página vacía durante el ingreso. ¡No es apropiado para sitios en producción!';
$string['keepincohort'] = 'Mantener en cohorte';
$string['localuserfield'] = 'Campo de usuario local';
$string['minrecords'] = 'Registros máximos';
$string['minrecords_desc'] = 'Evitar que corra la sincronización si el número de registros regresados en la tabla externa es menos que este número (ayuda a evitar que se quiten usuarios cuando la tabla externa está vacía).';
$string['pluginname'] = 'Base de datos de externa de cohorte';
$string['pluginname_desc'] = 'Usted puiede usar una base de datos externa (de casi cualquier tipo) para controlar sus cohortes.';
$string['privacy:metadata'] = 'El plugin de base de datos de cohorte no almacena ningún datopersonal.';
$string['remotecohortdescfield'] = 'Campo de descripción de cohorte remoto';
$string['remotecohortdescfield_desc'] = 'El nombre del campo en la tabla remota que estamos usando para aparejar entradas en la tabla de cohorte.';
$string['remotecohortidfield'] = 'Campo ID cohorte remoto';
$string['remotecohortidfield_desc'] = 'El nombre del campo en la tabla remota que estamos usando para aparejar entradas en la tabla de cohorte.';
$string['remotecohortnamefield'] = 'Campo de nombre de cohorte remoto';
$string['remotecohortnamefield_desc'] = 'El nombre del campo en la tabla remota que estamos usando para aparejar entradas en la tabla de corte.';
$string['remotecohorttable'] = 'Tabla de cohorte de usuarios remotos';
$string['remotecohorttable_desc'] = 'Especificar el nombre de la  tabla que contiene lista de cohortes de usuario.';
$string['remoteuserfield'] = 'Campo de usuario remoto';
$string['remoteuserfield_desc'] = 'El nombre del campo en la tabla remota que estamos usando para aparejar entradas en la tabla de usuario.';
$string['removedaction'] = 'Acción de remoción externa';
$string['removedaction_desc'] = 'Seleccionar acción a realizar cuando el usuario desaparece de la fuente de cohorte externa. Por favor tenga en cuenta que  algunos datos del usuario y configuraciones son purgadas del curso si este fuera sincronizado con la des-inscripción (baja) del curso.';
$string['removefromcohort'] = 'Quitar de cohorte';
$string['settingscreateusers'] = 'Crear usuarios';
$string['settingscreateusers_desc'] = 'crear usuarios si no existieran.';
$string['settingsheaderdb'] = 'Conexión a base de datos externa';
$string['settingsheaderlocal'] = 'Mapeo de campo local';
$string['settingsheaderremote'] = 'Sincronización de cohorte remota';
$string['sync'] = 'Sincronizar cohortes con base de datos externa';
