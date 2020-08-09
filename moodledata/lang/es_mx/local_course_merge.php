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
 * Strings for component 'local_course_merge', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   local_course_merge
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['childcategorypermissions'] = 'Usted no tiene permisos para mover cursos adentro de esa categoría';
$string['course_merge:categorize_course'] = 'Recategorizar cursos origen';
$string['course_merge:create_course'] = 'Crear armazón (shell) de curso unido';
$string['course_merge:override_format'] = 'Permitir anulación del formato de plantilla';
$string['coursemergesamecategory'] = 'Cursos en la misma categoría';
$string['coursemergesameparent'] = 'Cursos con la misma categoría padre';
$string['coursemergeunlimited'] = 'Sin restricciones';
$string['coursenameformat'] = 'Formato del nombre del curso';
$string['coursenameformat_desc'] = 'Expresiones regulares que describen el nombre-completo de curso estándar. Déjelo vacío para deshabilitar el pre-llenado del nombre-completo del curso';
$string['coursestomerge'] = 'Cursos a unir';
$string['coursestoodeep'] = 'Los cursos siguientes no pueden ser unidos con este curso: {$a}';
$string['create'] = 'Crear armazón (shell) de curso unido';
$string['create_form:fieldset:wrapper'] = 'Opciones de curso juntadas';
$string['defaultcategory'] = 'Categoría por defecto para curso hijo';
$string['defaultcategory_desc'] = 'Opcionalmente mover cursos hijos adentro de esta categoría por defecto';
$string['defaultcategorytop'] = 'No mover cursos por defecto';
$string['extractname'] = 'Extarer nombre';
$string['extractnamedept'] = 'Departamento';
$string['extractnamedept_desc'] = 'El código del departamento. Usado para pre-llenar [DEPT].';
$string['extractnameinfo'] = 'Use estas configuraciones para definir expresiones regulares para extraer información del nombre del curso a partir de un curso.';
$string['extractnamenum'] = 'Número';
$string['extractnamenum_desc'] = 'El número del curso. Usado para pre-llenar [NUM]';
$string['extractnamesection'] = 'Número de sección';
$string['extractnamesection_desc'] = 'El número de sección. Usado para pre-llenar [SECTION]';
$string['extractnameterm'] = 'Período';
$string['extractnameterm_desc'] = 'El nombre del período. Usado para pre-llenar [TERM]';
$string['extractnametitle'] = 'Título del curso';
$string['extractnametitle_desc'] = 'El título completo del curso. Usado para pre-llenar [TITLE].';
$string['extracttermcode'] = 'Código del período';
$string['extracttermcode_desc'] = 'El código del período. Usado para pre-llenar [TERMCODE]. Derivado del númeroID (idnumber) del curso..';
$string['generalsettings'] = 'Configuraciones generales';
$string['generalsettingsinfo'] = '';
$string['hidecourses'] = 'Ocultarle cursos originales a los estudiantes';
$string['idnumberexists'] = 'No pudo crearse armazón (shell) de curso unido: ya existe un curso con el númeriID (idnumber) de {$a}.';
$string['maxcategorydepth'] = 'Máxima profundidad de categoría';
$string['maxcategorydepth_desc'] = 'Restringir los cursos que pueden ser unidos juntos por profundidad de categoría.';
$string['mergedcourseidnumberformat'] = 'Formato de númeroID (idnumber) de curso unido';
$string['mergedcourseidnumberformat_desc'] = 'El formato a sugerir para un númeroID (idnumber) de curso unido.';
$string['mergedcoursenameformat'] = 'Formato de nombre de curso unido';
$string['mergedcoursenameformat_desc'] = 'El formato a sugerir para un nombre de curso unido.';
$string['mergedcourseshortnameformat'] = 'Formato de nombre-corto de curso unido';
$string['mergedcourseshortnameformat_desc'] = 'El formato a sugerir para un nombre-corto de curso unido.';
$string['metalinknotenabled'] = 'Esta herramienta requiere que se habilite el método de inscripción de Enlace a Meta Curso.';
$string['newchildcategory'] = 'Mover cursos hijos a esta categoría';
$string['pluginname'] = 'Asistente para Migrar Curso';
$string['privacy:metadata'] = 'El plugin del Asistente para Unir Cursos no almacena ningún dato personal.';
$string['respectpermissions'] = 'Respetar permisos estándar';
$string['respectpermissions_desc'] = 'Por defecto, este plugin usa sus propias capacidades y no toma en cuenta si los profesores tienen permitido crear cursos. Active esta configuración para forzar al plugin a que respete estos permisos de Moodle.';
$string['shortnameexists'] = 'No pudo crearse curso unido: ya existe un curso con el nombre-corto de {$a}.';
$string['usenametemplates'] = 'Usar plantillas de nombre';
$string['usenametemplates_desc'] = 'Usar las configuraciones de extracción de nombre definidas debajo.';
