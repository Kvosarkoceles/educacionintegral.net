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
 * Strings for component 'theme_lagomorph', language 'es_mx', branch 'MOODLE_21_STABLE'
 *
 * @package   theme_lagomorph
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bgcolour1'] = 'Color de Fondo 1';
$string['bgcolour1desc'] = 'Color de Fondo 1 - por defecto este es un tono oscuro: se emplea como el color base para el degradado principal del fondo y para el fondo cambiante (hover) sobre los botones del menú.';
$string['bgcolour2'] = 'Color de Fondo 2';
$string['bgcolour2desc'] = 'Color de Fondo 2 - por defecto este es un tono mediano: se emplea como el color base para el degradado  de la cabecera del bloque, el fondo sobre los botones del menú y algunas de las sombras de texto.';
$string['bgcolour3'] = 'Color de Fondo 3';
$string['bgcolour3desc'] = 'Color de Fondo 3 - por defecto este es un tono claro: se emplea como el color de "sombrear a" para los degradados y algunas sombras de texto y cajas.';
$string['choosereadme'] = '<p><span style=\'font-size: x-large;\'><strong>Lagomorph Theme</strong></span></p><p>Este tema ha sido desarrollado para proporcionar una base para un tema único para una gran variedad de tamaños de pantallas, desde escritorio completo hasta teléfono móvil, aunque el principal enfoque se dirigió a la flexibilidad para dispositivos móviles, tales como tabletas Androide/iPad etc.</p> <p>Para lograr esto, este tema depende fuertemente de css3 y por esto <em><strong>NO ES APROPIADO </strong></em> para navegadores antiguos, especialmente las versiones \'antiguas\' de Internet Explorer. Se han empleado filtros de MicroSoft para replicar algunas características estándares de css3 tanto como fuera posible, para intentar proporcionar una experiencia al usuario similar, aún cuando algunas no resultaron prácticas (por ejemplo: no hay degradado sobre los encabezados de IE porque yo no he podido hacer los filtros de degradado que permitan esquinas redondeadas)</p> <p><strong>Puntos a considerar:</strong></p> <p><strong>1</strong>. El acomodo de la página usa llamadas a \'@media screen\' y se basa en el trabajo de Daniel Wahl en el tema ReBase. Esto le permite a la página que se ajuste automáticamente entre 3 columnas (para pantallas anchas) , 2 columnas (izquierda y principal) para pantallas menores y una columna única donde el bloque lateral aparece debajo del contenido principal para las pantallas más pequeñas. El bloque de perfil también se adapta de acuerdo al tamaño de pantalla. - mostrando la imagen del perfil en las pantallas grandes, pero solamente el nombre del usuario en pantallas menores</p> <p><strong>2</strong>. El menú principal es una barra sencilla (sin desplegables), poblada a partir de un archivo de texto que puede cargarse mediante la página de configuración del tema. Este menú se ajusta automáticamente para volverse un menú de tipo de selección desplegable en pantallas menores, y se re-ajusta para volverse utilizable con controles de tacto en pantallas mucho muy pequeñas. El menú standard de moodle2 (custommenu) también puede añadirse desde una opción en la página de configuración del tema, aunque esto actualmente está configurado para que no se muestre en pantallas pequeñas, particularmente debido a las características de los desplegables (hover) que no los hacen apropiados para controles táctiles.</p> <p><strong>3</strong>. Para reducir los tiempos de descarga y las llamadas HTML en dispositivos móviles, se han empleado degradados/sombras/esquinas redondeadas/etc con CSS y muy muy pocos gráficos para crear este tema. Los gráficos que se incluyen (imágen principal arriba a la derecha y los íconos de encabezado de bloque) para las pantañllas más grandes son removidos en los diseños menores. Esto se basa en la presunción de que el empleo de pantalla completa es más probable que ocurra en dispositivos con acceso a internet cableado/inalámbrico, mientras que los dispositivos más pequeños es más probable que dependan de servicios de banda ancha móviles</p> <p><strong>4</strong>. Un nuevo conjunto de íconos se ha aplicado, basado en el juego de íconos \'fugue\' de  Yusuke Kamiyamane. Este juego de íconos \'fugue\' se libera bajo una licencia de Creative Commons Attribution 3.0  . ¡Esto se ha hecho para mejorar el aspecto general y no tiene influencia sobre la utilidad del tema en un ambiente móvil! :) En donde estos íconos se han empleado para decorar encabezados de bloques, son removidos en los tamaños más pequeños de pantallas donde el sitio puede ser accesado sobre servicios de banda ancha para móviles, para así reducir los tiempos de descarga.</p> <p><strong>5</strong>. Como resultado de una idea de diseño proveniente de las discusiones del nuevo tema Aardvark 2.1 de Shaun Daubney, Yo he incluído nuevas áreas de bloque, 2 arriba del contenido principal y 2 debajo en la columna central. Esto permite mayor flexibilidad en el arreglo de la página y también permite la opción de que los bloques importantes se posicionen arriba del contenido principal, aún cuando el sitio se reduzca a una sola columna en las pantallas más pequeñas.</p> <p></p>';
$string['colourchoicedesc'] = '<p><b>Configuraciones de Color de Lagomorph</b></p> <p>Lagomorph usa un conjunto limitado de colores para crear los degradados, fondos y sombras empleados en el tema gráfico. Por defecto, estos son tonos oscuros, medios y claros para los degradados, botones, etc; un blanco deslavado para el fondo del contenido y un negro deslavado para los títulos de encabezados. El texto del contenido principal, ligas, etc. son colores standard por defecto.</p>';
$string['headerinfodesc'] = '<b>Configuraciones del menú de Lagomorph </b>';
$string['imageinfo'] = '<b>Imagen de página</b>';
$string['imageinfodesc'] = 'Introduzca la URL para una imagen que está almacenada en un lugar accesible. Este podría ser un logo del sitio, pero considere que no se mostrará en las pantallas más pequeñas.';
$string['menuchoice'] = 'Elegir diseño del menú';
$string['menuchoicedesc'] = 'Elija entre <br />1. El menú standard de Moodle2 (CustomMenu only) - este le proporciona un menú desplegable completo, pero se oculta en las pantallas más pequeñas<br />2. Una barra simple de menú (SelectMenu only), que se convierte en una herramienta de selección para pantallas pequeñas<br />3. Ambos menús (SelectMenu+CustomMenu).';
$string['menuurl'] = 'URL para archivo del texto del menú';
$string['menuurldesc'] = 'Un menú horizontal puede prepararse desde un archivo de texto almacenado, por ejemplo, en el bloque del menú principal en la portada del sitio. Cualquier otra localización es adecuada, siempre que esa localización sea accesible a todos sin necesidad de identificarse.<br />El menú debe organizarse como en este ejemplo:<i><br />Google|http://www.google.co.uk;<br />BBC|http://www.bbc.co.uk;<br />BBC Sport|http://www.bbc.co.uk/sport;<br />Moodle|http://moodle.org<br /><br /></i>Nota:<br />1. cada línea termina en punto y coma (;), <b>excepto la última</b><br />2. El menú está limitado a una sola línea (no desplegable) debido a la restricción de convertir el menú a desplegable para pantallas de dispositivos móviles.';
$string['offblackcolour'] = 'Color negro-deslavado.';
$string['offblackdesc'] = 'Color negro-deslavado: Por defecto este color se usa para el texto de encabezado.';
$string['offwhitecolour'] = 'Color blanco-deslavado';
$string['offwhitedesc'] = 'Color blanco-deslavado. Por defecto este color se usa para el fondo del contenido en los bloques laterales. También se usa como color de texto en los botones del menú.';
$string['pgimage'] = 'URL para imagen de página';
$string['pgimage_title'] = 'Imagen de página';
$string['pluginname'] = 'Lagomorfo';
$string['settingurl'] = 'URL para archivo de texto de configuración';
$string['settingurldesc'] = 'Muchas de las configuraciones de CSS se pueden almacenar en un archivo de texto. Este archivo puede subirse al sitio
 (por ejemplo el bloque del Menú Principal en la página de portada del sitio) y la URL se introduce aquí.<br />Nota:<br />1. Deben cuidarse las configuraciones de URL en esta manera, porque los recursos almacenados en el sitio Moodle tendrán una URL diferente si se mueven a otro sitio.<br />2. Las configuraciones guardadas en este archivo de texto tendrán preferencia sobre las configuraciones por defecto en el tema, pero serán sobre-escritas por los valores que se introduzcan en la página de configuraciones.<br />3. Esto solamente funciona para las configuraciones de css, otras configuraciones tales como la localización del archivo del texto del menú no serán leídas de este archivo de texto.';
