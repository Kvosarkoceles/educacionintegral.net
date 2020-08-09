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
 * Strings for component 'swf', language 'es_mx', branch 'MOODLE_25_STABLE'
 *
 * @package   swf
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowfullscreen'] = 'Permitir Pantalla Completa';
$string['allownetworking'] = 'Permitir Red';
$string['allowscriptaccess'] = 'Permitir Acceso a Scripts';
$string['apikey'] = 'Clave API';
$string['attempts'] = 'Intentos';
$string['average'] = 'Promedio';
$string['bgcolor'] = 'Color del Fondo Flash';
$string['broken1'] = 'Hay un problema';
$string['broken2'] = 'Esta aplicación no se ha mostrado correctamente por una o más de las siguientes razones:';
$string['broken3'] = 'Esta aplicación requiere el Reproductor de Flash';
$string['broken31'] = 'que esté instalado en su navegador.';
$string['broken4'] = 'Esta aplicación requiere que JavaScript esté habilitado en su navegador.';
$string['broken5'] = 'o la URL hacia esta aplicación es incorrecta.';
$string['broken6'] = '¿Qué versión de Flash tengo instalada?';
$string['broken7'] = 'Elija el logo del Reproductor de Flash inferior para revisar la versión del Reproductor de Flash de su navegador:';
$string['broken8'] = 'Encuentra mi versión del Reproductor de Flash';
$string['configxml'] = 'Configurar archivo XML';
$string['configxml_help'] = 'Algunas apps pueden cargar archivos para configurar sus apariencias y comportamientos.';
$string['content_dir'] = 'Directorio de Contenido Multimedia';
$string['content_dir_explain'] = 'Un directorio que debe configurarse en Administración del Sitio > Plugins > Repositorios >Gestionar repositorios.
Habilite el Sistema de Archivos y añada un directorio; por ejemplo, /moodledata/repository/swfcontent/.
Esto permititá que se suban archivos por Apps Flash mediante el administrador de archivos de Moodle, al igual que mediante FTP.
Estos archivos pueden entonces accesarse por las Apps Flash mediante  /moodle/mod/swf/file.php con las rutas y nombres respectivos pasados mediante FlashVars, SMIL, o XML.
Esto proporciona un soporte nativo para interacciones de aprendizaje XML basadas en multimedia.
El módulode de actividad SWF automáticamente busca archivos .xml y .smil  en /moodledata/repository/swfcontent/*/xml/*.xml y *.smil y los enlista en  swf/mod_form.php.';
$string['disablegradehistory'] = 'Aviso: Se ha deshabilitado el historial de calificaciones. De ahora en adelante solamente se actualizarán las calificaciones finales.';
$string['download'] = 'Descargar video/audio';
$string['downloadrightclick'] = 'Click derecho para descargar video/audio';
$string['duration'] = 'Duración';
$string['durationhistory'] = 'Historia de Duración';
$string['exiturl'] = 'URL de salida';
$string['exiturl_help'] = 'Algunas apps de Flash usan esta configuración para navegar hacia una nueva página cuando la actividad ha sido completda/terminada, o para abrir una nueva página del navegador para mayor información, como por ejemplo una página de ayuda.';
$string['feedback'] = 'Retroalimentación';
$string['fileurl'] = 'Manejador de archivos';
$string['fileurl_help'] = 'Pase un archivo desde el gestor de archivos de Moodle. Por favor, tome ne cuenta de que si pasa un archivo desde el repositorio de sistema de Archivos, se copiará al área principal de almacenamiento de archivos de Moodle. Las ediciones al archivo en el sistema de ARchivos deben actualizarse mediante la eliminación de la copia en el gestor de archivos y volver a desplegarla. Por ejemplo:

* Edite archivo en sistema de Archivos (en su computadora y después súbalo  por FTP).
* Edite la copia del archivo en el gestor de Archivos.
* Seleccione otra vez el archivo editado en el sistema de Archivos.';
$string['finalgrade'] = 'Calificación Final';
$string['friday'] = 'Vie';
$string['grade'] = 'Calificación';
$string['grade_accessed'] = 'Calificación(es) accesadas exitosamente.';
$string['gradebook'] = 'Calificaciones';
$string['gradebook_title'] = 'Ir al libro de calificaciones';
$string['gradeedit1'] = 'Guardar y regresar al curso';
$string['gradeedit2'] = 'Ir a Administración del curso > Calificaciones > Reporte calificador';
$string['gradeedit3'] = 'Activar edición';
$string['gradeedit4'] = 'Editar ítem de calificación (en fila de tabla "Controles")';
$string['gradeedit5'] = 'Elija "Mostrar más..." para ver todas las opciones';
$string['gradeedit6'] = 'Usted puede editar las configuraciones de calificación de esta forma en cualquier momento.';
$string['gradeeditintro'] = 'Calificación aprobatoria configurada a 0 por defecto';
$string['gradehistory'] = 'Historia de Calificación';
$string['grade_no_item'] = 'No existe el ítem de calificación';
$string['grade_no_permission'] = 'Usted no tiene permiso para acceder a calificaciones.';
$string['grade_saved'] = 'Su calificación ha sido enviada al libro de calificaciones.';
$string['header_swf'] = 'Contenido de Aprendizaje';
$string['heatmap'] = 'Mapa de Calor (\'heatmap\') de Actividad SWF';
$string['height'] = 'Altura';
$string['img_no_permission'] = 'Usted no tiene permiso para guardar imágenes.';
$string['img_not_saved'] = 'Hubo un problema. Su imagen no se guardó.';
$string['img_not_writeable'] = 'no es escribible.';
$string['img_saved'] = 'Su imagen se guardó exitosamente.';
$string['installed_apps_dir'] = 'Directorio de Apps Instaladas';
$string['installed_apps_dir_explain'] = 'Un directorio estándar en donde se almacenan Apps Flash.
El módulo Actividad SWF busca en este directorio archivos Flash y los enlista en swf/mod_form.php.
Si su instalación de Moodle está en un subdirectorio o subdominio, Usted necesitará editar esto: Por ejemplo, para  http://ejemplo.com/moodle/ (o http://moodle.ejemplo.com/ en donde el subdominio está en /moodle/) cambie /home/sitios/ejemplo.com/mod/swf/swfs/ hacia /home/sitios/ejemplo.com/moodle/mod/swf/swfs/';
$string['modulename'] = 'SWF';
$string['modulename_help'] = '<a href="http://code.google.com/p/swf-activity-module/" target="_blank">El módulo de actividad SWF</a> implementa aplicaciones de aprendizaje Flash en Moodle. Pueden instalarse las Apps Flash de terceros y soporta  XML, SMIL y otras aplicaciones de aprendizaje impulsadas por medios y datos externos. Vea el sitio del proyecto  <a href="http://code.google.com/p/swf-activity-module/" target="_blank">SWF Activity Module</a> para más detalles.

Desarrollado por Matt Bury <a href="http://matbury.com/" target="_blank">matbury.com</a>';
$string['modulenameplural'] = 'SWFs';
$string['monday'] = 'Lun';
$string['namepair'] = 'Nombre';
$string['namepair_help'] = 'Ejemplos útiles de parejas de valores de nombres...

Proporciona listas de palabras para búsqueda de Word MILA (Multimedia Interactive Learning Apps = Apps de Aprendizaje Interactivo Multimedia) :

* Learning App: swfs/smil_word_search.swf * Name: words
* Value: dog,cat,chicken,horse,beaver,platypus,kangaroo,mouse,etc.

Habilita a los alumnos para ingesar párrafos a C-Test MILA:

* Learning App: swfs/smil_c_test.swf
* Name: input
* Value: true

Configura mayor nivel de dificultad  para Quick typing MILA:

* Learning App: swfs/smil_quick_typing.swf
* Name: difficulty
* Value: 0.8

For StrobeMediaPlayback:

* Learning App: swfs/StrobeMediaPlayback.swf
* Name: src
* Value: http://download.ted.com/talks/PaoloCardini_2012G-480p.mp4

* Learning App: swfs/StrobeMediaPlayback.swf
* Plugin: Strobe YouTube
* Name: src
* Value: https://www.youtube.com/watch?v=ttYapXJRFF4

* Learning App: swfs/StrobeMediaPlayback.swf
* Plugin: Strobe SMIL * Name: src
* Value: http://mediapm.edgesuite.net/osmf/content/test/smil/elephants_dream.smil

JW Player:

* Learning App: swfs/player.swf
* Name: file
* Value: http://download.ted.com/talks/PaoloCardini_2012G-480p.mp4';
$string['nofile'] = 'Nada';
$string['nograde'] = 'Sin Calificación';
$string['nohtml5'] = 'Su navegador no soporta el elemento  <code>video</code> element.';
$string['noswfs'] = 'No hay actividades SWF';
$string['notpassed'] = 'No aprobada';
$string['pagecolor'] = 'Color de Fondo de Página';
$string['passed'] = 'Aprobada';
$string['plugin'] = 'Plugin';
$string['pluginadministration'] = 'Administración de SWF';
$string['plugin_help'] = 'swfs/StrobeMediaPlayback.swf soporta los siguientes plugins...

* Strobe SMIL
* Strobe YouTube';
$string['pluginname'] = 'SWF';
$string['report'] = 'Reporte de Actividad SWF';
$string['salign'] = 'Etapa de Alineación';
$string['saturday'] = 'Sáb';
$string['saved_files_dir'] = 'Directorio de Archivos Guardados';
$string['saved_files_dir_explain'] = 'Un subdirectorio del Directorio de Contenido Multimedia en donde se almacen los archivos guardados por los usuarios.';
$string['scale'] = 'Etapa de Modo Escala';
$string['seamlesstabbing'] = 'Pestañas sin costuras';
$string['selectfile'] = 'Seleccionar...';
$string['sortby'] = 'Ordenar por';
$string['sortedby'] = 'Ordenado por';
$string['sunday'] = 'Dom';
$string['swf'] = 'SWF';
$string['swf:addinstance'] = 'Añadir SWF';
$string['swffile'] = 'App';
$string['swffile_help'] = 'Elija una app Flash de la lista desplegable. Ajuste las configuraciones deñ Reproductor de Flash para controlar el cómo se muestra la app. Las apps nuevas deben de ser instaladas por un administrador del sistema con acceso al servidor. No instale aquí aplicaciones de aprendizaje independiente (standalone). Súbalas como contenidos de aprendizaje y use la app swfs/preloader.swf para cargarlas

Para reproducir un video:

* App de aprendizaje: swfs/StrobeMediaPlayback.swf
* Nombre: archivo
* Valor: http://download.ted.com/talks/PaoloCardini_2012G-480p.mp4

TPara mostra una app Flash independiente:

* App de aprendizaje: swfs/preloader.swf
* Content URL/File: suba, seleccione o pegue un enlace hacia la app Flash
* or name value pair:
* Nombre: xmlurl
* Valor: http://example.com/learning/games/mygame.swf';
$string['swf:grade'] = 'Calificación SWF';
$string['swfhelp'] = 'Ayuda';
$string['swfhelp_title'] = 'Documentación de Moodle para esta página (Abre ventana nueva)';
$string['swf:submit'] = 'Enviar SWF';
$string['swf:view'] = 'Ver SWF';
$string['thursday'] = 'Jue';
$string['time'] = 'Hora';
$string['timecreated'] = 'Creada';
$string['total'] = 'Total';
$string['tuesday'] = 'Mar';
$string['uploadedfile'] = 'Usar Archivo del Manejador de Archivos';
$string['urledit'] = 'Archivo de Contenido SWF';
$string['usermodified'] = 'Modificado por';
$string['valuepair'] = 'Valor';
$string['version'] = 'Versión';
$string['viewreport'] = 'Ver reporte de actividad para';
$string['wednesday'] = 'Miér';
$string['width'] = 'Ancho';
$string['xmlurl'] = 'Contenido';
$string['xmlurl_help'] = 'Esta configuración habilita una URL para especificar el archivo de contenido, en lugar de elegir un archivo mediante el selector de archivos.';
