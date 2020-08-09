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
 * Strings for component 'auth_enrolkey', language 'es_mx', branch 'MOODLE_38_STABLE'
 *
 * @package   auth_enrolkey
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['description'] = 'Esto proporciona auto-registro con Inscripción basada en clave';
$string['noemail'] = '¡Se intentó enviarle un Email pero falló!';
$string['pluginname'] = 'Auto-registro basado en clave de inscripción';
$string['recaptcha'] = 'Añade un elemento de confirmación visual/auditiva a la página para apuntarse para auto-registro de usuarios. Esto protege al sitio contra \'spammers\' y contribuye a una causa noble. Vea http://www.google.com/recaptcha para más detalles.';
$string['recaptcha_key'] = 'Habilitar elemento reCAPTCHA';
$string['settings_content'] = 'p>Auto-registro basado en clave de inscripción habilita a un usuario para crear su propia cuenta mediante un botón para \'Crear nueva cuenta\' en la página de ingreso al sitio. el usuario recibirá entonces un Email que contiene un enlace seguro hacia  una página en donde puede confirmar sus cuenta. Los ingresos futuros solamente revisan el nombre_de_usuario y la contraseña con los valores almacenados en la BasedeDatos de Moodle.</p><p>Durante el auto-registro, si se ingresa una clave de inscripción dentro del campo para clave de inscripción, entonces se procederá a inscribir automáticamente al nuevo usuario dentro de los cursos que coincidan. Las claves de inscripción están habilitadas en (Administración del curso  > Usuarios > Métodos de inscripción > Añadir método > Auto inscripción).</p><p>Nota: Además de habilitar el plugin, el auto-registro basado en clave de inscripción debe también de estar seleccionado dentro del menú desplegable en la página para \'Gestionar autenticación\'.</p>';
$string['settings_heading'] = 'Configuraciones generales';
$string['settings_required_description'] = 'La clave para inscripción será un campo obligatorio para validación';
$string['settings_required_title'] = 'Requerir clave de inscripción para validación';
$string['settings_visible_description'] = 'Añade un nuevo elemento de formato a la página para apuntarse para el auto-registro de usuarios. Esto será revisado contra las claves de inscripción disponibles e inscribirá al usuario dentro de los cursos que correspondan.';
$string['settings_visible_title'] = 'Habilitar elemento de clave de inscripción';
$string['signup_auth_instructions'] = '¡Hola! Para el acceso completo a los cursos, Usted necesitará tomarse un minuto para crearse una nueva cuenta Usted mismo en este sitio web. Cada uno de nuestros cursos individuales puede tener su propia "clave de inscripción" para emplearse una sola vez, la cual Usted podrá usar durante este registro:
<ol>
<li>LLene el formato para una <a href="{$a}">Nueva Cuenta</a> con su información.</li>
<li>A Usted se le pedirá una "clave de inscripción" - use la que le proporcionó su ´profesor. Esta clave lo "inscribirá" a Usted dentro del curso.</li>
<li>Se creará su cuenta y Usted será ingresado al sitio.</li>
<li>Entonces Usted podrá acceder a todo el curso por esta sesión.</li>
<li>Inmediatamente se le enviará a Usted un Email a su dirección de Email.</li>
<li>Lea su correo y haga click en el enlace web que contiene.</li>
<li>De allí en eadelante Usted solamente necesitará ingresar su nombre_de_usuario y su contraseña personales (en el formato en esta página) para ingresar al sitio y acceder a cualquier curso(s) en que se hubiera inscrito.</li>
</ol>';
$string['signup_failure'] = '¡Órale! Algo salió mal y es posible que Usted no haya sido inscrito apropiadamente. Vaya a  <a href="{$a->href}">Página inicial</a>';
$string['signup_field_title'] = 'Clave de inscripción';
$string['signup_missing'] = 'Falta clave de inscripción';
$string['signup_token_invalid'] = 'La clave de inscripción que Usted introdujo es inválida';
$string['signup_view'] = 'Inscripción a curso';
$string['signup_view_message_basic'] = 'Usted se ha inscrito a {$a->course} como un {$a->role}. <a href={$a->href}>Haga click aquí para ver el curso.</a>';
$string['signup_view_message_basic_dates'] = 'Usted se ha inscrito a {$a->course} como un {$a->role}. <a href={$a->href}>Haga click aquí para ver el curso.</a><br />El curso inicia en: {$a->startdate}<br />El curso termina en: {$a->enddate}';
$string['signup_view_message_basic_dates_endonly'] = 'Usted se ha inscrito a {$a->course} como un {$a->role}. <a href={$a->href}>Haga click aquí para ver el curso.</a><br />El curso termina en: {$a->enddate}';
$string['signup_view_message_basic_dates_startonly'] = 'Usted se ha inscrito a $a->course} como un {$a->role}. <a href={$a->href}>Haga click aquí para ver el curso.</a><br />El curso inicia en: {$a->startdate}';
