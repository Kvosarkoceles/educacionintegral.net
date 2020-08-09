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
 * Strings for component 'block_course_ascendants', language 'es_mx', branch 'MOODLE_25_STABLE'
 *
 * @package   block_course_ascendants
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['ascendantsaccess'] = 'Acceso a módulos de curso ascendentes';
$string['blockname'] = 'Cursos ascendentes';
$string['close'] = 'Cerrar';
$string['configcatstringfilter'] = 'Filtro REGEX para filtrar nombres de Categorías';
$string['configcatstringfilter_help'] = 'Un REGEX capaz de descartar algunas partes de un nombre de categoría';
$string['configcoursegroupname'] = 'Base del nombre de grupo de cursos';
$string['configcoursegroupname_help'] = 'Permitir elegir la información a partir de la cual se generará el nombre del grupo de cursos';
$string['configcoursescopestartcategory'] = 'Categoría de  inicio';
$string['configcoursescopestartcategory_help'] = 'Sólamente serán considerados cursos en esta categoría';
$string['configcreatecoursegroup'] = 'Crear grupo de cursos';
$string['configcreatecoursegroup_help'] = 'Un grupo de cursos completo es un grupo que comprende a todos los participantes (asignación directa no-ocultos) del curso';
$string['configshowcategories'] = 'Mostrar categorías';
$string['configstringlimit'] = 'Limitar longitud de nombres de cursos';
$string['configstringlimit_help'] = 'Configura un límite máximo para el nombre del curso. Ponerlo a 0 para longitud ilimitada.';
$string['course_ascendants:addinstance'] = 'Puede añadir al curso';
$string['course_ascendants:configure'] = 'Puede configurar';
$string['coursegroupcreated'] = 'Se requería creación de grupo y no se detectó grupo de cursos. Se creará el grupo de cursos';
$string['coursegroupnamebase'] = 'Nombre del grupo de cursos';
$string['coursegroupnamefilter'] = 'Filtro REGEX para nombre de grupo de cursos';
$string['createcoursegroup'] = 'Crear grupo de cursos';
$string['fullcourse'] = 'Grupo de cursos completo';
$string['manageascendants'] = 'Gestionar enlazado de cursos';
$string['open'] = 'Abierto';
$string['openclosemodules_help'] = '## Acceso a ascendentes del curso
###Abrir y cerrar cursos paternos

Los cursos paternos son metacursos que heredan las inscripciones de este curso

Al abrir (asignar) un ascendente, Usted enlazará este curso al metacurso especificado; de esta forma, inscribirá a los usuarios actuales y les dará acceso al contenido del metacurso.

Al cerrar un módulo (des-asignarlo), Usted desconectará las inscripciones. Sus estudiantes ya no serán capaces de entrar al curso, pero su producción (documentos y datos) permanecerá almacenada dentro de los datos del curso. Si Usted volviera a abrir el acceso a este módulo, sus usuarios recuperarán el curso en el mismo estado en que lo dejaron.';
$string['options'] = 'Opciones';
$string['pluginname'] = 'Cursos ascendentes';
$string['pushnewgroups'] = 'Empujar grupo de cursos en metacursos abiertos cuando falten';
$string['title'] = 'Subcursos disponibles';
$string['uncheckadvice'] = 'Cuidar que al des-enlazar un metacurso probablemente se perderían datos de estudiantes';
