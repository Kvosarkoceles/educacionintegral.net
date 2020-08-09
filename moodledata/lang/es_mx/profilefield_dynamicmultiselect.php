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
 * Strings for component 'profilefield_dynamicmultiselect', language 'es_mx', branch 'MOODLE_32_STABLE'
 *
 * @package   profilefield_dynamicmultiselect
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['dynamicmultiselect:caneditsql'] = 'Puede editar consulta SQL para campo personalizado multiselección usuario';
$string['numbersqlvalues'] = 'Número de valores posibles';
$string['numbersqlvalueshelp'] = 'Nota';
$string['numbersqlvalueshelp_help'] = 'Máximo 20 en este conjunto de muestra, sin límites en uso real';
$string['param1sqlhelp'] = 'Consulta SQL';
$string['param1sqlhelp_help'] = 'La consulta debería regresar dos columnas: data e ID. Aun máss, debería de regresar al menos un valor. Por ejemplo: "select 1 id, \'hallo\' data"';
$string['pluginname'] = 'Multi Selección Dinámica';
$string['queryerrordatamissing'] = 'falta columna de datos en valores de retorno de consulta';
$string['queryerrordefaultmissing'] = 'Los valores por defecto no existen dentro de la lista de valores permitidos';
$string['queryerrorempty'] = 'No hay resultados encontrados al ejecutar la consulta: no puede validarse';
$string['queryerrorfalse'] = 'Error al ejecutar la consulta: elñ valor de retorno es falso';
$string['queryerroridmissing'] = 'La columna de ID falta en los valres de retorno de la consulta';
$string['samplesqlvalues'] = 'Muestra de valores posibles';
$string['sqlerror'] = 'Error al ejecutar la consulta';
$string['sqlquery'] = 'Consulta SQL';
