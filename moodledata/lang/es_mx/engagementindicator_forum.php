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
 * Strings for component 'engagementindicator_forum', language 'es_mx', branch 'MOODLE_27_STABLE'
 *
 * @package   engagementindicator_forum
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['e_newposts'] = 'Publicaciones nuevas por semana';
$string['e_readposts'] = 'Publicaciones leidas por semana';
$string['e_replies'] = 'Respuestas por semana';
$string['e_totalposts'] = 'Publicaciones totales por semana';
$string['localrisk'] = 'Riesgo Local';
$string['localrisk_help'] = 'El porcentaje de riesgo de esto solo, sobre 100. El Riesgo Local es multiplicado por la ponderación de entrar para formar la Contribución al Riesgo.';
$string['logic'] = 'Lógica';
$string['logic_help'] = 'Este campo proporciona una idea sobre la lógica usada para llegar al valor de Riesgo Local.';
$string['maxrisk'] = 'Riesgo Máximo';
$string['maxrisktitle'] = 'Sin foros leídos o contribuidos';
$string['norisk'] = 'Sin Riesgo';
$string['pluginname'] = 'Actividad del Foro';
$string['riskcontribution'] = 'Contribución al Riesgo';
$string['riskcontribution_help'] = 'La cantidad de riesgo que este foro en particular contribuye al riesgo total regresado por el Indicador de Foro. Esto se forma al multiplicar el Riesgo Local por la Ponderación. Las Contribuciones al Riesgo de cada item del foro se suman juntas para formar el riesgo general para el indicador.';
$string['weighting'] = 'Ponderación';
$string['weighting_help'] = 'Este número muestra la cantidad con que este item contribuye hacia el riesgo general para el Indicador de Foro.
El riesgo local será multiplicado por este número para formar la Contribución al Riesgo.';
