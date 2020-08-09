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
 * Strings for component 'block_glossary_export_to_quiz', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   block_glossary_export_to_quiz
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allentries'] = 'Todas las entradas';
$string['clicktoexport'] = 'Elija para exportar estas entradas del glosario hacia un examen (XML)';
$string['concept'] = 'Orden alfabético';
$string['ddwtosinstructions'] = 'Arrastrar cada etiqueta de concepto para que concuerde con su definición';
$string['emptyglossaries'] = 'Los glosarios del curso están vación (sin entradas)';
$string['emptyglossary'] = 'El glosario del curso está vacío (sin entradas)';
$string['exportentriestoxml'] = 'Exportar entradas hacia Examen (XML)';
$string['exportmediafiles'] = '¿Exportar archivos de audio/video e imágenes?';
$string['exportmediafiles_help'] = '¿Desea Usted exportar imágenes/audio/video que podría haber sido insertadoss dentro de estas definiciones de glosario?
Algunos tipos de  preguntas realmente no son compatibles con algunos elementos de medios.';
$string['extrawronganswer'] = '¿Añadir una respuesta incorrecta extra?';
$string['extrawronganswer_help'] = '¿Desea Usted añadir una respuesta incorrecta /distractor extra a cada una de sus preguntas?';
$string['firstmodified'] = 'La entrada más antigua primero';
$string['gapfillddinstructions'] = 'Seleccionar de cada lista desplegable el concepto que concuerda con su definición';
$string['generalhelp'] = 'Ayuda del bloque';
$string['glossary_export_to_quiz:addinstance'] = 'Añadir un nuevo bloque de exportar_glosario_a_quiz';
$string['glossary_export_to_quiz:myaddinstance'] = 'Añadir un nuevo bloque de exportar_glosario_a_quiz a la página de Mi Moodle';
$string['lastmodified'] = 'La entrada más reciente primero';
$string['limitnum'] = 'Número máximo de entradas a exportar';
$string['limitnum_help'] = 'Dejar este campo con su valor por defecto de "0" para exportar TODAS las entradas desde el Glosario o la Categoría seleccionada.
Esta opción puede ser útil para exportar un  número limitado de entradas de glosarios muy grandes.';
$string['matchinstructions'] = 'Relacionar las definiciones y los conceptos';
$string['nbchoices'] = 'Número de opciones';
$string['nbchoices_help'] = 'Seleccionar cuantas opciones/respuestas desea hacer disponibles.';
$string['noglossaries'] = 'No hay glosarios en este curso';
$string['notenoughentriesavailable'] = 'No hay suficientes entradas disponibles ({$a->numentries}) para este tipo de pregunta (mínimo {$a->nbchoices} entradas necesarias).';
$string['notenoughentriesselected'] = 'No hay suficientes entradas seleccionadas ({$a->numentries}) para este tipo de pregunta (mínimo {$a->nbchoices} entradas necesarias).';
$string['notyetconfigured'] = 'Por favor <b>Active la edición</b> para configurar este bloque.';
$string['notyetconfiguredediting'] = 'Por favor elija el ícono de Acciones para configurar este bloque.';
$string['numentries'] = 'Exportar {$a} entradas';
$string['numquestions'] = 'y crear {$a} preguntas';
$string['pluginname'] = 'Exportar Glosario hacia Examen';
$string['pluginname_help'] = 'Hacer clic derecho sobre el enlace hacia <b>Más Ayuda</b> para ver el  Wiki de Documentación de Moodle..';
$string['privacy:metadata'] = 'El bloque para Exportar Gloasario al Examen no almacena ningún dato personal.';
$string['questiontype_help'] = 'Seleccionar a cual tipo de pregunta desea exportar las entradas del glosario.';
$string['random'] = 'Aleatorio';
$string['selectglossary'] = 'Elegir glosario desde donde exportará';
$string['selectglossary_help'] = 'Use la lista desplegable para elegir el glosario desde el cual quiere exportar sus entradas hacia el banco de preguntas para examen. Si el glosario tuviera categorías, Usted podrá elegir una sola categoría para exportar sus entradas.
Para cancelar su elección, o para restablecer el bloque, simplemente deje la lista desplegable en la posición den "Elegir...".';
$string['shuffleanswers'] = 'Barajar respuestas';
$string['shuffleanswers_help'] = 'Si se habilita, el orden de las opciones/respuestas es barajado aleatoriamente para cada intento.';
$string['sortingorder'] = 'Órden de acomodo';
$string['sortingorder_help'] = 'Use esta configuración para determinar cómo se ordenarán las entradas del glosario cuando las importe en su banco de preguntas.
Esto puede usarse, junto con el número máximo de entradas, para crear un exámen rápido para poder evaluar las últimas entradas de su glosario (especialmente un glosario bastante grande).';
