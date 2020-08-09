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
 * Strings for component 'etherpadlite', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   etherpadlite
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adminguests'] = '¿Se les permite escribir a los invitados?';
$string['adminguestsdesc'] = 'Con esta configuración, los usuarios que tienen permitido configurar un módulo específico de etherpadlite pueden  permitirles a los invitados escribir en este módulo etherpadlite específico';
$string['apikey'] = 'Clave API';
$string['apikeydesc'] = 'Esta es la clave API que necesita este módulo para comunicarse con su servidor etherpadlite. Esta clave API es guardada en su servidor etherpadlite y puede copiarse desde allí.';
$string['checkssl'] = 'Verificar certificado HTTPS';
$string['checkssldesc'] = 'Con esto configurado, el certificado HTTPS del servidor etherpadlite será revisado, para prevenir ataques de \'hombre-de-enmedio\' (man-in-the-middle)';
$string['cookiedomain'] = 'Dominio de Cookie';
$string['cookiedomaindesc'] = 'Aquí puede Usted escribir el dominio, que debería de  almacenarse en la \'\'cookie\'\' de la sesión, para que la reconozca el servidor etherpadlite. Cuando Moodle corre en el dominio moodle.ejemplo.com y su servidor etherpadlite en etherpadlite.ejemplo.com, entonces su dominio de la \'\'cookie\'\' debería ser .ejemplo.com';
$string['cookietime'] = 'Tiempo de sesión transcurrido';
$string['cookietimedesc'] = 'Aquí tiene Usted que poner el tiempo (en segundos) hasta que la sesión de etherpadlite sea válida';
$string['etherpadlite'] = 'Etherpad Lite';
$string['etherpadlite:addinstance'] = 'Añadir nueva pad';
$string['etherpadliteintro'] = 'Introducción a Etherpadlite';
$string['etherpadlitename'] = 'Nombre de Etherpadlite';
$string['fullscreen'] = 'Pantalla completa';
$string['guestsallowed'] = '¿Se les permite escribir a los invitados?';
$string['guestsallowed_help'] = 'Esto determina si es que a los invitados se les permite escribir en este pad. En caso contrario, solamente podrán leer el contenido del pad.';
$string['minwidth'] = 'Ancho mínimo';
$string['minwidthdesc'] = 'Si no quiere un etherpad muy pequeño en dispositivos pequeños como teléfonos celulares, Usted puede configurar un ancho mínimo que conservará el pad.';
$string['modulename'] = 'Etherpad Lite';
$string['modulename_help'] = 'El módulo de Etherpad Lite le permite a  los estudiantes y a los profesores escribir texto en una forma colaborativa. El texto es automáticamente sincronizado confome se escribe.

(El servidor etherpad lite, que está detrás de este módulo, todavía está en etapa beta. Por esto podrían ocurrir problemas en raras circunstancias, pero no se les espera)';
$string['modulenameplural'] = 'Etherpad Lites';
$string['padname'] = 'Padname para todas las instancias';
$string['padnamedesc'] = 'Un padname general puede ser útil, si Usted quiere encontrar todas las pads de esta instalación Moodle en su servidor etherpadlite. Los grupos pads son generados automáticamente.';
$string['pluginadministration'] = 'Administración de Etherpad Lite';
$string['pluginname'] = 'Etherpad Lite';
$string['responsiveiframe'] = 'iFrame responsivo';
$string['responsiveiframedesc'] = 'Con esto configurado, el iFrame para el editor Etherpad Lite ajustará hermosamente en un tema Moodle responsivo y escalará su ancho de acuerdo a la ventana del navegador. En caso contrario, el editor Etherpad Lite tendrá un ancho fijo que básicamente se adapta al ancho de la ventana del navegador al momento de la carga de la página, pero que no escalará cuando a la ventana se le cambie de tamaño.';
$string['restorewindowsize'] = 'Restaurar tamaño de pantalla';
$string['ssl'] = 'Redirección HTTPS';
$string['ssldesc'] = 'Con esta configuración, su sitio se redireccionará a sí mismo hacia HTTPS si se abre un etherpadlite (atractivo visual para el usuario)';
$string['summaryguest'] = 'Usted está ingresado como invitado. Por esto Usted solamente puede ver la versión de solo-lectura de este Pad. Re-cargue la página para ver cambios nuevos.';
$string['url'] = 'URL del servidor';
$string['urldesc'] = 'Esta es la URL de su servidor Etherpadlite en el formato:http[s]://host[:port]/[subDir/]';
