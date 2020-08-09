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
 * Strings for component 'auth_antihammer', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   auth_antihammer
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:confirm-delete-hammer'] = 'Eliminar ítem insistente';
$string['action:confirm-delete-log'] = 'Eliminar ítem registrado en bitácora';
$string['action:delete:hammeritem'] = 'Eliminar ítem insistente';
$string['action:delete:logitem'] = 'Eliminar ítem registrado en bitácora';
$string['action:view:logitem'] = 'Ver detalles en bitácora';
$string['addcfgipblock'] = 'Añadir IP bloqueada a configuración del sitio';
$string['addcfgipblock_desc'] = 'Active esta opción si desea añadir una IP bloqueada a la lista global de <a href="{$a}">direcciones IP bloqueadas</a>.';
$string['antihammer:administration'] = 'Administrar autenticación anti-insistentes';
$string['antihammer:delete'] = 'Quitar registros';
$string['ap:log'] = 'Bitácoras de anti-insistente';
$string['ap:logdetails'] = 'Detalles de bitácoras de anti-insistente';
$string['ap:report'] = 'Reportes de anti-insistente';
$string['attemptcounter'] = 'Tiempo de intentos';
$string['attempts'] = 'Número máximo de intentos';
$string['auth_antihammer'] = 'Anti-insistente / Bloqueador de ingreso';
$string['auth_antihammerdescription'] = 'Los usuarios no pueden ingresar. Este módulo de autenticación sirve como un sistema de bloqueo para intentos de ingresar';
$string['auth_antihammer_ipblocksettings'] = '¿Añadir bloqueo de IP a la configuración del sitio ?';
$string['auth_antihammer_ipblocksettings_desc'] = '¡ADVERTENCIA! Usted casi nunca querrá habilitar la opción inferior.<br/>
Hay MUCHO RIESGO de que se excluya Usted mismo de este sitio, especialmente si Usted usa una red en donde muchas personas comparten la misma IP principal.<br/>
Si, por CUALQUIER RAZÓN, Usted realmente quiere hbilitar esta opción, asegúrese de que al menos esté permitida específicamente una IP, y habilite la opción global para permitir que la lista de PERMITIDOS se procese ANTES de la lista de bloqueo. El no hacer esto puede realmente expulsar a los administradores.';
$string['auth_antihammer_ipsettings'] = 'Configuraciones de bloqueo de IP';
$string['auth_antihammer_ipsettings_desc'] = '';
$string['auth_antihammer_messagesettings'] = 'Mensajería / configuraciones de notificación';
$string['auth_antihammer_messagesettings_desc'] = '';
$string['auth_antihammer_miscsettings'] = 'Configuraciones misceláneas';
$string['auth_antihammer_miscsettings_desc'] = '';
$string['auth_antihammer_usersettings'] = 'Configuraciones de bloqueo de usuario';
$string['auth_antihammer_usersettings_desc'] = '';
$string['autocleanlog'] = '¿Limpiar bitácoras automáticamente?';
$string['autocleanlog_after'] = 'Limpiar automáticamente bitácoras más antiguas de';
$string['autoclear_ipblock'] = '¿Autolimpiar IPs bloqueadas ?';
$string['autoclear_ipblock_after'] = 'Autolimpiar IP bloqueada después de';
$string['autoclear_userblock'] = '¿Autolimpiar usuarios bloqueados ?';
$string['autoclear_userblock_after'] = 'Auto-limpiar usuarios bloqueados después de';
$string['blockip'] = '¿Bloquear por dirección IP?';
$string['blockpage'] = 'Página a mostrar cuando alguien es bloqueado';
$string['blockusername'] = '¿Bloquear por nombre_de_usuario ?';
$string['config:autocleanlog:disabled'] = 'La limpieza automática de bitácoras anti-insistente está deshabilitada en la configuración global';
$string['delete:all'] = 'Eliminar todos los registros';
$string['err:blocked:ip'] = 'Insistencia detectada: dirección IP = {$a->ip} (IP está bloqueada)';
$string['err:blocked:user'] = 'Insistencia detectada: Nombre_de_usuario= {$a->username} dirección IP = {$a->ip} (IP y/o nombre_de_usuario está bloqueado)';
$string['err:sqltable:set_sql'] = 'set_sql() está deshabilitada. Esta tabla se define ella misma  y no es personalizable';
$string['ip_attemptcounter'] = 'duración de intentos IP';
$string['ip_attempts'] = 'Número máximo de intentos';
$string['log:info:blocked'] = 'Bloqueado: {$a}';
$string['mail:blocking:message'] = '<p>Estimado/a{$a->firstname} {$a->lastname}</p>
<p>Se ha configurado un bloqueo como resultado de demasiados intentos para ingresar al sitio</p>
<p>El bloque se ha hecho activo para la dirección IP {$a->ip}, nombre_de_usuario{$a->username}</p>
<p>Atentamente,<br/>Sistema de soporte</p>';
$string['mail:blocking:subject'] = 'Bitácora Anti-insistente: usuario o dirección IP bloqueada';
$string['messageprovider:antihammerblocking'] = 'Notificación de bloqueo de IP/cuenta';
$string['notifymainadmin'] = '¿Notificarle siempre al administrador?';
$string['notifymainadmin_desc'] = 'Active esta opción si Usted quiere notificar siempre al admninistrador principal de Moodle por Email.<br/>
¡NOTA: El administrador principal  <i>podría</i> recibir dos notificaciones si la opción de arriba está habilitada y también tiene la opción de recibir mensajes mediante el Email habilitada!';
$string['pluginname'] = 'Anti-insistente / Bloqueador de ingreso';
$string['privacy:metadata:auth_antihammer'] = 'El método de autenticación antihammer almacena (temporalmente) información relacionada con intentos de ingresar (hammering) para usuarios';
$string['privacy:metadata:auth_antihammer:blocked'] = 'Indicación acerca de si el usuario está o no temporalmente bloqueado.';
$string['privacy:metadata:auth_antihammer:blocktime'] = 'Haora hasta la cual está bloqueado el usuario.';
$string['privacy:metadata:auth_antihammer:firstattempt'] = 'Hora en la que el registro fue creado por vez primera.';
$string['privacy:metadata:auth_antihammer:ip'] = 'Dirección IP del usuario detactada para la cual el martilleo está temporalmente anotado en bitácora';
$string['privacy:metadata:auth_antihammer_log'] = 'El método de autenticación antihammer almacena () información histórica / bitácoras relacionada con intentos de ingresar (hammering) para usuarios';
$string['privacy:metadata:auth_antihammer_log:data'] = 'Informacion serializada almacenada para este usuario, la cual es una versión serializada de los datos anti-martilleo incluyendo nombre_de_usuario y dirección IP.';
$string['privacy:metadata:auth_antihammer_log:datecreated'] = 'Hora a la cual fue creado el registro.';
$string['privacy:metadata:auth_antihammer_log:userid'] = 'La clave primaria del usuario Moodle para el cual el martilleo está temporalmente anotado en bitácora.';
$string['privacy:metadata:auth_antihammer:userid'] = 'La clave primaria del usuario Moodle para el cual el martilleo está temporalmente anotado en bitácora.';
$string['privacy:metadata:auth_antihammer:username'] = 'El nombre_de_usuario intentado en Moodle para el cual el martilleo está temporalmente anotado en bitácora.';
$string['promo'] = 'Plugin de autenticación anti-insistente / bloqueador_de_ingreso para Moodle';
$string['promodesc'] = 'Este plugin fue escrito por Sebsoft Managed Hosting & Software Development
(<a href=\'http://www.sebsoft.nl/\' target=\'_new\'>http://sebsoft.nl</a>).<br /><br />
{$a}<br /><br />';
$string['str:blocked:page'] = 'Su cuenta y/o su dirección IP ha sido bloqueada.';
$string['task:logcleaner'] = 'Limpiador de bitácora de anti-insistente';
$string['thead:action'] = 'acción';
$string['thead:blocked'] = 'bloqueado';
$string['thead:blocktime'] = 'hora del bloqueo';
$string['thead:code'] = 'código';
$string['thead:count'] = 'número de detecciones';
$string['thead:datecreated'] = 'fecha de creación';
$string['thead:firstattempt'] = 'primer intento';
$string['thead:ip'] = 'IP';
$string['thead:module'] = 'módulo';
$string['thead:msg'] = 'mensaje';
$string['thead:type'] = 'tipo';
$string['thead:userid'] = 'userID';
$string['thead:username'] = 'nombre_de_usuario';
$string['title:report:hammer'] = 'Reportes de anti-insistente';
$string['title:report:logs'] = 'Bitácoras de anti-insistente';
$string['type:info'] = 'información';
$string['type:ip'] = 'Bloqueo de IP';
$string['type:user'] = 'Bloqueo de usuario';
$string['usemessaging'] = '¿Usar API de mensajería ?';
$string['usemessaging_desc'] = 'Active esta opción si desea quwe se use la API de mensajería para informarles a los destinatarios aplicables';
