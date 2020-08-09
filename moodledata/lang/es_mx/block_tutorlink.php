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
 * Strings for component 'block_tutorlink', language 'es_mx', branch 'MOODLE_25_STABLE'
 *
 * @package   block_tutorlink
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['blocksettings'] = 'Configuraciones del bloque';
$string['cantreadcsv'] = 'No pudo leerse archivo CSV';
$string['cantremoveold'] = 'No pudo eliminarse el archivo antiguo del cron $a . Por favor revise los permisos.';
$string['cronfile'] = 'Localización del archivo para procesamiento automático';
$string['cronfiledesc'] = 'Si Usted escribe aquí una localización de un archivo, esa ruta será revisada periódicamente para buscar un archivo y procesarlo automáticamente';
$string['cronmoved'] = '{$a->old} se movió a {$a->new}';
$string['cronnotmoved'] = '{$a->old} no pudo moverse a {$a->new}. Por favor revise lospermisos de la carpeta.';
$string['cronprocessed'] = 'Localización del archivo procesado';
$string['csv'] = 'Archivo CSV';
$string['csvfile'] = 'Elija archvo CSV';
$string['csv_help'] = 'El archivo debe estar en formato CSV (valores separados por coma). Cada tarea debe estar en una fila, con 3 columnas: operación add o del (add=añadir o del=eliminar) , idnumber del curso padre, idnumber del curso hijo).
Por ejemplo, para añadir el curso hijo con idnumber 1234 al curso padre con idnumber 4321, la línea se leería: add, 4321, 1234';
$string['invalidop'] = 'Línea {$a->line}: Operación no válida{$a->op}';
$string['keepprocessed'] = 'Conservar archivos procesados';
$string['keepprocessedfor'] = 'Días a conservar los archivos procesados';
$string['keepprocessedlong'] = 'Si se activa, los archivos procesados se guardarán en la localización abajo indicada.';
$string['musthavefile'] = 'Usted debe elegir un archivo';
$string['nocronfile'] = 'No existe el archivo cron';
$string['nodir'] = '{$a} no existe o no es visible. Por favor revise los permisos de la carpeta.';
$string['nopermission'] = 'Usted no tiene permiso para subir relaciones de tutor';
$string['notutorrole'] = 'Antes de usar este bloque, Usted debe elegir un rol de tutor en el';
$string['pluginname'] = 'Subir relaciones de tutor';
$string['pluginnameplural'] = 'Subir relaciones de tutor';
$string['reladded'] = '{$a->tutor} asignado exitosamente a {$a->student}';
$string['reladderror'] = 'Error al asignar {$a->tutor} a {$a->student}';
$string['relalreadyexists'] = '{$a->tutor} ya estaba asignado a {$a->student}';
$string['reldeleted'] = '{$a->tutor} des-asignado de  {$a->student}';
$string['reldoesntexist'] = '{$a->tutor} no estaba asigado a {$a->student}, por lo que no puede quitarse';
$string['removedold'] = 'Se quitaron {$a} archivos antiguos de cron';
$string['toofewcols'] = 'El archivo CSV tiene insuficientes columnas en la línea {$a}, se esperaban 3.';
$string['toomanycols'] = 'El archivo CSV tiene demasiadas columnas en la línea {$a}, se esperaban 3.';
$string['tuteenotfound'] = 'Línea {$a->line}: No se encontró al tutorado';
$string['tutorlink_log'] = 'Bitácora de Liga de Tutor por Archivoplano';
$string['tutornotfound'] = 'Línea {$a->line}: No se encontró al tutor';
$string['tutorrole'] = 'Rol de tutor';
$string['tutorrole_explain'] = 'Este el el rol que será asignado a los tutores en el contexto de usuario de los estudiantes';
