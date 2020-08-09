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
 * Strings for component 'local_usertours', language 'es_mx', branch 'MOODLE_31_STABLE'
 *
 * @package   local_usertours
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Acciones';
$string['appliesto'] = 'Aplica a';
$string['backdrop'] = 'Mostrar con sombreado';
$string['backdrop_help'] = 'Usted puede usar un sombreado para resaltar la parte de la página a la que Usted está apuntando.

Nota: Los sombreados no son compatibles con algunas partes de la pagina, como por ejemplo la Barra de Navegación.';
$string['block'] = 'Bloque';
$string['block_named'] = 'Bloque llamado \'{$a}';
$string['bottom'] = 'Fondo';
$string['confirmstepremovalquestion'] = '¿Está seguro de querer quitar este paso?';
$string['confirmstepremovaltitle'] = 'Confirmar remoción del paso';
$string['confirmtourremovalquestion'] = '¿Está seguro de querer quitar este tour?';
$string['confirmtourremovaltitle'] = 'Confirmar remoción del tour';
$string['content'] = 'Contenido';
$string['content_help'] = 'Este es el contenido del paso.
Usted puede ingresar un contenido en los formatos siguientes:
<dl>
<dt>Texto simple</dt>
<dd>Una descripción en texto simple</dd>
<dt>Moodle MultiIdioma</dt>
<dd>Una cadena de caracteres que usa el formato de Moodle MultiIdioma</dd>
<dt>Cadena de caracteres Moodle traducida</dt>
<dd>Un valor encontrado dentro de un archivo de idioma estándar de Moodle en el formato de identifier,component</dd>
</dl>';
$string['cssselector'] = 'Selector CSS';
$string['defaultvalue'] = 'Por defecto ({$a})';
$string['delay'] = 'Retraso antes de mostrar el paso';
$string['delay_help'] = 'Opcionalmente Usted puede elegir añadir un retraso antes de que se muestre el paso.

El retraso es en milisegundos.';
$string['description'] = 'Descripción';
$string['done'] = 'Hecho';
$string['editstep'] = 'Editando "{$a}"';
$string['enabled'] = 'Habilitado';
$string['endtour'] = 'Terminar tour';
$string['exporttour'] = 'Exportar tour';
$string['importtour'] = 'Importar tour';
$string['left'] = 'Izquierda';
$string['movestepdown'] = 'Mover abajo el paso';
$string['movestepup'] = 'Mover arriba el paso';
$string['movetourdown'] = 'Mover abajo el tour';
$string['movetourup'] = 'Mover arriba el tour';
$string['name'] = 'Nombre';
$string['newstep'] = 'Nuevo paso';
$string['newtour'] = 'Crear un nuevo tour';
$string['next'] = 'Siguiente';
$string['orphan'] = 'Mostrar si no se encuentra el destino';
$string['orphan_help'] = 'Mostrar el paso si el destino no pudo encontrarse en la página.';
$string['pathmatch'] = 'Aplicar a coincidencia URL';
$string['pathmatch_help'] = 'Se mostrarán tours en cualquier página cuya URL coincida con este valor.

Usted puede usar el caracter % como un comodín que singifica cualquier-cosa. Algunos valores de ejemplo incluyen:

* /my/% - para coincidir con el Tablero
* /course/view.php?id=2 - para coincidir con un curso específico
* /mod/forum/view.php% - para coincidir con la lista de discusión
* /user/profile.php% - para coincidir con la página del perfil del usuario';
$string['pausetour'] = 'Pausa';
$string['placement'] = 'Posicionamiento';
$string['placement_help'] = 'Ustes puede colocar un paso, ya sea arriba de, debajo de, a la izquierda de o a la derecha del destino.

Las mejores opciones son arriba, o al fondo, ya que éstas se adaptan mejor a los dispositivos móviles.';
$string['pluginname'] = 'Tours para Usuarios';
$string['reflex'] = 'Mover al click';
$string['reflex_help'] = 'Mover hacia el paso siguiente cuando se haga click en el destino.';
$string['resettouronpage'] = 'Reiniciar el tour del usuario en esta página';
$string['resumetour'] = 'Resumen';
$string['right'] = 'Derecha';
$string['select_block'] = 'Seleccionar un bloque';
$string['selector_defaulttitle'] = 'Ingresar un título descriptivo';
$string['selectordisplayname'] = 'Un selector CSS que coincida con \'{$a}';
$string['select_targettype'] = 'Cada paso está asociado con una parte de la página que Usted debe de elegir. Para hacer esto más fácil, hay varios tipos de destinos para diferentes tipos de contenidos de páginas.
<dl>
<dt>Bloque</dt>
<dd>Mostrar el paso siguiente al primer bloque coincidente con el tipo en la página</dd>
<dt>Selector</dt>
<dd>Los selectores CSS son una forma poderosa que le permiten seleleccionar partes diferentes de la página basándose en metadatos incluidos dentro de la página.</dd>
<dt>Mostrar a mitad de la página</dt>
<dd>En lugar de asociar al paso con una parte específica de la página, Usted puede tenerla mostrada a la mitad de la página.</dd>
</dl>';
$string['selecttype'] = 'Seleccionar tipo de paso';
$string['sharedtourslink'] = 'Repositorio de tours';
$string['skip'] = 'Saltar';
$string['target'] = 'Destino';
$string['target_block'] = 'Bloque';
$string['target_selector'] = 'Seleccionador';
$string['target_selector_targetvalue'] = 'Selectores CSS';
$string['target_selector_targetvalue_help'] = 'Usted puede usar un "Selector CSS " para abarcar casi cualquier elemento en la página.

Los selectores CSS son muy poderosos y Usted puede encontrar fácilmente partes de la página al contruir gradualmente el selector.

Mozilla proporciona alguna [muy buena documentación](https://developer.mozilla.org/en/docs/Web/Guide/CSS/Getting_started/Selectors)
pára selectores que podría ayudarle para construir sus selectores.

Usted también encontrará que las herramientas para desarrollador de su navegador de Internet son extremadamente útiles para crear estos selectores:

* [Google Chrome](https://developer.chrome.com/devtools#dom-and-styles)
* [Mozilla Firefox](https://developer.mozilla.org/en-US/docs/Tools/DOM_Property_Viewer)
* [Microsoft Edge](https://developer.microsoft.com/en-us/microsoft-edge/platform/documentation/f12-devtools-guide/)
* [Apple Safari](https://developer.apple.com/library/iad/documentation/AppleApplications/Conceptual/Safari_Developer_Guide/ResourcesandtheDOM/ResourcesandtheDOM.html#//apple_ref/doc/uid/TP40007874-CH3-SW1)';
$string['targettype'] = 'Tipo de destino';
$string['target_unattached'] = 'Mostrar a media página';
$string['title'] = 'Título';
$string['title_help'] = 'Este es título mostrado en la parte superior del paso. Usted puede ingresar un título en los formatos siguientes: <dl>
 <dt>Texto simple</dt>
 <dd>Una descripción en texto simple</dd>
 <dt>Moodle MultiIdioma</dt>
 <dd>Una cadena de caracteres que usa el formato de Moodle MultiIdioma</dd>
 <dt>Cadena de caracteres Moodle traducida</dt>
 <dd>Un valor encontrado dentro de un archivo de idioma estándar de Moodle en el formato de identifier,component</dd>
 </dl>';
$string['top'] = 'Superior';
$string['tourconfig'] = 'Archivo de configuración del tour a importar';
$string['tourlist_explanation'] = 'Usted puede crear cuantos tours quiera y habilitarlos para diferentes partes de Moodle. Solamente puede crearse un solo tour por página.';
$string['tours'] = 'Tours';
$string['usertours'] = 'Tours para usuario';
$string['viewtour_info'] = 'Este es el tour \'{$a->tourname}\' . Aplica a la ruta \'{$a->path}\'.';
