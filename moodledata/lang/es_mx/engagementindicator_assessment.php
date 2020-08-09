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
 * Strings for component 'engagementindicator_assessment', language 'es_mx', branch 'MOODLE_27_STABLE'
 *
 * @package   engagementindicator_assessment
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['dayslate'] = 'Días de retraso';
$string['dayslate_help'] = 'Número de días de retraso con los que se envió la tarea. Esto considera cualquier anulación que estuviera y que afecte la fecha esperada de entrega por el usuario.';
$string['localrisk'] = 'Riesgo Local';
$string['localrisk_help'] = 'El porcentaje de riesgo de esta tarea sola, sobre 100. El Riesgo Local es multiplicado por la ponderación de la evaluación para formar la Contribución al Riesgo.';
$string['logic'] = 'Lógica';
$string['logic_help'] = 'Este campo da una idea sobre la lógica usada para llegar al valor de Riesgo Local.';
$string['overduegracedays'] = 'Días de Gracia de Retraso';
$string['overduemaximumdays'] = 'Días de Retraso Máximos';
$string['overduenotsubmittedweighting'] = 'Ponderación de Retraso no Enviado';
$string['overduesubmittedweighting'] = 'Ponderación de Retraso Enviado';
$string['override'] = 'Anulación';
$string['override_help'] = 'Algunas actividades de evaluación (ejemplo: examen) contienen una característica para configurar una fecha alterna para usuarios individuales o grupos de usuarios. Este campo indica que esta fecha esperada del usuario fue afectada por una anulación.';
$string['pluginname'] = 'Actividad de Evaluación';
$string['riskcontribution'] = 'Contribución al Riesgo';
$string['riskcontribution_help'] = 'La cantidad de riesgo con que contribuyó esta evaluación en particular hacia el riesgo regresado por el indicador de Evaluación. Esto se forma al multiplicar el Riesgo Local con la Ponderación de la Evaluación. Las contribuciones al Riesgo de cada evaluación se suman juntas para formar el Riesgo General para el indicador.';
$string['status'] = 'Status';
$string['status_help'] = 'Status indica si es que el usuario ha enviado esta tarea o no.';
$string['weighting'] = 'Ponderación';
$string['weighting_help'] = 'Este número mostra la calificación máxima de esta tarea como porcentaje de la calificación total máxima para todos los envíos evaluados por el Indicador de Tareas. La ponderación local (local_weighting) será multiplicada por esto para formar la Contribución al Riesgo.';
