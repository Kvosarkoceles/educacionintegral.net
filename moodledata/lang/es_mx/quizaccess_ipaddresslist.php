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
 * Strings for component 'quizaccess_ipaddresslist', language 'es_mx', branch 'MOODLE_37_STABLE'
 *
 * @package   quizaccess_ipaddresslist
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addsubnet'] = 'Añadir lugar';
$string['allowedsubnets'] = 'Lugares permitidos';
$string['allowedsubnets_help'] = 'El acceso a examen puede restringirse a lugares particulares dependiendo de la dirección IP del usuario.La lista de lugares y las sub-redes IP correspondientes están definidas por el administrador del sitio. Seleccione Ninguno(a) para deshabilitar esta revisión de lugares.';
$string['editsubnet'] = 'Editando lugar';
$string['managesubnets'] = 'Gestión de lugares';
$string['pluginname'] = 'Lista de direcciones IP de la regla de acceso al examen';
$string['subnet'] = 'Sub-red de IPs';
$string['subnet_help'] = 'Especifique una lista separada por comas de los números de direcciones IP parciales o totales.

Ejemplos:

* 192.168.10.1
* 192.168.
* 231.54.211.0/20
* 231.3.56.10-20
* 192.168.10.1,192.168.,231.54.211.0/20,231.3.56.10-20';
$string['subnetwrong'] = 'Este examen solamente es accesible desde ciertos sitios, y esta computadora no está en la lista de los sitios permitidos.';
