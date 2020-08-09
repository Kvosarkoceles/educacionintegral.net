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
 * Strings for component 'cachestore_apc', language 'es_mx', branch 'MOODLE_32_STABLE'
 *
 * @package   cachestore_apc
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clusternotice'] = 'Por favor tome en cuenta que APC no es una opción apropiada en sitios que corran servidores web en clusters (clustered web servers). El usarla en ese tipo de casos es altamente probable que conduzca a que el contenido cacheado termine estando fuera de sincronización con otros nodos en el cluster, a menos que sea manejada de forma muy cuidadosa.
Nosotros recomendamos que Usted solamente haga uso de APC en situaciones en donde solamente se usa un único servidor web.
Para más información vea <a href="{$a}">Moodle docs</a>';
$string['notice'] = 'Aviso';
$string['pluginname'] = 'Caché PHP alterna (APC)';
$string['prefix'] = 'Prefijo';
$string['prefix_help'] = 'El prefijo de arriba se usa para todas las claves almacenadas en este almacen de instancia APC. Por defecto se usa el prefijo database.';
$string['prefixinvalid'] = 'El prefijo que Usted ha seleccionado es inválido. Usted solamente puede usar a-z A-Z 0-9-_.';
$string['prefixnotunique'] = 'El prefijo que Usted ha seleccionado no es único. Por favor elija un prefijo único.';
$string['testperformance'] = 'Probar desempeño';
$string['testperformance_desc'] = 'Si se habilita, será incluido el desempeño APC al ver la página de Prueba del desempeño en el bloque de administración. No se recomienda hablitar esto en un sitio en producción.';
