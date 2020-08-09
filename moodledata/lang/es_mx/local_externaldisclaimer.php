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
 * Strings for component 'local_externaldisclaimer', language 'es_mx', branch 'MOODLE_32_STABLE'
 *
 * @package   local_externaldisclaimer
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['disclaimer'] = 'Texto de mensaje de advertencia';
$string['disclaimer_desc'] = 'Ingrese aquí el texto que desea usar para su mensaje de advertencia.';
$string['enabled'] = 'Habilitada';
$string['enabled_desc'] = 'Habilitar el plugn de Mensaje de Advertencia externa';
$string['external'] = 'Patrones externos';
$string['external_desc'] = 'Ingresar patrones de expresión regular para URLs que son internas pero que aun así deberían generar un mensaje de advertencia. Esto típicamente sería usado para páginas locales que redirigenhacia una URL externa.';
$string['internal'] = 'Dominios internos';
$string['internal_desc'] = 'Ingresar los dominios que contarán como internos, y que por eso no obtendrán un mensaje de advertencia. Estos deberían de incluir a los dominios de su(s) propio(s) sitio(s) y cualquier otro adentro de su red. Un dominio por línea. No se necesita http://';
$string['pluginname'] = 'Mensaje de advertencia sobre sitio externo';
