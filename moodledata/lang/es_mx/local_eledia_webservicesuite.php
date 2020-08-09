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
 * Strings for component 'local_eledia_webservicesuite', language 'es_mx', branch 'MOODLE_36_STABLE'
 *
 * @package   local_eledia_webservicesuite
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['back'] = 'regresar';
$string['eledia_desc'] = 'Formato para probar las funciones básicas del servicio.<br />
   Tenga presente el hecho de que los servicios que llame aquí serán todos ejecutados en el Sistema.<br />
<br />
Para usar este formato Usted necesita activar y configurar el servicio SOAP.<br />
Usted puede encontrar las configuraciones del servicio web general aquí: <a href={$a}>{$a}</a><br />
El token generado para el usuario del servicio web debe estar dado en la configuración de este plugin.<br />
<br />';
$string['eledia_desc_header'] = 'eledia webservicesuite';
$string['eledia_header'] = 'eledia webservicesuite';
$string['eledia_webservicesuite:access'] = 'Derecho de acceso para todas las funciones de este servicio web';
$string['idnumbercourse'] = 'Número ID del curso';
$string['idnumberuser'] = 'Número ID del usuario';
$string['missing_token'] = 'Falta lel token de Webservice en la configuración del plugin.';
$string['pluginname'] = 'eledia webservicesuite';
$string['privacy:metadata'] = 'El plugin eledia webservicesuite no almacena ningún dato personal.';
$string['service_choose'] = 'elegir la función';
$string['start'] = 'llamar a la función';
$string['test_form_desc'] = 'Encuentre el formato para pruebas <a href={$a}>aquí</a>.';
$string['test_header'] = 'probador de función de eledia webservicesuite';
$string['test_token'] = 'token para testscript';
$string['wscannotenrol'] = 'La instancia del plugin no puede inscribir manualmente a un usuario en el curso con id = {$a->courseid}';
$string['wscoursenotfound'] = 'Curso con idnumber = {$a->idnumber} no encontrado.';
$string['wsidnumbersnotfound'] = 'Idnumber {$a->idnumber} no encontrado.';
$string['wsmultiplecoursesfound'] = 'Se encontraron múltiples cursos con idnumber = {$a->idnumber}. Idnumber debe ser único';
$string['wsmultipleidnumbersfound'] = 'Idnumber {$a->idnumber} no es único.';
$string['wsmultipleusersfound'] = 'Se encontraron múltiples usuarios con idnumber = {$a->idnumber}. Idnumber debe ser único';
$string['wsnoinstance'] = 'La instancia del plugin de inscripción manual no existe o está deshabilitada para el curso (id = {$a->courseid})';
$string['wsusercannotassign'] = 'Usted no tiene el permiso para asignar este rol ({$a->roleid}) a este usuario ({$a->userid}) en este curso ({$a->courseid}).';
$string['wsusernotfound'] = 'Usuario con idnumber = {$a->idnumber} no encontrado.';
