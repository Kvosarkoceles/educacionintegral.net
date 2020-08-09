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
 * Strings for component 'media_videojs', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   media_videojs
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['audiocssclass'] = 'Clase CSS para audio';
$string['audioextensions'] = 'Extensiones de archivos de audio';
$string['configaudiocssclass'] = 'Una clase CSS que será añadida al elemento <audio>';
$string['configaudioextensions'] = 'Lista separada por comas de las extensiones de los archivos de audio soportados. VideoJS intentará usar el reproductor nativo de video del navegador cuando estuviera disponible, o la funcionalidad nativa VideoJS, y usará como "plan B" el reproductor Flash para otros formatos si Flash estuviera soportado por el navegador y la reproducción en "plan B" con Flash estuviera habilitada debajo.';
$string['configlimitsize'] = 'Si se habilita, y el ancho y la altura no estuvieran especificados, el video, se mostrará con ancho y altura por defecto. En caso contrario, los videos sin se estirarán al ancho máximo posible.';
$string['configrtmp'] = 'Si se habilita, los enlaces que comiencen con rtmp:// serán manejados por el plugin, sin importar que la extensión estuviera o no habilitada en las configuraciones de extensiones soportadas (videoextensions). El "Plan B" para Flash debe estar habilitado para que funcione RTMP.';
$string['configuseflash'] = 'Usar reproductor de Flash si el formato de video no está soportado de forma nativa por el navegador o nativamente por el reproductor VideoJS. Si se habilita, VideoJS será usado para cualquier extensión de archivo de la lista de arriba sin revisión por el navegador. Por favor tenga en cuenta que Flash no está disponible en navegadores de portátiles y está desalentado su uso en muchas computadoras de escritorio.';
$string['configvideocssclass'] = 'Una clase CSS que será añadida al elemento &lt;video&gt;  Por ejemplo, la clase "vjs-big-play-centered" colocará el botón para reproducir  a la mitad. Para los detalles, incluyendo cómo configurar una piel personalizada, vea docs.videojs.com.';
$string['configvideoextensions'] = 'Lista separada por comas de extensiones de video soportadas. VideoJS intentará usar el reproductor de video nativo del navegador cuando esté disponible, y como "plan B" usará reproductor Flash para otros formatos si Flash estuviera soportado por el navegador y abajo estuviera habilitada la reproducción de Flash.';
$string['configyoutube'] = 'Usar VideoJS para reproducir videos de YouTube. Por favor tenga en cuenta que actualmente las listas_de_reproducción de YouTube no están soportadas por VideoJS';
$string['limitsize'] = 'Limitar tamaño';
$string['pluginname'] = 'Reproductor VideoJS';
$string['pluginname_help'] = 'Envoltura (wrapper) JavaScript  para archivos de video reproducidos por el reproductor de video nativo del navegador, con un "plan B" de reproductor Flash. (El formato soportado depende del navegador).';
$string['privacy:metadata'] = 'El plugin de Medio Reproductor VideoJS no almacena ningún dato personal.';
$string['rtmp'] = 'Canales RTMP';
$string['useflash'] = 'Usar "plan B" para Flash';
$string['videocssclass'] = 'Clase CSS para video';
$string['videoextensions'] = 'Extensiones de archivos de video';
$string['youtube'] = 'Videos YouTube';
