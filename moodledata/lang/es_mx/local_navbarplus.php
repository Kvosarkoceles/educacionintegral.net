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
 * Strings for component 'local_navbarplus', language 'es_mx', branch 'MOODLE_38_STABLE'
 *
 * @package   local_navbarplus
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Barra_de_Navegación Plus';
$string['privacy:metadata'] = 'El plugin Navbar Plus proporciona funcionalidad extendida a usuarios Moodle, pero no almacena ningún dato personal.';
$string['resetusertours_hint'] = '(Podría demorar un corto tiempo)';
$string['setting_inserticonswithlinks'] = 'Íconos con Enlaces';
$string['setting_inserticonswithlinks_desc'] = 'Con esta configuración, Usted puede añadir íconos de enlaces a la Barra de Navegación del encabezado a la izquierda de los íconos de  "mensajes" y "notificaciones".<br/>
Cada línea consiste de una imágen de ícono, una URL del enlace, un texto, idioma(s) soportado(s) (opcional) y configuración de ventana nueva  (opcional) - separados por caracteres de barra vertical |. Cada ícono necesita estar escrito en una nueva linea.<br/>
Por ejemplo:<br/>
fa-question|http://moodle.org|Moodle|en,de|true|d-none d-sm-block<br/>
fa-sign-out|/login/logout.php|Logout||false<br/><br/>
Más información a los parámetros:
<ul>
<li><b>Imagen:</b> Usted puede añadir identificadores de ícono de Font Awesome (<a href="http://fontawesome.io/icons/">Vea la lista de íconos en fontawesome.io</a>). Font Awesome está incluido en el núcleo de los temas de Moodle Clean yd Boost desde la versión 3.3.</li>
<li><b>Enlace:</b> El destino del enlace puede ser definido por una URL web completa (ejemplo: https://moodle.org) o una ruta relativa dentro de su instancia Moodle (ejemplo: /login/logout.php). </li>
<li><b>Título:</b> Este texto será escrito en los atributos alternos y el título del ícono.</li>
<li><b>Idioma(s) soportado(s) (opcional):</b> Esta configuración puede ser usada para mostrarle el enlace solamente a usuarios del idioma especificado. Separe más de un idioma soportado con comas. Si el enlace debería de mostrarse en todos los idiomas, entonces deje vacío este campo.</li>
<li><b>Nueva ventana (opcional)</b>: Por defecto el enlace será abierto en la misma ventana y el calor de este ajuste se configura en false (falso). Si Usted desea abrir el enlace en una nueva ventana, configure el valor a true (verdadero).</li>
<li><b>Clases adicionales (opcional)</b>: Usted puede añadir clases individuales con este parámetro opcional. Un caso de uso común es añadir clases responsivas Bootstrap para ocultar un ícono para tamaños específicos de pantalla. <br/> Usted puede ver las definciones para las clases de visualización Boostrap responsivas para  <a href="https://getbootstrap.com/docs/4.0/utilities/display/">Bootstrap version 4</a> para todos los temas basados en Boost.<br/>
Las clases más importantes para temas basados en Boost podrían ser "d-none d-sm-block" para ocultar un ícono en dispositivos pequeños, o "d-sm-none" para solamente mostrar el ícono en pantallas pequeñas.
<li><b>ID (opcional)</b>: Usted puede añadir una ID individual a su elemento del ícono. Esto hace posible lidiar con este ícono específico fácilmente con CSS (por ejemplo para los tours para usuarios Moodle). La cadena de caracteres que Usted ingrese aquí siempre estará prefijada con  "localnavbarplus-".</li>
</ul>
Por favor tenga en cuenta que:
<ul>
<li> Los caracteres de barra vertical | para dividir para parámetros opcionales siempre son necesarios si están localizados entre otras opciones. Esto significa que Usted necesita separar los parámetros con el caracter de barra vertical | aunque estuvieran vacíos los parámetros. Vea también el ejemplo para el ícono Awesome arriba. </li>
<li> Si el ícono no se muestra en la Barra de Navegación, por favor revise si todos los parámetros obligatorios están configurados correctamente y si la configuración opcional del idioma coincide con su uso actual de idioma en Moodle. </li>
</ul>';
$string['setting_resetusertours'] = 'Reiniciar enlace de Tour del usuario';
$string['setting_resetusertours_desc'] = 'Con esta configuración, Usted puede poner un ícono de mapa Font Awesome en la Barra de Navegación, con el cual el usuario puede reiniciar el tour para usuario para la página actual. Por defecto, Boost coloca el enlace para reiniciar el tour para usuario dentro del pie de página. Esto podría no ser suficientemente llamativo. Con esta configuración, Usted puede colocar el enlace en la más visible Barra de Navegación..<br/> Si Usted quiere cambiar este ícono, por favor échele un vistazo al archivo README.md.';
