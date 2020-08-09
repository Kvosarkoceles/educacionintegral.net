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
 * Strings for component 'qtype_multinumerical', language 'es_mx', branch 'MOODLE_37_STABLE'
 *
 * @package   qtype_multinumerical
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['answer'] = 'Su respuesta: {$a}';
$string['badfeedbackperconditionsyntax'] = 'Cada línea debe ser de esta forma : "Retroalimentación si la condición es cierta | Retroalimentación si la condición es falsa"';
$string['badnumfeedbackperconditions'] = 'El número de retroalimentaciones por restricción no puede ser mayor que el número de restricciones';
$string['binarygrade'] = 'Cálculo de calificación';
$string['conditionnotverified'] = 'Restricción no verificada';
$string['conditions'] = 'Restricciones';
$string['conditionverified'] = 'Restricción verificada';
$string['displaycalc'] = 'Mostrar resultado del cálculo';
$string['feedbackperconditions'] = 'Retroalimentación por restricción';
$string['gradebinary'] = 'Todo o nada';
$string['gradefractional'] = 'Fraccionaria';
$string['helponquestionoptions'] = 'Para mayor información sobre este tipo de pregunta y el comportamiento de las siguientes opciones, por favor elija el botón de ayuda en la parte superior de este formato.';
$string['noncomputable'] = '(no computable)';
$string['onlyforcalculations'] = 'Solamente para cálculos';
$string['parameters'] = 'Parámetros';
$string['pleaseenterananswer'] = 'Por favor escriba una respuesta';
$string['pluginname'] = 'Multinumérica';
$string['pluginnameadding'] = 'Añadiendo una pregunta multinumérica';
$string['pluginnameediting'] = 'Editando una pregunta multinumérica';
$string['pluginname_help'] = '<h2>Como funciona esto</h2>
<p>Una pregunta multinumérica permite pedirles a los estudiantes una respuesta que está hecha de varios parámetros (numéricos).</p>
<p><strong>Ejemplo:</strong> encontrar <span style="font-family:monospace">X</span> además de <span style="font-family:monospace">Y</span>  de forma tal que </p> <ul><li>X + Y < 20</li><li>X * Y > 35</li></ul>

<p>Hay varias respuestas correctas  <em>posibles</em> para esta pregunta, y cualquier respuesta que satisface estas condiciones debería ser considerada correcta.</p>
<p>Este tipo de pregunta permite entonces definir los parámetros que estamos buscando  (aquí, <span style="font-family:monospace">X</span> además de <span style="font-family:monospace">Y</span>) y las restricciones dadas.</p>

<h2>Uso</h2> <ul>

<li>Escriba una lista de parámetros separados por comas (en nuestro ejemplo  "<span style="font-family:monospace">X,Y</span>").<br /> <strong>Nota :</strong> se pueden escribir unidades después de cada parámetro: "<span style="font-family:monospace">X [m],Y [h]</span>" (debe existir un espacio vacío entre el parámetro y su unidad).</li>
<li>Escriba las restricciones, una por línea; en nuestro ejemplo: <pre>X + Y < 20 X * Y > 35</pre>(las líneas vacías serán ignoradas) <p>Los operadores disponibles son : <ul> <li>"<span style="font-family:monospace">=</span>" (igualdad)</li> <li>"<span style="font-family:monospace"><</span>" (menor que)</li> <li>"<span style="font-family:monospace"><=</span>" (menor o igual que)</li> <li>"<span style="font-family:monospace">></span>" (mayor que)</li> <li>"<span style="font-family:monospace">>=</span>" (mayor o igual que )</li> <li>intervalos: <pre><span style="font-family:monospace">X = [1;5]</span></pre> (cerrar) <pre><span style="font-family:monospace">X = ]1;5[</span></pre> (abrir) </li> </ul></p></li>

<li>Si lo desea, escriba una retroalimentación para cada restricción. En nuestro ejemplo, uno podría escribir: <pre>OK : X + Y < 20 | No, X + Y >= 20 ! OK : X * Y > 35 | No, X + Y <= 35 !</pre> </li> <li>Si está activado "Mostrar resultado del cálculo", la retroalimentación mostrará una evaluación numérica de cada restricción.

Esto solamente se muestra si no está vacía la retroalimentación para esta restricción.<br /> Si está activado "Solamente para cálculos", esto no se mostrará para las restricciones no-calculadas (como <span style="font-family:monospace">X > 5</span>), para no regalarle la respuesta al estudiante.</li>
<li>La opción de "Cálculo de calificación" define si una respuesta parcialmente correcta produce una fracción de la calificación, o calificación nula.</li> </ul>';
$string['pluginnamesummary'] = 'Permite crear una pregunta cuyas respuestas correctas pueden ser varias, gobernada por ecuaciones o inecuaciones.';
$string['privacy:metadata'] = 'El plugin de Pregunta Multinumérica  no almacena ningún dato personal.';
$string['qtypeoptions'] = 'Opciones específicas del tipo de pregunta multinumérica';
$string['usecolorforfeedback'] = 'Usar color para retroalimentación por restricción';
