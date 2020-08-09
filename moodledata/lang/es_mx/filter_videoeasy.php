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
 * Strings for component 'filter_videoeasy', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   filter_videoeasy
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bundle'] = 'Conjuntar';
$string['cleartemplate'] = 'Borrar plantilla';
$string['defaultposterimage'] = 'Imagen de poster por defecto';
$string['defaultposterimage_desc'] = 'La imagen de poster por defecto es solamente una caja gris. Aquí puede Usted subir una imagen personalizada que mejor se acomode a su sitio. Una Imagen de poster por defecto solamente se mostrará si la plantilla del reproductor así lo especifica.';
$string['extensionheading'] = 'Manejadores (handlers) de Extensiones de Archivos';
$string['extensions'] = 'Extensiones de Archivos';
$string['extensions_desc'] = 'Una lista CSV (valores separados por comas) de extensiones de archivos que este filtropuede identificar.';
$string['filterdescription'] = 'Convertir video enlaza cadenas de texto a reproductores';
$string['filtername'] = 'Video Facil';
$string['handle'] = 'Handle {$a}';
$string['player'] = 'Reproductor {$a}';
$string['player_flowplayer'] = 'Flowplayer';
$string['player_jplayervideo'] = 'JPlayer (Video)';
$string['player_jwplayer'] = 'Reproductor JW';
$string['player_mediaelement'] = 'MediaElement.js';
$string['player_playereight'] = 'Reproductor 8';
$string['player_playereleven'] = 'Reproductor 11';
$string['player_playerfifteen'] = 'Reproductor 15';
$string['player_playerfourteen'] = 'Reproductor 14';
$string['player_playernine'] = 'Reproductor 9';
$string['player_playerseven'] = 'Reproductor 7';
$string['player_playersix'] = 'Caja-de-luz YouTube';
$string['player_playerten'] = 'Reproductor 10';
$string['player_playerthirteen'] = 'Reproductor 11';
$string['player_playertwelve'] = 'Reproductor 12';
$string['player_sublimevideo'] = 'Video Sublime';
$string['player_videojs'] = 'Video.js';
$string['pluginname'] = 'Video Fácil';
$string['presets'] = 'Auto-llenar plantilla con una Preconfiguración';
$string['presets_desc'] = 'Video Facil viene con algunas pre-configuraciones por defecto que Usted puede usar de inmediato, o para ayudarle a iniciar su propia plantilla. Elija una de estas pre-configuraciones aquí, o simplemente cree su propia plantilla desde cero.';
$string['privacy:metadata'] = 'El plugin del Filtro VideoEasy no almacena ningún dato personal.';
$string['sitedefault'] = 'Valores por defecto del sitio';
$string['template'] = 'plantilla';
$string['templatealternate'] = 'Contenido alterno';
$string['templatealternate_desc'] = 'Contenido que puede usarse cuando no está disponible el contenido personalizado y subido CSS y JavaScript. Actualmente esto es usado cuando la plantilla es procesada por un servicio web, probablemente para contenido en la App mobile.';
$string['templatecount'] = 'Número de Plantillas';
$string['templatecount_desc'] = 'El número de plantillas que Usted puede tener. El valor por defecto es 15.';
$string['templatedefaults'] = 'valore spor defecto';
$string['templatedefaults_desc'] = 'Valores por defecto para variables personalizadas en la plantilla/script. Usualmente solamente ancho y alto. Escriba conjuntos delimitados por coma de pares de nombre=valor. Por ejemplo, width=800, height=900, feeling=joy (width es ancho, height es alto, feeling es sentimiento, joy es alegría).';
$string['template_desc'] = 'Ponga aquí la plantilla, defina variables al rodearlas con signos @@ en ambos extremos, como por ejemplo @@variable@@';
$string['templateheading'] = 'Configuraciones para  {$a}';
$string['templateinstructions'] = 'Instrucciones (plantilla {$a})';
$string['templateinstructions_desc'] = 'Use esta área para instrucciones o descripción de la plantilla. Solamente se muestra aquí y en la tabla de listado de plantillas.';
$string['templatekey'] = 'Clave de la Plantilla';
$string['templatekey_desc'] = 'La ID que identifica esta plantilla. Debe de ser única en el sitio. Los usuarios nunca la ven. Si Usted la cambia Usted necesitará re-asignar la plantilla/reproductor a la extensión de archivo apropiada. Trate de no cambiarla.';
$string['templatename'] = 'Nombre de esta plantilla';
$string['templatename_desc'] = 'El nombre de esta plantilla';
$string['templatepageheading'] = 'Plantilla: {$a}';
$string['templatepageheading_handlers'] = 'Configuraciones Generales';
$string['templaterequire_amd'] = 'Cargar mediante AMD';
$string['templaterequire_amd_desc'] = 'AMD es un mecanismo para cargar JavaScript. Si Usted sube o enlaza una librería JavaScript en su plantilla, Usted podría necesitar des-seleccionar esto. Solamente aplica si está en Moodle 2.9 o superior.';
$string['templaterequirecss'] = 'URL de CSS';
$string['templaterequirecss_desc'] = 'Algunos reproductores requieren etiquetas CSS en el encabezado de la página. Simplemente ponga aquí la URL.';
$string['templaterequirejs'] = 'URL de JavaScript';
$string['templaterequirejs_desc'] = 'Esta es la URL de cualquier librería JavaScript requerida. Intente iniciar con // .';
$string['templaterequirejsshim'] = 'Requerir exportar Shim (Calce)';
$string['templaterequirejsshim_desc'] = 'Déjelo vacío, a menos que sepa lo que es \'shimmin\' (vea https://en.wikipedia.org/wiki/Windows_on_Windows#Shimming )';
$string['templates'] = 'Plantillas';
$string['templatescript'] = 'script de carga';
$string['templatescript_desc'] = 'Ponga el script de carga (si hubiera) aquí, defina las variables al rodearlas con signos  @@ en ambos extremos. Por ejemplo @@variable@@';
$string['templatestyle'] = 'CSS Personalizado (plantilla {$a})';
$string['templatestyle_desc'] = 'Escriba aquí cualquier código CSS personalizado que use su plantilla. Las variables de la plantilla no funcionarán aquí. Simplemente use CSS simple.';
$string['templateupdated'] = '{$a} Plantillas Poodll actualizadas.';
$string['templateuploadjsshim'] = 'Subir exportar Shim';
$string['templateuploadjsshim_desc'] = 'Déjelo vacío, a menos que sepa lo que es \'shimmin\' (vea https://en.wikipedia.org/wiki/Windows_on_Windows#Shimming )';
$string['templateversion'] = 'La versión de esta plantilla {$a}';
$string['templateversion_desc'] = 'Al compartir plantillas es mejor mantener una versión limpia por cada versión liberada. El formato de la versión depende de Usted.';
$string['updateall'] = 'Actualizar todas las plantillas';
$string['updatetoversion'] = 'Actualizar a versión: {$a}';
$string['uploadcss'] = 'Subir CSS';
$string['uploadcss_desc'] = 'Usted puede subir un archivo CSS que será cargado para su plantilla. Solamente uno.';
$string['uploadjs'] = 'Subir JS';
$string['uploadjs_desc'] = 'Usted puede subir un archivo de librería JS que será cargado para su plantilla. Solamente uno.';
$string['useplayer'] = 'Reproductor {$a}';
$string['useplayerdesc'] = 'El reproductor seleccionado usará la información de la plantilla apropiada.';
$string['videoeasytemplatesadmin'] = 'Administración de Plantillas VideoEasy';
