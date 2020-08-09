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
 * Strings for component 'local_envbar', language 'es_mx', branch 'MOODLE_35_STABLE'
 *
 * @package   local_envbar
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addfields'] = 'Añadir otro entorno';
$string['bgcolour'] = 'Color del fondo';
$string['cachedef_records'] = 'Los registros de la BasedeDatos de la Barra del entorno';
$string['colourerror'] = 'Código HTML de color especificado inválido';
$string['colourplaceholder'] = 'Código HTML de color; por ejemplo, #fff O #000000';
$string['configurehere'] = 'Editar configuración de Barra-del-Entorno en ESTE entorno';
$string['configureinprod'] = 'Editar configuración de Barra-del-Entorno en PROD';
$string['debuggingdefinedinconfig'] = '(Definido en config.php)';
$string['debuggingoff'] = 'Depuración Desactivada';
$string['debuggingon'] = 'Depuración Actrivada';
$string['debugtogglelinkoff'] = 'Desactivar';
$string['debugtogglelinkon'] = 'Activa';
$string['dividerselector'] = 'Selector divisor';
$string['dividerselector_desc'] = 'Esta es una clase CSS que es usada para el elemento divisor del menú. Si su tema usa HTML diferente entonces Usted podría necesitar ajustar este selector.<br />Esta configuración solamente es usada si el menú cambiador del entorno es activado.';
$string['enablefaviconcolorize'] = 'Colorear favicon';
$string['enablefaviconcolorize_desc'] = 'Esta configuración controla si el favicon será coloreado de acuerdo con el color del entorno o no.';
$string['enablemenu'] = 'Habilitar menú cambiador del entorno';
$string['enablemenu_desc'] = 'Esta configuración controla si el menú cambiador del entorno es añadido al menú del usuario o no.';
$string['enabletitleprefix'] = 'Habilitar prefijado del título de la página';
$string['enabletitleprefix_desc'] = 'Esta configuración controla si el título de la página será prefijado con las primeras 4 letras del nombre del entorno o no.';
$string['envbarheading'] = 'Barra del Entorno';
$string['extracss'] = 'CSS extra';
$string['extracss_desc'] = 'Este CSS es añadido solamente cuando la barra está visible y clavada a la parte superior de la página. Su tema podría también tener encabezados fijados que podrían chocar por lo que este CSS extra debería de resolver el choque y mover al encabezado principal de su tema hacia abajo. Si su encabezado está fijado solamente en ciertos puntos de quiebre entonces la consulta de medio en este CSS extra debería de ser idéntica a la que está en su tema.';
$string['faviconheading'] = 'Favicon de la página';
$string['header_envbar'] = 'Barra del Entorno';
$string['help'] = '<p><b>ADVERTENCIA:</b> Generalmente estas configuraciones solamente deberían de ser configuradas una sola vez en el sistema de producción.</p><p>Si Ustedy NO está en el sistema en producción, y estos valores están vacíos, entonces idealmente vaya y llénelos en producción y entonces refresque su BasedeDatos otra vez para aquí.</p>';
$string['highlightlinks'] = 'Resaltar enlaces';
$string['highlightlinks_desc'] = 'Esta configuración controla si los enlaces salientes hacia otros entornos, especialmente el entorno de producción, son resaltados con una orilla coloreada.';
$string['highlightlinksenvbar'] = 'Resaltar enlaces (Envbar)';
$string['highlightlinksenvbar_desc'] = 'Esta configuración controla si los enlaces adentro de la Barra del entorno también son resaltados.';
$string['lastrefresh'] = 'Último  refresco';
$string['lastrefresh_success'] = 'La hora en la que el último refresco ha sido actualizado.';
$string['linksheading'] = 'Enlaces del entorno';
$string['menuenvsettings'] = 'Entornos';
$string['menuheading'] = 'Menú cambiador del entorno';
$string['menulastrefresh'] = 'Último refresco';
$string['menupresentation'] = 'Presentación';
$string['menuselector'] = 'Selector de menú';
$string['menuselector_desc'] = 'Este es un selector CSS o XPATH para encontrar el elemento ul del menú para inyectar el menú cambiador del entorno. Si su tema usa HTML diferente, entoces Usted podría necesitar ajustar este selector.<br />Esta configuración solamente es usada si el menú cambiador del entorno está habilitado.';
$string['missing_required_parameter'] = 'Faltó un parámetro requerido. Los parámetros requeridos son wwwroot y lastrefresh.';
$string['nextrefreshin'] = 'Reinicio en {$a}';
$string['notconfigured'] = 'DESCONOCIDO';
$string['pingprod'] = 'Actualizar producción';
$string['pingprod_help'] = 'Cuando esta opción es seleccionada, el servidor de producción será contactado por PING para actualizar la hora del último_refresco para este entorno.';
$string['pingprodverbose'] = 'Modo verboso';
$string['pingprodverbose_help'] = 'Cuando esto y la opción de actualizar producción son seleccionados, se imprimirá una depuración completa de la respuesta curl en la pantalla.';
$string['pluginname'] = 'Barra del Entorno';
$string['privacy:metadata'] = 'El plugin local de  Barra de Entorno no almacena ningún dato personal.';
$string['prod'] = 'PROD';
$string['prodbgcolour'] = 'Color del fondo de producción';
$string['prodbgcolour_help'] = 'El color del fondo que será usado para presentar el entorno de producción, especialmente al resaltar enlaces desde instancias que no son de producción hacia la instancia de producción.';
$string['prodlasttimestamp'] = '<p>Sello de tiempo de producción fue actualizado por última vez hace {$a}</p>';
$string['prodtextcolour'] = 'Color del frente de producción';
$string['prodtextcolour_help'] = 'El color del frente que será usado para presentar el entorno de producción, especialmente al resaltar enlaces desde instancias que no sean de producción hacia la instancia de producción';
$string['prodwwwrootautobutton'] = 'Auto-llenar';
$string['prodwwwrootplaceholder'] = '$CFG->wwwroot en producción';
$string['prodwwwroottext'] = 'wwwroot Producción';
$string['refreshedago'] = 'Antiguedad {$a}';
$string['refreshednever'] = 'Nunca ha sido refrescado';
$string['secretkey'] = 'Clave secreta';
$string['secretkeygenbutton'] = 'Generar';
$string['secretkey_help'] = 'La clave secreta es necesaria para permitirle a los entornos hablar entre ellos. Por favor configúrela a alguna cadena de caracteres alfanuméricos aleatorios de su elección y presione el botón para \'Generar\'. Si o se configura una clave secreta, los entornos que no sean de producción no podrán detectar su último tiempo de refresco.';
$string['secretkey_invalid'] = 'La clave sercreta proporcionada estaba faltante o inválida.';
$string['secretkeyplaceholder'] = 'UnaCadenadeCaracteresAleatoriaAlfanumerica';
$string['setdeleted'] = 'Eliminar';
$string['setenabled'] = 'Habilitar';
$string['showconfiglink'] = 'Mostrar enlace a configuración';
$string['showconfiglink_desc'] = 'Esta configuración controla si el enlace hacia "Editar configuración" es añadido a la barra del entorno para usuarios que tienen permitido editar la configuración de la barra del entorno.';
$string['showdebugging'] = 'Mostrar depuración';
$string['showdebugging_desc'] = 'Esta configuración controla si el estado de la depuración y el enlace para alternarlo son añadidos a envbar para usuarios que tengan permitido editar la configuración de envbar.';
$string['showtext'] = 'Texto a mostrar';
$string['showtextplaceholder'] = 'Por ejemplo: Usted está en un entorno de andamiaje';
$string['stringseparator'] = 'Separador de cadenas';
$string['stringseparator_desc'] = 'Esta configuración controla como las cadenas de caracteres en la barra del entorno serán separadas. El ajuste por defecto es con un guión.';
$string['textcolour'] = 'Color del texto';
$string['titleheading'] = 'Título de página';
$string['urlmatch'] = 'URL que NO está en Producción';
$string['urlmatch_help'] = 'Usted puede usar Expresiones Regulares que coincidan con su URL.<br />Por ejemplo http://stage[1,2,3].ejemplo.com para coincidir con http://stage2.ejemplo.com<br />Tenga en cuenta que los siguientes caracteres especiales serán escapados:<br /> / - . ? * ^ $';
$string['urlmatchplaceholder'] = 'Por ejemplo: andamiaje';
