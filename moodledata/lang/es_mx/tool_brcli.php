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
 * Strings for component 'tool_brcli', language 'es_mx', branch 'MOODLE_38_STABLE'
 *
 * @package   tool_brcli
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['directoryerror'] = 'Error: ¡El directorio de destino no existe o no es escribible!';
$string['helpoptionbck'] = 'Realizar respaldo de los cursos de una categoría específica.

Opciones:
--categoryid=NÚMERO ENTERO de la ID de la Categoría para el respaldo.
--destination=CADENA DE CARACTERES de la ruta en donde guardar el archivo de respaldo.
-h, --help Imprimir esta ayuda.

Ejemplo:
sudo -u www-data /usr/bin/php admin/tool/brcli/backup.php --categoryid=1 --destination=/moodle/backup/';
$string['helpoptionres'] = 'Restaurar todos los archivos de respaldo que pertenecen a una carpeta específica.

Opciones:
--categoryid=NÚMERO ENTERO de la ID de la Categoría donde debe ser restaurado el respaldo.
--source=CADENA DE CARACTERES de la ruta en donde están los archivos de respaldo (.mbz).
-h, --help Imprimir esta ayuda.

Ejemplo:
sudo -u www-data /usr/bin/php admin/tool/brcli/restore.php --categoryid=1 --source=/moodle/backup/';
$string['invalidbackupfile'] = 'Archivo de respaldo inválido: {$a}';
$string['noadminaccount'] = 'Error: ¡No se encontró ninguna cuenta de administrador!';
$string['nocategory'] = 'Error: ¡No se encontró ninguna categoría!';
$string['operationdone'] = '¡Hecho!';
$string['performingbck'] = 'Realizando el respaldo del curso {$a} ...';
$string['performingres'] = 'Restaurando el respaldo del curso  {$a} ...';
$string['pluginname'] = 'Interfaz por Línea de Comando para Respaldo y Restauración';
$string['unknowoption'] = 'Opción desconocida: {$a}';
