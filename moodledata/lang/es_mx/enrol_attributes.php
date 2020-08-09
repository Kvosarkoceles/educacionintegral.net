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
 * Strings for component 'enrol_attributes', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   enrol_attributes
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcondition'] = 'Añadir condición';
$string['addgroup'] = 'Añadir grupo';
$string['ajax-error'] = 'Ocurrió un error';
$string['ajax-okforced'] = 'OK, {$a} usuarios se han inscrito';
$string['ajax-okpurged'] = 'OK, las inscripciones se han purgado';
$string['attributes:config'] = 'Configurar instancias del plugin';
$string['attributes:manage'] = 'Gestionar usuarios inscritos';
$string['attributes:unenrol'] = 'Des-inscribir (dar de baja) usuarios del curso';
$string['attributes:unenrolself'] = 'Des-inscribirse (darse de baja) a uno mismo del curso';
$string['attrsyntax'] = 'Reglas de campos de perfil de usuario';
$string['attrsyntax_help'] = '<p>Estas reglas solamente pueden usar campos personalizados de perfil de usuario.</p>';
$string['confirmforce'] = 'Esto (re)incribirá a todos los usuarios que corresponden a esta ragla';
$string['confirmpurge'] = 'Esto removerá todas las inscripciones que corresponden a esta ragla';
$string['defaultrole'] = 'Rol por defecto';
$string['defaultrole_desc'] = 'Rol por defecto usado para inscribir personas con este plugin (cada instancia puede anular esto).';
$string['defaultwhenexpired'] = 'Comportamiento por defecto después de expiración de atributos';
$string['defaultwhenexpired_desc'] = 'Que hacer con usuarios que no cumplen más con la regla de atributo. Esta configuración puede ser anulada en cada instancia de inscripción.';
$string['deletecondition'] = 'Eliminar condición';
$string['force'] = 'Forzar inscripciones ahora';
$string['mappings'] = 'Mapeos Shibboleth';
$string['mappings_desc'] = 'Cuando se usa autenticación Shibboleth, este plugin puede actualizar automáticamente un perfil de usuario en cada ingreso.<br><br>Por ejemplo, si Usted quiere actualizar el campo <code>homeorganizationtype</code> del perfil del usuario con el atributo de Shibboleth <code>Shib-HomeOrganizationType</code> (asegurándose que esa es la variable del entorno disponible al servidor en el ingres), Usted puede ingresar en una línea: <code>Shib-HomeOrganizationType:homeorganizationtype</code><br>Usted puede ingresar tantas líneas como sean necesarias.<br><br>No use esta característica si Usted no emplea  la autenticación Shibboleth, simplemente deje esto vacío.';
$string['observelogins'] = 'Inscribir usuarios inmediatamente al ingresar';
$string['observelogins_desc'] = 'Tratar de inscribir usuarios inmediatamente cuando ingresan al sitio. Esto podría tener un impacto en el desempeño en su sitio. Desactive esto si muchos usuarios ingresan al mismo tiempo y el que se inscriban a la vez se vuelve un cuello de botella.';
$string['pluginname'] = 'Inscribir por campos de perfil de usuario';
$string['privacy:metadata'] = 'El plugin Inscripción por Campos de Perfil del Usuario no almacena ningún dato personal.';
$string['profilefields'] = 'Campos del perfil a ser usados en el selector';
$string['profilefields_desc'] = '¿Cuales campos del perfil del usuario  pueden usarse para configurar una instancia de inscripción?<br><br><b>Si Usted no selecciona aquí nungún rol, esto vuelve controvertido a este plugin y por esto se desghabilita su uso en cursos.</b><br>La característica debajo aun puede usarse en este caso.';
$string['purge'] = 'Purgar inscripciones';
$string['removewhenexpired'] = 'Des-inscribir (dar de baja) después de caducidad de atributos';
$string['removewhenexpired_help'] = 'Des-inscribir (dar de baja) a los usuarios al ingresar si no les coincide más la regla de atributo.';
$string['whenexpired'] = 'Comportamiento después de expiración de atributos';
$string['whenexpireddonothing'] = 'Dejar al usuario inscrito';
$string['whenexpired_help'] = 'Qué hacer con usuarios que no cumplen más con la regla de atributo.';
$string['whenexpiredremove'] = 'Des-inscribir (dar de baja) usuario';
$string['whenexpiredsuspend'] = 'Suspender usuario';
