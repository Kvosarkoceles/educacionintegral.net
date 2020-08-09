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
 * Strings for component 'report_roster', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   report_roster
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allusers'] = 'Todos los usuarios';
$string['learningmodeoff'] = 'Modo aprendizaje desactivado';
$string['learningmodeon'] = 'Modo aprendizaje activado';
$string['param:mode'] = 'Modo de visualización';
$string['pluginname'] = 'Lista (Roster)';
$string['printmode'] = 'Imprimible';
$string['privacy:metadata'] = 'El reporte de lista (roster) solamente muestra datos almacenados en  otros sitios.';
$string['roster:view'] = 'Ver reporte de lista de curso';
$string['settings:displayname'] = 'Mostrar nombre';
$string['settings:displayname:default'] = 'Lista';
$string['settings:displayname:description'] = 'Esto se mostrará en la página del reporte y en el enlace de navegación plana (si se habilita debajo).';
$string['settings:fields'] = 'Campos de perfil a mostrar';
$string['settings:fields:default'] = 'fullname
currenttime %l:%M %p';
$string['settings:fields:description'] = 'Una lista de campos de perfil a mostrar en el reporte. Cada identificador de campo debería estar en una línea nueva. `fullname` (nombrecompleto) también está soportado.

IMPORTANTE: los campos personalizados del perfil deben ser ingresados como "profile_field_{shortname}".';
$string['settings:flatnav'] = '¿Mostrar en navegación plana?';
$string['settings:flatnav:description'] = 'Si se activa, un enlace al reporte de Lista será añadido a la navegación plana de Boost.
(Bajo temas más antiguos como More-Más, aparecerá en el bloque de Navegación debajo de Curso actual > {coursename})';
$string['settings:flatnav_position'] = 'Posición en navegación plana';
$string['settings:flatnav_position:default'] = 'badgesview (Insignias)
competencies (Competencias)
grades (Calificaciones)
participants (Participantes)';
$string['settings:flatnav_position:description'] = 'Un enlace hacia el reporte será añadido *arriba* del enlace en la parte superior de esta lista.
Si no es encontrado, se intentará el siguiente en la lista, y así sucesivamente. La primera palabra en cada línea es el identificador del enlace; todo lo que siga es ignorado (para que los identificadores puedan ser etiquetados). Los nodos principales de navegación del curso están incluidos por defecto; los identificadores para nodos adicionales pueden ser obtenidos al buscar en la propiedad `data-key` (clave-de-datos) del `<a>`relevante.';
$string['settings:headings:flatnav'] = 'Configuraciones de Navegación Plana';
$string['settings:headings:general'] = 'Configuraciones Generales';
$string['settings:headings:size'] = 'Configuraciones de Tamaño de Imagen del Usuario';
$string['settings:size_default'] = 'Tamaño predterminado';
$string['settings:size_default:description'] = 'Tamaño predeterminado de la imagen del usuario (cuando abre por primera vez el reporte)';
$string['settings:size_large'] = 'Tamaño; Grande';
$string['settings:size_large:description'] = 'Tamaño en pixeles de la imagen del usuario para "Grande"';
$string['settings:size_medium'] = 'Tamaño: Mediano';
$string['settings:size_medium:description'] = 'Tamaño en pixeles de la imagen del usuario para "Mediano"';
$string['settings:size_small'] = 'Tamño: Pequeño';
$string['settings:size_small:description'] = 'Tamaño en pixeles de la imagen del usuario para "Pequeño"';
$string['size:large'] = 'Grande';
$string['size:medium'] = 'Mediano';
$string['size:small'] = 'Pequeño';
$string['webmode'] = 'Reporte Web';
