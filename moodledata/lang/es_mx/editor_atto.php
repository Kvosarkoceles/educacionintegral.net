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
 * Strings for component 'editor_atto', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   editor_atto
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autosavefailed'] = 'No pudo conectarse al servidor. Si Usted envía ahora esta página pueden perderse sus cambios.';
$string['autosavefrequency'] = 'Frecuencia  de auto-guardar';
$string['autosavefrequency_desc'] = 'Estos son los segundos que trasncurren entre los intentos de auto-guardar. Atto guarda automáticamente el texto en el editor, de acuerdo a esta configuración, de forma tal que el texto pueda restaurarse automáticamente cuando el mismo usuario regrese al mismo formato.';
$string['autosaves'] = 'Información de autoguardado del editor';
$string['autosavesucceeded'] = 'Borrador guardado.';
$string['editor_command_keycode'] = 'Cmd + {$a}';
$string['editor_control_keycode'] = 'Ctrl + {$a}';
$string['errorcannotparseline'] = 'La línea \'{$a}\' no está en el formato correcto.';
$string['errorgroupisusedtwice'] = 'El grupo \'{$a}\' está definido dos veces; los nombres de grupo deben de ser únicos.';
$string['errornopluginsorgroupsfound'] = 'No se encontraron plugins o grupos; por favor, añada algunos grupos y plugins.';
$string['errorpluginisusedtwice'] = 'El plugin \'{$a}\' está usado dos veces; los plugins solamente pueden definirse una vez.';
$string['errorpluginnotfound'] = 'El plugin \'{$a}\' no puede usarse; aparentemente no está instalado.';
$string['errortextrecovery'] = 'Desafortunadamente no pudo restaurarse la versión en borrador.';
$string['infostatus'] = 'Información';
$string['pluginname'] = 'Editor Atto HTML';
$string['plugin_title_shortcut'] = '{$a->title} [{$a->shortcut}]';
$string['privacy:metadata:database:atto_autosave'] = 'Borradores del editor que fueron guardados automáticamente.';
$string['privacy:metadata:database:atto_autosave:drafttext'] = 'El texto que fue guardado.';
$string['privacy:metadata:database:atto_autosave:timemodified'] = 'La hora en que fue modificado el contenido.';
$string['privacy:metadata:database:atto_autosave:userid'] = 'La ID del usuario cuyos datos fueron guardados.';
$string['recover'] = 'Recuperar';
$string['settings'] = 'Configuraciones de barra_de_herramientas Atto';
$string['subplugintype_atto'] = 'Plugin Atto';
$string['subplugintype_atto_plural'] = 'Plugins Atto';
$string['taskautosavecleanup'] = 'Eliminar borradores auto-grabados caducos';
$string['textrecovered'] = 'Se restauró automáticamente una versión de borrador de este texto.';
$string['toolbarconfig'] = 'Configuración de barra_de_herramientas';
$string['toolbarconfig_desc'] = 'La lista de plugins y el orden en el que se muestran puede configurarse aquí. La configuración consiste en grupos (uno por línea) seguidos por la lista ordenada de plugins para ese grupo. El grupo está separado de los plugins con un signo de igual y los plugins están separados por comas. El nombre del grupo debe ser único y debería de indicar lo que tienen en común los botones. Los nombres de grupo y de botones no deben repetirse y solamente pueden contener caracteres alfanuméricos.';
$string['warningstatus'] = 'Advertencia';
