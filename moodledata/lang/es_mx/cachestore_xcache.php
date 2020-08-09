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
 * Strings for component 'cachestore_xcache', language 'es_mx', branch 'MOODLE_25_STABLE'
 *
 * @package   cachestore_xcache
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['erroruniqueprefix'] = 'El prfijo que ha seleccionado no es único. Por favor, elija un prifijo único.';
$string['maxttl'] = 'TTL máximo (minutos)';
$string['maxttl_help'] = 'Esto configura un TTL máximo en todas las entradas guardadas en el caché. Esto asegura que los ítems dentro del caché no se atoren. Configurarlo a 0 asegurará de que no se configure un TTL y los ítems permanecerán en el caché hasta que sean removidos. Por favor tenga en cuenta que cuando lo configura a 0, podemos asegurarnos dee que los datos puestos en el caché estén disponibles; sin embargo, se corre un riesgo mayor de llenar el caché y experimentar degradación del rendimiento.';
$string['pluginname'] = 'Caché de memoria compartida XCache';
$string['prefix'] = 'Prefijo';
$string['prefix_help'] = 'El prefijo se usa para esta instancia. Esto permite que existan harmoniosamente múltiples instancias del almacén de XCache, debe ser único.';
