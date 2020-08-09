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
 * Strings for component 'quizaccess_safeexambrowser', language 'es_mx', branch 'MOODLE_38_STABLE'
 *
 * @package   quizaccess_safeexambrowser
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowedbrowserkeys'] = 'Teclas del navegador permitidas';
$string['allowedbrowserkeysdistinct'] = 'Todas las teclas deben ser diferentes';
$string['allowedbrowserkeys_help'] = 'En ésta caja Usted puede escribir las teclas permitidas para el Navegador de Examen Seguro para acceder a éste examen. Si no se escriben teclas, entonces es que no se requiere Navegador de Examen Seguro para éste examen.';
$string['allowedbrowserkeyssyntax'] = 'Usted debe escribir las teclas permitidas a razón de una por línea. Una tecla debe ser una cadena hexadecimal de 64-caracteres';
$string['allowedkeys_adv'] = 'las teclas son una configuración avanzada';
$string['allowedkeys_adv_desc'] = 'Si ésta opción está activada, entonces la lista de teclas permitidas del navegador es un campo avanzado en el formato de la configuración del examen.';
$string['pluginname'] = 'Regla de acceso al examen con Navegador de Examen Seguro';
$string['privacy:metadata'] = 'El plugin de la regla de acceso a examen con Navegador de Examen Seguro no almacena ningún dato personal.';
$string['safebrowserdownloadurl'] = 'URL para descargar el Navegador de examen Seguro';
$string['safebrowserdownloadurl_desc'] = 'Si Usted escribe aquí una URL, entonces se les dirá a los usuarios que pueden descargar la versión requerida del Navegador de Examen Seguro desde allí.';
$string['safebrowsermustbeused'] = 'Usted debe usar una versión aprobada del Navegador de Examen Seguro para intentar este examen.';
$string['safebrowsermustbeusedwithlink'] = 'Usted debe usar una versión aprobada del Navegador de Examen Seguro para intentar este examen. Lo puede descargar desde {$a->link}';
$string['safeexambrowser:exemptfromcheck'] = 'Eximir de la revisión del Navegador de Examen seguro';
