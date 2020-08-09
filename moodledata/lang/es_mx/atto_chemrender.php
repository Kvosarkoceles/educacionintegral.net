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
 * Strings for component 'atto_chemrender', language 'es_mx', branch 'MOODLE_27_STABLE'
 *
 * @package   atto_chemrender
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['browserepositories'] = 'Ojear repositorios...';
$string['chemdoodle'] = 'ChemDoodle';
$string['enterfilename'] = 'Ingrese un nombre de archivo';
$string['enterurl'] = 'Ingrese un archivo de molécula (.mol, .pdb, .cml, etc.) o archivo de espectro (.jdx)';
$string['height'] = 'Altura';
$string['jmol'] = 'JMol';
$string['jmoloptions'] = 'Opciones JMol';
$string['optionaxis'] = 'Etiquetas del eje para espectro';
$string['optionconsolecommand'] = 'Comandos de consola';
$string['optionconsolecommandhelp'] = 'Ayuda para comandos de consola JMol';
$string['optionconsolecommand_help'] = 'Personalize la visualización de la molécula usando comandos de consola (así como están, en idioma inglés).

* Documentación de los comandos en idioma inglés: http://chemapps.stolaf.edu/jmol/docs
* Colores: http://jmol.sourceforge.net/jscolors

Ejemplos:

* "select all; label on; select hydrogen; label off;"

Etiquetar todos los átomos con sus símbolos atómicos y números atómicos, excepo para átomos de hidrógeno.

* "restrict :a; spacefill; color temperature;"

Renderizar átomos como esferas sombreadas con color basado en propiedad de temperatura.

* "ribbon only; select all; color group;"

Renderizar como cintas y color basándose en grupo.

* "select all; wireframe off; spacefill off; select protein or dna; cartoons on; color chain; select cd; spacefill on; color FFD98F;"

Renderizar proteína o ADN como caricaturas con colores basados en cadena. Renderizar átomos de Cadmio (Cd) como esferas sombreadas con un color amarillo cadmio.

* "spin on;"

Hacer que la molécula gire (spin).';
$string['optiondownloadlink'] = 'Mostrar enlace para descarga';
$string['optionhelplink'] = 'Mostrar enlace para descarga';
$string['optionlabel'] = 'Mostrar opción etiqueta si/no';
$string['optionspin'] = 'Mostrar opción giro (spin) si/no';
$string['optionstyleselect'] = 'Mostrar selección de estilo';
$string['optionxaxis'] = 'Etiqueta Eje_x';
$string['optionyaxis'] = 'Etiqueta Eje_y';
$string['pluginname'] = 'ChemRender';
$string['preview'] = 'Previsualizar';
$string['rendererselection'] = 'Seleccionar renderizador';
$string['submit'] = 'Enviar';
$string['width'] = 'Ancho';
