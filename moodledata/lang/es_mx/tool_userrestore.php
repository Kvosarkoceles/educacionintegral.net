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
 * Strings for component 'tool_userrestore', language 'es_mx', branch 'MOODLE_38_STABLE'
 *
 * @package   tool_userrestore
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['button:backtocourse'] = 'Regresar al curso';
$string['button:backtoform'] = 'Regresar al formato userrestore';
$string['button:userrestore:continue'] = 'Restaurar usuarios';
$string['cache:fill'] = 'Rellenar caché llena';
$string['cache:fill:smart'] = 'Anexar al caché la información faltante';
$string['cache:iscomplete'] = 'Caché tiene toda la información necesaria';
$string['cache:purge'] = 'Purgar caché';
$string['config:cleanlogs:disabled'] = 'La limpieza de bitácoras automática está deshabilitada en la configuración global';
$string['config:tool:disabled'] = 'La Utilería para Restaurar Usuario está deshabilitada en la configuración global';
$string['deletedby'] = 'Eliminado por';
$string['email:user:restore:body'] = '<p>Estimado{fullname}</p>
<p>Su cuenta ha sido restaurada</p>
<p>Sin embargo, es posible que su nombre_de_usuario no haya sido capturado correctamente debido a la forma en la que Moodle maneja la eliminación de usuarios y el hecho de que se hayan o  no limpiado las bitácoras de eventos. Su nombre_de_usuario es  {username}</p>
<p>si Usted siente que esto no es lo deseado o tiene alguna pregunta,
por favor contacte a  {contact}</p>
<p>Usted debería de poder usar su antigua contraseña para ingresar al sitio.<br/>
En caso contrario, use la dirección de Email a la que se envió este correo para solicitar un re-inicio de contraseña.<br/>
Por favor re-ingrese al sitio para re-escribir toda su información usando el enlace inferior:<br/>
{loginlink}</p>
<p>Regards<br/>{signature}</p>';
$string['email:user:restore:subject'] = 'Su cuenta ha sido restaurada';
$string['err:statustable:set_sql'] = 'set_sql() está deshabilitada. Esta tabla define su propia y no es personalizable.';
$string['form:label:email'] = 'Cuerpo del Email';
$string['form:label:sendmail'] = 'Enviar Email';
$string['form:label:subject'] = 'Asunto del Email';
$string['form:static:email:template'] = 'Usted puede usar las siguientes cadenas de caracteres en plantilla en su Email. Estas serán automáticamente remplazadas con las variables correctas. Por favor úselas exactamente tal y como estan indicadas aquí en idioma inglés, o el resultado podría salir inesperadamente.
<ul>
<li>{firstname} - Nombre del usuario que es restaurado</li>
<li>{lastname} - Apellido(s) del usuario que es restaurado</li>
<li>{fullname} - Nombre completo del usuario que es restaurado</li>
<li>{username} - Nombre_de_usuario del usuario restaurado (esto PODRÍA ser diferente del que existía antes de que la cuenta fuera eliminada)</li>
<li>{signature} - Firma (nombre completo del usuario de soporte para el sitio Moodle)</li>
<li>{contact} - Dirección_Email del contacto (basada en el usuario de soporte del sitio MoodleC)</li>
<li>{loginlink} - Enlace para ingresar al sitio (basada en el nombre_de_usuario restaurado)</li>
</ul>';
$string['hasloginfo'] = '¿Tiene información en bitácora?';
$string['label:users:potential'] = 'Usuarios potenciales';
$string['link:cache'] = 'Caché';
$string['link:currentstatus:overview'] = 'Ver cambios del estatus actual';
$string['link:log'] = 'Restaurar bitácoras de usuarios';
$string['link:log:overview'] = 'Ver biácoras de cambios de estatus';
$string['link:restore'] = 'Restaurar usuarios';
$string['link:viewstatus'] = 'Ver lista_de_estatus';
$string['msg:no-users-to-restore'] = 'No se encontraron cuentas eliminadas de usuarios para restaurar.';
$string['page:view:log.php:introduction'] = 'La tabla inferiro muestra las bitácoras de estatus de los usuarios que han  restaurados';
$string['page:view:restore.php:introduction'] = 'Este formato le permite seleccionar usuarios para restaurarlos y opcionalmente enviarles un Email acerca de sus cuentas de usuario restauradas. Por favor tenga en cuenta que en la tabla inferior, el nombre_de_usuario y la dirección_de_Email representan la información original del usuario tal y como fue obtenida desde los registros de la bitácora de eventos.';
$string['pluginname'] = 'Restaurar Usuario';
$string['privacy:metadata:tool_userrestore_log'] = 'La bitácora de  userrestorecontiene información histórica / en bitácoras acerca de usuarios restaurados';
$string['privacy:metadata:tool_userrestore:mailedto'] = 'Dirección Email del usuario restaurado';
$string['privacy:metadata:tool_userrestore:mailsent'] = 'Si es que se ha enviado un Email o no';
$string['privacy:metadata:tool_userrestore:restored'] = 'Si es que la cuenta fue restaurada o no';
$string['privacy:metadata:tool_userrestore_status'] = 'El estado de userrestore contiene información acerca de usuarios restaurados';
$string['privacy:metadata:tool_userrestore:timecreated'] = 'Hora en la cual se creó el registro.';
$string['privacy:metadata:tool_userrestore:userid'] = 'La clave primaria del usuario Moodle para el cual se restauró la cuenta.';
$string['promo'] = 'Plugin para_restaurar_usuarios para Moodle';
$string['promodesc'] = 'Este plugin fue escrito por Sebsoft Managed Hosting & Software Development
(<a href=\'http://www.sebsoft.nl/\' target=\'_new\'>http://sebsoft.nl</a>).<br /><br />
{$a}<br /><br />';
$string['restore:deleted-user-not-found'] = 'Nopuede restaurarse usuario: no se encontró al usuario eliminado';
$string['restore:email-exists'] = 'No puede restaurarse usuario: la dirección Email \'{$a->email}\' ya existe para un usuario activo diferente';
$string['restoresettings'] = 'Configuraciones de Restauración de Usuario';
$string['restoresettingsdesc'] = '';
$string['restore:user-mnet-not-local'] = 'No puede restaurarse usuario: el host MNet para el usuario a ser restaurado no es el host MNet local configurado';
$string['restore:username-exists'] = 'No puede restaurarse usuario: el nombre_de_usuario \'{$a->username}\' ya existe para un usuario activo diferente';
$string['restore:user-restored'] = 'El usuario <i>\'{$a->username}\'</i> (\'{$a->email}\') fue restaurado exitosamente';
$string['setting:cleanlogsafter'] = 'Frecuencia para Limpiar Bitácoras';
$string['setting:desc:cleanlogsafter'] = 'Configurar la frecuencia con la que se limpian las bitácoras. Cualquier bitácora más antigua que esta configuración será físicamente removida.';
$string['setting:desc:enablecleanlogs'] = 'Habilita o deshabilita la limpieza automática de la bitácora de historia.';
$string['setting:desc:maxrestoreusers'] = 'Esto configura el número máximo de usuarios mostrados en el formato para restaurar usuarios.';
$string['setting:enablecleanlogs'] = 'Habilitar limpia-bitácoras';
$string['setting:maxrestoreusers'] = 'Máximo de Usuarios resturados';
$string['table:log:all'] = 'Bitácora histórtica de restauración';
$string['table:log:latest'] = 'Bitácoras más recientes de restauración';
$string['table:logs'] = 'Bitácoras';
$string['task:filldeletedcache'] = 'LLenar cachés eliminadas para restauración de usuario';
$string['task:logclean'] = 'Limpiar bitácoras para restauración de usuarios';
$string['th:action'] = 'Acción';
$string['th:mailedto'] = 'Email enviado a';
$string['th:mailsent'] = 'Email enviado';
$string['th:name'] = 'Nombre';
$string['th:restored'] = 'Restaurada';
$string['th:timecreated'] = 'Creada en';
$string['th:userid'] = 'ID del usuario';
$string['timedeleted'] = 'Eliminado en';
