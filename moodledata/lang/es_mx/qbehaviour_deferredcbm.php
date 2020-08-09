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
 * Strings for component 'qbehaviour_deferredcbm', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   qbehaviour_deferredcbm
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accuracy'] = 'Precisión';
$string['accuracyandbonus'] = 'Precisión + Bono';
$string['assumingcertainty'] = 'Usted no seleccionó una certeza. Asumiendo: {$a}.';
$string['averagecbmmark'] = 'Puntaje promedio PBC';
$string['basemark'] = 'Puntaje base {$a}';
$string['breakdownbycertainty'] = 'Desglose por certeza';
$string['cbmbonus'] = 'Bono PBC';
$string['cbmgradeexplanation'] = 'Para PBC (Puntaje Basado en Certeza), la calificación de arriba se muestra relativa al máximo para todas las correctas en C=1.';
$string['cbmgrades'] = 'Calificaciones PBC (Puntaje Basado en Certeza)';
$string['cbmgrades_help'] = 'Con Puntaje Basado en Certeza = PBC (Certainty Based Marking = CBM) el tener todas las preguntas correctas con  C=1 (baja certeza) da una puntuación de 100%. Las calificaciones pueden ser tan altas como del 300% si todas las preguntas fueran correctas y con C=3 (alta certeza). Los prejuicios (mostrar confianza en respuestas erroneas) hacen que las calificaciones bajen mucho más de lo que lo harían respuestas equivocadas que se reconozcan como de poca confianza. Esto podría inclusive llegar a calificaciones globales negativas.

**Precisión** es el % de correctas, ignorando la certeza, pero ponderando para la puntuación máxima de cada pregunta. El poder distiguir exitosamente las respuestas más confiables de las menos confiables da una mejor calificación que si se eligira la misma certeza para cada pregunta. Esto se refleja en el  **Bono PBC**.

 **Precisión** + **Bono PBC** es una mejor medida del conocimiento que la mera **Precisión**.

Los prejuicios pueden conducir a un bono negativo; una advertencia para revisar con cuidado qué es lo que si se sabe contra lo que no se sabe.';
$string['cbmmark'] = 'Puntaje PBC {$a}';
$string['certainty'] = 'Certeza';
$string['certainty1'] = 'C=1 (Incierto: <67%)';
$string['certainty-1'] = 'Sin idea';
$string['certainty2'] = 'C=2 (Medio: >67%)';
$string['certainty3'] = 'C=3 (Bastante seguro: >80%)';
$string['certainty_help'] = 'Puntaje Basado en Certeza (PBC) requirere que Usted indique que tan confiable piensa Usted que sea su respuesta. Los niveles disponibles son:

Nivel  Certeza  | C=1 (Incierto)| C=2 (Med)| C=3 (Muy  seguro)
 ------------------- | ------------ | --------- | ----------------
Puntaje correct| 1 | 2 | 3
Puntaje  malo | 0 | -2 | -6
Probabilid correcto| <67% | 67-80% | >80%

Las mejores puntuaciones se ganan al reconocer la incertidumbre. Por ejemplo, si Usted piensa que hay más de 1 probabilidad entre 3 de estar equivocado, Usted debería de escribir  C=1 y así evitar el riesgo de tener un puntaje negativo.';
$string['certaintyshort1'] = 'C=1';
$string['certaintyshort-1'] = 'Ni idea';
$string['certaintyshort2'] = 'C=2';
$string['certaintyshort3'] = 'C=3';
$string['dontknow'] = 'Ni idea';
$string['foransweredquestions'] = 'Resultados solamente para las {$a} preguntas contestadas';
$string['forentirequiz'] = 'Resultados para (las {$a} preguntas de) todo el examen';
$string['howcertainareyou'] = 'Certeza  {$a->help}: {$a->choices}';
$string['judgementok'] = 'OK';
$string['judgementsummary'] = 'Respuestas: {$a->responses}.
Precisión: {$a->fraction}. (Rango óptimo {$a->idealrangelow} a {$a->idealrangehigh}). Usted estuvo  {$a->judgement} usando este nivel de certeza.';
$string['noquestions'] = 'Sin respuestas';
$string['overconfident'] = 'sobre-confiado';
$string['pluginname'] = 'Retroalimentación diferida con PBC (Puntuación Basada en Certeza)';
$string['privacy:metadata'] = 'El plugin del comportamiento de pregunta de Retroalimentación Diferida con Puntuación Basada en Certeza no almacena ningún dato personal.';
$string['slightlyoverconfident'] = 'un poco sobre-confiado';
$string['slightlyunderconfident'] = 'un poco des-confiado';
$string['underconfident'] = 'des-confiado';
$string['weightx'] = 'Ponderación {$a}';
