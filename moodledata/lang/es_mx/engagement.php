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
 * Strings for component 'engagement', language 'es_mx', branch 'MOODLE_27_STABLE'
 *
 * @package   engagement
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cachettl'] = 'TTL del caché';
$string['cachingdisabled'] = 'Caché deshabilitado';
$string['configcachettl'] = 'Esta configuración especifica el Tiempo-de-Vida (TTL=Time To Live) para los datos comprometidos al caché. Si esto se configura, se arriesga a que los cálculos mostrados en el bloque no necesariamente reflejen los datos en vivo, sino que serían calculados sobre la información cachada. Por ejemplo: nuevos envíos de tarea, entradas al sitio, etc, no serían detectados hasta que los datos cachados caducaran. Esta configuración es importante por razones de desempeño, para no sobrecargar la base de datos con solicitudes en sitios con alto tráfico.';
$string['engagement:addinstance'] = 'Añadir una instancia de compromiso';
$string['incorrectlyconfigured'] = 'Este plugin ha sido configurado incorrectamente. No está hecho para añadirse a un curso de esta forma. Por favor contacte a su administrador de sistemas para que configure el plugin de mod_engagement como oculto.';
$string['modulename'] = 'Análisis de compromiso';
$string['modulenameplural'] = 'Análisis de compromiso';
$string['pluginname'] = 'Análisis de compromiso';
$string['riskscore'] = 'Puntaje de riesgo';
$string['roles_desc'] = 'Los roles a los cuales reportar en reportes y bloque de compromiso';
