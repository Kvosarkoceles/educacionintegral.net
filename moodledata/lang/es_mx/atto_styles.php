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
 * Strings for component 'atto_styles', language 'es_mx', branch 'MOODLE_38_STABLE'
 *
 * @package   atto_styles
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['code_example'] = '{<br />
    "title": "Caja azul",<br />
    "type": "block",<br />
    "classes": "box blue"<br />
    "preview": true<br />
}';
$string['code_example_bootstrap'] = '{<br />
    "title": "Alerta de éxito",<br />
    "type": "block",<br />
    "classes": "alert alert-success"<br />
}';
$string['config'] = 'Configuración de Estilos';
$string['config_desc'] = 'Configuración para los estilos de widget para Atto en formato JSON. <br /> Usted puede encontrar un ejemplo detallado en el archivo README.md en la sección <a href="https://github.com/moodleuulm/moodle-atto_styles/blob/master/README.md#usage--settings">"Usage & Settings"</a>.
<hr />

Por ejemplo m:<br />
{$a->code_example}
<hr />
El atributo <em>title</em> define el nombre para el estilo dentro del widget de estilos de Atto.<br />
<br />
Un título también puede soportar el filtro multi.idiomas de Moodle (si estuviera habilitado), pero para las comillas dobles adicionalmente se necesitará que sean escapadas con una diagonal invertida.<br />
Por favor lea el archivo README del plugin para un ejemplo.<br />
<hr />
El atributo <em>type</em> puede contener uno de los dos valores posibles: "block" o "inline".<br />
<br />
"block" creará una marca div con la(s) clase(s) dada(s) y actuará como un elemento de nivel bloque estándar. Esto controlará al elemento de nivel bloque actual y podría aplicarse para más cosas que solamente el texto seleccionado actualmente.<br />
<br />
"inline" creará una marca span con la(s) clase(s) dada(s) y actuará como un elemento inline estándar. Esto solamente aplicará para el texto actualmente seleccionado.
<hr />
El atributo <em>classes</em> toma el nombre de la clase CSS que será aplicado al texto bloque / inline.<br />
<br />
Vartias clases pueden ser definidadas para cada ítem, separadas por un espacio. Ellas serán aplicadas todas al texto del bloque / inline.<br />
<br />
Las definiciones de la clase CSS no se pueden hacer dentro de este plugin. Usted tendrá que añadir sus definiciones de clase CSS a su tema o a sus configuraciones HTML adicionales.
<hr />
El atributo <em>preview</em> toma los valores booleanos true o false (predeterminado). Si este valor se configura a true, entonces el ítem del estilo obtendrá una previsualización real del estilo. En caso contrario, el ítem del estilo simplemente mostrará sul título en texto simpl.<br />
<br />
Por favor tenga en cuenta que si Usted elige mostrar la previsualización para un ítem de estilo, esta clase necesita estar definida en CSS de tal forma que pueda ser aplicada para abarcar las marcas , aun y cuando el ítem del propio estilo sea un elemento de nivel bloque.
<hr />
En instalaciones Moodle con temas basados en bootstrap (especialmente <em>Boost</em>),Usted también puede crear estilos con clases  bootstrap CSS en lugar de definir sus propias clases.
<br /><br />
Por ejemplo:<br />
{$a->code_example_bootstrap}
<br/><br/>
Para más información acerca de clases bootstrap, por favor visite los siguientes enlaces en la documentación de Bootstrap 4 :
<ul>
<li><a href="https://getbootstrap.com/docs/4.3/components/badge/">Bootstrap badges</a></li>
<li><a href="https://getbootstrap.com/docs/4.3/components/alerts/">Bootstrap alerts</a></li>
<li><a href="https://getbootstrap.com/docs/4.3/utilities/">Bootstrap utilities</a></li>
</ul> ´e3';
$string['inlinehint'] = 'Seleccione primero un texto para aplicarle este estilo';
$string['nostyle'] = 'Sin Estilo';
$string['pluginname'] = 'Estilos';
$string['privacy:metadata'] = 'El plugin atto_styles no almacena ningún dato personal.';
$string['settings'] = 'Configuraciones de Estilos';
