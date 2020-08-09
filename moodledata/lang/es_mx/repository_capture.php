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
 * Strings for component 'repository_capture', language 'es_mx', branch 'MOODLE_26_STABLE'
 *
 * @package   repository_capture
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['btn_audio'] = 'Grabar audio';
$string['btn_help'] = 'Ayuda sobre grabación';
$string['btn_help_help'] = 'Instrucciones para grabar:<br>
<ol>
<li>Use el botón de \'Grabar\' para grabar su sonido o video</li>
<li>Usted puede reproducir la grabación con el botón de \'Reproducir\'</li>
<li>Use las dos manijas triangulares para recortar el principio y fin de su video</li>
<li>Cuando termine de editar la grabación, elija el botón \'Guardar\' para mandar su grabación a Moodle (Puede tardar un rato en procesarse, dependiendo del tamaño, ancho de banda y velocidad de procesamiento del servidor)</li> </ol>';
$string['btn_photo'] = 'Tomar una fotografía';
$string['btn_play'] = 'Reproducir/Pausa';
$string['btn_record'] = 'Grabar';
$string['btn_record_photo'] = 'Tomar una fotografía';
$string['btn_reset'] = 'Intentarlo de nuevo';
$string['btn_save'] = 'Guardar';
$string['btn_settings'] = 'Configuraciones de grabación';
$string['btn_stop'] = 'Detener';
$string['btn_video'] = 'Grabar video';
$string['capture:audio'] = 'Usar Modo de captura de audio en el selector de archivos';
$string['capture:photo'] = 'Usar Modo de captura de  foto en el selector de archivos';
$string['capture:video'] = 'Usar Modo de captura de video en el selector de archivos';
$string['capture:view'] = 'Usar Captura en el selector de archivos';
$string['configplugin'] = 'Configuración para el plugin de Captura';
$string['default_filename'] = 'Grabar';
$string['download'] = 'Descargar';
$string['err_no_hardware'] = 'Falta la cámara o el micrófono. Por favor conecte su dispositivo y refresque la página (dependiendo de su navegador, puede ser que Usted requiera reiniciar su navegador).';
$string['err_record_ffmpeg_exec'] = 'Falló la ejecución de esta ruta ffmpeg. Por favor revise la ruta e inténtelo de nuevo.';
$string['err_record_file_not_exists'] = 'La grabación no existe. Probablemente haya un problema con la configuración del servidor. ¿Revisó Usted que la carpeta TEMP sea escribible y que FFMPEG estuviera bien instalado?';
$string['err_record_fps_range'] = 'El valor debe estar dentro del rango de 10 a 60';
$string['err_record_quality_range'] = 'El valor debe estar dentro del rango de 20 a 100';
$string['pluginname'] = 'Capturar';
$string['pluginname_help'] = 'Grabar un audio o video directamente dentro de Moodle y subirlo al sistema de archivos de Moodle.';
$string['radio_no'] = 'No';
$string['radio_yes'] = 'Si';
$string['record_audio'] = 'Permitir grabación de audio';
$string['record_audio_help'] = 'Seleccione SI cuando quiera permitirle a los usuarios que graben audio con su micrófono';
$string['record_ffmpeg'] = 'Ruta al ejecutable FFMPEG';
$string['record_ffmpeg_help'] = 'La ruta hacia ffmpeg (o avconv, dependiendo de su sistema). Generalmente <b>ffmpeg</b>es suficiente, pero en algunos servidores necesita ser la ruta completa, como por ejemplo:<b>"C:/Program Files/ffmpegbinffmpeg.exe"</b> (las comillas son importantes si hubiera espacios en la ruta)';
$string['record_fps'] = 'La tasa de cuadros (framerate)';
$string['record_fps_help'] = 'Configure la tasa de cuadros en cuadros por segundo. <b>Por defecto = 15</b>.<br> <b>Nota/b>: Mientras más cuadros por segundo haya, cuanto más grande será el archivo de video y más lenta la renderización. El máximo son 60 FPS (cuadros por segundo)';
$string['record_photo'] = 'Permitir tomar fotos de la webcam';
$string['record_photo_help'] = 'Elija SI cuando quiera permitirles a los usuarios que tomen fotos de la cámara web';
$string['record_quality'] = 'Calidad de la Grabación (en %)';
$string['record_quality_help'] = 'Por defecto es de 70%. 100% sería la mejor calidad.<br> <b>Nota</b>: Mientras más alta sea la calidad, más tiempo tardará en codificar el video';
$string['record_video'] = 'Permitir grabar video';
$string['record_video_help'] = 'Elija SI cuando quiera permitirles a sus usuarios que graben video con la webcam y el micrófono';
$string['saveas'] = 'Nombre del archivo:';
$string['setauthor'] = 'Autor:';
$string['setlicense'] = 'Elija licencia:';
$string['title_audio'] = 'Audio';
$string['title_audio_help'] = 'Elija \'Grabar un audio\' para usar su micrófono para añadir un nuevo archivo MP3';
$string['title_info'] = 'Información';
$string['title_info_help'] = 'Complete la información siguiente para guardar su archivo';
$string['title_photo'] = 'Foto';
$string['title_photo_help'] = 'Seleccione el tamaño de su foto y elija \'Tomar una foto\' para usar su webcam para añadir un nuevo archivo JPG';
$string['title_video'] = 'Video';
$string['title_video_help'] = 'Seleccione su tamaño de video y elija \'Grabar un video\' para usar su webcam y micrófono para añadir un nuevo archivo MP4';
$string['video_conversion_processing'] = 'Procesando...';
$string['video_height'] = '- Alto:';
$string['video_width'] = 'Ancho:';
