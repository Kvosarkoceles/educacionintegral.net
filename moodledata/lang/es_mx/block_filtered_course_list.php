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
 * Strings for component 'block_filtered_course_list', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   block_filtered_course_list
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allcourses'] = 'Un mánager ve todos los cursos';
$string['blockname'] = 'Lista de Cursos Filtrada';
$string['catrubrictpl'] = 'Plantilla de rúbrica de categoría';
$string['catseparator'] = 'Separador de categoría';
$string['completedcourses'] = 'Cursos completados';
$string['configcatrubrictpl'] = 'Use esta configuración para determinar un patrón para mostrar rúbricas al filtrar por categoría. Las siguientes fichas (tokens) de remplazo están disponibles: NAME, IDNUMBER, PARENT, ANCESTRY. Usted puede truncar la salida de cualquier token al añadirle una longitud de caracter dentro de paréntesis ondulados. (por ejemplo NAME{20}). Los puntos suspensivos serán añadidos. <br /><br />Detalles completos en <a href="https://github.com/CLAMP-IT/moodle-blocks_filtered_course_list/wiki">https://github.com/CLAMP-IT/moodle-blocks_filtered_course_list/wiki</a>.';
$string['configcatseparator'] = 'Cadena de caracteres separadora a usar entre nombres de categorías al usar categoría ANCESTRY en la plantilla de rúbrica de categoría.';
$string['configcoursenametpl'] = 'Use esta configuración para determinar un patrón para mostrar un nombre de curso. Las siguientes fichas (tokens) de remplazo están disponibles: FULLNAME, SHORTNAME, IDNUMBER yd CATEGORY. Usted puede truncar la salida de cualquier token al añadirle una longitud de caracter dentro de paréntesis ondulados. (por ejemplo NAME{20}). Los puntos suspensivos serán añadidos. <br /><br />Detalles completos en  <a href="https://github.com/CLAMP-IT/moodle-blocks_filtered_course_list/wiki">https://github.com/CLAMP-IT/moodle-blocks_filtered_course_list/wiki</a>.';
$string['configexternalfilters'] = 'Use el identificador entre paréntesis para referenciar el filtro dentro del área de texto de configuración del filtro. Para información acerca de la configuración disponible para un filtro externo, vea al plugin que la proporciona.';
$string['configfilters'] = 'Ingresar un filtro por línea usando barras verticales (|) para separar elementos del filtro. Los tipos de filtro son: <i>category (categoría)</i>, <i>shortname (nombre_corto)</i>, <i>regex</i>, <i>idnumber</i>,  <i>completion (finalización)</i>, <i>starred (destacado)</i>, <i>enrolment (inscripción)</i> y <i>generic (genérico)</i>. <br /><br />Detalles completos en <a href="https://github.com/CLAMP-IT/moodle-blocks_filtered_course_list/wiki/Filter-syntax">https://github.com/CLAMP-IT/moodle-blocks_filtered_course_list/wiki/Filter-syntax</a>.';
$string['confighideallcourseslink'] = 'Ocultar enlace a "Todos los cursos" al fondo del bloque. <br>El ocultar el enlace no afecta una vista del mánager';
$string['confighidefromguests'] = 'Ocultarle el bloque a invitados y visitantes anónimos.';
$string['confighideothercourses'] = 'Ocultar la rúbrica captura-todo "Otros cursos" en el bloque,';
$string['configmanagerview'] = '¿Qué debería de ver un mánager en el bloque de lista de cursos? Por favor tenga en cuenta que los mánagers que no estén inscritos en ningún curso continuarán viendo la lista genérica.';
$string['configmaxallcourse'] = 'Un un sitio con solamente una categoría, los mánagers e invitados verán todos los cursos, <br />pero arriba de este número verán en su lugar un enlace a categoría. <br />[Elegir un número entero entre 0 y 999].';
$string['configpersistentexpansion'] = 'Recordar estados de expansión de rúbrica dentro de una sesión del navegador.';
$string['configprimarysort'] = 'Dentro de una rúbrica los cursos serán ordenados por este campo. Elegir "Ordenamiento" para mostrar cursos en el mismo orden como se ven en la interfaz de gestión del curso.';
$string['configsecondarysort'] = 'Dentro de una rúbrica los cursos serán ordenados secundariamente por este campo.';
$string['configtitle'] = 'Título del bloque';
$string['coursenametpl'] = 'Plantilla de nombre de curso';
$string['courses'] = 'Cursos';
$string['courseswithxenrolment'] = 'Cursos con {$a} inscripciones';
$string['defaultfilters'] = 'categoría | colapsado | 0 (nivel superior) | 0 (todos descendientes)';
$string['externalfilters'] = 'Filtros Externos';
$string['filtered_course_list:addinstance'] = 'Añadir un nuevo bloque de Lista de Curso Filtrada';
$string['filtered_course_list:myaddinstance'] = 'Añadir un nuevo bloque de Lista de Curso Filtrada a Mi hogar';
$string['filters'] = 'Configuración del filtro';
$string['filters_help'] = 'Ingresar un filtro por línea usando barras verticales (|) para separar elementos del filtro. Los tipos de filtro son: <i>category (categoría)</i>, <i>shortname (nombre_corto)</i>, <i>regex</i>, <i>idnumber</i>,  <i>completion (finalización)</i>, <i>starred (destacado)</i>, <i>enrolment (inscripción)</i> y <i>generic (genérico)</i>. <br /><br />Detalles completos en <a href="https://github.com/CLAMP-IT/moodle-blocks_filtered_course_list/wiki/Filter-syntax">https://github.com/CLAMP-IT/moodle-blocks_filtered_course_list/wiki/Filter-syntax</a>.';
$string['hideallcourseslink'] = 'Ocultar enlace hacia "Todos los cursos"';
$string['hidefromguests'] = 'Ocultarle a invitados';
$string['hideothercourses'] = 'Ocultar otros cursos';
$string['managerview'] = 'Vista del mánager';
$string['maxallcourse'] = 'Máximo para categoría única';
$string['othercourses'] = 'Otros cursos';
$string['owncourses'] = 'Un mánager ve sus propios cursos';
$string['persistentexpansion'] = 'Expansión persistente';
$string['pluginname'] = 'Lista de Cursos Filtrada';
$string['primarysort'] = 'Ordenamiento primario';
$string['primaryvector'] = 'Vector ordenamiento primario';
$string['privacy:metadata'] = 'El Bloque de Lista de curso filtrado muestra información acerca de inscripciones al curso, pero no afecta ni almacena ningún dato por sí mismo. Todas las inscripciones son gestionadas por otros sistemas de Moodle.';
$string['secondarysort'] = 'Ordenamiento secundario';
$string['secondaryvector'] = 'Vector ordenamiento secundario';
$string['starredcourses'] = 'Cursos Destacados';
$string['top'] = 'Superior';
