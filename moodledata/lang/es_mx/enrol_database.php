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
 * Strings for component 'enrol_database', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   enrol_database
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['database:config'] = 'Configurar instancias de inscripción por BasedeDatos';
$string['database:unenrol'] = 'Des-inscribir (dar de baja) usuarios suspendidos';
$string['dbencoding'] = 'Codificación de base de datos';
$string['dbhost'] = 'Host de la base de datos';
$string['dbhost_desc'] = 'Dirección IP del servidor o nombre del host de la base de datos. Use un nombre de sistema DSN si usa ODBC. Use un PDO DSN si usa PDO.';
$string['dbname'] = 'Nombre de la base de datos';
$string['dbname_desc'] = 'Déjelo vacío si usa un nombre DSN en host de BasedeDatos.';
$string['dbpass'] = 'Contraseña de la base de datos';
$string['dbsetupsql'] = 'Comando de configuración de la base de datos';
$string['dbsetupsql_desc'] = 'Comando SQL para la instalación de bases de datos especiales, a menudo utilizado para establecer la codificación de comunicación - ejemplo para MySQL y PostgreSQL: <em>SET NAMES \'utf8\'</em>';
$string['dbsybasequoting'] = 'Usar comillas sybase';
$string['dbsybasequoting_desc'] = 'Usar escape de cita del tipo de comilla simple tipo Sybase (Sybase style single quote escaping) - se requiere para Oracle, MS SQL y otras bases de datos. ¡ No se use para MySQL !';
$string['dbtype'] = 'Driver de la base de datos';
$string['dbtype_desc'] = 'Nombre del driver de la base de datos ADOdb, tipo del motor de base de datos externo.';
$string['dbuser'] = 'Usuario de la base de datos';
$string['debugdb'] = 'Depurar ADOdb';
$string['debugdb_desc'] = 'Depurar conexión  ADOdb a una base de datos externa - usela cuando obtenga una página vacía durante el ingreso. No es adecuada para sitios en producción!';
$string['defaultcategory'] = 'Categoría por defecto del nuevo curso';
$string['defaultcategory_desc'] = 'Categoría por defecto para cursos de creación automática. Usada cuando no se ha especificado o no se ha encontrado el ID de una nueva categoría.';
$string['defaultrole'] = 'Rol por defecto';
$string['defaultrole_desc'] = 'Rol que se asigna por defecto si nigún otro rol se especifica en una tabla externa.';
$string['ignorehiddencourses'] = 'Pasar por alto cursos ocultos';
$string['ignorehiddencourses_desc'] = 'Si se activa esta opción, los usuarios no serán inscritos en cursos configurados como no disponibles para los estudiantes.';
$string['localcategoryfield'] = 'Campo de categoría local';
$string['localcoursefield'] = 'Campo de curso local';
$string['localrolefield'] = 'Campo de rol local';
$string['localuserfield'] = 'Campo de usuario local';
$string['newcoursecategory'] = 'Campo de categoría del nuevo curso';
$string['newcoursefullname'] = 'Campo de nombre completo del nuevo curso';
$string['newcourseidnumber'] = 'Campo de número ID del nuevo curso';
$string['newcourseshortname'] = 'Campo de nombre corto del nuevo curso';
$string['newcoursetable'] = 'Tabla de nuevos cursos remotos';
$string['newcoursetable_desc'] = 'Se especifica el nombre de la tabla que contiene la lista de cursos que deberían crearse automáticamente. Si está vacía, significa que no está creado ningún curso.';
$string['pluginname'] = 'Base de datos externa';
$string['pluginname_desc'] = 'Usted puede usar una base de datos externa (de casi cualquier tipo) para controlar sus inscripciones. Se asume que la base de datos externa contiene al menos un campo con el ID del curso, y un campo que contiene el ID del usuario. Estos serán comparados contra los campos que Usted elija en sus tablas del curso local y usuario.';
$string['privacy:metadata'] = 'El plugin de Inscripción por Base de datos externa no almacena ningún dato personal.';
$string['remotecoursefield'] = 'Nombre del campo en la tabla remota que se usa para emparejar las entradas en la tabla de cursos';
$string['remotecoursefield_desc'] = 'El nombre del campo en la tabla remota que nosotros estamos empleando para concordar las entradas en la tabla del curso';
$string['remoteenroltable'] = 'Tabla de inscripción remota de usuarios';
$string['remoteenroltable_desc'] = 'Indique el nombre de la tabla que contiene la lista de inscripciones de usuario. Si queda vacío significa que no hay sincronización en la inscripción de usuarios.';
$string['remoteotheruserfield'] = 'Campo Remoto de Otro Usuario';
$string['remoteotheruserfield_desc'] = 'El nombre del campo en la tabla remota que estamos usando para señalizar asignaciones de rol de "Otro Usuario".';
$string['remoterolefield'] = 'Nombre del campo en la tabla remota que se usa para hacer coincidir las entradas en la tabla de cursos';
$string['remoterolefield_desc'] = 'El nombre del campo en la tabla remota que nosotros estamos empleando para concordar las entradas en la tabla de roles.';
$string['remoteuserfield'] = 'Nombre del campo en la tabla remota que se usa para emparejar las entradas en la tabla de usuarios';
$string['remoteuserfield_desc'] = 'El nombre del campo en la tabla remota que nosotros estamos empleando para concordar las entradas en la tabla de usuarios.';
$string['settingsheaderdb'] = 'Conexión con la base de datos externa';
$string['settingsheaderlocal'] = 'Asignación de campos locales';
$string['settingsheadernewcourses'] = 'Creación de nuevos cursos';
$string['settingsheaderremote'] = 'Sincronización de inscripción remota';
$string['syncenrolmentstask'] = 'Sincronizar trabajos de inscripciones por base de datos extewrna';
$string['templatecourse'] = 'Nueva plantilla de curso';
$string['templatecourse_desc'] = 'Opcional: los cursos auto-creados pueden copiar sus configuraciones a partir de un curso machote-patrón. Escriba aquí el nombre corto (shortname) del curso machote-patrón.';
