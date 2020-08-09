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
 * Strings for component 'enrol_idlist2', language 'es_mx', branch 'MOODLE_24_STABLE'
 *
 * @package   enrol_idlist2
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['enrol_idlist2_authlist'] = 'Lista de valores autorizados';
$string['enrol_idlist2_authlist_help'] = 'Esta lista se obtiene extrayendo los datos desde el campo anterior a partir de la expresión regular. Si modifica la información de usuarios autorizados debe guardarla y volver a esta página para que se actualice.';
$string['enrol_idlist2_authorized'] = 'Usuarios autorizados';
$string['enrol_idlist2_authorized_help'] = 'Nombre de la instancia del plugin';
$string['enrol_idlist2_campo'] = 'Campo';
$string['enrol_idlist2_campo_help'] = 'Campo que se utilizará para validar al usuario';
$string['enrol_idlist2_idattr'] = 'Campo del estudiante para usar como filtro';
$string['enrol_idlist2_listadeid'] = 'Usuarios autorizados';
$string['enrol_idlist2_listadeid_help'] = 'Escriba aquí la lista de valores autorizados.
Aquí puede incluir cualquier información además de los valores que debe verificar el campo de filtrado.';
$string['enrol_idlist2_regexp'] = 'Expresión regular';
$string['enrol_idlist2_regexp_help'] = 'Expresión regular para validar al usuario.

Por defecto: [0-9][0-9][0-9][0-9]+';
$string['enrol_idlist2_settinghead'] = 'IDList2 enrol plugin';
$string['enrol_idlist2_settinginfo'] = 'No se necesita configuración global';
$string['enrol_idlist2_unauthorized'] = 'Lista de usuarios NO autorizados';
$string['enrol_idlist2_unauthorized_help'] = 'Lista de usuarios NO autorizados. Si modifica la información de usuarios autorizados debe guardarla y volver a esta página para que se actualice.';
$string['enrol_idlist2_userpicture'] = 'Foto';
$string['enrol_idlist2_userregexp'] = 'Filtrar campo de usuario';
$string['enrol_idlist2_userregexp_help'] = 'Filtrar campo de usuario con expresión regular';
$string['enrolment_id_error'] = 'Usted no es un usuario autorizado en este curso. Contacte con su profesor si está inscrito oficialmente en la asignatura.';
$string['pluginname'] = 'IDList2';
$string['pluginname_desc'] = 'Con este plugin, los estudiantes se inscriben de forma automática al entrar al curso por primera vez si están en la lista de usuarios autorizados';
