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
 * Strings for component 'engagementindicator_login', language 'es_mx', branch 'MOODLE_27_STABLE'
 *
 * @package   engagementindicator_login
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['eavgsessionlength'] = 'Duración esperada promedio de la sesión (segundos)';
$string['eloginspastweek'] = 'Entradas esperadas en la semana pasada';
$string['eloginsperweek'] = 'Entradas esperadas por semana';
$string['etimesincelast'] = 'Tiempo esperado desde la última entrada (segundos)';
$string['localrisk'] = 'Riesgo Local';
$string['localrisk_help'] = 'El porcentaje de riesgo por esta entrada sola, sobre 100. El Riesgo Local es multiplicado por la ponderación de entrada para formar la Contribución al Riesgo.';
$string['logic'] = 'Lógica';
$string['logic_help'] = 'Este campo da una idea sobre la lógica usada para llegar al valor de Riesgo Local.';
$string['maxrisktitle'] = 'Nunca ha entrado';
$string['pluginname'] = 'Actividad de Ingreso';
$string['reasonavgsessionlen'] = '0% de riesgo para duración de sesión promedio menor a  {$a} segundos. 100% para duración de sesión de 0';
$string['reasonloginspastweek'] = '0% de riesgo para más de  {$a}  ingresos por semana, 100% para 0 ingresos en la semana pasada.';
$string['reasonloginsperweek'] = '0% de riesgo para ingresar al curso  >= {$a} veces por semana. 100% de riesgo para 0 ingresos por semana.';
$string['reasonnologin'] = 'Este usuario nunca ha ingresado al curso y por esto está al riesgo máximo de 100%.';
$string['reasontimesincelogin'] = '0% de riesgo para el último ingreso al curso que acaba de suceder. Escalando al máximo de 100% de riesgo después de {$a} días.';
$string['riskcontribution'] = 'Contribución al Riesgo';
$string['riskcontribution_help'] = 'La cantidad de riesgo con la que esta entrada en particular contribuye al Riesgo Total regresado por el Indicador de Entrada. Esto se forma al multiplicar el Riesgo Local con la ponderación de Entrar. Las Contribuciones al Riesgo de cada entrada se suman juntas para formar el riesgo feneral para el indicador.';
$string['sessionlength'] = 'Duración de la Sesión (segundos)';
$string['weighting'] = 'Ponderación';
$string['weighting_help'] = 'Este número muestra la cantidad con la que este item contribuye hacia el riesgo general para el Indicador de Entrar. El Riesgo Local será multiplicado por este número para formar la Contribución al Riesgo.';
