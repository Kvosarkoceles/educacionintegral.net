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
 * Strings for component 'tool_opencast', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   tool_opencast
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['apipassword'] = 'Contraseña para usuario API';
$string['apipassworddesc'] = 'Configurar una contraseña para el super usuario, quein hace las llamadas API.';
$string['apipasswordempty'] = 'La contraseña para el usuario API no está configurada correctamente. Vaya a configuraciones de herramienta opencast para corregir esto';
$string['apiurl'] = 'URL de API opencast';
$string['apiurldesc'] = 'Configurar la URL base del sistema Opencast; por ejemplo, opencast.ejemplo.com';
$string['apiurlempty'] = 'La URL para API de Opencast no está configurada correctamente. Vaya a las configuraciones de la herramienta Opencast para corregir esto.';
$string['apiusername'] = 'Nombre_de_usuario para llamadas API';
$string['apiusernamedesc'] = 'Para todas las llamadas al API, Moodle usa este usuario. La autorización es hecha al añadirle roles apropiados a la llamada';
$string['apiusernameempty'] = 'El nombre_de_usuario para API de Opencast no está configurado correctamente; vaya a herramienta Opencast para corregir esto';
$string['connecttimeout'] = 'Tiempo de conexión agotado';
$string['connecttimeoutdesc'] = 'Configurar el tiempo en segundos mientras Moodle intenta conectarse a Opencast hasta que se agote el tiempo';
$string['needphp55orhigher'] = 'Se necesita PHP versión 5.5 o superior';
$string['opencast:externalapi'] = 'Acceso a servicios web de tool_opencast';
$string['opencast:instructor'] = 'Otorga el rol de un instructor en Opencast';
$string['opencast:learner'] = 'Otorga el rol de un estudiante en Opencast';
$string['pluginname'] = 'API de Opencast';
$string['privacy:metadata'] = 'La herramienta administrativa solamente proporciona endpoints API y configuraciones generales para el conjunto del plugin opencast.
Guarda cual serie de opencast pertenece a cual curso, pero no almacena ningún dato personal.';
$string['serverconnectionerror'] = 'Hubo un problema con la conexión al servidor opencast. Por favor revise sus credenciales y las configuraciones de su red.';
$string['wrongmimetypedetected'] = 'Se detectó un mimetype equivocado, mientras se intentaba subir {$a->filename} del curso {$a->coursename},
¡Usted solamente puede subir archivos de video!';
