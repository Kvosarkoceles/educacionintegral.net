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
 * Strings for component 'tool_coursesearch', language 'es_mx', branch 'MOODLE_28_STABLE'
 *
 * @package   tool_coursesearch
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Acciones';
$string['advancecoursesearch'] = 'Ayuda para Búsqueda Avanzada de Cursos';
$string['advancecoursesearch_help'] = '<pre><b> 1. Autosugerencia con caja de búsqueda </b>:- Comience escribiendo su  palabra clave para búsqueda y Usted tendrá sugerencias autocompletadas. Los campos de sugerencias son idnumber (númeroID), course fullname (nombre completo del curso), shortname (nombre corto).
<br/><br/></pre>
<pre><b> 2. Búsqueda con comodines </b>:- Usted puede usar comodines (?,*) al buscar cursos.
Ejemplo :- Moodle* busca todos los cursos que comienzan con la palabra "Moodle".
<br/><br/></pre>
<pre><b> 3. Coincidencia de proximidad (\'\'Proximity matching\'\') </b>:- Usted puede buscar por palabras de cursos que están dentro de una distancia específica.
Ejemplo :- Buscar "foo bar" dentro de 4 palabras de separación entre ellas.
"foo bar"~4
<br/><br/></pre>
<pre><b> 4. Concordancia de palabra-clave  (búsqueda dentro de campo específico) </b>:- Usted puede limitar su búsqueda dentro de un campo específico al usar la característica de concordancia de palabra clave de solr (\'\'solr keyword matching feature\'\').
Ejemplo:- Buscar la palabra "PHP" en el campo de nombre completo (\'\'fullname\'\') y "object oriented" en el campo de resumen.
fullname:"PHP" AND summary:"object oriented"
<br/><br/> </pre>
<pre><b> 5. Filtrar resultados por fecha de inicio (\'\'startdate\'\') </b>:- Usted pued filtrar sus resultados de la búsqueda al seleccionar el rango de fechas aproximadas de los cursos.
<br/><br/> </pre>
<pre><b> 6. Ordenar resultados </b>:- Por defecto, los resultados se ordenan por relevancia (score). Usted puede ordenar los resultados por relevancia, fecha-de-inicio (\'\'startdate\'\'), nombre corto (\'\'shortname\'\').
<br/><br/></pre>';
$string['changessaved'] = '¡ Configuración guardada !';
$string['coursesearchintro'] = 'El plugin de Búsqueda Avanzada de Curso remplaza a la búsqueda de curso por defecto de Moodle con la poderosa búsqueda Solr.';
$string['coursesearchsettings'] = 'Configuraciones de Buscar Curso';
$string['defaulttext'] = 'Escriba su consulta de Búsqueda aquí:';
$string['delete'] = 'Borrar todo';
$string['didyoumean'] = '¿ Quiso decir&nbsp;';
$string['emptyqueryfield'] = '¡La consulta no debería de estar vacía!';
$string['enablespellcheck'] = 'Habilitar revisor de ortografía y sugerencias';
$string['enablespellcheck_help'] = 'Habilitar revisor de ortografía yobtener sugerencias de palabras, también conocido como la característica de  "¿ Quiso Usted decir ... ?" .';
$string['filtercheckbox'] = 'Deshabilitar todos los filtros';
$string['filtercheckbox_help'] = 'Deshabilitar todos los filtros';
$string['filterresults'] = 'filtrar resultados';
$string['go'] = 'Ir';
$string['loadcontent'] = 'Indexar cursos';
$string['optimize'] = 'Optimizar índice';
$string['options'] = 'Opciones';
$string['overviewindexing'] = 'Indexar archivos de vista general de curso';
$string['overviewindexing_help'] = 'Indexar archivos de vista general de curso y buscar dentro de dichos nombres de archivo y sus contenidos.';
$string['pingstatus'] = 'Revisar configuraciones de instancia de Solr';
$string['pluginname'] = 'Búsqueda avanzada de cursos';
$string['pluginsettings'] = 'Configuraciones de Búsqueda de cursos';
$string['savesettings'] = 'Guardar configuraciones';
$string['searchcourses'] = 'Buscar Cursos:';
$string['searchfromtime'] = 'Empezando desde :';
$string['searchfromtime_help'] = 'Filtre sus resultados de la búsqueda desde la fecha de inicio. Seleccione el rango aproximado de fecha de inicio para su curso.';
$string['searchlabel'] = 'Búsqueda de Curso:';
$string['searchtilltime'] = 'Empezando a:';
$string['searchtilltime_help'] = 'Filtre sus resultados de la búsqueda desde la fecha de inicio del curso. Seleccione el rango de la fecha de inicio aproximada  de su curso.';
$string['searchurl'] = 'Configuraciones de búsqueda de curso';
$string['settings'] = 'Configuraciones de Búsqueda de Curso';
$string['showerrormessageno'] = 'Mostrar mensaje de error: No';
$string['showerrormessageyes'] = 'Mostrar mensaje de error: Si';
$string['solrconfig'] = 'Configuraciones de Búsqueda avanzada de curso';
$string['solrerrormessage'] = 'En falla';
$string['solrerrormessage_help'] = 'Qué mostrar si la búsqueda por Apache Solr no está disponible.';
$string['solrheading'] = 'Configuración de Apache solr';
$string['solrhost'] = 'Host Solr';
$string['solrhost_help'] = 'Nombre del Host de su servidor Solr (por ejemplo:. localhost o ejemplo.com.)';
$string['solrpassword'] = 'Contraseña solr';
$string['solrpassword_help'] = 'Si Usted está usando autenticación por http, proporcione su contraseña solr; de lo contrario, déjelo vacío.';
$string['solrpath'] = 'Ruta a Solr';
$string['solrpath_help'] = 'Ruta que identifica el manejador de solicitud Solr a usar.';
$string['solrpingerror'] = 'Apache Solr:Su sitio no pudo contactar con el servidor de Apache Solr. Los resultados de la búsqueda aparecerán desde la búsqueda por el núcleo de Moodle.';
$string['solrport'] = 'Puerto Solr';
$string['solrport_help'] = 'Puerto en donde escucha el servidor Solr. El ejemplo para servidor Jetty es 8983, mientras que Tomcat es 8080 por defecto';
$string['solrusername'] = 'Nombre_de_usuario solr';
$string['solrusername_help'] = 'Si Usted está usando autenticación por http, proporcione su nombre_de_usuario solr; de lo contrario, déjelo vacío.';
$string['sortby'] = 'Ordenar por:';
$string['sortheading'] = 'ordenar resultados';
$string['sortmenu'] = 'Ordenar resultados';
$string['sortmenu_help'] = 'Ordenar resultados con diferentes aspectos';
$string['summaryindexing'] = 'Indexar archivos de resúmenes de curso';
$string['summaryindexing_help'] = 'Indexar archivos de resúmenes de curso y buscar dentro de esos nombres de archivos';
