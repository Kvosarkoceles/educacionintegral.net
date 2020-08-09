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
 * Strings for component 'cachestore_memcachecluster', language 'es_mx', branch 'MOODLE_27_STABLE'
 *
 * @package   cachestore_memcachecluster
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Cluster Memcache';
$string['servers'] = 'Servidores Buscados';
$string['servers_help'] = 'Este es el servidor (o conjunto de servidores) que serán llamados cuando se recuperen datos del caché.
Los servidores deberían definirse de a uno por línea y consisten de  una dirección del servidor y opcionalmente un puerto y un peso. Si no se proporciona el puerto entonces se usa el puerto por defecto (11211).

Por ejemplo:
<pre>
server.url.com
direccion_ip:puerto
nombre_del_servidor:puerto:peso
</pre>';
$string['setservers'] = 'Conjunto de Servidores';
$string['setservers_help'] = 'Esta es la lista de servidores que serán actualizados cuando se modifiquen los datos del caché.
*Debe de* incluir los servicios memcached en Servidores Buscados, aunque tengan un hostname diferente.
Los servidores deberían definirse de a uno por línea y consisten de  una dirección del servidor y opcionalmente un puerto y un peso. Si no se proporciona el puerto entonces se usa el puerto por defecto (11211).

Por ejemplo:
<pre>
server.url.com
direccion_ip:puerto
</pre>';
$string['testfetchservers'] = 'Servidores buscados de prueba';
$string['testfetchservers_desc'] = 'Los servidores de prueba se usan para pruebas de desempeño. Es enteramente opcional el configurar servidores de prueba. Los servidores deberían definirse de a uno por línea y consisten de  una dirección del servidor y opcionalmente un puerto y un peso. Si no se proporciona el puerto entonces se usa el puerto por defecto (11211).';
$string['testsetservers'] = 'Conjunto de servidores de prueba';
$string['testsetservers_desc'] = 'Los servidores deberían definirse de a uno por línea y consisten de una dirección del servidor y opcionalmente un puerto. Si no se proporciona un puerto entonces se usa el puerto por defecto (11211)';
