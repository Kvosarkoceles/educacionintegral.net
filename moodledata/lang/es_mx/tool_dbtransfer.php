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
 * Strings for component 'tool_dbtransfer', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   tool_dbtransfer
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clidriverlist'] = 'Manejadores de BasedeDatos disponibles para migración';
$string['cliheading'] = 'Migración de BasedeDatos. ¡Asegúrese que nadie accese al servidor durante la migración!';
$string['climigrationnotice'] = 'Migración de BasedeDatos en progreso, por favor espere hasta que se complete la migración y el administrador del servidor actualice la configuración y borre el archivo  $CFG->dataroot/climaintenance.html .';
$string['convertinglogdisplay'] = 'Acciones de mostrar bitácora de conversión';
$string['dbexport'] = 'Exportación de la base de datos';
$string['dbtransfer'] = 'Migración de la base de datos';
$string['enablemaintenance'] = 'Habilitar modo de mantenimiento';
$string['enablemaintenance_help'] = 'Esta opción habilita el modo de mantenimiento durante y después de la migración de la BasedeDatos, previene el acceso de todos los usuarios hasta que la migración se haya completado. Por favor tenga en cuenta que el administrador debe de borrar manualmente el archivo $CFG->dataroot/climaintenance.html después de actualizar las configuraciones en  config.php para restablecer la operación normal.';
$string['exportdata'] = 'Exportar datos';
$string['notargetconectexception'] = 'Lo sentimos, no se puede conectar a la base de datos de destino.';
$string['options'] = 'Opciones';
$string['pluginname'] = 'Transferencia de base de datos';
$string['privacy:metadata'] = 'El plugin de Transferir Base de datos no almacena ningún dato personal.';
$string['targetdatabase'] = 'BasedeDatos de destino';
$string['targetdatabasenotempty'] = '¡La BasedeDatos de destino no debe contener tablas con el prefijo dado!';
$string['transferdata'] = 'Transferir datos';
$string['transferdbintro'] = 'Este script transferirá todo el contenido de esta BasedeDatos a otro servidor de BasedeDatos. A menudo se usa para migración de datos a un tipo de BasedeDatos diferente.';
$string['transferdbtoserver'] = 'Transferir esta base de datos de Moodle a otro servidor';
$string['transferringdbto'] = 'Transfiriendo esta base de datos  {$a->dbtypefrom} a {$a->dbtype} base de datos {$a->dbname} en {$a->dbhost}';
