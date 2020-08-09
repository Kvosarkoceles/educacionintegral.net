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
 * Strings for component 'block_eledia_userdelete', language 'es_mx', branch 'MOODLE_36_STABLE'
 *
 * @package   block_eledia_userdelete
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['back'] = 'Regresar';
$string['delete_desc'] = 'Se mostrarán 100 usuarios por página. Los siguientes usuarios se mostrarán después de  que sean borrados los usuarios en la página actual. Usted puede eliminar los usuarios actualmente mostrados con el botón para \'Eliminar usuario\'.';
$string['desc'] = 'Este plugin elimina usuarios basándose en su dirección Email. Escriba las direcciones Email en la caja de texto inferior y elija "revisar usuario" para continuar..<br /><br />
Escriba solamente un Email por línea.';
$string['desc2'] = 'Este sitio le permite a Usted eliminar una lista de usuarios, que seon leídos desde el archivo "{moodledata}/temp/delete_users.csv".<br><br>El archivo debe colocarse manualmente dentro de dicha carpeta..
Los usuarios son identificados por su dirección de Email. En cada línea del archivo CSV debe existir una dirección de Email.<br><br>Los usuarios se ven en lotes de 100 usuarios por página. Usted puede confirmar su eliminación. Los usuarios que ya estuvieran eliminados no se mostrarán..';
$string['eledia_config_header'] = 'Configuración del bloque para eliminar usuarios';
$string['eledia_delete_header'] = 'Lista de Email de usuario a eliminar';
$string['eledia_desc_header'] = '';
$string['eledia_header'] = 'Eliminar Usuario';
$string['eledia_userdelete:addinstance'] = 'Añadir bloque para eliminar usuario';
$string['failed_deleting'] = 'Algunos usuarios no pudieron eliminarse';
$string['file_not_found'] = '¡No se encontró el archivo!';
$string['file_not_readable'] = '¡No pudo leerse el archivo!';
$string['last_seen'] = 'Última vez que se vió';
$string['only_deletted_user'] = 'La lista solamente contiene usuarios eliminados.';
$string['pluginname'] = 'Eliminar Usuarios por Lista de Email';
$string['privacy:metadata'] = 'Elplugin para Eliminar Usuarios por Lista de correo de eledia no almacena ningún dato personal.';
$string['start_confirm'] = 'Revisar usuario';
$string['start_deleting'] = 'Eliminar usuario';
$string['successful_deleting'] = 'Los usuarios elegidos han sido eliminados.';
$string['title'] = 'Eliminar usuarios por lista de Email';
