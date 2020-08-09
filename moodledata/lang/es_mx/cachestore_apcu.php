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
 * Strings for component 'cachestore_apcu', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   cachestore_apcu
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clusternotice'] = 'Por favor tenga en cuenta que APCu solamente es una opción apropiada para sitios de un solo nodo o cachés que pueden almacenarse localmente.
Para más información vea  la  <a href="{$a}">documentación en idioma inglés para usuarios de caché APC</a>.';
$string['notice'] = 'Aviso';
$string['pluginname'] = 'Caché de Usuario APC (APCu)';
$string['prefix'] = 'Prefijo';
$string['prefix_help'] = 'El prefijo de arriba se usa para todas las claves almacenadas en este almacén de instancia APC. Por defecto se usa el prefijo database.';
$string['prefixinvalid'] = 'El prefijo que Usted ha seleccionado es inválido. Usted solamente puede usar a-z A-Z 0-9-_.';
$string['prefixnotunique'] = 'El prefijo que Usted ha seleccionado no es único. Por favor elija un prefijo único.';
$string['privacy:metadata'] = 'El plugin del Caché de usuario APC (APCu) almacena datos por poco tiempo como parte de su funcionalidad de caché, pero estos datos son borrados regularmente y no son enviados externamente de ninguna manera.';
$string['testperformance'] = 'Probar desempeño';
$string['testperformance_desc'] = 'Si se habilita, será incluido el desempeño APCu al ver la página de Prueba del desempeño. No se recomienda hablitar esto en un sitio en producción.';
