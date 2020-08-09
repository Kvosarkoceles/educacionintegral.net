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
 * Strings for component 'format_onetopic', language 'es_mx', branch 'MOODLE_38_STABLE'
 *
 * @package   format_onetopic
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['asbrother'] = 'Mismo nivel que la pestaña anterior';
$string['aschild'] = 'Hijo de la pestaña anterior';
$string['asprincipal'] = 'Normal, como una pestaña de primer nivel';
$string['bgcolor'] = 'Color del fondo';
$string['bgcolor_help'] = 'Usado para cambiar el color del fondo de pestaña. El valor puede ser un color en una representación CSS válida, por ejemplo:  <ul><li>Hexadecimal: #ffffff</li><li>RGB: rgb(0,255,0)</li><li>Name: green</li></ul>';
$string['cantcreatesection'] = 'Error al crear tópico/tema nuevo';
$string['coursedisplay'] = 'Modo de visualización de sección 0';
$string['coursedisplay_help'] = 'Esto define como visualización a la sección 0, como una primera pestaña o como una sección antes de la barra de pestañas.';
$string['coursedisplay_multi'] = 'Antes de las pestañas';
$string['coursedisplay_single'] = 'Igual que las pestañas';
$string['creating_section'] = 'Creando tópico/tema nuevo';
$string['cssstyles'] = 'Propiedades CSS';
$string['cssstyles_help'] = 'Usado para cambiar propiedades CSS de lapestaña. Use un valor estándar para el atributo  <em>style</em> en una etiqueta (\'\'tag\'\') html. Por ejemplo: <br /><strong>font-weight: bold; font-size: 16px;</strong>';
$string['currentsection'] = 'Este tópico/tema';
$string['disable'] = 'Deshabilitar';
$string['disableajax'] = 'Acciones edición asincrónica';
$string['disableajax_help'] = 'Use esta acción para mover recursos entre pestañas de tópicos/temas. Solamente deshabilita las acciones asincrónicas en sesión concurrente, no es permanente.';
$string['duplicate'] = 'Duplicar';
$string['duplicate_confirm'] = '¿Está Usted seguro de querer duplicar el tópico/tema actual? La tarea puede tardar bastante dependiendo de la cantidad de recursos.';
$string['duplicatesection'] = 'Duplicar tópico/tema actual';
$string['duplicatesection_help'] = 'Usado para duplicar lso recursos del tópico/tema actual en un nuevo tópico';
$string['duplicating'] = 'Duplicando';
$string['enable'] = 'Habilitar';
$string['error_nosectioninfo'] = 'El tópico/tema indicado no tiene información';
$string['firsttabtext'] = 'Texto de la primera pestaña en subnivel';
$string['firsttabtext_help'] = 'Si esta pestaña tiene subniveles, este será el texto de la primera pestaña';
$string['fontcolor'] = 'Color del tipo de  letra';
$string['fontcolor_help'] = 'Usadopara cambiar el color de las letra del texto de pestaña. El valor puede ser un color en una representación CSS válida, por ejemplo:  <ul><li>Hexadecimal: #ffffff</li><li>RGB: rgb(0,255,0)</li><li>Name: green</li></ul>';
$string['hidden_message'] = 'La sección <em>{$a}</em>actualmente no está disponible.';
$string['hidefromothers'] = 'Ocultar tópico/tema';
$string['hidetabsbar'] = 'Ocultar barra de pestañas';
$string['hidetabsbar_help'] = 'Ocultar barra de pestañas en la página del curso. La navegación está dentro de la brrra de navegación de secciones.';
$string['index'] = 'Índice';
$string['level'] = 'Nivel';
$string['level_help'] = 'Cambiar el nivel de pestaña';
$string['movesectionto'] = 'Mover tópico/tema actual';
$string['movesectionto_help'] = 'Mover tópico/tema actual a izquierdaa/derecha del tópico/tema seleccionado';
$string['page-course-view-topics'] = 'Cualquier página principal de curso en formato de un_tópico';
$string['page-course-view-topics-x'] = 'Cualquier página de curso en formato de un_tópico';
$string['pluginname'] = 'Formato un_tópico';
$string['privacy:metadata'] = 'El plugin Onetopic no almacena ningún dato personal.';
$string['progress_counter'] = 'Duplicando actividades ({$a->current}/{$a->size})';
$string['progress_full'] = 'Duplicando tópico/tema';
$string['rebuild_course_cache'] = 'Reconstruir caché del curso';
$string['sectionname'] = 'Tópico/Tema';
$string['showfromothers'] = 'Mostrar tópico/tema';
$string['subtopictoright'] = 'Mover ala derecha como subtópico/subtema';
$string['templatetopic'] = 'Usar resumen de tópico como plantilla';
$string['templatetopic_help'] = 'Esta opción es usada para usar el tópico del resumen como una plantilla. Si se usa como plantilla, Usted puede incluir los recursos en el contexto, no solamente como listas tradicionales de Moodle.<br />Para incluir un recurso, escriba el nombre del recurso entre paréntesis cuadrados dobles, como por ejemplo: [[News forum]]. Esta funcionalidad es similar al filtro de nombre de actividad; sin embargo, es diferente porque el usuario puede elegir si es que se incluye el ícono  del recurso y decide si las actividades son incluidas.This functionality is similar to activity name filter, however, it is different because the user can chose if included the resource icon and decide than activities are be included.';
$string['templatetopic_icons'] = 'Mostrar ícono en enlaces a recursos en el resumen';
$string['templatetopic_icons_help'] = 'Esta opción define si es que los íconos son mostrados en el resumen cuando es una plantilla.';
$string['templetetopic_list'] = 'Si, usar el resumen como plantilla, enlistar los recursos que no son referenciados';
$string['templetetopic_not'] = 'No, mostrar como se hace por defecto';
$string['templetetopic_single'] = 'Si, usar el resumen como plantilla';
$string['utilities'] = 'Utilerías para edición de pestaña';
