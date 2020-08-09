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
 * Strings for component 'block_metalink', language 'es_mx', branch 'MOODLE_27_STABLE'
 *
 * @package   block_metalink
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['blocksettings'] = 'Configuraciones del bloque';
$string['cantreadcsv'] = 'No pudo leerse el archivo CSV';
$string['cantremoveold'] = 'El archivo antiguo de cron $a no pudo eliminarse. Por favor revise los permisos para el archivo.';
$string['childisparent'] = '{$a->child} es un padre de  {$a->parent}, por lo que no puede ser añadido como su hijo.';
$string['childnotfound'] = 'Línea {$a->line}: No se encontró al Curso Hijo';
$string['cronfile'] = 'Localización del archivo para el procesamiento automático';
$string['cronfiledesc'] = 'Si Usted escribe aquí una localización de un archivo, esa ruta será revisada periódicamente para buscar un archivo y procesarlo automáticamente';
$string['cronmoved'] = '{$a->old} se movió a {$a->new}';
$string['cronnotmoved'] = '{$a->old} no pudo moverse a {$a->new}. Por favor revise los permisos de la carpeta.';
$string['cronprocessed'] = 'Localización del archivo procesado';
$string['csv'] = 'Archivo CSV';
$string['csvfile'] = 'Elegir archivo CSV';
$string['csv_help'] = 'El archivo debe estar en formato CSV (valores separados por coma). Cada tarea debe estar en una fila, con 3 columnas: operación add o del (add=añadir o del=eliminar) , idnumber del curso padre, idnumber del curso hijo).
Por ejemplo, para añadir el curso hijo con idnumber 1234 al curso padre con idnumber 4321, la línea se leería: add, 4321, 1234';
$string['invalidop'] = 'Línea {$a->line}: Oeración no válida {$a->op}';
$string['keepprocessed'] = 'Conservar archivos procesados';
$string['keepprocessedfor'] = 'Días que se conservarán los archivos procesados';
$string['keepprocessedlong'] = 'Si se elige, los archivos procesados se guardarán en la localización abajo indicada.';
$string['metadisabled'] = 'El plugin de inscripción de Metacurso está deshabilitado. Habilítelo para usar este bloque.';
$string['metalink:addinstance'] = 'Añadir un nuevo bloque de MetaEnlace';
$string['metalink_log'] = 'Bitácora de MetaLiga por ArchivoPlano (Flatfile MetaLik)';
$string['metalink:myaddinstance'] = 'Añadir un nuevo bloque de MetaEnlace a la Página de Mi Hogar';
$string['metalink:use'] = 'Usar bloque de MetaEnlace';
$string['musthavefile'] = 'Usted debe seleccionar un archivo';
$string['nocronfile'] = 'No existe el archivo del Cron';
$string['nodir'] = '{$a} no existe o no es visible. Por favor revise los permisos de la carpeta.';
$string['nopermission'] = 'Usted no tiene permiso para subir relaciones de tutor';
$string['parentnotfound'] = 'Línea {$a->line}: No se encontró el Curso Padre';
$string['pluginname'] = 'Subir ligas de Metacurso';
$string['pluginnameplural'] = 'Subir ligas de Metacurso';
$string['reladded'] = '{$a->child} fue ligado exitosamente a {$a->parent}';
$string['reladderror'] = 'Error al ligar {$a->child} a {$a->parent}';
$string['relalreadyexists'] = '{$a->child} ya estaba ligado a {$a->parent}';
$string['reldeleted'] = '{$a->child} des-ligado de  {$a->parent}';
$string['reldoesntexist'] = '{$a->child} no está ligado a {$a->parent}, por lo que no puede removerse';
$string['removedold'] = 'Se removieron {$a} archivos viejos de cron';
$string['toofewcols'] = 'El archivo CSV tiene insuficientes columnas en la línea {$a}, se esperaban 3.';
$string['toomanycols'] = 'El archivo CSV tiene demasiadas columnas en la línea {$a}, se esperaban 3.';
