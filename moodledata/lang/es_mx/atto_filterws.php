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
 * Strings for component 'atto_filterws', language 'es_mx', branch 'MOODLE_36_STABLE'
 *
 * @package   atto_filterws
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addfilterws'] = 'Añadir marca de filtro WebService';
$string['apply'] = 'Aplicar';
$string['filteruseragent'] = 'Filtrar por Agente Usuario';
$string['filteruseragent_help'] = 'Si un valor es proporcionado, el contenido seleccionado solamente será mostrado si el Agente del Usuario contiene este valor. El valor será convertido a una expresión regular.';
$string['insert'] = 'Insertar';
$string['insertfilterws'] = 'Insertar filtro Servicio Web';
$string['origin'] = 'Origen';
$string['originany'] = 'Cualquiera';
$string['origin_help'] = 'Web: Solamente mostrar en el navegador.<br>Servicio Web: Solamente mostrar en un cliente de Servicio Web, como la App Moodle.<br>Cualquiera: Mostrar para todos los orígenes.';
$string['originweb'] = 'Web';
$string['originws'] = 'Servicio Web';
$string['pluginname'] = 'Filtro Servicio Web para Atto';
$string['predefined'] = 'Filtros predefinidos';
$string['predefined_desc'] = 'Lista de filtros predefinidos que todos los usuarios podrán usar cuando usen el editor Atto .

Ingrese cada filtro en una línea nueva con el formato: nombre a mostrar, origen  (web, ws o cualquiera) y Agente del Usuario (opcional), separados por el caracter de barra vertical | . Por ejemplo:
<pre>
App Moodle Oficial|ws|MoodleMobile
</pre>';
$string['privacy:metadata'] = 'El plugin atto_filterws plugin no almacena ningún dato personal.';
$string['settings'] = 'Configuraciones de Filtro Servicio Web';
