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
 * Strings for component 'local_boostnavigation', language 'es_mx', branch 'MOODLE_38_STABLE'
 *
 * @package   local_boostnavigation
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['inc_bottomnodes'] = 'nodos del fondo';
$string['inc_bottomnodeslocation'] = 'debajo de la sección principal en el cajón de navegación (similar al nodo de "administración del sitio")';
$string['inc_coursenode'] = 'nodo del curso';
$string['inc_coursenodes'] = 'nodos del curso';
$string['inc_coursenodeslocation'] = 'a la sección del curso en el cajón de navegación (donde están localizados los nodos para los tópicos del curso)';
$string['inc_custombottomnodes'] = 'nodos personalizados del fondo';
$string['inc_customcoursenodes'] = 'nodos personalizados del fondo';
$string['inc_customrootnodes'] = 'nodos personalizados de raíz';
$string['inc_customwhoadmins'] = 'administradores';
$string['inc_customwhousers'] = 'todos los usuarios';
$string['inc_notselectedhomenode'] = 'Tablero / Inicio no seleccionado';
$string['inc_rootnode'] = 'nodo raíz';
$string['inc_rootnodes'] = 'nodos raíz';
$string['inc_rootnodeslocation'] = 'a la sección principal en el cajón de navegación (donde están localizados los nodos de "Mis cursos" y otros)';
$string['inc_selectedhomenode'] = 'Página Inicial seleccionada / Tablero';
$string['pluginname'] = 'Modificación de la navegación en Boost';
$string['privacy:metadata:preference:collapse'] = 'El estado del colapso de un nodo de navegación en el cajón de navegación.';
$string['privacy:request:preference:collapse'] = 'El estado del colapso de un nodo de navegación "{$a->nodename}" en el cajón de navegación es {$a->collapse}';
$string['setting_collapsecustomnodes'] = 'Colapsar {$a->what} para {$a->who}';
$string['setting_collapsecustomnodesaccordion'] = 'Colapsar {$a->what} para {$a->who} como acordeón';
$string['setting_collapsecustomnodesaccordion_desc'] = 'Habilitar esta configuración colapsará el/la {$a->what} para {$a->who} como un acordeón.';
$string['setting_collapsecustomnodesdefault'] = 'Colapsar {$a->what} para {$a->who} por defecto';
$string['setting_collapsecustomnodesdefault_desc'] = 'Habilitar esta configuración colapsará el/la {$a->what} para {$a->who} por defecto.';
$string['setting_collapsecustomnodessession'] = 'recordar estado de colapso {$a->what} para {$a->who} solamente para sesión actual';
$string['setting_collapsemycoursesnodeperformancehint'] = 'Por favor tenga en cuenta que: Esta característica solamente funciona si la configuración <a href="/admin/search.php?query=navshowmycoursecategories">navshowmycoursecategories</a> no está activa. Si SUsted habilitó navshowmycoursecategories, esta configuración será ignorada y no hará nada,';
$string['setting_collapsenode'] = 'Colapsar {$a->what} "{$a->which}"';
$string['setting_collapsenodedefault'] = 'Colapsar {$a->what} "{$a->which}" por defecto';
$string['setting_collapsenodedefault_desc'] = 'Habilitar esta configuración colapsará el/la {$a->what} "{$a->which}" por defecto.';
$string['setting_collapsenode_desc'] = 'Habilitar esta configuración les permitirá a los usuarios colapsar el/la {$a->what} "{$a->which}".';
$string['setting_collapsenodesession'] = 'Recordar estado de colapso de {$a->what} "{$a->which}" solamente para sesión actual';
$string['setting_collapsenodesheading'] = 'Colapsar {$a->what} en cajón de navegación de Boost';
$string['setting_collapsenodestechnicalhint'] = 'Antecedentes técnicos: esto se hace agregando código JavaScript y CSS a la página que mostrará u ocultará los nodos de segundo nivel tan pronto como el usuario haga clic en el nodo. El estado de colapso del nodo se almacenará en la sesión de cada usuario. Por lo tanto, los nodos solo se ocultarán del cajón de navegación en el tiempo de ejecución, pero permanecerán en el árbol de navegación y otras partes de Moodle podrán seguir accediendo a ellos.';
$string['setting_customnodesusageadminsexample'] = 'Sitio  Moodle.org |http://www.moodle.org|en,es<br />
Lista de usuarios Moodle|/admin/user.php';
$string['setting_customnodesusagechildnodes'] = 'Los nodos personalizados se pueden anidar con un nivel de jerarquía, es decir, un nodo personalizado puede tener nodos secundarios. Cree un nodo secundario en lugar de un nodo padre, simplemente prefija el título del nodo personalizado con un guión.';
$string['setting_customnodesusagechildnodesexample'] = 'Administración|/admin/index.php<br />
-Lista de usuarios Moodle|/admin/user.php<br />
-Gestionar cursos|/course/management.php';
$string['setting_customnodesusagechildnodespleasenoterecursive'] = 'Si un nodo paterno no es mostrado por causa de que aplica una restricción (idioma, cohorte, rol...), sus hijos tampoco serán mostrados.';
$string['setting_customnodesusagechildnodespleasenoteurl'] = 'Por razones técnicas, un nodo paterno siempre necesita una URL válida, aunque el nodo sea hecho colapsible después.';
$string['setting_customnodesusageexamples'] = 'Ejemplos:';
$string['setting_customnodesusageparameterbeforenodedt'] = 'Clave antes del nodo (opcional):';
$string['setting_customnodesusageparametercohortdt'] = 'Cohorte(s) soportada(s) (opcional):';
$string['setting_customnodesusageparametericondt'] = 'Ícono (opcional):';
$string['setting_customnodesusageparameteriddt'] = 'Atributo Data-key (opcional):';
$string['setting_customnodesusageparameterlanguagedt'] = 'Idioma(s) soportado(s) (opcional):';
$string['setting_customnodesusageparameterlinkdd'] = 'El destino del enlace puede estar definido por una URL web completa (por ejemplo https://moodle.org) o por una ruta relativa dentro de su instancia de Moodle (por ejemplo /login/logout.php).';
$string['setting_customnodesusageparameterlinkdt'] = 'Enlace:';
$string['setting_customnodesusageparameterlogicaldt'] = 'Operador de combinaciónlógica (opcional):';
$string['setting_customnodesusageparameterroledt'] = 'Rol(es) soportado(s) (opcional):';
$string['setting_customnodesusageparameters'] = 'Más información a los parámetros:';
$string['setting_customnodesusageparametersystemroledt'] = 'Rol(es) del sistema soportado(s) (opcional):';
$string['setting_customnodesusageparametertitledd'] = 'Este texto será mostrado como la etiqueta / texto que se puede seleccionar del nodo personalizado.';
$string['setting_customnodesusageparametertitledt'] = 'Título:';
$string['setting_customnodesusagepleasenote'] = 'Por favor tenga en cuenta:';
$string['setting_customnodesusagepleasenotecheck'] = 'Si el nodo personalizado no se muestra en el cajón de navegación de Boost, por favor revise que todos los parámetros obligatorios estén configurados correctamente; si la configuración de idioma opcional coincide con su idioma de usuario actual y si sus otros parámetros opcionales aplican a su usuario.';
$string['setting_customnodesusagepleasenotemultilang'] = 'El parámetro del título puede contener <a href="https://docs.moodle.org/en/Multi-language_content_filter">multilanguage strings</a> para crear un nodo con una etiqueta que depende del idioma actual del usuario..';
$string['setting_customnodesusagepleasenotephavailable'] = 'Reemplazbles disponibles son:';
$string['setting_customnodesusagepleasenotephcoursefullnamedd'] = 'El nombre completo del curso';
$string['setting_customnodesusagepleasenotephcourseiddd'] = 'ID (interna) del curso';
$string['setting_customnodesusagepleasenotephcourseshortnamedd'] = 'El nombre corto del curso';
$string['setting_customnodesusagepleasenotepheditingtitledd'] = 'El valor para \'Activar la edición\' o \'Desactivar la edición\' del paquete de idioma actualmente usado';
$string['setting_customnodesusagepleasenotephexplanation'] = 'Los remplazables estarán encapsulados entre {paréntesis curvados} y serán remplazados automáticamente cuando el nodo personalizado sea creado.';
$string['setting_customnodesusagepleasenotephpagecontextiddd'] = 'ID del contexto de la página actual';
$string['setting_customnodesusagepleasenotephpagepathdd'] = 'la ruta del URL de la página actual';
$string['setting_customnodesusagepleasenotephsesskeydd'] = 'La seskey a usar en URLs inseguras';
$string['setting_customnodesusagepleasenotephuserfullnamedd'] = 'Elnombre completo del usuario ingresado al sitio';
$string['setting_customnodesusagepleasenotephuseriddd'] = 'La ID (interna) del usuario ingresado al sitio';
$string['setting_customnodesusagepleasenotephuserusernamedd'] = 'El nombre_de_usuario del usuario ingresado al sitio';
$string['setting_customnodesusagepleasenotepipes'] = 'El caracter de barra vertical | para parámetros opcionales siempre es necesario si están localizados entre otras opciones. Esto significa que Usted tiene que separar los parámetros con el caracter de barra vertical | aunque estuvieran vacíos. También vea el ejemplo para la Facultad de Matemáticas del nodo personalizado de matemáticas de arriba.';
$string['setting_customnodesusagepleasenotetitle'] = 'El parámetro del título puede contener remplazables, como por ejemplo {coursefullname} para crear un nodo etiquetado con el nombre completo del curso actual.';
$string['setting_customnodesusageusersexample'] = 'Sitio moodle.org |http://www.moodle.org|en,es<br />
Nuestra Universidad|http://www.our-university.edu<br />
Facultad de matemáticas|http://www.our-university.edu/math||math<br />
Manual del profesor|http://www.our-university.edu/teacher-handbook|||editingteacher,teacher<br />
Curso de información para estudiantes|/course/view.php?id=1234||||||fa-graduation-cap<br />
{editingtoggle}|/course/view.php?id={courseid}&sesskey={sesskey}&edit={editingtoggle}|||editingteacher|admin,manager|OR|fa-pencil|editing|participants';
$string['setting_insertactivitiescoursenodeexplanation'] = 'Este nodo conservará los nodos que enlazan a las páginas de vista general de la actividad. Básicamente trae la funcionalidad existente del bloque "Actividades" al cajón de navegación de Boost.';
$string['setting_insertcoursesectionscoursenodecorehint'] = 'Por favor tenga en cuenta que: Esta característica solamente funcionará si la configuración <a href="{$a->url}">linkcoursesections</a> está activa. Si Usted deshabilitó linkcoursesections, esta configuración será ignorada y no hará nada.';
$string['setting_insertcoursesectionscoursenodeexplanation'] = 'El nodo será puesto arriba de la primera sección del curso actual.';
$string['setting_insertcustomnodes'] = 'Insertar {$a->what} para {$a->who}';
$string['setting_insertcustomnodes_desc'] = 'Con esta configuración, Usted puede insertar {$a->what} al cajón de navegación de Boost y esto será añadido  {$a->where} y será mostrado a {$a->who}.';
$string['setting_insertnode'] = 'Insertar {$a->what} "{$a->which}"';
$string['setting_insertnode_desc'] = 'Habilitar esta configuración insertará un(a) {$a->what} "{$a->which}" al cajón de navegación de Boost.';
$string['setting_insertnodescollapsehint'] = 'Por favor tenga en cuenta que el nodo insertado tiene un enlace de acción que conduce a la página inicial del curso porque Boost no soporta adicionar nodos sin un enlace de acción. El enlace de acción será anulado tan pronto como Usted también habilite la configuración para colapsar el nodo al mismo tiempo.';
$string['setting_insertnodesheading'] = 'Insertar {$a->what} al cajón de navegación de Boost';
$string['setting_removecoursenodestechnicalhint'] = 'Técnicamente, esto se hace al quitar el nodo del árbol de navegación. Así, el nodo ya no puede ser accesado por otras partes de Moodle. En configuraciones normales de Moodle, optimísticamente esto no debería de causar ningun problema.';
$string['setting_removegradescoursenodeexplanation'] = 'El nodo es eliminado para todos los usuarios, sin importar las capacidades de un usuario y sin importar la configuración \'Mostrar libro de calificaciones a estudiantes\' en las configuraciones del curso.';
$string['setting_removemycoursesnodeperformancehint'] = 'Por favor tenga en cuenta que: si Usted habilita esta configuración y también tiene habilitada la configuración <a href="/admin/search.php?query=navshowmycoursecategories">navshowmycoursecategories</a>, el quitar el nodo "Mis cursos" toma más tiempo y Usted debería de considerar deshabilitar la configuración navshowmycoursecategories.';
$string['setting_removenode'] = 'Quitar {$a->what} "{$a->which}"';
$string['setting_removenode_desc'] = 'Habilitar esta configuración quitará el/la {$a->what} "{$a->which}" al cajón de navegación de Boost.';
$string['setting_removenodesheading'] = 'Quitar {$a->what} del cajón de navegación de Boost';
$string['setting_removenotselectedhomerootnodeexplanation'] = 'El nodo de Tablero / Inicio no seleccionado está definido por lo que el usuario elija que no sea su página de inicio.';
$string['setting_removeparticipantscoursenodeexplanation'] = 'El nodo es eliminado para todos los usuarios, sin importar las capacidades de un usuario.';
$string['setting_removeselectedhomerootnodeexplanation'] = 'El nodo del Inicio / Tablero seleccionado está definido por lo que el usuario elige para que sea su página inicial.';
$string['settingspage_bottomnodes'] = 'Nodos del fondo';
$string['settingspage_coursenodes'] = 'Nodos del curso';
$string['settingspage_custombottomnodes'] = 'Nodos personalizados del fondo';
$string['settingspage_customcoursenodes'] = 'Nodos personalizados del curso';
$string['settingspage_customrootnodes'] = 'Nodos personalizados de raíz';
$string['settingspage_rootnodes'] = 'Nodos de raíz';
