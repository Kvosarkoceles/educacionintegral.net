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
 * Strings for component 'filter_codepen', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   filter_codepen
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['filtername'] = 'CodePen';
$string['preview_desc'] = 'Guarde sus configuraciones para ver el resultado';
$string['privacy:metadata'] = 'El plugin CodePen no almacena ningún dato personal.';
$string['settingdefaulttab'] = 'Pestañas por defecto';
$string['settingdefaulttab_css'] = 'CSS';
$string['settingdefaulttab_desc'] = 'Pestañas a mostrar por defecto.<br>
Máximo 2 a la vez, y solamente una si Usted configura "Incrustar versión" a "1".<br>
La pestaña de "Resultado" es mostrada si no se selecciona nada.';
$string['settingdefaulttab_html'] = 'HTML';
$string['settingdefaulttab_js'] = 'JavaScript';
$string['settingdefaulttab_result'] = 'Resultado';
$string['settingembedactivelinkcolor'] = 'Color de enlace activo';
$string['settingembedactivelinkcolor_desc'] = 'Color del texto de pestaña activa.';
$string['settingembedactivetabcolor'] = 'Color de pestaña activa';
$string['settingembedactivetabcolor_desc'] = 'Color del fondo de pestaña activa.';
$string['settingembedborder'] = 'Borde';
$string['settingembedbordercolor'] = 'Color del borde';
$string['settingembedbordercolor_desc'] = 'Incrustar color del borde de Pluma. Ignorado si "Borde" se configura a "Ninguno(a)".';
$string['settingembedborder_desc'] = 'Estilo del borde.';
$string['settingembedborder_thick'] = 'Grueso';
$string['settingembedborder_thin'] = 'Delgado';
$string['settingembedlinklogocolor'] = 'Color de logo del enlace';
$string['settingembedlinklogocolor_desc'] = 'Color del logo para editar CodePen.';
$string['settingembedtabbarcolor'] = 'Color de barra de pestaña';
$string['settingembedtabbarcolor_desc'] = 'Color del fondo de barra de pestaña';
$string['settingembedtablinkcolor'] = 'Color del enlace de pestaña';
$string['settingembedtablinkcolor_desc'] = 'Color del texto de barra de pestaña.';
$string['settingembedtheme'] = 'Incrustar Tema';
$string['settingembedtheme_dark'] = 'Oscuro';
$string['settingembedtheme_desc'] = 'Incrustar tema de Pluma';
$string['settingembedtheme_light'] = 'Claro';
$string['settingembedversion'] = 'Incrustar versión';
$string['settingembedversion_desc'] = 'Incrustar versión de pluma.';
$string['settingformats'] = 'Aplicar a formatos';
$string['settingformats_desc'] = 'El filtro solamente será aplicado si el texto original fuera insertado en uno de los formatos seleccionados.';
$string['settingheading'] = 'Información';
$string['settingheading_info'] = '<p>Este es un filtro de texto para incrustar un \'\'CodePen\'\' (Pluma_Color) de <a href="http://codepen.io">codepen.io</a> adentro de un área de texto en Moodle. Simplemente habilite el plugin y pegue la URL directa hacia una Pluma (Pen) en su contenido ( o encabezado si estuviera habilitado). Una URL estándar se asemeja a : <pre>http://codepen.io/[username]/pen/[Pen ID]</pre> Por ejemplo: <pre>http://codepen.io/thedannywahl/pen/Gbdaj</pre></p><h4>Notas</h4><ul><li>CodePen no tiene una API por lo que no podemos manipular la apariencia de las incrustaciones en base a  cada Pluma, por lo que las configuraciones aquí son globales.</li><li>Si un usuario no tiene habilitado JavaScript se proporciona una alternativa de texto con un enlace hacia la Pluma.</li><li>Los enlaces hacia Pluma son escapados, por si Usted no quiere incrustar. Por ejemplo.:<br/><code><a href="http://codepen.io/thedannywahl/pen/Gbdaj">http://codepen.io/thedannywahl/pen/Gbdaj</a></code></li><li>Asegúrese de que si Usted tiene el filtro "urltolink" habilitado, entonces el filtro CodePen esté enlistado primeramente porque los enlaces son escapados.</li><li>No use enlaces-cortos  www. o cdpn.io, porque estas URLs no son válidas para Pluma. Al visitarlas en un navegador siempre redirecciona a la ruta completa hacia la Pluma (como se ejemplifica arriba).</li><li>Este filtro solamente funciona con la URL /pen/. No incrustará desde otras vistas tales como /full/ /live/ etc...</li></ul>';
$string['settingheight'] = 'Altura de la pluma';
$string['settingheight_desc'] = 'Configurar la altura de todas las Plumas incrustadas.';
$string['theme_override'] = 'Anulación del tema';
$string['theme_override_desc'] = 'Las configuraciones siguientes pueden ser usadas para anular al tema.';
