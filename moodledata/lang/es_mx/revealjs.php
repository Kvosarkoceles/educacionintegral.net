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
 * Strings for component 'revealjs', language 'es_mx', branch 'MOODLE_34_STABLE'
 *
 * @package   revealjs
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['appearance'] = 'Apariencia';
$string['audioslideshow'] = 'Habilitar presentación de audio';
$string['audioslideshow_help'] = 'Habilitar características de texto-a-voz (text-to-speech) y sincronización de audio. Vea: <a href="http://courses.telematique.eu/audio-slideshow/" target="_blank">http://courses.telematique.eu/audio-slideshow/</a> para ejemplos.';
$string['audioslideshowtime'] = 'Tiempo por defecto para presentaciones de audio';
$string['audioslideshowtime_help'] = 'Si no hubiera audio en una diapositiva o fragmento de diapositiva, configurar el tiempo por defecto a pausa antes de avanzar.';
$string['autoslide'] = 'Auto avanzar';
$string['autoslide_help'] = 'Automáticamente mover avanzando a la siguiente diapositiva en un contador de tiempo. En milisegundos, , por lo que 5 segundos  = 5000. Solamente puede configurarse un único contador de tiempo para todas las diapositivas.';
$string['autoslidestoppable'] = 'Auto Avance detenible';
$string['autoslidestoppable_help'] = 'Permitrles alos usuarios que detengan el auto-avanzar';
$string['backgroundimage'] = 'Imagen de fondo';
$string['backgroundimage_help'] = 'Una imagen de presentación de fondo por defecto.';
$string['backgroundtransition'] = 'Transcisión del fondo';
$string['backgroundtransition_help'] = 'Estilo de Transición para fondos de página completa';
$string['center'] = 'Centrar';
$string['center_help'] = 'Centrar verticalmente el texto, imágenes y medios en cada imagen.';
$string['choosefile'] = 'Elija un archivo...';
$string['configdisplayoptions'] = 'Selecione todas las opciones que deberían estar disponibles; las configuraciones existentes no son modificadas. Oprima la tecla CTRL para seleccionar campos múltiples.';
$string['content'] = 'Contenido de Presentación';
$string['contentdir'] = 'Directorio de Presentación';
$string['contentdirexplain'] = 'El directorio en donde se almacenan las presentaciones y los medios.';
$string['content_error'] = 'Error 404: Archivo no encontrado. Las configuraciones de la presentación y/o la ruta al archivo están mal configuradas.';
$string['contentheader'] = 'Presentación';
$string['controls'] = 'Controles';
$string['controls_help'] = 'Mostrar controles de navegación a la derecha del fondo de la pantalla.';
$string['createrevealjs'] = 'Crear un nuevo recurso de presentación';
$string['data_dir'] = 'Directorio de archivos';
$string['data_dir_error'] = 'Por favor, revise: Ocurrió un posible error al intentar mover el directorio /moodle/mod/revealjs/revealjs/ y todos sus contenidos hacia:';
$string['data_dir_exists'] = 'El directorio de archivos está localizado en:';
$string['data_dir_explain'] = 'El directorio en donde están localizadas las presentaciones y los archivos de los medios.';
$string['data_dir_moved'] = 'PRIMERA INSTALACIÓN de Directorios de Archivos ha sido exitosamente movida:';
$string['data_structure'] = 'Estructura del Directorio';
$string['data_structure_explain'] = 'Cómo están organizados los archivos y en donde buscará las presentaciones el módulo de Presentación.';
$string['data_url'] = 'URL';
$string['data_url_explain'] = 'URL hacia el Directorio de Archivos (Proxy)';
$string['displayoptions'] = 'Opciones de visualización disponibles';
$string['displayselect'] = 'Mostrar';
$string['displayselectexplain'] = 'Seleccionar tipo de visualizción';
$string['embedded'] = 'Incrustado';
$string['embedded_help'] = 'Marca una bandera de advertencia si la presentación está corriendo en modo incrustado; por ejemplo, contenida dentro de una porción limitada de la pantalla.';
$string['fragments'] = 'Fragmentos';
$string['fragments_help'] = 'Activar y desactivar fragmentos globalmente.';
$string['help'] = 'Habilitar ayuda';
$string['help_help'] = 'Mostrar una sobreposición de ayuda cuando se presione el signo de interrogación.';
$string['hideaddressbar'] = 'Ocultar barra de dirección';
$string['hideaddressbar_help'] = 'Ocultar barra de dirección en dispositivos móviles.';
$string['hidetranscript'] = 'Ocultar';
$string['history'] = 'Historia del Navegador';
$string['history_help'] = 'Mueve las URLs de la página que corresponden a imágenes individuales y las registra en la historia del navegador del usuario. Esto le permite a los usuarios copiar y pegar enlaces hacia imágenes específicas dentro de una presentación.';
$string['keyboard'] = 'Atajos de Teclado';
$string['keyboard_help'] = 'Habilitar atajos de teclado para navegación:

* teclas de cursor arriba, abajo, izquierda y derecha.
* f = pantalla completa (fullscreen),
* s = mostrar notas (show notes)';
$string['legacyfiles'] = 'Archivo de migración de curso antiguo';
$string['legacyfilesactive'] = 'Activo';
$string['legacyfilesdone'] = 'Terminado';
$string['looped'] = 'Bucle';
$string['margin'] = 'Márgen';
$string['margin_help'] = 'Factor del tamaño de la vista que debería de permanecer vacía alrededor del contenido, como por ejemplo 0.1 = 10%';
$string['maxscale'] = 'Escala máx';
$string['maxscale_help'] = 'La escala máxima hasta donde una presentación puede esacalarse aumentando; por ejemplo 1.0 = tamaño completo';
$string['minscale'] = 'Escala mín';
$string['minscale_help'] = 'La escala mínima hasta donde una presentación puede esacalarse disminuyendo; por ejemplo 0.5 = mitad del tamaño';
$string['modulename'] = 'Presentación';
$string['modulename_help'] = 'El módulo Presentación le permite a un profesor crear un recurso de presentación web. Una presentación puede mostrar texto, imágenes, sonido, video, enlaces web y código incrustado, como los mapas de Google. Se pretende que sea una alternativa (web amistosa) a las presentaciones de imágenes de PowerPoint y PDF.

Usa la librería de Reveal.js (Vea: https://github.com/hakimel/reveal.js).

Las ventajas de usar el módulo Presentación en lugar del módulo archivo son que el recurso es más accesible (por ejemplo, para usuarios de disposiivos móviles) y más fácil de actualizar.

Para contenidos muy grandes, se recomienda que se use un libro en lugar de una presentación.

Una presentación puede usarse:

* Para presentar una serie de imágenes con multimedios incrustados
* Para incrustar varios archivos de sonido o video con un texto explicatorio.';
$string['modulenameplural'] = 'Presentaciones';
$string['mousewheel'] = 'Rueda del Ratón';
$string['mousewheel_help'] = 'Los usuarios pueden usar su rueda del ratón para navegar hacia adelante y atrás en la presentación.';
$string['neverseen'] = 'Nuca vista';
$string['optionsheader'] = 'Opciones de visualización';
$string['overview'] = 'Vista general';
$string['overview_help'] = 'Habilitar modo de vista general de presentación.';
$string['parallaxbackground'] = 'Imagen de fondo';
$string['parallaxbackgroundhorizontal'] = 'Movimiento horizontal';
$string['parallaxbackgroundhorizontal_help'] = 'Canidad a mover horizontalmente el fondo en el cambio de la diapositiva para efecto de paralelaje.';
$string['parallaxbackgroundimage'] = 'Imagen';
$string['parallaxbackgroundimage_help'] = 'Imagen de fondo a usar; por ejemplo https://s3.amazonaws.com/hakim-static/reveal-js/reveal-parallax-1.jpg';
$string['parallaxbackgroundsize'] = 'Tamaño';
$string['parallaxbackgroundsize_help'] = 'Ancho y Alto de imagen del fondo en pixeles CSS, ancho y alto; por ejemplo 2100px 900px NO use % ni auto.';
$string['parallaxbackgroundvertical'] = 'Movimiento vertical';
$string['parallaxbackgroundvertical_help'] = 'Cantidad a mover el fondo verticalmente en el cambio de diapositiva para efecto de paralelaje.';
$string['pluginadministration'] = 'Administración del módulo de presentación';
$string['pluginname'] = 'Presentación';
$string['popupheight'] = 'Altura de ventana emergente en pixeles';
$string['popupheightexplain'] = 'Especifica la altura por defecto de ventanas emergentes.';
$string['popupwidth'] = 'Ancho de ventana emergente en pixeles';
$string['popupwidthexplain'] = 'Especifica el ancho por defecto de ventanas emergentes.';
$string['presentation'] = 'Presentación';
$string['presentation_help'] = 'El fragmento HTML de la presentación con las partes de  <code>sección</code> que contienen las imágenes.';
$string['previewlinks'] = 'Enlaces pre-visualización';
$string['previewlinks_help'] = 'Abrir enlaces en sobrepuesto de vista-previa de iframe (iframe preview overlay).';
$string['printheading'] = 'Mostrar nombre de presentación';
$string['printheadingexplain'] = '¿ Mostrar nombre de presentación arriba del contenido ?';
$string['printintro'] = 'Mostrar descripción de presentación';
$string['printintroexplain'] = '¿ Mostrar descripción de presentación arriba del contenido ?';
$string['progress'] = 'Barra de Progreso';
$string['progress_help'] = 'Muestra una delgada barra de progreso al fondo de la pantalla.';
$string['remotes'] = 'Habilitar control remoto';
$string['remotes_help'] = 'Los usuarios pueden usar su dispositivo tactil o control remoto para navegar dentro de las presentaciones.';
$string['revealjs:addinstance'] = 'Añadir un nuevo recurso de presentación';
$string['revealjs-mod-revealjs-x'] = 'Cualquier presentación del módulo presentación';
$string['revealjs:view'] = 'Ver contenido de presentación';
$string['rtl'] = 'De_derecha_a_izquierda';
$string['rtl_help'] = 'Active ésto si su presentación se lee de derecha a izquierda (por ejemplo, en arábigo).';
$string['saveandclose'] = 'Guardar y Cerrar';
$string['saveandclose_title'] = 'Guardar posición del carrusel y regresar a la página del curso';
$string['showcharts'] = 'Habilitar gráficas';
$string['showcharts_help'] = 'Genera gráficas a partir de datos proporcionados en archivos de presentaciones. Vea: <a href="http://courses.telematique.eu/reveal.js-plugins/chart-demo.html" target="_blank">http://courses.telematique.eu/reveal.js-plugins/chart-demo.html</a> para ejemplos. Vea: <a href="https://github.com/rajgoel/reveal.js-plugins/tree/master/chart" target="_blank">https://github.com/rajgoel/reveal.js-plugins/tree/master/chart</a> para documentación y código fuente.';
$string['showhidetranscript'] = 'Mostrar/Ocultar transcripción del audio si estuviera disponible';
$string['showmenu'] = 'Habilitar menú lateral';
$string['showmenu_help'] = 'Genra automáticamente un menú de carrusel a partir de los titulos de las imágenes.';
$string['slidenumber'] = 'Mostrar números de diapositivas';
$string['slidenumber_help'] = 'Mostrar el número de página de la diapositiva actual';
$string['theme'] = 'Tema';
$string['theme_help'] = 'La apariencia del tipo de letra, colores y estilos para el contenido de las imágenes.';
$string['toggleoverview'] = 'Mostrar/Ocultar vista general de diapositivas';
$string['toggletranscript'] = 'Transcripción';
$string['touch'] = 'Pantalla táctil';
$string['touch_help'] = 'Permitir respuesta del usuario para pantallas táctiles.';
$string['transition'] = 'Transición';
$string['transition_help'] = 'Estilo de Transición: Algunas transiciones impiden que respondan  los controles de audio y video, e impiden que se muestren las animaciones SVG.';
$string['transitionspeed'] = 'Velocidad de transición';
$string['viewdistance'] = 'Precargar imágenes';
$string['viewdistance_help'] = 'Número de diapositivas a precargar imágenes, audio, video y animaciones en cualquier lado de la diapositiva actual.';
