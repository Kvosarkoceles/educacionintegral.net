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
 * Strings for component 'local_ousearch', language 'es_mx', branch 'MOODLE_21_STABLE'
 *
 * @package   local_ousearch
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['configremote'] = 'Lista de direcciones IP que se permite emplear en la facilidad de búsqueda remota. Esta debería ser una lista de cero o más direcciones IP numéricas, separadas por comas. ¡Tenga mucho cuidado! Las solicitudes provenientes de estas direcciones IP pueden buscar (y ver el texto del resumen) de la misma forma como lo haría cualquier usuario. Por defecto, está vacía y se impide el acceso.';
$string['displayversion'] = 'Búsqueda OU  versión: <strong>{$a}</strong>';
$string['fastinserterror'] = 'Falló al insertar datos de búsqueda (inserción de alto desempeño)';
$string['findmoreresults'] = 'Más resultados';
$string['maxterms'] = 'Número máximo de items';
$string['maxterms_desc'] = 'Si el usuario trata de buscar más términos que este límite, obtendrá un mensaje de error (Por razones de desempeño).';
$string['nomoreresults'] = 'No pudo encontrar más resultados';
$string['noresults'] = 'No pudo encontrar resultados que coincidieran. Intenete empleando diferentes palabras, o quitando palabras de su búsqueda.';
$string['nowordsinquery'] = 'Escriba algunas palabras en la caja de búsqueda.';
$string['ousearch'] = 'Búsqueda OU';
$string['pluginname'] = 'Búsqueda OU';
$string['previousresults'] = 'Regresar a resultados {$a}';
$string['reindex'] = 'Re-indexando documentos para el módulo {$a->module} en curso {$a->courseid}';
$string['remote'] = 'Búsqueda IP remoto permitida';
$string['remotenoaccess'] = 'Esta dirección de IP no tiene acceso a búsqueda remota';
$string['remotewrong'] = 'El acceso de búsqueda remota no está configurado (correctamente).';
$string['restofwebsite'] = 'Buscar en el resto de este sitio web';
$string['resultsfail'] = 'No pudo encontrar resultados que incluyeran la palabra <strong>{$a}</strong>. Intente emplear palabras diferentes.';
$string['searchfor'] = 'Buscar: {$a}';
$string['searchresultsfor'] = 'Resultados de búsqueda para <strong>{$a}</strong>';
$string['searchtime'] = 'Tiempo de búsqueda: {$a}s';
$string['toomanyterms'] = '<strong>Usted escribió demasiados términos de búsqueda (palabras).</strong> Para asegurar que los resultados de la búsqueda puedan mostrarse rápidamente, el sistema está limitado a un máximo de {$a} términos de búsqueda. Por favor elija el botón \'Regresar\' y modifique su búsqueda.';
$string['untitled'] = '(sin título)';
