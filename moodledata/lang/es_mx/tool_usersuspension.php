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
 * Strings for component 'tool_usersuspension', language 'es_mx', branch 'MOODLE_38_STABLE'
 *
 * @package   tool_usersuspension
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:confirm-delete-exclusion'] = '¿Está seguro de querer eliminar este ítem de la lista de exclusión?';
$string['action:delete-exclusion'] = 'Eliminar ítem de lista_de_exclusiones';
$string['action:exclude:add:cohort'] = 'Añadir exclusión de cohorte';
$string['action:exclude:add:user'] = 'Añadir exclusión de usuario';
$string['button:backtocourse'] = 'Regresar al curso';
$string['button:backtoexclusions'] = 'Regresar a vista general de exclusiones';
$string['button:backtouploadform'] = 'regresar a formato de subida';
$string['button:continue'] = 'Continuar';
$string['config:cleanlogs:disabled'] = 'La limpieza de bitácoras automática está deshabilitada en la configuración global';
$string['config:cleanup:disabled'] = 'La opción para  \'limpieza\' en la Suspensión de Usuario está deshabilitada en la configuración de la herramienta global';
$string['config:fromfolder:disabled'] = 'La opción para  \'suspender de subir\' en la Suspensión de Usuario está deshabilitada en la configuración de la herramienta global';
$string['config:smartdetect:disabled'] = 'La \'detección inteligente\' en la Suspensión de Usuario está deshabilitada en la configuración de la herramienta global';
$string['config:tool:disabled'] = 'La utilería de Suspensión de Usuario está deshabilitada en la configuración de la herramienta global';
$string['csv:delimiter'] = 'Delimitador';
$string['csv:enclosure'] = 'Recinto';
$string['csv:upload:continue'] = 'Continuar';
$string['email:user:delete:body'] = '<p>Estimado/a {$a->name}</p>
<p>Su cuenta ha sido eliminada después de haber sido suspendida por {$a->timesuspended}</p>
<p>Atentamente<br/>{$a->signature}</p>';
$string['email:user:delete:subject'] = 'Su cuenta ha sido eliminada';
$string['email:user:suspend:auto:body'] = '<p>Estimado/a {$a->name}</p>
<p>Su cuenta ha sido suspendida después de haber estado inactiva por {$a->timeinactive}</p>
<p>Si Usted siente que esto es incorrecto, o si desea tener reactivada su cuenta nuevamente, por favor póngase en contacto con  {$a->contact}</p>
<p>Atentamente<br/>{$a->signature}</p>';
$string['email:user:suspend:manual:body'] = '<p>Estimado/a {$a->name}</p>
<p>Su cuenta ha sido suspendida.</p>
<p>Si Usted siente que esto es incorrecto, o si desea tener reactivada su cuenta nuevamente, por favor póngase en contacto con  {$a->contact}</p>
<p>Atentamente <br/>{$a->signature}</p>';
$string['email:user:suspend:subject'] = 'Su cuenta ha sido suspendida';
$string['email:user:unsuspend:body'] = '<p>Estimado/a{$a->name}</p>
<p>Su cuenta ha sido reactivada.</p>
<p>Si Usted siente que esto no es lo que correspondía, o si quiere tener suspendida nuevamente su cuenta, por favor póngase en contacto con {$a->contact}</p>
<p>Atentamente<br/>{$a->signature}</p>';
$string['email:user:unsuspend:subject'] = 'Su cuenta ha sido reactivada';
$string['err:statustable:set_sql'] = 'set_sql() está deshabilitado. Esta tabla define las suyas propias y no es personalizable';
$string['excludeuser'] = 'excluir usuario del procesamiento';
$string['form:static:uploadfile:desc'] = 'Suba aquí su archivo para suspensión de usuario<br/>
El archivo CSV  subido puede ser configurado como sigue:<br/>
<ol>
<li>archivo \'simple\' que contiene SOLAMENTE direcciones Email, una por línea</li>
<li>archivo \'inteligente\' que contiene 2 columnas, que indican el tipo y el valor.<br/>
Los valores posibles para la columna del tipo son:
<ul><li>email: el valor de la comuna indica la direcciión Email de la cuenta del usuario</li>
<li>idnumber: el valor de la comuna indica el idnumber de la cuenta del usuario</li>
<li>username: el valor de la comuna indica el nombre_de_usuario de la cuenta del usuario</li>
</ul></ol>';
$string['info:no-exclusion-cohorts'] = 'Ya no se pueden configurar más cohortes para ser excluidas. Todas ya han sido añadidas a la lista de exclusión';
$string['label:users:excluded'] = 'Usuarios excluidos';
$string['label:users:potential'] = 'Usuarios potenciales';
$string['link:currentstatus:overview'] = 'Ver cambios de estatus actual';
$string['link:exclude:overview'] = 'Vista general de esclusiones';
$string['link:log:overview'] = 'Ver bitácoras de cambios de estatus';
$string['link:upload'] = 'Subir archivo de suspendidos';
$string['link:viewstatus'] = 'Ver lista-de-estatus';
$string['msg:exclusion:cohort:none-selected'] = 'No se seleccionaron cohortes para exclusión';
$string['msg:exclusion:record:cohort:inserted'] = 'Entrada de exclusión paracohorte \'{$a->name}\' exitosamente insertado';
$string['msg:exclusion:record:exists'] = 'Entrada de exclusión ya existe (no se añadió registro)';
$string['msg:exclusion:record:inserted'] = 'Entrada de exclusión insertada exitosamente';
$string['msg:exclusion:records:cohort:deleted'] = 'Entradas de exclusión para cohortes eliminadas exitosamente';
$string['msg:exclusion:records:deleted'] = 'Entradas de exclusión eliminadas exitosamente';
$string['msg:exclusion:records:user:deleted'] = 'Entradas de exclusión para usuarios eliminadas exitosamente';
$string['msg:exclusion:record:user:deleted'] = 'Entrada de exclusión para el usuario \'{$a->fullname}\' exitosamente removido';
$string['msg:exclusion:record:user:inserted'] = 'Entrada de exclusión para el usuario \'{$a->fullname}\' exitosamente insertado';
$string['msg:file-not-readable'] = 'El archivo subido \'{$a}\' no es legible';
$string['msg:file-not-writeable'] = 'El archivo subido \'{$a}\' no es escribible o no puede ser eliminado';
$string['msg:file:upload:fail'] = 'El archivo subido no pudo ser guardado exitosamente. Procesamiento abortado.';
$string['msg:user:not-found'] = 'no pudo encontrarse al usuario';
$string['msg:user:suspend:failed'] = 'Usuario \'{$a->username}\' no pudo ser suspendido';
$string['msg:user:suspend:success'] = 'Usuario \'{$a->username}\' suspendido exitosamente';
$string['msg:user:unsuspend:failed'] = 'Usuario \'{$a->username}\' no pudo ser des-suspendido';
$string['msg:user:unsuspend:success'] = 'Usuario \'{$a->username}\' des-suspendido exitosamente';
$string['notify:load-exclude-list'] = 'Cargando lista de exclusión de usuario';
$string['notify:load-file'] = 'Abriendo archivo \'{$a}\\';
$string['notify:load-file-fail'] = 'No se pudo abrir archivo \'{$a}\' para lectura';
$string['notify:suspend-excluded-user'] = 'usuario: {$a->username} (id={$a->id}) está en la lista de exclusión: no suspendido';
$string['notify:suspend-user'] = 'suspendiendo al usuario: {$a->username} (id={$a->id})';
$string['notify:unknown-suspend-type'] = 'Identificador de suspensión desconocido \'{$a}\\';
$string['page:view:exclude.php:introduction'] = '<p>Esta página muestra las exclusiones configuradas.<br/>
Las exclusiones son, ya sea, usuarios o cohortes, que están completamente excluídas de cualquier procesamiento automático.<br/>
Cuando una cohorte es excluída, esto significa que todos los usuarios que sean miembros de la cohorte no serán procesados.
Use la opción en esta página para añadir cohortes o usuarios a la lista de exclusión.</p>';
$string['page:view:log.php:introduction'] = 'La tabla inferior muestra las bitácoras de estatus que les han sido dadas a los usuarios, o que procedieron como un resultado de procesamiento automático o uso de esta herramienta. Mostrará, dependiendo de su configuración, el estatus de suspensión o eliminado de sus usuarios de Moodle y el momento en el cual ciertas acciones fueron realizadas.';
$string['page:view:statuslist.php:introduction:delete'] = '<p>Esta vista general muestra las cuentas de usuario que serán eliminadas dentro del lapso_de_tiempo configurado de estas configuraciones de la herramienta</p>';
$string['page:view:statuslist.php:introduction:status'] = '<p>Esta vista general muestra los usuarios monitoreados activamente.<br/>
Los usuarios activamente monitoreados son usuarios que realmente son monitoreados (lo que significa que no están configurados para estar excluídos del monitoreo).<br/>
Así es que esta vista general difiere de la vista general del administrador en que no mostrará a <i>ningunos</i> usuarios que hayan sido excluidos del monitoreo de suspensión usando las capacidades de esta herramienta para excluir usuarios y cohortes.</p>';
$string['page:view:statuslist.php:introduction:suspended'] = '<p>Esta vista general muestra las cuentas de usuario que han sido suspendidas.</p>';
$string['page:view:statuslist.php:introduction:tosuspend'] = '<p>Esta vista general muestra las cuentas de usuario que serán suspendidas dentro del lapso_de_tiempo configurado de estas configuraciones de la herramienta</p>';
$string['pluginname'] = 'Suspensión de Usuario';
$string['privacy:metadata:tool_usersuspension_excl'] = 'Los usuarios del almacén de exclusiones de  usersuspension excluidos de suspensión automática';
$string['privacy:metadata:tool_usersuspension_log'] = 'El estado de usersuspension almacena información histórica acerca de usuarios suspendidos';
$string['privacy:metadata:tool_usersuspension:mailedto'] = 'Dirección Email del usuario restaurado';
$string['privacy:metadata:tool_usersuspension:mailsent'] = 'Si es que se ha enviado o no un Email';
$string['privacy:metadata:tool_usersuspension_status'] = 'El estado de usersuspension almacena información acerca de usuarios suspendidos';
$string['privacy:metadata:tool_usersuspension:status'] = 'Estado_de_suspensión';
$string['privacy:metadata:tool_usersuspension:timecreated'] = 'Hora en la cual se creó el registro';
$string['privacy:metadata:tool_usersuspension:type'] = 'Tipo de exclusión de suspensiones (siempre \'usuario\').';
$string['privacy:metadata:tool_usersuspension:userid'] = 'La clave primaria del usuario Moodle para el cual se ha restaurado la cuenta.';
$string['promo'] = 'plugin para suspensión-de-usuario para Moodle';
$string['promodesc'] = 'Este plugin fue escrito por Sebsoft Managed Hosting & Software Development
(<a href=\'http://www.sebsoft.nl/\' target=\'_new\'>http://sebsoft.nl</a>).<br /><br />
{$a}<br /><br />';
$string['setting:cleanlogsafter'] = 'Frecuencia para limpiar bitácoras';
$string['setting:cleanup_deleteafter'] = 'Intervalo de eliminación';
$string['setting:cleanup_interval'] = 'Intervalo para limpieaza';
$string['setting:desc:cleanlogsafter'] = 'Configurar la frecuencia después de la cual son limpiadas las bitácoras. Cualquier bitácora más antigua que esta configuración será removida automáticamente.';
$string['setting:desc:cleanup_deleteafter'] = 'Configurar intervalo en el cual los usuarios son eliminados después de la suspensión';
$string['setting:desc:cleanup_interval'] = 'Configura el intervalo en el que se realiza la limpieza';
$string['setting:desc:enablecleanlogs'] = 'Habilita o deshabilita limpieza automática de la bitácora de historia';
$string['setting:desc:enablecleanup'] = 'Habilita o deshabilita limpieza de usuarios';
$string['setting:desc:enabled'] = 'Habilita o deshabilita la utilidad para suspensión de usuario';
$string['setting:desc:enablefromfolder'] = 'Habilitar o deshabilitar la utilería de suspensión de usuario para suspender automáticamente usuarios desde un archivo CSV subido';
$string['setting:desc:enablefromupload'] = 'Habilitar o deshabilitar la utilería de suspensión de usuario a partir de una subida de archivo';
$string['setting:desc:enablesmartdetect'] = 'Habilitar o deshabilitar la detección inteligente de utilería de suspensión de usuario.';
$string['setting:desc:senddeleteemail'] = '¿ Enviar Email informándole al usuario después de ser eliminado?';
$string['setting:desc:sendsuspendemail'] = '¿ Enviar Email informándole al usuario después de ser suspendido ?';
$string['setting:desc:smartdetect_interval'] = 'Configurar intervalo en el que corre la detección inteligente';
$string['setting:desc:smartdetect_suspendafter'] = 'Configurar intervalo en el cual los usuarios son suspendidos cuando están inactivos';
$string['setting:desc:uploaddetect_interval'] = 'Configurar intervalo en el cual la carpeta de subida es revisada para ver si es que tiene archivos';
$string['setting:desc:uploadfilename'] = 'Configurar nombre_de_archivo del archivo de suspensión subido';
$string['setting:desc:uploadfolder'] = 'Configurar carpeta en donde se deberían de subir archivos por FTP';
$string['setting:enablecleanlogs'] = 'Habilitar limpieza_de_bitácoras';
$string['setting:enablecleanup'] = 'Habilitar Limpieza';
$string['setting:enabled'] = 'Habilitar';
$string['setting:enablefromfolder'] = 'Suspensión automática usando archivo guardado CSV';
$string['setting:enablefromupload'] = 'Habilitar desde subida';
$string['setting:enablesmartdetect'] = 'Habilitar detección inteligente';
$string['setting:senddeleteemail'] = '¿Enviar Email de eliminación?';
$string['setting:sendsuspendemail'] = '¿Enviar Email de suspensión?';
$string['setting:smartdetect_interval'] = 'Intervalo para detección inteligente';
$string['setting:smartdetect_suspendafter'] = 'Intervalo para suspensión por inactividad';
$string['setting:uploaddetect_interval'] = 'Intervalo de procesamiento de carpeta de subida';
$string['setting:uploadfilename'] = 'No';
$string['setting:uploadfolder'] = 'Subir carpeta';
$string['status:deleted'] = 'eliminado';
$string['status:suspended'] = 'suspendido';
$string['status:unsuspended'] = 'des-suspendido';
$string['suspensionsettings'] = 'Configuraciones de Suspensión de Usuario';
$string['suspensionsettingscleanup'] = 'Limpieza';
$string['suspensionsettingscleanupdesc'] = 'Configurar las opciones de limpieza inferiores.<br/>
El proceso de limpieza está aquí para automatizar aun más la limpieza de usuarios, lo que significa que las cuentas suspendidas serán eliminadas cuando se use esta opción. Si las cuentas de usuario deberían de ser eliminadas automáticamente después de un cierto tiempo, Usted debería de configurar estas configuraciones.
Si no se desea eliminar automáticamente cuentas de usuario, Usted debería desactivar esta opción.';
$string['suspensionsettingsdesc'] = '';
$string['suspensionsettingsfolder'] = 'Suspender desde carpeta';
$string['suspensionsettingsfolderdesc'] = 'Configurar las configuraciones de la carpeta de \'suspender desde carpeta\' debajo.<br/>
Usando estas configuraciones, Usted puede automatizar la suspensión de usuarios al subir un archivo CSV a una ubicación aleatoria del servidor
(por ejemplo, a una carpeta dedicada para subidas por FTP). El archivo CSV será procesado conforme a las configuraciones inferiores.
Nota: ¡El archivo CSV subido será eliminado después de procesarse!';
$string['suspensionsettingssmartdetect'] = 'Detección inteligente';
$string['suspensionsettingssmartdetectdesc'] = 'Configurar abajo las configuraciones de detección inteligente.<br/>
Detección inteligente efectivamente significa que las cuentas de usuarios que hayan sido encontradas \'inactivas\' de acuerdo a las configuraciones inferiores, serán suspendidas automáticamente. Corriendo solamente a un intervalo configurado, la \'detección inteligente\' determinará si es que una cuenta de usuario está o no activa de acuerdo a la configuración de \'intervalo de suspensión por inactividad\', y suspenderá a todas las cuentas de usuarios que se consideren inactivas.';
$string['suspensionsettingsupload'] = 'Suspender desde subida';
$string['suspensionsettingsuploaddesc'] = 'Ajustar las configuraciones inferiores para \'suspender desde subida\'';
$string['table:exclusions'] = 'Exclusiones';
$string['table:log:all'] = 'Bitácora_de_suspensión histórica';
$string['table:log:latest'] = 'Últimas bitácoras de suspensión';
$string['table:logs'] = 'Bitácoras';
$string['table:status:delete'] = 'Usuarios a eliminar';
$string['table:status:status'] = 'Usuarios monitorieados activamente';
$string['table:status:suspended'] = 'Usuarios suspendidos';
$string['table:status:tosuspend'] = 'Usuarios a suspender';
$string['task:delete'] = 'Tarea usersuspension: remoción automática de usuarios suspendidos';
$string['task:fromfolder'] = 'Tarea usersuspension: suspensión automática de usuarios desde archivo subido';
$string['task:logclean'] = 'Limpiar bitácoras para suspensión de usuario';
$string['task:mark'] = 'Tarea usersuspension: suspensión automática de usuarios';
$string['thead:action'] = 'Acción(es)';
$string['thead:lastlogin'] = 'Último ingreso';
$string['thead:mailedto'] = 'Email enviado a';
$string['thead:mailsent'] = 'Email enviado';
$string['thead:name'] = 'Nombre';
$string['thead:status'] = 'Estatus';
$string['thead:timecreated'] = 'Hora de creación';
$string['thead:timemodified'] = 'Hora de modificación';
$string['thead:type'] = 'Tipo';
$string['thead:userid'] = 'ID del usuario';
$string['thead:username'] = 'Nombre_de_usuario';
