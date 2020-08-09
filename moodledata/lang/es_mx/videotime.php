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
 * Strings for component 'videotime', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   videotime
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activity_name'] = 'Nombre de actividad';
$string['activity_name_help'] = 'Nombre mostrado en el curso para este módulo de actividad Video Time.';
$string['albums'] = 'Álbumes';
$string['api_not_authenticated'] = 'API Vimeo no está autenticada.';
$string['api_not_configured'] = 'API Vimeo no está configurada.';
$string['apply'] = 'Aplicar';
$string['authenticated'] = 'Autenticado';
$string['authenticate_vimeo'] = 'Autenticado con Vimeo';
$string['authenticate_vimeo_success'] = 'Autenticación Vimeo exitosa. Ahora Usted puede usar características que dependen de la API Vimeo.';
$string['choose_video'] = 'Elegir Video';
$string['client_id'] = 'ID del cliente Vimeo';
$string['client_id_help'] = 'La ID del Ciente es generada cuando Usted crea una "App" bajo su cuenta Vimeo. Vaya a https://developer.vimeo.com/apps/new para comenzar este proceso.';
$string['client_secret'] = 'Secreto del cliente Vimeo';
$string['client_secret_help'] = 'El Secreto del Ciente es generado cuando Usted crea una "App" bajo su cuenta Vimeo. Vaya a https://developer.vimeo.com/apps/new para comenzar este proceso.';
$string['completion_on_finish'] = 'Finalización al terminar el video';
$string['completion_on_percent'] = 'Finalización por porcentaje de vista';
$string['completion_on_view'] = 'Finalización por tiempo de vista';
$string['default'] = 'Valor por defecto';
$string['discovering_videos'] = 'Descubriendo {$a->count} videos';
$string['discover_videos'] = 'Descubrir videos  Vimeo';
$string['duration'] = 'Duración';
$string['embed_options'] = 'Opciones de incrustación';
$string['embed_options_defaults'] = 'Opciones de incrustación por defect';
$string['embeds'] = 'Incrustar';
$string['estimated_request_time'] = 'Tiempo restante estimado';
$string['force'] = 'Forzar configuración';
$string['force_help'] = 'Si se activa este valor por defecto anulará la configuración de la intancia.';
$string['gradeitemnotcreatedyet'] = 'No existe un ítem en el Libro de calificaciones para esta actividad. Active <b>Configurar calificación igual a porcentaje de vista</b> arriba, guarde y edite esta actividad nuevamente para configurar categoría de calificación y calificación aprobatoria.';
$string['invalid_session_state'] = 'Estado de sesión inválido.';
$string['label_mode'] = 'Modo etiqueta';
$string['modulename'] = 'Video Time';
$string['modulename_help'] = 'La actividad Video Time Pro le permite al profesor
<ul>
    <li>incrustar fácilmente videos de Vimeo,simplemente al añadir la url</li>
    <li>añadir contenido arriba y abajo del reproductor de video</li>
    <li>monitorear el tiempo de observación del usuario usando finalización de actividad</li>
    <li>obtener intuiciones (predicciones) acerca del tiempo de observación de cada usuario</li>
    <li>configurar opciones predeterminadas para el plugin</li>
    <li>y anular globalmente las opciones incrustadas de la instacia.</li>
</ul>

Nosotros constantemente estamos mejorando el plugin, por lo que le pedimos que esté atento a las versiones siguientes. Usted puede ver en qué estamos trabajando y añadir solicitudes en nuestro plan de desarrollo público en <a href="https://bdecent.de/products/videotimepro/roadmap">https://bdecent.de/products/videotimepro/roadmap</a>.

Por favor cuéntenos cualquier retroalimentación.';
$string['modulenameplural'] = 'Instancias Video time';
$string['needs_authentication'] = 'Necesita autenticación';
$string['next_activity'] = 'Siguiente actividad';
$string['next_activity_auto'] = 'Automáticamente Ir a la Siguiente Actividad';
$string['next_activity_auto_help'] = 'Automáticamente cargar la Siguiente Actividad cuando el estudiante complete el video.';
$string['next_activity_button'] = 'Habilitar Botón de Siguiente Actividad';
$string['next_activity_button_help'] = 'Mostrar un botón arriba del video que enlace  a la siguiente actividad que el usuario debería completar.';
$string['next_activity_in_course'] = 'Predeterminado: Siguiente Actividad en el Curso';
$string['not_authenticated'] = 'No autenticado';
$string['option_autoplay'] = 'AutoReproducir';
$string['option_autoplay_help'] = 'Iniciar automáticamente la reproducción del video. Tenga en cuenta que esto no funcionará en algunos dispositivos o navegadores que lo bloqueen.';
$string['option_byline'] = 'Autor';
$string['option_byline_help'] = 'Mostrar el autor en el video.';
$string['option_color'] = 'Color';
$string['option_color_help'] = 'Especificar el color de los controles de video. Los colores pueden ser anulados por las configuraciones incrustadas del video.';
$string['option_forced'] = '{$a->option} está forzada globalmente a: {$a->value}';
$string['option_height'] = 'Altura';
$string['option_height_help'] = 'La altura exacta del video, pero el video no excederá el tamaño nativo del video.';
$string['option_maxheight'] = 'Altura máxima';
$string['option_maxheight_help'] = 'Igual que la altura, pero el video no excederá el tamaño nativo del video.';
$string['option_maxwidth'] = 'Ancho máximo';
$string['option_maxwidth_help'] = 'Igual que el ancho, pero el video no excederá el tamaño nativo del video.';
$string['option_muted'] = 'Mudo';
$string['option_muted_help'] = 'Silenciar este video al cargar. Es bnecesario autoreproducción en algunos navegadores.';
$string['option_playsinline'] = 'Reproducir en-línea';
$string['option_playsinline_help'] = 'Reproducir video en-línea en dispositivos óviles, para ir automáticamente a pantalla completa en reproducción configure este pará metro a falso.';
$string['option_portrait'] = 'Retrato';
$string['option_portrait_help'] = 'Mostrar el retrato en el vidoe';
$string['option_responsive'] = 'Responsivo';
$string['option_responsive_help'] = 'Si se activa, el reproductor de video será responsivo y se adaptará al tamaño de página o pantalla.';
$string['option_speed'] = 'Velocidad';
$string['option_speed_help'] = 'Muestra los controles de velocidad en el menú de las preferencias y habilita la API de velocidad de reproducción (disponible para cuentas ¨PRO y Business).';
$string['option_title'] = 'Título';
$string['option_title_help'] = 'Mostrar el título en el video.';
$string['option_transparent'] = 'Transparente';
$string['option_transparent_help'] = 'El reproductor responsivo y el fondo transparente están habilitados por defecto; para deshabilitarlos configure este parámetro a falso.';
$string['option_width'] = 'Ancho';
$string['option_width_help'] = 'El ancho exacto del video. Por defecto asume el ancho de la versión más grande disponible del video.';
$string['pluginadministration'] = 'Administración de Video Time';
$string['pluginname'] = 'Video Time';
$string['process_videos'] = 'Procesar videos';
$string['rate_limit'] = 'Límite de solicitud API Vimeo';
$string['resume_playback'] = 'Reanudar Reproducción';
$string['resume_playback_help'] = 'Automáticamente reanudar el video cuando el usuario regresa a actividad. La reproducción comienza donde el usuario se quedó.';
$string['search_help'] = 'Buscar nombre, descripción, álbumes, marcas...';
$string['seconds'] = 'Segundos';
$string['session_not_found'] = 'Sesión del usuario no encontrada';
$string['settings'] = 'Configuraciones de Video Time';
$string['showdescription'] = 'Mostrar descripción';
$string['showdescription_help'] = 'La descripción es mostrada arriba del video y puede ser mostrada en la página del curso.';
$string['state'] = 'Estado';
$string['state_finished'] = 'Terminado';
$string['state_help'] = '¿Ha terminado el video el usuario?';
$string['state_incomplete'] = 'Incompleto';
$string['status'] = 'Estado';
$string['store_pictures'] = 'Almacenar miniaturas';
$string['store_pictures_help'] = 'Si se habilita, las imágenes miniaturas de Vimeo serán almacenadas localmente. En caso contrario las imágenes serán entregadas desde Vimeo externamente.';
$string['subplugintype_videotimeplugin'] = 'Plugin Video Time';
$string['subplugintype_videotimeplugin_plural'] = 'Plugins Video Time';
$string['upgrade_vimeo_account'] = 'ADVERTENCIA: Considere actualizar su cuenta  Vimeo. Su límite de solicitud API es demasiado bajo.';
$string['use'] = 'Usar';
$string['video_description'] = 'Notas';
$string['video_description_help'] = 'Las notas son mostradas debajo del video.';
$string['videotime:addinstance'] = 'Añadir un nuevo módulo Video Time';
$string['videotime:view'] = 'Ver video de Video time';
$string['videotime:view_report'] = 'Ver reporte (solamente Pro)';
$string['viewpercentgrade'] = 'Configurar calificación igual a porcentaje de vista';
$string['viewpercentgrade_help'] = 'Crear ítem de calificación para este video. El estudiante recibirá una calificación igual a su propio porcentaje del video.';
$string['view_report'] = 'Ver reporte';
$string['views'] = 'Vistas';
$string['views_help'] = 'Número de veces que la actividad ha sido vista.';
$string['vimeo_url'] = 'URL de Vimeo';
$string['vimeo_url_help'] = 'URL completa de video Vimeo.';
$string['vimeo_url_invalid'] = 'La URL de Vimeo es inválida. Cópiela directamente desde el navegador web.';
$string['vimeo_url_missing'] = 'No está configurada la URL de Vimeo.';
$string['watch_percent'] = 'Porcentaje de observación';
$string['watch_percent_help'] = 'El momento más avanzado en el video que el estudiante ha visto.';
$string['watch_time'] = 'Tiempo de observación';
$string['watch_time_help'] = 'Por cuanto tiempo en total (en pasos de 5 seg) ha visto el video el estudiante.';
