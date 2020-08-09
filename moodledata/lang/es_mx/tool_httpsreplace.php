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
 * Strings for component 'tool_httpsreplace', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   tool_httpsreplace
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['complete'] = 'Completado';
$string['count'] = 'Número de ítems de contenido incrustados';
$string['disclaimer'] = 'Yo entiendo los riesgos de esta operación';
$string['doclink'] = 'Herramienta para conversión a HTTPS';
$string['doit'] = 'Realizar conversión';
$string['domain'] = 'Dominio problemático';
$string['domainexplain'] = 'Cuando un sitio es movido de HTTP a HTTPS, todo el contenido HTTP dejará de funcionar. Esta herramienta le permite a Usted convertir automáticamente el contenido HTTP a HTTPS.

Antes de realizar la conversión, el contenido será revisado para encontrar cualquier URLs que podrían no funcionar después de la conversión. Usted tal vez quisiera revisar que cada uno tenga HTTPS disponible, o encontrar recursos alternativos.';
$string['domainexplainhelp'] = 'Estos dominios son encontrados en su contenido, pero no parecen soportar contenido HTTPS. Después de cambiar a HTTPS, el contenido incluido de estos sitios ya no se les mostrará adentro de Moodle a los usuarios con navegadores seguros modernos. Es posible que estos sitios estén temporal o permanentemente no-disponibles y no funcionarán con ninguna de las configuraciones de seguridad. Proceda solamente después de revisar estos resultados y determinar si es que este contenido alojado externamente es no-esencial. Por favor tenga en cuenta que, de cualquier forma, este contenido no funcionará una vez que cambie a HTTPS.';
$string['httpwarning'] = 'Esta instancia todavía está corriendo en HTTP. Todavía puede Usted correr esta  herramienta y el contenido externo será cambiado a HTTPS, pero el contenido interno permanecerá en HTTP. Usted necesitará correr otra vez este \'script\' después de cambiar a HTTPS para convertir el contenido interno.';
$string['notimplemented'] = 'Lo sentimos, esta característica no está implementada en su manejador de base de datos.';
$string['oktoprocede'] = 'La revisión no encuentra problemas con su contenido. Usted puede proceder a actualizar cualquier contenido HTTP para usar HTTPS.';
$string['pageheader'] = 'Actualizar a HTTPS los URLS de contenido alojado externamente';
$string['pluginname'] = 'Herramienta para conversión a HTTPS';
$string['privacy:metadata'] = 'El plugin de la Herramienta de conversión a HTTPS no almacena ningún dato personal.';
$string['replacing'] = 'Remplazando contenido HTTP con HTTPS...';
$string['searching'] = 'Buscando {$a}';
$string['takeabackupwarning'] = 'Advertencia: una vez que corra esta herramienta, los cambios no pueden ser revertidos. Se recomienda realizar un respaldo completo del sitio antes de  proceder, pues hay un bajo riesgo de que sea remplazado el contenido equivocado.';
$string['toolintro'] = 'Si Usted está planeando convertir su sitio a HTTPS, Usted puede usar  la <a href="{$a}">Herramienta para conversión a HTTPS</a> para convertir a HTTPS su contenido incrustado.';
