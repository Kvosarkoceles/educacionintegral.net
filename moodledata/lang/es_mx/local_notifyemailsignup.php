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
 * Strings for component 'local_notifyemailsignup', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   local_notifyemailsignup
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['notifyemailsignupbody'] = 'Hola {$a->supportname},

Se ha solicitado una cuenta nueva en \'{$a->sitename}\'
usando los siguientes detalles:

- dirección Email : {$a->signupemail}
- nombre_de_usuario : {$a->signupusername}
- nombre: {$a->signup_user_firstname}
- apellido(s): {$a->signup_user_lastname}

Saludos del administrador de \'{$a->sitename}\',
{$a->signoff}';
$string['notifyemailsignupsubject'] = '{$a}: Notificación de apuntado en nueva cuenta';
$string['pluginname'] = 'Notificar a los administradores del sitio acerca de nuevos apuntados por Email';
