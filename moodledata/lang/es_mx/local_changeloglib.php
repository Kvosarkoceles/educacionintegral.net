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
 * Strings for component 'local_changeloglib', language 'es_mx', branch 'MOODLE_34_STABLE'
 *
 * @package   local_changeloglib
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['deletion_backup_clean_task'] = 'Limpiar respaldos antiguos';
$string['pluginname'] = 'Changelog Lib';
$string['settings_diff_available'] = '<p>Se encontró programa de diferencias y puede ser usado para detectar cambios</p>';
$string['settings_diff_not_available'] = '<p>El programa <code>diferencias</code> no fue encontradop  en la ruta dada. Por favor pídale a su administrador del servidor que lo instale y que visite nuevamente esta página. Este mensaje desaparece si la herramienta es instalada correctamente.</p>';
$string['settings_diff_path'] = 'ruta hacia diff';
$string['settings_diff_path_help'] = 'La ruta hacia el programa diff de línea de comando. Se usa para comparar documentos de texto.';
$string['settings_pdftotext_available'] = '<p>El programa pdftotext fue encontrado y puede ser usado para detectar cambios</p>';
$string['settings_pdftotext_not_available'] = '<p>El programa pdftotext no fue encontradop  en la ruta dada. Por favor pídale a su administrador del servidor que corra  <code>apt-get install poppler-utils</code>  y que visite nuevamente esta página. Este mensaje desaparece si la herramienta es instalada correctamente.</p>';
$string['settings_pdftotext_path_help'] = 'La ruta hacia el programa de línea de comando pdftotext. Es usado para convertir documentos PDF antes de que puedan ser detectadas diferencias.';
$string['success'] = 'Éxito';
$string['warning'] = 'Advertencia';
