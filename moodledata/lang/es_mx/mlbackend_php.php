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
 * Strings for component 'mlbackend_php', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   mlbackend_php
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['datasetsizelimited'] = 'Solamente ha sido evaluada una parte del conjunto_de_datos debido a su tamaño. Configure $CFG->mlbackend_php_no_memory_limit  si Usted está segurísimo de  que su sistema puede soportar un conjunto_de_datos {$a}.';
$string['errorcantloadmodel'] = 'El archivo {$a} del modelo no existe, El modelo debería de ser entrenado antes de usarlo para predecir.';
$string['errorlowscore'] = 'La precisión de predicción del modelo evaluado no es muy alta, por lo que algunas predicciones podrían no ser precisas. Puntaje del modelo = {$a->score}, puntaje mínimo = {$a->minscore}';
$string['errornotenoughdata'] = 'No hay suficientes datos para evaluar este modelo usando el intervalo de análisis proporcionado.';
$string['errornotenoughdatadev'] = 'Los resultados de evaluación varían demasiado. Se le recomienda que se colecten más datos para asegurar que el modelo es válido. La desviación estándar de los resultados de la evaluación es = {$a->deviation}, la desviación estándar máxima recomendable es  = {$a->accepteddeviation}';
$string['errorphp7required'] = 'El backend de PHP de aprendizaje de máquina necesita PHP 7';
$string['pluginname'] = 'Backend de PHP de aprendizaje de máquina';
$string['privacy:metadata'] = 'El plugin del Backend de aprendizaje de máquina PHP no almacena ningún dato personal.';
