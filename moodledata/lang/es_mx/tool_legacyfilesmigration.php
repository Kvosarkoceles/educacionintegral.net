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
 * Strings for component 'tool_legacyfilesmigration', language 'es_mx', branch 'MOODLE_30_STABLE'
 *
 * @package   tool_legacyfilesmigration
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['backtoindex'] = 'Regresar al índice';
$string['batchmigrate'] = 'Migrar archivos heredados para varios cursos';
$string['batchoperations'] = 'Operaciones en lote';
$string['confirmbatchmigrate'] = 'Confirmar la migración masiva de cursos';
$string['courseid'] = 'ID del curso';
$string['coursenotfound'] = 'courso {$a} no encontrado';
$string['coursidnotcollapse'] = '¡la columna de courseid debe de estar no-colapsada!';
$string['empty_owner'] = 'Nombre_del_usuario propietario por defecto a remplazar a propietario vacío';
$string['foldername'] = 'nombre de la carpeta generado en el repositorio privado del usuario';
$string['foldername_desc'] = 'nombre de carpeta generada en repositorio privado del usuario que será evaluada con php eval usando objetos  $course y $usercontext';
$string['listnotmigrated'] = 'Enlistar cursos que contienen archivos heredados a ser migrados';
$string['listnotmigrated_desc'] = 'Usted puede migrar archivos heredados para cursos individuales desde aquí';
$string['migrateall'] = 'Migrar archivos heredados para todos los cursos';
$string['migrateallconfirm'] = '¿Migrar archivos heredados para todos los cursos?';
$string['migratecoursesuccess'] = 'Resultado: Migración exitosa de archivos heredados';
$string['migratecoursesummary'] = 'Migrar archivos heredados para curso con id {$a->id} y nombre "{$a->fullname}" :';
$string['migrateprogress'] = 'Migrar archivos heredados para cursos  n° {$a->current} de {$a->total}';
$string['migrateselected'] = 'Migrar archivos heredados para cursos seleccionados';
$string['migrateselectedcount'] = '¿Migrar archivos heredados para los {$a} cursos seleccionados?';
$string['migratetable'] = 'Migrar tabla';
$string['migrationfailed'] = 'La migración de archivos heredados no fue exitosa.<br/>La bitácora de la actualización era: <br />{$a}';
$string['nocoursesselected'] = 'Sin cursos seleccionados';
$string['nocoursestoupgrade'] = 'No hay cursos que requieran migración de archivos heredados';
$string['notmigratedintro'] = 'Lista de cursos que contienen archivos heredados para migrarse a archivos privados del usuario';
$string['notmigratedtitle'] = 'Cursos a migrar qe contienen archivos heredados';
$string['notsupported'] = 'no soportado';
$string['owner'] = 'Propietario';
$string['pluginname'] = 'Migración de archivos heredados';
$string['preselect_owner'] = 'Preseleccionar y llenar propietario';
$string['select'] = 'Seleccionar';
$string['supported'] = 'Migrar';
$string['toollegacyfilesmigrationsettings'] = 'Configuraciones para migración de archivos heredados';
$string['unchoosenowner'] = 'Por favor elija un usuario para el curso con id {$a}';
$string['unknown'] = 'desconocido';
$string['usernotfound'] = 'usuario {$a} no encontrado';
$string['viewcourse'] = 'Ver el curso con los archivos heredados migrados';
