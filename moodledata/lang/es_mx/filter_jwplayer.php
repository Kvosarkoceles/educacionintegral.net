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
 * Strings for component 'filter_jwplayer', language 'es_mx', branch 'MOODLE_32_STABLE'
 *
 * @package   filter_jwplayer
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['appearanceconfig'] = 'Apariencia';
$string['customskincss'] = 'Nombre de piel (skin) CSS personalizada';
$string['customskincssdesc'] = 'Use una piel CSS personalizada. Los estilos deben de añadirse al sitio según se describe en <a href="http://support.jwplayer.com/customer/portal/articles/1412123-building-jw-player-skins">JW Player website</a>.';
$string['defaultposter'] = 'Poster por defecto';
$string['defaultposterdesc'] = 'Imagen de Poster por defecto a usar con videos.';
$string['displayfixed'] = 'Ancho Fijo';
$string['displayresponsive'] = 'Responsivo';
$string['displaystyle'] = 'Estilo de Visualización';
$string['displaystyledesc'] = 'Estilo de visualización por defecto para usarse para videos si no se especificara un ancho del video.';
$string['downloadbutton'] = 'Botón para descargar';
$string['downloadbuttondesc'] = 'Añadir un botón en la esquina superior izquierda del reproductor, para descargar el archivo del video.';
$string['enabledevents'] = 'Bitácoras de Eventos';
$string['enabledeventsdesc'] = 'Los eventos seleccionados serán investigados y grabados en bitácoras de actividad (visible en la sección sobre Reportes del curso). Asegúrese de que Usted seleccione solamente los necesarios, porque el seleccionar de más aumentará el tamaño de los datos en bitácoras. Por defecto, nosotros solamente investigamos los clicks en los botones para "reproducir" y "pausa" y el hecho de que el video se haya reproducido completamente  (evento "completo"). Para los detalles sobre los eventos, por favor refiérase al sitio web de  <a href="http://support.jwplayer.com/customer/portal/articles/1413089-javascript-api-reference">JW Player</a>.';
$string['enabledextensions'] = 'Extensiones habilitadas';
$string['enabledextensionsdesc'] = 'Solamente las extensiones de archivo seleccionadas serán manejadas por el filtro. Tenga en cuenta que HLS (.m3u8) y MPEG-Dash (.mpd) requieren una licencia Premium, Enterprise o Ads para el reproductor.';
$string['errornojwplayerinstalled'] = 'No se encontraron archivos del reproductor JW player en Moodle';
$string['errornolicensekey'] = 'El reproductor auto-alojado requiere clave de licencia';
$string['eventmedia_audiotrack_switched'] = 'Pista de audio de medio cambiada';
$string['eventmedia_captions_switched'] = 'Pista de subtítulo de medio cambiada';
$string['eventmedia_playback_completed'] = 'Reproducción de medio completada';
$string['eventmedia_playback_failed'] = 'Falló la reproducción de medio';
$string['eventmedia_playback_launched'] = 'Se inició  la reproducción de medio';
$string['eventmedia_playback_position_moved'] = 'Posición de reproducción de medio movida';
$string['eventmedia_playback_started'] = 'Reproducción de medio iniciada';
$string['eventmedia_playback_stopped'] = 'Reproducción de medio detenida';
$string['eventmedia_qualitylevel_switched'] = 'Nivel de calidad del medio cambiado';
$string['filtername'] = 'Filtro multimedia del reproductor JW Player';
$string['gaidstring'] = 'Reproducir/Completar Acción';
$string['gaidstringdesc'] = 'Acción a grabar en Google Analytics para eventos de Reproducir/Completar (por ejemplo, archivo o título). Pra más información, vea  la opción de configuración ga.idstring  en la documentación del sitio web de JW Player.';
$string['galabel'] = 'Acción de otro evento';
$string['galabeldesc'] = 'Etiqueta a registrar en Google Analytics para Eventos del reproductor (por ejemplo, archivo o título). Para más información, vea la opción de configuración ga.label en la documentación del sitio web de JW Player.';
$string['googleanalytics'] = 'Integración con Google Analytics';
$string['googleanalyticsconfig'] = 'Google Analytics';
$string['googleanalyticsconfigdesc'] = 'Por favor refiérase a la documentación en el sitio web de JW Player para <a href="http://support.jwplayer.com/customer/portal/articles/1417179-integration-with-google-analytics">JW Player website</a> para más información acerca de la integración con Google Analytics.';
$string['googleanalyticsdesc'] = 'Habilitar integración  con Google Analytics. Requiere código de Google Analytics esté ya añadido a las páginas; Usted puede añadirlo usando la configuración del sitio de (HTML adicional)  <a href="{$a}">Additional HTML</a>';
$string['hostingmethod'] = 'Método de alojamiento del reproductor';
$string['hostingmethodcloud'] = 'Alojamiento-en-la-nube';
$string['hostingmethoddesc'] = 'Reproductor JW alojado en la nube (Cloud hosted JW Player) (<a href="http://support.jwplayer.com/customer/en/portal/articles/1403726-jw-player-7-release-notes">version {$a}</a>) es usado por defecto. Tenga en cuenta que este modo alojado-en-la-nube no tiene nada que ver con el concepto del (reproductor de video en nube) <a href="http://www.jwplayer.com/products/jwplayer/cloud-video-player/">cloud video player</a> descrito en el sitio web de  JW Player. El modo alojado-en-la-nube simplemente carga las librerías del reproductor JW desde su alojamiento CDN, en contraste contra el directorio de Moodle específico como en el modo auto-alojado. Si Usted prefiere la opción auto-alojada, asegúrese de que Usted haya descargado el archivo ZIP del  JW Player 7 (Self-Hosted) desde la página de <a href="https://dashboard.jwplayer.com/#/players/downloads">License Keys & Downloads</a> del sitio web de  JW Player; que lo haya desempacado y haya puesto el contenido en el directorio  /lib/jwplayer/ en Moodle.';
$string['hostingmethodself'] = 'Alojamiento-propio';
$string['licensekey'] = 'Clave de licencia  del Reproductor';
$string['licensekeydesc'] = 'Clave de licencia del reproductor de la página de <a href="https://dashboard.jwplayer.com/#/players/downloads">License Keys & Downloads</a> en el sitio web del JW Player. Especifique aquí una clave para "JW Player 7 (Self-Hosted)", aun y cuando Usted estuviera usando el método de alojamiento alojado-en-la-nueb en la configuración superior.';
$string['paideditionsconfig'] = 'Configuraciones para ediciones pagadas del reproductor JW Player';
$string['paideditionsconfigdescr'] = 'Las configuraciones inferiores solamente funcionarán con las ediciones Pro, Premium y Ads. No tienen efecto para la edición gratuita (free).';
$string['standardskin'] = 'estándar';
$string['supportrtmp'] = 'Soportar canales de descargas RTPM';
$string['supportrtmpdesc'] = 'Si se habilita, los enlaces que comiencen con rtpm:// serán manejados por filtro, sin considerar si su extensión estuviera o no habilitada dentro de las configuraciones de extensiones soportadas.';
$string['useplayerskin'] = 'Usar piel del reproductor';
$string['videodownloadbtntttext'] = 'Descargar video';
