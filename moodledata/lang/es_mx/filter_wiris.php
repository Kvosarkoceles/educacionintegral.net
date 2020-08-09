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
 * Strings for component 'filter_wiris', language 'es_mx', branch 'MOODLE_38_STABLE'
 *
 * @package   filter_wiris
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessproviderenabled'] = 'Control de acceso';
$string['accessproviderenabled_help'] = 'Si se habilita, solamente los usuarios autenticados pueden acceder a servicios MathType.';
$string['alloweditorpluginactive'] = 'Editor siempre activo';
$string['alloweditorpluginactive_help'] = 'El plugin del Editor debería de estar habilitado, sin importar que el filtro MathType estuviera deshabilitado al nivel del curso o de la actividad. Por defecto, si el filtro MathType estuviera deshabilitado en un curso/actividad, MathType también estará deshabilitado en el mismo curso/actividad.';
$string['area'] = 'área';
$string['arenotinstalled'] = 'no están instalados.';
$string['atto'] = 'Atto';
$string['button1'] = 'Pruebas de MathType';
$string['button2'] = 'Pruebas de Exámenes WIRIS';
$string['cachedef_formulas'] = 'Fórmulas de MathType';
$string['cachedef_images'] = 'Imágenes de MathType';
$string['clearcache'] = 'Limpiar caché';
$string['clearcachedesc'] = 'Limpiar caché de filtro MathType';
$string['clickwirisplugincorrectlyinstalled'] = 'Haga clic en el siguiente botón para probar si el plugin MathType está instalado correctamente.';
$string['clickwirisquizzescorrectlyinstalled'] = 'Haga clic en el siguiente botón para probar si los Exámenes WIRIS están instalados correctamente.';
$string['connectionsettings'] = 'Configuraciones de conexión';
$string['connectionsettings_text'] = '';
$string['contact'] = 'Para más información, o si Usted tiene una duda, póngase en contacto con el soporte de WIRIS:';
$string['disabled'] = 'Deshabilitado';
$string['editormodalwindow'] = 'Ventana modal habilitada';
$string['editormodalwindowfullscreen'] = 'Ventana modal en modo de pantalla completa';
$string['editormodalwindowfullscreen_help'] = 'Especifica si es que la ventana modal debería ser abierta en modo de pantalla completa.';
$string['editormodalwindow_help'] = '';
$string['editornameexpected'] = 'Se espera el nombre del editor';
$string['editorsettings'] = 'Configuraciones del editor';
$string['editorsettings_text'] = '';
$string['enabled'] = 'Habilitado';
$string['error'] = 'ERROR';
$string['errordeletingcache'] = 'Error al eliminar caché en área {$a}';
$string['errorsavingcache'] = 'Error al guardar caché en área {$a}';
$string['filtermustbeinstalled'] = 'El foltro debe de estar instalado adentro de la carpeta filter (para filtros) de Moodle.';
$string['filtername'] = 'MathType por WIRIS';
$string['filter_standalone'] = 'Filtro MathType solamente';
$string['filter_standalonedesc'] = 'Usted podrá mostrar fórmulas existentes pero no está disponible la creación de nuevas fórmulas. También se elimina el mensaje de advertencia.';
$string['furtherinformation'] = 'Para mayor información, vea nuestra página de documentación';
$string['havesameversion'] = 'tienen la misma versión';
$string['imageformat'] = 'Formato de imagen';
$string['imageformat_help'] = 'EspEspecifica formato de imagen (svg o png).';
$string['imageservicehost'] = 'Host del servicio';
$string['imageservicehost_help'] = 'Especifica host de servidor de imagen de fórmula.';
$string['imageservicepath'] = 'Ruta del servicio';
$string['imageservicepath_help'] = 'Especifica ruta de servidor de imagen de fórmula.';
$string['imageserviceport'] = 'Puerto del servicio';
$string['imageserviceport_help'] = 'Especifica puerto de servidor de imagen de fórmula.';
$string['imageserviceprotocol'] = 'Protocolo del servicio';
$string['imageserviceprotocol_help'] = 'Especifica protocolo de servidor de imagen de fórmula.';
$string['imagesettings'] = 'Configuraciones de imagen';
$string['imagesettings_text'] = '';
$string['impossibletofindwirisfilterversion'] = 'Imposible encontrar el archivo de la versión del filtro MathType';
$string['lookingforfilterfiles'] = 'Buscando los archivos del filtro';
$string['lookingforwirisfilterversion'] = 'Buscando la versión del filtro de MathType';
$string['lookingforwirisplugin'] = 'Buscando MathType para';
$string['lookingforwirispluginenabled'] = 'Buscando MathType para';
$string['mustbeinstalled'] = 'debe de estar instalado';
$string['noteditorspluginsinstalled'] = 'No hay plugins de editores instalados';
$string['notsupportededitor'] = 'No es un editor soportado.';
$string['ok'] = 'OK';
$string['oldconfiguration'] = 'Se ha detectado un archivo antiguo de configuration.ini en {$a}. Por favor, muévalo hacia /filter/wiris/configuration.ini.';
$string['onlytextareaeditorinstalled'] = 'Solamente hay un plugin de editores de área_de_texto instalado';
$string['or'] = 'o';
$string['pluginname'] = 'Filtro MathType por WIRIS';
$string['pluginperformance'] = 'Modo de desempeño de imagen';
$string['pluginperformance_help'] = 'Especifica si la respuesta debería ser un JSON en lugar de un binario, lo que permite que las respuestas sean cacheadas. Habilita desempeño al usar respuesta JSON.';
$string['privacy:null_reason'] = 'El filtro MathType no afecta ni almacena ningún dato por si mismo.';
$string['securitysettings'] = 'Configuraciones de seguridad';
$string['securitysettings_text'] = '';
$string['tinymce'] = 'TinyMCE';
$string['title'] = 'Página de prueba del filtro MathType';
$string['version'] = 'versión';
$string['versionsdontmatch'] = 'las versiones no coinciden';
$string['windowsettings'] = 'Configuraciones de ventana';
$string['windowsettings_text'] = '';
$string['wirisbehaterroreditornotfound'] = 'No pudo encontrase MathType';
$string['wiriscas'] = 'Calculadora';
$string['wirischemeditor'] = 'Editor de Química';
$string['wirisfilterversion'] = 'Versión del filtro MathType =';
$string['wirismatheditor'] = 'Editor de Matemáticas';
$string['wirispluginfilterfor'] = 'Filtro MathType y MathType para';
$string['wirispluginfiltermustbeinstalled'] = 'Debe de instalarse filtroMathType';
$string['wirispluginfor'] = 'MathType para';
$string['wirispluginforatto'] = 'MathType para Atto';
$string['wirispluginfortinymce'] = 'MathType para TinyMCE';
