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
 * Strings for component 'local_csp', language 'es_mx', branch 'MOODLE_37_STABLE'
 *
 * @package   local_csp
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'Acción';
$string['areyousuretodeleteallrecords'] = '¿Está Usted seguro de querer eliminar todos los registros de reporte CSP?';
$string['areyousuretodeleteonerecord'] = '¿Está Usted seguro de querer eliminar este registro de reporte CSP?';
$string['blockeduri'] = 'URI bloqueada';
$string['configurecspheader'] = 'Configurar encabezado CSP';
$string['cspdirectives'] = 'Directivas CSP';
$string['cspdirectivesinfo'] = '<p>Ejemplo de directivas CSP (por favor refiérase al enlace superior para la sintaxis exacta):<br /><span style="color:#00acdf">script-src https:; style-src cdn.example.com; default-src \'self\';</span></p>';
$string['cspheaderdefault'] = 'default-src https:;\\nscript-src \'self\' *.catalyst-analytics.nz \'unsafe-inline\' \'unsafe-eval\';\\nfont-src https: data:;\\nstyle-src https: \'unsafe-inline\';\\nimg-src https: data:;';
$string['cspheaderenable'] = 'Habilitar encabezado CSP';
$string['cspheaderenabledescription'] = 'Activar esta casilla para habilitar encabezados CSP';
$string['cspheaderenforce'] = 'Política-de-Seguridad-del-Contenido';
$string['cspheaderenforcing'] = 'Política-de-Seguridad-del-Contenido';
$string['cspheaderenforcinghelp'] = 'Forzar a  los navegadores a que sigan directivas CSP; por ejemplo, bloquear la carga de contenido inseguro';
$string['cspheaderreporting'] = 'Política-de-Seguridad-del-Contenido-Solamente-Reporte';
$string['cspheaderreportinghelp'] = 'Monitorear y reportar violaciones CSP';
$string['csphttpresponseheader'] = 'Encabezado de respuesta CSP HTTP';
$string['cspreports'] = 'Reportes de violación CSP';
$string['cspsettings'] = 'Configuraciones de política de seguridad del contenido';
$string['cspsettingsinfo'] = '<p>CSP (Política de Seguridad del Contenido) funciona al añadirle un encabezado de respuesta a cada página de Moodle. Los navegadores modernos, cuando ven este encabezado, pueden realizar ciertas acciones, como por ejemplo  bloquear contenido inseguro en dichas páginas. Por favor, lea más al respecto de CSP <a target="_blank" href="https://developer.mozilla.org/en-US/docs/Web/HTTP/CSP">aquí</a>.</p><p>Si Usted deja vacía alguna de estas configuraciones, no se usarán encabezados CSP.</p>';
$string['documenturi'] = 'Violación en';
$string['failcounter'] = 'Número';
$string['loadingmixedcontentdescription'] = 'Al acceder a sitios web Moodle via HTTPS, el navegador prohibe el mostrar los recursos debajo porque se originan desde HTTP.<br />Usted debería de poder verlo en su consola JavaScript de su navegador.';
$string['loadinsecurecss'] = 'Cargar CSS inseguro desde {$a}';
$string['loadinsecureiframe'] = 'Cargar iframe inseguro desde {$a}';
$string['loadinsecureimage'] = 'Cargar imagen insegura desde {$a}';
$string['loadinsecurejavascript'] = 'Cargar JavaScript inseguro desde {$a}';
$string['localcspheadingdirectives'] = 'Configurar directivas CSP';
$string['localcspheadinghttpresponseheader'] = 'Elegir encabezado de respuesta CSP HTTP';
$string['mixedcontentexamples'] = 'Ejemplos de contenido mixto';
$string['pluginname'] = 'Política de Seguridad del Contenido';
$string['reset'] = 'Re-iniciar';
$string['resetallcspstatistics'] = 'Re-iniciar todas las estadísticas';
$string['scspheadernone'] = 'No usado';
$string['timeupdated'] = 'Último';
$string['violateddirective'] = 'Política';
