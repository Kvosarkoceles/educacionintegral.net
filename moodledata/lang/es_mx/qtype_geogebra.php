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
 * Strings for component 'qtype_geogebra', language 'es_mx', branch 'MOODLE_36_STABLE'
 *
 * @package   qtype_geogebra
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addconstraints'] = 'Añadir restricciones (condiciones) a las variables.';
$string['addmorevarblanks'] = 'Espacios vacíos para {no} variables más';
$string['answerinvalid'] = 'La cadena_de_texto de respuesta es inválida. Esto no debería de pasar.';
$string['answermissing'] = 'Falta la respuesta. Probablemente JavaScript no está activado en el navegador, o tal vez  ocurrió un error desconocido.';
$string['answervar'] = 'Variables para calificación automática';
$string['answervar_help'] = '<strong>Para calificación automática</strong>: Un nombre de un objeto booleano en Geogebra que es verdadero si el estudiante resolvió (parcialmente) la pregunta. Se suman todas las calificaciones para todas las variables booleanas. La pregunta está correcta si cualquier combinación sobrepasa de100%,
pero debería de haber al menos una combinación que sumara exactamente 100%.<br>
<strong>Dejar vacío para calificación manual.</strong>';
$string['applet_advanced_settings'] = 'Configuraciones Avanzadas...';
$string['constraints'] = 'Restricciones (condiciones)';
$string['constraints_help'] = '¿Hay algunas restricciones para las Variables, tales como a<b, que no pudieron declararse usando las opciones deslizables? separadas por comas. Las relaciones soportadas son: <, <=, >, >=. Si Usted necesita una igualdad Usted tiene que usar la misma variable al crear la hoja_de_trabajo (\'\'worksheet\'\') GeoGebra. Los rangos dinámicos (usando variables para min/max deslizables) no están soportados.';
$string['constraintswrongortoohard'] = '{$a->inequalities} están equivocadas o demasiado difíciles de cumplir, intentamos (fuerza bruta) {$a->tries} veces en {$a->time} segundos. Tal vez usaremos un mejor  método en el futuro...';
$string['dragndrop'] = 'Arrastrar y soltar un archivo GeoGebra en cualquier parte en la sección de Applet GeoGebra';
$string['enable_label_drags'] = 'Habilitar Arrastre de Etiquetas';
$string['enable_right_click'] = 'Habilitar Click Derecho, Zoom y Edición del Teclado';
$string['enable_shift_drag_zoom'] = 'Habilitar Shift-Arrastrar y Zoom';
$string['feedback'] = 'Retroalimentación para cuando la variable es cierta';
$string['feedback_help'] = 'La retroalimentación es tomada automáticamente del subtítulo de la variable en el archivo Geogebra.';
$string['geogebraapplet'] = 'Applet Geogebra';
$string['getvars'] = 'Obtener variables que son aleatorizadas desde la applet';
$string['ggbfilemissing'] = 'Falta la cadena-base64 (\'\'base64-string\'\') en la respuesta. Probablemente JavaScript no está habilitado en el navegador, o tal vez ocurrió un error desconocido';
$string['ggbturl'] = 'URL o ID de Hoja_de_Trabajo (\'\'worksheet\'\') de GeoGebraTube';
$string['ggbturl_help'] = 'Usted puede, una de dos: Usar el botón compartir en GeogebraTube y copiar y pegar el enlace, o usar el repositorio GeoGebraTube. El Applet y los parámetros se almacenan en la BasedeDatos, el Applet no se re-cargará de GeoGebraTube a menos que lo solicite. Simplemente proporcionar la ID o la clave para compartir  del Applet también están soportadas.';
$string['ggbxmlmissing'] = 'Falta la Cadena-XML (\'\'XML-String\'\') en la respuesta. Probablemente no esté activado JavaScript en el navegador, o tal vez ocurrió un error desconocido';
$string['invalidinequality'] = '{$a} es inválida';
$string['isexercise'] = 'Usar GeoGebra-Exercise para revisar la pregunta';
$string['isexercise_help'] = 'El applet contiene herramientas definidas_por_el_usuario que pueden emplearse para revisión automática del ejercicio. \\n Precaución: ¡Todas las respuestas inferiores no son aplicables en este caso!';
$string['israndomized'] = '¿Hay variables que deberían de ser aleatorizadas?';
$string['loadapplet'] = '(Re)Cargar y mostrar Applet';
$string['loadapplet_help'] = '(Re)Cargar la Applet desde GeoGebraTube y almacenar la nueva versión de GeoGebraTube en la BasedeDatos';
$string['mineqmax'] = 'Min y Max para la aleatorización no están especificados apropiadamente para la variable {$a}, ya sea porque Usted no haya especificado los deslizables min y max, o porque el elemento no es un deslizable en absoluto. Usted probablemente tenga que corregir esto en su archivo GeoGebra.';
$string['minplusstepgtmax'] = 'El incremento positivo para Min es mayor que Max para la variable {$a}, Usted probablemente tenga que corregir esto en su archivo GeoGebra.';
$string['noappletloaded'] = '¡No hay Applet cargada! Revise si la URL es correcta y si Usted ve un Applet después de elegir un enlace o (re)cargar el Applet.';
$string['nofractionsumeq1'] = 'Al menos una combinación de calificaciones debe de sumar 100%';
$string['pluginname'] = 'GeoGebra';
$string['pluginnameadding'] = 'Añadiendo una pregunta GeoGebra';
$string['pluginnameediting'] = 'Editando una pregunta GeoGebra';
$string['pluginname_help'] = 'Preguntas en donde el estudiante puede resolver la pregunta usando GeoGebra';
$string['pluginnamesummary'] = 'Una versión de preguntas calculadas que usa GeoGebra para mostrar la pregunta y verificar la respuesta cuando se realiza el examen.';
$string['randomizedbutnovars'] = 'Usted ha seleccionado que la pregunta deba aleatorizarse, pero Usted no especificó variables para ser aleatorizadas.';
$string['randomizedvar'] = 'Variables a aleatorizar';
$string['randomizedvar_help'] = 'Variables que deberían aleatorizarse, separadas por comas. Use las opciones para deslizable (\'\'slider\'\') en GeoGebra para declarar Min, Max e Incremento. Estas variables pueden usarse también en el texto de la pregunta al rodearlas entre paréntesis ondulados, por ejemplo;  {a}.';
$string['show_algebra_input'] = 'Mostrar Barra de Escritura';
$string['show_menu_bar'] = 'Mostrar Menú';
$string['show_reset_icon'] = 'Mostrar ícono para Reiniciar Construcción';
$string['show_tool_bar'] = 'Mostrar Bara_de_herramientas';
$string['stepzero'] = 'El incremento es 0, para la variable {$a}, ya sea porque Usted no haya especificado los incrementos deslizables o el elemento no es un deslizable en absoluto. Usted probablemente tiene que corregir esto en su archivo GeoGebra.';
$string['useafile'] = 'o usar un archivo ggb';
$string['valuecheckedfor'] = 'Objeto Booleano en GeoGebra que es usado para revisar la rectitud.';
$string['variablenamewrong'] = 'No se pudo encontrar una variable con ese nombre en el archivo GeoGebra.';
$string['variableno'] = 'Variable {$a}';
$string['variables'] = 'Variables';
$string['willbereadfromfile'] = 'Se leerá de GeoGebra ... (vea botón de ayuda)';
