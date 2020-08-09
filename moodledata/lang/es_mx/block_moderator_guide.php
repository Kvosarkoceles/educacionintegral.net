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
 * Strings for component 'block_moderator_guide', language 'es_mx', branch 'MOODLE_38_STABLE'
 *
 * @package   block_moderator_guide
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Acciones';
$string['addguide'] = 'Añadir guía';
$string['addguidehelp'] = 'Para añadir una guía, use el Bloque de Guía para Moderador desde cualquier página principal de curso.';
$string['addtemplate'] = 'Añadir plantilla';
$string['author'] = 'Autor original';
$string['cancel'] = 'Cancelar';
$string['cancomplete'] = 'Permitirle a los editores de la guía que marquen la guía como completada.';
$string['canreview'] = 'Permitirle a los editores de la guía que marquen la guía como revisada y que dejen un comentario.';
$string['completed'] = 'Completada';
$string['configmoderation'] = 'Moderación';
$string['configmoderationdesc'] = 'Permitirle a los editores de la guía que marquen la guía como completada, y que otras personas revisen el contenido de la guía.';
$string['configtitle'] = 'Título';
$string['confirmdeleteguide'] = 'Confirmación para eliminar guía';
$string['confirmdeleteguidetext'] = '¿Realmente quiere eliminar esta guía: {$a->name} ?';
$string['confirmdeletetemplate'] = 'Confirmación para eliminar plantilla';
$string['confirmdeletetemplatetext'] = '¿Realmente quiere eliminar esta platilla: {$a->name} ?';
$string['course'] = 'Curso';
$string['defaultguidename'] = 'Nombre por defecto de guía';
$string['delete'] = 'Eliminar';
$string['description'] = 'Descripción';
$string['editguide'] = 'Editar guía';
$string['edittemplate'] = 'Editar plantilla';
$string['guide'] = 'Guía';
$string['guides'] = 'Guías';
$string['hide'] = 'Ocultar';
$string['manageguides'] = 'Gestionar guía';
$string['managetemplates'] = 'Gestionar plantillas';
$string['managetemplatesdesc'] = '<strong>Ocultar</strong>: la plantilla ya no estará más disponible para crear las guías. Sin embargo, las guías existententes continuan estando disponibles.<br/>
<strong>Eliminar</strong>: eliminará las plantillas y las guías que usen esta plantilla.<br/>
<strong>Editar</strong>: solamente serán editables el nombre, la organización y la descripción cuando una guía haya sido creada con esta plantilla.<br/>
<strong>Guías</strong>: disponible solamente cuando una guía haya sido creada con esta plantilla.';
$string['moderation'] = 'Sección de moderación';
$string['moderatorcomment'] = 'Comentario del moderador';
$string['moderator_guide:addinstance'] = 'Puede añadir una instancia del Bloque de Guía para Moderador';
$string['moderator_guide:cancomplete'] = 'Puede marcar una guía como completada';
$string['moderator_guide:canreview'] = 'Puede revisar una guía';
$string['moderator_guide:canviewcomplete'] = 'Puede ver estado de finalización';
$string['moderator_guide:canviewreview'] = 'Puede ver los comentarios de revisión (cualquier estado: revisado/completado/ninguno)';
$string['moderator_guide:editguide'] = 'Puede editar una instancia del Bloque de Guía para Moderador';
$string['moderator_guide:edittemplate'] = 'Puede editar una plantilla de Guía para Moderador';
$string['moderator_guide:myaddinstance'] = 'Puede(n) añadir una instancia del Bloque de Guía para Moderador en sus tableros';
$string['moderator_guide:viewguide'] = 'Puede ver una Guía para Moderador';
$string['moderator_guide:viewguidestatus'] = 'Puede ver todas las estadísticas de guías de cursos';
$string['moderator_guide:viewtemplate'] = 'Puede ver una plantilla de Guía para Moderador';
$string['name'] = 'Nombre';
$string['noguidesforthiscourse'] = 'Sin guías para este curso';
$string['notemplate'] = 'Sin plantillas - su administrador necesita primeramente crear y mostrar al menos una plantilla.';
$string['organization'] = 'Organización';
$string['organizations'] = 'Organizaciones';
$string['pluginname'] = 'Guía para Moderador';
$string['previewguide'] = 'Vista previa';
$string['profilerestriction'] = 'Restringir por Campo de Perfil del Usuario';
$string['profilerestrictiondesc'] = 'Restringir plantillas visibles a profesores basándose en este campo. Ingrese por ejemplo, "organization" , que es un nombre_corto de un campo de perfil personalizado. Si el valor de ese campo está vacío, entonces los profesores verán todas las plantillas. Si está poblado, por ejemplo, si nosotros ingresamos "organization" en ese campo, entonces las plantillas estarán restringidas por el valor de organization (en cada plantilla)';
$string['reviewcomment'] = 'Revisar comentario';
$string['reviewed'] = 'Revisada';
$string['sectionx'] = 'Sección {$a->id}';
$string['show'] = 'Mostrar';
$string['template'] = 'Plantilla';
$string['templateexample'] = '<pre><i>Este es un ejemplo; siéntase con libertad para editarlo como desee.</i></pre>
<h3>Sugerencias para calificar para calificador externo</h3>
<p>Si Usted es un calificador externo, este documento le ayudará a conocer como calificar este curso.</p>
<pre><i>La línea siguiente es un reemplazable (placeholder) del editor. Será remplazada por un editor HTML de Moodle en la página para la "Guía para AñadirEditar" :</i></pre>
<p>[1:html]</p>
<br/>
<p>Usted debe de revisar los siguientes requisitos:</p>
<pre><i>Las líneas siguientes también son un reemplazable (placeholder) del editor; sin embargo, estos reemplazables más complejos contienen algunos textos HTML por defecto (aquí requisitos) que serán mostrados adentro del editor. Esto le ayuda a Usted para darle ejemplos al profesor.</i></pre>
<p>[2:html:BEGIN]</p>
<ul>
<li>requisitos A</li>
<li>requisitos B</li>
<li>requisitos C</li>
</ul>
<p>[2:html:END]</p>
<br/>
<p>Nosotros le recomendamos qque lea los siguientes archivos:</p>
<pre><i>La línea siguiente es un remplazable del gestor de archivo. Será remplazada por un gestor de archivo de Moodle en la página para  "Añadir/Editar guía" :</i></pre>
<p>[3:files]</p>
<br/>
<p>Referencias del Gobierno Nacional:</p>
<pre><i>La línea siguiente es un remplazable de enlace. Será remplazada por 2 campos de texto (url y nombre del enlace) en  la página para "Añadir/Editar guía" :</i> </pre>
<p>[4:link]</p>
<br/>
<pre><i>La línea siguiente es un remplazable de enlace con un nombre de enlace prellenado (solamente se mostrará el texto y el HTML será ignorado):</i> </pre>
<p>[5:link:BEGIN]<br/>Haga clic aquí para acceder al sitio del departamento<br/>[5:link:END]</p>
<p><br/>Gracias,<br>Universidad de la Ciencia</p>';
$string['warningdeletetemplate'] = 'ADVERTENCIA: Usted está a punto de eliminar las guías siguientes:';
