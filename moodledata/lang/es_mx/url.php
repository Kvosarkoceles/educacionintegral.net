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
 * Strings for component 'url', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   url
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['chooseavariable'] = 'Escoja una variable...';
$string['clicktoopen'] = 'Haga clic en el enlace {$a} para abrir la URL.';
$string['configdisplayoptions'] = 'Seleccione todas las opciones que deben estar disponibles; los valores existentes no se modifican. Mantenga pulsada la tecla CTRL para seleccionar varios campos.';
$string['configframesize'] = 'Cuando una página web o un archivo subido se muestra dentro de un marco, este valor es la altura (en píxeles) del marco superior (el que contiene la barra de navegación).';
$string['configrolesinparams'] = 'Activar si desea incluir los nombres de rol localizados en la lista de parámetros variables disponibles';
$string['configsecretphrase'] = 'Esta frase secreta se utiliza para producir código cifrado válido que pueda ser enviado a algunos servidores como parámetro. El código de cifrado se produce por un valor md5 de la dirección IP del usuario actual concatenada con su frase secreta. Es decir, el código = md5 (IP.frase_secreta). Por favor tenga en cuenta que que esto no es fiable porque la dirección IP puede cambiar y a menudo es compartida por diferentes equipos.';
$string['contentheader'] = 'Contenido';
$string['createurl'] = 'Crear una URL';
$string['displayoptions'] = 'Opciones de visualización disponibles';
$string['displayselect'] = 'Mostrar';
$string['displayselectexplain'] = 'Elija el modo de visualización; por desgracia no todos los modos son adecuados para todas las direcciones URL.';
$string['displayselect_help'] = 'Este parámetro, junto con el tipo de URL, y siempre que el navegador permita incorporar código, determina cómo se muestra la dirección URL. Las opciones pueden incluir:

 * Automático - Se selecciona de forma automática la mejor opción para visualizar la dirección URL

 * Incrustar - La URL se muestra dentro de la página debajo de la barra de navegación junto con la descripción y cualquier otro bloque

 * Abrir - Sólo se muestra la dirección en la ventana del navegador

 * En ventana emergente - La URL se muestra en una ventana nueva del navegador sin menús y sin barra de direcciones

 * En marco - La URL se muestra dentro de un marco debajo de la barra de navegación y la descripción de URL

 * Nueva ventana - La URL se muestra en una nueva ventana del navegador con menús y una barra de dirección';
$string['externalurl'] = 'URL externa';
$string['framesize'] = 'Altura del marco';
$string['indicator:cognitivedepth'] = 'URL cognitiva';
$string['indicator:cognitivedepthdef'] = 'LTI cognitiva';
$string['indicator:cognitivedepthdef_help'] = 'El participante ha alcanzado este porcentaje del compromiso cognitivo ofrecidos por los recursos URL durante este intervalo de análisis (Niveles = Sin ver, Ver)';
$string['indicator:cognitivedepth_help'] = 'Este indicador está basado en la profundidad cognitiva alcanzada por el estudiante en un recurso URL.';
$string['indicator:socialbreadth'] = 'URL social';
$string['indicator:socialbreadthdef'] = 'URL social';
$string['indicator:socialbreadthdef_help'] = 'El participante ha alcanzado este porcentaje del compromiso social ofrecido por los recursos de URL durante este intervalo de análisis (Niveles = Sin participación, Participante solo, Participante con otros)';
$string['indicator:socialbreadth_help'] = 'Este indicador está basado en la amplitud social alcanzada por el estudiante en un recurso URL.';
$string['invalidstoredurl'] = 'No puede mostrarse este recurso, la URL no es válida';
$string['invalidurl'] = 'La URL introducida no es válida';
$string['modulename'] = 'URL';
$string['modulename_help'] = 'El módulo URL le permite al profesor proporcionar un enlace de internet para un recurso del curso. Cualquier cosa libremente disponible en línea, como documentos o imágenes, puede enlazarse a un URL y la URL de una página web en particular no requiere ser forzosamente la página principal del sitio web. Se puede copiar y pegar el URL de una página web en particular o un profesor podría emplear el selector de archivos de Moodle y elegir un enlace de un repositorio como Flickr, YouTube o Wikimedia (dependiendo de cuales repositorios están habilitados en el sitio).

Existen varias opciones de visualización para el URL, como incrustado, abrir en ventana nueva emergente y opciones avanzadas para pasar información, como el nombre del estudiante, si la URL lo necesitara.

Observe que las URLs también pueden añadirse a cualquier otro recurso o actividad mediante el editor de texto.';
$string['modulenameplural'] = 'URLs';
$string['page-mod-url-x'] = 'Cualquier página del módulo URL';
$string['parameterinfo'] = '&amp;parameter=variable';
$string['parametersheader'] = 'Variables de URL';
$string['parametersheader_help'] = 'Algunas variables internas de Moodle pueden ser automáticamente añadidas a la URL. Escriba su nombre para el parámetro dentro de cada caja de texto y entonces seleccione la variable requerida correspondiente.';
$string['pluginadministration'] = 'Administración del módulo URL';
$string['pluginname'] = 'URL';
$string['popupheight'] = 'Altura de la ventanta emergente (en pixeles)';
$string['popupheightexplain'] = 'Especifica la altura por defecto de las ventanas emergentes.';
$string['popupwidth'] = 'Ancho de la ventana emergente (en pixeles)';
$string['popupwidthexplain'] = 'Especifica la anchura por defecto de las ventanas emergentes.';
$string['printintro'] = 'Mostrar la descripción de la URL';
$string['printintroexplain'] = '¿Mostrar la descripción URL debajo del contenido? Algunos tipos de visualización pueden no mostrar la descripción incluso aunque esté activada esa opción.';
$string['privacy:metadata'] = 'El plugin de Recurso URL no almacena ningún dato personal.';
$string['rolesinparams'] = 'Incluye los nombres de rol en los parámetros';
$string['search:activity'] = 'URL';
$string['serverurl'] = 'URL del servidor';
$string['url:addinstance'] = 'Añadir un nuevo recurso URL';
$string['url:view'] = 'Mostrar URL';
