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
 * Strings for component 'resource', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   resource
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clicktodownload'] = 'Haga clic en {$a} para descargar el archivo.';
$string['clicktoopen2'] = 'Haga clic en {$a} para ver el archivo.';
$string['configdisplayoptions'] = 'Puede seleccionar cualquiera de las opciones disponibles (los ajustes existentes no se modificarán). Mantenga pulsada la tecla CTRL para seleccionar varios campos simultáneamente.';
$string['configframesize'] = 'Cuando se muestra una página web o un archivo cargado dentro de un marco (frame), este valor es el tamaño en píxeles del marco superior (que contiene la navegación).';
$string['configparametersettings'] = 'Configura el valor por defecto del panel de ajustes de parámetros en el formato cuando se agregan nuevos recursos. Tras esta primera vez, se convierte en una preferencia del usuario individual.';
$string['configpopup'] = 'Cuando se agrega un recurso que puede mostrarse en un ventana emergente ("popup"), ¿esta opción se debe activar por defecto?';
$string['configpopupdirectories'] = 'Las ventanas emergentes ("popup"), ¿deben por defecto mostrar los enlaces del directorio?';
$string['configpopupheight'] = '¿Qué altura deben tener por defecto las ventanas emergentes ("popup")?';
$string['configpopuplocation'] = 'Las ventanas emergentes ("popup"), ¿deben por defecto mostrar la barra de ubicación?';
$string['configpopupmenubar'] = 'Las ventanas emergentes ("popup"), ¿deben por defecto mostrar la barra de menú?';
$string['configpopupresizable'] = 'Las ventanas emergentes ("popup"), ¿deben por defecto ser redimensionables?';
$string['configpopupscrollbars'] = 'Las ventanas emergentes ("popup"), ¿deben por defecto mostrar las barras de desplazamiento?';
$string['configpopupstatus'] = 'Las ventanas emergentes ("popup"), ¿deben por defecto mostrar la barra de estatus?';
$string['configpopuptoolbar'] = 'Las ventanas emergentes ("popup"), ¿deben por defecto mostrar la barra de herramientas?';
$string['configpopupwidth'] = '¿Qué ancho deben tener por defecto las ventanas emergentes ("popup")?';
$string['contentheader'] = 'Contenido';
$string['displayoptions'] = 'Opciones para mostrar disponibles';
$string['displayselect'] = 'Mostrar';
$string['displayselectexplain'] = 'Elegir tipo (desafortunadamente no todos los tipos funcionan en todos los archivos).';
$string['displayselect_help'] = 'Este parámetro, junto con el tipo de archivo, y siempre que el navegador permita incrustar código, determina cómo se muestra el archivo. Las opciones pueden incluir:

* Automático - Se selecciona de forma automática la mejor opción para visualizar el archivo.

* Incrustar - La URL se muestra dentro de la página debajo de la barra de navegación junto con la descripción y cualquier otro bloque.

* Forzar descarga - Se le pregunta al usuario si desea descargar el archivo. ESTA SUELE SER LA MEJOR OPCIÓN PARA ARCHIVOS PDF.

* Abrir - Sólo se muestra la dirección en la ventana del navegador.

* En ventana emergente - La URL se muestra en una ventana nueva del navegador sin menús y sin barra de direcciones.

* En marco - el archivo se muestra dentro de un marco debajo de la bararde navegación y la descripción del archivo

* En ventana nueva - el archivo se muestra dentro de una nueva ventana del navegador, con menús y una barra de dirección';
$string['dnduploadresource'] = 'Crear recurso archivo';
$string['encryptedcode'] = 'Código encriptado';
$string['filenotfound'] = 'Lo sentimos, el archivo no se ha encontrado.';
$string['filterfiles'] = 'Usar filtros para el contenido del  archivo';
$string['filterfilesexplain'] = 'Seleccione el tipo de archivo que contiene el filtro. Esto puede causar problemas en algunos applets de Flash y Java. Por favor, asegúrese de que todos los archivos de texto están codificados en UTF-8.';
$string['filtername'] = 'Auto-enlace de nombres de recursos';
$string['forcedownload'] = 'Forzar descarga';
$string['framesize'] = 'Altura del marco';
$string['indicator:cognitivedepth'] = 'Archivo cognitiva';
$string['indicator:cognitivedepthdef'] = 'Archivo cognitiva';
$string['indicator:cognitivedepthdef_help'] = 'El participante ha alcanzado este porcentaje del compromiso cognitivo ofrecido por los recursos Página durante este intervalo de análisis (Niveles = Sin Ver, Ver)';
$string['indicator:cognitivedepth_help'] = 'Este indicador está basado en la profundidad cognitiva alcanzada por el estudiante en un recurso Archivo.';
$string['indicator:socialbreadth'] = 'Archivo social';
$string['indicator:socialbreadthdef'] = 'Archivo social';
$string['indicator:socialbreadthdef_help'] = 'El participante ha alcanzado este porcentaje del compromiso social ofrecido por los recursos de Archivo durante este intervalo de análisis (Niveles = Sin participación, Participante solo, Participante con otros)';
$string['indicator:socialbreadth_help'] = 'Este indicador está basado en la amplitud social alcanzada por el estudiante en un recurso Archivo.';
$string['legacyfiles'] = 'Migración de archivo antiguo de curso';
$string['legacyfilesactive'] = 'Activo';
$string['legacyfilesdone'] = 'Terminado';
$string['modifieddate'] = 'Modificado {$a}';
$string['modulename'] = 'Archivo';
$string['modulename_help'] = 'El módulo archivo le permite al profesor proporcionar un archivo como recurso para un curso. Donde sea posible, el archivo se mostrará dentro de la interfaz del curso; de otra forma, se les pedirá a los estudiantes que descarguen el archivo. Este archivo puede incluir archivos de soporte tal como una página HTML que tenga incrustadas imágenes.

Observe que los estudiantes DEBEN tener el software apropiado en sus computadoras para poder abrir el archivo.

Un archivo puede emplearse

* Para compartir las presentaciones usadas en la clase
* Para incluir un mini-sitio web como recurso para clase
* Para proporcionar archivos de borradores de algunos programas para que los estudiantes puedan editarlo y enviarlo para que sea evaluado.';
$string['modulenameplural'] = 'Archivos';
$string['notmigrated'] = 'Este tipo de recurso antiguo heredado ({$a}) no ha sido migrado aún.';
$string['optionsheader'] = 'Mostrar opciones';
$string['page-mod-resource-x'] = 'Cualquier página del módulo archivo';
$string['pluginadministration'] = 'Administración del módulo archivo';
$string['pluginname'] = 'Archivo';
$string['popupheight'] = 'Altura (en píxels) de la ventana emergente';
$string['popupheightexplain'] = 'Especifica la altura por defecto de las ventanas emergentes.';
$string['popupresource'] = 'Este recurso debe aparecer en una ventana emergente';
$string['popupresourcelink'] = 'Si no, haga clic aquí: {$a}';
$string['popupwidth'] = 'Ancho (en píxels) de la ventana emergente';
$string['popupwidthexplain'] = 'Especifica la anchura por defecto de las ventanas emergentes.';
$string['printintro'] = 'Mostrar descripción del recurso';
$string['printintroexplain'] = '¿Mostrar la descripción del recurso debajo del contenido? Algunos tipos pueden no mostrar la descripción incluso aunque esté activada esa opción.';
$string['privacy:metadata'] = 'El plugin de Recurso Archivo no almacena ningún dato personal.';
$string['resource:addinstance'] = 'Añadir un nuevo recurso';
$string['resourcecontent'] = 'Archivos y subcarpetas';
$string['resourcedetails_sizedate'] = '{$a->size} {$a->date}';
$string['resourcedetails_sizetype'] = '{$a->size} {$a->type}';
$string['resourcedetails_sizetypedate'] = '{$a->size} {$a->type} {$a->date}';
$string['resourcedetails_typedate'] = '{$a->type} {$a->date}';
$string['resource:exportresource'] = 'Exportar recurso';
$string['resource:view'] = 'Ver recurso';
$string['search:activity'] = 'Archivo';
$string['selectmainfile'] = 'Por favor, seleccione el archivo principal haciendo clic en el icono junto a su nombre.';
$string['showdate'] = 'Mostrar fecha de subido/modificado';
$string['showdate_desc'] = '¿Mostrar fecha de subido/modificado en la página del curso?';
$string['showdate_help'] = 'Muestra la fecha de subido/modificado junto a enlaces al archivo.

Si hubiera múltiples archivos en este recurso, la fecha inicial de subido/modificado es mostrada.';
$string['showsize'] = 'Mostrar tamaño';
$string['showsize_desc'] = '¿Mostrar tamaño de archivo en página del curso?';
$string['showsize_help'] = 'Mostrar el tamaño del archivo; por ejemplo \'3.1 MB\', a un lado de los enlaces al archivo. Si hay archivos múltiples en este recurso, se muestra el tamaño total de todos los archivos.';
$string['showtype'] = 'Mostrar tipo';
$string['showtype_desc'] = '¿Mostrar tipo (por ejemplo: "Documento Word") en la página del curso ?';
$string['showtype_help'] = 'Mostrar el tipo del archivo, tal como \'Documento Word\', a un lado de los archivos.  Si hay archivos múltiples en este recurso, se muestra el tamaño total de todos los archivos.';
$string['uploadeddate'] = 'Subido {$a}';
