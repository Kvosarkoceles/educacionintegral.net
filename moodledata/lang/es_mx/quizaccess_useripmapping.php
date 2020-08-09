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
 * Strings for component 'quizaccess_useripmapping', language 'es_mx', branch 'MOODLE_34_STABLE'
 *
 * @package   quizaccess_useripmapping
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessrules'] = 'Reglas de acceso';
$string['cancel'] = 'Cancelar';
$string['confirm'] = 'Confirmar mapeo';
$string['csvdelimiter'] = 'Delimitador CSV';
$string['editmapping'] = 'Editar mapeo de IP de usuario';
$string['encoding'] = 'Codificación';
$string['file'] = 'Archivo';
$string['idnumber'] = 'ID del usuario';
$string['importmapping'] = 'Importar mapeos de IP de usuario';
$string['ipmismatchmessage1'] = 'Usted está siendo asignado : <b>';
$string['ipmismatchmessage2'] = '</b> Dirección IP para intentar el examen y la dirección IP de esta computadora no coincide con la dirección IP asignada..';
$string['ipnotassignedmessage'] = 'A Usted no se le ha asignado ninguna dirección IP para intentar este examen; por favor póngase en contacto con su instructor para que se la asignen y pueda intentar este examen.';
$string['notrequired'] = 'No';
$string['pluginname'] = 'Regla de acceso a examen por mapeo de IP del usuario';
$string['rowpreviewnum'] = 'Previsualizar filas';
$string['subnetwrong'] = 'La dirección IP de esta computadora no coincide con la dirección IP asignada';
$string['uploadmappings'] = 'Subir mapeo';
$string['uploadmappings_help'] = 'El mapeo de IP de usuario debería de ser subido vía un archivo CSV.
El formato del archivo es como sigue:
* La primera línea es:username,ip
* Cada línea siguiente contiene un registro que contiene el nombre_de_usuario y la dirección IP mapeada
* Los valores de los campos están separados por una coma (o algún otro delimitador).';
$string['uploadmappingspreview'] = 'Vista previaa de mapeo subido';
$string['useripmapping'] = 'Mapeo de IP de usuario';
$string['useripmappingrequired'] = 'Habilitar mapeo de IP de usuario';
$string['useripmappingrequired_help'] = 'Si Usted habilita esta opción, los usuarios solamente podrán intentar este examen desde la dirección IP específica mapeada contra su nombre. Al habilitar esto, el mapeo de IP del usuario puede ser gestionado en el bloque de administración del examen. Si se activa el permitir no-mapeados, los usuarios quienes no hayan sido mapeados a ninguna IP también podrán intentar el examen.';
$string['useripmappingrequiredoption'] = 'Si';
$string['username'] = 'Nombre del usuario';
$string['viewthelist'] = 'Ver';
