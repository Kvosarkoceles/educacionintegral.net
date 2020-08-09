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
 * Strings for component 'tool_lpmigrate', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   tool_lpmigrate
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowedcourses'] = 'Cursos permitidos';
$string['allowedcourses_help'] = 'Cursos seleccionados para migrarse a la nueva estructura. Si no se especifican cursos, entonces se migrarán todos los cursos.';
$string['continuetoframeworks'] = 'Continuar hacia estructuras';
$string['coursecompetencymigrations'] = 'Migraciones de competencia de curso';
$string['coursemodulecompetencymigrations'] = 'Migraciones de competencia de actividad o recurso';
$string['coursemodulesfound'] = 'Actividades o recursos de curso encontrados';
$string['coursesfound'] = 'Cursos encontrados';
$string['coursestartdate'] = 'Fecha de incio de cursos';
$string['coursestartdate_help'] = 'Si se habilita, los cursos con una fecha de inicio anterior a la que está especificada aquí no serán migrados.';
$string['disallowedcourses'] = 'Cursos no-permitidos';
$string['disallowedcourses_help'] = 'Seleccione aquí cualquier curso que NO deba de ser migrado a la nueva estructura.';
$string['errorcannotmigratetosameframework'] = 'No puede migrarse desde ni hacia la misma estructura.';
$string['errorcouldnotmapcompetenciesinframework'] = 'No pudo mapearse a ninguna competencia en esta estructura.';
$string['errors'] = 'Errores';
$string['errorwhilemigratingcoursecompetencywithexception'] = 'Error al migrar la competencia de curso: {$a}';
$string['errorwhilemigratingmodulecompetencywithexception'] = 'Error al migrar la competencia de actividad o recurso: {$a}';
$string['excludethese'] = 'Excluir estos';
$string['explanation'] = 'Esta herramienta puede usarse para actualizar una estructura de competencia a una nueva versión. Esta herramienta busca competencias dentro de cursos y actividades usando la estructura antigua, y actualiza los enlaces para que apunten hacia la nueva estructura.

No se recomienda editar directamente el conjunto antiguo de competencias, ya que esto cambiaría todas las competencias que ya han sido otorgadas en los planes de aprendizaje de usuarios.

Típicamente, Usted importaría la nueva versión de una estructura, oculta la estructura antigua, y entonces usa esta herramienta para migrar cursos nuevos hacia la nueva estructura.';
$string['findingcoursecompetencies'] = 'Encontrando competencias de curso';
$string['findingmodulecompetencies'] = 'Encontrando competencias de actividad o recurso';
$string['frameworks'] = 'Estructuras';
$string['limittothese'] = 'Limitar a estos';
$string['lpmigrate:frameworksmigrate'] = 'Migrar estructuras';
$string['migrateframeworks'] = 'Migrar estructuras';
$string['migratefrom'] = 'Migrar desde';
$string['migratefrom_help'] = 'Seleccionar la estructura más antigua actualmente en uso';
$string['migratemore'] = 'Migrar más';
$string['migrateto'] = 'Migrar hacia';
$string['migrateto_help'] = 'Seleccionar la nueva versión de la estructura. Solamente es posible seleccionar una estructura que no esté oculta.';
$string['migratingcourses'] = 'Migrando cursos';
$string['missingmappings'] = 'Mapeos faltantes';
$string['performmigration'] = 'Realizar migración';
$string['pluginname'] = 'Herramienta para migración de competencias';
$string['privacy:metadata'] = 'El plugin de la Herramienta para migración de competencias no almacena ningún dato personal.';
$string['results'] = 'Resultados';
$string['startdatefrom'] = 'Fecha de inicio desde';
$string['unmappedin'] = 'No-mapeada en {$a}';
$string['warningcouldnotremovecoursecompetency'] = 'La competencia de curso no pudo ser removida.';
$string['warningcouldnotremovemodulecompetency'] = 'La competencia destino de actividad o recurso no pudo ser removida.';
$string['warningdestinationcoursecompetencyalreadyexists'] = 'La competencia de curso de destino ya existe.';
$string['warningdestinationmodulecompetencyalreadyexists'] = 'La competencia destino de actividad o recurso ya existe.';
$string['warnings'] = 'Advertencias';
