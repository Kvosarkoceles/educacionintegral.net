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
 * Strings for component 'collaborativefolders', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   collaborativefolders
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessfolders'] = 'Acceso a carpeta';
$string['activityoverview'] = 'Carpeta colaborativa';
$string['btnlogin'] = 'Ingreso';
$string['btnlogout'] = 'Salida ({$a})';
$string['cachedef_token'] = 'Token de cliente sistema OAuth';
$string['cachedef_userinfo'] = 'Info usuario cliente usuario OAuth';
$string['cannotaccess'] = 'Si el enlace de arriba no funciona, y Usted no puede encontrar la carpeta, haga clic en el botón a la izquierda para reiniciar la compartición. Esto le ayuda a volver a ganar acceso sin hacerle cambios a los archivos adentro de esa carpeta.';
$string['cannotaccessheader'] = '¿Sin acceso?';
$string['chooseissuer'] = 'Emisor';
$string['collaborativefolders'] = 'Carpetas colaborativas';
$string['collaborativefolders:addinstance'] = 'Añadir una nueva carpeta colaborativa';
$string['collaborativefolders:isteacher'] = 'Al estar viendo, ser considerado como un no-estudiante (con acceso restringido)';
$string['collaborativefoldersname'] = 'Nombre de carpeta colaborativa';
$string['collaborativefoldersname_help'] = 'Ingresar un nuevo nombre que será mostrado en la página inicial del curso.';
$string['collaborativefolders:view'] = 'Ver una carpeta colaborativa';
$string['configuration_exception'] = 'Ocurrió un error en la configuración del cliente OAuth 2: {$a}';
$string['creationstatus'] = 'Estado de la carpeta';
$string['creationstatus_created'] = 'Carpeta(s) creada(s)';
$string['creationstatus_pending'] = 'Las carpetas serán creadas pronto';
$string['edit_after_creation'] = 'Por favor tenga en consideración que el acceso del profesor a configuraciones relacionadas con el grupo no puede ser cambiado después de que esta actividad sea creada.';
$string['error_illegalpathchars'] = 'Debe ingresarse una carpeta o ruta válida. Use \'/\' (diagonal) para delimitar directorios de una ruta.';
$string['eventlinkgenerated'] = 'Una compartición específica de usuario a una carpeta colaborativa fue creada exitosamente.';
$string['folder'] = 'Carpeta';
$string['foldershared'] = 'La carpeta fue compartida exitosamente a su{$a}.';
$string['getaccess'] = 'Obtener acceso';
$string['grouplabel'] = 'Grupo: {$a}';
$string['groupmode'] = 'Modo';
$string['groupmode_off'] = 'Una carpeta para todo el curso';
$string['groupmode_on'] = 'Una carpeta por grupo';
$string['groups'] = 'Grupos';
$string['incompletedata'] = 'Por favor revise las configuraciones del módulo. Ya sea que no estuviera seleccionado un emisor OAuth o que no estuviera conectada una cuenta correspondiente del sistema.';
$string['issuer_choice_unconfigured'] = '(sin configurar)';
$string['issuervalidation_invalid'] = 'Actualmente el emisor {$a} está activo; sin embargo, no implementa todos los endpoints necesarios. El plugin no funcionará. Por favor elija un emisor válido.';
$string['issuervalidation_notconnected'] = 'Actualmente el emisor {$a} válido está activo, pero no está conectada ninguna cuenta del sistema, El plugin no funcionará. Por favor conecte una cuenta del sistema.';
$string['issuervalidation_valid'] = 'Actualmente el emisor {$a}es válido y activo.';
$string['issuervalidation_without'] = 'Usted aun no a seleccionado un emisor OAuth 2.';
$string['loginfailure'] = 'Ocurrió un problema: No autorizado a conectarse a {$a}.';
$string['loginsuccess'] = 'Autorizado exitosamente para conectar a {$a}.';
$string['logoutsuccess'] = 'Se salió eitosamente de {$a}.';
$string['modulename'] = 'Carpetas colaborativas';
$string['modulename_help'] = 'Use carpetas colaborativas para crear carpetas en la nube (OwnCloud, Nextcloud) para que los estudiantes hagan trabajos colaborativos. La carpeta es compartida individualmente con miembros de los grupos elegidos tan pronto como ellos quieran. Usted no necesita recabar las direcciones Email de sus participantes. ¡Todo está automatizado!';
$string['modulenameplural'] = 'Carpetas colaborativas';
$string['namefield'] = 'Nombre';
$string['namefield_explanation'] = 'Elegir un nombre bajo el cual su carpeta compartida será almacenada en su {$a}.';
$string['namemismatch'] = 'Advertencia: Esta carpeta fue compartida con \'{$a->link}\' pero Usted está  ingresado como \'{$a->current}\' - Usted podría necesitar cambiar ingresos para acceder a los archivos.';
$string['nocollaborativefolders'] = 'Ninguna instancia de carpetas colaborativas está activa en este curso.';
$string['nogroups'] = 'Sin grupos';
$string['no_right_issuers'] = 'Ninguno de los emisores existentes implementa todos los endpoints requeridos. Por favor, registre un emisor apropiado.';
$string['notcreated'] = 'Carpeta {$a} no creada.';
$string['notingroup'] = 'Usted no está en ningún grupo, por lo que no tiene acceso a ninguna carpeta.';
$string['oauth2serviceslink'] = '<a href="{$a}" title="Link to OAuth 2 services configuration">Configuración de servicios OAuth 2</a>';
$string['ocserror'] = 'Ocurrió un error con la API para compartir de OCS.';
$string['openinowncloud'] = 'Abrir en {$a}';
$string['overview'] = 'Vista generañ';
$string['pluginadministration'] = 'Administración de carpetas colaborativas';
$string['pluginname'] = 'Carpetas colaborativas';
$string['privacy:metadata:collaborativefolders_link:cmid'] = 'El módulo del curso con el cual está relacionada esta compartición de carpeta';
$string['privacy:metadata:collaborativefolders_link:groupid'] = 'El grupo del curso Moodle con el cual está relacionada esta compartición de carpeta';
$string['privacy:metadata:collaborativefolders_link:link'] = 'El nombre dado a la carpeta cuando fue compartida';
$string['privacy:metadata:collaborativefolders_link:owncloudusername'] = 'El usuario OwnClod con el cual fue compartida esta carpeta';
$string['privacy:metadata:collaborativefolders_link:userid'] = 'El usuario de Moodle con quien se compartió la carpeta';
$string['problem_misconfiguration'] = 'El plugin no está configurado correctamente o el servidor no es alcanzable. Por favor póngase en contacto con su administrador para resolver este problema.';
$string['problem_nosystemconnection'] = 'La cuenta del sistema no se puede conectar con {$a->servicename}, por lo que no serán creadas carpetas para esta actividad. Por favor informe al administrador a este respecto.';
$string['problem_sharessuppressed'] = 'La cuenta del sistema no se puede conectar con {$a->servicename}, por lo que {$a->sharessuppressed} carpetas no fueron mostradas. Por favor informe al administrador a este respecto.';
$string['remotesystem'] = 'Conexión a {$a}';
$string['resetpressed'] = 'Compartición reiniciada. Ya puede obtener acceso a su carpeta nuevamente.';
$string['right_issuers'] = 'Los emisores siguientes implementan los endpoints requeridos: {$a}';
$string['servicename'] = 'Nombre del servicio mostrado';
$string['sharedtoowncloud'] = 'Esta carpeta ya ha sido compartida a su {$a}.';
$string['share_exists_exception'] = 'La carpeta ya está compartida con Usted. {$a}';
$string['share_failed_exception'] = 'No se puede compartir la carpeta con Usted: {$a}';
$string['socketerror'] = 'El socket WebDAV no pudo ser abierto.';
$string['solveproblems'] = 'Resolver problemas';
$string['teacher_access'] = 'Acceso del profesor';
$string['teacheraccess_no'] = 'Las carpetas se conservan privadas de los profesores';
$string['teacheraccess_yes'] = 'Los profesores tienen acceso a todas las carpetas';
$string['teacher_mode'] = 'Habilitar que el profesor tenga acceso a la carpeta.';
$string['teacher_mode_help'] = 'Usualmente solamente los estudiantes tienen acceso a sus carpetas. Sin embargo, si se activa esta casilla, a los profesores también se les puede otorgar acceso. Tenga en cuenta que esta configuración no puede ser cambiada después de la creación de la carpeta.';
$string['teachersnotallowed'] = 'Lo sentimos, los profesores no tienen permitido ver este contenido.';
$string['technicalnotloggedin'] = 'La cuenta del sistema no está ingresada o no tiene autorización en el sistema remoto.';
$string['unexpectedcode'] = 'Fue recibido un código de estado de respuesta inesperado ({$a}).';
$string['usernotloggedin'] = 'Usted actualmente no está ingresado en el sistema remoto.';
$string['webdaverror'] = 'Código del error WebDAV: {$a}';
$string['webdav_response_exception'] = 'WebDAV respondió con un error: {$a}';
