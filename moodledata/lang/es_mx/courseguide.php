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
 * Strings for component 'courseguide', language 'es_mx', branch 'MOODLE_38_STABLE'
 *
 * @package   courseguide
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Acciones';
$string['addguide'] = 'Añadir guía';
$string['addguidehelp'] = 'Para añadir una guía añada una actividad desde cualquier página principal de curso.';
$string['addtemplate'] = 'Añadir plantilla';
$string['any'] = 'Cualquiera';
$string['author'] = 'Autor original';
$string['cancel'] = 'Cancelar';
$string['cannotaccessguide'] = 'Usted no puede acceder a la guía; la organización de la guía probablemente está configurada a una organización diferente. Contacte a su administrador.';
$string['collapsable'] = 'Colapsable';
$string['confirmdeleteguide'] = 'Confirmación de eliminación de guía';
$string['confirmdeleteguidetext'] = '¿Realmente desea eliminar esta guía: {$a->name} ?';
$string['confirmdeletetemplate'] = 'Confirmación de eliminación de plantilla';
$string['confirmdeletetemplatetext'] = '¿Realmente desea eliminar esta plantilla: {$a->name} ?';
$string['course'] = 'Curso';
$string['courseguide'] = 'Guía de curso';
$string['courseguide:addinstance'] = 'Añadir una nueva guía de curso';
$string['courseguide:editguide'] = 'Puede editar una guía de curso';
$string['courseguide:edittemplate'] = 'Puede editar una plantilla de guía de curso';
$string['courseguidefieldset'] = 'Conjunto_de_campo de ejemplo personalizado';
$string['courseguidename'] = 'Nombre de guía de curso';
$string['courseguidename_help'] = 'Este es el contenido de la herramienta de ayuda asociada con el campo de nombre de guía de curso. La sintaxis Markdown está soportada.';
$string['courseguide:submit'] = 'Enviar una guía de curso';
$string['courseguide:view'] = 'Ver una guía de curso';
$string['courseguide:viewguide'] = 'Puede ver una guía de curso';
$string['courseguide:viewtemplate'] = 'Puede ver una plantilla de guía de curso';
$string['defaultdisplaymode'] = 'Modo de visualización por  defecto';
$string['defaultguidename'] = 'Nombre sugerido de guía';
$string['delete'] = 'Eliminar';
$string['description'] = 'Descripción';
$string['displaymode'] = 'Modo de visualización';
$string['editguide'] = 'Editar guía';
$string['edittemplate'] = 'Editar plantilla';
$string['guide'] = 'Guía';
$string['guides'] = 'guías';
$string['hide'] = 'Ocultar';
$string['inline'] = 'En-línea';
$string['manageguides'] = 'Gestionar guías';
$string['managetemplates'] = 'Gestionar plantillas';
$string['managetemplatesdesc'] = '<strong>Ocultar</strong>: la plantilla ya no estará más disponible para crear las guías. Sin embargo, las guías existentes siguen estando disponiblese.<br/>
<strong>Eliminar</strong>: eliminará laplantilla - solamente disponible cuando ninguna actividad usa la plantilla.<br/>
<strong>Editar</strong>: solamente serán editables el nombre, organización y descripción cuando una actividad guía haya sido creada con esta plantilla.<br/>
<strong>Guías</strong>: solamente disponible cuando una actividad guía haya sido creada con esta plantilla.';
$string['modulename'] = 'Guía de curso';
$string['modulename_help'] = 'El módulo de guía de curso permite crear plantillas de formato para que sean usadas por profesores para crear cualquier tipo de guía para los estudiantes.';
$string['modulenameplural'] = 'Guías de curso';
$string['moodle'] = 'Enlace';
$string['mustaddguide'] = 'Haga clic en "Editar guía" para seleccionar una plantila y crear la guía.';
$string['name'] = 'Nombre';
$string['noguide'] = 'Todavía no se han creado guías.';
$string['notemplate'] = 'Sin plantillas - su administrador debe primeramente crear y mostrar al menos una plantilla.';
$string['organization'] = 'Organización';
$string['organizations'] = 'Organizaciones';
$string['pluginadministration'] = 'Adminsitración de guía de curso';
$string['pluginname'] = 'Guía de curso';
$string['previewguide'] = 'Vista previa';
$string['show'] = 'Mostrar';
$string['template'] = 'Plantilla';
$string['templateexample'] = '<pre><i>Este es un ejemplo; siéntase con libertad para editarlo tanto como quiera.</i></pre>
<h3>Consejos para el estudiante</h3>
<p>Si Usted es un estudiante, este documento le ayudará a conocer como estudiar este curso.</p>
<pre><i>La siguiente línea es un remplazable editable. Será remplazado por un editor HTML de Moodle en la página para "Añadir/Editar guía":</i></pre>
<p>[1:html]</p>
<br/>
<p>Usted debe de revisar estos requisitos:</p>
<pre><i>Las líneas siguientes también son un remplazable editable; sin embargo, estos remplazables más complejos contienen un poco de HTML por defecto (aquí son los requisitos) que serán mostrados adentro del editor. Le ayuda a Usted a proporcionarles algunos ejemplos al estudiante.</i></pre>
<p>[2:html:BEGIN]</p>
<ul>
<li>requisitos A</li>
<li>requisitos B</li>
<li>requisitos C</li>
</ul>
<p>[2:html:END]</p>
<br/>
<p>Nosotros le recomendamos que lea los siguientes archivos:</p>
<pre><i>La línea siguiente es un reemplazable de gestor de archivos. Será remplazada por un gestor de archivos de Moodle en la página para "Añadir/Editar guía":</i></pre>
<p>[3:files]</p>
<br/>
<p>Sugerencias generales para estudiar:</p>
<pre><i>La línea siguiente es un reemplazable de enlace con un nombre del enlace pre-llenado.Será remplazado por dos campos de texto (URL y nombre del enlace) en la página para "Añadir/Editar guía":</i> </pre>
<p>[4:link]</p>
<br/>
<pre><i>La línea siguiente es un reemplazable de enlace con un nombre del enlace pre-llenado (solamente se mostrará texto, el HTML será ignorado):</i> </pre>
<p>[5:link:BEGIN]<br/>Haga clic aquí para acceder a la página web propia del profesor<br/>[5:link:END]</p>
<p><br/>Gracias,<br>Universidad de la Ciencia</p>';
$string['viewguides'] = 'Lista de Guías';
$string['warningconfigmoderationdesc'] = '<br/><strong>Nota:</strong> eesta configuración es, de hecho, la configuración de moderación del Bloque de Guía del Moderador. La actividad de Guía del Curso usa esta configuración del  Bloque de Guía del Moderador. Nosotros la mostramos en esta página para su conveniencia, para que Usted la pueda guarda desde aquí también.';
$string['warningdeletetemplate'] = 'ADVERTENCIA: Usted también eliminará las siguientes guías:';
$string['warningprofilerestrictiondesc'] = '<br/><strong>Nota:</strong> esta configuración es, de hecho, la configuración de restricción del Bloque de Guía del Moderador.
La actividad de Guía del Curso usa esta configuración del Bloque de Guía del Moderador. Nosotros la mostramos en esta página para su conveniencia, para que Usted también pueda guardarla desde aquí.';
