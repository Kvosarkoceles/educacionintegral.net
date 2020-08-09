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
 * Strings for component 'block_coursefeedback', language 'es_mx', branch 'MOODLE_31_STABLE'
 *
 * @package   block_coursefeedback
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adminpage_html_activefeedbacka'] = 'Encuesta actual:';
$string['adminpage_html_activefeedbackb'] = 'Elija un cuestionario. Éste será proporcionado para evaluación en el bloque "Retroalimentación del curso".<br />Usted puede cambiar las preguntas disponibles en  "editar/crear encuesta".';
$string['adminpage_html_allowhidinga'] = 'Permitir ocultar';
$string['adminpage_html_allowhidingb'] = 'Si se habilita, los profesores pueden editar la visibilidad del bloque.';
$string['adminpage_html_defaultlanguagea'] = 'Idioma por defecto';
$string['adminpage_html_defaultlanguageb'] = 'Se mostrarán preguntas en el idioma por defecto, si falla la carga de otros idiomas (por ejemplo, si no están definidas preguntas en el idioma preferido del usuario). ¡ Esto significa que Usted debe definir al menos todas las preguntas en el idioma por defecto !';
$string['adminpage_html_notinstalled'] = '\'{$a}\' (no instalado)';
$string['adminpage_html_ratingtresholda'] = 'Umbral de valoración';
$string['adminpage_html_ratingtresholdb'] = 'El número de respuestas requeridas hasta que se muestre una valoración general en el bloque.';
$string['adminpage_html_setstickya'] = 'Hacerlo pegajoso (sticky)';
$string['adminpage_html_setstickyb'] = 'Si se habilita, aparecerá una instancia de este bloque en la página principal de cada curso, la que no puede ser eliminada por los profesores.';
$string['adminpage_link_feedbackedit'] = 'editar/crear encuesta';
$string['caution'] = 'Advertencia';
$string['copyof'] = 'Copia de "{$a}"';
$string['coursefeedback:addinstance'] = 'Añadir este bloque al curso del sitio';
$string['coursefeedback:download'] = 'Guardar los resultados de la retroalimentación del curso actual dentro de un archivo.';
$string['coursefeedback:evaluate'] = 'Evaluar retroalimentación del curso actual';
$string['coursefeedback:managefeedbacks'] = 'Editar configuraciones globales del bloque de retroalimentación del curso';
$string['coursefeedback:myaddinstance'] = 'Añadir este bloque a la página de "Mi hogar" (dado que allí es inútil, debería de estar prohibido para todos)';
$string['coursefeedback:viewanswers'] = 'Ver el análisis de la retroalimentación del curso actual';
$string['download_html_filename'] = 'Resultados';
$string['download_thead_questions'] = 'Pregunta';
$string['eventevaluated'] = 'Curso evaluado';
$string['eventviewed'] = 'Resultados vistos';
$string['form_area_questiontext'] = 'Editar texto';
$string['form_header_addlang'] = 'Añadir un texto para otro idioma';
$string['form_header_confirm'] = 'Confirmación necesaria';
$string['form_header_deleteanswers'] = 'Eliminar respuestas del usuario';
$string['form_header_deletelang'] = 'Eliminar idioma(s)';
$string['form_header_editfeedback'] = 'Editar encuesta';
$string['form_header_editquestion'] = 'Editar pregunta';
$string['form_header_newfeedback'] = 'Nueva encuesta';
$string['form_header_newquestion'] = 'Nueva pregunta';
$string['form_header_question'] = 'Pregunta {$a}';
$string['form_html_currentlang'] = 'Usted está editando {$a}';
$string['form_html_deleteanswerstext'] = 'El cuestionario no puede editarse actualmente, porque ya existen respuestas de usuarios. Usted puede ahora eliminar todas las respuestas o copiar la retroalimentación.';
$string['form_html_deleteanswerswarning'] = 'Estos datos serán perdidos irreparablemente al eliminar las respuestas del usuario. <br/>Por favor, asegúrese de que ya no necesita más estos datos.';
$string['form_html_nolangimplemented'] = 'Esta retroalimentación no tiene idiomas implementados.';
$string['form_html_notextendable'] = 'Usted no puede extender esta pregunta, porque no hay idiomas adicionales disponibles.';
$string['form_select_changepos'] = 'Determinar nueva posición';
$string['form_select_confirmyesno'] = '¿Realmente quiere eliminar?';
$string['form_select_deleteanswers'] = '¿Eliminar respuestas del usuario?';
$string['form_select_newlang'] = 'Idioma';
$string['form_select_unwantedlang'] = 'Elegir idioma <br/><span style="font-size: x-small;">(es posible elegir varios)<span>';
$string['form_submit_feedbacksubmit'] = 'Guardar evaluación';
$string['page_headline_admin'] = 'Administración de retroalimentación del curso';
$string['page_headline_listoffeedbacks'] = 'Lista de encuestas';
$string['page_headline_listofquestions'] = 'Cuestionario de \'{$a}\\';
$string['page_html_activated'] = 'La retroalimentación del curso  ({$a}) ha sido registrada como la encuesta actual.';
$string['page_html_answersdeleted'] = 'Las respuestas del usuario han sido eliminadas.';
$string['page_html_courserating'] = 'Valoración del curso';
$string['page_html_editallquestions'] = 'Aplicar a todos los idiomas';
$string['page_html_evalintro'] = 'El curso puede evaluarse aquí. Solamente pueden evaluarse los cursos y no sus contenidos. La encuesta se conduce de forma anónima y el resumen de los resultados es visible solamente para el responsable del curso apropiado.';
$string['page_html_evaluated'] = 'Usted ya ha evaluado este curso';
$string['page_html_intronotifications'] = 'La retroalimentación debe cumplir con la(s) siguiente(s) condición(es):';
$string['page_html_nofeedbackactive'] = 'Las encuestas han sido desactivadas.';
$string['page_html_nolinks'] = 'Usted no tiene permitido participar en esta retroalimentación.';
$string['page_html_noquestions'] = 'No hay preguntas disponibles.';
$string['page_html_norelations'] = 'Todas las preguntas tienen que estar definidas en por lo menos un idioma común.';
$string['page_html_saveerr'] = 'Ocurrió un error al guardar su evaluación.';
$string['page_html_servedefaultlang'] = 'Todas las preguntas tienen que estar definidas en el idioma común';
$string['page_html_thx'] = 'Muchas gracias por su evaluación del curso.';
$string['page_html_viewintro'] = 'Análisis de encuesta. Los resultados muestran el número de votos para cada calificación y el promedio.';
$string['page_html_viewnavbar'] = 'Análisis de la encuesta';
$string['page_link_backtoconfig'] = 'Regresar a la administración del sitio web.';
$string['page_link_backtofeedbackview'] = 'Regresar a vista general';
$string['page_link_deletelanguage'] = 'Eliminar idioma(s)';
$string['page_link_download'] = 'Guardar resutados como  {$a}-file';
$string['page_link_evaluate'] = 'Evaluar curso';
$string['page_link_newlanguage'] = 'Añadir idioma diferente';
$string['page_link_newquestion'] = 'Añadir nueva pregunta';
$string['page_link_newtemplate'] = 'Crear encuesta nueva';
$string['page_link_noquestion'] = 'No hay preguntas disponibles - crear una pregunta nueva.';
$string['page_link_settings'] = 'Administración';
$string['page_link_showlistofquestions'] = 'Editar preguntas';
$string['page_link_use'] = 'Uso';
$string['page_link_view'] = 'Análisis';
$string['perm_header_editnotpermitted'] = 'La encuesta no puede cambiarse por las siguientes razones:';
$string['perm_html_answersexists'] = 'Esta retroalimentación ya ha sido completada por usuarios.';
$string['perm_html_danswerslink'] = 'Para crear una encuesta nueva con las mismas preguntas, Usted puede <a href="admin.php?fid={$a}&mode=feedback&action=new">copiar la retroalimentación</a> o <a href="admin.php?fid={$a}&mode=feedback&action=danswers">eliminar las respuestas del usuario</a>.';
$string['perm_html_duplicatelink'] = 'Para crear una encuesta nueva con las mismas preguntas, Usted puede <a href="admin.php?fid={$a}&mode=feedback&action=new">copiar la encuesta</a> o registrar otro cuestionario como la encuesta actual.';
$string['perm_html_erroractive'] = 'Usted no puede cambiar la encuesta actual.';
$string['pluginname'] = 'Retroalimentación del curso';
$string['table_header_abstain'] = 'Sin valoraciones';
$string['table_header_bad'] = 'Pobre';
$string['table_header_good'] = 'Muy bueno';
$string['table_header_languages'] = 'Idiomas disponibles';
$string['table_header_questions'] = 'Preguntas';
$string['table_html_abstain'] = 'Abstención';
$string['table_html_average'] = 'Promedio';
$string['table_html_nofeedback'] = 'Sin encuesta';
$string['table_html_undefinedlang'] = 'Falta traducción. Idioma \'{$a}\' no disponible.';
$string['table_html_votes'] = 'Número de votos :';
$string['untitled'] = 'Intitulada';
